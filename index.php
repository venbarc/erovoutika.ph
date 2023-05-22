<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description"
		content="Erovoutika is a leading provider of innovative robotics and automation solutions for businesses worldwide. Our expert team of engineers and designers create custom automation systems to help companies streamline their operations and improve efficiency.">
	<meta name="keywords"
		content="Erovoutika, Robotics, Automation, Solutions, Engineering, Design, Custom, Streamline, Efficiency">
	<meta name="author" content="Erovoutika Robotics and Automation Solutions">
	<meta name="robots" content="index, follow">
	<meta property="og:title"
		content="Erovoutika Robotics and Automation  Solutions -One-Stop-Shop For Innovative  Solutions">
	<meta property="og:description"
		content="Erovoutika is a leading provider of innovative robotics and automation solutions for businesses worldwide. Our expert team of engineers and designers create custom automation systems to help companies streamline their operations and improve efficiency.">
	<meta property="og:url" content="https://www.erovoutika.ph/">
	<meta property="og:type" content="website">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon_io/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon_io/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon_io/favicon-16x16.png">
	<link rel="manifest" href="/assets/images/favicon_io/site.webmanifest">
	<title>Erovoutika | Home</title>
	<?php
	include "include/header_link.php";
	?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<!-- Messenger Chat Plugin Code -->
	<div id="fb-root"></div>

	<!-- Your Chat Plugin code -->
	<div id="fb-customer-chat" class="fb-customerchat">
	</div>

	<script>
		var chatbox = document.getElementById('fb-customer-chat');
		chatbox.setAttribute("page_id", "1284502898320071");
		chatbox.setAttribute("attribution", "biz_inbox");
	</script>

	<!-- Your SDK code -->
	<script>
		window.fbAsyncInit = function () {
			FB.init({
				xfbml: true,
				version: 'v16.0'
			});
		};

		(function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>


	<div class="page-body-wrapper">
		<section id="home" class="home">

			<!-- HERO -->
			<?php
			include "include/navbar.php";
			include "hero.php";
			?>
			<!-- HERO -->
		</section>

		<section class="our-services" id="services">
			<div class="container">
				<div class="section-title" data-aos="fade-up">
					<h2 style="color:darkblue;">Services</h2>
					<p>Good Service is Good Business</p>
				</div>

				<div class="row" data-aos="fade-up">
					<div class="col-sm-4 text-center text-lg-left">
						<div class="services-box" data-aos="fade-down" data-aos-easing="linear"
							data-aos-duration="1500">
							<img src="assets/images/services/train-cert.webp" alt="integrated-marketing"
								data-aos="zoom-in">
							<h6 class="text-dark mb-3 mt-4 font-weight-medium">Training and Certifications
							</h6>
							<p>
								Training to develop new skills and advance their careers There is specialized
								certification
								for training, learning and development professionals who are seeking ways to increase
								business
								performance through innovative and collaborative training methods
							</p>
						</div>
					</div>
					<div class="col-sm-4 text-center text-lg-left">
						<div class="services-box" data-aos="fade-down" data-aos-easing="linear"
							data-aos-duration="1500">
							<img src="assets/images/services/auto-solution.webp" alt="design-development"
								data-aos="zoom-in">
							<h6 class="text-dark mb-3 mt-4 font-weight-medium">Automation Solutions
							</h6>
							<p>
								Automated Solutions develops and sells PLC driver and industrial communications software
								products
								for industrial communications software products for industrial and process automation.
							</p>
						</div>
					</div>
					<div class="col-sm-4 text-center text-lg-left">
						<div class="services-box" data-aos="fade-down" data-aos-easing="linear"
							data-aos-duration="1500">
							<img src="assets/images/services/robotic.webp" alt="digital-strategy" data-aos="zoom-in">
							<h6 class="text-dark mb-3 mt-4 font-weight-medium">Robotics
							</h6>
							<p>
								Robotics is the intersection of science, engineering and technology that produces
								machines,
								called robots, that replicate or substitute for human actions.
							</p>
						</div>
					</div>
				</div>
				<div class="row" data-aos="fade-up">
					<div class="col-sm-4 text-center text-lg-left">
						<div class="services-box  pb-lg-0" data-aos="fade-down" data-aos-easing="linear"
							data-aos-duration="1500">
							<img src="assets/images/services/research-dev.webp" alt="digital-marketing"
								data-aos="zoom-in">
							<h6 class="text-dark mb-3 mt-4 font-weight-medium">Research and Development
							</h6>
							<p>
								Research and development include activities that companies undertake to innovate and
								introduce new
								products and services. It is often the first stage in the development process.
							</p>
						</div>
					</div>
					<div class="col-sm-4 text-center text-lg-left">
						<div class="services-box pb-lg-0" data-aos="fade-down" data-aos-easing="linear"
							data-aos-duration="1500">
							<img src="assets/images/services/cyber-sec.webp" alt="growth-strategy" data-aos="zoom-in">
							<h6 class="text-dark mb-3 mt-4 font-weight-medium">Cybersecurity
							</h6>
							<p>
								Cybersecurity is the application of technologies, processes, and controls to protect
								systems,
								networks, programs, devices, and data from cyberattacks.
							</p>
						</div>
					</div>
					<div class="col-sm-4 text-center text-lg-left">
						<div class="services-box pb-0" data-aos="fade-down" data-aos-easing="linear"
							data-aos-duration="1500">
							<img src="assets/images/services/blockchain.webp" alt="saving-strategy" data-aos="zoom-in">
							<h6 class="text-dark mb-3 mt-4 font-weight-medium">Blockchain
							</h6>
							<p>
								Blockchains are best known for their crucial role in cryptocurrency systems, such as
								Bitcoin,
								for maintaining a secure and decentralized record of transactions.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="our-about" id="about">
			<div class="container">
				<div class="row">
					<div class="col-sm-6" data-aos="fade-up">
						<div class="section-title" data-aos="fade-up">
							<h2 style="color:darkblue;">About</h2>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span style="font-size: 20px; font-weight: 600; color: darkblue;">Our aim </span> <br>
								&nbsp;&nbsp;
								<h5 style="font-style: italic;">
									is to assist our clients in getting their needs and requirements in the easiest and
									fastest
									possible time in a most professional manner. We provide the highest quality service
									at the most reasonable cost.
								</h5>
							</div>
							<div class="col-md-6">
								<span style="font-size: 20px; font-weight: 600; color: darkblue;"> Erovoutika</span><br>
								&nbsp;&nbsp;
								<h5 class="h5-mobile" style="font-style: italic;">
									a respected and experienced Automation and Robotics Company. Our highly
									professional teams, with in-depth knowledge of each jurisdiction, has been
									successfully deliver customer needs
								</h5>
							</div>
						</div>


					</div>
					<div class="col-sm-6 text-right" data-aos="flip-left" data-aos-easing="ease-out-cubic"
						data-aos-duration="2000">

						<input id="card-one" class="hidden" type="radio" name="ok-button" checked>
						<input id="card-two" class="hidden" type="radio" name="ok-button">
						<input id="card-three" class="hidden" type="radio" name="ok-button">
						<input id="card-four" class="hidden" type="radio" name="ok-button">
						<input id="card-five" class="hidden" type="radio" name="ok-button">
						<input id="card-six" class="hidden" type="radio" name="ok-button">

						<div class="container-abt">
							<div class="inner inner-one">
								<div class="box-abt">
									<div class="triangle">
									</div>
									<p class="number">Expertise</p>
									<i class="start-quote fas fa-quote-left"></i>
									<p class="quote">Erovoutika is a respected and experienced Automation and Robotics
										Company.
										Our highly professional team, with in-depth knowledge of each jurisdiction, has
										been
										successfully deliver customer needs.</p>
									<label class="button-abt" for="card-two">
										<p>next</p>
									</label>
								</div>
							</div>
							<div class="inner inner-two">
								<div class="box-abt">
									<div class="triangle">
									</div>
									<p class="number">Efficiency</p>
									<i class="start-quote fas fa-quote-left"></i>
									<p class="quote">Our aim is to assist our clients in getting their nees and
										requirement
										in the quickest possible time frame, in the most professional manner. We pride
										ourselves
										on providing the highest qualuity service, at the most reasonable cost.
									</p>
									<label class="button-abt" for="card-three">
										<p>next</p>
									</label>
								</div>
							</div>
							<div class="inner inner-three">
								<div class="box-abt">
									<div class="triangle">
									</div>
									<p class="number">Competitive Prices</p>
									<i class="start-quote fas fa-quote-left"></i>
									<p class="quote">Erovoutika Services guarantee no hidden fees with a wide selection
										of quality
										services. We are able to offer prices that are transparent, intermediary free,
										and among the most competitive </p>
									<label class="button-abt" for="card-four">
										<p>next</p>
									</label>
								</div>
							</div>
							<div class="inner inner-four">
								<div class="box-abt">
									<div class="triangle">
									</div>
									<p class="number">Confidentiality</p>
									<i class="start-quote fas fa-quote-left"></i>
									<p class="quote">Confidentiality is one of the most important aspects of our work.
										We guarantee the privacy of our customers.</p>
									<label class="button-abt" for="card-five">
										<p>next</p>
									</label>
								</div>
							</div>
							<div class="inner inner-five">
								<div class="box-abt">
									<div class="triangle">
									</div>
									<p class="number">Comprehensive Support</p>
									<i class="start-quote fas fa-quote-left"></i>
									<p class="quote">Our Mission is to provide quality services and maximum support for
										all our dients/companies.
										No matter how simple or particular your needs are, our experienced team can help
										you so much more than the expected service output.</p>
									<label class="button-abt" for="card-one">
										<p>next</p>
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="our-portfolio" id="portfolio">
			<div class="container">
				<div class="row mb-5">
					<div class="col-sm-12">
						<div class="d-sm-flex justify-content-between align-items-center mb-2">

							<div class="section-title" data-aos="fade-up">
								<h2 style="color:darkblue;">Our Portfolio</h2>
							</div>
							<!--div><a href="#" class="btn" id="btn-des2">View more</a></div-->
						</div>
					</div>
				</div>
			</div>
			<div class="mb-5" data-aos="fade-up">

				<div class="carousel-portfolio owl-carousel">
					<div class="item">
						<img src="assets/images/porfolio/Tempo/auto-2.webp" alt="slider">
					</div>
					<div class="item">
						<img src="assets/images/porfolio/Tempo/auto-3.webp" alt="slider">
					</div>
					<div class="item">
						<img src="assets/images/porfolio/Tempo/auto-4.webp" alt="slider">
					</div>
					<div class="item">
						<img src="assets/images/porfolio/Tempo/auto-5.webp" alt="slider">
					</div>
					<div class="item">
						<img src="assets/images/porfolio/robotics/robotic1.webp" alt="slider">
					</div>
					<div class="item">
						<img src="assets/images/porfolio/robotics/robotic2.webp" alt="slider">
					</div>
					<div class="item">
						<img src="assets/images/porfolio/robotics/robotic3.webp" alt="slider">
					</div>
					<div class="item">
						<img src="assets/images/porfolio/robotics/robotic4.webp" alt="slider">
					</div>
					<div class="item">
						<img src="assets/images/porfolio/robotics/robotic5.webp" alt="slider">
					</div>
					<div class="item">
						<img src="assets/images/porfolio/robotics/robotic6.webp" alt="slider">
					</div>
					<div class="item">
						<img src="assets/images/porfolio/Trainings/training1.webp" alt="slider">
					</div>
					<div class="item">
						<img src="assets/images/porfolio/Trainings/training2.webp" alt="slider">
					</div>
					<div class="item">
						<img src="assets/images/porfolio/Trainings/training3.webp" alt="slider">
					</div>
				</div>


			</div>
	</div>
	</section>

	<section class="awards" id="awards">
		<div class="container">
			<div class="row  mt-md-0 mt-lg-4">
				<div class="col-sm-6 text-white" data-aos="fade-up">

					<h3 class="font-weight-medium">Erovoutika awards <br> and Accreditation</h3>
					<ul class="flipster-custom-nav">
						<li class="flipster-custom-nav-item">
							<a href="javascript:;" class="flipster-custom-nav-link active" title="2"></a>
						</li>
						<li class="flipster-custom-nav-item">
							<a href="javascript:;" class="flipster-custom-nav-link" title="0"></a>
						</li>
						<li class="flipster-custom-nav-item">
							<a href="javascript:;" class="flipster-custom-nav-link" title="1"></a>
						</li>
						<li class="flipster-custom-nav-item">
							<a href="javascript:;" class="flipster-custom-nav-link" title="3"></a>
						</li>
						<li class="flipster-custom-nav-item">
							<a href="javascript:;" class="flipster-custom-nav-link" title="4"></a>
						</li>
					</ul>
				</div>
				<div class="col-sm-6" data-aos="fade-up">
					<div id="awards-flipster">
						<ul>
							<li>
								<div class="awards-item">
									<img src="assets/images/awards/award1.webp" alt="icon" class="awards-icons">
									<h6 class="awards-author"> <br><br>
										PESMS Best Choice Awardee 2020-2021</h6>
								</div>
							</li>
							<li>
								<div class="awards-item">
									<img src="assets/images/awards/award2.webp" alt="icon" class="awards-icons">
									<h6 class="awards-author"> <br><br>
										CompTIA Authorized Partner</h6>

								</div>
							</li>
							<li>
								<div class="awards-item">
									<img src="assets/images/awards/award3.webp" alt="icon" class="awards-icons">
									<h6 class="awards-author">Best Automation and Robotics Control Systems and Training
										Programs Provider
										Q Asia’s Quality Excellence Awardee 2020-2021</h6>
								</div>
							</li>
							<li>
								<div class="awards-item">
									<img src="assets/images/awards/award4.webp" alt="icon" class="awards-icons">
									<h6 class="awards-author"> <br><br>
										CPD PROVIDER ACCREDITATION NO. ECE - 2022-014</h6>
								</div>
							</li>
							<li>
								<div class="awards-item">
									<img src="assets/images/awards/award5.webp" alt="icon" class="awards-icons">
									<h6 class="awards-author"> <br>
										Philippine Social Media Awards Electronics and Robotics Company Star Brand
										Awardee 2020</h6>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="clients pt-5 mt-5" data-aos="fade-up" data-aos-offset="-400">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="client-title">INDUSTRY PARTNERS</h3>

					<div class="d-sm-flex justify-content-between align-items-center">
						<img src="assets/images/clients/client-1.webp" alt="" class="p-2 p-lg-0" data-aos="fade-down"
							data-aos-offset="-800">
						<img src="assets/images/clients/client-2.webp" alt="" class="p-2 p-lg-0" data-aos="fade-up"
							data-aos-offset="-800">
						<img src="assets/images/clients/client-3.webp" alt="" class="p-2 p-lg-0" data-aos="fade-down"
							data-aos-offset="-800">
						<img src="assets/images/clients/client-4.webp" alt="" class="p-2 p-lg-0" data-aos="fade-up"
							data-aos-offset="-800">
						<img src="assets/images/clients/client-5.webp" alt="" class="p-2 p-lg-0" data-aos="fade-down"
							data-aos-offset="-800">
						<img src="assets/images/clients/client-6.webp" alt="" class="p-2 p-lg-0" data-aos="fade-down"
							data-aos-offset="-800">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="univ-logo" id="univ-logo">
		<div class="row" data-aos="fade-up" data-aos-offset="-500">
			<div class="col-sm-12">
				<h3 class="univ-title">ACADEME PARTNERS</h3>

				<div class="carousel-logo owl-carousel">
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo1.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo2.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo3.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo4.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo5.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo6.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo7.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo8.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo9.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo10.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo11.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo12.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo13.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo14.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo15.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo16.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo17.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo18.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo19.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo20.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo21.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo22.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo23.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo24.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo25.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo26.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo27.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo28.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo29.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo30.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo31.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo32.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo33.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo34.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo35.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo36.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo37.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo38.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo39.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo40.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo41.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo42.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo43.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo44.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo45.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo46.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo47.webp" alt="slider">
						</div>
					</div>
					<div class="card-logo">
						<div class="item">
							<img src="assets/images/logo/universities-logo/univ-logo48.webp" alt="slider">
						</div>
					</div>
				</div>

				<!--div class="container-modal">
								<input type="checkbox" id="toggle">
								<label for="toggle">View All</label>
								<dialog>
									<label for="toggle">close</label>
										<img src="assets/images/logo/SAMPLEIMG-LOGO.webp" alt="">
								</dialog>
							</div-->

			</div>
		</div>
	</section>
	<!-- HERO -->
	<?php
	include "news.php";
	?>
	<!-- HERO -->

	<section class="contactus" id="contact">
		<div class="container">
			<div class="row mb-5 pb-5 pt-3">
				<div class="col-sm-7" data-aos="fade-up" data-aos-offset="-500">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3866.0766073546015!2d121.12086002088876!3d14.306981544748252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d9fea1059cc9%3A0xb25007368abcb38a!2sErovoutika%20Robotics%20and%20Automation%20Solutions!5e0!3m2!1sen!2sus!4v1665650025996!5m2!1sen!2sus"
						style="border:0;" allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="col-sm-5" data-aos="fade-up" data-aos-offset="-500">
					<h3 class="font-weight-medium text-dark mt-5 mt-lg-0">Got A Problem ?</h3>
					<h5 class="text-dark mb-5"> Contact Erovoutika here</h5>
					<form action="forms/contact.php" method="post" role="form" class="php-email-form">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" name="name" class="form-control" id="name"
										placeholder="Your Name" required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="email" class="form-control" name="email" id="email"
										placeholder="Your Email" required>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<textarea class="form-control" name="message" rows="5" placeholder="Message"
										required></textarea>
								</div>
							</div>
							<div class="col-sm-12">
								<div id="contact-btn" class="text-center"><button type="submit">Send Message</button>
								</div>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</section>
	</div>


	<?php
	include "include/footer.php";
	include "include/footer_link.php";
	?>
</body>

</html>