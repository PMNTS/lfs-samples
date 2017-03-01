<%
if(merchantOutput != null){
	StringTokenizer st = new StringTokenizer(merchantOutput,MerchantConstants.FIELD_SEPERATOR);
	while(st.hasMoreTokens()){
		String token = st.nextToken();
%>
		<p>
			<%=token.substring(0, token.indexOf("=")) %>
			= 
			<%=token.substring(token.indexOf("=")+1, token.length()) %>
		</p>
<%
	}
}
%>
