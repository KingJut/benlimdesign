<?php
if (post_password_required())
	return;
?>

<?php if (get_field('comments')) { ?>

<?php $comments_layout_template = get_field('comments_layout_template'); ?>

<div id="comments" class="comments-area">
<?php include('snippets/separator.php'); ?>
  <div class="comments-module module mpb-lb-1">
    <?php 
      if ($comments_layout_template == 'Left 50%') {
        include('snippets/comments_left_50.php');
      } else if ($comments_layout_template == 'Left 75%') {
        include('snippets/comments_left_75.php');
      } else if ($comments_layout_template == 'Center 50%') {
        include('snippets/comments_center_50.php');
      } else if ($comments_layout_template == 'Center 75%') {
        include('snippets/comments_center_75.php');
      } else if ($comments_layout_template == 'Right 50%') {
        include('snippets/comments_right_50.php');
      } else if ($comments_layout_template == 'Right 75%') {
        include('snippets/comments_right_75.php');
      }
      
    ?>
  </div> <!-- .comments-module -->
</div><!-- #comments .comments-area -->

<?php } ?>