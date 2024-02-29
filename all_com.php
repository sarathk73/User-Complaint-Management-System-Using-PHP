<?php
include_once('login.php');
?>
<?php

$connection=mysqli_connect("localhost","root","","cmsnew");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$query="SELECT * FROM complaint";
$result=mysqli_query($connection,$query);
?>
<!DOCTYPE html>
<html>
<head>
<style>
body{
	background-color: #DFDFD6  ;
	font-family: arial,sans-serif;
	font-size: 40px;
	
}
table{
font-family: arial,sans-serif;
border-collapse: collapse;
width: 100%;
}
td,th{
order: 1px solid #dddddd;
text-align: left;
padding: 8px;
}
tr:nth-child(even)
{
background-color: #dddddd;
}
.button{
background-color: #79B5D1  ;
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

</style>
</head>
<body>

<font color="3300ff" size=5><center>ALL COMPLAINTS</font>
<br><br>
<table>

<tr>
<th>ID</th>
<th>Complaint Name</th>
<th>Complaint No</th>
<th>Dated</th>
<th>Description</th>
<th>Status</th>
</tr>
<tbody>
<?php

while($row=mysqli_fetch_array($result))
{
echo "<tr><td>"  .$row['user_id'] ."</td><td>" .$row['comp_subject'] ."</td><td>" .$row['cid'] ."</td><td>" .$row['create_date'] ."</td><td>" .$row['comp_desc'] ."</td><td>" .$row['status'] ."</td></tr>";
}

?>
</tbody>
</table>
<center><a href="table2.php" class="button">Back</a></center><br>
</body>
</html>

