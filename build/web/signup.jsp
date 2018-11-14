<%-- 
    Document   : signup
    Created on : 14 Nov, 2018, 10:06:27 AM
    Author     : Abhimanyu
--%>



<%@page import="java.sql.*"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
         <%
          String first_name=request.getParameter("first_name");
           String last_name=request.getParameter("last_name");
           String email=request.getParameter("email");
           String password=request.getParameter("password");
           String confirm_password=request.getParameter("confirm_password");           Connection conn=null;
           Statement st=null;
           ResultSet rs=null;
           try
             {
                String myUrl="jdbc:mysql://localhost/acadview";
		Class.forName("com.mysql.jdbc.Driver");      		
		conn=DriverManager.getConnection(myUrl,"root","");
                st=conn.createStatement();
                st.executeUpdate("insert into users values('"+first_name+"','"+last_name+"','"+email+"','"+password+"','"+confirm_password+"',)");              
                out.println("Data is saved.");
            }
            catch(Exception e)
            {                
                out.println(e);   
            }
        %>
    </body>
</html>
