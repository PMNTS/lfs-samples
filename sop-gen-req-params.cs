IDictionary<String, String> output = null;
try {
  // Generate the request parameters
  output = BuyRequestGenerator.generateRequest(inputParameters, publicKey, BuyMerchantRequestResponseParameter.OPERATION_TYPE_SOP);
} catch(Exception ex) {
  Console.WriteLine("Exception is="+ex.StackTrace);
}
