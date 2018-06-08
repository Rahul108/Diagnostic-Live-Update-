<!DOCTYPE html>
<html>

<head>
	<title>TL Diagnostic Report </title>
	<link rel="stylesheet" href="css/style.css">
</head>


<body>

<div class="heading">
<img src="img/banner.png"/>
</div>


<div class="navigation">
</div>






<div id = "output">
 
<script src ="jquery-3.2.1.js"></script>

</div>

<?php
$con =  mysqli_connect("localhost","id4140353_prefix","465757");
mysqli_select_db($con,"id4140353_testdata");

//session_start();

?>


<script>
function disp()
{
  xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET","output.php",false);
  xmlhttp.send();
  document.getElementById("output").innerHTML = xmlhttp.responseText ;
}
disp();
setInterval(function(){
  disp();
},1000)
/*  
  var a = "<?php echo $hr_no; ?>";
  alert(a);
  
  var b = "<?php echo $bt_no; ?>";
  alert(b);

  var c = "<?php echo $lvr_no; ?>";
  alert(c);

  var d = "<?php echo $spo2_no; ?>";
  alert(d);
*/

</script>



 <?php 
// session_destroy(); 
 ?>



</head>
