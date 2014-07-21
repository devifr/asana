<section class="envor-section envor-home-slider">
  <?php if($banners->num_rows()>0) { ?>
    <div id="layerslider" class="envor-layerslider" style="height: 500px;">
      <?php foreach ($banners->result() as $key => $banner) { ?>
        <!--LayerSlider layer-->
        <div class="ls-layer" style="transition3d: 1,4,5,11; transition2d: 2,8,30;">
          <!--LayerSlider background-->
          <img class="ls-bg" src="<?php echo images_url('web/banner/'.$banner->banner_slide_name); ?>" alt="<?php echo $banner->title_banner_slide; ?>">
        </div>
      <?php } ?>
    </div>
  <?php } ?>
</section>
