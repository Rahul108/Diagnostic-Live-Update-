<!DOCTYPE html>
<html>
<body>


<?php
$con =  mysqli_connect("localhost","id4140353_prefix","465757","id4140353_testdata");
mysqli_select_db($con,"health_parameters");	

//include 'process_data.php' ;

$result = mysqli_query($con,"SELECT * FROM parameter_group_1 WHERE Name = 'Aninda Sarker Rahul' ") ;
$row_result = mysqli_fetch_array($result);

session_start();

  if($_SESSION["hr_no"]==1){
    ?> <div class = "hr_green"> <?php
    echo "HR : * ".$row_result['HR']."    /Min" ;
    
    ?> </div> <?php 
  }
  else{
    ?> <div class="hr_blue"> <?php echo "HR : ".$row_result['HR']." /Min" ;
    echo "<br>"; 
    ?> </div> <?php 
  }


  ?> <div class="bp_blue"> <?php
  echo "BP  135 - 90  mmHg" ;
  ?> </div> <?php
  
  if($_SESSION["bt_no"]==1){
    ?> <div class="bt_green"> <?php
    echo "BT : * ".$row_result['BT']." Far" ;
    echo "<br>";  
    ?> </div> <?php
  }
  else{
    ?> <div class="bt_blue"> <?php
    echo "BT : ".$row_result['BT']." Far" ;
    echo "<br>";
    ?> </div> <?php 
  }
    

  if($_SESSION["lvr_no"]==1){
    ?> <div class="lvr_green"> <?php
    echo "LVR : * ".$row_result['LVR']." /Min" ;
    echo "<br>";
    ?> </div> <?php 
  }
  else{
    ?> <div class="lvr_blue"> <?php
   echo "LVR : ".$row_result['LVR']." /Min" ;
    echo "<br>";
    ?> </div> <?php  
  }
     
  if($_SESSION["spo2_no"]==1){
    ?> <div class="spo2_green"> <?php
    echo "SPO2 : * ".$row_result['SPO2']." %" ;
    echo "<br>";
    ?> </div> <?php 
  }
  else{
    ?> <div class="spo2_blue"> <?php
    echo "SPO2 : ".$row_result['SPO2']." %" ;
    echo "<br>";
    ?> </div> <?php  
  }

  ?> <div class="sugar_blue"> <?php
  echo "SUGAR   5.5  mmol/L" ;
  ?> </div> <?php
    



   // echo $_SESSION["hr_no"] ;
//session_destroy();

?>

</body>
</html>