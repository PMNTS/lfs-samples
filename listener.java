public class ResponseHandler extends HttpServlet {
  @Override
  protected void doPost(HttpServletRequest request, HttpServletResponse response)
      throws ServletException, IOException {
      
      Map map = new HashMap();
      Enumeration enumeration = request.getParameterNames();
      while (enumeration.hasMoreElements()) {
          String parameterName = (String) enumeration.nextElement();
          String value = request.getParameter(parameterName);
          map.put(parameterName, value);
      }
      
      // Store map of post paras in session
      request.getSession().setAttribute("responseMap", map);
      request.getRequestDispatcher("/Receipt.jsp").forward(request, response);
  }
}
