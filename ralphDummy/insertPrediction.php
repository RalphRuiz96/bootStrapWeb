<?php 
//initially this dbconfig.php was made to connect to the database, sadly so far this has failed
include "dbconfig.php"; 
session_start(); 

//variables are made to access three different tables, if the team decides to go that route, we can use one single table for all languages
$english = $_POST['en'];
$spanish = $_POST['es'];
$russian = $_POST['ru']; 
$val = $_POST['ctl00$MainContent$txtInput'];
$val2 = $_POST['ctl00$MainContent$txtInput2'];
$lang = $_POST['ctl00$MainContent$ddlLanguage'];

//if predict button was selected then the body of the if statement is accessed 
if(isset($_POST['ctl00$MainContent$btnPredict'])){

	//if the "Type your text" is empty a message will pop up to make the user enter value and not access the database 
	if($_POST['ctl00$MainContent$txtInput'] == ""){
		echo ("You must put in value in the text!");
	} else {

		//selecting query
		$query = "INSERT INTO EnglishPrediction (id, userInput, YourGuess, MachinePrediction, UserVictory, Language) VALUES (null,'$val','value', '$val2','f', '$lang')";
		//used to connect the query
		$result = mysqli_query($con,$query);
		//used to create a row
		$row = mysqli_fetch_array($result);

		echo ("You have successfully inserted the query!");
		
	}
}


?>