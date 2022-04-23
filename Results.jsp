 <%-- Miguel Maya Assignment 9.1 6-2-20 Bellevue University 
References: Murach Ch. 3,4,5,6,10 JavatPoint.com
References: All assignments through the semester
 References: Images taken from PixaBay.com--%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
 <%
          HttpServletResponse httpResponse = (HttpServletResponse) response;
    response.setHeader("Cache-Control", "no-cache"); //HTTP 1.1
    response.setHeader("Pragma", "no-cache"); //HTTP 1.0
    httpResponse.setDateHeader("Expires", System.currentTimeMillis() + 604800000L); // 1 week in future. //prevents caching at the proxy server
%>
  <!DOCTYPE html>
<html lang="en">
    <title>Maya Multimedia</title>
<head>
<a href="Results.jsp"></a>
 <link rel="stylesheet" href="css/stylesresults.css">
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet"
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
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
     <h2>Thank you for visiting Maya Engineering <br>
         your contact information has been submitted!</h2>
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