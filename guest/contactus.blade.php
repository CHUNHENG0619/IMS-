<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Contact Us</title>
<head>
<!-- footer -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- contactus -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.4/tailwind.min.css">
@include('includes.header')
</head>
<style>
@import url(//fonts.googleapis.com/css?family=Montserrat:300,400,500);

.contact4 {
  font-family: "Montserrat", sans-serif;
	color: #8d97ad;
  font-weight: 300;
  border: 3px solid rgba(105, 105, 105, 0.7);
  text-align: center;
  margin: 150px 200px 50px 200px;
}

.contact4 h1, .contact4 h2, .contact4 h3, .contact4 h4, .contact4 h5, .contact4 h6 {
  color: #3e4555;
  font-size: 35px;
  font-weight: 500;
}

.contact4 .font-weight-medium {
	font-weight: 500;
}

.contact4 .form-control {
  background: transparent;
  border: 2px solid rgba(105, 105, 105, 0.5);
}

.contact4 .form-control:focus {
  border-color: #ffffff;
}

.contact4 input::-webkit-input-placeholder,
.contact4 textarea::-webkit-input-placeholder {
  color: rgba(105, 105, 105, 0.7);
}

.contact4 input:-ms-input-placeholder,
.contact4 textarea:-ms-input-placeholder {
  color: rgba(105, 105, 105, 0.7);
}

.contact4 input::placeholder,
.contact4 textarea::placeholder {
  color: rgba(105, 105, 105, 0.7);
}

.contact4 .right-image {
  position: absolute;
  right: 0;
  bottom: 0;
  top: 0;

}

.contact4.bg-info {
    background-color: #b6dded !important;
}

.contact4 .text-inverse {
    color: #3e4555 !important;
}

@media (min-width: 1024px) {
	.contact4 .contact-box {
    padding: 80px 105px 80px 0px;
	}
}

@media (max-width: 767px) {
	.contact4 .contact-box {
    padding-left: 15px;
    padding-right: 15px;
	}
}

@media (max-width: 1023px) {
	.contact4 .right-image {
			position: relative;
			bottom: -95px;
	}
}

@import url(//fonts.googleapis.com/css?family=Montserrat:300,400,500);

.contacticon{
  text-align: center;
  margin: 50px 50px;
}

.contact4 button{
  border-radius: 30px;
  border: 1px solid lightgrey;
}

.invalid-feedback,
.empty-feedback {
  display: none;
}

.was-validated :placeholder-shown:invalid ~ .empty-feedback {
  display: block;
}

.was-validated :not(:placeholder-shown):invalid ~ .invalid-feedback {
  display: block;
}

.is-invalid,
.was-validated :invalid {
  border-color: #dc3545;
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
  margin: 0 0;
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
    </style>
    <body>
<div class="bg-info contact4 overflow:hidden position-relative">
  <!-- Row  -->
  <div class="row no-gutters">
    <div class="container">
      <div class="col-lg-6 contact-box mb-4 mb-md-0">
        <div class="">
          <h1 class="title font-weight-semibold text-black mt-2">Contact Us</h1>
          <form action="" method="POST" id="form" class="needs-validation mt-3" novalidate>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group mt-2">
                  <input class="form-control text-white" type="text" placeholder="Name" required class="w-full px-3 py-2 placeholder-gray-300 border-2 border-gray-200 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300">
                  <div class="empty-feedback invalid-feedback text-red-600 text-sm mt-1 font-medium text-left">
                Please provide your name.
                </div>
              </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group mt-2">
                  <input class="form-control text-white" type="email" placeholder="Email address" required class="w-full px-3 py-2 placeholder-gray-300 border-2 border-gray-200 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300">
                  <div class="empty-feedback text-red-600 text-sm mt-1 font-medium text-left">
                Please provide your email address.
              </div>
              <div class="invalid-feedback text-red-600 text-sm mt-1 font-medium text-left">
                Please provide a valid email address.
              </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group mt-2">
                  <textarea class="form-control text-white" rows="3" placeholder="Message" required class="w-full px-3 py-2 placeholder-gray-300 border-2 border-gray-200 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"></textarea>
                  <div class="empty-feedback invalid-feedback text-red-600 text-sm mt-1 font-medium text-left">
                Please provide a message.
              </div>
                </div>
              </div>
              <div class="col-lg-12 d-flex align-items-center mt-2">
                <button type="submit" class="btn bg-white text-inverse px-3 py-2"><span> Submit</span></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-6 right-image p-r-0">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1619902.0054433027!2d-122.68851282163044!3d37.534535608111824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1507725785789"
        width="100%" height="485" frameborder="0" style="border:0" allowfullscreen data-aos="fade-left" data-aos-duration="3000"></iframe>
    </div>
  </div>
    </div>


    <div class="contacticon">
    <div class="col-lg-12">
          <div class="card mt-4 border-0 mb-4">
            <div class="row">
              <div class="col-lg-4 col-md-4">
                <div class="card-body d-flex align-items-center c-detail pl-0">
                  <div class="mr-3 align-self-center">
                    <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon1.png" class="contacticon">
                  </div>
                  <div class="">
                    <h6 class="font-weight-medium">Address</h6>
                    <p class="">Rawang
                      <br> Selangor</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="card-body d-flex align-items-center c-detail">
                  <div class="mr-3 align-self-center">
                    <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon2.png" class="contacticon">
                  </div>
                  <div class="">
                    <h6 class="font-weight-medium">Phone</h6>
                    <p class="">0167589366
                      <br> 078652149</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="card-body d-flex align-items-center c-detail">
                  <div class="mr-3 align-self-center">
                    <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon3.png" class="contacticon">
                  </div>
                  <div class="">
                    <h6 class="font-weight-medium">Email</h6>
                    <p class="">
                      intern@gmail.com
                      <br> admin@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              </div>
              </div>
              </div>
              </div>
      
      </body>
      @include('includes.footer')
      <script>
        (function () {
  "use strict";
  /*
   * Form Validation
   */

  // Fetch all the forms we want to apply custom validation styles to
  const forms = document.querySelectorAll(".needs-validation");
  const result = document.getElementById("result");
  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();

          form.querySelectorAll(":invalid")[0].focus();
        } else {
          /*
           * Form Submission using fetch()
           */

          const formData = new FormData(form);
          event.preventDefault();
          event.stopPropagation();
          const object = {};
          formData.forEach((value, key) => {
            object[key] = value;
          });
          const json = JSON.stringify(object);
          result.innerHTML = "Please wait...";

          fetch("https://api.web3forms.com/submit", {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
              Accept: "application/json"
            },
            body: json
          })
            .then(async (response) => {
              let json = await response.json();
              if (response.status == 200) {
                result.innerHTML = json.message;
                result.classList.remove("text-gray-500");
                result.classList.add("text-green-500");
              } else {
                console.log(response);
                result.innerHTML = json.message;
                result.classList.remove("text-gray-500");
                result.classList.add("text-red-500");
              }
            })
            .catch((error) => {
              console.log(error);
              result.innerHTML = "Something went wrong!";
            })
            .then(function () {
              form.reset();
              form.classList.remove("was-validated");
              setTimeout(() => {
                result.style.display = "none";
              }, 5000);
            });
        }
        form.classList.add("was-validated");
      },
      false
    );
  });
})();
        </script>
      </html>