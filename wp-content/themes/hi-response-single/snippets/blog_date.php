          <?php if ($time_date_for_blog_module == '1') { 
            // Date
            // Time
          ?>
          
          <span class="date">
            <?php the_time(get_option('date_format')); ?><br/>
            <?php the_time(get_option('time_format')); ?>
          </span>
          
          <?php } else if ($time_date_for_blog_module == '2') { 
            // Date
          ?>
          
          <span class="date">
            <?php the_time(get_option('date_format')); ?>
          </span>
          
          <?php } else { 
            // Time
          ?>
          
          <span class="date">
            <?php the_time(get_option('time_format')); ?>
          </span>
                    
          <?php } ?>