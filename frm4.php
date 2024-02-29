<?php

$con = mysqli_connect("localhost","root","","cmsnew");
if(isset($_POST['submit']))
{
  
if($con == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
 
  $id = isset($_POST['ID'])?$_POST['ID']:'';
  $name = isset($_POST['complaint_name'])?$_POST['complaint_name']:'';
 
  $date = isset($_POST['dated'])?$_POST['dated']:'';
  $no = isset($_POST['Description'])?$_POST['Description']:'';
  $status=isset($_POST['Status'])?$_POST['Status']:'';
 
  
 
  $id = mysqli_real_escape_string($con,$id);
  $name = mysqli_real_escape_string($con,$name);
 
  $date = mysqli_real_escape_string($con,$date);
  $no = mysqli_real_escape_string($con,$up);
   $status = mysqli_real_escape_string($con,$status);
 
  
   
   $query="UPDATE complaint SET status='".$status."',create_date='".$date."' WHERE cid='".$id."'";
if(mysqli_query($con, $query)){
  header('location:table2.php');}
	 else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
}
}
  mysqli_close($con);

?>
