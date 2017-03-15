<?php 
require_once("config.php");
$arrayOfItems = getLast10($dbh);

?>
<table id="assetTable" class="stripe hover order-column row-border" cellspacing="0" width="100%">
	<thead>
        <tr>
            <th><center>Item Type</center></th>
            <th><center>Computer Name</center></th>
            <th><center>Location</center></th>
            <th><center>Current User</center></th>
            <th><center>Created By</center></th>
        </tr>
    </thead>
    <tbody>
    <?php 
    	foreach($arrayOfItems as $item){
    		echo "<tr>";
    		echo "<td>{$item->get('type')}</td>";
    		if($item->get("computer") == NULL){
    			echo "<td>-</td>";
    		}else{
    			echo "<td>{$item->get('computer')->get('computerName')}</td>";
    		}
    		echo "<td>{$item->get('location')}</td>";
    		echo "<td>{$item->get('currentUser')}</td>";
    		echo "<td>{$item->get('createdBy')}</td>";
    		echo "</tr>";
    	}
    ?>
    </tbody>
    <tfoot>
    	<tr>
            <th><center>Item Type</center></th>
            <th><center>Computer Name</center></th>
            <th><center>Location</center></th>
            <th><center>Current User</center></th>
            <th><center>Created By</center></th>
        </tr>
    </tfoot>
</table>
