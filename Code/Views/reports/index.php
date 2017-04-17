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
                    <form method="POST" action="Control/report/creport.php">
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
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThreeOne"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Asset Types:
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThreeOne" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col col-md-3"> <input type="checkbox" name="type[]" value="BookShelves"> BookShelves</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="type[]" value="Computer"> Computer</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="type[]" value="Conference Room Chair"> Conference Room Chair</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="type[]" value="Conference Room Table"> Conference Room Table</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col col-md-3"> <input type="checkbox" name="type[]" value="Credenza"> Credenza</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="type[]" value="Desk"> Desk</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="type[]" value="Desk Chair"> Desk Chair</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="type[]" value="File Cabinet 2 Drawer"> File Cabinet 2 Drawer</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col col-md-3"> <input type="checkbox" name="type[]" value="File Cabinet 3 Drawer"> File Cabinet 3 Drawer</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="type[]" value="File Cabinet 4 Drawer"> File Cabinet 4 Drawer</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="type[]" value="File Cabinet 5 Drawer"> File Cabinet 5 Drawer</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="type[]" value="Lamp"> Lamp</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col col-md-3"> <input type="checkbox" name="type[]" value="Laptop"> Laptop</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="type[]" value="Office Chair"> Office Chair</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="type[]" value="Phone"> Phone</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="type[]" value="Printer"> Printer</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col col-md-3"> <input type="checkbox" name="type[]" value="Speaker"> Speaker</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="type[]" value="Table"> Table</div>
                                                    <div class="col col-md-3"> <input type="checkbox" name="type[]" value="Other"> Other</div>
                                                    <div class="col col-md-3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThreeTwo">
                                                <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Entered By:
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThreeTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                
                                                <?php
                                                    require_once("Control/report/superUser.php");
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThreeThree"><i class="fa fa-building" aria-hidden="true"></i>&nbsp;Location:
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThreeThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <?php
                                                    require_once("Control/report/Locs.php");
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThreeFour"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Retired Status:
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThreeFour" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="cl-md-12">
                                                    <label>Retired: &nbsp;</label><select name="retiredStatus"><option></option><option value="1">Yes</option><option value="0">No</option></select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThreeFive"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Current User:
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThreeFive" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <?php
                                                    require_once("Control/report/currentUsers.php");
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThreeSix"><i class="fa fa-usd" aria-hidden="true"></i>&nbsp;Price:
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThreeSix" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p><b>If you want assets greater than a certain price only fill in the first box, if you want assets less than a certain price only fill in the second box, if you want assets between a price fill in both boxes.</b></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Price: &nbsp; </label><input type='text' name='priceLow' placeholder="Greater Than"> <b> &nbsp; < &nbsp; (Less than) &nbsp;</b><input type='text' name='priceHigh' placeholder="Less Than">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThreeSeven"><i class="fa fa-bug" aria-hidden="true"></i>&nbsp;Warrenty Status:
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThreeSeven" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="cl-md-12">
                                                    <label>Warrenty Status: &nbsp;</label><select name="warrentyStatus"><option></option><option value="1">Yes</option><option value="0">No</option></select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThreeEight"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;Date Entered:
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThreeEight" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <label>Date Entered: &nbsp; </label><input type='date' name='dateFirst' value="2017-01-01"> <b> &nbsp; Between &nbsp; </b><input type='date' id="date" name='dateSecond' >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThreeNine"><i class="fa fa-wrench" aria-hidden="true"></i>&nbsp;Manufacturer:
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThreeNine" class="panel-collapse collapse">
                                            <div class="panel-body"><?php
                                                    require_once("Control/report/manufacturers.php");
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-danger" value='Generate Report'>
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