<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Articles</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" />

		<link rel="stylesheet" href="<?php echo base_url("assets/admin/css/default.css"); ?>" />
		<link rel="stylesheet" href="<?php echo base_url("assets/admin/css/articles.css"); ?>" />


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
	              <h2 class="page_title pull-left">All articles</h2>
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
	                  <?php foreach($posts as $post)
    { ?>




	              <div class="row article-row">
	              	<div class="col-xs-2 col-sm-1 col-md-1 status-padding">
	              		<span class="label label-success label-sm"><?=$post['active'];?></span>
	              	</div>

	              	<div class="col-xs-10 col-sm-6 col-md-8 article-title">
	              		<p><?=$post['post_title'];?></p>
	              		<h6><?=  substr(strip_tags($post['post']), 0, 90).'...';?></h6>
	              		<small><?=$post['date_added'];?></small>
	              	</div>

	              	<div class="col-xs-10 col-sm-5 col-md-3 col-xs-offset-2 col-sm-offset-0 col-md-offset-0 col-lg-offset-0">
	              		<div class="article-actions">
	              			<a class="btn btn-xs btn-info" href="<?=  base_url()?>index.php/posts/article_view/<?=$post['post_id']?>"<?=$post['post_title'];?> role="button">
	              				<span class="glyphicon glyphicon-folder-open" aria-hidden="true">&nbsp;View</span>
	              			</a>

	              			<a class="btn btn-xs btn-success" href="<?=  base_url()?>index.php/posts/editpost/<?=$post['post_id']?>" role="button">
	              				<span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Edit</span>
	              			</a>

	              			<a class="btn btn-xs btn-danger" href="<?=  base_url()?>index.php/posts/deletepost/<?=$post['post_id']?>" role="button">
	              				<span class="glyphicon glyphicon-remove" aria-hidden="true">&nbsp;Delete</span>
	              			</a>
	              		</div>
	              	</div>
	              </div>
    <?php
    }?>
   <?=$pages?>
	              <hr>

	              <div class="row">
	              	<div class="col-md-12">
	              		<nav>
	              			<ul class="pagination">
	              				<li><a href="#">&laquo;</a></li>
	              				<li><a href="#">1</a></li>
	              				<li><a href="#">2</a></li>
	              				<li><a href="#">3</a></li>
	              				<li><a href="#">4</a></li>
	              				<li><a href="#">5</a></li>
	              				<li><a href="#">&raquo;</a></li>
	              			</ul>
	              		</nav>
	              	</div>
	              </div>

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