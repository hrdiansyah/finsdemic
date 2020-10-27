<?php 
define("page","Products");
define("plink","Products");
define ("pagedetail","To suit the various environmental conditions present in different parts of the world, Bellinturf ensures that it carries out proper research on the various client regions to enable it to make customized products.");
$this->load->view('iHead');?>
 
  <body>
   
    <div class="page">
      <!-- Menu-->
<?php $this->load->view('iMenu');?>     
      <!-- Breadcrumbs-->
     <?php $this->load->view('breadcrumbs');?>   

      
     <!-- Products-->
      <section class="section section-md bg-default">
        <div class="container">
          <div class="oh">
            <h2 class="wow slideInUp" data-wow-delay="0s">All Products</h2>
          </div>
          <div class="row row-30 justify-content-center">
<?php 
include "dbc.php"; 
  $qrekomB = "select * from products where status='1'  order by id asc";   
  $hrekomB = mysqli_query($connection,$qrekomB);  
  $no = 0;  
  while ( $brekomB = mysqli_fetch_assoc($hrekomB))
  { ?>
	  
			<div class="col-md-6 col-lg-4 col-xl-4 wow fadeInRight" data-wow-delay="0s">
              <!-- Team Classic-->
              <article class="team-classic"><a class="team-classic-figure" href="<?=base_url()?>Products/detail/<?php print("$brekomB[id]");?>"><img src="<?=base_url()?>assets/vdk/images/<?php print("$brekomB[gambar]");?>.jpg" alt="" width="370" height="406"/></a>
                <div class="team-classic-caption">
                  <h5 class="team-classic-name"><a href="<?=base_url()?>Products/detail/<?php print("$brekomB[id]");?>"><?php print("$brekomB[judul]");?></a></h5>
                  <p class="team-classic-status"><?php print("$brekomB[jenis]");?></p>
                </div>
              </article>
            </div>
<?php }?>  
			
			
			
			
          </div>
        </div>
      </section>



    
<?php $this->load->view('iFoot');?>

      <!-- Page Footer-->
     
    </div>
<?php $this->load->view('iBottom');?>