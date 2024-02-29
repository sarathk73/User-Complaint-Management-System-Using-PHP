

<html>

    <body>
<style>
body{
background-image:url('comp.jpeg');
background-repeat:no-repeat;
background-attachment:fixed;
background-size:cover;
}
</style>

        <form action='form1.php' method='POST'>
	<center>
	<font size=8 color=#000075>
<b>
NEW COMPLAINT
</br/></font><br/><br/>
        <label>User id:</label>
        <input type ='text' name='title' required><br/><br/>
        <label> Complaint Subject : </label>
        <input type ='text' name='dname' required><br/><br/>
        <label>DESCRIPTION :</label>
	<textarea name='year' rows=10 cols=100%></textarea><br/><br/>
       
        <label>Complaint date: </label>
        <input type ='date' name='rate' required><br/><br/>
        <input type='submit' name='submit' value='SUBMIT'><br/><br/><br/><br/><br/>
        <a href='table.php'>BACK</a>
</center>
</form>
</body>

</html>
<?php
include 'l.php';
if(isset($_POST['submit'])){
    $a=$_POST['title'];
    $b=$_POST['dname'];
    $c=$_POST['year'];
    $d=$_POST['rate'];
    $query="insert into complaint(user_id,Admin_id,comp_subject,comp_desc,create_date) values('$a',1,'$b','$c','$d')";
   

    $res=mysqli_query($con,$query);
	

}


