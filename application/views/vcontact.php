<?php 
define("page","Contact");
define("plink","Contact");
define ("pagedetail","Bellinturf is dedicated to serving our customers; you are our number one priority. We have tools available to assist in your product inquiries and general questions. For your convience, our various methods of contact are available below.");
$this->load->view('iHead');?>
 
  <body>
   
    <div class="page">
      <!-- Menu-->
<?php $this->load->view('iMenu');?>     
      <!-- Breadcrumbs-->
     <?php $this->load->view('breadcrumbs');?>   

     <!-- Contact information-->
      <section class="section section-md section-first bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
           <div class="col-sm-8 col-md-6 col-lg-6">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="#">
				  RAJA RUMPUT PULOMAS <br /><br />
				  jakarta@rajarumput.com <br />
				  Roby (081357555258)<br /> Ety (0818915189)
				  </a></p>
                </div>
              </article>
            </div>
		 <div class="col-sm-8 col-md-6 col-lg-6">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="#">
				  RAJA RUMPUT SURABAYA <br />	
				  Jl. Babatan Pantai Barat V no 23, Surabaya<br />
				  0818300350 <br />
				  surabaya@rajarumput.com <br />
				  Person: Vsport Surabaya <br />
				  </a></p>
                </div>
              </article>
            </div>
            
          </div>
        </div>
      </section>

      <!-- Contact Form and Gmap-->
      <section class="section section-md section-last bg-default text-md-left">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-6 section-map-small">
              <iframe src="https://www.google.com/maps/d/embed?mid=zhoGnjhdSzAs.kxCw4qtYTIWc" width="100%" height="500"></iframe>
            </div>
            <div class="col-lg-6">
              <h4 class="text-spacing-50">Contact Form</h4>
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="row row-14 gutters-14">
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-first-name">First Name</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-last-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-last-name">Last Name</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-email">E-mail</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message">Message</label>
                      <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                </div>
                <button class="button button-primary button-pipaluk" type="submit">Send Message</button>
              </form>
            </div>
          </div>
        </div>
      </section>



    
<?php $this->load->view('iFoot');?>

      <!-- Page Footer-->
     
    </div>
<?php $this->load->view('iBottom');?>