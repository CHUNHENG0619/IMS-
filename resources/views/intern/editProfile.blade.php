<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Edit Profile </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<style>
    body {
    background:#B6DDED;
}
.main-body {
    padding: 15px;
}
.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none;
    padding-bottom:20px;
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.breadcrumb{
  background-color:rgb(255,255,255,0.0);
  margin-bottom:-5px;
}

.breadcrumb-item a{
  text-decoration:none;
}

.main-breadcrumb li{
  color:#000000;
}

.btn-outline-primary{
  background-color:#6082B6;
  color:#ffffff;
  border: 1px solid white;
  padding: 8px 15px;
}

.btn-outline-primary:hover{
  background-color:#ffffff;
  color:#000000;
  border: 1px solid #6082B6;

}

#save_Profile{
  margin-left:475px;
  margin-top:10px;
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

        /*Address can't be blank*/
				$('#input_Password').on('input', function() {
					var input=$(this);
					var is_password=input.val();
					if(is_password){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});


/* After Form Submitted Validation*/
$("#save_Profile button").click(function(event){
				var form_data=$("#profile").serializeArray();
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
<body>
<div class="container">
    <div class="main-body">
   <!-- Breadcrumb -->
   <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item" ><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item"><a href="index.html">User Information</a></li>
              <li class="breadcrumb-item active" aria-current="page" style="color:black;">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
<div class="container rounded bg-white mt-7 mb-5">
            <div class="d-flex flex-column align-items-center text-center p-3 py-3"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
        </div>

<form  id="profile" method="get" action="">
     <div class=" row">
    <label for="input_Name" class="col-sm-2 col-form-label" style="margin-left:140px;font-size:17px; margin-bottom:20px;">Full Name</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="input_Name" placeholder="full name" name="name" required>
      <span class="error">This field is required</span>
    </div>
     </div>
    
     <div class="row">
    <label for="input_Email" class="col-sm-2 col-form-label" style="margin-left:140px;font-siinputPasswordze:17px; margin-bottom:20px;">Email</label>
    <div class="col-sm-7">
      <input type="email" class="form-control" id="input_Email" placeholder="abc@email.com" name="email" required>
          <span class="error">A valid email is required</span>
    </div>
     </div>
    
      <div class="row">
    <label for="input_Tel" class="col-sm-2 col-form-label" style="margin-left:140px;font-size:17px; margin-bottom:20px;">Phone</label>
    <div class="col-sm-7">
      <input type="tel" class="form-control" id="input_Tel" placeholder="01x-xxxxxxx" name="tel" required>
      <span class="error">A valid phone number is required</span>
    </div>
     </div>
    
      <div class=" row">
    <label for="input_Address" class="col-sm-2 col-form-label" style="margin-left:140px;font-size:17px; margin-bottom:20px;">Address</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="input_Address" placeholder="address" name="address" required>
      <span class="error">This field is required</span>
    </div>
     </div>
    
    <div class=" row">
    <label for="input_Password" class="col-sm-2 col-form-label" style="margin-left:140px;font-size:17px; margin-bottom:20px;">Password</label>
    <div class="col-sm-7">
      <input type="password" class="form-control" id="input_Password" placeholder="Password" name="password" required>
      <span class="error">This field is required</span>
      
    </div>
  </div>
  
                <div id="save_Profile">
                  <button type="submit" class="btn btn-outline-primary" style="margin-bottom:20px;">Save Profile</button></div>
</form>
            </div>
  
</div>
</div>
    

</body>

</html>