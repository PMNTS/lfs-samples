using System;
using System.Collections.Generic;
using System.IO;

/*
Here we are storing just 4 of the required parameters in the map.
In this example we are assuming that
  - 2 of them coming from the session object, and
  - 2 from the request object due to the POST from the previous page
*/
String merchantReferenceCode = Session["mrc"];
String promoCode = Session["promo"];
String currency = Request.QueryString["currency"];
String amount = Request.QueryString["amount"];

// Create a variable of type IDictionary to store the params
IDictionary applyOutput = RequestGenerator.generateRequest(inputApplyParameters, keyFile);

// "Add" each of the parameters into the IDictionary object
inputParameters.Add(HOPMerchantRequestResponseParameter.MERCHANT_ID, merchantId);
inputParameters.Add(HOPMerchantRequestResponseParameter.REFERENCE_CODE, merchantReferenceCode);
inputParameters.Add(HOPMerchantRequestResponseParameter.PROMO_CODE,promoCode);
inputParameters.Add(HOPMerchantRequestResponseParameter.ITEM_COUNT, itemCount);
