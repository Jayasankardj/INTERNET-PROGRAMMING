<%@ page import="java.sql.*, java.util.*" %>
<%
    String firstName = request.getParameter("firstName");
    String lastName = request.getParameter("lastName");
    String username = request.getParameter("username");
    String password = request.getParameter("password");
    String address = request.getParameter("address");
    String contactNumber = request.getParameter("contactNumber");

    Connection conn = null;
    PreparedStatement pstmt = null;
    
    try {
        Class.forName("com.mysql.cj.jdbc.Driver");
        conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/your_database", "your_username", "your_password");

        String sql = "INSERT INTO users (first_name, last_name, username, password, address, contact_number) VALUES (?, ?, ?, ?, ?, ?)";
        pstmt = conn.prepareStatement(sql);
        
        pstmt.setString(1, firstName);
        pstmt.setString(2, lastName);
        pstmt.setString(3, username);
        pstmt.setString(4, password); 
        pstmt.setString(5, address);
        pstmt.setString(6, contactNumber);

        int rowsInserted = pstmt.executeUpdate();
        
        if (rowsInserted > 0) {
            out.println("<h2>Registration successful!</h2>");
        } else {
            out.println("<h2>Registration failed. Please try again.</h2>");
        }
    } catch (Exception e) {
        out.println("<h2>Error: " + e.getMessage() + "</h2>");
    } finally {
        try {
            if (pstmt != null) pstmt.close();
            if (conn != null) conn.close();
        } catch (SQLException e) {
            out.println("<h2>Error closing resources: " + e.getMessage() + "</h2>");
        }
    }
%>
