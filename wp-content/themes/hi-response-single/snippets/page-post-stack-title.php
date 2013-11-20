<?php if (get_field("display_post_page_title")) { ?>
      <div class="module mpt-lb-0 mpb-lb-1">
        <div class="col col-100 col-padd-hori">
          <a href="<?php the_permalink(); ?>" class="history"><?php the_title(); ?></a>
        </div>
      </div>
<?php } ?>