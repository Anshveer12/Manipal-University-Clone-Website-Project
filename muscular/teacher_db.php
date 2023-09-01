<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teacher_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted
if(isset($_POST['register'])) {

	// Get the form data
	$email = $_POST['email'];
	$psw = $_POST['psw'];
	$psw_repeat = $_POST['psw_repeat'];

	// Check if the passwords match
	if ($psw !== $psw_repeat) {
		echo "Error: Passwords do not match";
		echo "<br> <a href = 'signup.html'>go back</a>  ";
		exit;
	}

	// // Check if the email already exists in the database
	// $sql = "SELECT * FROM users WHERE email='$email'";
	// $result = $conn->query($sql);
	// if ($result->num_rows > 0) {
	// 	echo "Error: Email already exists";
	// 	exit;
	// }
      
	
   // Check if the email already exists in the database 2
   $email_check = mysqli_query($conn, "SELECT email FROM register WHERE email='$email'");
   if (mysqli_num_rows($email_check) > 0) {
       echo "Error: Email already exists";
	   echo "<br> <a href = 'signup.html'>go back</a>  ";
       exit;
   }

	// Insert the data into the database
	$sql = "INSERT INTO register (email, psw) VALUES ('$email', '$psw')";
	if ($conn->query($sql) === TRUE) {
		echo "Registration successful";
		echo "<br> <a href = 'index.html'>go home</a>  ";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();
?>


<!-- <?php
   $server = "localhost";
   $username = "root";
   $password = "";
   $dbname ="teacher_db";
   $table = "register";

   $conn = mysqli_connect($server,$username,$password,$dbname);

   if(!$conn){
      die ("connection failed due to " . mysqli_connect_error());

   }
   echo "submit successfully";

   

   

?> -->