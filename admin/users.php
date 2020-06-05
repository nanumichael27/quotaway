


      <?php include_once('header.php'); ?>

      <?php 
        $usersTableData = '';
        include('../connection.php');
        $sql = "SELECT * FROM `users`";
        $result = mysqli_query($link, $sql);
        if($result){
          while($users = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $user_id = $users['id'];
            $username = $users['username'];
            $fullname = $users['fullname'];
            $email = $users['email'];
            $phone = $users['phone'];
            $address = $users['address'];
            $activation_status = $users['activation_status'];
            $class ='text-info';
            $urlToCall = 'activateuser.php';
            $text = 'Activate Account';
            if($activation_status == 'activated'){ 
              $class = 'text-success';
              $urlToCall = 'deactivateuser.php';
              $text = 'Deactivate Account';
            }else if($activation_status == 'deactivated'){
              $urlToCall = 'activateuser.php';
              $class = 'text-danger';
            }
              $urlToCall = urldecode("API/".$urlToCall."?id=$user_id");
              $suspendAccountUrl = urldecode("API/suspendaccount.php/?id=$user_id");

            $usersTableData .= "                      
            <tr>
            <td>$fullname</td>
            <td>$email</td>
            <td>$username</td>
            <td>$phone</td>
            <td>$address</td>
            <td class ='$class'>$activation_status</td>
            <td> 
            <button type='button' class='btn btn-info btn-sm'>View details</button>
            <div class='btn-group'>
              <button type='button' class='btn btn-info btn-sm dropdown-toggle' data-toggle='dropdown'>
                <span class='caret'></span>
              </button>
              <ul class='dropdown-menu'>
                <li><a href='$urlToCall'>$text</a></li>
                <li><a href='$suspendAccountUrl'>Suspend Account</a></li>
              </ul>
            </div>
          </div></td>
          </tr>";
          }

        }
         
      ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php include_once('sidebar.php') ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Users
            <small>You can search for any user and edit their account</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Users</a></li>
            <!-- <li class="active">Here</li> -->
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Your Page Content Here -->
          <div class="row">
            <div class="col-md-12">
            <div class="box" style="overflow-x: scroll;">
                <div class="box-header">
                  <h3 class="box-title">All Users</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Phone </th>
                        <th>Address</th>
                        <th>Activation Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php echo $usersTableData; ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Phone </th>
                        <th>Address</th>
                        <th>Activation Status</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
            <!-- /.col -->
          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <?php require_once 'footer.php';