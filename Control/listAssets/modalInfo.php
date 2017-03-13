<?php
session_start();
if(!isset($_SESSION['user']) || (trim($_SESSION['user']) == '')) {
  header("location: login.php");
}
if($_SESSION['ticketAdmin'] != 1){
    header("location:index.php");
}


	echo "<br>";
    echo "<table style='width:100%; ' class = 'table table-striped table-bordered table-hover'>";
    echo "<tr>";
    echo" <th>Requestor</th>";
    echo "<th>Description</th>";
    echo "<th>Type</th>";
    echo "<th>Status</th>";
    echo "<th>Severity</th>";
    echo "<th>Request Date</th>";
    echo "<th>Ticket #</th>";
    echo "<th>Assigned To</th>";

    echo "</tr>";
    echo "<tbody id='myTable' class='myTable'>";
    foreach($info as $item){
    	echo "<tr>";
    	$date = $item['ticketDate'];
    	$newDate = date('Y-m-d h:i:s a', strtotime($date));
    	echo "<td>{$item['ticketContact']}</td><td>{$item['ticketDescription']}</td><td>{$item['ticketType']}</td><td id='resolvedTicket'>{$item['ticketsResolved']}</td><td>{$item['ticketStatus']}</td><td>{$newDate}</td><td class='tidTD'><input type='hidden' class='tidTD' value='{$item['ticketID']}'/>{$item['ticketID']}</td><td>{$item['ticketsClaimedBy']}</td>";
    	echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    $selectQueryC = "SELECT * FROM ticketComments WHERE ticketID = :ticketID";
	$stmt = $dbh->prepare($selectQueryC);
	$stmt->bindValue(":ticketID", $_POST['tid']);
	$stmt->execute();
	$info = $stmt->fetchAll(PDO::FETCH_ASSOC);
	echo "<br>";
	echo "<form id='commentAdd' method='POST' action='javascript:void(0);'>";
    echo "<center><table style='width:75%;' class = 'table table-striped table-bordered table-hover'>";
    echo "<tr>";
    echo" <th>Name</th>";
    echo "<th>Description</th>";
    echo "<th>Time</th>";
    echo "<th>Date</th>";
    echo "</tr>";
    echo "<tbody id='myTable' class='myTable'>";
    foreach($info as $item){
    	echo "<tr>";
    	$date = $item['ticketCommentDate'];
    	$newDate = date('Y-m-d h:i:s a', strtotime($date));
    	echo "<td>{$item['ticketCommentUser']}</td><td>{$item['ticketCommentDescription']}</td><td>{$item['ticketCommentTime']}</td><td>{$newDate}</td>";
    	echo "</tr>";
    }
    echo "<tr>";
    echo "<td>{$_SESSION['givenname']}</td><td><textarea name='Description' id='description' rows='2' cols='50'></textarea></td><td><input type='text' id='time' name='time'/><input type='hidden' name='id' id='ticketID' value='{$_POST['tid']}'></td><td><input type='submit' class='btn btn-info' id='addComment'></td>";
    echo "</tbody>";
    echo "</table></center></form>";
    echo "<input type='hidden' value='{$_POST['tid']}' id='resolverInput' name='resolveInput'>";
    echo "<center><button class='btn btn-success resolvedBTN' value='{$_POST['tid']}' id='Resolved' style='width:500px'>Resolve</button>&nbsp;<select name='clamStaff' style='width:250px;' id='claimStaff'><option value='{$_SESSION['givenname']}'>{$_SESSION['givenname']}</option>";
    $selectFromCS = "SELECT * FROM claimStaff WHERE selected = '1'";
    $queryRun = $dbh->prepare($selectFromCS);
    $queryRun->execute();
    $allCS = $queryRun->fetchAll(PDO::FETCH_ASSOC);
    foreach($allCS as $csStaff){
       if($csStaff['staffName'] != $_SESSION['givenname']){
        echo "<option value='{$csStaff['staffName']}' id='claimStaffDrop'>{$csStaff['staffName']}</option>";
       }
    }
    echo "</select><button class='btn btn-primary claimBTN' value='Assign Staff' id='claimStaffBTN' style='width:250px;'>Assign Staff</button></center>";
    ?>