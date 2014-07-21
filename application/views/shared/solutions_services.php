<section class="envor-section envor-section-align-center envor-section-bg1" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2><strong>Solutions & Services</strong></h2>
        <div class="envor-wrapper" id="clients-testimonials">
          <?php foreach ($rows->result() as $key => $row) { ?>
            <article class="envor-testimonials-1">
              <div class="envor-testimonials-inner">
                <p>
                <h4><?php echo $row->judul_content; ?></h4>
                <em><?php echo str_replace('src="../../../', 'src="../../../../', $row->description);; ?></em></p>
                <i class="fa fa-quote-left"></i>
                <i class="fa fa-quote-right"></i>
              </div>
            </article>
          <?php } ?>
          <div class="envor-controls rivaslider-controls"></div>
        </div>
      </div>
    </div>
  </div>
</section>
