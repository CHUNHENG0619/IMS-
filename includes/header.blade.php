<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Home</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
header {
	font-family: 'Varela Round', sans-serif;
}
.form-control {
	box-shadow: none;		
	font-weight: normal;
	font-size: 13px;
}
.navbar {
	background: #fff;
	padding-left: 16px;
	padding-right: 16px;
	border-bottom: 1px solid #dfe3e8;
	border-radius: 0;
	width:100%;
	position: fixed;
	z-index:1;
	top:0;
	
}
.nav-link img {
	border-radius: 50%;
	width: 36px;
	height: 36px;
	margin: -8px 0;
	float: left;
	margin-right: 10px;
}
.navbar .navbar-brand {
	padding-left: 0;
	font-size: 20px;
	padding-right: 50px;
}
.navbar .navbar-brand b {
	color: #33cabb;		
}
.navbar .form-inline {
	display: inline-block;
}
.navbar a {
	color: #888;
	font-size: 15px;
    margin-left:40px;
}

.navbar .login-btn {
	min-width: 110px;
	max-height: 36px;
    margin-left:140px;
}

.navbar .dropdown-item {
	margin-left:0px;
}
.navbar .dropdown-menu {
	color: #999;
	font-weight: normal;
	border-radius: 1px;
	border-color: #e5e5e5;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
	margin-left:40px;
}
.navbar a, .navbar a:active {
	color: #888;
	padding: 8px 20px;
	background: transparent;
	line-height: normal;
}

.navbar .btn-primary, .navbar .btn-primary:active {
	color: #fff;
	background: #33cabb !important;
	border: none;
}	
.navbar .btn-primary:hover, .navbar .btn-primary:focus {		
	color: #fff;
	background: #31bfb1 !important;
}

}
</style>
<script>
// Prevent dropdown menu from closing when click inside the form
$(document).on("click", ".action-buttons .dropdown-menu", function(e){
	e.stopPropagation();
});
</script>
</head> 
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a href="#" class="navbar-brand"><b>Logo</b></a>  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<div class="navbar-nav">
			<a href="http://127.0.0.1:8000/homepage" class="nav-item nav-link">Home</a>
			<a href="http://127.0.0.1:8000/aboutus" class="nav-item nav-link">About</a>	
            <a href="http://127.0.0.1:8000/joblist" class="nav-item nav-link">Job List</a>
			
			<a href="http://127.0.0.1:8000/applyjob" class="nav-item nav-link ">Apply Job</a>
			<a href="http://127.0.0.1:8000/faq" class="nav-item nav-link">FAQ</a>
			<a href="http://127.0.0.1:8000/contactus" class="nav-item nav-link">Contact</a>
          <div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle">Language</a>
				<div class="dropdown-menu">					
					<a href="#" class="dropdown-item">English</a>
					<a href="#" class="dropdown-item">简体中文</a>
                </div>
            </div>
		</div>
			
			<div class="nav-item ">
				<a href="http://127.0.0.1:8000/login"  class="btn btn-primary login-btn">Login</a>
				</div>
	</div>
</nav>
</header>

