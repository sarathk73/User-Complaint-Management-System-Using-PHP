<?php
include_once('ulogin.php');
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
background-image:url('img1.webp');
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
border: 2px solid #000000;
text-align: left;
padding: 8px;
}
th {
    background-color: #CD0505;
    color: white;
}
tr:nth-child(even)
{
background-color: #dddddd;
}
.button{
background-color: #333333  ;
width: 19%;
border: 1px solid #000000;
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
<br><br><br><br><br>
<font color="black" size=10><center>User dashboard</font>
<br><br>
<font <font color="black" size=5><center>Name:<?php echo $_SESSION['username']; ?></font>
<br><br>
<a href="form1.php" class="button"><center><font size="4">New Complaint</font></center></a>
<br>
<a href="form3.php" class="button"><center><font size="4">Show Complaint</font></center></a>
<br>
<a href="c.html" class="button"><center><font size="4">Contact</font></center></a>
<br><br/><br/><br/><br/><br/><br><br/><br/><br/><br/><br/>
<a href="aindex.php" class="button"><center><font size="4">Logout</font></center></a>
<br>
<br><br>
</body>
</html>

