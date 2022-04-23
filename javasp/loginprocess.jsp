<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
       <title>Maya Multimedia</title>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      </head>
    <body>
        <%@page import="bean.LoginDao"%>  
<jsp:useBean id="obj" class="bean.LoginBean"/>  
  <jsp:setProperty property="*" name="obj"/>  
  <%  
boolean status=LoginDao.validate(obj);  
if(status){  
out.println("You r successfully logged in");  
session.setAttribute("session","TRUE");  

        // New location to be redirected
         String site = new String("ViewTables");
         response.setStatus(response.SC_MOVED_TEMPORARILY);
         response.setHeader("Location", site); 
     
}  
else  
{  
out.print("Sorry, email or password error");  
%>  
<jsp:include page="index.html"></jsp:include>  
<%  
}  
%>  
</body>
</html>

    

