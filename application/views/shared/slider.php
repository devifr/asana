<section class="envor-section envor-home-slider">
  <?php if($banners->num_rows()>0) { ?>
    <div id="layerslider" class="envor-layerslider" style="height: 500px;">
      <?php foreach ($banners->result() as $key => $banner) { ?>
        <!--LayerSlider layer-->
        <div class="ls-layer" style="transition3d: 1,4,5,11; transition2d: 2,8,30;">
          <!--LayerSlider background-->
          <img class="ls-bg" src="<?php echo images_url('web/banner/'.$banner->banner_slide_name); ?>" alt="<?php echo $banner->title_banner_slide; ?>">
          <div class="envor-layerslider-block ls-s1" style="top: 300px; left: 15px; transition2d: all; slidedelay: 6000; durationin: 1000; easingin: easeOutExpo;">
            <?php // echo "<h3>  $banner->tag_banner</h3>"; ?>
            <h2><?php echo $banner->title_banner_slide; ?></h2>
            <p><?php echo $banner->description_banner; ?></p>
          </div>
        </div>
      <?php } ?>
    </div>
  <?php } ?>
</section>
