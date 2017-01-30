<?php
$output = null;
try {
  // Generate the request parameters
  $output = HOPRequestGenerator::generateRequest($inputParameters, $this->publicKey);
} catch (Exception $ex){
  echo $ex->getMessage();
}
