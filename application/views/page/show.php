<div class="envor-content">
  <?php $this->load->view("shared/breadcrumb_profile") ?>
  <section class="envor-section envor-single-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <?php $this->load->view("shared/left_nav") ?>
        </div>

        <div class="col-lg-9 col-md-9">
          <?php
            $lang = $this->lang->lang();
            if($rows->num_rows()>0){
              $row = $rows->row();
              echo "<h2>$row->judul_content </h2>";
              echo str_replace('src="../../../', 'src="../../../../', $row->description);
            }else{
              echo informasi(lang('no data'));
            }
          ?>
        </div>
      </div>
    </div>
  </section>
</div>
