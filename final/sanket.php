
<?php $title = 'Sanket'; include 'header.php'; ?>

	<section class="about-head">
		<div class="container-fluid">
			<div class="about-title">
				<h1>Sanket</h1>
			</div>
		</div>
	</section>

	<section class="about-section3 mt-5p">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3">
					<img src="img/pratham.jpg" class="img-responsive mt-25p">
				</div>
				<div class="col-sm-12 col-md-9">
					<div class="section3-content">
						<p>"Sanket", literally meaning "signal" in Sanskrit, is the name of the indigenously developed Antenna Deployment System (ADS) which is used to transmit signals from the satellite to the Earth. The Antenna Deployment System has become an essential component of any nano-satellite design due to space constraints during launch. About 20% of CubeSat missions have failed due to failure in the communication system. Thus, there is a pressing need for a reliable communications system for CubeSats. Our Antenna Deployment System module is developed as an independent module compatible with standard CubeSat sizes of 1U, 2U, and 3U. <br>
						We are planning to ground test this technology. For the same, we are designing and manufacturing a CubeSat to provide appropriate interface to the ADS for testing purposes and call this the Auxiliary system(AUX). Post successful testing, this technology will be transferred to the Indian space industry to promote future CubeSat missions in India.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="about-section2 dark-bg text-white">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3 col-md-push-9">
					<img src="img/pratham.jpg" class="img-responsive mt-25p">
				</div>
				<div class="col-sm-12 col-md-9 col-md-pull-3">
					<div class="section3-content">
						<p>The Antenna Deployment System comprises an in-house manufactured antenna, support and interface structures for the antenna, a deployment mechanism and the ADS PCB. The antenna, made of stainless-steel tape spring, is rolled and held inside the module with the help of a flexible PVC/PVA sheet and a nylon thread.The retention and release mechanism uses a nichrome burn-wire design that releases the stowed antenna by thermally cutting a nylon thread held in tension when current is passed through the nichrome wire. Deployment is detected using an SPDT switch, one for each pole of the dipole antenna.</p>
						<p>A single deployable dipole antenna designed to work in the UHF band (435-438 MHz) will be used to communicate with the ground station. A single transceiver, coupled with the communication microcontroller, will handle both the uplink as well as the downlink channel. The communication microcontroller will also collect the HM data from the AUX microcontroller, which will be transmitted along with the identity (name+callsign) as OOK modulated downlink.</p>
					</div>
				</div>
				<div class="col-sm-12 col-md-3">
					<img src="img/pratham.jpg" class="img-responsive mb-3p">
				</div>
				<div class="col-sm-12 col-md-9">
					<div class="section3-content">
						<p>The CubeSat is made by Al-6061 and the PCB of FR04. Polyoxymethylene (POM) is also used for some parts. Various simulations like the Static, Harmonic, Modal, Random vibrations simulations for PSLV launch loads are performed on the structure and stress analysis is carried out to check the reliability of the structure.<br>
						The microcontroller is responsible for scheduling tasks, external communication, collecting HM Data, and enabling the power supply to the Communication and ADS PCBs.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="text-center mt-5p">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="ft-18 mb-3p">The design process we follow is based on the V-model derived from Systems Engineering principles, and system requirements are prepared to use at each development stage for Quality Assurance (QA). An Interface ControlDocument (ICD) is maintained, which defines how all parts integrate into the final design. Risk analysis is performed on the system to identify and take steps to eliminate or reduce failures. Failure Mode Effect and Criticality Analysis is performed to identify and take actions to eliminate or reduce failures.</p>
				</div>
			</div>
		</div>
	</section>



<?php include 'footer.php'; ?>
