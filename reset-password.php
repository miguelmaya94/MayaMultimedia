<?php
// Initialize the session
session_start();
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
// Include config file
require_once "database.php";
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
  // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
  // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    // Close connection
    mysqli_close($link);
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
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link ml-2" href="welcome.php">Cancel</a>
            </div>
        </form>
    </div>
    <script src="javascript/index.js"></script>
       <footer>
               <div id="div5">
                   Maya Multimedia LLC All Copyrights Reserved 2020-22 \ Graphic Design Scientist and Software Engineer \ Miguel.maya88@csu.fullerton.edu
               </div>
           </footer>
       </body>
</html>
