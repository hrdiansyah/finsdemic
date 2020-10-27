<!-- Breadcrumbs -->
      <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-33">
          <div class="container">
            <h2 class="breadcrumbs-custom-title"><?php echo constant("page");?></h2>
			<p><?php echo constant("pagedetail");?></p>

            <ul class="breadcrumbs-custom-path">
              <li><span><a href="<?=base_url()?>Home" title="Home"><i class="fa fa-map-marker"></i> Home</a></span></li>
              <li class="active"><a href="<?=base_url()?><?php echo constant("plink");?>" title="<?php echo constant("plink");?>"><?php echo constant("page");?></a></li>
            </ul>
          </div>
          <div class="box-position" style="background-image: url(<?=base_url()?>assets/vdk/images/<?php echo constant("plink");?>-breadcrumbs.jpg);"></div>
        </div>
      </section>