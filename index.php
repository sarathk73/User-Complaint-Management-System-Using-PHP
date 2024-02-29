
<html>
<head>
	<title> Complaint Management System</title>
	<style>
.button {
  background-color: #5F9EA0; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button4 {border-radius: 12px;}
</style>
</head>
<body>

	<div class="header">
		<h2>Are you a ?</h2>
	</div>

	<form >
		
		<button class="button button4" type="submit">User<?php header('location:uindex.php');?></button>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button class="button button4" type="submit">Admin<?php header('location:aindex.php');?></button>
		
	</form>

</body>
</html>


