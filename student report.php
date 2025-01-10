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
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
    <title>student report | ReportIT</title>
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

      </script>
<script>
const nameField = document.querySelector("input");

nameField.addEventListener("input", () => {
  nameField.setCustomValidity("");
  nameField.checkValidity();
  console.log(nameField.checkValidity());
});

nameField.addEventListener("invalid", () => {
  nameField.setCustomValidity("Please fill in the missing  fields.");
});
</script>

      <div class="form-holder" style="top:100%";>
            <form action="studentreports.php" method="post">
            <h1 class="form-heading">report issues in your room</h1>
            <label for="category">Select a maintenance category:</label>
            <select name="category" id="category" style= "background-color:white; width:200px; border-radius: 5px">
            <option value=""></option>
            <option value="electrical">electrical</option>
  <option value="carpentry">carpentry</option>
  <option value="furniture" selected>furniture</option>
  <option value="windows">windows</option>
  <option value="keys">keys</option>
  
</select> <br><br>
<label for="problem">Specify maintenance problem</label>
<input type="text" id="problem" required name="problem"><br><br>
<label for="residence">residence name</label>
<input type="text" id="residence" required name="residence"><br><br>
<label for="block">block</label>
<input type="text" id="block" required name="block"><br><br>
<label for="room">room</label>
<input type="text" id="room" required name="room"><br><br>
<label for="description">describe the problem</label>
<input type="text" id="description" required name="description"><br><br>
<label for="studentnumber">enter your student number</label>
<input type="number" id="studentnumber" required name="studentnumber" minlength = "8" ><br><br>
                <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<div class="file-upload">
  <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

  <div class="image-upload-wrap">
    <input class="file-upload-input" type='file' name ="image" id= "image" onchange="readURL(this);" accept="image/*" />
    <div class="drag-text">
      <h3>Drag and drop a file or select add Image</h3>
    </div>
  </div>
  <div class="file-upload-content">
    <img class="file-upload-image" name= "image" id="image" src="#" alt="your image" />
    <div class="image-title-wrap">
      <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
    </div>
  </div>
</div>

    <input class = "button" type="submit" value="Submit" style= "background-color:rgb(101, 0, 141); color:white; border-radius:5px; width:100%">
              </div>
    
              <div class="chatcontainer" style="display: none" id="chatbot">
      <div class="chat-header">
        <div class="logo">
          <img src="images/cwt.jpg" alt="cwt" />
        </div>
        <div class="title">Let's Chat</div>
      </div>
      <div class="chat-body"></div>
      <div class="chat-input">
        <div class="input-sec">
          <input type="text" id="txtInput" placeholder="send hello /hey to begin" autofocus />
        </div>
        <div class="send">
          <img src="images/send.svg" alt="send" />
        </div>
      </div>
    </div>
 

</div>


<div class="sidebar"  >
           
           <nav id="sidebar" style="top: 27%">
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
                         <a href="progress tracker.php">
                             <span>track progress</span>
                         </a>
                     </li>
                     <li>
                         <a href="student login.php">
                             <span>logout</span>
                         </a>
                     </li>
      
                 </ul>
          
           </nav>
            
             
         </div>
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
         <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
<script>
const nameField = document.querySelector("input");

nameField.addEventListener("input", () => {
  nameField.setCustomValidity("");
  nameField.checkValidity();
  console.log(nameField.checkValidity());
});

nameField.addEventListener("invalid", () => {
  nameField.setCustomValidity("Please fill in the missing  fields.");
});
</script>