<?php
require_once("config.php");
$obj = getSingleObject($_GET['id'], $dbh);
if($obj->get("retiredStatus") == 0 ){
      $retired = "No";
} else {
      $retired = "Yes";
}
echo "<div class='row'>";
      echo "<div class='col col-md-6'>";
            echo "<table>";
                  echo "<tr><td><b>Retired Status:</b> &nbsp;</td><td>{$retired}</td></tr>";
                  echo "<tr><td><b>Warranty Experation:</b> &nbsp;</td><td>{$obj->get("warrantyExp")}</td></tr>";
                  echo "<tr><td><b>Manufacturer:</b> &nbsp;</td><td>{$obj->get("manufacturer")}</td></tr>";
                  echo "<tr><td><b>Price:</b> &nbsp;</td><td>\${$obj->get("price")}</td></tr>";
            echo "</table>";
      echo "</div>";
            
      echo "<div class='col-md-6'>";
            echo "<table>";
                  echo "<tr><td><b>Serial Number:</b> &nbsp;</td><td>{$obj->get("serialNum")}</td></tr>";
                  echo "<tr><td><b>Description:</b> &nbsp;</td><td>{$obj->get("description")}</td></tr>";
                  if($obj->get("computer") != NULL){
                        echo "<tr><td><b>Computer Name:</b> &nbsp;</td><td>{$obj->get("computer")->get("computerName")}</td></tr>";
                        echo "<tr><td><b>Operating System:</b> &nbsp;</td><td>{$obj->get("computer")->get("operatingSys")}</td></tr>";
                  }
                  echo "<tr><td colspan='2'><input type='hidden' name='itemID' id='itemID' value='{$obj->get("itemID")}'><button class='btn btn-info' id='editAsset'>Edit Asset</button></td></tr>";
            echo "</table>";
      echo "</div>";
echo "</div>";
?>