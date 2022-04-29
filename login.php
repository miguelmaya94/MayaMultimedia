<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
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
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>

        <?php
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
    <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
    </script>
     <footer>
               <div id="div5">
                   Maya Multimedia LLC All Copyrights Reserved 2020-22 \ Graphic Design Scientist and Software Engineer \ Miguel.maya88@csu.fullerton.edu
               </div>
           </footer>
       </body>
</html>
