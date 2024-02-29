<?php
include_once('ulogin.php');
?>
<html>
<head>

</head>
<body>
<form action="" method='post'>
<style>
.side
{

-moz-boarder-radius:10px;
border:1px;
border-bottom-width:9px

}
</style>

<style>
body{
background-image:url('img.png');
background-repeat:no-repeat;
background-attachment:fixed;
background-size:cover;
}
</style>

<br/><br/><br/><br/><br/>
<br><br><br><br><br><br><br>
<table width=500 bgcolor=white align=center class=side>
<tr>
<td align=center>
<br/><br/>
<font size=8 color=#000075>
<b>
User login
</br/></font><br/><br/>
<label>USER NAME</label>
<input type='text' name='username' id='username' required></br></br>
<label>PASSWORD</label>
<input type='password' name='password' id='password' required></br></br>
<input type='submit' name='submit' value='submit'></br></br></br>

<font color=red>Dont you have an account?<a href=create.php>Click here<br/><br/><br/><br/>
</html>

</form>
</body>

