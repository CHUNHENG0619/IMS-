<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ranga&display=swap" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://use.fontawesome.com/0a0b74d9be.js"></script>
<title> Job List</title>

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
    background-color: #f5f4f5;
    margin-top:20px;
}

/* Tr Job Post */

.job-item {
    background-color: #fff;
}

.job-tab .nav-tabs {
	margin-bottom: 60px;
	border-bottom: 0;
}

.job-tab .nav-tabs>li {
	float: none;
	display: inline;
}

.job-tab .nav-tabs li {
	margin-right: 15px;
}

.job-tab .nav-tabs li:last-child {
	margin-right: 0;
}

.job-tab .nav-tabs {
	position: relative;
	z-index: 1;
	display: inline-block;
}

.job-tab .nav-tabs:after {
	position: absolute;
	content: "";
	top: 50%;
	left: 0;
	width: 100%;
	height: 1px;
	background-color: #fff;
	z-index: -1;
}



.job-tab .nav-tabs>li a {
	display: inline-block;
	background-color: #fff;
	border: none;
	border-radius: 30px;
	font-size: 14px;
	color: #000;
	padding: 5px 30px;
}

.job-tab .nav-tabs>li>a.active, 
.job-tab .nav-tabs>li a.active>:focus, 
.job-tab .nav-tabs>li>a.active:hover,
.job-tab .nav-tabs>li>a:hover {
	border: none;
	background-color: #008def;
	color: #fff;
}

.job-item {
	border-radius: 3px;
	position: relative;
	margin-bottom: 30px;
	z-index: 1;
}

.job-item .btn.btn-primary {
	text-transform: capitalize;
}

.job-item .job-info {
	font-size: 14px;
	color: #000;
	overflow: hidden;
	padding: 40px 25px 20px;
}

.job-info{
	background-color:white;
	margin-bottom:30px;
	padding-bottom:40px;
	padding-top:20px;
}


.job-info .tr-title {
	margin-bottom: 15px;
}

.job-info .tr-title span {
	font-size: 14px;
	display: block;
	margin-bottom:20px;
}

.job-info .tr-title a {
	color: #000;
	margin-left:100px;
}

.job-info .tr-title a:hover {
	color: #008def;
}

.job-info ul {
	margin-bottom:20px;
}

.job-info .readmore{
  background-color:#779AC2;
  color: white;
  border:2px solid #779AC2;
  padding: 6px 10px;
  text-align: center;
  text-decoration:none;
  float:right;
  font-size:10px;
}

.job-meta li,
.job-meta li a {
	text-align:center;
	color: #646464;	
}

.job-meta li a:hover {
	color: #008def;
}

.job-meta li {
	font-size: 12px;
	margin-bottom: 10px;
}

.job-meta li span i {
	color: #000;
}

.job-meta li i {
	margin-right: 15px;
}

.job-item .time {
	position: relative;
}

.job-item .time:after {
	position: absolute;
	content: "";
	bottom: 35px;
	left: -50px;
	width: 150%;
	height: 1px;
	background-color: #f5f4f5;
	z-index: -1;
}

.job-item:hover .time,
.job-item:hover .time:after {
	opacity: 0;
}

.job-item .time span {
	font-size: 12px;
	color: #bebebe;
	line-height: 25px;
}

.job-item .btn.btn-primary,
.role .btn.btn-primary,
.job-item .time a span {
	padding: 5px 10px;
    border-radius: 4px;
    line-height: 10px;
    font-size: 12px;
}

.job-item .time a span {
	color: #fff;
    background-color: #f1592a;
    border-color: #f1592a;	
}

.job-item .time a span.part-time {
	background-color: #00aeef;
	border-color: #00aeef;
}

.job-item .time a span.freelance {
	background-color: #92278f;
	border-color: #92278f;	
}

.job-item .item-overlay {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	border-radius: 5px;
	background-color: #008def;
	color: #fff;
	opacity: 0;
	-webkit-transition: all 800ms;
	-moz-transition: all 800ms;
	-ms-transition: all 800ms;
	-o-transition: all 800ms;
	transition: all 800ms;
}

.job-item:hover .item-overlay {
	opacity: 1;
}

.item-overlay .job-info {
	padding: 45px 25px 40px;
	overflow: hidden;
}

.item-overlay .btn.btn-primary {
	background-color: #007bd4;
	border-color: #007bd4;
	margin-bottom: 10px;
}

.item-overlay .job-info,
.item-overlay .job-info ul li,
.item-overlay .job-info ul li i,
.item-overlay .job-info .tr-title a {
	color: #fff;
}

.job-social {
	margin-top: 35px;
}

.job-social li {
	float: left;
}

.job-social li + li {
	margin-left: 15px;
}

.job-social li a i {
	margin-right: 0;
	font-size: 14px;
}

.job-social li a {
	width: 35px;
	height: 35px;
	text-align: center;
	display: block;
	background-color: #007bd4;
	line-height: 35px;
	border-radius: 100%;
	border: 1px solid #007bd4;
	position: relative;
	overflow: hidden;
	z-index: 1;
}

.job-social li:last-child a {
	background-color: #fff;
}

.job-social li:last-child a i {
	color: #008def;
}

.job-social li a:before {
	position: absolute;
	content: "";
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	z-index: -1;
	border-radius: 100%;
	background-color:#008def;
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    transform: scale(0);	
}

.job-social li a:hover:before {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    padding: 5px;
}

.job-social li a:hover {
	border-color: #fff;
}

.job-social li a:hover i {
	color: #fff;
}

.tr-list {
    margin: 0;
    padding: 0;
    list-style: none;
}
    </style>
    </head>
<body style="background-color:#B6DDED;">
<header>
@include('includes.header')
</header>
<section id="sectionJobList" class="section section-job-list gradient-light--lean-left">
      <div class="container">

        <div class="row row-grid">

          <div class="col-md-8 col-lg-7 col-xl-6 ">
            <h2 class="section__title mb-4" style="margin-top:100px; margin-left:80px; font-family: 'Ranga', cursive; font-weight: bold;">START YOUR DREAM HUNTER JOURNEY</h2>
          </div>

          <div class="col-md-10" style="left:7%; margin-top:-30px;">

            <form class="filter-form mt-5 mb-4">
              <div class="row">

                <div class="col-md-4 mb-3">
                  <div class="form-group">
                    <label for="jobPosition">Position :</label>
                    <select id="jobPosition" class="custom-select">
                      <option value="position1">Information Technology</option>
                      <option value="position2">Design</option>
                      <option value="position3">Development</option>
                      <option value="position4">Engineering</option>
                      <option value="position5">Finance</option>
                      <option value="position6">Marketing</option>
					  <option value="position7">Business</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-4 mb-3">
                  <div class="form-group">
                    <label for="jobType">Type :</label>
                    <select id="jobType" class="custom-select">
                      <option value="type1">Full-time</option>
                      <option value="type3">Part-time</option>
                      <option value="type4">Remote</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-4 mb-3">
                  <div class="form-group">
                    <label for="jobLocation">Location : </label>
                    <select id="jobLocation" class="custom-select">
                      <option value="location1">Selangor, Malaysia</option>
                      <option value="location3">Perak, Malaysia</option>
                      <option value="location2">Kuala Lumpur,Malaysia</option>
                      <option value="location4">Sarawak,Malaysia</option>
                      <option value="location5">Pahang, Malaysia</option>
                      <option value="location6">Johor, Malaysia</option>
                      <option value="location7">Kedah, Malaysia</option>
                      <option value="location8">Kelantan, Malaysia</option>
                      <option value="location9">Penang, Malaysia</option>
                    </select>
                  </div>
                </div>

              </div>
            </form>
          </div>   
    </section>

    
<div class="tr-job-posted section-padding">
    <div class="container">
		<div class="job-tab text-center">
			
			<div class="tab-content text-left">
				<div role="tabpanel" class="tab-pane fade active show" id="hot-jobs">
					<div class="row">
						<div class="col-md-6 col-lg-3">
								<div class="job-info">
									<span class="tr-title" >
										<a href="#" >Job Title</a>
										<span><a href="#">Department</a></span>
									</span>
									<ul class="tr-list job-meta">
										
										<li>Job Type</li>
										<li>RM2,000 - RM6,000</li>
									</ul>
									<a href="#" class="readmore">Read more</a>																		
								</div>
							</div>

						<div class="col-md-6 col-lg-3">					
								<div class="job-info">
									
									<span class="tr-title">
										<a href="#">Job Title</a>
										<span><a href="#">Department</a></span>
									</span>
									<ul class="tr-list job-meta">
										
										<li>Job Type</li>
										<li>RM2,000 - RM6,000</li>
									</ul>
									<a href="#" class="readmore">Read more</a>
								</div>
							</div>
						
						<div class="col-md-6 col-lg-3">				
								<div class="job-info">
									
									<span class="tr-title">
										<a href="#">Job Title</a>
										<span><a href="#">Department</a></span>
									</span>
									<ul class="tr-list job-meta">
										
										<li>Job Type</li>
										<li>RM2,000 - RM6,000</li>
									</ul>
									<a href="#" class="readmore">Read more</a>
								</div>
							</div>
						
						<div class="col-md-6 col-lg-3">
							
							
								<div class="job-info">
									
									<span class="tr-title">
										<a href="#">Job Title</a>
										<span><a href="#">Department</a></span>
									</span>
									<ul class="tr-list job-meta">
										
										<li>Job Type</li>
										<li>RM2,000 - RM6,000</li>
									</ul>
									<a href="#" class="readmore">Read more</a>
								</div>
							</div>
						
						<div class="col-md-6 col-lg-3">
								<div class="job-info">
									
									<span class="tr-title">
										<a href="#">Job Title</a>
										<span><a href="#">Department</a></span>
									</span>
									<ul class="tr-list job-meta">
										
										<li>Job Type</li>
										<li>RM2,000 - RM6,000</li>
									</ul>	
									<a href="#" class="readmore">Read more</a>
								</div>
							</div>
						
						<div class="col-md-6 col-lg-3">
							
												
								<div class="job-info">
									
									<span class="tr-title">
										<a href="#">Job Title</a>
										<span><a href="#">Department</a></span>
									</span>
									<ul class="tr-list job-meta">
										
										<li>Job Type</li>
										<li>RM2,000 - RM6,000</li>
									</ul>
									<a href="#" class="readmore">Read more</a>
								</div>
							</div>
						
						<div class="col-md-6 col-lg-3">
							
															
								<div class="job-info">
									
									<span class="tr-title">
										<a href="#">Job Title</a>
										<span><a href="#">Department</a></span>
									</span>
									<ul class="tr-list job-meta">
										<li>Job Type</li>
										<li>RM2,000 - RM6,000</li>
									</ul>
									<a href="#" class="readmore">Read more</a>
								</div>
							</div>
						
						<div class="col-md-6 col-lg-3">
							
										
								<div class="job-info">
								
									<span class="tr-title">
										<a href="#">Job Title</a>
										<span><a href="#">Department</a></span>
									</span>
									<ul class="tr-list job-meta">
										
										<li>Job Type</li>
										<li>RM2,000 - RM6,000</li>
									</ul>
									<a href="#" class="readmore">Read more</a>
								</div>
							</div>
						
					</div><!-- /.row -->
				</div><!-- /.tab-pane -->
				
					</div><!-- /.row -->	
				</div><!-- /.tab-pane -->
			</div>				
		</div><!-- /.job-tab -->			
	</div><!-- /.container -->
</div>
</body>
@include('includes.footer')
</html>