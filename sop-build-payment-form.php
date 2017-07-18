<form action="https://gateway-sandbox.ipsi.com.au/v2/purchases/direct/lfs-12345678" method="post">
    <?php
    while(list($key, $value) = each($output)){
    ?>
      <input type="hidden" name="<?php echo $key ?>" value="<?php echo $value ?>" />
    <?php } ?>
    <input type="submit" value="Checkout with Interest Free" />
</form>
