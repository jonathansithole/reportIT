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
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/style.css">
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
    
                    <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">

                      
                      <li class="has-children">
                        <button class="menu nav-link" onmouseover="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
                          <svg width="100" height="100">
                            <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                            <path class="line line2" d="M 20,50 H 80" />
                            <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                          </svg>
                        </button>
                        <ul class="dropdown">
                          <li><a href="login.php" class="nav-link">LOG IN</a></li>
                        
                        </ul>
                      </li>
                    
                  
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="form-container" style= "top:50%">
      
        <form action="sos.php" method="post">
        <h1 class="form-heading">Emergency</h1>
        <?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>
      
        <p>emergency</p>
        <label for="emergency">Specify emergency type and location eg. 'locked inside room, khayelitsha block 18 room 4' </label><br/>
        <input type="text" name="emergency" id="emergency"><br/>
        <input type="submit" name= "send" class = "btn btn-primary" value = "send">
       </form>
    </div>
    <div class="sidebar"  >
           
           <nav id="sidebar" style="top: 27%">
             <div class="custom-menu" style="top: 400%">
               
             </div>
             <div class="img bg-wrap text-center py-4" style="background-image: url(images/logo);">
               <div class="user-logo">
                 <div class="img" style="background-image: url(images/logo1.jpg);"></div>
             <h2 style="color:#ffffff"> ReportIT </h2>
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
         <div class="fab-container position:fixed" >
  <label for="chat">chatbot</label>
  <img height=90; width=100 src="images/cwt.jpg" onclick="myFunction()" name="chat" id="chat" ></img> 
    <i class="fa-solid fa-plus"></i>
</div>
<div class="fab-container1" style="position:fixed" >
  <label for="emergency">Emergency</label>
  <img height=100; width=100 src="images/emergency.jpg" onclick="myFunction()" name="emergency" id="emergency" ></img> 
    <i class="fa-solid fa-plus"></i>
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
</body>

<script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
</html>