<?php include 'function.php';
include 'file/header.php';
if(@$_COOKIE['login'] !=1){
  echo "<script>window.open('index1.php','_self')</script>";

}else{
    ?>

<body>
    <style>
        .top_nav{
    background: url('imges/itis.jpg') no-repeat; 
    background-size: cover;
    height: 280px;
    
  }
    </style>

<div class="jumbotron top_nav"></div>
<div class="container">
    <div class="card">
        <div class="card-body">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Patient Details </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
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
<table class="table table-striped">
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
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <?php  search(); ?>
      <?php deletperson(); ?>

  </tbody>
</table>
</div>
</div>

     


<div style="height:50px; margin:0px"></div>
<blockquote class="blockquote text-center" style="background-color: #3498DB">
  <footer class="blockquote-footer" style="color: #fff; padding:18px; font-size:19px"><a href="#" style="color: #fff;">© Mohamed Tallal </a>  Terms of Service <cite title="Source Title">Privacy Policy</cite></footer>
</blockquote>


<?php include 'file/footer.php';
}?>





