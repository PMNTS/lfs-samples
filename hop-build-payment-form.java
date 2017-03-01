url = "https://onlinepaymentintegration.gemoney.com.au/eapps/ApplyRetail.faces";
out.print("<html>\n");
out.print("<form name=\"merchantForm\" action=\"" + url + "\" method=\"POST\">\n");
out.print("<input type=\"hidden\" name=\"merchantID\" value=\"" + output.get(MerchantRequestParameter.MERCHANT_ID) + "\">\n");
out.print("<input type=\"hidden\" name=\"source\" value=\"" + output.get(MerchantRequestParameter.SOURCE_FLAG) + "\">\n");
out.print("<input type=\"hidden\" name=\"merchant_eappsData\" value=\"" + output.get(MerchantRequestParameter.IN_DATA_BLOCK) + "\">\n");
out.print("<input type=\"submit\" name=\"Submit\" value=\"Submit\">\n");
out.print("</form>");
out.print("</html>");

