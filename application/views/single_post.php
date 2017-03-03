<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comment</title>

    <!-- Bootstrap -->
<!--     <link href="vendor/bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="stylesheet" type="text/css" href="css/posts.css"> -->
    <link rel="stylesheet" href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" />
    <!-- <link rel="stylesheet" href="<?php echo base_url("assets/css/default.css"); ?>" /> -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/posts.css"); ?>" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </style>
  </head>
  <body style="background: grey;">
  
<br>



    <div class="container" style="background: #ffffff;">
        <h1>
      <center>
        Cornellekacy blog give you tips on internet setting, programming, web development and news around Cameroon. Contact us on +23779407607. Email us contact@cornellekacy.tk.
      </center>
    </h1><br><br><br>
        <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Cornellekacy Inc</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">

            <li class="active "><a href="<?php echo site_url('posts/index'); ?>">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="<?php echo site_url('posts/about'); ?>">About</a></li>
            <li><a href="<?php echo site_url('posts/archive'); ?>">Archive</a></li>
            <li><a href="<?php echo site_url('posts/contact'); ?>">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li><a href="<?= base_url()?>index.php/posts/login/">Log in</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <hr>
      <div class="row">
                <div class="col-md-2 col-sm-12 col-xs-12 profile">

              </div>

        
        <div class="col-md-8">

          <article>
        <?php if(!isset($post))
            {echo "This page was accessed incorrectly";}
            else //display the post
            {?>
                <h2><?=$post['post_title']?></h2>
                <p><?=$post['post']?></p>
                
                <hr>
                <h3>Comments</h3>
    <?php       //if there is comments then print the comments
                if(count($comments) > 0)
                {
                    foreach ($comments as $row)
                    {?>
                  <div class="row">
                  <div class="col-sm-2">
                    <div class="thumbnail">
                    <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                    </div><!-- /thumbnail -->
                    </div><!-- /col-sm-1 -->
                    <div class="col-sm-10">
                  <div class="panel panel-success">
                    <div class="panel-heading">
                    <strong><?=$row['fullname']?></strong> <span class="text-muted">said at <?= date('d-m-Y h:i A',strtotime($row['date_added']))?></span>
                    </div>
                    <div class="panel-body">
                    <?=$row['comment'];?>
                    </div><!-- /panel-body -->
                  </div><!-- /panel panel-default -->
                  </div>
                  </div>
            <?php   }
                }
                else //when there is no comment
                {
                    echo "<p>Currently, there are no comment.</p>";
                }
                

                {?>
                       <form action="<?=  base_url()?>index.php/comments/add_comment/<?=$post['post_id']?>" method="post">

                      <div class="form-group">
                        <label for="text">Fullname:</label>
                        <input type="text" class="form-control" name="fullname">
                      </div>
                      <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" name="email">
                      </div>
                      <div class="form-group">
                        <label for="text"></label>
                        <input type="hidden" value="approved" class="form-control" name="status">
                      </div>
                      <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" rows="5" name="comment"></textarea>
                      </div>
                       <button type="submit" class="btn btn-primary">have your say</button>
                    </form>
               <?php 
               
                }

                ?>

        <?php    
            }?>   
          </article>

        </div>
                <div class="col-md-2 col-sm-12 col-xs-12 profile">

              </div>

            </div>

            <hr class="hidden-md hidden-lg">

          </aside>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="vendor/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>

    <script>window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
    </script>
  </body>
</html>