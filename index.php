<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>Tout beigne</h1>




<h2>HTML Forms</h2>

<form action="" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="nom" value="John"><br>
  <label for="lname">Last name:</label><br>
  <?php  ?>
  <input type="text" id="lname" name="prenom" value="Doe"><br><br>
  <input type="text" id="lname" name="email" value="Doe"><br><br>
    <textarea name="message" id="" cols="30" rows="10"></textarea>
  <input type="submit" value="Submit" name="Submit">
</form>




<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";







if(isset($_POST['Submit']))
{	 
	 $first_name = $_POST['nom'];
	 $last_name = $_POST['prenom'];
	 $email = $_POST['email'];
     $message = $_POST['message'];
     


	 $sql = "INSERT INTO users ( nom, prenom, email, message)
     VALUES ('$first_name','$last_name','$email','$message')";
     

	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}


?>
    
</body>
</html>