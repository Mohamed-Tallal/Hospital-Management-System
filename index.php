<?php

include 'sql.php';
session_start();

include 'file/header.php';
include 'function.php';
$user_email =@$_COOKIE['user_email'];
$user = @$_COOKIE['login_user'];

if($user != 1){
  echo "<script>window.open('login.php','_self')</script>";
}
else{
    $first = @$_POST['first_name'];
    $last  = @$_POST['last_name'];
    $email = @$_POST['email'];
    $phone = @$_POST['phone'];
    $doctor_name = @$_POST['doctor_name'];
    $day = @$_POST['day'];
    $time = @$_POST['timen'];
    if (isset($_POST['submit'])) {
        if (empty($first) || empty($last) || empty($email) || empty($phone) ||
    empty($doctor_name) || empty($day) || empty($time)) {
            echo "<script> alert('Enter all info ')</script>";
        } else {
            $insert_apoint = "INSERT INTO apoint (first_name,last_name,email,phone,doctor_name,day,timen)
         VALUES ('$first','$last','$email','$phone','$doctor_name','$day','$time') ";
            $run_insert = mysqli_query($connect, $insert_apoint);
            if (isset($run_insert)) {
                echo "<script> alert('Thank you :) ')</script>";
            }
        }
    } ?>

    <style type="text/css">
      .top_nav{
        background: url('imges/itis.jpg') no-repeat; 
        background-size: cover;
        height: 250px;
        margin-bottom:30px
      }
      .lef{
        background: #3498DB;
        color:#ffffff ;
        
     }
  .cardd{
    border: 1px solid #ffffff;
    margin: -20px
  }
  .hrh{
    font-size:18px;
    color: #273746;
  }
     @media (max-width: 767px){
        .top_nav{
          margin-left:-630px;
          height: 250px;
        }
        #idbar{
          margin-bottom:20px
        }
      }
  </style>
  <body> 
   <div class="top_nav" ></div>
 <div class="container-fluid">
 <div class="row">
   <div class="col-lg-4">
    <div class="card cardd">
     <div class="card-body">
        <div class="list-group">
     
     <?php
   

        $query = "SELECT * FROM user_login WHERE user_email='$user_email'";
        $run_query = mysqli_query($connect, $query);
        while ($row = mysqli_fetch_array($run_query)) {
            $row_name = $row['user_first'] .' '. $row['user_last'] ;
            $row_email = $row['user_email']; ?>

              <div class="list-group-item lef">Your Details</div>
              <div class="list-group-item hrh">Name :  <?php echo  $row_name?> </div>
              <div  class="list-group-item hrh"> Email : <?php echo $row_email?> </div>
              <?php  } ?>

        </div>
      
    
      
       <hr>
       <div class="list-group" id='idbar'>
        <div  class="list-group-item  lef">Admin Pananl</div>
        <a href="patient.php" class="list-group-item hrh">Patient Details</a>
        <a href="patient.php" class="list-group-item hrh">Update Hospital </a>
     
       </div>  
    </div>
  </div>
    </div>

 
  <!--- Start Add appointment --->
  <div class="col-lg-8 nleft">
    <div class="card">
      <div class="card-body lef">Add reservations</div>
        <div class="card-body">
          <form action="index.php" method="post" class="form-group">
          <div class="form-row">
            <div class="form-group col-md-6 hrh">
              <label for="inputEmail4">First name</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Your First Name" 
                name="first_name">
           </div>
            <div class="form-group col-md-6 hrh">
              <label for="inputtext">Last name</label>
              <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Your Last Name "
              name="last_name">
            </div>
            </div>
               <div class="form-group hrh">
          <label for="inputemail">Email</label>
          <input type="email" class="form-control" id="inputAddress" placeholder="Enter Your Email"
          name="email">
        </div>
  <div class="form-group hrh">
    <label for="inputAddress2">Phone</label>
    <input type="number" class="form-control" id="inputAddress2" placeholder="Enter Your Phone Number" name="phone">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6 hrh">
      <label for="inputCity">Doctor</label>
      <select id="inputState" class="form-control" name="doctor_name">
        <?php doctor_name()?>
      </select>
    </div>
    <div class="form-group col-md-4 hrh">
      <label for="inputState">Day</label>
      <select id="inputState" class="form-control" name="day">
       <?php dayen()?>
      </select>
    </div>
  
   <div class="form-group col-md-2 hrh">
      <label for="inputZip">Time</label>
        <select id="inputZip" class="form-control" name="timen">
      <?php  timepro(); ?>
      </select>
    </div>
  </div>
 
 <input type="submit" class="btn btn-primary"  name="submit" value="Add appointment">
 </div>
</form>
      </div>
    </div>
  </div>
    </div>
    <div>
    <!--- End Add appointment --->
  <div class="col-md-1"></div>


  <div style="height:50px; margin:0px"></div>
<blockquote class="blockquote text-center" style="background-color: #3498DB">
  <footer class="blockquote-footer" style="color: #fff; padding:18px; font-size:19px"><a href="#" style="color: #fff;">© Mohamed Tallal </a>  Terms of Service <cite title="Source Title">Privacy Policy</cite></footer>
</blockquote>





    <?php
     include 'file/footer.php';
        }
    ?>