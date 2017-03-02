<% if(verified) { 
        String reasonCode = (String) map.get("reasonCode"); 
        if ("0".Equals(reasonCode)) { %>
          <p>Print order receipt.</p>
        <%
        } else {
            Response.Redirect("/SelectAnotherPaymentMethod", true);
        } %>
  <% } else { %>
      <p>Please call customer service for updated status on your order.</p>
  <% } %>
