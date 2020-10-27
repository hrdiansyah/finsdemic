<?php
$this->load->view('iHead');
$this->simple_login->cek_login();
echo ucfirst($this->session->userdata('username'));
?>

<body>
	<!-- preloader Start -->

	<!-- Header Wrapper Start -->
	<?php $this->load->view('iMenu'); ?>
	<!-- timer section start -->
	<?php $this->load->view('iTimer'); ?>
	<!-- timer section end -->
	<!-- categories section start -->
	<?php $this->load->view('iCategory'); ?>
	<!-- categories section end -->
	<!-- Speakers Wrapper Start -->
	<div data-scroll-index='2' style="width:100%;float:left;">
		<div class="lv_speakers_wrapper lv_toppadder100 lv_bottompadder100">
			<div class="lv_speaker_overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 lv_full_width">
						<div class="lv_heading_center">
							<h1>Who's Speaking?</h1>
							<p>We know all of our Speakers personally and can tell you everything about their strengths.
								We are only satisfied with the best and know that our guests appreciate this fact.
								In every event you get only Speakers who meet our own standards of quality:
								reputable, experience, impact, exciting, inspiring, but always honest and straight forward.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="lv_speakers_box">
							<img src="<?= base_url() ?>assets/edm/images/content/aries.jpeg" width="80%" height="auto" alt="icon_pin" />
							<div class="lv_speakers_box_text">
								<h3><b>Aries Heru Prasetyo</b></h3>
								<h5>MM, Ph.D, CER, CAC<h5>
										<p class="text-muted">PPM School of Management</p>
										<p class="text-muted">Co Founder, Crisis Management Center</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="lv_speakers_box">
							<img src="<?= base_url() ?>assets/edm/images/content/Fred.jpeg" alt="icon_pin" width="80%" height="362px" />
							<div class="lv_speakers_box_text">
								<h3><b> Frederik Tassyam </b></h3>
								<h5>B Bus ANZIIF (Fellow), CIP, CRGP<h5>
										<p class="text-muted">Direktur Utama PT Askrindo Mitra Utama</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="lv_speakers_box">
							<img src="<?= base_url() ?>assets/edm/images/content/Erickson.jpeg" alt="icon_pin" width="80%" height="342px" />
							<div class="lv_speakers_box_text">
								<h3><b> Erickson Mangunsong </b></h3>
								<h5>MSi, ACII<h5>
										<p class="text-muted">Plt. Direktur Utama PT. Asuransi Asei Indonesia</p>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
	<!-- Speakers Wrapper End -->

	<!-- Event Schedule Wrapper Start -->
	<div data-scroll-index='3' style="width:100%;float:left;">
		<div class="lv_event_schedule_wrapper lv_toppadder100 lv_bottompadder100">
			<div class="event_schedule_section">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
							<div class="lv_heading_center">
								<div class="event_schedule_content">
									<h1>Event Schedule</h1>

								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="lv_schedule_infotabs">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">

									<li role="presentation"><a href="#2" aria-controls="2" role="tab" data-toggle="tab">
											<p>11 August 2020</p><span>Past Event</span>
										</a></li>

									<li role="presentation" class="active"><a href="#0" aria-controls="0" role="tab" data-toggle="tab">
											<p>22 Oktober 2020</p><span>Event Up</span>
										</a></li>



									<li role="presentation"><a href="#3" aria-controls="1" role="tab" data-toggle="tab">
											<p>Next</p><span>Event</span>
										</a></li>
								</ul>
								<!-- Tab panes -->


								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="0">
										<!-- <ul>
											<li>
												<div class="lv_schedule_details">
													<div class="lv_schedule_details_img">
														<img src="<?= base_url() ?>assets/edm/images/content/finsdemic-thumb-02.png" alt="Event Schedule">
													</div>
													<div class="lv_schedule_details_text">
														<h4>Upcoming Events</h4>
														<p>
															<img src="<?= base_url() ?>assets/edm/images/content/time.png" alt="time">&nbsp; T.B.A
														</p>


														<ul>
															<li></li>
														</ul>
													</div>
													<div class="lv_schedule_details_btn">
														<div class="lv_btn lv_toppadder40">
															<h5>THE CHALLENGES OF UNDERWRITING WORKING CAPITAL LOAN IN THE PANDEMIC ERA.</h5>

														</div>
													</div>
												</div>
											</li>
										</ul> -->
										<ul>
											<li>
												<div class="lv_schedule_details">
													<div class="lv_schedule_details_img">
														<img src="<?= base_url() ?>assets/edm/images/content/finsdemic-thumb-02.png" alt="Event Schedule">
													</div>
													<div class="lv_schedule_details_text">
														<h4>Registration (Log in)</h4>
														<p>
															<img src="<?= base_url() ?>assets/edm/images/content/time.png" alt="time">&nbsp; 09:30 – 10:00
														</p>

														<h4>Waiting Room</h4>
														<p>
															<img src="<?= base_url() ?>assets/edm/images/content/time.png" alt="time">&nbsp; 09:45 – 10:00
														</p>

														<h4>Opening</h4>
														<p>
															<img src="<?= base_url() ?>assets/edm/images/content/time.png" alt="time">&nbsp; 10:05 – 10:10
														</p>
														<ul>
															<li></li>
														</ul>
													</div>
													<div class="lv_schedule_details_btn">
														<div class="lv_btn lv_toppadder40">
															<h5>Registration For Participants</h5> <br />
															<h5>Video Compro AMU</h5>
															<h5>Video Compro Finsdemic</h5>
															<br />
															<h5>Indonesia Raya</h5>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="lv_schedule_details">
													<div class="lv_schedule_details_img">
														<img src="<?= base_url() ?>assets/edm/images/content/finsdemic_ppm.png" alt="Event Schedule">
													</div>
													<div class="lv_schedule_details_text">
														<br /><br />
														<h4>Keynote Speaker</h4>
														<p><img src="<?= base_url() ?>assets/edm/images/content/time.png" alt="time">&nbsp; 10:10 – 10:50</p>
														<!-- <h4>Keynote Speech</h4>
														<p><img src="<?= base_url() ?>assets/edm/images/content/time.png" alt="time">&nbsp; 10:15 – 10:25</p> -->
														<ul>
															<li></li>
														</ul>
													</div>
													<div class="lv_schedule_details_btn">
														<div class="lv_btn lv_toppadder40">
															<a class="sponsors_button_wrapper" href="#">Aries Heru Prasetyo MM, Ph.D, CER, CAC </a><br />
															<h5 style="text-align: center">
																<ul> Co Founder Crisis Management Center </ul>
															</h5>
															<a class="btn_2" href="#">PPM School of Management</a><br /><br />
															<!-- <a class="btn_2" href="#">Crisis Management Center</a><br /><br /> -->
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="lv_schedule_details">
													<div class="lv_schedule_details_img">
														<img src="<?= base_url() ?>assets/edm/images/content/finsdemic_askrindo.png" alt="Event Schedule">
													</div>
													<div class="lv_schedule_details_text">
														<br /><br />
														<h4>Speaker 1</h4>
														<p><img src="<?= base_url() ?>assets/edm/images/content/time.png" alt="time">&nbsp; 10:50 – 11:00</p>
														<br /><br /><br />
														<ul>
															<li></li>
														</ul>
													</div>
													<div class="lv_schedule_details_btn">
														<div class="lv_btn lv_toppadder40">
															<a style="font-size: 11px" class="sponsors_button_wrapper" href="#">Frederik Tassyam B Bus ANZIIF (Fellow), CIP, CRGP</a>
															<h5 style="text-align: center">President Director - PT. Askrindo Mitra Utama</h5>
															<br />
															<a class=" btn_2" href="#">PT. Askrindo Mitra Utama</a>
														</div>
													</div>
												</div>
											</li>


											<li>
												<div class="lv_schedule_details">
													<div class="lv_schedule_details_img">
														<img src="<?= base_url() ?>assets/edm/images/content/finsdemic_asei.jpeg" alt="Event Schedule">
													</div>
													<div class="lv_schedule_details_text">
														<br /><br />
														<h4>Speaker 2</h4>
														<p><img src="<?= base_url() ?>assets/edm/images/content/time.png" alt="time">&nbsp; 11:00 – 11:20</p>
														<br /><br /><br />
														<ul>
															<li></li>
														</ul>
													</div>
													<div class="lv_schedule_details_btn">
														<div class="lv_btn lv_toppadder40">
															<a class="sponsors_button_wrapper" href="#">Erickson Mangunsong MSi, ACII</a>
															<h5 style="text-align: center">
																<ul> Direktur Utama PT. Asuransi Asei Indonesia </ul>
															</h5>
															<br />
															<a class=" btn_2" href="#">PT. Asuransi Asei Indonesia</a>
														</div>
													</div>
												</div>
											</li>

											<li>
												<div class="lv_schedule_details">
													<div class="lv_schedule_details_img">
														<img src="<?= base_url() ?>assets/edm/images/content/finsdemic-thumb.png" alt="Event Schedule">
													</div>
													<div class="lv_schedule_details_text">
														<h4>Q & A</h4>
														<p>
															<img src="<?= base_url() ?>assets/edm/images/content/time.png" alt="time">&nbsp; 11:20 – 11:50
															<br /><br /><br /><br /><br /><br />
														</p>
														<ul>
															<li></li>
														</ul>
													</div>
													<div class="lv_schedule_details_btn">
														<div class="lv_btn lv_toppadder40">
															<h5>-</h5>
														</div>
													</div>
												</div>
											</li>

											<li>
												<div class="lv_schedule_details">
													<div class="lv_schedule_details_img">
														<img src="<?= base_url() ?>assets/edm/images/content/finsdemic-thumb-02.png" alt="Event Schedule">
													</div>
													<div class="lv_schedule_details_text">
														<h4>Closing</h4>
														<p>
															<img src="<?= base_url() ?>assets/edm/images/content/time.png" alt="time">&nbsp; 11:45 – 12:00
														</p>
														<ul>
															<li></li>
														</ul>
													</div>
													<div class="lv_schedule_details_btn">
														<div class="lv_btn lv_toppadder40">
															<h5>-</h5>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>


									<div role="tabpanel" class="tab-pane" id="2">
										<ul>
											<li>
												<div class="lv_schedule_details">
													<div class="lv_schedule_details_img">
														<img src="<?= base_url() ?>assets/edm/images/content/finsdemic-thumb-02.png" alt="Event Schedule">
													</div>
													<div class="lv_schedule_details_text">
														<h4>Registration (Log in)</h4>
														<p>
															<img src="<?= base_url() ?>assets/edm/images/content/time.png" alt="time">&nbsp; 09:30 – 10:00
														</p>

														<h4>Opening</h4>
														<p>
															<img src="<?= base_url() ?>assets/edm/images/content/time.png" alt="time">&nbsp; 10:00 – 10:05
														</p>

														<h4>National Anthem</h4>
														<p>
															<img src="<?= base_url() ?>assets/edm/images/content/time.png" alt="time">&nbsp; 10:05 – 10:10
														</p>
														<ul>
															<li></li>
														</ul>
													</div>
													<div class="lv_schedule_details_btn">
														<div class="lv_btn lv_toppadder40">
															<h5>Waiting Lounge</h5> <br /> <br /> - <br /> <br />
															<h5>Indonesia Raya</h5>

														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="lv_schedule_details">
													<div class="lv_schedule_details_img">
														<img src="<?= base_url() ?>assets/edm/images/content/finsdemic-thumb-01.png" alt="Event Schedule">
													</div>
													<div class="lv_schedule_details_text">
														<h4>Video Profile</h4>
														<p><img src="<?= base_url() ?>assets/edm/images/content/time.png" alt="time">&nbsp; 10:10 – 10:15</p>
														<h4>Keynote Speech</h4>
														<p><img src="<?= base_url() ?>assets/edm/images/content/time.png" alt="time">&nbsp; 10:15 – 10:25</p>
														<ul>
															<li></li>
														</ul>
													</div>
													<div class="lv_schedule_details_btn">
														<div class="lv_btn lv_toppadder40">
															<a class="btn_2" href="#">PT. Sarana Multigriya Finansial (Persero)</a><br /><br />
															<a class="btn_2" href="#">Mr. Heliantopo </a><br />
															<h5>Director of Securitization and Financing<br />
																PT. Sarana Multigriya Finansial (Persero)</h5>
															<br />
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="lv_schedule_details">
													<div class="lv_schedule_details_img">
														<img src="<?= base_url() ?>assets/edm/images/content/finsdemic-thumb-04.png" alt="Event Schedule">
													</div>
													<div class="lv_schedule_details_text">
														<h4>CEO Speech</h4>
														<p><img src="<?= base_url() ?>assets/edm/images/content/time.png" alt="time">&nbsp; 10:25 – 10:30</p>
														<br /><br /><br />
														<h4>Video Profile</h4>
														<p><img src="<?= base_url() ?>assets/edm/images/content/time.png" alt="time">&nbsp; 10:30 – 10:35</p>
														<ul>
															<li></li>
														</ul>
													</div>
													<div class="lv_schedule_details_btn">
														<div class="lv_btn lv_toppadder40">
															<a class="btn_2" href="#">Mr. Ardhyanto Budirachman</a> <br />
															<h5>President Director - PT. Adonai Pialang Asuransi</h5>
															<br />
															<a class="btn_2" href="#">Adonai Group</a>
														</div>
													</div>
												</div>
											</li>


											<li>
												<div class="lv_schedule_details">
													<div class="lv_schedule_details_img">
														<img src="<?= base_url() ?>assets/edm/images/content/finsdemic-thumb-01.png" alt="Event Schedule">
													</div>
													<div class="lv_schedule_details_text">
														<h4>Session I:</h4>
														<p>Home Financing Products of SMF. <br /><br />
															<img src="<?= base_url() ?>assets/edm/images/content/time.png" alt="time">&nbsp; 10:35 – 11:05
														</p>
														<ul>
															<li></li>
														</ul>
													</div>
													<div class="lv_schedule_details_btn">
														<div class="lv_btn lv_toppadder40">
															<a class="btn_2" href="#">Mr. Muzammil</a> <br />
															<h5>Division Head of KPR Financing & Acquisition</h5>

														</div>
													</div>
												</div>
											</li>

											<li>
												<div class="lv_schedule_details">
													<div class="lv_schedule_details_img">
														<img src="<?= base_url() ?>assets/edm/images/content/finsdemic-thumb.png" alt="Event Schedule">
													</div>
													<div class="lv_schedule_details_text">
														<h4>Q & A</h4>
														<p>
															<img src="<?= base_url() ?>assets/edm/images/content/time.png" alt="time">&nbsp; 11:05 – 11:45
															<br /><br /><br /><br /><br /><br />
														</p>
														<ul>
															<li></li>
														</ul>
													</div>
													<div class="lv_schedule_details_btn">
														<div class="lv_btn lv_toppadder40">
															<a class="btn_2" href="#">Mrs. Widya Estiningrum</a>
															<h5>Group Head 2 of KPR Financing & Acquisition</h5>
															<br />
															<a class="btn_2" href="#">Mr. Randy Octionandes</a>
															<h5>KPR Financing & Acquisition Division</h5>
														</div>
													</div>
												</div>
											</li>

											<li>
												<div class="lv_schedule_details">
													<div class="lv_schedule_details_img">
														<img src="<?= base_url() ?>assets/edm/images/content/finsdemic-thumb-02.png" alt="Event Schedule">
													</div>
													<div class="lv_schedule_details_text">
														<h4>Closing</h4>
														<p>
															<img src="<?= base_url() ?>assets/edm/images/content/time.png" alt="time">&nbsp; 11:45 – 12:00
														</p>


														<ul>
															<li></li>
														</ul>
													</div>
													<div class="lv_schedule_details_btn">
														<div class="lv_btn lv_toppadder40">
															<h5>-</h5>

														</div>
													</div>
												</div>
											</li>


										</ul>
									</div>
									<div role="tabpanel" class="tab-pane" id="3">
										<ul>
											<li>
												<div class="jumbotron">
													<div class="container">
														<h1 class="display-4">Coming Soon</h1>
														<p class="lead">We will let you know soon.. Don't miss it</p>
													</div>
												</div>
											</li>
										</ul>

									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Event Schedule Wrapper End -->

		<!-- Video Wrapper Start -->
		<div class="lv_video_wrapper lv_toppadder100 lv_bottompadder100">
			<div class="video_box_img_overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="lv_video_box">
							<h1>People Inspire People</h1>
							<h2>Are you ready <span>to join exciting events?</span></h2>
							<div class="clearfix"></div>

							<div class="video_btn_wrapper">
								<a class="btn" href="mailto:finsdemic@gmail.com">join us!</a>
								<a class="btn" href="mailto:finsdemic@gmail.com">finsdemic@gmail.com</a>
								<a class="btn" href="https://api.whatsapp.com/send?phone=6285775277427&text=Hallo%20Saya%20Mau%20Daftar%20Event%20Finsdemic"> 085775277427</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Video Wrapper End -->

	<!-- Pricing Wrapper Start -->
	<div data-scroll-index='4' style="width:100%;float:left;">
		<div class="pricing_section_wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="pricing_heading_wrapper">
							<h1>Price List</h1>
							<p>Please confirm your seat today.<br />
								If you are registering for another attendee, please make sure to fill in all fields as that person by using their login, password and email address. <br />
								This will ensure the attendee receives their registration confirmation and the correct fees are applied.
							</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="price_box1_wrapper">
							<div class="price_box1">
								<h3>Standard Pass</h3>
								<p>IDR. 400.000</p>

								<a class="btn_2" href="#">BUY</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="price_box2_wrapper">
							<div class="price_box2">
								<h3>Standard Pass & Donate</h3>

								<p>IDR. 700.000</p>

								<ul>
									<li>Beneficiary:</li>
									<li>Yayasan Kasih Anak Kanker Indonesia (YKAKI)</li>
									<li>www.ykaki.org</li>
								</ul>
								<a class="btn_2" href="#">BUY</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="price_box3_wrapper">
							<div class="price_box3">
								<h3>Group Pass</h3>

								<p></p>
								<ul>
									<li>You may benefit the price of 3 for every 4 ticket <br /> purchased for the same institution</li>
									<li>Yayasan Kasih Anak Kanker Indonesia (YKAKI)</li>
									<li>Applicable only for Standard Pass.</li>
								</ul>

								</h6>

								<a class="btn_2" href="#">BUY</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Pricing Wrapper End -->
	<!-- Register Form Wrapper Start -->
	<div data-scroll-index='5' style="width:100%; float:left;">
		<div class="lv_register_wrapper lv_toppadder100 lv_bottompadder100">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
						<div class="lv_heading_center">
							<div class="event_schedule_content">
								<div class="form_wrapper">
									<h1>Event Register Form</h1>
									<p>Payment are made only through Bank transfer:</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">

						<div class="lv_regist_form">
							<div class="col-md-6">
								<input type="text" id="uname" placeholder="Full Name*">
							</div>
							<div class="col-md-6">
								<?php $this->load->view('list_state'); ?>

							</div>
							<div class="col-md-6">
								<input type="text" id="umail" placeholder="Your Email*">
							</div>
							<div class="col-md-6">
								<input type="text" id="umail" placeholder="Your City*">
							</div>
							<div class="col-md-6">
								<input type="text" id="unum" placeholder="Mobile Phone No*">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Enter Postal Code">
							</div>
							<div class="col-md-6">
								<select>
									<option>Select Your Event</option>
									<option value="0">...</option>
									<option value="1">......</option>
									<option value="2">.........</option>
								</select>
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Number Of Tickets">
							</div>
							<div class="col-md-12">
								<textarea rows="5" id="msg" placeholder="Your Message"></textarea>
							</div>
							<div class="pricing_button_wrapper">
								<div class="pricing_button">
									<div class="col-md-12">
										<div class="lv_btn text-center">
											<button type="submit" id="lv_submit"> Buy ticket</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Register Form Wrapper End -->
	<!-- Testimonials Wrapper Start -->
	<div data-scroll-index='6' style="width:100%;float:left;">

		<div class="lv_testimonial_wrapper lv_toppadder100 lv_bottompadder100">
			<div class="lv_img_overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="lv_heading_center">
							<div class="testimonial_heading_wrapper">
								<h1>SPONSORS</h1>
							</div>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<img src="<?= base_url() ?>assets/edm/images/content/amu.jpg" height="140px" width="90%" alt="PT. Askrindo Mitra Utama">
						<!-- <img src="<?= base_url() ?>assets/edm/images/content/logo-smf.png" height="140px" alt="PT. Sarana Multigriya Finansial (Persero)"> -->
						<!-- <br /><br /><br /><br /> -->
						<!-- <img src="<?= base_url() ?>assets/edm/images/content/logo-adonai.png" height="140px" alt="PT. Adonai Pialang Asuransi"> -->

					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pleft">
						<div class="sponsore_main_wrapper">
							<div class="">
								<div class="testimonial_heading_wrapper">
									<h2><strong><span>Why Sponsor a Finsdemic Seminar? </span></strong></h2>
									<p>
										<ol class="fa-ul white">
											<li><img src="<?= base_url() ?>assets/edm/images/content/date.png" alt="icon"> Minimum 300 participants in every event.</li>
											<li><img src="<?= base_url() ?>assets/edm/images/content/date.png" alt="icon"> 80% attendees shared the presentation slides with the colleagues.</li>
											<li><img src="<?= base_url() ?>assets/edm/images/content/date.png" alt="icon"> 80% attendees posted or liked the event activity in social media.</li>
											<li><img src="<?= base_url() ?>assets/edm/images/content/date.png" alt="icon"> Over 3,000 page views for every seminar attendee&rsquo;s post in Linkedin.</li>
											<li><img src="<?= base_url() ?>assets/edm/images/content/date.png" alt="icon"> 90% of past attendees plan to attend our future event.</li>
											<li><img src="<?= base_url() ?>assets/edm/images/content/date.png" alt="icon"> Annually hosting 5 to 10 Financial &amp; Insurance events.</li>
										</ol>
									</p>
									<h2><strong>Sponsorship Benefit</strong></h2>
									<ul class="fa-ul white">
										<li><img src="<?= base_url() ?>assets/edm/images/content/date.png" alt="icon"> Company logo and link on the our sponsored event page.</li>
										<li><img src="<?= base_url() ?>assets/edm/images/content/date.png" alt="icon"> Company logo with link on all &ldquo;bulk emails&rdquo; promoting the event blast email.</li>
										<li><img src="<?= base_url() ?>assets/edm/images/content/date.png" alt="icon"> Sponsor mention and logo included in social media pre event promotion.</li>
										<li><img src="<?= base_url() ?>assets/edm/images/content/date.png" alt="icon"> Company logo with link on the registration confirmation sent out to all participants.</li>
										<li><img src="<?= base_url() ?>assets/edm/images/content/date.png" alt="icon"> Well-designed advertorial at beginning of event (log in &amp; waiting lounge)</li>
										<li><img src="<?= base_url() ?>assets/edm/images/content/date.png" alt="icon"> Sponsor logo on speakers&rsquo; location.</li>
										<li><img src="<?= base_url() ?>assets/edm/images/content/date.png" alt="icon"> Company logo, name, and message on the opening and closing slides.</li>
										<li><img src="<?= base_url() ?>assets/edm/images/content/date.png" alt="icon"> Sponsor logo on each slide of presentation.</li>
										<li><img src="<?= base_url() ?>assets/edm/images/content/date.png" alt="icon"> Sponsor mention and logo included in social media post event promotion.</li>
										<li><img src="<?= base_url() ?>assets/edm/images/content/date.png" alt="icon"> Logo included in recorded version of on-demand event.</li>
										<li><img src="<?= base_url() ?>assets/edm/images/content/date.png" alt="icon"> Sponsor can provide a short message to be included in the &ldquo;Thank You&rdquo; email sent to all participants after the event.</li>
										<li><img src="<?= base_url() ?>assets/edm/images/content/date.png" alt="icon"> Sponsor logo on e-certificate sent to all participants.</li>
									</ul>
									<p>Contact us today for an opportunity to design and customize your benefit as our exclusive Sponsor.</p>
								</div>
							</div>

						</div>
					</div>
				</div>
				<br> <br> <br>
				<div class="lv_heading_center">
					<div class="faq_content_wrapper">
						<h1>OUR COLLABORATIONS</h1>
					</div>
				</div>
				<div class="col-md-6" style="text-align: center;">
					<!-- <img src="<?= base_url() ?>assets/edm/images/content/amu.jpg" height="140px" width="90%" alt="PT. Askrindo Mitra Utama"> -->
					<img src="<?= base_url() ?>assets/edm/images/content/logo-smf.png" height="140px" alt="PT. Sarana Multigriya Finansial (Persero)">
				</div>
				<div class="col-md-6" style="text-align: center;">
					<img src="<?= base_url() ?>assets/edm/images/content/logo-adonai.png" height="140px" alt="PT. Adonai Pialang Asuransi">
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonials Wrapper End -->

	<!-- FAQ Wrapper Start -->
	<div data-scroll-index='8' style="width:100%;float:left;">
		<div class="lv_faq_wrapper lv_toppadder100 lv_bottompadder100">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
						<div class="lv_heading_center">
							<div class="faq_content_wrapper">
								<h1>Ask Question?</h1>

							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="accordionFifteen">
							<div class="panel-group" id="accordionFifteenLeft" role="tablist">
								<div class="panel panel-default lv_border_top_radius">
									<div class="panel-heading desktop">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftone" aria-expanded="false" class="lv_border_top_radius">What is virtual seminar ?</a>

										</h4>
									</div>
									<div id="collapseFifteenLeftone" class="panel-collapse collapse in" aria-expanded="false" role="tabpanel">
										<div class="panel-body">
											Virtual seminar is a seminar in which virtual environment is used by the organizer to show, explain or test certain skills that can help others to learn something. The speakers, as well as participants, have to use some effective video conferencing application to communicate with each other face-to-face. Physical attendance is not required at all.
										</div>

									</div>
								</div><!-- /.panel-default -->
								<div class="panel panel-default">
									<div class="panel-heading horn">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftTwo" aria-expanded="false">What virtual seminar platform do you use ?</a>
										</h4>
									</div>
									<div id="collapseFifteenLeftTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;" role="tabpanel">
										<div class="panel-body">
											Currently, we use Zoom cloud meetings. Please use only the latest version.
										</div>
									</div>
								</div><!-- /.panel-default -->
								<div class="panel panel-default">
									<div class="panel-heading bell">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftThree" aria-expanded="false">Which payment methods do you accept ?</a>
										</h4>
									</div>
									<div id="collapseFifteenLeftThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;" role="tabpanel">
										<div class="panel-body">
											Bank transfer only. Please keep the proof of transfer for confirmation purpose.
										</div>
									</div>
								</div><!-- /.panel-default -->
								<div class="panel panel-default">
									<div class="panel-heading bell">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftFour" aria-expanded="false">If I buy “<strong>Standard Pass & Donate</strong>” to whom my donation will be distributed ?</a>
										</h4>
									</div>
									<div id="collapseFifteenLeftFour" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;" role="tabpanel">
										<div class="panel-body">
											Currently, we make donation to <strong>Yayasan Kasih Anak Kanker Indonesia (YKAKI)</strong>. If you choose to donate, we will send the proof of donation (by name basis) to you.
										</div>
									</div>
								</div><!-- /.panel-default -->
								<div class="panel panel-default lv_border_bottom_radius">
									<div class="panel-heading bell">
										<h4 class="panel-title">
											<a class="collapsed lv_border_bottom_radius" data-toggle="collapse" data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftFive" aria-expanded="false">If I cancel my participation, can I get refund ?</a>
										</h4>
									</div>
									<div id="collapseFifteenLeftFive" class="panel-collapse collapse lv_border_bottom_radius" aria-expanded="false" style="height: 0px;" role="tabpanel">
										<div class="panel-body lv_border_bottom_radius">
											You will get a full refund when cancellation is made no later than 2 days prior to the event date.
										</div>
									</div>
								</div><!-- /.panel-default -->
								<div class="panel panel-default lv_border_bottom_radius">
									<div class="panel-heading bell">
										<h4 class="panel-title">
											<a class="collapsed lv_border_bottom_radius" data-toggle="collapse" data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftSix" aria-expanded="false">If How do I get full seminar material ?</a>
										</h4>
									</div>
									<div id="collapseFifteenLeftSix" class="panel-collapse collapse lv_border_bottom_radius" aria-expanded="false" style="height: 0px;" role="tabpanel">
										<div class="panel-body lv_border_bottom_radius">
											We will send seminar material via email or download link.
										</div>
									</div>
								</div><!-- /.panel-default -->
								<div class="panel panel-default lv_border_bottom_radius">
									<div class="panel-heading bell">
										<h4 class="panel-title">
											<a class="collapsed lv_border_bottom_radius" data-toggle="collapse" data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftSeven" aria-expanded="false">If How do I find out about the next seminar ?</a>
										</h4>
									</div>
									<div id="collapseFifteenLeftSeven" class="panel-collapse collapse lv_border_bottom_radius" aria-expanded="false" style="height: 0px;" role="tabpanel">
										<div class="panel-body lv_border_bottom_radius">
											Please join our seminar or subscribe to our newsletter.
										</div>
									</div>
								</div><!-- /.panel-default -->
								<div class="panel panel-default lv_border_bottom_radius">
									<div class="panel-heading bell">
										<h4 class="panel-title">
											<a class="collapsed lv_border_bottom_radius" data-toggle="collapse" data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftEight" aria-expanded="false">If Do you provide in house training ?</a>
										</h4>
									</div>
									<div id="collapseFifteenLeftEight" class="panel-collapse collapse lv_border_bottom_radius" aria-expanded="false" style="height: 0px;" role="tabpanel">
										<div class="panel-body lv_border_bottom_radius">
											You may contact us for further detail.
										</div>
									</div>
								</div><!-- /.panel-default -->
								<div class="panel panel-default lv_border_bottom_radius">
									<div class="panel-heading bell">
										<h4 class="panel-title">
											<a class="collapsed lv_border_bottom_radius" data-toggle="collapse" data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftNine" aria-expanded="false">If Do you plan to hold a non-virtual event in the future ?</a>
										</h4>
									</div>
									<div id="collapseFifteenLeftNine" class="panel-collapse collapse lv_border_bottom_radius" aria-expanded="false" style="height: 0px;" role="tabpanel">
										<div class="panel-body lv_border_bottom_radius">
											We received testimonials that the virtual seminar has provided more flexibility and benefits to participants. Until now, we have not planned to hold a non-virtual seminar
										</div>
									</div>
								</div><!-- /.panel-default -->
								<div class="panel panel-default lv_border_bottom_radius">
									<div class="panel-heading bell">
										<h4 class="panel-title">
											<a class="collapsed lv_border_bottom_radius" data-toggle="collapse" data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftTen" aria-expanded="false">If Do you have an affiliation with any financial association ?</a>
										</h4>
									</div>
									<div id="collapseFifteenLeftTen" class="panel-collapse collapse lv_border_bottom_radius" aria-expanded="false" style="height: 0px;" role="tabpanel">
										<div class="panel-body lv_border_bottom_radius">
											We have no affiliation with any financial association but will support their program.
										</div>
									</div>
								</div>
								<!--end of /.panel-group-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- FAQ Wrapper End -->


		<!-- Latest News Wrapper Start -->
		<div data-scroll-index='7' style="width:100%;float:left;">
			<div class="lv_ltnews_wrapper popup-news lv_toppadder100 lv_bottompadder100">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 lv_full_width">
							<div class="lv_heading_center">
								<div class="latest_news_wrapper">
									<h1>News & Event</h1>
									<p>All about the latest News & All Events from Finsdemic</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="lv_ltnews_box">
								<div class="lv_ltnews_box_img">
									<a href="<?= base_url() ?>assets/edm/images/content/fdc_big1.jpg"><img src="<?= base_url() ?>assets/edm/images/content/fdc_1.jpg"></a>
								</div>
								<div class="lv_ltnews_box_details">
									<span><img src="<?= base_url() ?>assets/edm/images/content/date.png" alt="news">11 August 2020</span>
									<h4>PT Sarana Multigriya Finansial (Persero) </h4>
									<p>Integrasi Kredit Modal Kerja dan Solusi Asuransi untuk Mendukung Program Pemerintah dalam Penyaluran Pembiayaan Jangka Panjang di Sektor Perumahan.
										Studi kasus: PT. Sarana Multigriya Finansial (Persero).</p>
									<div class="pricing_button_wrapper">
										<div class="pricing_button">
											<div class="lv_btn">
												<a class="btn_2" href="#">read more</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="lv_ltnews_box">
								<div class="lv_ltnews_box_img">
									<a href="<?= base_url() ?>assets/edm/images/content/finsdemic_bignews.jpg"><img src="<?= base_url() ?>assets/edm/images/content/finsdemic_upcomevent.jpeg"></a>
								</div>
								<div class="lv_ltnews_box_details">
									<span><img src="<?= base_url() ?>assets/edm/images/content/date.png" alt="news">T.B.A</span>
									<h4>Event Up</h4><br />
									<p>Risiko Kredit Bank : <br /> Tantangan dan Peluangnya di Era Pandemi </p>
									<div class="pricing_button_wrapper">
										<div class="pricing_button">
											<div class="lv_btn">
												<a class="btn_2" href="#">read more</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="lv_ltnews_box">
								<div class="lv_ltnews_box_img">
									<a href="<?= base_url() ?>assets/edm/images/content/finsdemic-thumb-02.png"><img src="<?= base_url() ?>assets/edm/images/content/finsdemic-thumb-02.png"></a>
								</div>
								<div class="lv_ltnews_box_details">
									<span><img src="<?= base_url() ?>assets/edm/images/content/date.png" alt="news">T.B.A</span>
									<h4>Coming Soon</h4>
									<p>Next Events.</p>
									<div class="pricing_button_wrapper">
										<div class="pricing_button">
											<div class="lv_btn">
												<a class="btn_2" href="#">read more</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- Latest News Wrapper End -->
		<!-- About Wrapper Start -->
		<div data-scroll-index='1' style="width:100%;float:left;">
			<div class="lv_about_wrapper lv_toppadder100 lv_bottompadder100">
				<div class="container">
					<div class="row">
						<div class="about_content_wrapper">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 lv_toppadder50">
								<div class="lv_heading_left">
									<div class="about_heading_wrapper">
										<h1>About Finsdemic</h1>
									</div>
								</div>
								<div class="lv_about_info">
									<span>Financial Insurance Academy</span>
									<p>
										We are an academy which designs and delivers impactful training events based on robust thinking, sound planning and an obsessive attention to detail. Our area of expertise is on delivering various aspects of financial insurance business. <br /><br />

										We create events and experiences that will astound you. These range from inter-office discussion and training for small groups to large scale experiential events with an audience of hundreds from various places or countries. From something as simple as focus group discussions on “Trade Credit Insurance” to something as complex as delivering an international seminar covering the “Comprehensive Approach of Supply Chain and Working Capital Finance” We gather experts and cases of Credit, Guarantee, Trade, Insurance, Reinsurance and Information Technology from all over the world to the benefit of the seminar participants.<br /><br />

										We approach all of our events with the end in mind. As you depart in our meeting lounge, we understand what exactly that you want to experience and gain as a result of having attended. We give you the assurance for your satisfactions, knowledge updates and return on investment, they are at the heart of every aspect of our event.
										.</p>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About Wrapper End -->

			<!-- Newsletter Wrapper Start -->
			<div class="lv_newsletter_wrapper">
				<div class="newsletter_img_overlay">
					<div class="container">
						<div class="row">
							<div class="lv_newsletter_box">
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
									<h2>Subscribe on our Newsletter</h2>
								</div>
								<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
									<form>
										<input type="text" placeholder="Enter Your Email">
										<div class="lv_btn">
											<div class="newsletter_btn">
												<div class="newsletter_btn_wrapper">
													<a class="btn" href="#">Subscribe</a>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Newsletter Wrapper End -->
			<!-- Fliker Gallery Wrapper Start -->
			<div class="lv_flickr_wrapper lv_toppadder100 lv_bottompadder100">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="lv_heading_left">
								<h1>Finsdemic Gallery</h1>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="lv_flickr_slider flickr-gallery">
								<div class="owl-carousel owl-theme">
									<div class="item">
										<a href="<?= base_url() ?>assets/edm/images/content/fdc_big1.jpg" title="Webinar Banner">
											<img src="<?= base_url() ?>assets/edm/images/content/fdc_1.jpg" alt="finsdemic">
										</a>
									</div>
									<div class="item">
										<a href="<?= base_url() ?>assets/edm/images/content/fdc_big2.jpg" title="Sesi Zooom Meeting Webinar"><img src="<?= base_url() ?>assets/edm/images/content/fdc_2.jpg" alt="finsdemic"></a>
									</div>
									<div class="item">
										<a href="<?= base_url() ?>assets/edm/images/content/fdc_big3.jpg" title="Sesi Zooom Meeting Webinar"><img src="<?= base_url() ?>assets/edm/images/content/fdc_3.jpg" alt="finsdemic"></a>
									</div>
									<div class="item">
										<a href="<?= base_url() ?>assets/edm/images/content/fdc_big4.jpg" title="Sesi Zooom Meeting Webinar"><img src="<?= base_url() ?>assets/edm/images/content/fdc_4.jpg" alt="finsdemic"></a>
									</div>
									<div class="item">
										<a href="<?= base_url() ?>assets/edm/images/content/fdc_big5.jpg" title="Sesi Zooom Meeting Webinar"><img src="<?= base_url() ?>assets/edm/images/content/fdc_5.jpg" alt="finsdemic"></a>
									</div>
									<div class="item">
										<a href="<?= base_url() ?>assets/edm/images/content/fdc_big6.jpg" title="Sesi Zooom Meeting Webinar"><img src="<?= base_url() ?>assets/edm/images/content/fdc_6.jpg" alt="finsdemic"></a>
									</div>
									<div class="item">
										<a href="<?= base_url() ?>assets/edm/images/content/fdc_big7.jpg" title="SMF"><img src="<?= base_url() ?>assets/edm/images/content/fdc_7.jpg" alt="finsdemic"></a>
									</div>
									<div class="item">
										<a href="<?= base_url() ?>assets/edm/images/content/fdc_big8.jpg" title="Finsdemic"><img src="<?= base_url() ?>assets/edm/images/content/fdc_8.jpg" alt="finsdemic"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Fliker Gallery Wrapper End -->
		<!-- Map Wrapper Start -->
		<div data-scroll-index='9' style="width:100%;float:left;">
			<!-- Map Wrapper End -->
			<!-- contact section start -->
			<div class="contact_sec_wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="contact1_wrapper">
								<div class="contact1">
									<div class="contact_box">
										<img src="<?= base_url() ?>assets/edm/images/content/contact_img1.png" alt="contact_img" />
									</div>
									<h3>Address</h3>
									<p>Epiwalk 3rd. Floor, A 306<br>
										Kawasan Rasuna Epicentrum <br>
										Jalan HR. Rasuna Said, Kuningan
										Jakarta Selatan 12940

									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="contact1_wrapper">
								<div class="contact1">
									<div class="contact_box">
										<img src="<?= base_url() ?>assets/edm/images/content/contact_img2.png" alt="contact_img" />
									</div>
									<h3>Phone</h3>
									<p>+6285213793434</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="contact1_wrapper">
								<div class="contact1">
									<div class="contact_box">
										<img src="<?= base_url() ?>assets/edm/images/content/contact_img3.png" alt="contact_img" />
									</div>
									<h3>Fax</h3>
									<p>+62-21-5682703</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="contact1_wrapper">
								<div class="contact1">
									<div class="contact_box">
										<img src="<?= base_url() ?>assets/edm/images/content/contact_img4.png" alt="contact_img" />
									</div>
									<h3>Email</h3>
									<span><a href="#">info@finsdemic.com</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- contact section end -->
		<!-- Tweet Feed Wrapper Start -->
		<div data-scroll-index='10' style="width:100%;float:left;">
			<div class="lv_twtfd_wrapper lv_toppadder100 lv_bottompadder100">
				<div class="container">
					<div class="row">
						<div id="myCarousel" class="vertical-slider carousel vertical slide col-md-12" data-ride="carousel">

							<!-- Carousel items -->
							<div class="carousel-inner">

								<div class="item active">
									<div class="row">
										<div class="col-xs-12 col-sm-1 col-md-1">
											<a href="<?= base_url() ?>index.php/Archive/v11082020"><img src="<?= base_url() ?>assets/edm/images/content/finsdemic_news.jpg" width="80px" class="twitter icon" alt="archive icon"></a>
										</div>
										<div class="col-xs-12 col-sm-9 col-md-9">
											<div class="twit_slider_content">
												<small>@Financial Insurance Academy</small>
												<p>Integrasi Kredit Modal Kerja dan Solusi Asuransi untuk Mendukung Program Pemerintah dalam Penyaluran Pembiayaan Jangka Panjang di Sektor Perumahan.
													Studi kasus: PT. Sarana Multigriya Finansial (Persero) <br /> [<a href="<?= base_url() ?>index.php/Archive/v11082020">Go Details</a>]</p>
												<span>11 August 2020</span>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Tweet Feed Wrapper End -->
		<!-- Footer Wrapper Start -->
		<?php $this->load->view('iFoot'); ?>
		<!-- Footer Wrapper End -->
		<?php $this->load->view('iBottom'); ?>