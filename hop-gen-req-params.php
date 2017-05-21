<?php

$output = null;
try {
  // Generate the request parameters
  $output = HOPRequestGenerator::generateRequest($inputParameters, $this->shared_secret);
} catch (Exception $ex){
  echo $ex->getMessage();
}
