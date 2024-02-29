<!DOCTYPE HTML>
<html>
<head>
<style>
body{
	background-color: #DFDFD6  ;
}
.button{
background-color: #000080  ;
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
<h1> <b><font color="Navy">Show Complaint </font></b></h1>
<h2> <b>Enter the USERId :</b></h2>
</center>
<form action="frm3.php" method="POST">
<center>
<b><font color="FireBrick"> ID. :</b>
<input type="text" placeholder="ID" class="input" name="ID">
</center>
<center><button class="button" type="submit" name="submit">Submit</button><center>
</form>
</body>
</html>

