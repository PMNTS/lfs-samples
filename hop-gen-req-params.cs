IDictionary<String, String> output = null;
try {
  // Generate the request parameters
  output = BuyRequestGenerator.generateRequest(inputParameters, sharedSecret, BuyMerchantRequestResponseParameter.OPERATION_TYPE_HOP);
} catch(Exception ex) {
  Console.WriteLine("Exception is="+ex.StackTrace);
}
