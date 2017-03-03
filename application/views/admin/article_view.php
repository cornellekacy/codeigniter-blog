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
        <?php if(!isset($post))
            {echo "This page was accessed incorrectly";}
            else //display the post
            {?>
                <h2><?=$post['post_title']?></h2>
                <p><?=$post['post']?></p>
                
                <hr>
<!--                 <h3>Comments</h3>
    <?php       //if there is comments then print the comments
                if(count($comments) > 0)
                {
                    foreach ($comments as $row)
                    {?>
                <p><strong><?=$row['username']?></strong> said at <?= date('d-m-Y h:i A',strtotime($row['date_added']))?><br> -->
                <?=$row['comment'];?></p>
            <?php   }
                }
                else //when there is no comment
                {
                    echo "<p>Currently, there are no comment.</p>";
                }
                

                {?>
<!--                     <form action="<?=  base_url()?>index.php/comments/add_comment/<?=$post['post_id']?>" method="post">
                      <div class="form-group">
                        <label for="email">Fullname:</label>
                        <input type="email" class="form-control" id="email">
                      </div>
                      <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email">
                      </div>
                      <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" rows="5" name="comment"></textarea>
                      </div>
                       <button type="submit" class="btn btn-primary">have your say</button>
                    </form> -->
               <?php 
               
                }

                ?>

        <?php    
            }?>
	              <hr>

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