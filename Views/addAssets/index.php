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
                    <a class="navbar-brand" href="addAssets.php">Add Assets</a>
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
                        if($_SESSION['admin'] == 1){
                        echo "<li>";
                        echo   "<a href=''>";
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Asset</h4>
                                <p class="category">Add various types of assets here.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="content">
                                        <form id="addForm" method="POST" action="Control/addAssets/add.php">
                                        <table style="border-collapse: separate;border-spacing: 0 1em;">
                                            <tr>
                                                <td><label>Item Type &nbsp;</label></td><td><select name="assetType" id="assetType">
                                                    <option></option>
                                                    <option value="BookShelves"> BookShelves</option><option value="Cart"> Cart</option>
                                                    <option value="Computer"> Computer</option>
                                                    <option value="Conference Room Chair"> Conference Room Chair</option>
                                                    <option value="Credenza"> Credenza</option>
                                                    <option value="Desk"> Desk</option>
                                                    <option value="Desk Chair"> Desk Chair</option>
                                                    <option value="File Cabinet 2 drawer"> File Cabinet 2 drawer</option>
                                                    <option value="File Cabinet 3 drawer"> File Cabinet 3 drawer</option>
                                                    <option value="File Cabinet 4 drawer"> File Cabinet 4 drawer</option>
                                                    <option value="File Cabinet 5 drawer"> File Cabinet 5 drawer</option>
                                                    <option value="Lamp"> Lamp</option>
                                                    <option value="Laptop"> Laptop</option>
                                                    <option value="Office Chair"> Office Chair</option>
                                                    <option value="Phone"> Phone</option>
                                                    <option value="Printer"> Printer</option>
                                                    <option value="Speaker">Speaker</option>
                                                    <option value="Table"> Table</option>
                                                    <option value="Other"> Other</option>
                                                </select></td>
                                            </tr>  
                                            <tr class="hideComputer" style="display:none;">
                                                <td class="hideComputer" style="display:none;"><label class="hideComputer" style="display:none;">Computer Name &nbsp;</label></td><td><input type="text" name="computerName" id="computerName" class="computerName hideComputer" style="display:none;"></td>
                                            </tr>
                                            <tr class="hideComputer" style="display:none;">
                                                <td class="hideComputer" style="display:none;"><label class="hideComputer" style="display:none;">Operating System &nbsp;</label></td><td><input type="textoperatingSystem" id="operatingSystem" class="operatingSystem hideComputer" style="display:none;"></td>
                                            </tr>
                                            <tr>
                                                <td><label>Location &nbsp;</label></td><td><input type="text" name="location" id="location" clas="location"</td>
                                            </tr>
                                            <tr>
                                                <td><label>Current User &nbsp;</label></td><td><input type="text" name="currentUser" id="currentUser" clas="currentUser"</td>
                                            </tr>
                                            <tr>
                                                <td><label>Price &nbsp;</label></td><td><input type="text" name="price" id="price" clas="price"</td>
                                            </tr>
                                            <tr>
                                                <td><label>Serial Number &nbsp;</label></td><td><input type="text" name="serialNumber" id="serialNumber" clas="serialNumber"</td>
                                            </tr>
                                            <tr>
                                                <td><label>Manufacturer &nbsp;</label></td><td><input type="text" name="manufacturer" id="manufacturer" clas="manufacturer"</td>
                                            </tr>
                                            <tr>
                                                <td><label>Warranty Experiation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td><td><input type="text" name="warrantyExperiation" id="warrantyExperiation" clas="warrantyExperiation"</td>
                                            </tr>
                                            <tr>
                                                <td><label>Description</label></td><td><textarea rows="5" cols="25" name="description"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><center><input type="submit" class="btn submitBtn" id="submitBtn" value="Add Asset"></center></td>
                                            </tr>
                                        </table>
        
                                        </form>
                                    </div>
                                </div>
                            </div>
                                
                        </div>
                    </div>
                </div>
            </div>



