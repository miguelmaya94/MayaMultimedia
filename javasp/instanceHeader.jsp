 <%
          HttpServletResponse httpResponse = (HttpServletResponse) response;
    response.setHeader("Cache-Control", "no-cache"); //HTTP 1.1
    response.setHeader("Pragma", "no-cache"); //HTTP 1.0
    httpResponse.setDateHeader("Expires", System.currentTimeMillis() + 604800000L); // 1 week in future. //prevents caching at the proxy server
%>