<div id="templatemo_main">
  <div class="content_box">
    <?php $lang = $this->lang->lang(); ?>
    <?php if($client->num_rows() > 0){ ?>
      <h2>Client</h2>
      <?php foreach ($client->result() as $key => $value) { ?>
        <li>
          <a href="<?php echo $value->link; ?>" target="_blank">
            <img src="<?php echo base_url("client/$value->image"); ?>">
          </a>
        </li>
      <?php } ?>
    <?php }else{
      echo informasi(lang('no client'));
      } ?>
    <?php if($partner->num_rows() > 0){ ?>
      <h2>Partner</h2>
      <?php foreach ($partner->result() as $key => $value) { ?>
        <li>
          <a href="<?php echo $value->link; ?>" target="_blank">
            <img src="<?php echo base_url("partner/$value->image"); ?>">
          </a>
        </li>
      <?php } ?>
    <?php }else{
      echo informasi(lang('no data'));
      } ?>
  </div>
</div> <!-- end of main -->
