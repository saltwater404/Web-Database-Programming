<?php 
  require_once('functions/function.php');
  get_header();
  get_sidebar();
  $id=$_GET['e'];
  $sele="SELECT * FROM cs_user WHERE user_id='$id'";
  $qry=mysqli_query($con,$sele);
  $data=mysqli_fetch_assoc($qry);

  if(!empty($_POST)){
      $eid=$_POST['eid'];
      $name=$_POST['name'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];

      $update="UPDATE cs_user SET user_name='$name', user_phone='$phone' WHERE user_id='$eid'";
      if(!empty($name)){
          if(mysqli_query($con,$update)){
              header('Location: view-user.php?v='.$eid);
          }else{
              echo "Update failed!";
          }
      }else{
          echo "Please enter your name!";
      }
  }
?>
  <div class="col-md-12">
  	<form class="form-horizontal" action="" method="post">
  	<div class="panel panel-primary">
          <div class="panel-heading">
              <div class="col-md-9 heading_title">
                  Update User Information
               </div>
               <div class="col-md-3 text-right">
               	<a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All User</a>
              </div>
              <div class="clearfix"></div>
          </div>
        <div class="panel-body">
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Name</label>
              <div class="col-sm-8">
                <input type="hidden" name="eid" value="<?= $data['user_id']; ?>">
                <input type="text" class="form-control" name="name" value="<?= $data['user_name']; ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Phone</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="phone" value="<?= $data['user_phone']; ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Email</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" name="email" value="<?= $data['user_email']; ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Username</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="" value="<?= $data['user_username']; ?>" disabled="disabled">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">User Role</label>
              <div class="col-sm-4">
                <select class="form-control select_cus">
                    <option value="">Select User Role</option>
                    <option value="1">Admin</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Upload Photo</label>
              <div class="col-sm-8">
                <input type="file" name="">
              </div>
            </div>
        </div>
        <div class="panel-footer text-center">
          <button class="btn btn-sm btn-primary">UPDATE</button>
        </div>
      </div>
      </form>
  </div><!--col-md-12 end-->
<?php 
    get_footer();
?>