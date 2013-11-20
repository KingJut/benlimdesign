    <!-- Index Item -->
    <div class="item index-item <?php echo $index_text_size; ?>">
      
      <div class="index-separator col col-100">
        <div class="col-inner-hori">
          <hr/>
        </div>
      </div>

      <div class="index-item-inner">
        <?php
        if ($index_module_type) {
          if ($index_module_type == '4 Columns') {
            include('archive_index_type1.php');
          } else if ($index_module_type == '4 Columns Alt.') {
            include('archive_index_type2.php');
          } else if ($index_module_type == '2 Columns') {
            include('archive_index_type3.php');
          } else if ($index_module_type == '2 Columns Alt.') {
            include('archive_index_type4.php');
          } else if ($index_module_type == '2 Columns Alt. Reverse') {
            include('archive_index_type5.php');
          } else {
            include('archive_index_type1.php');
          }
        }
        ?>
      </div>
    </div>