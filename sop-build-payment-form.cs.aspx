<form action="https://uat.gec-hosted.cybshosting.com/ge-sop/ProcessOrder.do" method="post">
    <%
        foreach (KeyValuePair<string, string> entry in output) {
    %>
         <input type="hidden" name="<%= entry.Key %>" value="<%= entry.Value %>" />
    <% } %>
    <input type="submit" value="Checkout with Interest Free" />
</form>
