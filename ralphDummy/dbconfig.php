<?php
	//variable information from the host 
	define('server', '131.125.81.8');
	define('username', 'jen');
	define('password', 'KeanCS15');	
	define('db', 'jendb');

	//set up connection for the database
	$con = mysqli_connect(server, username, password, db);

	//check to see if the connection was successful 
	if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
}
  //echo "Connected successfully";

?>