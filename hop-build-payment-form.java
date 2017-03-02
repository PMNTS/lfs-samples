<form action="https://paynow-sandbox.ipsi.com.au/bespoke/latitude/TEST" method="post">
    <%
    Object key = null;
    Iterator it = output.keySet().iterator();
    while (it.hasNext()) {
        key = it.next();
    %>
         <input type="hidden" name="<%= key %>" value="<%= output.get(key) %>" />
    <% } %>
    <input type="submit" value="Checkout with Interest Free" />
</form>
