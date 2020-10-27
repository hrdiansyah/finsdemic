<?php 
define("page","Products / Details");
define("plink","Products");
define ("pagedetail","To suit the various environmental conditions present in different parts of the world, Bellinturf ensures that it carries out proper research on the various client regions to enable it to make customized products.");
$this->load->view('iHead');?>

<?php
  foreach($qprod as $rowdata){
    $id=$rowdata->id;
    $judul=$rowdata->judul;
    $jenis=$rowdata->deskripsi;
    $isi=$rowdata->isi;
    $gambar=$rowdata->gambar;
  }
?>
  <body>
   
    <div class="page">
      <!-- Menu-->
<?php $this->load->view('iMenu');?>     
      <!-- Breadcrumbs-->
     <?php $this->load->view('breadcrumbs');?>   

      
     <!-- Products-->
     

 <section class="section section-md section-first bg-default text-md-left">
        <div class="container">
          <div class="row row-50 justify-content-center">
            <div class="col-md-10 col-lg-5 col-xl-6"><img src="<?=base_url()?>assets/vdk/images/<?=$rowdata->gambar?>.jpg" alt="" width="466" height="446"/>
            </div>
            <div class="col-md-10 col-lg-7 col-xl-6">	

              <h2><?=$rowdata->judul?></h2>
              <!-- Bootstrap tabs-->
            <p> <?=$rowdata->isi?> </p>
            </div>
          </div>
        </div>
      </section>
	  
	  

    
<?php $this->load->view('iFoot');?>

      <!-- Page Footer-->
     
    </div>
<?php $this->load->view('iBottom');?>