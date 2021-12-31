<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href='https://fonts.googleapis.com/css?family=Rancho' rel='stylesheet'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://use.fontawesome.com/0a0b74d9be.js"></script>



<title>Apply Job</title>


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

body{
    margin-left:200px;
    margin-right:200px;
}
h1{
    font-family: 'Rancho';
    font-size: 22px;
    text-align:center;
}

h4{
  font-family: 'Ranga', cursive;
  text-align:center;
  margin-left:-200px;
}

h5{
  text-align:center;
  margin-left:-200px;
}

.submit {
  margin-top:60px;
  margin-left:200px;
  background-color:#77b5fe;
  color: white;
  border:2px solid #ffffff;
  border-radius: 12px;
  padding: 8px 25px;
  text-align: center;
}

.submit:hover {
  background-color:white;
  color: black;
  border: 2px solid #779AC2;
  border-radius: 12px;
}

input[type="text"]{
  width:300px;
  background-color:#f4f0ec;
}

input[type="email"]{
  width:300px;
  background-color:#f4f0ec;
}

input[type="tel"]{
  width:300px;
  background-color:#f4f0ec;
}

input[type="date"]{
  width:150px;
  background-color:#f4f0ec;
}

#location{
  width:300px;
}


.box{
    background-color:#b0c4de;
    margin-top:30px;
    margin-bottom:50px;
    border-radius:12px 12px 12px 12px;
    padding-top:30px;
    margin-left:200px;
    margin-right:200px;
}

.big{
    background-color:white;
    margin-left:50px;
    margin-right:50px;
}

#submit{
  padding-bottom: 30px;
}

.error{
			display: none;
			
		}		
		
		.error_show{
			color: red;
			
		}
		
		input.invalid, textarea.invalid{
			border: 2px solid red;
		}
		
		input.valid, textarea.valid{
			border: 2px solid green;
		}
    </style>

  <script>
    $(document).ready(function() {
			/* Real-time Validation*/
				/*Name can't be blank*/
				$('#input_Name').on('input', function() {
					var input=$(this);
					var is_name=input.val();
					if(is_name){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});

        /*Email must be an email*/
				$('#input_Email').on('input', function() {
					var input=$(this);
					var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
					var is_email=re.test(input.val());
					if(is_email){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});

        /*Address can't be blank*/
				$('#input_Address').on('input', function() {
					var input=$(this);
					var is_address=input.val();
					if(is_address){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});

         /*phone number must be in tel format*/
				$('#input_Tel').on('input', function() {
					var input=$(this);
					var re = /^01\d-\d{7}$/;
					var is_tel=re.test(input.val());
					if(is_tel){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});

        /*Password can't be blank*/
				$('#input_Password').on('input', function() {
					var input=$(this);
					var is_password=input.val();
					if(is_password){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});

         /*Intro can't be blank*/
				$('#input_Intro').on('input', function() {
					var input=$(this);
					var is_password=input.val();
					if(is_password){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});

         /*Education level can't be blank*/
				$('#input_Education').on('input', function() {
					var input=$(this);
					var is_password=input.val();
					if(is_password){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});

        /*Education Institution can't be blank*/
				$('#input_Institution').on('input', function() {
					var input=$(this);
					var is_password=input.val();
					if(is_password){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});

        /*Study Field can't be blank*/
				$('#input_studyField').on('input', function() {
					var input=$(this);
					var is_password=input.val();
					if(is_password){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});

         /*Grad Period can't be blank*/
				$('#input_GradPeriod').on('input', function() {
					var input=$(this);
					var is_password=input.val();
					if(is_password){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});

         /*Institution Location can't be blank*/
				$('#input_Location').on('input', function() {
					var input=$(this);
					var is_password=input.val();
					if(is_password){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});


/* After Form Submitted Validation*/
$("#submit button").click(function(event){
				var form_data=$("#details").serializeArray();
				var error_free=true;
				for (var input in form_data){
					var element=$("#input_"+form_data[input]['name']);
					var valid=element.hasClass("valid");
					var error_element=$("span", element.parent());
					if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
					else{error_element.removeClass("error_show").addClass("error");}
				}
			
			});
  });
    </script>
    </head>
<header>
@include('includes.header')
</header>
<body style="background-color:#B6DDED;">

<h1 style="margin-top:110px;">Apply Job Form</h1>

<div class="box" style="padding-right:-200px; width:900px;">
    <form id="details" method="get" action="" style="width:1000px;">
  <div class="row" style="width:1000px;">
    <div class="col-sm" style="margin-left:20px;">

  <h5>JOB NAME</h5>
  <h4>Intern Details</h4>
    <div class="form-group">
    <label for="input_Name">Full Name:</label>
    <input type="text" class="form-control" id="input_Name" placeholder="Enter you full name" required>
    <span class="error">This field is required</span>
    
  </div>

  <div class="form-group">
    <label for="input_Email">Email address</label>
    <input type="email" class="form-control" id="input_Email" placeholder="abc@email.com" required>
    <span class="error">A valid email is required</span>
    
  </div>

  <div class="form-group">
    <label for="input_Tel">Telephone number</label>
    <input type="tel" class="form-control" id="input_Tel" placeholder="01x-xxxxxxx" required>
    <span class="error">A valid telephone number is required</span>
   
  </div>
  
  <div class="form-group">
    <label for="input_Address">Address</label>
    <input type="text" class="form-control" id="input_Address" placeholder="Enter your address" required>
    <span class="error">This field is required</span>
  </div>

  <div class="form-group">
    <label for="input_Intro">Introduction</label>
    <input type="text" class="form-control" id="input_Address" placeholder="Enter your introduction" required>
    <span class="error">This field is required</span>
  </div>

  <div class="row">
  <div class="col-sm">
  <div class="form-group">
    <label for="startDate">Course Start Date</label>
    <input type="date" class="form-control" id="startDate" required>
    <span class="error">This field is required</span>
  </div>
  </div>
 
  <div class="col-sm">
  <div class="form-group">
    <p>&nbsp<p>
    <p style="text-align:center;margin-left:-130px;">-</p>
  </div>
  </div>

  <div class="col-sm">
  <div class="form-group">
    <label for="endDate" style="margin-left:-150px;">Course End Date</label>
    <input type="date" class="form-control" id="endDate"style="margin-left:-150px;" required>
    <span class="error">This field is required</span>
  </div>
  </div>
</div>
       
    <div class="form-group">
    <label for="file">Upload your CV</label>
    <input type="file" class="form-control-file" id="file" required>
    <span class="error">This field is required</span>
 
  </div>
        
</div>

   <div class="col-sm">
   <h5>JOB DEPARTMENT</h5>
  <h4>Education</h4>
    <div class="form-group">
    <label for="input_Education">Education Level</label>
    <input type="text" class="form-control" id="input_Education" placeholder="Enter you education level" required>
    <span class="error">This field is required</span>
    
</div>
       
  
    <div class="form-group">
    <label for="input_Institution">Education Institution</label>
    <input type="text" class="form-control" id="input_Institution" placeholder="Enter you education institution" required>
    <span class="error">This field is required</span>
</div>
       

    <div class="form-group">
    <label for="input_studyField">Study Field</label>
    <input type="text" class="form-control" id="input_studyField" placeholder="Enter you study Field" required>
    <span class="error">This field is required</span>
</div>
        
  
    <div class="form-group">
    <label for="input_GradPeriod">Grad Period</label>
    <input type="text" class="form-control" id="input_GradPeriod" placeholder="Enter you grad period" required>
    <span class="error">This field is required</span>
</div>
        
         <div class="form-group">
    <label for="input_Location">Institution Location</label>
    <textarea class="form-control" id="input_Location" rows="5" style=" background-color:#f4f0ec; width:350px;" required></textarea>
    <span class="error">This field is required</span>
  </div>
       
         <div id="submit">
         <button class="submit" type="submit" name="submit">Submit</button>
</div>

   </div>
</div>
        </form>

</div>

</body>
@include('includes.footer')
</html>