<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "docdot";
$conn = new mysqli($servername, $username, $password, $database);


if(!$conn){
	echo"error";
}

if(isset($_POST['addother'])) {
$medicine=htmlentities($_POST['check_medicine']);
$patient=htmlentities($_POST['patient']);
$medicine_quantity=htmlentities($_POST['medicine_quantity']);
$day_count=htmlentities($_POST['day_count']);
$medicine_intake=htmlentities($_POST['medicine_intake']);
$date=htmlentities($_POST['medicine_intake']);
$time_intervals=implode(',', $_POST['time_intervals']);
$cur_date=date('d-m-Y');	
$sql="INSERT INTO `prescription`(`medicines`,`medicine_quantity`, `day_count`, `medicine_intake`,`time_intervals`,`patient_id`, `date`) VALUES ('$medicine','$medicine_quantity','$day_count','$medicine_intake','$time_intervals','$patient','$cur_date')";
$msg =$patient;
mysqli_query($conn,$sql);
header("location: checkmedicine.php");
}

if(isset($_POST['create'])) {
$medicine=htmlentities($_POST['check_medicine']);
$patient=htmlentities($_POST['patient']);
$medicine_quantity=htmlentities($_POST['medicine_quantity']);
$day_count=htmlentities($_POST['day_count']);
$medicine_intake=htmlentities($_POST['medicine_intake']);
$date=htmlentities($_POST['medicine_intake']);
$time_intervals=implode(',', $_POST['time_intervals']);
$cur_date=date('d-m-Y');	
$sql="INSERT INTO `prescription`(`medicines`,`medicine_quantity`, `day_count`, `medicine_intake`,`time_intervals`,`patient_id`, `date`) VALUES ('$medicine','$medicine_quantity','$day_count','$medicine_intake','$time_intervals','$patient','$cur_date')";
$msg =$patient;
mysqli_query($conn,$sql);
header("location: prescription_page.php?id=$patient");
}
?>