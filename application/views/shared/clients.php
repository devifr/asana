<section class="envor-section envor-section-align-center back-grey">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>List <strong>Clients</strong></h2>
        <div class="envor-relative" id="latest-projects">

          <?php foreach ($clients as $key => $client) { ?>
            <article class="envor-project envor-padding-left-30">
              <div class="envor-project-inner">
                <figure><a href=""><img src="<?php echo client_url($client->image); ?>" alt="<?php echo $client->judul_client; ?>"></a><figcaption><a href="<?php echo client_url($client->image); ?>" title="<?php echo $client->judul_client.' ('.$client->scope.')'; ?>" class="colorbox"><i class="fa fa-plus"></i></a></figcaption></figure>
                <div class="envor-project-details">
                  <!-- <div class="envor-project-likes"><i class="fa fa-thumbs-o-up"></i> 14</div> -->
                  <p class="link"><a href="<?php echo $client->link; ?>" target="_blank"><?php echo $client->judul_client; ?></a></p>
                  <p class="filter"><?php echo $client->scope; ?></p>
                </div>
              </div>
            </article>
          <?php } ?>

          <div class="envor-navigation rivaslider-navigation">
            <a href="" class="back"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a href="" class="forward"><i class="glyphicon glyphicon-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
