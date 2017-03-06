    <div class="sidebar" data-color="red" data-image="img/sidebar-6.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://pegboard.region5systems.net/AMS" class="simple-text">
                   AMS
                </a>
            </div>

            <ul class="nav">
                <?php 
                if($page == "Dashboard"){
                    echo "<li class='active'>";
                }else{
                    echo "<li>";
                }
                ?>
                    <a href="index.php">
                        <i class="pe-7s-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <?php 
                if ($_SESSION['status'] == 2){
                    if($page == "add"){
                        echo "<li class='active'>";
                    }else{
                        echo "<li>";
                    }
                    
                        echo "<a href='addAssets.php'>";
                           echo "<i class='pe-7s-plus'></i>";
                            echo "<p>Add Asset</p>";
                        echo "</a>";
                    echo "</li>";
                }
                ?>
                <?php 
                if ($_SESSION['status'] == 2){
                    if($page == "update"){
                        echo "<li class='active'>";
                    }else{
                        echo "<li>";
                    }
                    
                        echo "<a href='updateAssets.php'>";
                           echo "<i class='pe-7s-refresh-2'></i>";
                            echo "<p>Update Asset</p>";
                        echo "</a>";
                    echo "</li>";
                }
                ?>
                 <?php 
                if($page == "list"){
                    echo "<li class='active'>";
                }else{
                    echo "<li>";
                }
                ?>
                    <a href="listAssets.php">
                        <i class="pe-7s-network"></i>
                        <p>List/Search Assets</p>
                    </a>
                </li>
               <?php 
                if ($_SESSION['status'] == 2){
                    if($page == "report"){
                        echo "<li class='active'>";
                    }else{
                        echo "<li>";
                    }
                    
                        echo "<a href='report.php'>";
                           echo "<i class='pe-7s-note2'></i>";
                            echo "<p>Reports</p>";
                        echo "</a>";
                    echo "</li>";
                }
                ?>
                <li class="active-pro">
                    <!-- Phase 2 <a href="../login.php"> -->
                    <a href="login.php">
                        <i class="pe-7s-power"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>