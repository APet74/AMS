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
                    <a class="navbar-brand" href="index.php">Dashboard</a>
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
                        echo   "<a href='admin.php'>";
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
                            <a href="../login.php">
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
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Asset Status</h4>
                                <p class="category">Current breakdown of active vs non-active assets</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Active
                                        <i class="fa fa-circle text-danger"></i> Retired
                                        <i class="fa fa-circle text-warning"></i> Unknown
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated on load
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Assets by Date</h4>
                                <p class="category">amount of each type of asset added by date.</p>
                            </div>
                            <div class="content">
                                <div id="chartHours" class="ct-chart"></div>
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Computer
                                        <i class="fa fa-circle text-danger"></i> Furniture
                                        <i class="fa fa-circle text-warning"></i> Other
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated on load
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Last Added</h4>
                                <p class="category">Lsat assets added.</p>
                            </div>
                            <div class="content">
                                <!-- TODO add 10 last added assets here -->

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> 10 last items added.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Tasks</h4>
                                <p class="category">Items to Inventory</p>
                            </div>
                            <div class="content">
                                <div class="table-full-width">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="" data-toggle="checkbox">
                                                    </label>
                                                </td>
                                                <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                          
                                        </tbody>
                                    </table>
                                </div>

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.region5systems.net/">Region V Systems</a>
                </p>
            </div>
        </footer>

    </div>