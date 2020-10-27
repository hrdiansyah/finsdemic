<?php 
define("page","About");
define("plink","About");
define ("pagedetail","As a preferred artificial grass manufacturer in the world, Bellinturf has more than 16 years of experience in artificial grass production. Bellinturf has two large modern plants that located in China and Vietnam. The domestic production plant since 2004, another plant of Vietnam that has started full operation since December 2017.");
$this->load->view('iHead');?>
 
  <body>
   
    <div class="page">
      <!-- Menu-->
<?php $this->load->view('iMenu');?>     
      <!-- Breadcrumbs-->
     <?php $this->load->view('breadcrumbs');?>   

      
     <!-- About us-->
      <section class="section section-md section-first bg-default text-md-left">
        <div class="container">
          <div class="row row-50 justify-content-center">
            <div class="col-md-10 col-lg-5 col-xl-6"><img src="<?=base_url()?>assets/vdk/images/about.jpg" alt="" width="466" height="446"/>
            </div>
            <div class="col-md-10 col-lg-7 col-xl-6">
              <h2>About Us</h2>
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">Stronger</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2" data-toggle="tab">Technical</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-3" data-toggle="tab">Principle</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-4-1">
                    <p>As the world’s top 2 largest manufacturer in artificial grass industry, Bellinturf is the TOP 1 manufacturer which has the highest market gains of artificial turf volume since 2017, with 10% Global market share. Bellinturf is also the ONLY manufacturer in output growing of both turf and yarns up to over 66%. The fast-paced growth of Bellinturf will guarantee the reliable quality, with the affordable and superior cooperation experience in the world.</p>
                   
                    <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="#">Read more</a><a class="button button-width-xl-310 button-default-outline button-wapasha" href="#">Contact us</a></div>
                  </div>
                  <div class="tab-pane fade" id="tabs-4-2">
                    <p> As one of the mainly participator which making the technical standard in sports & landscape artificial grass fields at domestically and internationally, Bellinturf possesses a R&D team with more than 200 experienced staffs, owns more than 40 authorized patents. Bellinturf has developed a lot of advanced products and worked out many technical difficulties for artificial grass, meanwhile, As a FIFA-licensed manufacturer, Bellinturf has been installing FIFA certified football turf pitch throughout Europe, Asia, America, Africa and so on. As an FIH certified manufacturer, Bellinturf hockey turf systems meet diversified requirements for different levels of applications including top-level professional hockey games and competitions.
Technical force</p>
                    
                    <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="#">Read more</a><a class="button button-width-xl-310 button-default-outline button-wapasha" href="#">Contact us</a></div>
                  </div>
                  <div class="tab-pane fade" id="tabs-4-3">
                    <p> Bellinturf always adhering to high quality principle, focusing on quality management, With strict basic management and regular staff training, to improve all the staff management ability and skill levels. Bellinturf will always improving the quality management systems constantly. Bellinturf will go farther!
Company Principle</p>
                    
                    <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="#">Read more</a><a class="button button-width-xl-310 button-default-outline button-wapasha" href="<?=base_url()?>Contact">Contact us</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



    
<?php $this->load->view('iFoot');?>

      <!-- Page Footer-->
     
    </div>
<?php $this->load->view('iBottom');?>