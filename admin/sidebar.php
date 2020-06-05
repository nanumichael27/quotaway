<aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist\img\display picture\user.svg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p class="fullname"><?php echo 'Admin'; ?></p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header"><a href="index.php">DASHBOARD</a></li>
            <!-- Optionally, you can add icons to the links -->
            <!-- <li class=""><a href="users.php"><i class="fa fa-ticket"></i> <span>Users</span></a></li> -->
            <li class="treeview ">
              <a href="#"><i class="fa fa-rss"></i> <span>Blog</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu menu-open" >
                <li><a href="posts.php"><i class="fa fa-spinner"></i> <span>Posts</span></a></li>
                <li><a href="categories.php"><i class="fa fa-spinner"></i> <span>Categories</span></a></li>
              </ul>
            </li>
             <!-- <li class="treeview">
              <a href="#"><i class="fa fa-bank"></i> <span>Account</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="updateprofile.php"><i class="fa fa-user"></i><span>Update Profile</span></a></li>
                <li><a href="updatepassword.php"><i class="fa fa-key"></i><span>Change Password</span></a></li>
              </ul>
            </li> -->
            <!--<li class="treeview">-->
            <!--  <a href="#"><i class="fa fa-user-plus"></i> <span>Referrals</span> <i class="fa fa-angle-left pull-right"></i></a>-->
            <!--  <ul class="treeview-menu">-->
            <!--    <li><a href="referrallink.php">Referral link</a></li>-->
            <!--    <li><a href="totalreferrals.php">Total Referrals</a></li>-->
            <!--  </ul>-->
            <!--</li>-->
            <!-- <li class="treeview ">
              <a href="#"><i class="fa fa-exchange"></i> <span>Transactions</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu menu-open" >
                <li><a href="#">Transaction History</a></li>
                <li><a href="#">Available Balance</a></li>
                <li><a href="#">Make Withdrawal</a></li>
                <li><a href="#">Withdrawal History</a></li>
                <li><a href="totalearnings.php">Total Earnings</a></li>
              </ul>
            </li> -->
            <!-- <li class=""><a href="earnings.php"><i class="fa fa-money"></i> <span>Earnings</span></a></li> -->
            <li><a href="#"><i class="fa fa-spinner"></i> <span>Gallery</span></a></li>
            <!-- <li><a href="#"><i class="fa fa-spinner"></i> <span>Faq</span></a></li>
            <li><a href="#"><i class="fa fa-spinner"></i> <span>Testimonials</span></a></li>
            <li class=""><a href="#"><i class="fa fa-ticket"></i> <span>Support Ticket</span></a></li> -->
            
            <li><a href="logout.php"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>

          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>