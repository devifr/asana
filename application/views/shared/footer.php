  </div>
  <footer class="envor-footer envor-footer-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <div class="envor-widget">
            <h3><strong><?php echo $about_us->judul_content; ?></strong></h3>
            <div class="envor-widget-inner">
              <?php echo str_replace('src="../../../', 'src="../../../../', $about_us->description); ?>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4">
          <div class="envor-widget">
            <h3><strong><?php echo lang('vision-mision'); ?></strong></h3>
            <div class="envor-widget-inner">
              <div class="envor-wrapper" id="footer-news">
                <article class="envor-post-preview">
                  <div class="envor-post-preview-inner">
                    <strong>
                      <a href=""><?php echo $vision->judul_content; ?></a>
                    </strong>
                    <p>
                      <?php echo str_replace('src="../../../', 'src="../../../../', $vision->description); ?>
                    </p>
                  </div>
                </article>
                <article class="envor-post-preview">
                  <div class="envor-post-preview-inner">
                    <strong>
                      <a href=""><?php echo $mission->judul_content; ?></a>
                    </strong>
                    <p>
                      <?php echo str_replace('src="../../../', 'src="../../../../', $mission->description); ?>
                    </p>
                  </div>
                </article>

                <div class="envor-navigation envor-navigation-left rivaslider-navigation">
                  <a href="" class="back"><i class="glyphicon glyphicon-chevron-left"></i></a>
                  <a href="" class="forward"><i class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4">
          <div class="envor-widget envor-contacts-widget">
            <h3><strong><?php echo lang('contact-info');?></strong></h3>
            <div class="envor-widget-inner">
              <div class="margin-bottom20">
                <b><?php echo lang('address'); ?></b>
                <br>
                <?php echo $config->address; ?>
              </div>
              <div class="margin-bottom20">
                <?php echo lang('phone'); ?>: <?php echo $config->phone; ?>
                <br>
                <?php echo lang('fax'); ?> : <?php echo $config->fax; ?>
              </div>
              <div class="margin-bottom20">
                <a href="#">Email: <?php echo $config->email_contact; ?></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="envor-widget envor-copyright-widget">
            <div class="envor-widget-inner">
              <p><?php echo $config->footer; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="<?php echo js_url('frontend/vendor/jquery-1.11.0.min.js'); ?>"></script>
  <script src="<?php echo js_url('frontend/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo js_url('frontend/jquery.mCustomScrollbar.min.js'); ?>"></script>
  <script src="<?php echo js_url('frontend/jquery.mousewheel.min.js'); ?>"></script>
  <script src="<?php echo js_url('frontend/jquery.colorbox-min.js'); ?>"></script>
  <script src="<?php echo js_url('frontend/preloadCssImages.jQuery_v5.js'); ?>"></script>
  <script src="<?php echo js_url('frontend/jquery.stellar.min.js'); ?>"></script>
  <script src="<?php echo js_url('frontend/layerslider/jquery-easing-1.3.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo js_url('frontend/layerslider/jquery-transit-modified.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo js_url('frontend/layerslider/layerslider.transitions.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo js_url('frontend/layerslider/layerslider.kreaturamedia.jquery.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo js_url('frontend/jquery.rivathemes.js'); ?>"></script>
  <script type="text/javascript">
      $('document').ready(function() {
        $('#layerslider').layerSlider({
          skinsPath               : '<?php echo css_url('frontend/layerslider/skins/'); ?>',
          skin : 'fullwidth',
          thumbnailNavigation : 'hover',
          hoverPrevNext : false,
          responsive : false,
          responsiveUnder : 1170,
          sublayerContainer : 1170
        });

        $('#latest-projects').rivaSlider({
          visible : 4,
          selector : 'envor-project'
        });

        $('#our-partners').rivaCarousel({
          visible : 4,
          selector : 'envor-partner-logo',
          mobile_visible : 1
        });

        $('#footer-news').rivaSlider({
          visible : 1,
          selector : 'envor-post-preview'
        });

        $('#clients-testimonials').rivaCarousel({
          visible : 1,
          selector : 'envor-testimonials-1',
          mobile_visible : 1
        });
        // get job
        $('a.btn-apply').click(function(){
          id_encrypt = $(this).data('id');
          $.ajax({
            url: "<?php echo base_url($this->lang->lang().'/careers/job'); ?>/"+id_encrypt,
            type: "get",
            data: '',
            success: function(result){
                $("#modal-job").html(result);
                $("#modal-job").modal('show');
            }
          });
          return false;
        })
      });
  </script>
  <script src="<?php echo js_url('frontend/envor.js'); ?>"></script>
  <script type="text/javascript">
    $('document').ready(function() {
      var imgs = new Array(), $imgs = $('img');
      for (var i = 0; i < $imgs.length; i++) {
        imgs[i] = new Image();
        imgs[i].src = $imgs.eq(i).attr('src');
      }
      $('#envor-preload').hide();
    });
  </script>
  </body>
</html>
