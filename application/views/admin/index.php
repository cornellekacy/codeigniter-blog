<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/admin/css/default.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/admin/css/index.css"); ?>" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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

          <div id="dashboard-con">
            <div class="row">
              <div class="col-md-6 dashboard-left-cell">
                <div class="admin-content-con">
                  <header class="clearfix">
                    <h5 class="pull-left">Articles</h5>
                    <a class="btn btn-xs btn-primary pull-right" href="<?php echo site_url('posts/admin_new_article'); ?>" role="button">Create new article</a>
                  </header>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>title</th>
                        <th>replies</th>
                        <th>date</th>
                        <th>actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>My first post of many to come...</td>
                        <td>20</td>
                        <td>2 days ago</td>
                        <td>
                          <a class="btn btn-xs btn-warning" href="#" role="button">edit</a>
                          <a class="btn btn-xs btn-primary" href="#" role="button">view</a>
                          <a class="btn btn-xs btn-danger" href="#" role="button">del</a>
                        </td>
                      </tr>
                      <tr>
                        <td>My first post of many to come...</td>
                        <td>20</td>
                        <td>2 days ago</td>
                        <td>
                          <a class="btn btn-xs btn-warning" href="#" role="button">edit</a>
                          <a class="btn btn-xs btn-primary" href="#" role="button">view</a>
                          <a class="btn btn-xs btn-danger" href="#" role="button">del</a>
                        </td>
                      </tr>
                      <tr>
                        <td>My first post of many to come...</td>
                        <td>20</td>
                        <td>2 days ago</td>
                        <td>
                          <a class="btn btn-xs btn-warning" href="#" role="button">edit</a>
                          <a class="btn btn-xs btn-primary" href="#" role="button">view</a>
                          <a class="btn btn-xs btn-danger" href="#" role="button">del</a>
                        </td>
                      </tr>
                      <tr>
                        <td>My first post of many to come...</td>
                        <td>20</td>
                        <td>2 days ago</td>
                        <td>
                          <a class="btn btn-xs btn-warning" href="#" role="button">edit</a>
                          <a class="btn btn-xs btn-primary" href="#" role="button">view</a>
                          <a class="btn btn-xs btn-danger" href="#" role="button">del</a>
                        </td>
                      </tr>
                      <tr>
                        <td>My first post of many to come...</td>
                        <td>20</td>
                        <td>2 days ago</td>
                        <td>
                          <a class="btn btn-xs btn-warning" href="#" role="button">edit</a>
                          <a class="btn btn-xs btn-primary" href="#" role="button">view</a>
                          <a class="btn btn-xs btn-danger" href="#" role="button">del</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="clearfix">
                    <a href="#" class="pull-right text-link">view all articles</a>
                  </div>
                </div>
              </div>

              <div class="col-md-6 dashboard-right-cell">
                <div class="admin-content-con">
                  <header>
                    <h5>Comments</h5>
                  </header>
                  <div class="comment-head-dash clearfix">
                    <div class="commenter-name-dash pull-left">Kingsley Ijomah</div>
                    <div class="days-dash pull-right">2 days ago</div>
                  </div>
                  <p class="comment-dash">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                  <small class="comment-date-dash">Today 5:10pm 24/03/2015</small>
                  <hr>

                  <div class="comment-head-dash clearfix">
                    <div class="commenter-name-dash pull-left">Kingsley Ijomah</div>
                    <div class="days-dash pull-right">2 days ago</div>
                  </div>
                  <p class="comment-dash">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                  <small class="comment-date-dash">Today 5:10pm 24/03/2015</small>
                  <hr>

                  <div class="clearfix">
                    <a href="#" class="pull-right text-link">view all comments</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="admin-content-con clearfix">
                  <header>
                    <h5>Commenters</h5>
                  </header>

                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Actions</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Kingsley Ijomah</td>
                        <td>kingsley.ijomah@example.com</td>
                        <td><a href="#" class="label label-default">pending</a></td>
                        <td>Today 5:60pm - 14/09/2015</td>
                        <td><a href="#" class="label label-danger">Delete</a></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Kingsley Ijomah</td>
                        <td>kingsley.ijomah@example.com</td>
                        <td><a href="#" class="label label-success">active</a></td>
                        <td>Today 5:60pm - 14/09/2015</td>
                        <td><a href="#" class="label label-danger">Delete</a></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Kingsley Ijomah</td>
                        <td>kingsley.ijomah@example.com</td>
                        <td><a href="#" class="label label-success">active</a></td>
                        <td>Today 5:60pm - 14/09/2015</td>
                        <td><a href="#" class="label label-danger">Delete</a></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Kingsley Ijomah</td>
                        <td>kingsley.ijomah@example.com</td>
                        <td><a href="#" class="label label-success">active</a></td>
                        <td>Today 5:60pm - 14/09/2015</td>
                        <td><a href="#" class="label label-danger">Delete</a></td>
                      </tr>
                    </tbody>
                  </table>

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
     <script src="<?php echo base_url("assets/admin/js/default.js"); ?>"></script>

  </body>
</html>