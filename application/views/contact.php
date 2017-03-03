<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" />
<!--     <link rel="stylesheet" href="<?php echo base_url("assets/css/default.css"); ?>" /> -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/contact.css"); ?>" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
    </nav><hr>

    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-12 col-xs-12 profile">

        </div>
        
        <div class="col-md-8">
          <h1>Contact me</h1>

          <div class="lead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.
          </div>

          <hr>

          <p>twitter: <a href="http://twitter.com/kingsleyijomah" target="_blank">@kingsleyijomah</a></p>
          <p>linkedin: <a href="https://www.linkedin.com/pub/kingsley-ijomah/13/784/950" target="_blank">follow me on linkedin</a></p>
          <p>github: <a href="https://github.com/kingsley-ijomah" target="_blank">follow me on github</a></p>

          <hr>

          <div class="row">
            <div class="col-md-9">
              <form>
                <h3>Send me a message</h3>
                <p>
                  <label class="sr-only">Your Full Name</label>
                  <input type="text" class="form-control" placeholder="Your Full Name" required autofocus>
                </p>
                <p>
                  <label class="sr-only">Your Email</label>
                  <input type="text" class="form-control" placeholder="Your Email" required autofocus>
                </p>

                <p>
                  <label class="sr-only">Your Message</label>
                  <textarea class="form-control" placeholder="Your Message" id="textarea" required></textarea>
                </p>

                <p><input type="submit" value="Send Message" class="btn btn-primary"></p>
              </form>
            </div>
          </div>
        </div>
                <div class="col-md-2 col-sm-12 col-xs-12 profile">

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