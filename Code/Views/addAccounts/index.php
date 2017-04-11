<div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="addAccounts.php">Create Accounts</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="index.php" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <?php 
                        if($_SESSION['status'] == 2){
                        echo "<li>";
                        echo   "<a href='addAccounts.php'>";
                        echo       "<p>Admin</p>";
                        echo    "</a>";
                        echo "</li>";
                        }
                        ?>
                        <?php 
                            require_once("Views/header/header.php")
                        ?>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <?php
                                    if(isset($_GET['Msg'])){
                                        echo "<center><h2 style='color:rgb(58, 186, 58);'><B>{$_GET['Msg']}</b></h2></center>";
                                    }
                                ?>
                                <h4 class="title">Create Account</h4>
                                <p class="category">Create users of different types here.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="content">
                                    <h4>Add Account</h4>
                                        <form id="addForm" method="POST" action="Control/addAccounts/newAcc.php">
                                        <table style="border-collapse: separate;border-spacing: 0 1em;">
                                            <tr>
                                                <td><label>Account Type&nbsp;</label></td><td><select name="accountLevel" id="accountLevel" required>
                                                    <option></option>
                                                    <option value=1> General</option>
                                                    <option value=2> Admin</option>
                                                </select></td>
                                            </tr>
                                            <tr>
                                                <td><label>Email &nbsp;</label></td><td><input type="text" name="email" id="email"  required maxlength="128"></td>
                                            </tr>
                                            <tr>
                                                <td><label>Username &nbsp;</label></td><td><input type="text" name="username" id="username" required maxlength="64"></td>
                                            </tr>
                                            <tr>
                                                <td><label>Password &nbsp;</label></td><td><input type="password" name="password" id="password" required maxlength="32"></td>
                                            </tr>
                                            <tr>
                                                <td><label>Password Confirm &nbsp;</label></td><td><input type="password" name="passwordConf" id="password" required maxlength="32"></td>
                                            </tr>
                                        </table>
                                            <input type="submit" name="submit" value="Add User" class="btn btn-danger">
                                        </form>
                                    </div>
                                </div>
                                    <?php require_once("Control/addAccounts/updateForm.php"); ?>
                                </div>
                            </div>
                                
                        </div>
                    </div>
                </div>
            </div>



