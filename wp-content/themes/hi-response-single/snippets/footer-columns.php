  <div id="footer">
    <div id="footer-inner">
    
      <?php if ($footer_column_1_display) { ?>
      <div class="col col-<?php echo $footer_column_1_width; ?> col-padd-hori">
        <?php if ($footer_column_1) {echo '<p class="lb-1 ' . $footer_text_size . ' '. $footer_column_1_text_align .'">' . $footer_column_1 . '</p>';} else {echo '<div class="empty">&nbsp;</div>';} ?>
      </div>
      <?php } ?>
      
      <?php if ($footer_column_2_display) { ?>
      <div class="col col-<?php echo $footer_column_2_width; ?> col-padd-hori">
        <?php if ($footer_column_2) {echo '<p class="lb-1 ' . $footer_text_size . ' '. $footer_column_2_text_align .'">' . $footer_column_2 . '</p>';} else {echo '<div class="empty">&nbsp;</div>';} ?>
      </div>
      <?php } ?>
      
      <?php if ($footer_column_3_display) { ?>
      <div class="col col-<?php echo $footer_column_3_width; ?> col-padd-hori">
        <?php if ($footer_column_3) {echo '<p class="lb-1 ' . $footer_text_size . ' '. $footer_column_3_text_align .'">' . $footer_column_3 . '</p>';} else {echo '<div class="empty">&nbsp;</div>';} ?>
      </div>
      <?php } ?>
      
      <?php if ($footer_column_4_display) { ?>
      <div class="col col-<?php echo $footer_column_4_width; ?> col-padd-hori">
        <?php if ($footer_column_4) {echo '<p class="lb-1 ' . $footer_text_size . ' '. $footer_column_4_text_align .'">' . $footer_column_4 . '</p>';} else {echo '<div class="empty">&nbsp;</div>';} ?>
      </div>
      <?php } ?>
      
    </div>
  </div>