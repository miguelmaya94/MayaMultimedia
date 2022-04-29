<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
       
       <head>
           <title>Maya Multimedia</title>
           <link rel="stylesheet" href="css/styles.css">
           <meta name="viewport" content="width=device-width, initial-scale=1">
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           <link rel="stylesheet"
                 href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
           <link rel="stylesheet"
                 href="https://fonts.googleapis.com/css?family=Gilda+Display" rel="stylesheet">
           <link rel="stylesheet"
                 href="https://fonts.googleapis.com/css?family=Cormorant" rel="stylesheet">
           <!-- Global site tag (gtag.js) - Google Analytics -->
           <script async src="https://www.googletagmanager.com/gtag/js?id=G-VD3HW357BT"></script>
           <script>
               window.dataLayer = window.dataLayer || [];
               function gtag() { dataLayer.push(arguments); }
               gtag('js', new Date());

               gtag('config', 'G-VD3HW357BT');
           </script>
       </head>
       <body>
           <nav>
               <div class="topnav" id="myTopnav">
                   <a href="index.html">Welcome</a>
                   <a href="https://github.com/miguelmaya94/MayaMultimedia" target="_blank">Github</a>
                   <a href="about.html">About</a>
                   <a href="contact.html">Contact</a>
                   <a href="https://www.mayandmiguel.com/">Maya</a>
                   <a href="login.php">Login</a>

                   <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                       <i class="fa fa-bars"></i>
                   </a>
                   <div id="divh1">Maya Multimedia</div>
               </div>
               </nav>

<div class="wrapper">
  <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b><br> Welcome to your site.</h1>
     <p>
         <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
         <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
     </p>
   </div>
  <script src="javascript/index.js"></script>

 <footer>
               <div id="div5">
                   Maya Multimedia LLC All Copyrights Reserved 2020-22 \ Graphic Design Scientist and Software Engineer \ Miguel.maya88@csu.fullerton.edu
               </div>
           </footer>
       </body>
</html>
