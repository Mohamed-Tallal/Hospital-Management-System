<?php
include_once 'sql.php' ;

    $email = @$_POST['user_email'];
    $password = @$_POST['user_password'];
    if (isset($_POST['submit'])) {
        if (empty($email) or empty($password)) {
            echo "<script> alert('Enter all info ')</script>";
        }
        $log = "SELECT * FROM user_login WHERE user_email='$email' AND user_password='$password'";
        $run_log = mysqli_query($con, $log);
        if (mysqli_num_rows($run_log) == 1) {
            $row = mysqli_fetch_array($run_log);
            $row_ad = $row['user_email'];
            setcookie('user_email', $row_ad, time()+60*60*24);
            setcookie('login_user', 1, time()+60*60*24);
            echo '<script> alert(" welcom to your page  ") </script>';
            echo "<script>window.open('index.php','_self')</script>";
          } else {
            echo "<script> alert('This Information is Wrong  :(  &nbsp;')</script>";
        }
    }


    include 'file/header.php';

?>

<body>
	<style type="text/css">
		body{
			background: url('imges/pocard4.jpg') no-repeat;
			height: 705px;
     background-size: cover;
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
                                    <form action="login.php" method="post">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                                              name="user_email" placeholder="enter your email ">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="user_password" 
                                          placeholder="enter your password ">
                                      </div>
                                      <div class="form-group form-check">
                                      <div class="form-group">
                                        <div class="form-check">
                                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                          <label class="form-check-label" for="gridCheck" style="padding-left: 100px;">
                                            If you do not have acount ? <a href="sigup.php" >Sigin Up</a>
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
<?php include 'file/footer.php'?>