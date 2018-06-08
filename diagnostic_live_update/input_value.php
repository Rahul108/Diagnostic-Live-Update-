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






<script src="myscript.js"></script>

<?php
$con =  mysqli_connect("localhost","id4140353_prefix","465757","id4140353_testdata");
mysqli_select_db($con,"health_parameters");	
?>

<div class="lged">

   <form action="input_value.php" method="POST" onchange="loadDoc()">
     <p>
     <label>HR</label>
     <p><input type="text" id="hr" name="hr" class = "box" /></p>
     </p>
     <label>BT</label>
     <p><input type="text" id="bt" name="bt" class = "box" /></p>
     </p>
     <label>LVR</label>
     <p><input type="text" id="lvr" name="lvr" class = "box" /></p>
     </p>
     <label>SPO2</label>
     <p><input type="text" id="spo2" name="spo2" class = "box" /></p>
     </p>
    <input type="submit" id="btn" value="insert" class = "submt"/> 
     </p>
   </form>
  
</div>



<?php
$con =  mysqli_connect("localhost","root","");
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

$hr_no = 1;
$bt_no = 1;
$lvr_no = 1;
$spo2_no = 1;

$_SESSION['hr_no'] = $hr_no ;
$_SESSION['bt_no'] = $bt_no ;
$_SESSION['lvr_no'] = $lvr_no ;
$_SESSION['spo2_no'] = $spo2_no ;

if($hr == ""){
  $hr_no = 0;
  $_SESSION['hr_no'] = $hr_no ;
}

if($bt == ""){
  $bt_no = 0;
  $_SESSION['bt_no'] = $bt_no ;
}

if($lvr == ""){
  $lvr_no = 0;
  $_SESSION['lvr_no'] = $lvr_no ;
}

if($spo2 == ""){
  $spo2_no = 0;
  $_SESSION['spo2_no'] = $spo2_no ;  
}

//session_destroy();

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