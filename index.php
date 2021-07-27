<?php
 use Gigya\PHP;
 use Gigya\PHP\GSRequest;
 try {
  $apiKey = "3_ojnmzVXjaGTCcK4MHoSjrWzeXQPFfYHRW9XvKMPEf4PzI6kliiUrY924BBtaZuBQ";
  $secretKey = "Plfs1pnOyevXimj3ah9Ado+MmTZMk/KBrIgSInM+sj8=";
  
  $method = "accounts.setAccountInfo";
  
  $request = new GSRequest($apiKey,$secretKey,$method);
  $request->setParam("UID","e8e80239079e4a64a5bfdb480407e7f8");
  $request->setParam("isActive",false);
  
  $response = $request->send();
  
  if($response->getErrorCode()==0)
      {
          echo "Success";
      }
  else
      {
          echo ("Uh-oh, we got the following error: " . $response->getErrorMessage());
          error_log($response->getLog());
      }
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>