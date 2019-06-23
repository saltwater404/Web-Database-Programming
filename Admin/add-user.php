<?php 
  require_once('functions/function.php');
  get_header();
  get_sidebar();

  if(!empty($_POST)){
     $name=$_POST['name']; 
     $phone=$_POST['phone']; 
     $email=$_POST['email']; 
     $user=$_POST['username']; 
     $pw=md5($_POST['pass']); 
     $rpw=md5($_POST['repass']); 

     $insert="INSERT INTO cs_user(user_name,user_phone,user_email,user_username,user_password)
     VALUES('$name','$phone','$email','$user','$pw')";
      if(!empty($name)){
        if($pw==$rpw){
          if(mysqli_query($con,$insert)){
              echo "User registration success.";
          }else{
              echo "Registration failed!";
          }
        }else{
          echo "Password didn't match!";
        }
      }else{
        echo "please enter your";
      }

  }
?>
  <div class="col-md-12">
  	<form class="form-horizontal" action="" method="post">
  	<div class="panel panel-primary">
          <div class="panel-heading">
              <div class="col-md-9 heading_title">
                  User Registration
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
                <input type="text" class="form-control" placeholder="" name="name">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Phone</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="" name="phone">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Email</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" placeholder="" name="email">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Username</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="" name="username">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Password</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" placeholder="" name="pass">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Confirm Password</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" placeholder="" name="repass">
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
          <button type="submit" class="btn btn-sm btn-primary">REGISTRATION</button>
        </div>
      </div>
      </form>
  </div><!--col-md-12 end-->
<?php 
    get_footer();
?>