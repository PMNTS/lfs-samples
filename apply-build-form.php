<?php
  $url = "https://onlinepaymentintegration.gemoney.com.au/eapps/ApplyRetail.faces";
?>
<form name="merchantForm" action="<?php echo $url ?>" method="POST">
<input type="hidden" name="merchantID" value="<?php echo $output[MerchantRequestParameter::$MERCHANT_ID] ?>">
<input type="hidden" name="source" value="<?php echo $output[MerchantRequestParameter::$SOURCE_FLAG] ?>">
<input type="hidden" name="merchant_eappsData" value="<?php echo $output[MerchantRequestParameter::$IN_DATA_BLOCK] ?>">
<input type="submit" name="Submit" value="Submit">
</form>
