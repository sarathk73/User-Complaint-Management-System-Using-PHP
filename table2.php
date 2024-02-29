<?php
include_once('alogin.php');
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
background-image:url('img2.jpg');
background-repeat:no-repeat;
background-attachment:fixed;
background-size:cover;
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
<font color="black" size=10><center>Admin dashboard</font>
<h2>  Complaint Mnagagement System </h2>

<a href="form2.php" class="button">Update Complaint</a>
<a href="all_com.php" class="button">All Complaints</a>
<a href="index.php" class="button">Logout</a>
</html>

