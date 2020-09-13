<?php
$connect    = mysqli_connect('localhost','root','','hospitalen');
function getIp(){
    $ip =$_SERVER['REMOTE_ADDR'];
    if(!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];

    }
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
        return $ip;
}
function doctor_name(){
	global $connect ;
	$doctor = "SELECT * FROM doctor" ;
	$run_doctor = mysqli_query($connect,$doctor);
	while ($row = mysqli_fetch_array($run_doctor))
	 {
       echo ' <option value="'.$row['doctor_name'].'">'.$row['doctor_name'].'</option>';
	}

}

function dayen(){
	global $connect ;
	$day = "SELECT * FROM dayy" ;
	$run_day = mysqli_query($connect,$day);
	while ($row = mysqli_fetch_array($run_day))
	 {
       echo ' <option value="'.$row['day_name'].'">'.$row['day_name'].'</option>';
	}
}
function timepro(){
	global $connect ;
	$timepro = "SELECT * FROM timepro" ;
	$timepro = mysqli_query($connect,$timepro);
	while ($row = mysqli_fetch_array($timepro))
	 {
       echo ' <option value="'.$row['timepron'].'">'.$row['timepron'].'</option>';
	}
}

function patient(){
    global $connect ;
    $count=0;
	$patient = "SELECT * FROM apoint" ;
	$run_patient = mysqli_query($connect,$patient);
	while ($row = mysqli_fetch_array($run_patient))
	 {
       echo '<tr>';
	   echo '<th scope="row">'.++$count.'</th>';
	   echo '<th>'.$row['first_name'].'</th>';
	   echo '<th>'.$row['last_name'].'</th>';
	   echo'<th>'.$row['email'].'</th>';
	   echo'<th>'.$row['phone'].'</th>';
	   echo'<th>'.$row['doctor_name'].'</th>';
	   echo'<th>'.$row['day'].'</th>';
	   echo'<th>'.$row['timen'].'</th>';
	   echo'<th><a href="patient.php?delete_patient='.$row['id'].'"> Delete</a> </th>';
	}
}

function deletperson(){
    global $connect ;
    if (isset($_GET['delete_patient'])) {
        $delete_id= (int)@$_GET['delete_patient'];
        if (isset($delete_id)) {
            $delete_query = "DELETE FROM apoint WHERE id= '$delete_id'" ;
            $run_delete = mysqli_query($connect, $delete_query);
            if (isset($run_delete)) {
                header("location:patient.php");
            }
        }
    }
}

function search(){
    global $connect;
    if (isset($_POST['submit'])) {
        $search= @$_POST['search'];
        $search_query= "SELECT * FROM apoint WHERE first_name = '$search' or last_name = '$search' or email = '$search' or phone = '$search' or doctor_name = '$search' or day= '$search' or timen = '$search'" ;
        $run_search = mysqli_query($connect, $search_query);
        while ($rows = mysqli_fetch_array($run_search)) {
            echo '<tr>';
            echo '<th scope="row">'.$rows['id'].'</th>';
            echo '<th>'.$rows['first_name'].'</th>'; 
            echo '<th>'.$rows['last_name'].'</th>';
            echo'<th>'.$rows['email'].'</th>';
            echo'<th>'.$rows['phone'].'</th>';
            echo'<th>'.$rows['doctor_name'].'</th>';
            echo'<th>'.$rows['day'].'</th>';
			echo'<th>'.$rows['timen'].'</th>';
			echo'<th><a href="patient.php?delete_patient='.$rows['id'].'"> Delete</a> </th>';
        }
    } else {
        echo 'No Record Founded :( ';
    }
}
?>


