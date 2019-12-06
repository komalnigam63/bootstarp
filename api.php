<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Category;
use App\Mail\ForgotPassword;
use App\PasswordReset;
use App\PostCategory;
use App\Posts;
use Carbon\Carbon;
use DB;
use Mail;
use Illuminate\Support\Facades\Validator;


class ApiController extends Controller
{

    protected function errorJson($message, $code, $data = [])
    {
        return response()->json([
            'code' => '201',
            'message' =>  $message,
            'data' => $data
        ], $code);
    }
    protected function successJson($message, $data = [])
    {
        return response()->json([
            'code' => '200',
            'message' =>  $message,
            'data' => $data
        ], 200);
    }
    protected function generateOtp()
    {

        // Generating random otp of 6 digits
        $otp_string = '123456789';
        $otp = substr(str_shuffle($otp_string), 0, 6);
        return $otp;
    }



    function registration(Request $request)
    {

        $name = $request->name;
        $email = $request->email;
        $contact = $request->contact;
        $address = $request->address;
        //return $contact;
        $password = bcrypt($request->password);
        $device_id = $request->device_id;
        $device_type = $request->device_type;

        // return $phone ;

        $user = User::create([

            'name' => $name,
            'email' => $email,
            'password' => $password,
            'device_id' => $device_id,
            'device_type' => $device_type,
            'phone' => $contact,
            'role' => 'user',
            'address' => $address
        ]);

        if ($user) {

            $response_array['code'] = '200';
            $response_array['message'] = 'New record created successfully';
            echo json_encode($response_array);
        } else {

            $response_array['code'] = '201';
            $response_array['message'] = "Error: " . $sql . "<br>" . $conn->error;
            echo json_encode($response_array);
        }
    }



    function updateProfile(Request $request)
    {

        $id = $request->id;
        $name = $request->name;
        $contact = $request->contact;
        $address = $request->address;
        // return $contact ;
        $user = User::where('id', $id)
       ->update([
        'name' => $request->name,
        'address' => $request->address,
        'phone' => $contact,
        
        ]);

        if($user){
         return $this->successJson('profile Updated Successfully');
          }else {

            $response_array['code'] = '201';
            $response_array['message'] = "Error: " . $sql . "<br>" . $conn->error;
            echo json_encode($response_array);
        }

    }

    //

    function login(Request $request)
    {

        //return $request;

        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'device_id' => 'required|string',
            'device_type' => 'required|string'

        ]);

        $credentials = request(['email', 'password']);
        $credentials['status'] = 1;

        if (!Auth::attempt($credentials))
            return response()->json([
                'code' => '201',
                'message' => 'Unauthorized'
            ], 401);
        $user = $request->user();
        // return $user;
        $user->device_id = $request->device_id;
        $user->device_type = $request->device_type;
        $user->save();
        //   return $user;

        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        //  return $token;

        $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        // return $token;
        return response()->json([
            'user' => $request->user(),
            'code' => '200',
            'message' => 'Login successful!!'
        ], 201);
    }


    
    function forgotPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:users,email',


        ]);

        if ($validator->fails()) {
            return $this->errorJson('Validation errors.', 422, $validator->errors());
        }
        $email = $request->email;
        $otp = $this->generateOtp();

        //    Mail::to($email)->send(new ForgotPassword($otp));
        $password_reset =  DB::table('password_resets')->insert(
            ['email' => $email, 'token' => $otp]
        );

        // $password_reset =   PasswordReset::create(

        //     [
        //         'email' => $email,
        //         'token' => $otp ?? '',
        //     ]
        // );
        if ($password_reset) {
            return $this->successJson('Password Reset Requested Successfully.', $password_reset);
        }
    }


    function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:users,email',
            'password' => 'required',
            'confirm_password' => 'required',
            'token' => 'required'

        ]);

        if ($validator->fails()) {
            return $this->errorJson('Validation errors.', 422, $validator->errors());
        }
        $email = $request->email;
        $token = $request->token;
        $password = $request->password;
        $confirmpassword = $request->confirm_password;
        // return $request->all();
        $reset =  PasswordReset::where('email', $email)->where('token', $token)->first();
        if ($reset) {
            if ($password == $confirmpassword) {
                $password = bcrypt($password);

                $update =  User::updateOrCreate([
                    'email' => $email,

                ], [
                    'password' => $password
                ]);

                PasswordReset::where('email', $email)->where('token', $token)->delete();
                if ($update) {
                    return $this->successJson('Password Updated Successfully');
                }
            } else {
                return response()->json([
                    'code' => 'error',
                    'message' =>  'Password and Confirm Password Not Match.'
                ], 201);
            }
        } else {
            return response()->json([
                'code' => 'error',
                'message' =>  'Reset Password Token Not Match.'
            ], 201);
        }
    }



    function services(Request $request)
    {

        $categories = Category::with('posts')->get();
        if(count($categories)){

        return $this->successJson('Successfully.', $categories);

        }else{
 
        return response()->json([
                'code' => '201',
                'message' =>  'Data not found.'
            ], 201);

        }
  
    }
}