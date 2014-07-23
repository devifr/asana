<section class="envor-page-title-1 section_profile" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-9">
        <h1><?php echo $row->judul_content; ?></h1>
      </div>
    </div>
  </div>
</section>

<section class="envor-desktop-breadscrubs">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="envor-desktop-breadscrubs-inner">
          <a href="<?php echo base_url(); ?>">Home</a><i class="fa fa-angle-double-right"></i><?php echo $row->judul_content; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="envor-mobile-breadscrubs">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <a href="<?php echo base_url(); ?>">Home</a><i class="fa fa-angle-double-right"></i><?php echo $row->judul_content; ?>
      </div>
    </div>
  </div>
</section>
