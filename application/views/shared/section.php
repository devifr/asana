<section class="envor-section back-green">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-8">
        <article class="envor-feature">
          <div class="envor-feature-inner">
            <header>
              <i class="fa fa-globe back-black"></i>
              <?php echo $section1->title; ?>
            </header>
            <p><?php echo $section1->description; ?></p>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-8">
        <article class="envor-feature">
          <div class="envor-feature-inner">
            <header>
              <i class="fa fa-cog back-black"></i>
              <?php echo $section2->title; ?>
            </header>
            <p><?php echo $section2->description; ?></p>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-8">
        <article class="envor-feature">
          <div class="envor-feature-inner">
            <header>
              <i class="fa fa-trophy back-black"></i>
              <?php echo $section3->title; ?>
            </header>
            <p><?php echo $section3->description; ?></p>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
<?php $bhs = $this->lang->lang(); ?>
<section class="envor-section envor-section-st1 envor-section-align-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>
          <strong>PT.ASRSANA JAYA UTAMA</strong>
          <br>
          <span class='font16'>Smart IT Solutions</span>
        </h2>
        <p><?php echo $about_us->description; ?></p>
        <p>
          <a href="<?php echo base_url("$bhs/page/about_us"); ?>" class="envor-btn envor-btn-primary envor-btn-normal">
            <i class="glyphicon glyphicon-question-sign"></i> <?php echo lang('view-more'); ?>
          </a>
        </p>
      </div>
    </div>
  </div>
</section>
