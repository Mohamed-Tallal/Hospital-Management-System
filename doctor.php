<?php
include 'file/control.php';
include 'file/header.php';
include 'sql.php';
if(@$_COOKIE['login'] !=1){
  echo "<script>window.open('index1.php','_self')</script>";

}else{
    $doctor =@$_POST['doctor_name'];
    $doctor_delete=@$_POST['doctor_remove'];
    if (isset($_POST['Add'])) {
        if (empty($doctor)) {
            echo "<script> alert('Enter name to added in data base ')</script>";
        } else {
            $insert_doctor = "INSERT INTO doctor (doctor_name) VALUES('$doctor')";
            $run_doctor = mysqli_query($con, $insert_doctor);
            if (isset($run_doctor)) {
                header("location:doctor.php");
            }
        }
    } elseif (isset($_POST['Remove'])) {
        if (empty($doctor_delete)) {
            echo "<script> alert('Enter name to remove from data base ')</script>";
        } else {
            $insert_doctor = "DELETE FROM doctor WHERE doctor_name ='$doctor_delete'";
            $run_doctor = mysqli_query($con, $insert_doctor);
            if (isset($run_doctor)) {
                header("location:doctor.php");
            }
        }
    } ?>
<div class="container-fluid">
<div class="row row-cols-1 row-cols-md-2" id='search_id'>
  <div class="col mb-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Add Doctor</h5>
        <hr>
        <div class="form-group">
            <form action="doctor.php" method="post">
    <label for="inputAddress">Enter name of doctor</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Add Doctor"
    name="doctor_name"
    >
    <br>
      <input type="submit" class="btn btn-primary" name="Add"  value ="Add">  
            </form>
     </div>
   </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Remove Doctor</h5>
        <hr>
        <div class="form-group">
            <form action="doctor.php" method="post">
    <label for="inputAddress">Enter name of doctor</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Remove Doctor" name="doctor_remove">
    <br>
      <input type="submit" class="btn btn-primary" name="Remove" value ="Remove">  
            </form> 
    </div>
      </div>
    </div>
  </div>
</div>
  <div style="height:50px; margin:0px"></div>
<blockquote class="blockquote text-center" style="background-color: #3498DB">
  <footer class="blockquote-footer" style="color: #fff; padding:18px; font-size:19px"><a href="#" style="color: #fff;">© Mohamed Tallal </a>  Terms of Service <cite title="Source Title">Privacy Policy</cite></footer>
</blockquote>


<?php

include 'file/footer.php';

}?>