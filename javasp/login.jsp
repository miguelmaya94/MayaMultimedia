<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@ include file="instanceHeader.jsp"%>
  <!DOCTYPE html>
<html>
   <title>Maya Multimedia</title>
      <head>
        <link rel="stylesheet" href="css/styleslogin.css">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
   <link rel="stylesheet"
         href="https://fonts.googleapis.com/css?family=Gilda+Display" rel="stylesheet">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Cormorant" rel="stylesheet">
    </head>
    <body>
  <div class="topnav" id="myTopnav">
 <a href="index.html">Welcome</a>
  <a href="about.html">About</a>
  <a href="ContactPage">Contact</a>
     <a href="https://www.mayandmiguel.com/">Maya</a>
  <a href="login.jsp">Login</a>
<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  <div id="divh1">Maya Multimedia</div>
</div>
     <div class ="login">
    <h3>Please Login</h3>      
    </div>   
<%  
String profile_msg=(String)request.getAttribute("profile_msg");  
if(profile_msg!=null){  
out.print(profile_msg);  
}  
String login_msg=(String)request.getAttribute("login_msg");  
if(login_msg!=null){  
out.print(login_msg);  
}  
 %>  
 <br/>  
<form action="loginprocess.jsp" method="post">  
Email:<input type="text" name="email"/><br/><br/>  
Password:<input type="password" name="pass"/><br/><br/>  
<input type="submit" value="login"/>  
</form>  
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
 </body>
<footer>
 <div id= "div5">
            Maya Multimedia LLC All Copyrights Reserved 2020-21 \ Graphic Design Scientist and Software Engineer \ Miguel.maya88@csu.fullerton.edu</div>
    </footer>
</html>
