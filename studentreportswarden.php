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
      
<style>
table {
border-collapse: collapse;
width: 76%;
position: absolute;
top:200px;
right:8px;
color: black;
font-family: monospace;
font-size: 15px;
text-align: center;
}
th {
background-color: rgb(101, 0, 141);
color: white;
}

</style>
</head>
<body>
<table id="table">
<tr>
<th>reportid</th>
<th>category</th>
<th>problem</th>
<th>residence</th>
<th>block</th>
<th>room</th>
<th>image</th>
<th>studentnumber</th>
<th>progress</th>
<th>Action</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "residence system");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT reportid,category,problem,residence,block,room,image,studentnumber,progress FROM studentreports";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["reportid"]. "</td><td>" . $row["category"] . "</td><td>". $row["problem"]. "</td><td>" .$row["residence"]."</td><td>" .$row["block"]. "</td><td>".$row["room"]. "</td><td>".$row["image"]. "</td><td>".$row["studentnumber"]. "</td><td>".$row["progress"]."</td><td>" ;
echo "<div class = 'btn-group'>";
echo "<a class ='btn' href= 'delete.php?id=".$row['reportid']."'>delete</a>";
echo " <a class ='btn' href= 'approve.php?id=".$row['reportid']."'>approve</a>";
echo "</div>"."</td></td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<button > 

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
                     <a href="studentreportswarden.php">
                             <span >Student reports</span>
                         </a>
                     </li>
                     <li>
                         <a href="blockreportswarden.php">
                             <span >Block leader reports</span>
                         </a>
                     </li>
                     <li>
                         <a href="wardendashboard.php">
                         <span>Dashboard </span>
                         </a>
                     </li>
                     <li>
                         <a href="wardenlanding.php">
                             <span>back</span>
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
</body>

<script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>

