<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Approved</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("assets/admin/css/default.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("assets/admin/css/comments.css"); ?>" />

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		
		<div class="container-fluid display-table">
	      <div class="row display-table-row">
	        <!-- side menu -->
	       <?php 
include 'include/sidebar.php';
 ?>

	        <!-- main content area -->
	        <div class="col-md-10 col-sm-11 display-table-cell valign-top">
          <?php 
include 'include/header.php';
 ?>
	          <div id="content">
	            <header class="clearfix">
	              <h2 class="page_title pull-left">All approved</h2>
	              <button type="button" class="btn btn-xs btn-primary pull-right">Create new article</button>
	            </header>


	            <div class="content-inner">
	              <div class="row search-row">
	              	<div class="col-md-12">
	              		<div class="input-group">
	              			<input type="text" class="form-control search-field" id="search" placeholder="Search">
	              			<span class="input-group-btn">
	              				<button type="button" class="btn btn-primary go">Go!</button>
	              			</span>
	              		</div>
	              	</div>
	              </div>
	              <?php foreach ($comments as $row)
    					{ ?>


	              <div class="row comments-row">
	              	<div class="col-sm-2 col-md-1">
	              		<img class="img-circle hidden-xs" src="https://api.fnkr.net/testimg/70x70/00CED1/FFF/?text=70x70">
	              	</div>

	              	<div class="col-sm-10 col-md-11">
	              		<div class="row">
	              			<div class="col-xs-9 col-sm-10 col-md-9">
	              				<b><?=$row['fullname']?></b> posted message on <br>
	              				<small><?=$row['date_added']?></small>
	              			</div>

	              			<div class="col-xs-3 col-sm-2 col-md-3">
	              				<div class="clearfix">
	              					<div class="pull-right comment-age">2 days ago</div>
	              				</div>
	              			</div>
	              		</div>
	              		<div class="well well-sm comments-well">
						<?=$row['comment']?>
			            </div>
			            <div class="clearfix">
			            	<div class="pull-right">
			            		<a class="btn btn-xs btn-default" href="#" role="button">
			            			<span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
			            			Un-approve
			            		</a>
			            		<a class="btn btn-xs btn-default" href="#" role="button">
			            			<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
			            			Delete
			            		</a>
			            	</div>
			            </div>
	              	</div>
	              </div>
	              <?php
    				}?>

	              
	             

	            </div>
	          </div>

	          <div class="row">
	            <footer id="admin-footer" class="clearfix">
	              <div class="pull-left"><b>Copyright </b>&copy; 2015</div>
	              <div class="pull-right">admin system</div>
	            </footer>
	          </div>
	        </div>
	      </div>
	    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url("assets/admin/js/jquery.min.js"); ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="<?php echo base_url("assets/admin/js/bootstrap.min.js"); ?>"></script>
	</body>
</html>