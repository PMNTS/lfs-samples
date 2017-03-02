<% if(verified) { 
        String reasonCode = (String) map.get("reasonCode"); 
        if ("0".equals(reasonCode)) { %>
          <p>Print order receipt.</p>
        <%
        } else {
            response.sendRedirect("/SelectAnotherPaymentMethod");
        } %>
  <% } else { %>
      <p>Please call customer service for updated status on your order.</p>
  <% } %>
