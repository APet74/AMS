<?php
require_once("resources/userAdmin.php");
/* For phase 2
require_once '../resources/ticketGroup.php';
require_once '../resources/dbConn.php'; 
*/
$page = "Report";

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Reports - AMS </title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="css/demo.css" rel="stylesheet" />
    <link href="css/report/report.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="css/DataTable/jquery.dataTables.min.css" rel="stylesheet" />

            <!--   Core JS Files   -->
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery-ui.min.js" type="Text/javascript"></script>
    <script src="js/DataTable/datatables.min.js" type="text/javascript"></script>
    <?php
        echo $_SERVER['HTTP_REFERER'];
        if($_SERVER['HTTP_REFERER'] == "")
            echo "TEST";
    ?>
    <script src="js/reportCustom.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="js/bootstrap-checkbox-radio-switch.js"></script>


    <!--  Notifications Plugin    -->
    <script src="js/bootstrap-notify.js"></script>


    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="js/light-bootstrap-dashboard.js"></script>

</head>
<body>

<div class="wrapper">
    <?php
        require_once("Views/nav/index.php");
        require_once("Views/reportsCustom/index.php");
    ?>

    
</div>


</body>



</html>
