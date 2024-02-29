<?php
$con = mysqli_connect("localhost","root","","cmsnew");
if(isset($_POST['submit']))
{
  
if($con == false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}
$id = isset($_POST['ID'])?$_POST['ID']:'';
 $sql="SELECT * from complaint WHERE cid=$id";
 $result = mysqli_query ($con,$sql);
 
if ($result->num_rows > 0) 
	while($row = $result->fetch_assoc())
 {
  $id = $row['cid'];
  $name = $row['comp_subject'];
  $no = $row['comp_desc'];
  $date = $row['create_date'];
  $up = $row['Admin_id'];
  $status=$row['status'];
}

}
?>


 <!DOCTYPE HTML>
 <html>
 <head>
 <style>
input[type=text],input[type=date]{
	width: 20%;
	padding: 10px 18px;
    margin: 8px 0;
    box-sizing: border-box;
}
body{
	background-color: #DFDFD6  ;
	font-family: arial,sans-serif;
	font-size: 40px;
	
}
.button{
background-color: #931109  ;
border: none;
color: white;
padding: 15px 32px;
text-align: centre;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
cursor: pointer;
}
form{
	font-family: arial,sans-serif;
	font-size: 20px;
}
</style>
</head>

<body>
<center>
<h2> <b><font color="FireBrick">Update Complaint</font></b></h2>

<form action="frm4.php" method="POST">
<center>
<b> CID :</b>
<input type="text"  name="ID" value="<?php echo "$id" ?>"><br><br>

</center>

<b> &nbsp;&nbsp;&nbsp;Complaint Name : </b>
<input type="text"  name="complaint_name" value="<?php echo "$name" ?>"><br><br>
<b> Complaint Date: </b>
<input type="date"  name="dated" value="<?php echo "$date" ?>">
<b> Complaint Description: </b>
<input type="text"  name="Description" value="<?php echo "$no" ?>">
<b>&nbsp;&nbsp;&nbsp; :</b>
<b>Status :</b>
<input type="text"  name="Status" value="<?php echo "$status" ?>"><br><br>

<center><a href="table2.php" class="button">Back</a></center><br>
<center><button class="button" type="submit" name="submit">Submit</button><center>


</center>


</body>
</html>
