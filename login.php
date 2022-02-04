<?php
	
	include'conn.php';

	$email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $q = " select * from users where email = '$email' && pass = '$pass'";

    $result = mysqli_query($con,$q);

    $num = mysqli_num_rows($result);

    if($num == 1)
    {
        $id=$num["id"];
        $_SESSION["id"]=$id; 
        echo '<script>
        alert("Welcome to Dashboard")
        document.location.href="Administration/index.html";
        </script>'; 
    }
    else
    {
        echo '<script>
        alert("Wrong Email Or Password")
        document.location.href="login-page.html";
        </script>';  
    }

?>