<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Javascript CDN's -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
<link rel="stylesheet" href="css/progress.css">
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<script src="js/response.js" defer></script>
    <script src="js/app.js" defer></script>
    <script src="js/showchatbot.js" defer></script>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Student Login | ReportIT</title>
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
    <div class="form-container" style="top: 50%">
      
        <form action="trackercon.php" method="post">
        <h1 class="form-heading">PROGRESS TRACKER</h1>
        <?php if (isset($_GET['error'])) { ?>
            

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>
      
        
<div id="submitted" class="step">
      <div class="v-stepper">
        <div class="circle"></div>
        <div class="line"></div>
      </div>

      <div class="content">
       Submitted
      </div>
  </div>
  
  <!-- active -->
  <div id="wardenapprove" class="step">
    <div class="v-stepper">
      <div class="circle"></div>
      <div class="line"></div>
    </div>

    <div class="content">
 Approved by warden and forwared to maintenance
    </div>
  </div>
  
    <!-- empty -->
  <div id="maintenanceapprove" class="step">
      <div class="v-stepper">
        <div class="circle"></div>
        <div class="line"></div>
      </div>

      <div class="content">
       Approved by maintenance and contractors dispatched
      </div>
  </div>
  
  <!-- regular -->
  <div id="resolved" class="step">
      <div class="v-stepper">
        <div class="circle"></div>
        <div class="line"></div>
      </div>

      <div class="content">
Resolved
      </div>
  </div>
  
</div>

    </form>
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
                         <a  onclick="myFunction()">
                             <span >Chat with our bot</span>
                         </a>
                     </li>
                     <li>
                         <a href="">
                         <span>emergency</span>
                         </a>
                     </li>
                     <li>
                         <a href="student report.php">
                             <span>back</span>
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
<div class="fab-container" style="position:fixed" >
  <label for="chat">chatbot</label>
  <img height=70; width=80 src="images/cwt.jpg" onclick="myFunction()" name="chat" id="chat" ></img> 
    <i class="fa-solid fa-plus"></i>
</div>
<div class="fab-container1" style="position:fixed" >
  <label for="emergency">Emergency</label>
  <img height=60; width=60 src="images/emergency.jpg" onclick="myFunction()" name="emergency" id="emergency" ></img> 
    <i class="fa-solid fa-plus"></i>
</div>
</body>
</html>

<script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>