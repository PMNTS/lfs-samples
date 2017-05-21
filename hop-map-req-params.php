<?php

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
$reference = $_SESSION["mrc"];
$promoCode = $_SESSION["promo"];
$currency = $_REQUEST["currency"];
$amount = $_REQUEST["amount"];

// Create a variable to store the params
$inputParameters = array();

// Add each of the parameters into the array object
$inputParameters[LFS::REFERENCE] = $reference;
$inputParameters[LFS::PROMO_CODE] = $promoCode;
$inputParameters[LFS::CURRENCY] = $currency;
$inputParameters[LFS::total] = $amount;
