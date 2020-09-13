<?php
include 'file/header.php';
 include 'function.php';
include 'file/control.php';
if(@$_COOKIE['login'] !=1){
  echo "<script>window.open('index1.php','_self')</script>";

}else{
    ?>

<div class="container">
    <div class="card" id='search_id'>
        <div class="card-body">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Patient Details </a>
  <button id='button_style'>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
  </div>
    <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
      <input class="btn btn-outline-success my-2 my-sm-0"  type="submit" value="Search" name="submit">
    </form>
  </div>
</nav>
        </div>
      <div id='tableid'>
<table class="table table-striped" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Doctor</th>
      <th scope="col">Day</th>
      <th scope="col">Time</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <?php  patient(); ?>
      <?php deletperson(); ?>
  </tbody>
</table>
</div>
</div>
</div>
     
<div style="height:50px; margin:0px"></div>
<blockquote class="blockquote text-center" style="background-color: #3498DB">
  <footer class="blockquote-footer" style="color: #fff; padding:18px; font-size:19px"><a href="#" style="color: #fff;">© Mohamed Tallal </a>  Terms of Service <cite title="Source Title">Privacy Policy</cite></footer>
</blockquote>


<?php
include 'file/footer.php';
}
?>







