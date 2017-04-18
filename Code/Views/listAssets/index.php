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
                    <a class="navbar-brand" href="listAssets.php">List Assets</a>
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
                                <h4 class="title">List Assets</h4>
                                <p class="category">View and search all assets currently in system</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <?php
                                    if(isset($_GET['Msg'])){
                                        echo "<center><h2 style='color:rgb(58, 186, 58);'><B>{$_GET['Msg']}</b></h2></center>";
                                    }
                                    require_once("Control/listAssets/listTable.php");
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <?php
                
                if($_SESSION['status'] == 2)
                    require_once("printLabelsView.php");

                ?>
        </div>