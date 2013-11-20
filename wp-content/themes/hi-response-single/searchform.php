<?php
/*** Search form ***/
?>
<div class="searchform-module module <?php if (get_field('search_bar_top_margin', 'option')) { echo 'mpt-'.get_field('search_bar_top_margin', 'option');}; ?>">
  <div class="col col-100">
    <div class="col-inner-hori">
      <?php $search_text = "Search..."; ?> 
      <?php if (get_field('copy_3', 'option')) {$search_text = get_field('copy_23', 'option');} ?>
      <form method="get" id="searchform"  
      action="<?php bloginfo('home'); ?>/"> 
      <input type="text" value="<?php echo $search_text; ?>"  
      name="s" id="s" class="render"  
      onblur="if (this.value == '')  
      {this.value = '<?php echo $search_text; ?>';}"  
      onfocus="if (this.value == '<?php echo $search_text; ?>')  
      {this.value = '';}" /> 
      <input type="hidden" id="searchsubmit" /> 
      </form>
    </div>
  </div>
</div>
