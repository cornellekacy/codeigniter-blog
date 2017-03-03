        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top" id="side-menu">
          <h1 class="hidden-xs hidden-sm">Navigation</h1>
          <ul>
            <li class="link active">
              <a href="<?php echo site_url('posts/admin'); ?>">
                <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Dashboard</span>
              </a>
            </li>


            <li class="link">
              <a href="<?php echo site_url('users/register'); ?>">
                <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Add Admin</span>
              </a>
            </li>

            <li class="link">
              <a href="#collapse-post" data-toggle="collapse" aria-controls="collapse-post">
                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Article</span>
                <span class="label label-success pull-right hidden-xs hidden-sm">20</span>
              </a>
              <ul class="collapse collapseable" id="collapse-post">
                <li><a href="<?php echo site_url('posts/admin_new_article'); ?>">Create New</a></li>
                <li><a href="<?php echo site_url('posts/all_article'); ?>">View Article</a></li>
              </ul>
            </li>

            <li class="link">
              <a href="#collapse-comments" data-toggle="collapse" aria-controls="collapse-comments">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Comments</span>
              </a>
              <ul class="collapse collapseable" id="collapse-comments">
                <li>
                  <a href="<?php echo site_url('posts/comments_approve'); ?>">Approved
                    <span class="label label-success pull-right hidden-xs hidden-sm">10</span>
                  </a>
                </li>

                <li>
                  <a href="<?php echo site_url('posts/comments_unapprove'); ?>">Unapproved
                    <span class="label label-warning pull-right hidden-xs hidden-sm">10</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="link">
              <a href="<?php echo site_url('posts/comments'); ?>">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Commenters</span>
              </a>
            </li>

            <li class="link">
              <a href="<?php echo site_url('posts/tags'); ?>">
                <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Tags</span>
              </a>
            </li>

            <li class="link settings-btn">
              <a href="<?php echo site_url('posts/settings'); ?>">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Settings</span>
              </a>
            </li>
          </ul>
        </div>