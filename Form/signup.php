<?php


	if($_SERVER["REQUEST_METHOD"] == "POST") { 

    	include 'file.php';    

    	$Name = $_POST["Name"];  

    	$Email = $_POST["Email"];

    	$Password = $_POST["Password"]; 

    	$Birthdate = $_POST["Birthdate"];

    	$Gender = $_POST["Gender"];
    }

    $sql = "INSERT INTO data VALUES ('$Name', '$Email', '$Password', '$Birthdate', '$Gender', current_timestamp())"; 

    $result = mysqli_query($conn, $sql);

    header("Location: ./home.html");
    exit();
?>
