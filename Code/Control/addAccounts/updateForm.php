<?php
require_once("config.php");
require_once("Control/queryFunctions.php");
?>
<div class="col-md-4">
    <div class="content">
        <form id="addForm" method="POST" action="Control/addAccounts/updateAccount.php">
        <h4>Update Password</h4>
        <table style="border-collapse: separate;border-spacing: 0 1em;">
            <tr>
                <td><label>Account Username&nbsp;</label></td><td><select name="username" id="accountLevel" required>
                    <?php getAccounts($dbh); ?>
                </select></td>
            </tr>
            <tr>
                <td><label>New Password &nbsp;</label></td><td><input type="password" name="password" id="password" required maxlength="32"></td>
            </tr>
            <tr>
                <td><label>Confirm Password</label></td><td><input type="password" name="passwordConf" required maxlength="32"></td>
            </tr>
        </table>
            <input type="submit" name="submit" value="Update User" class="btn btn-info">
        </form>
    </div>
</div>

<div class="col-md-4">
    <div class="content">
        <form id="addForm" method="POST" action="Control/addAccounts/deleteAccount.php">
        <h4>Delete Account</h4>
        <table style="border-collapse: separate;border-spacing: 0 1em;">
            <tr>
                <td><label>Account Username&nbsp;</label></td><td><select name="username" id="accountLevel" required>
                    <?php getAccounts($dbh); ?>
                </select></td>
            </tr>
        </table>
            <input type="submit" name="submit" value="Delete User" class="btn btn-warning">
        </form>
    </div>
</div>