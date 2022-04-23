<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ page contentType="text/html" pageEncoding="UTF-8"%>
 <%@ include file="instanceHeader.jsp"%>
  <!DOCTYPE html>
<html lang="en">
    <title>Maya Multimedia</title>
<head>
     <link rel="stylesheet" href="images/stylesform.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet"
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
   <link rel="stylesheet"
         href="https://fonts.googleapis.com/css?family=Gilda+Display" rel="stylesheet">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Cormorant" rel="stylesheet">
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MAYA</title>
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
<section>
    <div>
      <form action="ContactPage" method="POST">
        <label for="first-name">Enter Name:</label><br>
        <input type="text" id="first-name" name="first-name" required><br>
       <label for="last-name">Enter E-Mail:</label><br>
        <input type="text" id="last-name" name="last-name" required><br>
       <label for="age">Best Contact Number:</label><br>
        <input type="number" id="age" name="age" required><br>
        <label for="w">Enter a description of your Design question:</label><br>
<textarea id="w" name="w" rows="4" cols="50"></textarea>
  <br><br>
       <input type="submit" value="Register Here">
      </form>
    </div>
    </section>
    <div class="container">
    <div class="box1">
  <dl>
  <dt>We offer Graphic Designs</dt><br>
  <dd>- Name Brand Identity</dd>
   <dd>- Banners</dd>
    <dd>- Posters</dd>
     <dd>- Flyers</dd>
     <dd>- Stickers</dd>
     <dd>- Clothing</dd>
      <dd>- Photography</dd>
       <dd>- Magazines</dd>
        <dd>- Books</dd>
        <dd>- Illustrations</dd>
        <dd>- Panting's</dd>
         <dd>- Website's</dd>
          <dd>- Applications</dd>
           <dd>- Videos</dd>
            <dd>- Music</dd>
    </dl>
    </div>
 <div class="box2">
  <dl>
  <dt>We offer software Development</dt><br>
  <dd>- Java and JSP</dd>
   <dd>- C Sharp and Visual Studios </dd>
    <dd>- Ruby on Rail's</dd>
     <dd>- HTML5, CSS3, JavaScript</dd>
      <dd>- PHP, AJAX, </dd>
         <dd>- Angular JS, React</dd>
            <dd>- Node.js, jQuery </dd>
       <dd>- Oracle SQL, MySQL</dd>
        <dd>- Eclypse IDE, NetBeans IDE, Adobe ColdFusion IDE, Dreamweaver</dd>
</dl>
    </div>
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
       </body>
 <footer>
      <div id= "div5">
            Maya Multimedia LLC All Copyrights Reserved 2020-21 \ Graphic Design Scientist and Software Engineer \ Miguel.maya88@csu.fullerton.edu</div>
    </footer>
</html>
</html>