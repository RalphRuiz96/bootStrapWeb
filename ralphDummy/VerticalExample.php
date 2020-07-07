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

* {
  box-sizing: border-box;
}

video {

width:100%;
height: auto;

}

.row:after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  
  padding: 15px;
  width: 100%;
}
@media only screen and (min-width: 600px) {
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}

@media only screen and (min-width: 1400px) {
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}


</style>
<script>
var pdf = new PDFObject({
  url: "winners.pdf",
  id: "pdfRendered",
  pdfOpenParams: {
    view: "FitH"
  }
}).embed("pdfRenderer");
</script>

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
<div align="left">
<button onclick="document.location = 'HorizontalExample.php'" target="_blank" class="btn btn-info" style="padding:15px 32px;" role="button">Check out the Horizontal Example</button>

<button onclick="document.location = 'VerticalExample.php'" target="_blank" class="btn btn-success" style="padding:15px 32px;" role="button">Check out the Bootstrapped Example</button>

<button onclick="document.location = 'index.html'" target="_blank" class="btn btn-info" style="padding:15px 32px;" role="button">Back To HomePage</button>

</div>
<div class="container p-3 my-3 border">
  <div align="left">
        <img src="NCWIT_AiCProgram_Logo_FullColor.png" 
             class="img-responsive" alt="NCWIT logo" 
             width="307" height="240" /> 
    </div>
<div align="right">

<div class="d-none d-lg-block" align="right"><font color = "grey"><h2>NCWIT at KEAN</h2></font></div>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  </ul>
 </div>
 <div class="container p-3 my-3 border">
  <p><a href="https://us02web.zoom.us/webinar/register/WN_BeqIKv0ORKyTNwSqru2rmA" target="_blank" class="btn btn-info" style="padding:15px 32px;" role="button">2020 AiC Virtual Award Event Registration</a>
  <a href="winners.pdf" target="_blank" class="btn btn-success" style="padding:15px 32px;" role="button">Winners 2020</a></p>
<div id="video" align="center">
<p>
  <div class="col-6 col-s-9">

<video width="550" controls> 

<source src = "AiC_Promo_-_NCWIT_AiC_Award_Application-359893851.mp4" type = "video/mp4"> 
</source>
</video> 

</div>
</p></div>


<div id="pdfRenderer"></div>
</p>
</div>
</div>
</body>
</html>