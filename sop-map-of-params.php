include_once 'web/util/merchantConstants.php';
include_once 'web/buy/cybs/param/hopMerchantRequestResponseParameter.php';
include_once 'web/buy/request/generator/hopRequestGenerator.php';
include_once 'web/buy/request/generator/generatorUtility.php';

/*
Here we are storing just 4 of the required parameters in the map.
In this example we are assuming that
  - 2 of them coming from the session object, and
  - 2 from the request object due to the POST from the previous page
*/
$merchantReferenceCode = $_SESSION["mrc"];
$promoCode = $_SESSION["promo"];
$currency = $_REQUEST["currency"];
$amount = $_REQUEST["amount"];

// Create a variable to store the params
$inputParameters = array();

// Add each of the parameters into the array object
$inputParameters[HOPMerchantRequestResponseParameter::$MERCHANT_ID] = $merchantId;
$inputParameters[HOPMerchantRequestResponseParameter::$REFERENCE_CODE] = $merchantReferenceCode;
$inputParameters[HOPMerchantRequestResponseParameter::$ITEM_COUNT] = $itemCount;
$inputParameters[HOPMerchantRequestResponseParameter::$PROMO_CODE] = $promoCode;
