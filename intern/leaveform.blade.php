<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Apply Leave Form</title>
<head>
    <!-- form -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.4/tailwind.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,700&amp;display=swap">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
    const FORM = $("form"); // set form or other element here
const TYPES = ["input[type=text], input[type=submit]"]; // set which elements get targeted by the focus
const FOCUS = $("#focus"); // focus element

// function for positioning the div
function position(e) {
  // get position
  var props = {
    top: e.offset().top,
    left: e.offset().left,
    width: e.outerWidth(),
    height: e.outerHeight(),
    radius: parseInt(e.css("border-radius"))
  };
  
  // set position
  FOCUS.css({
    top: props.top,
    left: props.left,
    width: props.width,
    height: props.height,
    "border-radius": props.radius
  });
  
  FOCUS.fadeIn(200);
}

FORM.find(TYPES.join()).each(function(i) {
  // when clicking an input defined in TYPES
  $(this).focus(function() {
    el = $(this);

    // adapt size/position when resizing browser
    $(window).resize(function() {
      position(el);
    });

    position(el);
  });
});

FORM.on("focusout", function(e) {
  setTimeout(function() {
    if (!e.delegateTarget.contains(document.activeElement)) {
      FOCUS.fadeOut(200);
    }
  }, 0);
});

    </script>
</head>
<style>
    * {
	 margin: 0;
	 padding: 0;
	 box-sizing: border-box;
	 font-family: 'Poppins', sans-serif;
}
 body {
	 height: 100vh;
	 display: flex;
	 justify-content: center;
	 align-items: center;
     margin: 10px;
}
 form {
	 border: 2px solid #6082B6;
	 padding: 40px 10px 0px 40px;
	 width: 70%;
	 max-width: 700px;
	 border-radius: 20px;
}
 #focus {
	 border: 3px solid #fef6fb;
	 box-shadow: 0 0 10px 0 #d09b52;
	 position: absolute;
	 transition: width 0.2s ease, height 0.2s ease, left 0.2s ease, top 0.2s ease, border-radius 0.2s ease;
	 pointer-events: none;
	 z-index: 5;
	 border-radius: 10px;
	 display: none;
}
 h1 {
	 margin-bottom: 30px;
	 font-size: 2em;
	 color: #000;
}
 input, select, textarea {
	 padding: 10px 15px;
	 border-radius: 10px;
	 transition: 0.3s ease;
	 color: #868283;
}
 input[type=date], select, textarea {
	 width: calc(100% - 30px);
	 margin-bottom: 30px;
	 border: 2px solid #868283;
}
 input[type=date]:placeholder-shown,  select:placeholder-shown, textarea:placeholder-shown{
	 border: 2px solid #eae4da;
}
 input[type=date]::placeholder,  select::placeholder, textarea::placeholder{
	 color: #a3a5aa;
}
 input[type=date][half], select[half], textarea[half] {
	 width: calc(50% - 30px);
	 float: left;
	 margin-right: 30px;
}
 input[type=submit] {
	 background: #6082B6;
	 color: #eae4da;
	 border: 2px solid #fff;
	 outline: 10px solid #fff;
	 width: calc(50% - 30px);
	 height: 40px;
	 margin: 0 30px -20px 0;
	 float: right;
	 font-weight: 800;
	 font-size: 0.7em;
	 letter-spacing: 1.8pt;
	 text-transform: uppercase;
	 cursor: pointer;
}
 input[type=submit]:hover {
	 outline-width: 0;
}
 input:focus {
	 outline: 0;
}

@media screen and (max-width: 600px) {
  .item, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
    </style>
    <body>
<form action="" method="POST" autocomplete="off">
  <div id="focus"></div>
  <h1 >Leave Application Form</h1>
  <div class="item">
  <p>Leave Type</p>
  <select autocomplete="no" required>
            <option value="">Please select</option>
            <option value="A">Sick Leave</option>
            <option value="B">Casual Leave</option>
            <option value="C">Maternity Leave</option>
            <option value="D">Bereavement Leave</option>
            <option value="E">Paternity Leave</option>
          </select>
</div>

<div class="item">
          <p>Date From:</p>
          <input type="date" name="name" autocomplete="no" required/>
          <i class="fas fa-calendar-alt"></i>
          </div>

          <div class="item">
          <p>Date To:</p>
          <input type="date" name="name" autocomplete="no" required/>
          <i class="fas fa-calendar-alt"></i>
          </div>

          <div class="item">
          <p>Duration Type</p>
          <select required autocomplete="no">
            <option value="">Please select</option>
            <option value="A">Whole Day</option>
            <option value="B">Half Day</option>
          </select>
          </div>

          <div class="item">
          <p>Reason</p>
          <textarea rows="4" required autocomplete="no"></textarea>
          </div>

          <div class="item">
  <input type="submit" value="Send it">
  </div>
</form>
</body>
</html>