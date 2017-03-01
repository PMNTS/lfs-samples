$url = "https://onlinepaymentintegration.gemoney.com.au/eapps/ApplyRetail.faces";
echo "<form name=\"merchantForm\" action=\"" . $url . "\" method=\"POST\">\n";
echo "<input type=\"hidden\" name=\"merchantID\" value=\"" . $output [MerchantRequestParameter::$MERCHANT_ID] . "\">\n";
echo "<input type=\"hidden\" name=\"source\" value=\"" . $output [MerchantRequestParameter::$SOURCE_FLAG] . "\">\n";
echo "<input type=\"hidden\" name=\"merchant_eappsData\" value=\"" . $output [MerchantRequestParameter::$IN_DATA_BLOCK] . "\">\n";
echo "<input type=\"submit\" name=\"Submit\" value=\"Submit\">\n";
echo "</form>";
