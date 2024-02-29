<!DOCTYPE HTML>
<html>
<head>
<style>
body{
	background-color: #DFDFD6  ;
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
form{
	font-family: arial,sans-serif;
	font-size: 20px;
}
input[type=text]{
	width: 20%;
	padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
</style>
</head>

<body>
<center>
<h1> <b>Update Complaint  </b></h1>
<h2> <b>Enter the Serial ID of Complaint :</b></h2>
</center>
<form action="frm2.php" method="POST">
<center>
<b> cid :</b>
<input type="text" placeholder=" ID." class="input" name="ID">
</center>
<center><button class="button" type="submit" name="submit">Submit</button><center>
</form>
</body>
</html>

