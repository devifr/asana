<div class="envor-content">
  <?php $this->load->view("shared/breadcrumb") ?>
  <section class="envor-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <h3><?php echo $content->judul_content; ?></h3>
          <p><?php echo str_replace('src="../../../', 'src="../../../../', $content->description); ?></p>
          <p>&nbsp;</p>
          <h3><?php echo lang('contact-info'); ?></h3>
          <p class="contact-item"><i class="fa fa-map-marker"></i><div style="padding-left: 27px;"><?php echo $config->address; ?></div></p>
          <p class="contact-item"><i class="fa fa-phone"></i> <?php echo $config->phone; ?></p>
          <p class="contact-item"><i class="fa fa-envelope"></i> <a href=""><?php echo $config->email_contact; ?></a></p>
        </div>
        <?php $bhs = $this->lang->lang(); ?>
        <div class="col-lg-6 col-md-6">
          <h3><?php echo lang('contact-title'); ?></h3>
          <form action="<?php echo base_url("$bhs/contact_us/save_data"); ?>" method="post" class="envor-f1">
            <p><label for="name">Your name:*</label><input type="text" id="drop-name" name="name"></p>
            <p><label for="email">Your email:*</label><input type="email" id="drop-email" name="email"></p>
            <p><label for="subject">Subject:*</label><input type="text" id="drop-subject" name="subject"></p>
            <p><label for="description">Message:</label>
              <textarea id="description" name="description" placeholder="Your message..."></textarea>
            </p>
            <p><input type="submit" class="envor-btn envor-btn-normal envor-btn-primary riva-prev-tab margin-left-0" value="send message"></p>
          </form>
        </div>

        <div class="col-lg-3 col-md-3">
          <div id="map-canvas"></div>
        </div>
      </div>
    </div>
  </section>
</div>
