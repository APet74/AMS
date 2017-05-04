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
                  echo "<tr><td><b>Type:</b> &nbsp;</td><td>{$obj->get("type")}</td></tr>";
                  echo "<tr><td><b>Retired Status:</b> &nbsp;</td><td>{$retired}</td></tr>";
                  echo "<tr><td><b>Warranty Expiration:</b> &nbsp;</td><td>{$obj->get("warrantyExp")}</td></tr>";
                  echo "<tr><td><b>Manufacturer:</b> &nbsp;</td><td>{$obj->get("manufacturer")}</td></tr>";
                  echo "<tr><td><b>Price:</b> &nbsp;</td><td>\${$obj->get("price")}</td></tr>";
                  echo "<tr><td><b>Serial Number:</b> &nbsp;</td><td>{$obj->get("serialNum")}</td></tr>";
                  echo "<tr><td><b>Entered By:</b> &nbsp;</td><td>{$obj->get("createdBy")}</td></tr>";
                  echo "<tr><td><b>Current User:</b> &nbsp;</td><td>{$obj->get("currentUser")}</td></tr>";
                  echo "<tr><td><b>Date Entered:</b> &nbsp;</td><td>{$obj->get("dateEntered")}</td></tr>";
                  echo "<tr><td><b>Description:</b> &nbsp;</td><td>{$obj->get("description")}</td></tr>";
                  if($obj->get("computer") != NULL){
                        echo "<tr><td><b>Computer Name:</b> &nbsp;</td><td>{$obj->get("computer")->get("computerName")}</td></tr>";
                        echo "<tr><td><b>Operating System:</b> &nbsp;</td><td>{$obj->get("computer")->get("operatingSys")}</td></tr>";
                  }
                  if($_SESSION['status'] == 2){
                        echo "<tr><td colspan='2'><input type='hidden' name='itemID' id='itemID' value='{$obj->get("itemID")}'><button class='btn btn-info' id='editAsset'>Edit Asset</button></td></tr>";
                  }
            echo "</table>";
      echo "</div>";
echo "</div>";
?>