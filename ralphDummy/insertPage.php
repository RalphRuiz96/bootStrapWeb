<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet" type="text/css">
      <html lang="en">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
              <link rel="stylesheest" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
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
                  <ul>
                    <div class="container">
                      
                      <div align="left">
                        <img src="NCWIT_AiCProgram_Logo_FullColor.png" class="img-responsive" alt="NCWIT logo" 
             width="150"/>
                      </div>
                    
                    </div>
                    <div class="container">
                      <div class="example">

                        <div class = "nav">
                         
                          <li>
                            <a style="text-decoration:none" class = "current" href="login.php">Login</a>
                          </li>
                        
                      </div>
                    </div>
                    <div class = "example1">
                      <div id="myNav" class="overlay">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="overlay-content">
                          <a class="active" href="login.php">Login</a>
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
                    </div>
                    
                    <div class="container">
                      <div align="right">
                        <font color = "yellow">
                          <h2><a style="text-decoration:none; color:inherit; "href = "https://www.kean.edu/">NCWIT at KEAN</a></h2>
                        </font>
                      </div>
                    </div>
                
                  </ul>
                </head>
<body>

<?php
include "dbconfig.php";

$firstName=strtolower($_POST['firstName']);
$lastName=strtolower($_POST['lastName']);
$number=strtolower($_POST['number']);


$query = "insert into userInformation values (null, '$firstName', '$lastName',null, '$number')";

$insert = mysqli_query($con, $query) or die ("Failed to query database ". mysqli_error($con));

echo "Make sure that you keep your information, <b>" . $firstName . ", " . $lastName . ", " . $number . "</b> the system is designed to keep your full name in lowercase format NOT uppercase!<br>This is just text test!";

?>


<?php
if(isset($_POST['number'])) {
    $email_to = $_POST['number'];
    $email_subject = "Email subject";
    $first_name = $_POST['firstName']; // required
    $last_name = $_POST['lastName'];
    $email_from = $_POST['number']; // required

    function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
    }

    $email_message = "Form details below.\n\n";
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "lastName: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "This page will be set up next year!";
   
   

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);
?>
  <!-- include your own success html here -->

  <div class="feedback">This page will be set up next year!</div>
  <?php
}
?>


</body>
</html>

