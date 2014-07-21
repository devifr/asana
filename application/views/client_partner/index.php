<section class="envor-section envor-single-page">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3">
        <?php $this->load->view("shared/left_nav") ?>
      </div>

      <div class="col-lg-9 col-md-9">
        <h2 class="align-left"><?php echo $content->judul_content; ?></h2>
        <p>
          <?php echo str_replace('src="../../../', 'src="../../../../', $content->description); ?>
        </p>
        <p>&nbsp;</p>
        <?php foreach ($partners->result() as $key => $partner) { ?>
          <div class="envor-partner-1">
            <figure><img src="<?php echo partner_url($partner->image); ?>" alt="<?php echo $partner->judul_partner ?>"></figure>
            <p class="title"><a href="<?php echo $partner->link; ?>" target="_blank"><?php echo $partner->judul_partner; ?></a></p>
            <p class="link"><?php echo $partner->link; ?></p>
            <p class="desc"><?php echo str_replace('src="../../../', 'src="../../../../', $partner->description); ?></p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
