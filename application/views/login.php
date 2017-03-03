<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>



            <link rel="stylesheet" href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" />
            <link rel="stylesheet" href="<?php echo base_url("assets/css/login.css"); ?>" />


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
    <div class="container">
    <form action="<?= base_url()?>index.php/users/login/" method="post" class="form-signin">
                    <?php
                    if($error)
                    {
                        echo '<div style="color:red" >Hmm, we don\'t recognize you. Please try again.</div><br>';
                    }?>
        <h1 class="text-center">sign in</h1>
        <p>
          <label class="sr-only">Email address</label>
          <input type="text" placeholder="Username" name="username" class="form-control" required autofocus>
        </p>

        <p>
          <label class="sr-only">Password</label>
          <input type="password" placeholder="Password" name="password" class="form-control" required>
        </p>

        <p class="checkbox"><label><input type="checkbox">Remember me</label></p>

        <button type="submit" class="btn btn-primary btn-block" name="add">Sign in</button>
      </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="vendor/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
  </body>
</html>