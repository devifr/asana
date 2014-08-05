<section class="envor-section envor-section-align-center">
  <?php if($partners->num_rows()>0) { ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2><?php echo lang('our-partners-title'); ?></h2>
          <div class="envor-relative" id="our-partners">
            <?php foreach ($partners->result() as $key => $partner) { ?>
              <div class="envor-partner-logo">
                <div class="inner">
                  <a href="<?php echo $partner->link; ?>" target="_blank">
                    <img src="<?php echo partner_url($partner->image); ?>" height="160px" alt="<?php echo $partner->judul_partner; ?>"><span class="helper"></span>
                  </a>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</section>
