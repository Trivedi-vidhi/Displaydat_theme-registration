<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="student";

	$connection = mysqli_connect ("localhost","root","","student");
if($_POST)
{	
	$Student_id =$_POST['Student_id'];
	$Student_name =$_POST['Student_name'];
	$Student_gender =$_POST['Student_gender'];
	$Student_email =$_POST['Student_email'];
	$Student_dob =$_POST['Student_dob'];
	$Student_mobile =$_POST['Student_mobile'];
	$Student_address =$_POST['Student_address'];
	$Student_bloodgroup =$_POST['Student_bloodgroup'];
	$Student_password =$_POST['Student_password'];
	$Student_city =$_POST['Student_city'];
	
$sql= "insert into student_table(Student_id,Student_name,Student_gender,Student_email,Student_dob,Student_mobile,Student_address,student_bloodgroup,Student_password,Student_city) values ('$Student_id','$Student_name','$Student_gender','$Student_email','$Student_dob','$Student_mobile','$Student_address','$Student_bloodgroup','$Student_password','$Student_city')";
//or die ("error" mysqli_error($connection);
$q=mysqli_query($connection,$sql);

if($q)
{
	echo "<script>alert('data successfully added');</script>";
}
else
{
	print mysqli_error($connection);
}
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>



<title>Theme registration</title>

<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
	
</head>

<body bgcolor="skyblue">

	<div id="container">
	
		<div id="banner"></div> <!-- end banner -->
	


		<div id="content">
		
<form action = "" method="post">
<h3>Student_id:</h3><input type="text"name="Student_id"placeholder="Enter your ID"/><br>
<h3>Student_name:</h3><input type="text"name="Student_name"placeholder="Enter your Name"/><br>
<h3>Student_gender:</h3><input type="radio"name="Student_gender"value="Male"/>Male<input type="radio"name="Student_gender"value="Female"/>Female<br>
<h3>Student_email:</h3><input type="text"name="Student_email"placeholder="Enter your Email ID"/><br>
<h3>Student_dob:</h3><input type="text"name="Student_dob"placeholder="Enter your DOB"/><br>
<h3>Student_mobile:</h3><input type="text"name="Student_mobile"placeholder="Enter your Mobile number"/><br>
<h3>Student_address:</h3><input type="text"name="Student_address"placeholder="Enter your Address"/><br>
<h3>Student_bloodgroup:</h3><input type="text"name="Student_bloodgroup"placeholder="Enter your bloodgroup"/><br>
<h3>Student_password:</h3><input type="text"name="Student_password"placeholder="Enter your Password"/><br>
<h3>Student_city:</h3><select name="Student_city"/><option>Vadodara</option>
					<option>Ahmedabad</option>
					<option>Surat</option>
					<option>Rajkot</option><br>


<br><input type="submit"/><br>
<?php
echo "<a href='display.php'> Show record</a>";
?>

</form>


		
	</div> <!-- end container -->
</body>
</html>