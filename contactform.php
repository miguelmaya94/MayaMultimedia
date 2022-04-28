<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'mayamultimediaDB', 'ledzeppelin','mayamultimediaDB');

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

 

?>







<!DOCTYPE html>
<html lang="en" dir="ltr">
<title>Maya Multimedia</title>
<head>
    <link rel="stylesheet" href="css/stylesabout.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Gilda+Display" rel="stylesheet">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Cormorant" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="topnav" id="myTopnav">
            <a href="index.html">Welcome</a>
            <a href="https://github.com/miguelmaya94/MayaMultimedia" target="_blank">Github</a>
            <a href="about.html">About</a>
            <a href="contact.html">Contact</a>
            <a href="https://www.mayandmiguel.com/">Maya</a>

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            <div id="divh1">Maya Multimedia</div>
        </div>
    </nav>
    <br>
    <p id="myPar"></p>
 
    </div>
   <?php
   // insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
?>

    <!--<script src="javascript/index.js"></script>-->
    <footer>
        <div id="div5">
            Maya Multimedia LLC All Copyrights Reserved 2020-22 \ Graphic Design Scientist and Software Engineer \ Miguel.maya88@csu.fullerton.edu
        </div>
    </footer>
</body>
</html>