<form action="https://paynow-sandbox.ipsi.com.au/bespoke/latitude/TEST" method="post">
    <%
        foreach (KeyValuePair<string, string> entry in output) {
    %>
         <input type="hidden" name="<%= entry.Key %>" value="<%= entry.Value %>" />
    <% } %>
    <input type="submit" value="Checkout with Interest Free" />
</form>
