<!-- Main Header -->
<?php
    session_start();
    include('../connection.php');
    if(!isset($_SESSION['admin_id'])){
        // header('location: login.php');
        echo "<script>window.location='login.php'</script>";
        exit;
    }

    $id = $_SESSION['admin_id'];
    $sql = "SELECT * FROM `admin` WHERE `id` = '$id'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Starter</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/croppie.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="dist/css/skins/skin-blue.css">
    <!-- Include jquery for app functionalities -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- For post content -->
    <script src="dist/js/tinymce/tinymce.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
      .delete-from-gallery-button{
        padding: 13px;
        font-size: 21px;
        position: relative;
        background: #ff4b4b;
        border-radius: 81%;
        height: 50px;
        width: 50px;
        text-align: center;
        float: right;
        line-height: 23px;
        margin-top: 5px;
        cursor: pointer;
        color: white;
      }

      .delete-from-gallery-button:hover{
        background-color: red;
        color: white;
      }

      .delete-from-gallery-button:active{
        border: 1px solid black;
        background-color: white;
        color: red;

      }

      /* .delete-from-gallery-button i{
        color: white;
      } */


    </style>
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">

      <!-- Logo -->
      <a href="<?php echo '../admin'; ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Quotaway</b></span>
      </a>
              
              <!-- Header Navbar -->
              <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                    
                    <!-- Messages: style can be found in dropdown.less-->
                    <!-- <li class="dropdown messages-menu"> -->
                      <!-- Menu toggle button -->
                      <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                      </a>
                      <ul class="dropdown-menu">
                        <li class="header">You have 4 messages</li>
                        <li>
                          inner menu: contains the messages
                          <ul class="menu">
                            <li>start message
                              <a href="#">
                                <div class="pull-left">
                                  User Image
                                  <img src="dist\img\display picture\user.svg" class="img-circle" alt="User Image">
                                </div>
                                Message title and timestamp
                                <h4>
                                  Support Team
                                  <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                </h4>
                                The message
                                <p>Why not buy a new awesome theme?</p>
                              </a>
                            </li>end message
                          </ul>/.menu
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                      </ul> -->
                    <!-- </li>/.messages-menu -->

                    <!-- Notifications Menu -->
                    <!-- <li class="dropdown notifications-menu">
                      Menu toggle button
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                      </a>
                      <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                          Inner Menu: contains the notifications
                          <ul class="menu">
                            <li>start notification
                              <a href="#">
                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                              </a>
                            </li>end notification
                          </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                      </ul>
                    </li> -->


                    <!-- Tasks Menu -->
                    <!-- <li class="dropdown tasks-menu">
                      Menu Toggle Button
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">9</span>
                      </a>
                      <ul class="dropdown-menu">
                        <li class="header">You have 9 tasks</li>
                        <li>
                          Inner menu: contains the tasks
                          <ul class="menu">
                            <li>Task item
                              <a href="#">
                                Task title and progress text
                                <h3>
                                  Design some buttons
                                  <small class="pull-right">20%</small>
                                </h3>
                                The progress bar
                                <div class="progress xs">
                                  Change the css width attribute to simulate progress
                                  <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only">20% Complete</span>
                                  </div>
                                </div>
                              </a>
                            </li>end task item
                          </ul>
                        </li>
                        <li class="footer">
                          <a href="#">View all tasks</a>
                        </li>
                      </ul>
                    </li> -->
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                      <!-- Menu Toggle Button -->
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="dist\img\display picture\user.svg" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs fullname">Admin</span>
                      </a>
                      <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                          <img src="dist\img\display picture\user.svg" class="img-circle" alt="User Image">
                          <p class="fullname">
                            <?php echo 'Admin'; ?>
                            <!-- <small>Member since Nov. 2012</small> -->
                          </p>
                        </li>
                        <!-- Menu Body -->
                        <!-- <li class="user-body">
                          <div class="col-xs-4 text-center">
                            <a href="#">Followers</a>
                          </div>
                          <div class="col-xs-4 text-center">
                            <a href="#">Sales</a>
                          </div>
                          <div class="col-xs-4 text-center">
                            <a href="#">Friends</a>
                          </div>
                        </li> -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                          <div class="pull-left">
                            <a href="posts.php" class="btn btn-default btn-flat">Add post</a>
                          </div>
                          <div class="pull-right">
                            <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li>
                        <a href="logout.php">
                            <i class="fa fa-power-off" ></i>
                        </a>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <!-- <li>
                      <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li> -->
                  </ul>
                </div>
              </nav>
            </header>