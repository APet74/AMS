<?php
require_once("config.php");
$arrayOfItems = arrayItemObjects($dbh);
// foreach($arrayOfItems as $item){
// 	var_dump($item);
// 	echo "<br>";
// 	echo "<br>";
// }
$data = generateAjax($arrayOfItems);

?>
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" id="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Ticket: </h4>
                </div>
                <div class="modal-body">
                  <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" id="close" data-dismiss="modal">Close</button>
                 
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

<table id="assetTable" class="stripe hover order-column row-border" cellspacing="0" width="100%">
	<thead>
        <tr>
        	<th width="50px"></th>
            <th><center>Item Type</center></th>
            <th><center>Computer Name</center></th>
            <th><center>Location</center></th>
            <th><center>Current User</center></th>
            <th><center>Created By</center></th>
        </tr>
    </thead>
    <tfoot>
    	<tr>
    		<th></th>
            <th><center>Item Type</center></th>
            <th><center>Computer Name</center></th>
            <th><center>Location</center></th>
            <th><center>Current User</center></th>
            <th><center>Created By</center></th>
        </tr>
    </tfoot>
</table>