<?php
include_once 'sql.php' ;
$first_user = @$_POST['user_first'];
$last_user = @$_POST['user_last'];
$email_user = @$_POST['user_email'];
$password_user = @$_POST['user_password'];
if (isset($_POST['sigup'])) {
    if (empty($email_user) || empty($password_user) || empty($first_user) || empty($last_user)) {
        echo "<script> alert('Enter all info :( ')</script>";
    } else {
        $sign = "INSERT INTO  user_login (user_email,user_password,user_first,user_last )
     VALUES ('$email_user','$password_user', '$first_user','$last_user')";
        $insert_user = mysqli_query($con, $sign);
        if (isset($insert_user)) {
            echo "<script> alert('Thank you :) ')</script>";
            header("location:login.php");
        }
    }
}
?>
<?php include 'file/header.php';?>
<body>
	<style type="text/css">
		body{
			background: url('imges/pocard4.jpg') no-repeat;
			height: 710px;
			background-size: cover;
        }
        @media (max-width: 767px){
          body{
            height: 795px;
        }

        }
    
	</style>
<div class="container" style="margin-top: 25px;">
<div class="row">
  <div class="col-lg-3"></div>
            <div class="col-lg-6">
                      <div class="card" >
                                  <div class="card-body">
                                    <img src="imges/patient.jpg" class="card-img-top" alt="Hospital" height="300px">
                                    <hr>
                                                        <form action="sigup.php" method="post"> 
                                                  <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                      <label for="inputEmail4">First Name</label>
                                                      <input type="text" class="form-control" id="inputEmail4" name="user_first" placeholder="enter your first name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                      <label for="inputPassword4">Last Name </label>
                                                      <input type="TEXT" class="form-control" id="inputPassword4" name="user_last"placeholder="enter your first name">
                                                    </div>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="inputAddress">Email</label>
                                                    <input type="email" class="form-control" name="user_email" id="inputemail" placeholder="enter your email">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="inputAddress2">Password</label>
                                                    <input type="password" class="form-control" name="user_password" id="inputAddress2" placeholder="enter your password">
                                                  </div>
                                                  
                                                  <div class="form-group">
                                                    <div class="form-check">
                                                    <input type="submit" class="btn btn-primary" value="Sign in" name="sigup">
                                                      <label class="form-check-label" for="gridCheck" style="padding-left: 100px;">
                                                        Do You Have  a account ? <a href="login.php" >Log in</a>
                                                      </label>
                                                    </div>
                                                  </div>
                                                </form>


                                </div>
                      </div>
          </div>
<div class="col-lg-3"></div>

</div>
</div>



				<!--- Files of bootstrape & Jquery --->

<?php include 'file/footer.php';?>