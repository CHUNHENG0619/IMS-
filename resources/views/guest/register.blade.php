@extends('includes.header')
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
                background: url(/images/ims1.jpg);
            }
            
            img {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }

            .register {
                background: #B3E3F2;
                position: absolute;
                left: 451px;
                top: 255px;
                width: 450px;
                height: 600px;  
                display: block;
                margin-left: auto;
                margin-right: auto;
            }  

            form {
                text-align: center;
            }

            label {
                font-family: Roboto;
                font-size: 26px;
                line-height: 42px;
                display: inline-block;
                width: 200px;
            }

            input[type="text"], input[type="email"], input[type="password"]{
                background: #C4C4C4;
                border-radius: 768px;
                width: 200px;
                height: 50px;  
                margin: 5px;   
                font-size: 24px;
                line-height: 42px; 
            }
            
            input[type="submit"], input[type="reset"] {
                background: #779AC2;
                border-radius: 768px;
                width: 100px;
                height: 50px;  
                margin: 5px;   
                font-family: Roboto;
                font-size: 24px;
                line-height: 42px;
                text-align: center;
                letter-spacing: 0.1em;
                color: #FFFFFF;   
            }
        </style>
   <fieldset>
       <br><br><br>
   <img src="/images/ims2.png" alt="ims1" width="570">
   <div class="register">
      <form action="" method="post">
            <div>
               <label for="name">Full Name</label><br>
               <input name="name" id="name" type="text" maxlength="30" required />
            </div>
            <div>
               <label for="email">Email Address</label><br>
               <input name="email" id="email" type="email" required />
            </div>
            <div>
                <label for="pw" style="margin-left:10px;">Password</label><br>
                <input name="pw" id="pw" type="password" minlength="8" maxlength="15" required />
            </div>
            <div>
                <label for="cpw">Confirm Password</label><br>
                <input name="cpw" id="cpw" type="password" minlength="8" maxlength="15" required />
            </div><br>
            <div>
                <input type="reset" value="Clear"/>
                <input type="submit" value="Submit"/>
            </div><br>
            <div>
                Already have an account? <a href="">Log in</a>
            </div>
      </form>
    </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br><br><br><br><br><br><br> 
    </fieldset>
 
@include('includes.footer')
