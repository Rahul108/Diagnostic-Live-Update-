<!DOCTYPE html>
<html>

<head>
	<title>TL Diagnostic Report</title>
	<link rel="stylesheet" href="css/style.css">
</head>


<body>

<div class="heading">
<img src="img/banner.png"/>
</div>


<div class="navigation">
</div>

<div class="body_1">

<div class="lg_date">
<h3>
 <script language="javascript">
 var today = new Date();
 document.write(today);
 </script>
 </h3>
</div>

</div>

<script src="myscript.js"></script>

<?php
$con =  mysqli_connect("localhost","id4140353_prefix","465757","id4140353_testdata");
mysqli_select_db($con,"health_parameters");	

$hr = $_POST['hr'];
$bt = $_POST['bt'];
$lvr = $_POST['lvr'];
$spo2 = $_POST['spo2'];

$hr = stripcslashes($hr);
$bt = stripcslashes($bt);
$lvr = stripcslashes($lvr);
$spo2 = stripcslashes($spo2); 

$hr = mysqli_real_escape_string($con,$hr);
$bt = mysqli_real_escape_string($con,$bt);
$lvr = mysqli_real_escape_string($con,$lvr);
$spo2 = mysqli_real_escape_string($con,$spo2);

//global_variable for confirming input 

session_start();

$hr_no = 2 ;
$br_no = 1 ;
$lvr_no = 1;
$spo2_no = 1;

$_SESSION["hr_no"] = $hr_no;
$_SESSION["br_no"] = $br_no;

if($hr == ""){
  $hr_no = 0;
}

if($bt == ""){
  $bt_no = 0;
}

if($lvr == ""){
  $lvr_no = 0;
}

if($spo2 == ""){
  $spo2_no = 0;
}
//session_write_close();
session_destroy();

if($hr_no == 1){
  mysqli_querY($con,"UPDATE parameter_group_1 SET HR = '$hr' WHERE Name = 'Aninda Sarker Rahul' ");  
}

if($bt_no == 1){
  mysqli_querY($con,"UPDATE parameter_group_1 SET BT = '$bt' WHERE Name = 'Aninda Sarker Rahul' ");  
}

if($lvr_no == 1){
  mysqli_querY($con,"UPDATE parameter_group_1 SET LVR = '$lvr' WHERE Name = 'Aninda Sarker Rahul' ");  
}

if($spo2_no == 1){
  mysqli_querY($con,"UPDATE parameter_group_1 SET SPO2 = '$spo2' WHERE Name = 'Aninda Sarker Rahul' ");  
}

//mysqli_querY($con,"UPDATE parameter_group_1 SET HR = '$hr' , BT = '$bt' , LVR = '$lvr' , SPO2 = '$spo2' WHERE Name = 'Aninda Sarker Rahul' ");


?>