<style>
    .top_nav{ 
        background: url('imges/Hospital-Management-System.jpg') no-repeat;
        height: 425px;
        background-size: cover;
    }
    @media (max-width: 767px){
        .top_nav{
          margin-left:-620px;
          height: 300px;
        }
        #button_style{
       border:none;
       cursor: none;

        }
        #search_id{
          margin-top:20px
        }
        #tableid{
          width: 530px;
          overflow: scroll;

        }
      }
    </style>
<!--Start navbar --->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
<a class="navbar-brand" href="index.php">Hospital Management System</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse " id="navbarNav">
 <ul class="navbar-nav ">
   <li class="nav-item">
     <a class="nav-link" href="#"> </a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="patient.php">Patient </a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="doctor.php">Doctor  </a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="day.php">Day</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="time.php">Time</a>
   </li>
 
 </ul>
</div>
</nav>
<!--Start navbar --->
<div class="top_nav" ></div>
