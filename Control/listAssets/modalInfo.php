<?php

require_once("../../config.php");
$item = getSingleObject($_POST['aID'], $dbh);

?>

<div class="row">
<form method="POST" action="Control/listAssets/update.php" id='updateForm'>
    <div class="col col-md-6">
        <input type="hidden" name="itemID" value="<?php echo $_POST['aID']; ?>">
        <table>
            <tr><td><label>Item Type:</label></td><td><input type="text" name="itemType" <?php echo "value='{$item->get('type')}'"; ?> disabled></td></tr>
            <tr><td><label>Location:</label></td><td><input type="text" name="location" <?php echo "value='{$item->get('location')}'"; ?>></td></tr>
            <tr><td><label>Current User:</label></td><td><input type="text" name="currentUser" <?php echo "value='{$item->get('currentUser')}'"; ?>></td></tr>
            <tr><td><label>Price:</label></td><td><input type="text" name="price" <?php echo "value='{$item->get('price')}'"; ?>></td></tr>
            <tr><td><label>Manufacturer:</label></td><td><input type="text" name="manufacturer" <?php echo "value='{$item->get('manufacturer')}'"; ?>></td></tr>
            <tr><td><label>Serial Number:&nbsp;&nbsp;</label></td><td><input type="text" name="serialNum" <?php echo "value='{$item->get('serialNum')}'"; ?>></td></tr>
        </table>
    </div>
    <div class="col col-md-6">
        <table>
        <tr><td><label>Warranty Experation:&nbsp;&nbsp;</label></td><td><input type="text" name="warrantyExp" <?php echo "value='{$item->get('warrantyExp')}'"; ?>></td></tr>
        <tr><td><label>Retired Status:</label></td><td>
            <select name="reitredStatus">
                <?php 
                    if($item->get("reitredStatus") == 1){
                        echo "<option value='yes'>Yes</option><option value='no'>No</option>";
                    }else{
                        echo "<option value='no'>No</option><option value='yes'>Yes</option>";
                    }
                    ?>
            </select>
        </td></tr>
        <?php
            if($item->get("computer") != NULL){
                echo "<input type='hidden' name='computerID' value='{$item->get('computer')->get('computerID')}' >";
                echo "<tr><td><label>Computer Name:</lable></td><td><input type='text' name='computerName' value='{$item->get('computer')->get('computerName')}'></td></tr>";
                echo "<tr><td><label>operating System:</label></td><td><input type='text' name='operatingSys' value='{$item->get('computer')->get('operatingSys')}'></td></tr>";
            }
        ?>
        <tr><td><label>Description:</label></td><td><textarea name='description'><?php echo $item->get("description"); ?></textarea></td></tr>
        <tr><td colspan="2"><input type="submit" name="submit" value="Update" class="btn btn-success"></td></tr>
        </table>
    </div>
</form>
</div>
