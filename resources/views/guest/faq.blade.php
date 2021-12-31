<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>FAQ</title>
<head> 
    <!-- footer -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
@include('includes.header')
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap')

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}
body {
    background-image: linear-gradient(to right top, #9AF6FB, #7096F8);
    min-height: 100vh
}

.wrapper {
    max-width: 760px;
    margin: 100px auto;
    padding: 40px 20px
}

.wrapper .search {
    border: 1px solid #c8c8c8;
    overflow: hidden;
    border-radius: 25px;
    padding: 0 10px;
    margin: 15px 0 20px;
    transition: all 0.3s
}

.wrapper .search:hover,
.wrapper .search:focus-within {
    border: 1px solid transparent;
    box-shadow: 2px 5px 8px #1f1f1f10, 0px -4px 5px #1f1f1f10
}

.wrapper .search .form-control {
    box-shadow: none;
    outline: none;
    border: none
}

.wrapper .search .form-control:focus::placeholder {
    opacity: 0
}

.wrapper .accordion-button {
    font-size: 0.9rem;
    font-weight: 500
}

.wrapper .accordion-button:hover {
    background-color: #f8f8f8
}

.wrapper .accordion-button:focus {
    box-shadow: none
}

.wrapper .accordion-button::after {
    background-size: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #c8c8c8;
    background-position: center center;
    border-radius: 50%
}

.wrapper .accordion-button:not(.collapsed) {
    color: #000;
    background-color: #f7f7f7;
    font-weight: 600;
    border-bottom: 1px solid #ddd !important
}

.accordion-button:not(.collapsed)::after {
    border-color: #1E88E5
}

.wrapper .accordion-button.collapsed {
    border-bottom: 1px solid #ddd !important
}

.wrapper .accordion-collapse.show {
    border-bottom: 1px solid #ddd !important
}

.wrapper .accordion-collapse {
    background-color: #eaf3fa
}

.wrapper .accordion-collapse ul li {
    line-height: 2rem;
    width: 100%;
    padding: 0.5rem 1.3rem
}

.wrapper .accordion-collapse ul li:hover {
    background-color: #c9e7ff
}

.wrapper .accordion-collapse ul li a {
    text-decoration: none;
    color: #333;
    font-size: 0.85rem;
    font-weight: 400;
    display: block
}

.wrapper .accordion-collapse ul li:hover a {
    color: #222
}

@media (max-width: 777px) {
    .wrapper {
        margin: 50px 20px
    }
}

@media (max-width: 365px) {
    .wrapper {
        margin: 50px 10px
    }

    .w-75 {
        width: 90% !important
    }
}

/* footer */
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

</style>

<body>
<div class="wrapper bg-white rounded shadow">
    <div class="h3 text-primary text-center">How can we help you?</div>
    <div class="d-flex justify-content-center">
        <div class="search w-75 d-flex align-items-center"> <span class="fas fa-search text-dark"></span> <input type="text" class="form-control" placeholder="Search"> </div>
    </div>
    <div class="accordion accordion-flush border-top border-start border-end" id="myAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"> Language </button> </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                <div class="accordion-body p-0">
                    <ul class="list-unstyled m-0">
                        <li><a href="#">Change language of website</a></li>
                        <li><a href="#">Accessing Color Palette</a></li>
                        <li><a href="#">Searching Snippets</a></li>
                        <li><a href="#">How to use online editor tools</a></li>
                        <li><a href="#">Upgrading Pro</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"> Contact us </button> </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                <div class="accordion-body p-0">
                    <ul class="list-unstyled m-0">
                        <li><a href="#">How to upgrade to pro</a></li>
                        <li><a href="#">Benifits of Pro</a></li>
                        <li><a href="#">Payment methods to get Pro</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"> Popular in Dream Hunter </button> </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                <div class="accordion-body p-0">
                    <ul class="list-unstyled m-0">
                        <li><a href="#">How to use Pro Online Editor</a></li>
                        <li><a href="#">Know Gradient generator</a></li>
                        <li><a href="#">Using Beautifier</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour"> Intern website tools </button> </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                <div class="accordion-body p-0">
                    <ul class="list-unstyled m-0">
                        <li><a href="#">How to download snippets</a></li>
                        <li><a href="#">Donate to Author</a></li>
                        <li><a href="#">Donation methods</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive"> How apply an job internship? </button> </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                <div class="accordion-body p-0">
                    <ul class="list-unstyled m-0">
                        <li><a href="#">Find Job</a></li>
                        <!-- <li><a href="#">Fontawesome Icons</a></li>
                        <li><a href="#">Material Design</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix"> Policy & copyrights </button> </h2>
            <div id="flush-collapseSix" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                <div class="accordion-body p-0">
                    <ul class="list-unstyled m-0">
                        <li><a href="#">BBBootstrap Guidelines</a></li>
                        <li><a href="#">BBBootstrap Policies</a></li>
                        <li><a href="#">Copyright and right management</a></li>
                    </ul>
                </div>
            </div>
        </div>
</br>
        <div class="h6 text-primary text-center">Can't answer your question? <a href="http://127.0.0.1:8000/contactus"> Contact Us</a></div>
    </div>
</div>
</body>
@include('includes.footer')
</html>