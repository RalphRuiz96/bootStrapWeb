<!DOCTYPE html> 
<html> 
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #154360;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 30px 16px;
  text-decoration: none;
}

li a:hover {
  color: orange;
}

// Variables
@link-color:       @brand-primary;
@link-hover-color: darken(@link-color, 15%);

// Usage
a {
  color: @link-color;
  text-decoration: none;

  &:hover {
    color: @link-hover-color;
    text-decoration: underline;
  }
}
#video { width: 100%; }

#video iframe {
width: 600px;
margin: 0 auto;
display:block;
}
</style>


    <head> 
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
<TITLE>NCWIT website</TITLE>

<body>

<ul>

<div class="container">
  <div align="left">
        <img src="NCWIT_AiCProgram_Logo_FullColor.png" 
             class="img-responsive" alt="NCWIT logo" 
             width="200"/> 
    </div>
<div align="right">

<div align="right"><font color = "yellow"><h2>NCWIT at KEAN</h2></font></div>
  <li><a class="active" href="#home"><font color = "yellow">Home</font></a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#news">Predictor Game</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">Winners Projects</a></li>
  </ul>
 </div>
 <div class="container p-3 my-3 border">
  <p><a href="https://us02web.zoom.us/webinar/register/WN_BeqIKv0ORKyTNwSqru2rmA" target="_blank" class="btn btn-info" style="padding:15px 32px;" role="button">2020 AiC Virtual Award Event Registration</a>
  <a href="englishPredictionTable.php" target="_blank" class="btn btn-success" style="padding:15px 32px;" role="button">English Prediction Table</a>    
  <a href="winners.pdf" target="_blank" class="btn btn-success" style="padding:15px 32px;" role="button">Our Winners 2020</a></p>
<div id="video" align="center">
<p>
<iframe src="https://player.vimeo.com/video/397527751" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
<a href="https://vimeo.com/397527751">NCWIT Congratulates AiC Awardees</a> from <a href="https://vimeo.com/user70846830">NCWIT Aspirations in Computing</a> on <a href="https://vimeo.com">Vimeo</a>.</p></div>
</div>
</div>
</body>
</html>