
<html>
<style>
  table {
  border-radius: 7px;
  background: linear-gradient(to top right, #1f3f99 0%, #00ebff 100%);
  padding: 25px;
 /* width: 600px;*/
  box-shadow: 5px 10px 18px white;
  color: white;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {
  background: linear-gradient(to left, #28a745 59%, #00FF7F 100%);
}

  table {
  border-radius: 7px;
  background: linear-gradient(to top right, #1f3f99 0%, #00ebff 100%);
  padding: 25px;
  width: 600px;
  height: 50px;
  margin: 10px;
  box-shadow: 5px 10px 18px white;
  color: white;
   margin: auto;
  
}
</style>
  <title>NCWIT-NJ</title>
   <head>
       <meta name="HandheldFriendly" content="true" />
      <meta name="MobileOptimized" content="width" />
      <meta http-equiv="x-ua-compatible" content="ie=edge, chrome=1" />
      <meta charset="utf-8" />
      <link rel="shortcut icon" href="https://www.aspirations.org/sites/default/files/favicon.ico" type="image/vnd.microsoft.icon" />
     
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

            </head>
          
                
                        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
                        <title>NCWIT-NJ</title>


<?php
//connect to the database
include "dbconfig.php";


//the limit of each table to have records is 5
$num_per_page=10; 

//select the whole english prediction for records 
  $pr_query = "SELECT * FROM `rising star certificate templat`"; 
  //formats how many rows there are in a query
  $pr_result = mysqli_query($con, $pr_query); 
  $total_record = mysqli_num_rows($pr_result);
  //the total number of table pages
  $total_page = ceil($total_record/$num_per_page);

  // determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

//the value from which the query will select from, which is zero 
$start_from = ($page-1)*$num_per_page; 

?>

 <div class="container p-3 my-3 border">
                      
<div class="row">
    <div class="col-md-8 offset-md-2">
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div style="overflow-x:auto;">
<?php
//selecting query
$query ="SELECT * FROM `rising star certificate templat` limit $start_from, $num_per_page"; 
//connecting to db for appropriate db selection 
$result = mysqli_query($con, $query); 
//formattin row selection 
$row = mysqli_fetch_array($result); 


//the header of the table: columns
    echo "<table class='center'>
        <tr>
        
          <th><font size='+2'>Name</font></th>
          <th>High School</th>
       
          
        </tr>";

$a=0; //to keep track of the records to be edited or deleted
//if result is equal to itself run the body of the if statement
if($result = mysqli_query($con, $query)){
  //if the number of rows are greater than zero run the body of the if statement 
   if(mysqli_num_rows($result) > 0){
    //while loop to iterate through the records and print them out

    while($row = mysqli_fetch_array($result)){

      //echo "<input type='hidden' name='id[$a]' value='$id'>";
      echo"<tr>"; //values of each column*row
      echo"<td><b>".$row['A']."</b></td>";
      echo"<td><b>".$row['B']."</b></td>";
      
      
      //echo "<td><b><input type='text' value='$userInput' name=userInput[$a]></b></td>";
      //echo "<td><b><input type='text' value='$MachinePrediction' name=MachinePrediction[$a]></b></td>";
      //echo "<td><input type='checkbox' name='delete[$a]' value='Y'>\n";
      echo"</tr>";
      $a++;
    }//end of while
    echo "</table>\n"; 
   }//end of inner if statement
}// end of outer if statement 
  
  
  //iterates and prints each record until it is equal to the total number of pages 
  ?>
</div></div></div></div></div></div>


<center>
  </form>
 <div class = "nav"></div>
 <center>
 <?php echo "<b>Name Format Example: Daniel Kim</b>";?>
</center>
 <form action="searchResultOurWinners.php" method= "get">
<br>
<b>Search Name: <input type="text" name="keywords" required="required" ></b>

<input type="submit" value="Search Transactions">
</form>

  <?php
  for($i=1; $i <= $total_page; $i++){
    echo "<a href='RisingStarCertificateTemplate.php?page=".$i."'class='button button1' style='padding:15px 32px;'>$i</a>";
  }
?>
  
</div>



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
 </center>

 </form>
 <style>
html, body {
    height:100%;
    
}
.sizedimg {
    max-width: 100%;
    max-height: 100%;
}
 </html>