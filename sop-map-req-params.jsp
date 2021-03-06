// Import required classes from the plugin
<%@ page import="java.util.Map" %>
<%@ page import="java.util.HashMap" %>
<%@ page import="com.ge.apply.merchant.parameters.MerchantConstants" %>
<%@ page import="com.ge.apply.merchant.parameters.MerchantRequestParameter" %>
<%@ page import="com.ge.apply.request.generator.RequestGenerator" %>
<%@ page import="com.ge.buy.cs.parameters.BuyMerchantRequestResponseParameter" %>
<%@ page import="com.ge.buy.cs.parameters.HOPMerchantRequestResponseParameter" %>
<%@ page import="com.ge.buy.request.generator.BuyRequestGenerator" %>
<%@ page import="com.ge.buy.request.generator.GeneratorUtility" %>

<%
/*
Here we are storing just 4 of the required parameters in the map.
In this example we are assuming that
  - 2 of them coming from the session object, and
  - 2 from the request object due to the POST from the previous page
*/
Object merchantReferenceCode = session.getAttribute("mrc");
Object promoCode = session.getAttribute("promo");
Object currency = request.getParameter("currency");
Object amount = request.getParameter("amount");

// Create a variable of type HashMap to store the params
Map inputParameters= new HashMap();
Map<String, String> output = null;

// "put" each of the parameters into the HashMap object
inputParameters.put(SOPMerchantRequestResponseParameter.MERCHANT_ID, merchantId);
inputParameters.put(SOPMerchantRequestResponseParameter.REFERENCE_CODE, merchantReferenceCode);
inputParameters.put(SOPMerchantRequestResponseParameter.PROMO_CODE,promoCode);
inputParameters.put(SOPMerchantRequestResponseParameter.ITEM_COUNT, itemCount);%>
