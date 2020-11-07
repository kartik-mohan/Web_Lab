<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"
     %>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>


<body>

<%

response.setContentType("text/html");
String name = request.getParameter("name");
String age = request.getParameter("age");
String address = request.getParameter("address");
String[] add = address.split(",");

out.println("Your name is: " + name + "<br>");
out.println("Your age is: " + age + "<br>");
out.println("Your address is" + address + "<br>");
out.println("Flat number: " + add[0] + "<br>");
out.println("Street: " + add[1] + "<br>");
out.println("Area: " + add[2] + "<br>");
out.println("City: " + add[3] + "<br>");
out.println("PIN: " + add[4] + "<br>");

%>
</body>

</html>
