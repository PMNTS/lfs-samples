url = "https://onlinepaymentintegration.gemoney.com.au/eapps/ApplyRetail.faces";
Response.Write("<form name=\"merchantForm\" action=\"" + url + "\" method=\"POST\">\n");
Response.Write("<input type=\"hidden\" name=\"merchantID\" value=\"" + output[MerchantRequestParameter.MERCHANT_ID]+"\">\n");
Response.Write("<input type=\"hidden\" name=\"source\" value=\"" + output[MerchantRequestParameter.SOURCE_FLAG]+"\">\n");
Response.Write("<input type=\"hidden\" name=\"merchant_eappsData\" value=\"" + output[MerchantRequestParameter.IN_DATA_BLOCK] + "\">\n");
Response.Write("<input type=\"submit\" name=\"Submit\" value=\"Submit\">\n");
Response.Write("</form>");
