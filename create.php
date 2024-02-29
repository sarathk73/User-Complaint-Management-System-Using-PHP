<html>
<title>cms
</title>

<center>
<style>
body{
background-image:url('sign.jpg');
background-repeat:no-repeat;
background-attachment:fixed;
background-size:cover;
}
</style>

<style>
.side
{
-moz-boarder-radius:10px;
border:1px;
border-bottom-width:9px
}
</style>
<br/><br/><br/><br/><br/>
<br/><br/><br/><br/>

<table width=500 bgcolor=white align=center class=side>
<tr>
<td align=center>
<br/><br/>
<font size=8 color=#000075>
<form action='create.php' method='POST'>
<b>
Welcome
</br/></font><br/><br/>

<font size=3 color=black><u><b>
create an account<br/><br/>
        <form action='create.php' method='POST'>
        <label>Userid:</label>
        <input type ='text' name='userid' required><br/><br/>
        <label> Name : </label>
        <input type ='text' name='name' required><br/><br/>
        <label>email :</label>
        <input type ='text' name='email' required><br/><br/>
        <label>password: </label>
        <input type ='text' name='pass' required><br/><br/>
        <form action=uindex.php><input type='submit' name='submit' value='submit'><br/><br/><br/>
	<font color=red>Click here to<a href=uindex.php>Login<br/><br/><br/><br/>
</html>
<?php
include 'l.php';
if(isset($_POST['submit'])){
    $u=$_POST['userid'];
    $n=$_POST['name'];
    $e=$_POST['email'];
    $p=$_POST['pass'];
   $query="call insuser('$u','$n','$p','$e')";
    $res=mysqli_query($con,$query);

}
