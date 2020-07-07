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
  if(!isset($_POST['UserName']) || $_POST['UserName'] == ""){
    $UserName = "";
  } else {
    $UserName = $_POST['UserName'];
  }
  
    if(!isset($_POST['ctl00$MainContent$ddlLanguage']) || $_POST['ctl00$MainContent$ddlLanguage'] == ""){
    $SelectedLang = "";
  } else {
    $SelectedLang = strtolower($_POST['ctl00$MainContent$ddlLanguage']);
  }
 // echo $UserName;
 //if (isset($_SESSION['count1']))  $_SESSION['count1'];
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

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ncwitWebsite</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="assets/css/Corporate-Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section>
        <nav class="navbar navbar-light navbar-expand-md" style="background-color: #154360;">
            <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
              <a href="https://www.aspirations.org/aspirations-community/new-jersey"><img src="assets/img/NcwitIcons/NCWIT_AiCProgram_Logo_FullColor.png" style="width: 150px;"></a>
                <div class="collapse navbar-collapse"
                    id="navcol-1" style="font-size: 13px;">
                    <ul class="nav navbar-nav mx-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="Register.php" style="color: #c5dc0a;font-size: 15px;font-family: Montserrat, sans-serif;">CMU Academy PD Registrtaion</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="news.php" style="color: #ffffff;font-size: 15px;font-family: Montserrat, sans-serif;">News</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: #c5dc0a;font-size: 15px;font-family: Montserrat, sans-serif;">Dropdown </a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="index.php">Home</a>
                              <a class="dropdown-item" role="presentation" href="contacts.php">Contact</a>
                              <a class="dropdown-item" role="presentation" href="WinnersProjects.php">Winners Projects</a><a class="dropdown-item" role="presentation" href="RisingStarCertificateTemplate.php">Rising Star</a>
                            <a class="dropdown-item" role="presentation" href="TrophyRSOrderForms.php">Winning Schools</a><a class="dropdown-item" role="presentation" href="login.php">User Login</a>
                          <a class="dropdown-item" role="presentation" href="Register.php">Register</a>
                          <a class="dropdown-item" role="presentation" href="ourGame.php">Our Game</a>
                          <a class="dropdown-item" role="presentation" href="englishPredictionTable.php">Game History</a>
                        </div>
                        </li>
                    </ul>
                </div>
                <a href="https://twitter.com/NCWIT?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="https://img.icons8.com/fluent/48/000000/twitter.png" style="width: 24px;"></a>
                <a href = "https://www.facebook.com/ncwit/"><img src="https://img.icons8.com/color/48/000000/facebook.png" style="width: 24px;"></a>
                <a href = "https://www.instagram.com/ncwit/?hl=en" ><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"
                    style="width: 24px;"></div></a>
        </nav>
    </section>


   <div class="container p-3 my-3 border">
                      <div id="video" align="center">

            <div class="d-flex justify-content-center border-bottom ">
    <div align="center">
       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"></b>
        <h1>Our Game : Beat AI!</h1>
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
       <p><h4>Insert Your Input:</h4><textarea name="ctl00$MainContent$txtInput" type="text" id="MainContent_txtInput" value="<?php echo $input; ?>" style="min-width: 100%" ></textarea></p>
        <p><h4>Guess The Output:</h4><textarea     name="ctl00$MainContent$txtInput2" type="text" id="MainContent_txtInput2" value="<?php echo $output; ?>" style="min-width: 100%"/></textarea></p>
         <p><h4>Enter your name (optional):</h4><input     name="UserName" type="text" id="UserName" value="<?php echo $UserName; ?>" style="min-width: 100%"/></textarea></p>
        <input type="submit" name="ctl00$MainContent$btnPredict" value="Translate" id="MainContent_btnPredict" class="btn btn3d btn-info" style="padding:15px 32px;"/>
        <span id="MainContent_lblHidden"></span>
        <input type="submit" name="predict" value="Predict" id="predict" class="btn btn3d btn-success" style="padding:15px 32px;"/>
        <input type="submit" name="exit" value="exit" id="exit" class="btn btn3d btn-danger" style="padding:15px 32px;"/>
</form>

<?php 
 $type = "T";
 $result = "Lost";
 if(isset($_POST['ctl00$MainContent$btnPredict'])) { ///this is translation----------------------------------------------------------------------------------------------

 // echo $UserName;
 
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
      //  echo $wholeRequest;
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
     $query = "INSERT INTO GameHistory (id, user, Language, initial, YourGuess, OutputLang, MachinePrediction, lastUpdated, GameType, count1, count2, GameResult) VALUES (null,'$UserName','$sourcelang', '$output', '$q','$SelectedLang','$prediction',null,'$type','$count1','$count2','$result')";
  //   echo $query;
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
        $query = "INSERT INTO GameHistory (id, user, Language, initial, YourGuess, OutputLang, MachinePrediction, lastUpdated, GameType, count1, count2, GameResult) VALUES (null,'$UserName','$sourcelang', '$output', '$q','$SelectedLang','$prediction',null,'$type','$count1','$count2','$result')";
// echo $query."- line 367";  
    //used to connect the query
     if (isset($query))
    $result = mysqli_query($con,$query);
    //used to create a row
     if (isset($result)){}
  // $row = mysqli_fetch_array($result); 
    }
 }

}
if(isset($_POST['predict'])) { ///this is prediction----------------------------------------------------------------------------------------------
 //echo $UserName;
//echo "predict was pressed";
$type = "P";
$Service = "https://predictor.yandex.net/api/v1/predict.json/complete?";
$APIKey = "pdct.1.1.20200304T211312Z.d3b2dd7a84eed28c.08df97bcba228b5a147d5393ec117015072e92e1";
$q;
$lang;
$lblResponse = "";

if (!$_POST['ctl00$MainContent$txtInput'] == "") $q = $_POST['ctl00$MainContent$txtInput'];
else $q = "Hello";
$q = str_replace(" ", "+", $q);
$lang = "en";
$wholeRequest = $Service . "key=" . $APIKey . "&q=" . $q . "&lang=" . $SelectedLang . "&callback%20=%20myCallback";
//echo $wholeRequest;
//echo $SelectedLang; //this tells you the language that it is in
//$url = "http://api.alarabiya.net/sections/2/";
$url = $wholeRequest;
//$url = "https://predictor.yandex.net/api/v1/predict.json/complete?key=pdct.1.1.20200304T211312Z.d3b2dd7a84eed28c.08df97bcba228b5a147d5393ec117015072e92e1&q=Hello&lang=en&callback%20=%20myCallback";
//echo "calling service";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
// This is what solved the issue (Accepting gzip encoding)
curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");
$response = curl_exec($ch);
curl_close($ch);
//echo $response;
$whatIWant = substr($response, strpos($response, "[") + 1);
$arr = explode("]", $whatIWant, 2);
$first = $arr[0];
echo '<h2>' . $first;
$prediction = substr($first, 1, -1);

$random_cookie = rand();
setcookie("TestCookie", $random_cookie);
$count1 = 0;
$count2 = 0;
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
if (isset($_SESSION['counter1']) && isset ($_SESSION['counter2']))
echo "<h1>NCWIT girls: " . $_SESSION['counter1'] . ", AI: " . $_SESSION['counter2'] . '</h1>';

echo '<div align="center">  

</div>';
//initially this dbconfig.php was made to connect to the database, sadly so far this has failed
include "dbconfig.php";

//variables are made to access three different tables, if the team decides to go that route, we can use one single table for all languages
$val = 'ctl00$MainContent$txtInput';
$val2 = 'ctl00$MainContent$txtInput2';
$lang = 'ctl00$MainContent$ddlLanguage';
$Win = "W";
$Loss = "L";
$languageCell = null; //USED TO SPECIFY THE LANGUAGE WHICH WAS CHOSEN BY THE USER
//if predict button was selected then the body of the if statement is accessed
if (isset($_POST['predict']))
{
$type = "P";
    //if the "Type your text" is empty a message will pop up to make the user enter value and not access the database
    /*if($_POST['ctl00$MainContent$txtInput'] == ""){
    echo ("You must put in value in the text!");
    
    } else {
    $input = $_POST['ctl00$MainContent$txtInput'];*/
    //selecting query
    if (isset($_SESSION['counter1'])) $count1 = $_SESSION['counter1'];
else $count1 = 0;
if (isset($_SESSION['counter2']))   $count2 = $_SESSION['counter2'];
else $count2 = 0;
    if ($prediction == $output)
    {
        if ($SelectedLang == "en")
        {
            $languageCell = "English";
        }
        else if ($SelectedLang == "es")
        {
            $languageCell = "Espanol";
        }
        else if ($SelectedLang == "ru")
        {
            $languageCell = "Russian";
        }
        else if ($SelectedLang == "pl")
        {
            $languageCell = "Polish";
        }
        else if ($SelectedLang == "de")
        {
            $languageCell = "German";
        }
        else if ($SelectedLang == "fr")
        {
            $languageCell = "French";
        }
        else if ($SelectedLang == "it")
        {
            $languageCell = "Italian";
        }
        else if ($SelectedLang == "tr")
        {
            $languageCell = "Turkish";
        }
        else if ($SelectedLang == "el")
        {
            $languageCell = "Greek";
        }
 $q = str_replace('+', ' ', $q);
  //echo $UserName;
        $query = "INSERT INTO GameHistory (id, user, Language, initial, YourGuess, OutputLang, MachinePrediction, lastUpdated, GameType, count1, count2, GameResult) VALUES (null,'$UserName','$SelectedLang', '$output', '$q','$SelectedLang','$prediction',null,'$type','$count1','$count2','$result')";
   //     $query = "INSERT INTO EnglishPrediction (id, userInput, YourGuess, MachinePrediction, UserVictory, Language) VALUES (null,'$val','$val2', '$prediction','$Loss', '$languageCell')";
 //  echo $query." - line 537";
        //used to connect the query
        $result = mysqli_query($con, $query);
        //used to create a row
      ///  $row = mysqli_fetch_array($result);
    }
    else
    {
        if ($SelectedLang == "en")
        {
            $languageCell = "English";
        }
        else if ($SelectedLang == "es")
        {
            $languageCell = "Espanol";
        }
        else if ($SelectedLang == "ru")
        {
            $languageCell = "Russian";
        }
        else if ($SelectedLang == "pl")
        {
            $languageCell = "Polish";
        }
        else if ($SelectedLang == "de")
        {
            $languageCell = "German";
        }
        else if ($SelectedLang == "fr")
        {
            $languageCell = "French";
        }
        else if ($SelectedLang == "it")
        {
            $languageCell = "Italian";
        }
        else if ($SelectedLang == "tr")
        {
            $languageCell = "Turkish";
        }
        else if ($SelectedLang == "el")
        {
            $languageCell = "Greek";
        }
    //     echo $UserName;
         $q = str_replace('+', ' ', $q);
          $query = "INSERT INTO GameHistory (id, user, Language, initial, YourGuess, OutputLang, MachinePrediction, lastUpdated, GameType, count1, count2, GameResult) VALUES (null,'$UserName','$SelectedLang', '$output', '$q','$SelectedLang','$prediction',null,'$type','$count1','$count2','$result')";
   //     $query = "INSERT INTO EnglishPrediction (id, userInput, YourGuess, MachinePrediction, UserVictory, Language) VALUES (null,'$val','$val2', '$prediction','$Loss', '$languageCell')";
  // echo $query." - line 581";
        //used to connect the query
        $result = mysqli_query($con, $query);
        //used to create a row
    //    $row = mysqli_fetch_array($result);
    }
    //  echo ("You have successfully inserted the query!");
    //}
    
}

$command = escapeshellcmd('../python/test.py');
$output = shell_exec($command);

}
?>
<?php ob_flush(); ?>
</div>
</div>
</div>
</div>
</ul>

    <div class="example">
    <footer class="page-footer" style="background-color: #154360;">
        <div class="container" style="color: #c5dc0a;">
            <div class="row" style="width: 1140px;">
                <div class="col-6 col-md-3 col-xl-6" style="width: 570px;height: 100px;">
                    <h4 style="font-size: 15px;font-family: Montserrat, sans-serif;color: #ffffff;">Partners</h4>
                    <ul class="footer-links">
                        <li><a href="#"></a></li>
                        <li><a href="#"></a><img src="assets/img/NcwitIcons/icon.png" style="width: 50px;margin-right: 10px;"><img src="assets/img/NcwitIcons/kisspng-national-science-foundation-small-business-innovat-white-background-material-5ad9f7538a1df4.4124630015242340675657.png" style="width: 50px;margin-right: 10px;"><img src="assets/img/NcwitIcons/iconfinder_logo_brand_brands_logos_apple_ios_1916086.png" style="width: 50px;margin-right: 10px;">
                            <img
                                src="assets/img/NcwitIcons/tcs.png" style="width: 50px;margin-right: 10px;"><img src="https://img.icons8.com/color/48/000000/microsoft.png" style="margin-right: 10px;"><img src="https://img.icons8.com/color/48/000000/google-logo.png" style="margin-right: 10px;"><img src="assets/img/NcwitIcons/bankOfAmericaLogopng.png" style="width: 50px;">
                                <img
                                    src="https://img.icons8.com/color/48/000000/new-jersey.png" style="width: 50px;"></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="https://img.icons8.com/color/48/000000/google-logo.png"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 col-xl-6" style="width: 570px;height: 100px;">
                    <h4 style="font-size: 15px;font-family: Montserrat, sans-serif;color: #ffffff;"><strong>Sponsors</strong><br></h4>
                    <ul class="footer-links">
                        <li><a href="#"></a></li>
                        <li><a href="https://women.acm.org/"><img src="assets/img/NcwitIcons/ACMW.png" style="width: 70px;margin-right: 10px;"></a>

                            <a href="https://girlswhocode.com/"><img src="assets/img/NcwitIcons/GWC.png" style="width: 90px;margin-right: 10px;">
                            </a>
                            <a href="https://cahsi.utep.edu/"><img src="assets/img/NcwitIcons/cahsiLogoTest.png" style="width: 60px;height: 60px;"></li></a>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="https://img.icons8.com/color/48/000000/google-logo.png"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
            </div>
            <hr style="color: #c5dc0a;background-color: #c5dc0a;">
            <div class="footer-legal">
                <div class="float-md-right region"><a href="#" style="color: #ffffff;"><img src="assets/img/united-states-flag.png">United States</a></div>
                <div class="d-inline-block copyright">
                    <p class="d-inline-block" style="color: #ffffff;">Copyright © 2018. All rights reserved.<br></p>
                </div>
                <div class="d-inline-block legal-links">
                    <div class="d-inline-block item">
                        <h5 style="color: #ffffff;">Privacy Policy</h5>
                    </div>
                    <div class="d-inline-block item">
                        <h5 style="color: #ffffff;">Terms of Use</h5>
                    </div>
                    <div class="d-inline-block item">
                        <h5 style="color: #ffffff;">Legal</h5>
                    </div>
                    <div class="d-inline-block item">
                        <h5 style="color: #ffffff;">License</h5>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>


<footer class="page-footer" style="background-color: #154360;">

  <div class = "example1">
  <div class="container-fluid">
    

<font color="white"><h1 align="left" style="font:Helvetica Neue LT W01_85 Heavy,Arial,Sans-Serif">Partners:</h1></font>
<hr class="new1" style="color: #c5dc0a">
  <div class="row">

<div class="col-4">

<img src="https://img.icons8.com/color/48/000000/microsoft.png"width = "30" height="30"/>
</div>

<div class="col-4">
<img src="https://img.icons8.com/color/48/000000/google-logo.png"width = "30" height="30"/>
</div>


<div class="col-4">
<img src="kisspng-national-science-foundation-small-business-innovat-white-background-material-5ad9f7538a1df4.4124630015242340675657.png" width="30" height="30"/>
</div>


           

</div>

<div class="row">
<div class = "col-3">
<img src="iconfinder_logo_brand_brands_logos_apple_ios_1916086.png" class="img-responsive" width="30" height="30" />
           </div>

           <div class="col-3">
<img src="Chrisbanks2-Cold-Fusion-Hd-Bank-of-america.ico" width="30" height="30"/>
</div>

<div class="col-3">
<img src="https://img.icons8.com/color/48/000000/new-jersey.png"/>
</div>
<div class = "col-3">
<img src="icon.png" width="30" height="30"/>
           </div>
</div>
</div>
</div>


  <div class = "example1">
<div class="container-fluid">
    

<font color="white"><h1 align="left" style="font:Helvetica Neue LT W01_85 Heavy,Arial,Sans-Serif">Sponsors:</h1></font>
<hr class="new1" style="color: #c5dc0a">
  <div class="row">

<div class="col-4">
<a href="https://women.acm.org/"><img src="assets/img/NcwitIcons/ACMW.png" style="width: 70px;margin-right: 10px;"></a>
</div>

<div class="col-4">
  <a href="https://girlswhocode.com/"><img src="assets/img/NcwitIcons/GWC.png" style="width: 90px;margin-right: 10px;"></a>
</div>


<div class="col-4">
  <a href="https://cahsi.utep.edu/">
<img src="assets/img/NcwitIcons/cahsiLogoTest.png" style="width: 60px;height: 60px;"></a>
</div>


           

</div>

</div>
</div>
</div>

</FOOTER>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>