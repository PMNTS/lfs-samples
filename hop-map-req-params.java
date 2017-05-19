// Import required classes from plugin
import com.ge.apply.merchant.parameters.MerchantRequestParameter;
import com.ge.apply.request.generator.RequestGenerator;
import com.ge.apply.response.generator.ResponseProcessor;

Map<String, String> inputParameters = new HashMap<String, String>();

// Put all parameters into an ordered map for generating request parameters	
inputParameters.put(MerchantRequestParameter.MERCHANT_ID, merchantId);
inputParameters.put(MerchantRequestParameter.SOURCE_FLAG, source);
inputParameters.put(MerchantRequestParameter.CARD_TYPE, cardType);
inputParameters.put(MerchantRequestParameter.IP_ADDRESS, ipAddress);
inputParameters.put(MerchantRequestParameter.RETURN_URL, returnUrl);
inputParameters.put(MerchantRequestParameter.STREAM, stream);
inputParameters.put(MerchantRequestParameter.CHANNEL, channel);
inputParameters.put(MerchantRequestParameter.GEMID1, gemid1);
