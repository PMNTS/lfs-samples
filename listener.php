<?php

session_start();
$map = array();

// Iterate over posted params and store
foreach($_REQUEST as $key => $val){
  $map[$key] = $val;
}

// Store map of post paras in session
$_SESSION['responseMap'] = $map;
