	    <?php if ($notification_location == 'All pages') { ?>
    	  <div id="notifications">
    	    <p class="align-center <?php echo $notification_text_size; ?>">
    	      <?php echo $notification_text; ?>
    	      <?php if ($notification_close_link) { ?>
    	      <br/><a href="#" class="close-notification"><?php echo $notification_close_link; ?></a>
    	      <?php } ?>
    	    </p>
        </div>	    
	    <?php } else if ($notification_location == 'Front page only') { ?>
    	  <?php if (is_front_page()) { ?>
    	  <div id="notifications">
    	    <p class="align-center <?php echo $notification_text_size; ?>">
    	      <?php echo $notification_text; ?>
    	      <?php if ($notification_close_link) { ?>
    	      <br/><a href="#" class="close-notification"><?php echo $notification_close_link; ?></a>
    	      <?php } ?>
    	    </p>
        </div>
    	  <?php } ?>
  	  <?php } ?>
  	  