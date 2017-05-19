<form action="https://paynow-sandbox.ipsi.com.au/bespoke/latitude" method="post">
    <?php
    while(list($key, $value) = each($output)){
    ?>
      <input type="hidden" name="<?php echo $key ?>" value="<?php echo $value ?>" />
    <?php } ?>
    <input type="submit" value="Checkout with Interest Free" />
</form>
