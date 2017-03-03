<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Bootstrap -->
<!--     <link href="vendor/bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="stylesheet" type="text/css" href="css/posts.css"> -->
    <link rel="stylesheet" href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" />

    <link rel="stylesheet" href="<?php echo base_url("assets/css/posts.css"); ?>" />
<!--       <link rel="stylesheet" href="<?php echo base_url("assets/css/default.css"); ?>" /> --> 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </style>
  </head>
  <body style="background: grey;"><br>
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

            <li><a href="<?php echo site_url('users/login'); ?>">Log in</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <hr>
      <div class="row">

        
        <div class="col-md-9">

          <article>
    <?php foreach($posts as $post)
    { ?>
    <h2 style="text-transform: uppercase;"><a style="color:#2986D2;" href="<?=  base_url()?>index.php/posts/post/<?=$post['post_id']?>"><?=$post['post_title'];?></a></h2>
    <p><span class="label label-primary">Date Posted</span> <?=$post['date_added'];?></p>
    <p><ul class="list-unstyled">
    <li style="margin-left: 15px; float: left;"><span class="label label-primary">Social Media</span></li>
    <li style="margin-left: 15px; float: left;"><a href="">Facebook</a></li>
    <li style="margin-left: 15px; float: left;"><a href="">Twitter</a></li>
    <li style="margin-left: 15px; float: left;"><a href="">LinkedIn</a></li>
    <li style="margin-left: 15px; float: left;"><a href="">Google</a>+</li>
    <li style="margin-left: 15px; float: left;"><a href="">Instagram</a></li>
    </ul></p>
    <br><br>
        <p><?=  substr(strip_tags($post['post']), 0, 1000).'...';?></p>
                    <footer>
              <span class="label label-default">code</span>
              <span class="label label-default">programming</span>
              <span class="label label-default">bootstrap</span>
            </footer><br>
        <div class="alert alert-success">
          <p><ul class="list-unstyled">
        <li style="margin-left: 15px; float: left;"><a href="<?=  base_url()?>index.php/posts/post/<?=$post['post_id']?>">Read More</a></li>
        <li style="margin-left: 15px; float: left;"><a href="<?=  base_url()?>index.php/posts/post/<?=$post['post_id']?>">Comments</a></li><br>
    </ul></p>
    </div>
<br>
    <?php
    }?>
         <?=$pages?>
     </article>

        </div>
                <div class="col-md-3 col-sm-12 col-xs-12 profile">
          <aside>
   

                    <div class="well">
                    <h4>Blog Search</h4>
                    <form method="get" action="<?= base_url() ?>index.php/posts/search" id="search">
                    <div class="input-group">
                        <input type="text" name="query" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form>
                    <!-- /.input-group -->
                </div>
                <div class="well">
                    <h4>Newsletter</h4>
                    <p>If you would like to receive our newletter, please enter your email address and click 'Subscribe'.</p>
                    <form>
                    <div class="input-group">
                        <input type="text" name="" class="form-control">
                    </div><br>
                    <button class="btn btn-primary" type="button">Subscribe</button>
                    </form>
                    <!-- /.input-group -->
                </div>
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                                <li><a href="<?php echo site_url('posts/internet'); ?>">Free Internet</a>
                                </li>
                                <li><a href="<?php echo site_url('posts/hacking'); ?>">Cracking</a>
                                </li>
                                <li><a href="<?php echo site_url('posts/cracking'); ?>">Hacking Tips</a>
                                </li>
                                <li><a href="<?php echo site_url('posts/latest_tech_news'); ?>">Latest Tech News</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <div class="well">
                    <h4>Latest Post</h4>
                    <div class="row">
                        <div class="col-lg-12">
                          <h4><?=$posts[0]["post_title"];?></h4>
                          <h5><?=date('d-m-Y h:i A',strtotime($posts[0]['date_added']))?></h5>
                          <p><?=substr(strip_tags($posts[0]['post']), 0, 200).'...';?></p>
                          <p><a href="<?=  base_url()?>index.php/blog/post/<?=$posts[0]['post_id']?>">Read More</a></p>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

              <hr class="hidden-xs hidden-sm">
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