<div id="to-the-top"><i class="fa fa-chevron-up"></i></div>
  <div id="envor-preload">
    <span>Now loading.<br>Please wait.</span>
    <i class="fa fa-cog fa-spin"></i>
    <p></p>
  </div>
  <i class="glyphicon glyphicon-align-justify" id="envor-mobile-menu-btn"></i>

  <!-- Mobile Menu -->
  <div class="envor-mobile-menu" id="envor-mobile-menu">
    <h3>menu</h3>
    <nav>
      <ul>
        <li>
          <a href="<?php echo base_url(); ?>">Home</a>
        </li>
        <li>
          <a href="<?php echo base_url('page/about_us'); ?>">About Us</a>
        </li>
        <li>
          <a href="#">Solutions & Services</a>
          <ul>
            <li><a href="<?php echo base_url('page/solution'); ?>">Solutions</a></li>
            <li><a href="<?php echo base_url('page/service'); ?>">Services</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url('client_partner'); ?>">Partners & Clients</a>
        </li>
        <li>
          <a href="<?php echo base_url('careers'); ?>">Career</a>
        </li>
        <li>
          <a href="<?php echo base_url('contact_us'); ?>">Contacts Us</a>
        </li>
      </ul>
    </nav>
  </div>
  <!-- End -->

  <header class="envor-header envor-header-1">
    <div class="envor-top-bar">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p class="contacts"><i class="fa fa-phone"></i> <?php echo $config->phone; ?></p>
            <p class="contacts"><i class="fa fa-envelope"></i> <a href=""><?php echo $config->email_contact; ?></a></p>
            <ul class="social-btns">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="envor-header-bg" id="envor-header-menu">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="envor-relative">
              <a href="index.php">
                <div class="envor-logo">
                  <img src="<?php echo images_url('frontend/site-logo.png'); ?>" alt="Envor Logo">
                  <p class="logo">PT.ARSANA JAYA UTAMA</p>
                  <p class="tagline italic bold">Smart IT Solutions</p>
                </div>
              </a>
              <!-- Website Menu -->
              <nav>
                <ul>
                  <li>
                    <a href="<?php echo base_url(); ?>">Home</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('page/about_us'); ?>">About Us</a>
                  </li>
                  <li>
                    <a href="#">Solutions & Services</a>
                    <ul>
                      <li><a href="<?php echo base_url('page/solution'); ?>">Solutions</a></li>
                      <li><a href="<?php echo base_url('page/service'); ?>">Services</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="<?php echo base_url('client_partner'); ?>">Partners & Clients</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('careers'); ?>">Career</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('contact_us'); ?>">Contacts Us</a>
                  </li>
                </ul>
              </nav>
              <!-- End -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
<div class="envor-content">
<?php
  // echo $this->session->flashdata('msg');
?>
