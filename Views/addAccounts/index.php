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
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        Pegboard Links
                                        <b class="caret"></b>
                                    </p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="../index.php">Home</a></li>
                                <li><a href="../showOrg.php">Show Org</a></li>
                                <li><a href="../trouble.php">Service Requests</a></li>
                                <li><a href="../myTickets.php">My Requests</a></li>
                                <li><a href="../ticketAdmin.php">Manage Service Tickets</a></li>
                                <li class="divider"></li>
                                <li><a href="http://www.region5systems.net/" target="_blank">RVS Public Website</a></li>
                                <li><a href='http://intranet.region5systems.net/' target='_blank'>RVS Intranet Site</a></li>
                                <li><a href="http://outlook.office365.com" target="_blank">Office 365</a></li>
                                <li><a href="http://region5.training.reliaslearning.com/" target="_blank">Relias Trainings</a></li>
                                <li><a href="http://doodle.com" target="_blank">Do a Doodle</a></li>
                                <li><a href="http://familiesinspiringfamilies.org" target="_blank">FIF</a></li>
                                <li><a href="http://hsfed.org/" target="_blank">HSF</a></li>
                                <li><a href="http://mha-ne.org/" target="_blank">MHA</a></li>
                                

                              </ul>
                        </li>
                        <li>
                            <a href="login.php">
                                <p>Log out</p>
                            </a>
                        </li>
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
                                                <td><label>Account Type&nbsp;</label></td><td><select name="accountLevel" id="accountLevel">
                                                    <option></option>
                                                    <option value=1> General</option>
                                                    <option value=2> Admin</option>
                                                </select></td>
                                            </tr>
                                            <tr>
                                                <td><label>Email &nbsp;</label></td><td><input type="text" name="email" id="email"></td>
                                            </tr>
                                            <tr>
                                                <td><label>Username &nbsp;</label></td><td><input type="text" name="username" id="username"></td>
                                            </tr>
                                            <tr>
                                                <td><label>Password &nbsp;</label></td><td><input type="password" name="password" id="password"></td>
                                            </tr>
                                            <tr>
                                                <td><label>Password Confirm &nbsp;</label></td><td><input type="passwordConf" name="password" id="password"></td>
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



