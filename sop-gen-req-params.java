try {
  // Generate the request parameters
  output = BuyRequestGenerator.generateRequest(inputParameters, publicKey, 'SOP');
} catch(Exception ex) {
  ex.printStackTrace();
}
