<?php
	include('include/connection.php');
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql ="INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
		$result = mysqli_query($conn, $sql);
}
?>