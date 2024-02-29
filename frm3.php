
<?php
$con = mysqli_connect("localhost","root","","cmsnew");
if(isset($_POST['submit']))
{
  
if($con == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
}

?>


 <!DOCTYPE HTML>
 <html>
 <head>
 <style>
body{
	background-color: #DFDFD6  ;
	font-family: arial,sans-serif;
	font-size: 40px;
	
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
</style>
</head>

<body>
<center>
<b><font color="DarkSlateGrey">Show Complaint</font></b></h2>
<b>
<?php
$i=$_POST['ID'];
$q="SELECT * from complaint WHERE user_id='$i'";
$result = mysqli_query($con,$q);
$c=mysqli_num_rows($result);
if ($c==0) {
    echo "not found";
    }
    else
    {
    ?>
      <table border='1'>
            <tr>
                <th>UID </th>
                <th>Complaint id </th>
                 <th>Complaint name </th>
                 <th>Dated</th>
                <th>Description</th>
                 <th>Status</th>
            </tr>


            <?php
	while($row=mysqli_fetch_assoc($result)){
        ?>
        <tr>
        <td><?php echo($row['user_id'])?></td>
        <td><?php echo($row['cid'])?></td>
        <td><?php echo($row['comp_subject'])?></td>
        <td><?php echo($row['create_date'])?></td>
        <td><?php echo($row['comp_desc'])?></td>
        <td><?php echo($row['status'])?></td>
        </tr>
        <?php
	}
    }
?>
<center><a href="table.php" class="button">Back</a></center><br>

</center>
</table>
</form>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/>

<center>
<table width=100% bgcolor=white cellpading=3 cellspacing=3>
<td style="background:-moz-radial-gradient(circle,indigo,black);">
<font color=yellow size=5><b><i><blink><center>Notice</blink>
</td>
<tr>
<td style="background:-moz-radial-gradient(circle,indigo,black);">
<font color=33ccff size=3><b><i><marquee direction=left>
If the date was changed,it indicate the the Complaint was fixed and it represent the fixed date</marquee>
</td>
</table>

</body>
</html>
