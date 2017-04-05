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
            <tr><td><label>Location:</label></td><td><input type="text" name="location" <?php echo "value='{$item->get('location')}'"; ?> required maxlength="256"></td></tr>
            <tr><td><label>Current User:</label></td><td><input type="text" name="currentUser" <?php echo "value='{$item->get('currentUser')}'"; ?> required maxlength="256"></td></tr>
            <tr><td><label>Price:</label></td><td><input type="text" name="price" <?php echo "value='{$item->get('price')}'"; ?> required maxlength="256"></td></tr>
            <tr><td><label>Manufacturer:</label></td><td><input type="text" name="manufacturer" <?php echo "value='{$item->get('manufacturer')}'"; ?> maxlength="256"></td></tr>
            <tr><td><label>Serial Number:&nbsp;&nbsp;</label></td><td><input type="text" name="serialNum" <?php echo "value='{$item->get('serialNum')}'"; ?> maxlength="256"></td></tr>
        </table>
    </div>
    <div class="col col-md-6">
        <table>
        <tr><td><label>Warranty Experation:&nbsp;&nbsp;</label></td><td><input type="text" name="warrantyExp" <?php echo "value='{$item->get('warrantyExp')}'"; ?>></td></tr>
        <tr><td><label>Retired Status:</label></td><td>
            <select name="retiredStatus">
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
                echo "<tr><td><label>Computer Name:</lable></td><td><input type='text' name='computerName' value='{$item->get('computer')->get('computerName')}' required maxlength='512'></td></tr>";
                echo "<tr><td><label>operating System:</label></td><td><input type='text' name='operatingSys' value='{$item->get('computer')->get('operatingSys')}' required maxlength='512'></td></tr>";
            }
        ?>
        <tr><td><label>Description:</label></td><td><textarea name='description' maxlength="4096"><?php echo $item->get("description"); ?></textarea></td></tr>
        <tr><td colspan="2"><input type="submit" name="submit" value="Update" class="btn btn-success"></td></tr>
        
        </table>
    </div>
</form>
<div class="row">
    <div class="col col-md-12">
        <br>
        <hr>
        <br>
        <center><b><p>If an asset is no longer in use but remains in the building in storage please do not delete the asset, deleting assets will remove all logs of that asset exisiting. Deleting should only be done if you find that you have entered the same asset twice or that an asset has been thrown out and you no longerw wish to keep the asset in the system.</p></b></center>
        <center><a href="Control/listAssets/delete.php?ID=<?php echo $_POST['aID']; ?>" onclick="return confirm('Are you sure?')"><button class="btn btn-info" id="deleteAsset">Delete Asset</button></a></center>
    </div>
</div>
</div>
