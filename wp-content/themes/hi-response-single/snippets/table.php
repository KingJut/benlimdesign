<?php 
// Module overrides
$module_padding_top = get_sub_field("module_padding_top");
$module_padding_bottom = get_sub_field("module_padding_bottom");
?>
  
<div class="table-module module <?php if ($module_padding_top) {echo 'mpt-' .$module_padding_top;} ?> <?php if ($module_padding_bottom) {echo 'mpb-' .$module_padding_bottom;} ?>">
  <div class="table-module-inner">
    
      <table>
        <tbody>
        <?php while(has_sub_field('table_row')): ?>
          <tr style="<?php if (get_sub_field("row_margin_top")) {echo 'border-top: '.get_sub_field("row_margin_top").' solid transparent;';} ?> <?php if (get_sub_field("row_margin_bottom")) {echo 'border-bottom: '.get_sub_field("row_margin_bottom").' solid transparent;';} ?>">
            <?php while(has_sub_field('table_cell')): ?>
            <td>
              <?php if (get_sub_field("html")) { ?>
              <p class="<?php if (get_sub_field("text_size") == true) {echo get_sub_field("text_size");} ?> <?php if (get_sub_field("text_align") == true) {echo get_sub_field("text_align");} ?>">
              <?php echo get_sub_field("html"); ?>
              </p>
              <?php } ?>
            </td>
            <?php endwhile; ?>
          </tr>
        <?php endwhile; ?>
        </tbody>
      </table>
      
  </div>
</div>
