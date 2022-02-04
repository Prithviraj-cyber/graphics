<?php
	
	include'conn.php';

	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$bname = $_POST['bname'];
	$gstn = $_POST['gstn'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];

	$query = "insert into users (name, mobile, email, bname, gstn, pass) values 
	('$name','$mobile','$email','$bname', '$gstn' ,'$pass')" or die(mysqli_error());

	echo "query";
	$q = mysqli_query($con, $query);
	if ($q) {
		echo '<script>
		alert("Your Data Successfully Added.")
		document.location.href="registration-page.html";
		</script>';    
	}
	else 
	{
		echo '<script>
		alert("Some error occured")
		document.location.href="registration-page.html";
		</script>';     
	}
	// header('location:registration-page.html');

?>