<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Commenters</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("assets/admin/css/default.css"); ?>" />

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
	              <div class="col-xs-5 col-sm-3 col-md-3"><b>All commenters</b></div>
	              <div class="col-xs-7 col-sm-9 col-md-9">
	              	<button type="button" class="btn btn-xs btn-primary pull-right">Create new article</button>
	              </div>
	            </header>
	                      <article>
    
	            <div class="content-inner">
	              <table class="table table-hover">
	              	<thead>
	              		<tr>

	              			<th>Full Name</th>
	              			<th>Email</th>
	              			<th>Status</th>
	              			<th class="hidden-xs">Created</th>
	              		</tr>
	              	</thead>
	              	<tbody>
	              	<?php foreach ($comments as $row)
    					{ ?>
	              		<tr>
	              			<td><?=$row['fullname']?></td>
	              			<td><?=$row['email']?></td>
	              			<td><span class="label label-success"><?=$row['status']?></span></td>
	              			<td class="hidden-xs"><?=$row['date_added']?></td>

	              		</tr>
	              		<?php
    				}?>
	              	</tbody>
	              </table>
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