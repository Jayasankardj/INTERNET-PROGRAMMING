import java.io.IOException;
import java.util.Enumeration;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/RequestInfoServlet")
public class RequestInfoServlet extends HttpServlet {
    private static final long serialVersionUID = 1L;

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html");

        var out = response.getWriter();

        out.println("<!DOCTYPE html>");
        out.println("<html>");
        out.println("<head>");
        out.println("<title>Request Information</title>");
        out.println("</head>");
        out.println("<body>");
        out.println("<h1>Request Information</h1>");

        out.println("<h2>Parameters</h2>");
        out.println("<table border='1'>");
        out.println("<tr><th>Parameter Name</th><th>Value</th></tr>");

        Enumeration<String> parameterNames = request.getParameterNames();
        while (parameterNames.hasMoreElements()) {
            String paramName = parameterNames.nextElement();
            String[] paramValues = request.getParameterValues(paramName);
            out.println("<tr>");
            out.println("<td>" + paramName + "</td>");
            out.println("<td>" + String.join(", ", paramValues) + "</td>");
            out.println("</tr>");
        }
        out.println("</table>");

        out.println("<h2>Request Details</h2>");
        out.println("<ul>");
        out.println("<li><strong>Method:</strong> " + request.getMethod() + "</li>");
        out.println("<li><strong>Request URI:</strong> " + request.getRequestURI() + "</li>");
        out.println("<li><strong>Protocol:</strong> " + request.getProtocol() + "</li>");
        out.println("<li><strong>Remote Address:</strong> " + request.getRemoteAddr() + "</li>");
        out.println("</ul>");

        out.println("</body>");
        out.println("</html>");
    }
}
