<?php
require_once("config.php");
require_once("Control/queryFunctions.php");
$items = arrayItemObjects($dbh);
?>
<div id="morris-donut-chart"></div>
<script>
  function graphDonut(colors){
   var colors_array = colors.split("|");
   
     Morris.Donut({
         element: 'morris-donut-chart',
       colors: colors_array,
         data: [<?php echo generateJsonForDonut($items); ?>],
         resize: true
     });
   console.log(colors_array);
  }
  graphDonut("#FF0000|#0061ff");
</script>