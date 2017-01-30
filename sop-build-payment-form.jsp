<%
Object key = null;
Iterator it = output.keySet().iterator();
while (it.hasNext()) {
    key = it.next();
%>
     <input type="hidden" name="<%= key %>" value="<%= output.get(key) %>" />
<% } %>
