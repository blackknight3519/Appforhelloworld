
<html>
<body>

<?php sleep(1); ?>
<head>
<link href="https://fonts.googleapis.com/css?family=Oswald" type="text/css" rel="stylesheet">
<style>
      body {
        font-family: 'Oswald', serif;
        font-size: 48px;
      }
    </style>
</head>

<div><br><br><br><br><center>"Your data was saved successfully!"</center><br></div>

<?php

//variable definitions
$fname = "";	
$lname = "";
$usraddr = "";
$usraddr2 = "";
$usrcity = "";
$usrstate = "";
$usrzip = "";
$usrcountry = "";

$fname = $_GET["firstname"];
$lname = $_GET["lastname"];
$usraddr = $_GET["address1"];
$usraddr2 = $_GET["address2"];
$usrcity = $_GET["city"];
$usrstate = $_GET["state"];
$usrzip = $_GET["zip"];
$country = $_GET["usrcountry"];


$servername = "localhost";
$username = "halkey";
$password = "qwerhjkl";
$dbname = "dbhalkey";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()) . "\r\n";
}


$sql = "CREATE TABLE IF NOT EXISTS Reg (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
address1 VARCHAR(50) NOT NULL,
address2 VARCHAR(50) NOT NULL,	
city VARCHAR(25) NOT NULL,
state VARCHAR(20) NOT NULL,
zipcode INTEGER(10) NOT NULL,
country VARCHAR(20) NOT NULL
)";



if ($conn->query($sql) === TRUE) {
    echo "<br>" ;
} else {
    echo "Error creating table:Reg " . $conn->error; 
}


$sql = "INSERT INTO Reg (firstname, lastname, address1, address2, city, state, zipcode, country)
VALUES ('$fname', '$lname', '$usraddr', '$usraddr2', '$usrcity', '$usrstate', '$usrzip', 
'$country')";  

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}





$conn->close();
?>

<form action="index.php" >
<center><input type="submit" value="Click to return to main page"></center>
</form>
	

</body>
</html>

