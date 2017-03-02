<?php
if($verified){
  $reasonCode = $map['reasonCode']; 
  if($reasonCode == "0"){
  ?>
   <p>Print order receipt.</p>
  <?php
  } else {
    header("Location: /SelectAnotherPaymentMethod");
  }
} else { ?>
  <p>Please call customer service for updated status on your order.</p>
<?php } ?>
