<?php
require_once("config.php");
$arrayOfItems = arrayItemObjects($dbh);
foreach($arrayOfItems as $item){
	var_dump($item);
	echo "<br>";
	echo "<br>";
}


?>
<table class="table table-striped table-inverse" id="assetTable">
                <thead class="hidden-sm-down">
                    <tr>
                        <th>Item Type</th>
                        <th>Computer Name</th>
                        <th>Location</th>
                        <th>Current User</th>
                        <th>Created By</th>
                        <th>Expand</th>
                    </tr>
                </thead>
                <tbody>
                	<?php 
                		foreach($arrayOfItems as $item){
                        	echo "<tr>";
                        	echo "    <td class='hidden-sm-down'>{$item->get("type")}</td>";
                        	if($item->get("computer") == NULL){
                        		echo "<td><center>-</center<</td>";
                        	}else{
                        		echo "    <td class='hidden-xs-down'>{$item->get("computer")->get("computerName")}</td>";
                        	}
                        	echo "    <td>76561197991104387</td>";
                        	echo "    <td>";
                        	echo "        <button class='accordian'><i class='fa fa-chevron-down'></i></button>";
                        	echo "    </td>";
                        	echo "</tr>";
                        	echo "<tr class='under-table' style='display:none;'>";
                        	echo "    <td colspan='6'>";
                        	echo "      <div class='row'>";
                        	echo "       </div>";
                        	echo "    </td>";
                        	echo "</tr>";
                     	}
                    ?>
                </tbody>
            </table>