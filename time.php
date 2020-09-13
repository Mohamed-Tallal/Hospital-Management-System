<?php include 'file/control.php';
include 'file/header.php';
include 'sql.php';
if(@$_COOKIE['login'] !=1){
  echo "<script>window.open('index1.php','_self')</script>";

}else{
    $day_insert =@$_POST['day_insert'];
    $day_delete=@$_POST['day_remove'];
    if (isset($_POST['Add'])) {
        if (empty($day_insert)) {
            echo "<script> alert('Enter name to added in data base ')</script>";
        } else {
            $insert_day = "INSERT INTO timepro (timepron) VALUES('$day_insert')";
            $run_day = mysqli_query($con, $insert_day);
            if (isset($run_day)) {
                header("location:time.php");
            }
        }
    } elseif (isset($_POST['Remove'])) {
        if (empty($day_delete)) {
            echo "<script> alert('Enter name to remove from data base ')</script>";
        } else {
            $insert_day = "DELETE FROM timepro WHERE timepron ='$day_delete'";
            $run_day = mysqli_query($con, $insert_day);
            if (isset($run_doctor)) {
                header("location:time.php");
            }
        }
    } ?>
<div class="container-fluid">
<div class="row row-cols-1 row-cols-md-2" id='search_id'>
  <div class="col mb-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Add Time</h5>
        <hr>
        <div class="form-group">
            <form action="time.php" method="post">
    <label for="inputAddress">Add Time</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Add Time" name="day_insert">
    <br>
      <input type="submit" class="btn btn-primary" value ="Add" name="Add">  
            </form>
    </div>
   </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Remove Time</h5>
        <hr>
        <div class="form-group">
        <form action="time.php" method="post">
    <label for="inputAddress">Remove Time</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Remove Time" name="day_remove">
    <br>
      <input type="submit" class="btn btn-primary" value ="Remove" name="Remove">  
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

<?php include 'file/footer.php';
}
?>