  

  welcome admin


 <html>
  <head>

    <style>
    html, body, #container {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}
.chart-list{
  text-align: center;
  width:100%;
  margin-bottom: 40px;
}

 </style>

       <title>JavaScript Pie Chart</title>
      <script src="https://cdn.anychart.com/js/8.0.1/anychart-core.min.js"></script>
      <script src="https://cdn.anychart.com/js/8.0.1/anychart-pie.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div id="container" style="width: 100%; height: 70%"></div>
    <script>
  anychart.onDocumentReady(function() {

    // set the data
      var data = [
        {x: "class1", value: 50553265},
        {x: "class2", value: 26929319},
        {x: "class3", value: 16032248},
        {x: "class4", value: 20032248},
        {x: "class5", value: 30032248},
        {x: "class6", value: 15032248},
        {x: "class7", value: 40032248},
        {x: "class8", value: 12032248},
        {x: "class9", value: 14032248},
        {x: "class10", value: 19032248},
      ];

      // create the chart
      var chart = anychart.pie();

     // set the chart title
    chart.title("Pie Chart");

    // add the data
    chart.data(data);
    
    // set legend position
   chart.legend().position("top");
    // set items layout
   chart.legend().itemsLayout("horizontal");

    // display the chart in the container
    chart.container('container');
    chart.draw();

  });


</script>
  
  </body>
  <div class="chart-list">
        <p>20.7% class1</p>
        <p>11.0% class2</p>
        <p>6.6% class3</p>
        <p>8.2% class4</p>
        <p>12.3% class5</p>  
        <p>6.2% class6</p>
        <p>16.5% class7</p>
        <p>4.9% class8</p>
        <p>5.8% class9</p>
        <p>7.8% class10</p>     
  </div>
</html>

