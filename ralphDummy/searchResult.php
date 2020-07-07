<?php
session_start();
?>
<!DOCTYPE html>
<style>
.sizedimg {
    max-width: 100%;
    max-height: 100%;
}
  footer {
  text-align: center;
  padding: 3px;
  background-color: #154360;
  color: white;
}

hr.new1 {
  border-top: 1px solid green;
}
body {
 
   overflow-x: hidden; /* Hide scrollbars */
}
</style>
<html>
<title>NCWIT-NJ</title>
  <link href="style.css" rel="stylesheet" type="text/css">
   <head>
    <link rel="shortcut icon" href="https://www.aspirations.org/sites/default/files/favicon.ico" type="image/vnd.microsoft.icon" />
       <meta name="HandheldFriendly" content="true" />
      <meta name="MobileOptimized" content="width" />
      <meta http-equiv="x-ua-compatible" content="ie=edge, chrome=1" />
      <meta charset="utf-8" />
      <link rel="shortcut icon" href="https://www.aspirations.org/sites/default/files/favicon.ico" type="image/vnd.microsoft.icon" />
      <meta http-equiv="cleartype" content="on" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <html lang="en">
          <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
                 
                </head>
                <body> 

 <ul>
                    <div class="container">
                      <div align="left">
                       <div class="col-1">
                        <a href = "https://www.aspirations.org/"><img src="NCWIT_AiCProgram_Logo_FullColor.png" class="img-responsive" alt="NCWIT logo" 
             width="150"/></a>
                      </div>
                      </div>
                    </div>
                   <div class="container">
                      <div class="example">
                        <div class = "nav" class= "button">
                          
                         <li>
                          <a style="text-decoration:none"href="TrophyRSOrderForms.php" class = "current">Trophy Order</a>
                        </li>
                       
                      </div>
                    </div>
                     <div class="container">
                      <div align="right">
                        <font color = "yellow">
                          <h2><a style="text-decoration:none; color:inherit; "href = "https://www.kean.edu/">NCWIT at New Jersey</a></h2>
                        </font>
                      </div>
                    </div>
                    <div class = "example1">
                      <div id="myNav" class="overlay">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="overlay-content">
                             <a href="RisingStarCertificateTemplate.php">Rising Star</a>
                          <a href="TrophyRSOrderForms.php">Winning Schools</a>
                         
                        </div>
                      </div>
                      <span style="font-size:30px;cursor:pointer"  target="_blank" class="btn btn-success" style="padding:15px 32px;" role="button"onclick="openNav()">&#9776; open</span>
                      <script>
              function openNav() {
               document.getElementById("myNav").style.width = "100%";
              }

              function closeNav() {
                document.getElementById("myNav").style.width = "0%";
              }
            </script>
                  </ul>

<?php 

include "dbconfig.php";
$_SESSION['keywords'] = isset($_POST['keywords']) ? $_POST['keywords'] : "";

if($_GET['keywords'] == '*'){
	$query = "SELECT * FROM viewSchools";
} else if ($_GET['keywords']== '') {
	echo "<font color = 'white'>You have not entered any characters, please enter matching characters!";

} else {
	$query = "SELECT * FROM viewSchools where A  = '".$_GET['keywords']."'";
}

$result = mysqli_query($con,$query);

$row = mysqli_fetch_array($result);

if($result = mysqli_query($con, $query)){
	 if(mysqli_num_rows($result) > 0){
echo "<table class = 'center'>
		<tr>

			 <th>Affiliate Name: New Jersey Affiliate</th>
          <th>High School</th>
        
			
		</tr>";
		
		
		while($row = mysqli_fetch_assoc($result)){


			echo"<tr>";
			 echo"<td><b>".$row['A']."</b></td>";
      echo"<td><b>".$row['B']."</b></td>";
   
		
			echo"</tr>";
		}

		echo "</TABLE>\n";	
 

 	} else {
 		echo "<br>there are no values in the records <b>" . $row['A'] ."</b>  with such keywords as: <b>" . $_GET['keywords'] . "</b>";
 	
 	}
 } else {
 echo "<br>Something wrong with the SQL query.\n";
 echo "<br>Error:" . mysqli_error($con); //this is not in the slide 

 }

?>