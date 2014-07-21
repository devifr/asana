<section class="envor-section envor-single-page">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3">
        <?php $this->load->view('shared/left_nav'); ?>
      </div>

      <div class="col-lg-9 col-md-9">
        <h2 class="align-left"><?php echo $content->judul_content; ?></h2>
        <p><?php echo str_replace('src="../../../', 'src="../../../../', $content->description); ?></p>
        <p>&nbsp;</p>

      <?php if($careers->num_rows()>0){
        foreach ($careers->result() as $key_career => $career) {
         $id_encrypt = $this->encrypt->encode($career->id_career);
         $lang = $this->lang->lang();
      ?>
        <div class="envor-career-1">
          <header>
            <i class="fa fa-user"></i>
            <small>Job Description</small>
            <p><?php echo $career->position; ?></p>
          </header>
          <div class="details">
            <p class="title">Overview:</p>
            <?php echo $career->description; ?>
          </div>
          <div class="ca-btn">
            <!-- <a href="<?php //echo base_url("$lang/careers/job/$id_encrypt"); ?>" target='_blank' class="envor-btn envor-btn-primary envor-btn-small">apply now!</a> -->
            <a href="#" class="envor-btn envor-btn-primary envor-btn-small"><i class="fa fa-plus"></i>apply now!</a>
            <a href="#" class="envor-btn envor-btn-secondary envor-btn-small show-details"><i class="fa fa-plus"></i> details</a>
          </div>
        </div>
      <?php }
      }else{
        echo informasi(lang('no data'));
      }
      ?>
    </div>
  </div>
</section>
