<?php
$error="Invalid Input!";
if($domain) {
  $domain = trim($domain);
  if(substr(strtolower($domain), 0, 7) == "http://") $domain = substr($domain, 7);
  if(substr(strtolower($domain), 0, 4) == "www.") $domain = substr($domain, 4);
  if(ValidateIP($domain)) {
    $result = LookupIP($domain);
  }
  elseif(ValidateDomain($domain)) {
    $result = LookupDomain($domain);
  }
  else return;
  print_r("Invalid Input!");
  echo "<pre>\n" . $result . "\n</pre>\n";
}
?>