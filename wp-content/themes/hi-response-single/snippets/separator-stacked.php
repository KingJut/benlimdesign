<?php 
  $module_padding_top = get_sub_field("module_padding_top"); 
  $module_padding_bottom = get_sub_field("module_padding_bottom");
?>

<div class="separator-module module <?php if ($module_padding_top) {echo 'mpt-' .$module_padding_top;} ?> <?php if ($module_padding_bottom) {echo 'mpb-' .$module_padding_bottom;} ?>">
  <div class="separator-hr col col-100 col-padd-hori">
    <hr/>
  </div>
</div>