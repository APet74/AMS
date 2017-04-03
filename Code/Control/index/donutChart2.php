<?php
require_once("config.php");
require_once("Control/queryFunctions.php");
$items = arrayItemObjects($dbh);
?>

<div id="morris-donut-chart2"></div>
<script>
  function graphDonut(colors){
   var colors_array = colors.split("|");
   
     Morris.Donut({
         element: 'morris-donut-chart2',
       colors: colors_array,
         data: [<?php echo generateJsonForDonut2($items); ?>],
         resize: true
     });
   console.log(colors_array);
  }
  graphDonut("#FF0000|#0061ff|#00ff87|#8d58ef|#ff4297|#ff3d23|#f4ff63|#25fc2d|#0fffeb|#1800b5|#b76916|#681077|#b2016b|#568765|#ef9ea6|#8fb205|#278e8e|#7d8ba5");
  </script>