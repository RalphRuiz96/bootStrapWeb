<?php ob_start(); ?>
<?php 
//KILL THE SESSION WHEN THE GAME IS OVER, ADD NEW BUTTON: THERE ARE ALSO COMMENTS TO ADJUST THE CODE 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

  if(!isset($_POST['ctl00$MainContent$txtInput']) || $_POST['ctl00$MainContent$txtInput'] == ""){  
    $input = "";
  } else {
    $input = $_POST['ctl00$MainContent$txtInput'];
  }
  
  if(!isset($_POST['ctl00$MainContent$txtInput']) || $_POST['ctl00$MainContent$txtInput2'] == ""){
    $output = "";
  } else {
    $output = strtolower($_POST['ctl00$MainContent$txtInput2']);
  }
  
    if(!isset($_POST['ctl00$MainContent$ddlLanguage']) || $_POST['ctl00$MainContent$ddlLanguage'] == ""){
    $SelectedLang = "";
  } else {
    $SelectedLang = strtolower($_POST['ctl00$MainContent$ddlLanguage']);
  }
  
 //if (isset($_SESSION['count1'])) echo $_SESSION['count1'];
 //if (isset($_SESSION['count2'])) echo $_SESSION['count2'];
?>
<?php
        if(isset($_POST['exit'])) { 
            session_unset();
            session_destroy();
        } 
    ?>
<!DOCTYPE html>
<html>


</style><link href="style.css" rel="stylesheet" type="text/css">
 <head> 
   <html lang="en"><meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                  
</head> 

<body> 

<ul>

                    <div class="container">
                      
                      <div align="left">
                        <img src="NCWIT_AiCProgram_Logo_FullColor.png" class="img-responsive" alt="NCWIT logo" 
             width="150"/>
                      </div>
                    
                    </div>
                    <div class="container">
                      <div class="example">
                        <div class = "nav" class= "button">
                          <li>
                            <a style="text-decoration:none"  href="index.php">Home</a>
                          </li>
                          <li>
                            <a style="text-decoration:none" class="current" href="ourGame.php">Our Game</a>
                          </li>
                          <li>
                            <a style="text-decoration:none"href="englishPredictionTable.php">Game History
                            </font>
                          </a>
                        </li>
                        <li>
                           <a style="text-decoration:none"href="news.php">News</a>
                        </li>
                        <li>
                          <a style="text-decoration:none" href="contacts.php">Contact</a>
                        </li>
                        <li>
                          <a style="text-decoration:none"href="WinnersProjects.php">Winners Projects</a>
                        </li>
                      </div>

                    </div>
                    
                    <div class = "example1">
                      <div id="myNav" class="overlay">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="overlay-content">
                          <a class="current" href="index.php">Home</a>
                          <a class="active" href="translator.php">Predictor Game</a>
                          <a href="englishPredictionTable.php">Game History</a>
                           <a href="news.php">News</a>
                          <a href="contacts.php">Contact</a>
                          <a href="WinnersProjects.php">Winners Projects</a>
                          <a href="https://us02web.zoom.us/webinar/register/WN_BeqIKv0ORKyTNwSqru2rmA">2020 AiC Virtual Award Event Registration</a>
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

</div>
  
<div class="row">
    <div class="col-md-8 offset-md-2">
            <div class="d-flex justify-content-center border-bottom ">
    <div align="center">
       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"></b>
        <h1>Translation Game</h1>
        <p class="lead"><h4>Choose your language:</h4><select class="form-control" name="ctl00$MainContent$ddlLanguage" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$MainContent$ddlLanguage\&#39;,\&#39;\&#39;)&#39;, 0)" id="MainContent_ddlLanguage">
  <option selected="selected" value="en">English</option>
  <option value="es">Spanish</option>
  <option value="ru">Russian</option>
  <option value="pl">Polish</option>
  <option value="de">German</option>
  <option value="fr">French</option>
  <option value="it">Italian</option>
  <option value="tr">Turkish</option>
  <option value="el">Greek</option>
</select>
        </p>
       <p><h4>Insert your text:</h4><textarea name="ctl00$MainContent$txtInput" type="text" id="MainContent_txtInput" value="<?php echo $input; ?>" style="min-width: 100%" ></textarea></p>
        <p><h4>Guess a Word:</h4><textarea     name="ctl00$MainContent$txtInput2" type="text" id="MainContent_txtInput2" value="<?php echo $output; ?>" style="min-width: 100%"/></textarea></p>
        <input type="submit" name="ctl00$MainContent$btnPredict" value="Translate" id="MainContent_btnPredict" class="btn btn3d btn-success" style="padding:15px 32px;"/>
        <span id="MainContent_lblHidden"></span>
        <a href="translator.php" class="btn btn3d btn-info" role="button" style="padding:15px 32px;">Predict</a>
        <input type="submit" name="exit" value="exit" id="exit" class="btn btn3d btn-danger" style="padding:15px 32px;"/>
</form>

<?php 
 $type = "T";
    $result = "Lost";
  //Detect API call
        $Service2 = "https://translate.yandex.net/api/v1.5/tr.json/detect?";
        $APIKey2 = "trnsl.1.1.20150821T063934Z.32dbbafdf5ef4f13.af2eaea58b891756468d0d7981aab3957e828e1c";
        $q2;
      //  $lang;
        $lblResponse2 = "";
          
        if(isset($_POST['ctl00$MainContent$txtInput']) && $_POST['ctl00$MainContent$txtInput'] != "")
            $q2 = $_POST['ctl00$MainContent$txtInput'];
        else
            $q2 = "Hello";
         if  ($q2 != "") $q2 = str_replace(" ", "+", $q2);
     //   $lang = "en";
        $wholeRequest2 = $Service2 . "key=" . $APIKey2 . "&text=" . $q2 . "&hint=en&callback%20=%20myCallback";
     //   echo $wholeRequest2;

$url = $wholeRequest2;
//$url = "https://predictor.yandex.net/api/v1/predict.json/complete?key=pdct.1.1.20200304T211312Z.d3b2dd7a84eed28c.08df97bcba228b5a147d5393ec117015072e92e1&q=Hello&lang=en&callback%20=%20myCallback";
//echo "calling service";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
// This is what solved the issue (Accepting gzip encoding)
curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");     
$response = curl_exec($ch);
curl_close($ch);
$response = json_decode($response, true);
//echo '.response is:'.$response;
//echo '<h2>language is:'.$response['lang'];
$sourcelang = $response['lang'];
//echo '<h2>second is:'.$second;
//$prediction = substr($first, 1, -1);


// echo "https://translate.yandex.net/api/v1.5/tr.json/detect?key=trnsl.1.1.20150821T063934Z.32dbbafdf5ef4f13.af2eaea58b891756468d0d7981aab3957e828e1c&text=Hello&hint=en&callback%20=%20myCallback";


        //Translate API call
        $Service = "https://translate.yandex.net/api/v1.5/tr.json/translate?";
        $APIKey = "trnsl.1.1.20150821T063934Z.32dbbafdf5ef4f13.af2eaea58b891756468d0d7981aab3957e828e1c";
        $q;
        $lang;
        $lblResponse = "";
          
        if(isset($_POST['ctl00$MainContent$txtInput']) && $_POST['ctl00$MainContent$txtInput'] != "")
            $q = $_POST['ctl00$MainContent$txtInput'];
        else
            $q = "Hello";
            $q = str_replace(" ", "+", $q);
        $lang = "en";
        $wholeRequest = $Service . "key=" . $APIKey . "&text=" . $q . "&lang=". $SelectedLang ."&format=plain&options=1&callback%20=%20myCallback";
//        echo $wholeRequest;
        //echo $SelectedLang; //this tells you the language that it is in 
//https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20150821T063934Z.32dbbafdf5ef4f13.af2eaea58b891756468d0d7981aab3957e828e1c&text=Hello&lang=ru&format=plain&options=1&callback%20=%20myCallback


//$url = "http://api.alarabiya.net/sections/2/";
$url = $wholeRequest;
//$url = "https://predictor.yandex.net/api/v1/predict.json/complete?key=pdct.1.1.20200304T211312Z.d3b2dd7a84eed28c.08df97bcba228b5a147d5393ec117015072e92e1&q=Hello&lang=en&callback%20=%20myCallback";
//echo "calling service";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
// This is what solved the issue (Accepting gzip encoding)
curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");     
$response = curl_exec($ch);
curl_close($ch);
//echo $response;
  $response1 = json_decode($response, true);
//  echo "error message:".$response['message'];
$whatIWant = substr($response, strpos($response, "[") + 1);   
$arr = explode("]", $whatIWant, 2);
$first = $arr[0];
if (isset($response) && $response != "" &&  !isset($response1['message'])) {//&& isset($prediction) && isset($output) && $prediction!="" && $output!="") {
  echo '<h2>It is: '.$first."!";
  $prediction = substr($first, 1, -1);
  //echo 'prediction is:'. $prediction;
  //echo 'output is:'.$output;
  $random_cookie = rand();
  setcookie("TestCookie", $random_cookie);
  
  
   
 if (isset($prediction) && isset($output) &&  $prediction!="" and $output!="" && strcasecmp($prediction, $output) == 0 ) {
 $result = "Won";
   echo "</br><font color='green'><strong> YOU WON!!!</strong></font>".'</h2>';
   if( isset( $_SESSION['counter1'] ) ) {
      $_SESSION['counter1'] += 1;
   }else {
      $_SESSION['counter1'] = 1;
   }
}
else{
//if (isset($prediction) && isset($output) && $prediction!="" and $output!="") {
   echo "</br><font color='red'><strong> YOU MISSED!!!</strong></font>".'</h2>';
  if( isset( $_SESSION['counter2'] ) ) {
      $_SESSION['counter2'] += 1;
   }else {
      $_SESSION['counter2'] = 1;
   }
}//}
}
if (isset($_SESSION['counter1']) && isset ($_SESSION['counter2']))
echo "<h1>NCWIT girls: " . $_SESSION['counter1'] . ", AI: " . $_SESSION['counter2'] . '</h1>';
else echo "<h1>NCWIT girls: 0, AI: 0</h1>";
if (isset($_SESSION['counter1'])) $count1 = $_SESSION['counter1'];
else $count1 = 0;
if (isset($_SESSION['counter2']))   $count2 = $_SESSION['counter2'];
else $count2 = 0;
echo "</div></div></div>";
 echo '<div align="center">  

</div>';
//initially this dbconfig.php was made to connect to the database, sadly so far this has failed
include "dbconfig.php"; 

//variables are made to access three different tables, if the team decides to go that route, we can use one single table for all languages
if (isset($_POST['ctl00$MainContent$txtInput'])) $val = $_POST['ctl00$MainContent$txtInput'];
if (isset($_POST['ctl00$MainContent$txtInput2'])) $val2 = $_POST['ctl00$MainContent$txtInput2'];
if (isset($_POST['ctl00$MainContent$ddlLanguage'])) $lang = $_POST['ctl00$MainContent$ddlLanguage'];
$Win = "W";
$Loss = "L";
$languageCell = null; //USED TO SPECIFY THE LANGUAGE WHICH WAS CHOSEN BY THE USER
//if predict button was selected then the body of the if statement is accessed 
if(isset($_POST['ctl00$MainContent$btnPredict'])){
$date = new DateTime();
$stamp =  $date->getTimestamp();
//echo $stamp;
//$preduction = str_replace('+',' ',$arr)
  //if the "Type your text" is empty a message will pop up to make the user enter value and not access the database 
  /*if($_POST['ctl00$MainContent$txtInput'] == ""){
    echo ("You must put in value in the text!");
    
  } else {
    $input = $_POST['ctl00$MainContent$txtInput'];*/
    //selecting query
 
     $now = new DateTime();
     if (isset($prediction) && isset($output)  && strcasecmp($prediction, $output) == 0) {
     
      if ($SelectedLang == "en"){
          $languageCell = "English"; 
        } else if ($SelectedLang == "es"){
          $languageCell = "Espanol"; 
        } else if ($SelectedLang == "ru"){
          $languageCell = "Russian"; 
        } else if ($SelectedLang == "pl"){
          $languageCell = "Polish"; 
        } else if ($SelectedLang == "de"){
          $languageCell = "German"; 
        } else if ($SelectedLang == "fr"){
          $languageCell = "French"; 
        } else if ($SelectedLang == "it"){
          $languageCell = "Italian"; 
        } else if ($SelectedLang == "tr"){
          $languageCell = "Turkish"; 
        } else if ($SelectedLang == "el"){
          $languageCell = "Greek"; 
        }
  if (isset($prediction) && isset($output)) 
     $query = "INSERT INTO GameHistory (id, userID, Language, initial, YourGuess, OutputLang, MachinePrediction, lastUpdated, GameType, count1, count2, GameResult) VALUES (null,'NCWIT','$sourcelang', '$output', '$q','$SelectedLang','$prediction',null,'$type','$count1','$count2','$result')";
   //  echo $query;
    //used to connect the query
     if (isset($query))
    $result = mysqli_query($con,$query);
    //used to create a row
     if (isset($result)){}
  //  $row = mysqli_fetch_array($result);
    } else { 
      if ($SelectedLang == "en"){
          $languageCell = "English"; 
        } else if ($SelectedLang == "es"){
          $languageCell = "Espanol"; 
        } else if ($SelectedLang == "ru"){
          $languageCell = "Russian"; 
        } else if ($SelectedLang == "pl"){
          $languageCell = "Polish"; 
        } else if ($SelectedLang == "de"){
          $languageCell = "German"; 
        } else if ($SelectedLang == "fr"){
          $languageCell = "French"; 
        } else if ($SelectedLang == "it"){
          $languageCell = "Italian"; 
        } else if ($SelectedLang == "tr"){
          $languageCell = "Turkish"; 
        } else if ($SelectedLang == "el"){
          $languageCell = "Greek"; 
        }
        if (isset($prediction) && isset($output) && $prediction!="" and $output!="") 
        $q = str_replace('+', ' ', $q);
        $query = "INSERT INTO GameHistory (id, userID, Language, initial, YourGuess, OutputLang, MachinePrediction, lastUpdated, GameType, count1, count2, GameResult) VALUES (null,'NCWIT','$sourcelang', '$output', '$q','$SelectedLang','$prediction',null,'$type','$count1','$count2','$result')";
 //echo $query;
    //used to connect the query
     if (isset($query))
    $result = mysqli_query($con,$query);
    //used to create a row
     if (isset($result)){}
  // $row = mysqli_fetch_array($result); 
    }
  //  echo ("You have successfully inserted the query!");
    
//}
 }
//echo $toppings[1];
//echo "after call";
 /*     
        echo '</br>test';
  $data = file_get_contents($wholeRequest);
        echo $data; 
        echo '</br>test2';
  $ch = curl_init();
        curl_setopt($ch, $wholeRequest, $wholeRequest);
        // Set so curl_exec returns the result instead of outputting it.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Get the response and close the channel.
  $response = curl_exec($ch);
        echo $response;
        echo '</br>test3';
        curl_close($ch);*/
  //    HttpWebRequest request = (HttpWebRequest)WebRequest.Create(wholeRequest);
//echo "before python";
//run python from php
//$command = escapeshellcmd('../python/test.py');
//$output = shell_exec($command);
//echo $output;
//echo "after python";
//refresh page
//$page = $_SERVER['PHP_SELF'];
//$sec = "1000";
//header("Refresh: $sec; url=$page");


?>
<?php ob_flush(); ?>

</html>