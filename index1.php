<?php
include_once 'sql.php' ;

$email = @$_POST['email'];
$password = @$_POST['password'];
if (isset($_POST['submit'])) {
    if (empty($email) or empty($password)) {
        echo "<script> alert('Enter all info ')</script>";
    }
    $query = "SELECT * FROM loginen WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $row_ad1 = $row['email'];
        setcookie('email', $row_ad1, time()+60*60*24);
        setcookie('login', 1, time()+60*60*24);
        echo '<script> alert(" welcom to your page  ") </script>';
        echo "<script>window.open('patient.php','_self')</script>";

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
<div class="container" >
<div class="row" style=" margin-top: 25px;">
  <div class="col-lg-3"></div>
          <div class="col-lg-6">
                  <div class="card" >
                            <div class="card-body">
                              <img src="imges/card.jpg" class="card-img-top" alt="Hospital" height="300px">
                              <hr>
                                      <form action="index1.php" method="post">
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Email address</label>
                                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                                                name="email" placeholder="enter your email ">
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleInputPassword1">Password</label>
                                          <input type="password" class="form-control" id="exampleInputPassword1" name="password" 
                                            placeholder="enter your password ">
                                        </div>
                                        <div class="form-group form-check">
                                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                      </form>
                          </div>
                  </div>
        </div>
<div class="col-lg-3"></div>
</div>

</div>

		<?php include 'file/footer.php';?>