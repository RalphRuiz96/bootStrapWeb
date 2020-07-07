<?php
//KILL THE SESSION WHEN THE GAME IS OVER, ADD NEW BUTTON: THERE ARE ALSO COMMENTS TO ADJUST THE CODE
if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}
/*
  if($_POST['ctl00$MainContent$txtInput'] == ""){  
    echo ("Type your text!"); //yku commented out on 05/20/2020
  } else {
    $input = $_POST['ctl00$MainContent$txtInput'];
  }
  
  if($_POST['ctl00$MainContent$txtInput2'] == ""){
    echo ("Guess a Word!");//yku commented out on 05/20/2020
  } else {
    $output = strtolower($_POST['ctl00$MainContent$txtInput2']);
  }
*/
//if (isset($_SESSION['count1'])) echo $_SESSION['count1'];
//if (isset($_SESSION['count2'])) echo $_SESSION['count2'];
// if (isset($_POST['ctl00$MainContent$ddlLanguage'])) $SelectedLang=$_POST['ctl00$MainContent$ddlLanguage'];
//echo $SelectedLang;
//else select language is equal to english (for example)


//echo $Select_name;

?>

<!DOCTYPE html>
<html>

<link href="style.css" rel="stylesheet" type="text/css">
 <head> 
   <html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
                            <a style="text-decoration:none" href="index.php">Home</a>
                          </li>
                          <li>
                            <a style="text-decoration:none"class="current" href="login.php">Predictor Game</a>
                          </li>
                          <li>
                            <a style="text-decoration:none"href="englishPredictionTable.php">Game History
                            </font>
                          </a>
                        </li>
                        <li>
                          <a href="#news">News</a>
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
                          <a class="active" href="login.php">Predictor Game</a>
                          <a href="englishPredictionTable.php">Game History Table</a>
                          <a href="#news">News</a>
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

    <div align="center">
       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"></b>
        <h1>Predictor Demo</h1>
        <p class="lead">Choose your language:<select name="ctl00$MainContent$ddlLanguage" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$MainContent$ddlLanguage\&#39;,\&#39;\&#39;)&#39;, 0)" id="MainContent_ddlLanguage">
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
        <p><h2>Insert your text:</h2><input name="ctl00$MainContent$txtInput" type="text" id="MainContent_txtInput" value="<?php echo $input; ?>" width="200"/>
         </p>
        <p><h2>Guess a Word:</h2><input     name="ctl00$MainContent$txtInput2" type="text" id="MainContent_txtInput2" value="<?php echo $output; ?>"/>
        </p>

        <input type="submit" name="ctl00$MainContent$btnPredict" value="Predict" id="MainContent_btnPredict" class="btn btn-success" style="padding:15px 32px;"/>
        <span id="MainContent_lblHidden"></span>
    
</form>
<?php

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
echo $wholeRequest;
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
if ($prediction == $output)
{ //create a variable of boolean to see if you have won or lost very simple it has to go to the database
    echo "  -  YOU WON!!!" . '</h2>';
    if (isset($_SESSION['counter1']))
    {
        $_SESSION['counter1'] += 1;
    }
    else
    {
        $_SESSION['counter1'] = 1;
    }
}
else
{
    echo "  -  YOU MISSED!!!" . '</h2>';
    if (isset($_SESSION['counter2']))
    {
        $_SESSION['counter2'] += 1;
    }
    else
    {
        $_SESSION['counter2'] = 1;
    }
}
echo "<h1>NCWIT girls: " . $_SESSION['counter1'] . ", AI: " . $_SESSION['counter2'] . '</h1>';

echo '<div align="center">  
<iframe frameborder="0"  scrolling="no" width="520" height="200" 
src="https://www.fctables.com/teams/arsenal-180231/iframe/?type=team-last-match&lang_id=2&country=67&template=12&team=180231&timezone=America/New_York&time=24&width=520&height=200&font=Verdana&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=1&scfs=22&scfc=333333&scb=1&sclg=1&teamls=80&sh=1&hfb=1&hbc=3bafda&hfc=FFFFFF"></iframe>
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
if (isset($_POST['ctl00$MainContent$btnPredict']))
{

    //if the "Type your text" is empty a message will pop up to make the user enter value and not access the database
    /*if($_POST['ctl00$MainContent$txtInput'] == ""){
    echo ("You must put in value in the text!");
    
    } else {
    $input = $_POST['ctl00$MainContent$txtInput'];*/
    //selecting query
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

        $query = "INSERT INTO EnglishPrediction (userInput, YourGuess, MachinePrediction, UserVictory, Language, cookie_id) VALUES ('$val','value', '$val2','$Win', '$languageCell', '$random_cookie')";
        //used to connect the query
        $result = mysqli_query($con, $query);
        //used to create a row
        $row = mysqli_fetch_array($result);
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
        $query = "INSERT INTO EnglishPrediction (id, userInput, YourGuess, MachinePrediction, UserVictory, Language) VALUES (null,'$val','$val2', '$prediction','$Loss', '$languageCell')";
        //used to connect the query
        $result = mysqli_query($con, $query);
        //used to create a row
        $row = mysqli_fetch_array($result);
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
$command = escapeshellcmd('../python/test.py');
$output = shell_exec($command);
//echo $output;
//echo "after python";
//refresh page
//$page = $_SERVER['PHP_SELF'];
//$sec = "1000";
//header("Refresh: $sec; url=$page");



?>


</html>
