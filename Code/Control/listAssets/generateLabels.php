<style type="text/css">
@media print{
  body{ background-color:#FFFFFF; background-image:none; color:#000000 }
  #ad{ display:none;}
  #leftbar{ display:none;}
  #contentarea{ width:100%;}
}
</style>
<table cellspacing="53">
<?php
require_once("../../config.php");

$arrayOfObjs = arrayItemObjects($dbh);
$counter = 0;
foreach($arrayOfObjs as $obj){
	if($counter == 0){
		echo "<tr>";
		echo "<td style='width:3in;border: 1px solid black;'>";
		if($obj->get('type') == "Computer" || $obj->get('type') == "Laptop"){
			$computerName = $obj->get("computer")->get("computerName");
		}else{
			$computerName = "Property of RVS";
		}
		echo "<table>";
		echo "<tr><td><img src='https://chart.googleapis.com/chart?chs=75x75&cht=qr&chl=http%3A%2F%2Fpetrzilkacoding.com/AMS/viewAsset.php?id={$obj->get("itemID")}' /></td>";
		echo "<td><img src='../../img/rvsLogo.png' width='100px' style='float:right;' /></td></tr>";
		echo "<tr><td>{$obj->get('itemID')}</td><td><center>" . $computerName . "</center></td></tr></table>";
		echo "</td>";
		$counter++;
		
	}else{
		echo "<td style='width:3in;border: 1px solid black;'>";
		if($obj->get('type') == "Computer" || $obj->get('type') == "Laptop"){
			$computerName = $obj->get("computer")->get("computerName");
		}else{
			$computerName = "Property of RVS";
		}
		echo "<table>";
		echo "<tr><td><img src='https://chart.googleapis.com/chart?chs=75x75&cht=qr&chl=http%3A%2F%2Fpetrzilkacoding.com/AMS/viewAsset.php?id={$obj->get("itemID")}' /></td>";
		echo "<td><img src='../../img/rvsLogo.png' width='100px' style='float:right;' /></td></tr>";
		echo "<tr><td>{$obj->get('itemID')}</td><td><center>" . $computerName . "</center></td></tr></table>";
		echo "</td>";
		echo "</tr>";
		$counter = 0;
	}
}

?>


</table>