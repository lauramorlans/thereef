<html>
<head>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
    console.log("go");
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

      	var data = new google.visualization.DataTable();

        var recupdatas=$.ajax({url: "<?php echo base_url() ?>Manifestations/datagraph/<?php echo $manif ?>", datatype:"json", async:false}).responseText;

        var data = new google.visualization.DataTable(recupdatas);

        var options = {
          'title': 'Mon graphique',
           'width':400,
           'height':300,
           is3D:true
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
</head>
  <body>
    <div id="piechart"></div>
  </body>
</html>