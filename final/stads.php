
<?php $title = 'STADS'; include 'header.php'; ?>

	<section class="about-head">
		<div class="container-fluid">
			<div class="about-title">
				<h1>Star Tracker based Attitude Determination System</h1>
			</div>
		</div>
	</section>

	<section class="text-center mt-5p">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="ft-18 mb-3p">Attitude refers to the orientation of the satellite with respect to a predefined reference frame. There are many subsystems within the satellite which need to be pointed in the correct orientation to function, such as the antenna, docking systems, spectrometers, electron sensors, etc. All of these subsystems therefore, depend on the satellite’s attitude. This makes attitude determination one of the most essential subsystems in a satellite. A Star Tracker based Attitude Determination System (STADS) is a device that provides a very accurate estimate of the satellite’s orientation in space.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="about-section2 dark-bg text-white">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-md-push-6">
					<div class="section2-img">
						<img src="img/pratham.jpg" class="section2-img1">
						<img src="img/pratham.jpg" class="section2-img2">
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-md-pull-6">
					<div class="section2-content">
						<p>A star tracker makes use of numerous stars while estimating attitude. The greater number of data points allow it to achieve greater accuracy than the traditional methods that involve a combination of the sun sensor and magnetometer, which were used in Pratham. Such a method requires the use of the direction of the Earth’s magnetic field in addition to the direction vector with respect to the Sun for attitude determination. However, such a sun-sensor and a magnetometer setup cannot be used for deep space missions due to the absence of a reference magnetic field in interplanetary space.</p>
						<p>STADS processes the images of stars taken on-board the satellite, and subsequently extracts the positions of the stars on the image to further estimate the orientation of the satellite We are currently designing a system that would perform this entire step in under approximately 250ms, thereby allowing for an update rate of 4 Hz.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="about-section1">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<img class="section1-img img-responsive" src="img/pratham.jpg">
					<img class="section1-img img-responsive" src="img/pratham.jpg">
				</div>
				<div class="col-sm-6 col-md-3">
					<img class="section1-img img-responsive" id="mid-img" src="img/pratham.jpg">
				</div>
				<div class="col-sm-12 col-md-1"></div>
				<div class="col-sm-12 col-md-5">
					<div class="section1-content">
						<p>The system first utilizes a monochrome CMOS sensor to capture an image of its field of view. To prevent the effects of stray light on the sensor, an opto-mechanical device called the baffle is used. The stars are characterised as white blobs on a black background. A centroid extraction algorithm is used on these images to obtain the spatial coordinates of the stars by detecting the “bright blobs” in the images; this process is termed as “Centroiding”.</p>
						<p>Unit vectors are subsequently generated using these spatial coordinates that represent direction vectors emanating from the center of the sensor and pointing out towards the respective star on the celestial sky (Figure 1). These vectors are termed as body-frame vectors. A star matching algorithm subsequently matches these detected stars to known stars from a locally stored star catalogue. Once the stars from the image have been matched with Star IDs from the catalogue, the direction vectors of these stars are obtained from the star catalogue in the predefined reference frame, called the inertial-frame vectors. These body-frame vectors and the corresponding inertial-frame vectors are given as input to an estimation algorithm. The estimation algorithm subsequently calculates the quaternion, a mathematical construct that represents the rotation between the body-frame and the inertial-frame. This quaternion represents the orientation of the satellite, which is given as output of the entire STADS system to the satellite it is encased in.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="dark-bg text-white text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="ft-18 mt-5p">Currently, the team is in the design phase, and has coded all of the algorithms on a high-level software framework. These algorithms are currently being tested, and the necessary parameters are being tuned. Following this, all of the algorithms will be coded on hardware components. This is done to capture and analyse the algorithm’s performance, which can warrant further optimization if required.</p>
					<p class="ft-18 mb-3p">Our team is among the first in India to work on developing such a device. As a result, the complexity of our mission - to indigenously  design and manufacture a low-cost star tracker, is further exacerbated due to the lack of  standard resources, and mentors with experience in dealing with similar space systems. However, all of the knowledge that the team has gained in the past, in addition to a strong, positive working environment within the team, keeps us motivated to solve the challenges at hand and give our maximum efforts at realizing our mission.Feel free to contact us if you have any doubts or just want to have an interesting conversation about STADS.</p>
				</div>
			</div>
		</div>
	</section>

<?php include 'footer.php'; ?>
