<div id="templatemo_main">
  <div class="content_box">
    <?php
    $lang = $this->lang->lang();
    if($rows->num_rows()>0){
    $row = $rows->row(); ?>
            <h2><?php echo $row->judul_content; ?></h2>
          <?php echo str_replace('src="../../../', 'src="../../../../', $row->description); ?>
        <?php }else{
      echo informasi(lang('no data'));
    } ?>
  </div>
</div> <!-- end of main -->
