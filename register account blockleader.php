<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Javascript CDN's -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src ="js/fileupload.js"></script>
  <!--chatbot-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/chatbot/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/chatbot/style.css">
<link rel="stylesheet" type="text/css" href="css//chatbot/responsive.css">

<!-- ChatBot -->
<link rel="stylesheet" type="text/css" href="css/chatbot/jquery.convform.css">
<script type="text/javascript" src="js/chatbot/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/chatbot/jquery.convform.js"></script>
<script type="text/javascript" src="js/chatbot/custom.js"></script>
  <!-- Bootstrap 5 CDN's -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Sweet alert CDN's -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- CSS links -->
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/style1.css" />
    <script src="js/response.js" defer></script>
    <script src="js/app.js" defer></script>
    <script src="js/showchatbot.js" defer></script>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">


    <title>home | ReportIT</title>
</head>
<body>
<div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div> <!-- .site-mobile-menu -->
      
      
      <div class="site-navbar-wrap">
        <div class="site-navbar-top">
          <div class="container py-3">
            <div class="row align-items-center">
              <div class="col-6">
              
              </div>
              <div class="col-6 ">
               
                <div class="mr-auto">
                 
                </div>
                
              </div>
            </div>
          </div>
        </div>
    
        <div class="site-navbar">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-2">
              <img style="width:210% ;height: auto;object-fit:contain" src ="images/logo.jpg " >
                
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
  

 



    <div class="form-container" style= " top:90%;"!important>
    
        <form action="register.php" method="post">
          <h2 class="form-heading">Register New Blockleader</h2>
          <?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>
          <div class="error-message" id="main-error"></div>
            <p > Personal details</p>
            <label for="fullnames">Full names</label><br/>
          <input type="text" name="name" id="name" placeholder="Enter your full names" required ><br/>
          <div class="error-message" id="fullname-error" ></div>
          <label for="lastname">Last name</label><br/>
          <input type="text" name="surname" id="surname" placeholder="Enter your last name" required><br/>
          <div class="error-message" id="lastname-error"></div>
          <label for="studentnumber">Student Number</label><br/>
         
          <input type="number" maxlength= "8" onkeypress="return onlyNumberKey(event)" name="studentnumber" id="studentnumber" placeholder="Enter your student number" required><br/>
          <div class="error-message" id="studentnumber-error"></div>
          <div class="error-message" id="password-error"></div>
          <div class="password-requirements">
            <p class="step">Student number requirement</p>
            <ul>
                <li class="req" id ="char-right"><i id="char" class="fa-sharp fa-solid fa-circle-check"></i> Be at least 8 characters</li>
            </ul>
          </div>
          <p> Contact details</p>
            <label for="cellnumber">Cell No</label><br/>
          <input type="text" name="cell" id="cell" placeholder="Enter your cell number"><br/>
          <div class="error-message" id="cellnumber-error"></div>
          <label for="email">Email address</label><br/>
          <input type="email" name="email" id="email" placeholder="Enter your email address "><br/>
          <div class="error-message" id="email-error"></div>
        

            <p> Security details</p>
          <label for="password">Password</label><br/>
          <input type="password" name="password" id="password" placeholder="Enter your password"><br/>
          <div class="error-message" id="password-error"></div>
          <div class="password-requirements">
            <p class="step">Password requirements</p>
            <ul>
                <li class="req" id ="capital-right"><i id="cap" class="fa-sharp fa-solid fa-circle-check"></i> At least a capital letter</li>
                <li class="req" id ="number-right"><i id="num" class="fa-sharp fa-solid fa-circle-check"></i> At least a number</li>
                <li class="req" id ="char-right"><i id="char" class="fa-sharp fa-solid fa-circle-check"></i> Be at least 8 characters</li>
                <li class="req" id ="speacial-right"><i id="spec" class="fa-sharp fa-solid fa-circle-check"></i> Be at least a special character</li>
            </ul>
          </div>
          <label for="confirmpassword">Confirm password</label><br/>
          <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm your password"><br/>
          <div class="error-message" id="confirm-error"></div>

          <button type="submit" class="log-in-button" name= "Register_user" id="register-btn"><div class="spinner-border text-light"></div> <span class="button-text" >Register</span></button>
          
          <div class="links-container">
          <span class="regster-account"><a href="login.html">Already have an account</a></span>
         
        </div>
        </form>
      </div>
      <div class="hero" ></div>
</body>
<script type="text/javascript">
   $(document).ready(function(){
    $(".second-step").hide();
    $(".third-step").hide();
    $(".spinner-border").hide();
    //First step inputs
    var fullnames =  $("#fullnames");
    var lastname = $("#lastname");
    var studentnumber = $("#studentnumber");
    //Second step inputs
    var cellnumber =  $("#cellnumber");
    var email = $("#email");
    //Third step inputs
    var confirmpassword = $("#confirmpassword");
    var password = $("#password");

    //password validation
    var uppercase = RegExp("[A-Z]");
    var smallLetters = RegExp("[a-z]");
    var numbers = RegExp("[0-9]");
    var special = RegExp("^[a-zA-Z0-9 ]*$");

    $("#password")
  .keyup(function () {
  var pass = $(this).val();
  if (pass.length >= 8) {
    $("#char-right").css("color", "green");
    $("#char").css("color", "green");
  } else {
    $("#char-right").css("color", "grey");
    $("#char").css("color", "grey");
  }
  if (pass.match(uppercase)) {
    $("#capital-right").css("color", "green");
    $("#cap").css("color", "green");
  } else {
    $("#capital-right").css("color", "grey");
    $("#cap").css("color", "grey");
  }
  if (pass.match(numbers)) {
    $("#number-right").css("color", "green");
    $("#num").css("color", "green");
  } else {
    $("#number-right").css("color", "grey");
    $("#num").css("color", "grey");
  }
  if (special.test(pass) == false) {
    $("#speacial-right").css("color", "green");
    $("#spec").css("color", "green");
  } else {
    $("#speacial-right").css("color", "grey");
    $("#spec").css("color", "grey");
  }
})
.focus(function () {
  $(".validation-info").show();
})
.blur(function () {
  $(".validation-info").hide();
});

    //Step one functions
    $("#step-one-next").click(function(e){
      $("#main-error").hide();
      $("#fullname-error").hide();
      $("#lastname-error").hide();
      $("#studentnumber-error").hide();
      $("#cellnumber-error").hide();
      $("#email-error").hide();
      $("#password-error").hide();
      $("#confirm-error").hide();
        e.preventDefault();
        if(fullnames.val() === ""){
          $("#fullname-error").show();
          $("#fullname-error").html("Please fill in your full names");
          $("#fullnames").focus();
        }
        else if(lastname.val() === ""){
          $("#lastname-error").show();
          $("#lastname-error").html("Please fill in your last names");
          $("#lastname").focus();
        }
        else if(studentnumber.val() === ""){
          $("#studentnumber-error").show();
          $("#studentnumber-error").html("Please fill in your student number");
          $("#studentnumber").focus();
        }
        else if{

        }
        else{
            $(".second-step").show();
            $(".first-step").hide();
            $(".third-step").hide();
        }
    });

    //step two function
    $("#step-two-next").click(function(e){
        e.preventDefault();
        $("#main-error").hide();
      $("#fullname-error").hide();
      $("#lastname-error").hide();
      $("#studentnumber-error").hide();
      $("#cellnumber-error").hide();
      $("#email-error").hide();
      $("#password-error").hide();
      $("#confirm-error").hide();
        if(cellnumber.val() === ""){
          $("#cellnumber-error").show();
          $("#cellnumber-error").html("Mobile No is required");
          $("#cellnumber").focus();
        }
        else if(email.val() === ""){
          $("#email-error").show();
          $("#email-error").html("Email address is required");
          $("#email").focus();
        }
        else if(!emailValidation(email.val())){
          $("#email-error").show();
          $("#email-error").html("Invalid email address");
          $("#email").focus();
        }
        else{
            $(".second-step").hide();
            $(".first-step").hide();
            $(".third-step").show();
        }
    });

    //Step three function
    $("#step-three-next").click(function(e){
        e.preventDefault();
        $("#main-error").hide();
      $("#fullname-error").hide();
      $("#lastname-error").hide();
      $("#studentnumber-error").hide();
      $("#cellnumber-error").hide();
      $("#email-error").hide();
      $("#password-error").hide();
      $("#confirm-error").hide();
        if(password.val() === ""){
          $("#password-error").show();
          $("#password-error").html("Password required");
          $("#password").focus();
        }
        else if (!$("#password").val().match(uppercase)) {
          $("#password-error").show();
          $("#password-error").html("Password must contain atleast a capital letter");
          $("#password").focus();
        } else if (!$("#password").val().match(numbers)) {
          $("#password-error").show();
          $("#password-error").html("Password must contain atleast a number");
          $("#password").focus();
        } else if (!special.test($("#password").val()) == false) {
          $("#password-error").show();
          $("#password-error").html("Password must contain atleast a special character");
          $("#password").focus();
       } else if ($("#password").val().length <= 8) {
        $("#password-error").show();
        $("#password-error").html("Password length must be 8 digits long");
        $("#password").focus();
       }
        else if(confirmpassword.val() === ""){
          $("#confirm-error").show();
          $("#confirm-error").html("This field is required");
          $("#confirmpassword").focus();
        }
        else if(password.val() != confirmpassword.val()){
          $("#confirm-error").show();
          $("#confirm-error").html("Passwords don't match");
          $("#confirmpassword").focus();
        }
        else{
            $(".spinner-border").show();
            $("#step-three-back").hide();
            $("#button-text").hide();
            $("#main-error").show();
            $('#step-three-next').prop('disabled', true);
          $("#main-error").html("Server response");
          $("#main-error").css("background-color", "green");
          $("#main-error").css("border", "1px solid green");
        }

    });

    $("#step-two-back").click(function(e){
        e.preventDefault();
        $(".second-step").hide();
        $(".first-step").show();
        $(".third-step").hide();
    });
    $("#step-three-back").click(function(e){
        e.preventDefault();
        $(".second-step").show();
        $(".first-step").hide();
        $(".third-step").hide();
    });
    
    });
    //Email validations function
    function emailValidation($email) {
  var key = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return key.test($email);
}
</script>

<script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
   <!-- ChatBot -->
<div class="chat_icon">
	<i class="fa fa-comments" aria-hidden="true"></i>
</div>

<div class="chat_box">
	<div class="my-conv-form-wrapper">
		<form action="" method="GET" class="hidden">

      <select data-conv-question="Hello! How can I help you today" name="category">
        <option value="WebDevelopment">Report an Emergency!</option>
        <option value="DigitalMarketing">Help with Reporting!</option>
      </select>


	  <div data-conv-fork="category">
        <div data-conv-case="DigitalMarketing">
			<input type="text" name="name" data-conv-question="Please, Enter your name">

			<input type="text" data-conv-question="Hi {name}, <br> It's a pleasure to meet you." data-no-answer="true">
	  
			<select data-conv-question="please select the user you would like help with" name="category">
			  <option value="Student">Student</option>
			  <option value="Blockleader">Block leader</option>
			</select>
		<div data-conv-fork="category">
			<div data-conv-case="Student">
				<input type="text" data-conv-question="Using the ReportIt system a student a log a query with regards to a maintenance issue in their room. <br> We have a page specifically designed for this would you like me to take you to that page?"data-no-answer="true">
	 
				<select data-conv-question=" click 'Exit' to close the chatbot" name="category" id="test">
	
					<option  button id="myBtn" type="button">Click Me!</button></option>
					
    <script>
      document.getElementById("myBtn").addEventListener("click", myFunction);
      function myFunction() {
        window.location.href="http://programminghead.com";
      }
    </script>
				
					<option value="N">Exit</option>
				  </select>
				  </div>
				  <div>
				  <div data-conv-fork="category">
					<div data-conv-case="Blockleader">
						<input type="text" data-conv-question="Using the ReportIt system a block leader can log a query with regards to a maintenance issue in the common areas of the block. <br> We have a page specifically designed for this would you like me to take you to that page?"data-no-answer="true">
			  <select data-conv-question=" select ' exit' to close the chatbot" name="category">
				<option value="Y" >Yes</option>
							<option value="N" >Exit</option>
						
	
						  </select>
				  
						</div>
      <div data-conv-fork="category">
        <div data-conv-case="WebDevelopment">
			<input type="text" name="name" data-conv-question="Please, Enter your name">

			<input type="text" data-conv-question="Hi {name}, <br> It's a pleasure to meet you." data-no-answer="true">
	  
			<input data-conv-question="In case of an emergency contact the NWU emergency line on (018) 299 2211 <br> You can also click the emergency button to send an SOS" data-no-answer="true">
	  
			<select data-conv-question="click 'exit' to close the chatbot" name="category">
			  <option value="Yes">Exit</option>

			</select>
		</div>
		
				  </div>
				</div>
			</div>  
		</div> 
	</div> 
</div> 



     

  	</form>
	</div>
</div>
<!-- ChatBot end -->

<div class="fab-container1" style="position:fixed" >
  <label for="emergency">Emergency</label>
  <audio id="alarm" src="audio/alarm.mp3"></audio>
  <img height=60; width=60 src="images/emergency.jpg" name="play" id="play" ></img> 
    <i class="fa-solid fa-plus"></i>
</div>

<div class="sidebar">
           
           <nav id="sidebar" style="top: 30%; left:0; position: fixed">
                      <div class="custom-menu" style="top: 400%">
                   
                 </div>
                 <div class="img bg-wrap text-center py-4" style="background-image: url(images/logo);">
                   <div class="user-logo">
                     <div class="img" style="background-image: url(images/logo1.jpg);"></div>
              
                   </div>
                 </div>
                 <ul class="list-unstyled components mb-5">
                         <li>
                             <a href="home.php">
                                 Home
                             </a>
                         </li>
                         <li>
                             <a href="student login.php">
                                 <span >Student</span>
                             </a>
                         </li>
                         <li>
                             <a href="warden login.php">
                                 <span >Warden</span>
                             </a>
                         </li>
                         <li>
                             <a href="block leader login.php">
                             <span>block leader</span>
                             </a>
                         </li>
                         <li>
                             <a href="maintenance login.php">
                                 <span>maintenance</span>
                             </a>
                         </li>
          
                     </ul>
              
               </nav>
                
                 
             </div>
            
</html>
