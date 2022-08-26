<?php
	
	if ($_POST ){
		$host = "sql310.unaux.com";
		$dbUsername = "unaux_29370846";
		$dbPassword = "Kishore1746@#";
		$dbname = "unaux_29370846_uid";
		
		$email = $_POST["email"];
		$psw = $_POST["psw"];
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
		$query = "SELECT * From details Where Email='$email' and Password='$psw'";
		$result = mysqli_query($conn,$query);
		if(mysqli_num_rows($result) ==1){
			echo "Correct Credentials";
			session_start();
			$_SESSION['auth']='true';
			header('location: home.php');
		} else {
			echo "<script>alert('Email or Password is Incorrect!!!');</script>";
			#header('location:signin.html');
		}
	}
	#header('Location: signin.html');
?>
