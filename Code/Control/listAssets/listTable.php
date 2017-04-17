<?php
require_once("config.php");
$arrayOfItems = arrayItemObjects($dbh);
// foreach($arrayOfItems as $item){
// 	var_dump($item);
// 	echo "<br>";
// 	echo "<br>";
// }
$data = generateAjax($arrayOfItems, "txt/ajaxList.txt");

?>


<table id="assetTable" class="stripe hover order-column row-border" cellspacing="0" width="100%">
	<thead>
        <tr>
        	<th width="50px"></th>
            <th><center>Item Type</center></th>
            <th><center>Computer Name</center></th>
            <th><center>Location</center></th>
            <th><center>Current User</center></th>
            <th><center>Created By</center></th>
        </tr>
    </thead>
    <tfoot>
    	<tr>
    		<th></th>
            <th><center>Item Type</center></th>
            <th><center>Computer Name</center></th>
            <th><center>Location</center></th>
            <th><center>Current User</center></th>
            <th><center>Created By</center></th>
        </tr>
    </tfoot>
</table>