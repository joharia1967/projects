<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assignment.css">
	<meta charset="utf-8">
	<title>Student Registration</title>
</head>
<body>

	
		<div>
			<img src="images/joh.jpg">
			<p>AIC is the one of the unique and most growing universities in Tanzania.. 
			AIC is devoted to create and expand opportunities for quality higher education in Tanzania and beyond by offering competitive, demand-driven and community-relevant academic and professional degree and non-degree programmes. It also offers high quality academic programmes aiming at solving problems of the society and contributing to the development of the country As a fast growing academia of intellectuals, we warmly welcome you to be part of this.
			Our mission is to create and expand opportunities for quality higher education in Tanzania and beyond by offering competitive, demand-driven and community-relevant academic and professional degree and non-degree programmes.

        </p>
			</div>
<div class="float">
		
				<form action="index.php" method="POST">
					<h2>Student Registration Form</h2>
					Name:
					<input type="text" name="name">
					Course:
					<input type="text" name="course"><br>
					Email:
					<input type="email" name="email">
					Address:
					<input type="text" name="address"><br>
					Password:
					<input type="password" name="password"><br>
					Gender:
					<input type="radio" name="gender" value="male">male
					<input type="radio" name="gender" value="female">female<br>
					<input type="reset" name="reset">
					<input type="submit" name="save_data">
				</form>
	</div>
</body>
</html>

<?php 
	$conn = mysqli_connect('localhost','root', '', 'studentdb');
	if(isset($_POST['save_data'])){
		$name = $_POST['name'];
		$course = $_POST['course'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];

		$sql_insert = "INSERT INTO student(name, course, email, address, password, gender) VALUES('$name', '$course', '$email', '$address', '$password', '$gender')";
		$sqli_check = mysqli_query($conn, $sql_insert);
		if($sqli_check){
			echo "data saved successfully";
		}else{
			echo "data not saved";
		}
	}

?>