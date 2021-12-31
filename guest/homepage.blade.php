

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://use.fontawesome.com/0a0b74d9be.js"></script>
<style>

.fa {
color: #fffff;
margin-right: 5px;
font-size:18px;
width:2.25rem;
}
    .footer-dark {
  padding:50px 0;
  color:#f0f9ff;
  background-color:#282d32;
}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:18px;
  letter-spacing: 1px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:2px;
  letter-spacing: 1px;
}

.footer-dark ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark ul a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .template-demo {
  text-align:center;
}

@media (max-width:991px) {
  .footer-dark .template-demo>.btn {
     margin-right: 0.5rem;
 }

 .footer-dark .template-demo {
     margin-top: 0.5rem;
 }
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
}

.footer-dark .btn.btn-social-icon {
     width: 50px;
     height: 50px;
     padding: 0;
     margin-top: 36px;
     margin-left: 10px;
 }

 .footer-dark .btn.btn-rounded {
     border-radius: 50px
 }

 .footer-dark .btn-outline-facebook {
     border: 1px solid #3b579d;
     color: #3b579d
 }

 .footer-dark .btn-outline-facebook:hover {
     background: #3b579d;
     color: #ffffff
 }

 .footer-dark .btn-outline-youtube {
     border: 1px solid #e52d27;
     color: #e52d27
 }

 .footer-dark .btn-outline-twitter {
     border: 1px solid #2caae1;
     color: #2caae1
 }

 .footer-dark .btn-outline-instagram {
     border: 1px solid #833AB4;
     color: #833AB4;
 }

 .footer-dark .btn-outline-twitter:hover {
     background: #2caae1;
     color: #ffffff
 }

 .footer-dark .btn-outline-linkedin:hover {
     background: #0177b5;
     color: #ffffff
 }

 .footer-dark .btn-outline-youtube:hover {
     background: #e52d27;
     color: #ffffff
 }

 .footer-dark .btn-outline-instagram:hover {
     background: #e52d27;
     color: #ffffff
 }

 .footer-dark .btn-facebook {
     background: #3b579d;
     color: #ffffff
 }

 .footer-dark .btn-youtube {
     background: #e52d27;
     color: #ffffff
 }

 .footer-dark .btn-twitter {
     background: #2caae1;
     color: #ffffff
 }

 .footer-dark .btn-instagram {
     background: #781db5;
     color: #ffffff
 }

 .footer-dark .btn-facebook:hover,
 .footer-dark .btn-facebook:focus {
     background: #2d4278;
     color: #ffffff
 }

 .footer-dark .btn-youtube:hover,
 .footer-dark .btn-youtube:focus {
     background: #c21d17;
     color: #ffffff
 }

 .footer-dark .btn-twitter:hover,
 .footer-dark .btn-twitter:focus {
     background: #1b8dbf;
     color: #ffffff
 }

 .footer-dark .btn-instagram:hover,
 .footer-dark .btn-instagram:focus {
     background: #5c168c;
     color: #ffffff
 }


 .footer-dark .template-demo {
     margin-left: 450px;
 }

fieldset {
    background-color: rgba(255, 199, 191, 1);
}
.w3-tag {
  height:15px;width:15px;padding:0;margin-top:6px
}
</style>
</head>
@extends('includes.header')
<body>
<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="/images/home1.png" alt="home1" style="width:100%;min-height:350px;max-height:600px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="IMS">LEARN MORE!</button>
  </div>
</div>

<!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h4>LEARN Intern Management System</h4>
      <h5>Glad you can browse our website <i class="fa fa-smile-o"></i></h5>
    </header>
    <div class="w3-container">
      <p>Glad you can become an intern of our Dream Hunter PLT company.</p>
      <p>Go to our <a class="w3-text-teal" href="/https://dreamhunters.dreamforfun.com.my/">Dream Hunter PLT</a> website to learn more!</p>
    </div>
    <footer class="w3-container w3-teal">
      <p></p>
    </footer>
  </div>
</div>

<fieldset> 
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>Find Your Passion</h2>

<div class="w3-row"><br>

<div class="w3-quarter">
  <a href="">
      <img src="/images/passion1.png" alt="p1" style="width:80%">
  </a>
  <h3>Sales & Marketing</h3>
</div>

<div class="w3-quarter">
  <a href="">
      <img src="/images/passion2.png" alt="p2" style="width:80%">
  </a>
  <h3>Web Technology</h3>
</div>

<div class="w3-quarter">
  <a href="">
    <img src="/images/passion3.png" alt="p3" style="width:80%">
  </a>
  <h3>Human Resources</h3>
</div>

<div class="w3-quarter">
  <a href="">
    <img src="/images/passion4.png" alt="p4" style="width:100%">
  </a>
  <h3>Finance & Accounting</h3>
</div>
</div>

<div class="w3-row"><br>

<div class="w3-quarter">
  <a href="">
    <img src="/images/passion5.png" alt="p5" style="width:90%">
  </a>
  <h3>Designer</h3>
</div>

<div class="w3-quarter">
  <a href="">
    <img src="/images/passion6.png" alt="p6" style="width:90%">
  </a>
  <h3>Product Management</h3>
</div>

<div class="w3-quarter">
  <a href="">
    <img src="/images/passion7.png" alt="p7" style="width:100%">
  </a>
  <h3>Public Relation</h3>
</div>

<div class="w3-quarter">
  <a href="">
    <img src="/images/passion8.png" alt="p8" style="width:80%">
  </a>
  <h3>Business Development</h3>
</div>
</div>

<!-- Slideshow -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">
    <div class="w3-container">
      <div class="w3-display-container mySlides">
      <img src="/images/work1.png" style="width:100%">
      <div class="w3-display-topleft w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Working Experience</span>
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="/images/work2.png" style="width:100%">
      <div class="w3-display-middle w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Working Experience</span>
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="/images/work3.png" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Working Experience</span>
      </div>
    </div>

    <!-- Slideshow next/previous buttons -->
    <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
      <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
      <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
    
      <div class="w3-center">
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
      </div>
    </div>
</div>
</fieldset>
<img src="/images/home3.png" alt="home3" width="1263px" height="550px">
@include('includes.footer')
<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>
