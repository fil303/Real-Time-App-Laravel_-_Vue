<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CalmUI Admin</title>

   <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(asset('vendors/mdi/css/materialdesignicons.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('vendors/css/vendor.bundle.base.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/vertical-layout-light/style.css')); ?>">
  <link rel="shortcut icon" href="<?php echo e(asset('images/favicon.png')); ?>" />
</head>
<body>
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
        <ul class="navbar-nav mr-lg-2 d-none d-lg-flex">
          <li class="nav-item nav-toggler-item">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
          </li>
          <li class="nav-item nav-search d-none d-lg-flex">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="<?php echo e(asset('images/logo.svg')); ?>" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="#"><img src="<?php echo e(asset('images/logo-mini.svg')); ?>" alt="logo"/></a>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell-outline mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Application Error</h6>
                  <p class="font-weight-light small-text mb-0">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Settings</h6>
                  <p class="font-weight-light small-text mb-0">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">New user registration</h6>
                  <p class="font-weight-light small-text mb-0">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="<?php echo e(asset('profile_pic/'.Auth::user()->img)); ?>" alt="profile"/>
              <span class="nav-profile-name"><?php echo e(Auth::user()->name); ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a href="<?php echo e(route('profile')); ?>" class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <form action="<?php echo e(route('logout')); ?>" method="post" class="dropdown-item">
                <?php echo csrf_field(); ?>
                <i class="mdi mdi-logout text-primary"></i>
                <input style="border:none; background:none;" type="submit" value="Logout">
              </form>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="mdi mdi-dots-horizontal"></i>
            </a>
          </li>
          <li class="nav-item nav-toggler-item-right d-lg-none">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </li>
        </ul>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options selected" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-primary border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles danger"></div>
            <div class="tiles light default"></div>
            <div class="tiles dark"></div>
            <div class="tiles primary"></div>
          </div>
        </div>
      </div>


















      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close mdi mdi-close"></i>



        <ul class="nav nav-tabs" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">GROUP</a>
          </li>

        </ul>




        <div class="tab-content" id="setting-content">







          <div class="tab-pane fade show active scroll-wrapper" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
<?php $__currentLoopData = App\Models\User::get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="list active">
                <div class="profile"><img src="<?php echo e(asset('profile_pic/'.$user->img)); ?>" alt="image"><span class="<?php echo e($user->isActive() ? 'online' : 'offline'); ?>"></span></div>
                <div class="info">
                  <p><a href="<?php echo e(url('/chatroom/'.$user->id)); ?>"><?php echo e($user->name); ?></p></a>
                  <p><?php echo e($user->isActive() ? 'Online' : 'Offline'); ?></p>
                </div>
               
              </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>








          <div class="tab-pane fade " id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form action="<?php echo e(route('addgroup')); ?>" method="post" class="form w-100">
                <?php echo csrf_field(); ?>
                <div class="form-group d-flex">
                  <input type="text" name="name" class="form-control todo-list-input" placeholder="New Group">
                  <input type="submit" value="Add" class="add btn btn-primary todo-list-add-btn" id="add-task"/>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="chat-list ">
<?php
{{ $ids = App\Models\GroupConversation::where('member_id',Auth::id())->get(); }}
 ?>


<?php $__currentLoopData = $ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
          {{ $group = App\Models\Group::where('id',$id->group_id)->first(); }}
          ?>

              <li class="list active">
               
                <div class="info">
                  <a href="<?php echo e(url('/groupchatroom/'.$group->id)); ?>">
                  <h2><?php echo e($group->name); ?></h2>
                  </a>
                  <?php if($group->onwer_id == Auth::id()): ?>
                  <p>Admin</p>
                  <a href="<?php echo e(url('/groupdelet/'.$group->id)); ?>">Delete</a>
                  <?php else: ?>
                  <p>Member</p>
                  <?php endif; ?>
                </div>

                
              </li>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>              



              </ul>
            </div>

          </div>
          <!-- To do section tab ends -->




          <!-- chat tab ends -->



        </div>
      </div>

















      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('home')); ?>">
              <i class="mdi mdi-view-quilt menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
        </ul>
      </nav>





      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

        <?php echo $__env->yieldContent('content'); ?>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <script src="<?php echo e(asset('vendors/js/vendor.bundle.base.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/template.js')); ?>"></script>
  <script src="<?php echo e(asset('js/settings.js')); ?>"></script>
  <script src="<?php echo e(asset('js/file-upload.js')); ?>"></script>
</body>
</html>
<?php /**PATH /home/fil303/Desktop/htdocs/MoreApp/CanadianUniversity/resources/views/layout/app.blade.php ENDPATH**/ ?>