<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href='https://fonts.googleapis.com/css?family=Rancho' rel='stylesheet'>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pushster&family=Sansita&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pushster&family=Rationale&family=Sansita&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://use.fontawesome.com/0a0b74d9be.js"></script>
<title>Job Details</title>


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


h1{
    font-family: 'Rancho';
    font-size: 22px;
    text-align:center;
}

.box{
    background-color:#B6DDED;
    margin-top:30px;
    margin-left:100px;
    margin-right:100px;
    padding-bottom:70px;
    padding-top:10px;
    border-radius:30px 30px 30px 30px;

}
.jobname{
    text-align:center;
    margin-top:40px;
    margin-bottom:20px;
}

.department{
    text-align:center; 
    margin-bottom:20px;
}

.salary{
    text-align:center;
    margin-bottom:20px;
}

.description{
    text-align:center;
    margin-bottom:20px;
}

.requirement{
    text-align:center;
    margin-bottom:20px;
}

.applybtn{
  background-color:#779AC2;
  color: white;
  border:2px solid #779AC2;
  border-radius: 30px;
  padding: 15px 200px;
  text-align: center;
  text-decoration: none;
  margin-left:340px;
  margin-top:20px;
  font-size:23px;
  font-family: 'Rationale', sans-serif;

}

.applybtn:hover {
  background-color:white;
  text-decoration: none;
  color: black;
  border: 2px solid #779AC2;
  border-radius: 30px;
}
    </style>
    </head>
<header>
@include('includes.header')
</header>
<body style="background-color:#FFFAFA;">

<h1 style="margin-bottom:20px;">Job Details</h1>

<div class="box" style="margin-bottom:60px;">
<div class="jobname" >
<h3 style="color:#ffffff; margin-top:40px; font-family: 'Pushster', cursive;
font-family: 'Sansita', sans-serif;">JOB NAME</h3>
</div>
<div class="department">
    <h4 style="color:#ffffff; font-family: 'Pushster', cursive;
font-family: 'Sansita', sans-serif;">JOB DEPARTMENT</h4>
</div>
<div class="salary">
<h5 style="color:#ffffff; font-family: 'Pushster', cursive;
font-family: 'Sansita', sans-serif;">Salary:</h5>
<h5>RM3,500</h5>
</div>
<div class="description">
<h5 style="color:#ffffff; font-family: 'Pushster', cursive;
font-family: 'Sansita', sans-serif;">Job Description:</h5>
    <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare fermentum neque et maximus. Fusce auctor sit amet ipsum ut porttitor. In fermentum sed lectus sed scelerisque. Curabitur porta ipsum consequat mauris tincidunt, non egestas lorem cursus. Sed pretium magna sit amet dapibus dapibus. Aliquam iaculis ac nulla sed viverra. Maecenas id sapien pulvinar urna efficitur finibus at vel nisi. Ut nec ex pulvinar, finibus ante ac, egestas mauris. Aliquam euismod ultrices congue. Ut vitae lacinia ex.</p>
</div>
<div class="requirement">
<h5 style="color:#ffffff; font-family: 'Pushster', cursive;
font-family: 'Sansita', sans-serif;">Job Requirement:</h5>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
    <p>Aliquam tincidunt mauris eu risus.</p>
    <p style="margin-bottom:70px;">Vivamus vestibulum ntulla nec ante.</p>

</div>
<a href="#" class="applybtn">Apply</a>

</div>

</body>
@include('includes.footer')
</html>