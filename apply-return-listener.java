import com.ge.apply.merchant.parameters.MerchantRequestParameter;
import com.ge.apply.response.generator.ResponseProcessor;

protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletExecption, IOException {
	String keyFilePath = "/path/to/file/keyfile.key";
	String DecryptedResponse = "";
	String ReceivedMerchantData = (String)request.getParameter("eapps_merchantData");
	// Store eapps_hopData for later in "Buy"
	String ReceivedHopData = (String)request.getParameter("eapps_hopData");

	try {
		DecryptedResponse = ResponseProcessor.generateResponse(ReceivedMerchantData, keyFile);
	} catch(Exception ex) {
		ex.printStackTrace();
	}
}
