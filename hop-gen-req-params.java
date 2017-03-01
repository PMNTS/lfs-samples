Map<String, String> output = null;
String keyFilePath = "/path/to/file/keyfile.key";

try {
	// Generate the request parameters
	output = RequestGenerator.generateRequest(inputParameters, keyFilePath);
} catch(Exception ex) {
	ex.printStackTrace();
}
