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
                    <a class="navbar-brand" href="reports.php">Reports</a>
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
               <div class="panel-group" id="accordion1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne"><i class="fa fa-search" aria-hidden="true"></i> Standard reports
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">Panel 1</div>
                        </div>
                    </div>
                    <form method="POST" action="creport.php">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo"><i class="fa fa-cogs" aria-hidden="true"></i> Custom Reports
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                            <div class="panel-body">

                                <div class="panel-group" id="accordion2">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThreeOne">Asset Types:
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThreeOne" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col col-md-3"> <input type="checkbox" name="bookShelveC"> BookShelves</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="computerC"> Computer</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="confRoomChairC"> Conference Room Chair</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="confRoomTableC"> Conference Room Table</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col col-md-3"> <input type="checkbox" name="credenzaC"> Credenza</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="deskC"> Desk</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="deskChairC"> Desk Chair</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="fileCab2C"> File Cabinet 2 Drawer</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col col-md-3"> <input type="checkbox" name="fileCab3C"> File Cabinet 3 Drawer</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="fileCab4C"> File Cabinet 4 Drawer</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="fileCab5C"> File Cabinet 5 Drawer</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="lampC"> Lamp</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col col-md-3"> <input type="checkbox" name="laptopC"> Laptop</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="officeChairC"> Office Chair</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="phoneC"> Phone</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="printerC"> Printer</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col col-md-3"> <input type="checkbox" name="speakC"> Speaker</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="tableC"> Table</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="otherC"> Other</div>
                                                    <div class="col col-md-3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThreeTwo">Entered By:
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThreeTwo" class="panel-collapse collapse">
                                            <div class="panel-body">Entered By:</div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThreeThree">Location:
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThreeThree" class="panel-collapse collapse">
                                            <div class="panel-body">Location:</div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThreeFour">Retired Status:
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThreeFour" class="panel-collapse collapse">
                                            <div class="panel-body">Retired Status:</div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThreeFive">Current User:
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThreeFive" class="panel-collapse collapse">
                                            <div class="panel-body"></div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThreeSix">Price:
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThreeSix" class="panel-collapse collapse">
                                            <div class="panel-body"></div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThreeSeven">Warrenty Status:
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThreeSeven" class="panel-collapse collapse">
                                            <div class="panel-body"></div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThreeEight">Date Entered:
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThreeEight" class="panel-collapse collapse">
                                            <div class="panel-body"></div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThreeNine">Manufacturer:
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThreeNine" class="panel-collapse collapse">
                                            <div class="panel-body"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

                </div>
            </div>
        </div>
</div>