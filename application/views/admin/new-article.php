<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/admin/vendor/chosen_v1.4.0/chosen.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/admin/vendor/font-awesome-4.3.0/css/font-awesome.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/admin/vendor/summernote-master/dist/summernote.css"); ?>" />

    <link rel="stylesheet" href="<?php echo base_url("assets/admin/css/default.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/admin/css/new-article.css"); ?>" />



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

          <div id="content">
            <header>
              <h2 class="page_title">Create new article</h2>
            </header>

            <div class="content-inner">
              <div class="form-wrapper">
                <form action="<?=base_url()?>index.php/posts/new_post/" method="post">
                
                  <div class="form-group">
                    <label class="sr-only">Title</label>
                    <input type="text" class="form-control" name="post_title" placeholder="Title">
                  </div>

                  <div class="form-group">
                    <label class="sr-only">Tags</label>
                    <select data-placeholder="Select tags" multiple name="post_tag" class="form-control chosen-select">
                      <option></option>
                      <option value="html">html</option>
                      <option value="css">css</option>
                      <option value="coding">coding</option>
                      <option value="programming">programming</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="sr-only">Category</label>
                    <select data-placeholder="Select category" multiple name="post_cat" class="form-control chosen-select">
                      <option></option>
                      <option value="hacking">Hacking</option>
                      <option value="cracking">Cracking</option>
                      <option value="free_internet">Free Internet</option>
                      <option value="latest_tech_news">Latest Tech News</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="sr-only">Article</label>
                    <textarea class="form-control summernote" placeholder="Article" name="post"></textarea>
                  </div>
                  <div class="form-group">
                    <label class="sr-only">Status</label>
                    <select data-placeholder="Select Status" multiple name="active" class="form-control chosen-select">
                      <option></option>
                      <option value="1">active</option>
                      <option value="0">inactive</option>
                    </select>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> publish article when I click on save
                    </label>
                  </div>

                  <div class="clearfix">
                    <button type="submit" class="btn btn-primary pull-right">Save / Publish</button>
                  </div>
                </form>
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
      <script src="<?php echo base_url("assets/admin/vendor/chosen_v1.4.0/chosen.jquery.min.js"); ?>"></script>
       <script src="<?php echo base_url("assets/admin/vendor/summernote-master/dist/summernote.min.js"); ?>"></script>
     
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->


    <script src="<?php echo base_url("assets/admin/js/default.js"); ?>"></script>

    <script type="text/javascript">
      var config = {
        '.chosen-select' : {},
        '.chosen-select-deselect' : {allow_single_deselect: true},
        '.chosen-select-no-single': {disable_search_threshold: 10},
        '.chosen-select-no-result': {no_results_text: 'Oops, nothing found!'},
        '.chosen-select-width' : {width: "95%"}
      }
      for (var selector in config) {
        $(selector).chosen(config[selector]);
      }
    </script>

    <script type="text/javascript">
      $('.summernote').summernote({
        height: 200
      })
    </script>

  </body>
</html>