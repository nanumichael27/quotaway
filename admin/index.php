


      <?php include_once('header.php'); ?>
      <?php 
            $totalUsers = mysqli_num_rows(mysqli_query($link, "SELECT * FROM users"));
            $totalReferrals = mysqli_num_rows(mysqli_query($link, "SELECT * FROM referrals"));
            $totalActivatedUsers = getUsersWithActivationStatus('activated');
            $totalPendingUsers = getUsersWithActivationStatus('pending');
            $totalDeactivatedUsers = getUsersWithActivationStatus('deactivated');
            
            function getUsersWithActivationStatus($status = 'activated'){
              $link = $GLOBALS['link'];
              return mysqli_num_rows(mysqli_query($link, "SELECT * FROM `users` WHERE `activation_status` ='$status'"));
            }
      ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php include_once('sidebar.php') ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <!-- <small>Optional description</small> -->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <!-- <li class="active">Here</li> -->
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Your Page Content Here -->

          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $totalUsers; ?></h3>
                  <p>Total Users</p>
                </div>
                <div class="icon">
                  <i class="ion ion-cash"></i>
                </div>
                <a href="users.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $totalActivatedUsers; ?></h3>
                  <p>Active Accounts</p>
                </div>
                <div class="icon">
                  <i class="ion ion-link"></i>
                </div>
                <a href="users.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $totalDeactivatedUsers; ?></h3>
                  <p>Deactivated Accounts</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="users.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $totalPendingUsers; ?></h3>
                  <p>Pending Accounts</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3><?php echo $totalReferrals; ?></h3>
                  <p>Total No of referrals</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>

          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<?php require_once 'footer.php'; ?>
