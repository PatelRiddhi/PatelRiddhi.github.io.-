		<!-- content 
			================================================== -->
		<div id="content">
			<div class="inner-content">
				<div class="about-page">

					<div class="about-box">
						<div class="about-content">
							<div class="about-section">
<?php
	foreach ($about as $row)
	{
?>	
								<img alt="" src="<?php echo base_url().$row['image']; ?>">
								<h1><?php echo $row['title']; ?></h1>
								<p><?php echo $row['description']; ?></p>								
							</div>
<?php
	}
?>
							<div class="about-section last-section">
								<h1>Meet The Team</h1>
								<div class="team-members">
									<div class="row">
<?php
	foreach ($team as $row) 
	{
?>
										<div class="col-md-4">
											<div class="team-post">
												<img alt="" src="<?php echo base_url().$row['image']; ?>" height="120" width="120">
												<div class="team-hover">
													<div class="team-data">
														<h3><?php echo $row['name']; ?></h3>
														<span><?php echo $row['designation']; ?></span>
													</div>
												</div>
											</div>											
										</div>
<?php
	}
?>
										
									</div>
									
								</div>							
							</div>
						</div>
		
						<div class="sidebar">
							<div class="skills-progress">
								<h1>Our Skills</h1>
<?php
	foreach ($skills as $row) 
	{
?>
								<p><?php echo $row['name']; ?><span><?php echo $row['level']."%"; ?></span></p>
								<div class="meter nostrips frontend">
									<span style="width: <?php echo $row['level']."%"; ?>"></span>
								</div>
<?php
	}
?>
							</div>

							<div class="testimonial">
								<h1>Client Testimonials</h1>
								<ul>
<?php
	foreach ($testimonials as $row) 
	{
?>									<li>
										<div class="client-test">
											<img alt="" src="<?php echo base_url().$row['image']; ?>">
											<h3><?php echo $row['client_name']."-".$row['designation']; ?></h3>
										</div>
										<p><?php echo $row['description']; ?></p>
									</li>
<?php
	}
?>
								</ul>
							</div>

							<div class="services">
								<h1>Services</h1>
								<ul>
<?php
	foreach ($services as $row) 
	{
?>							
									<li><?php echo $row['name']; ?></li>
<?php
	}
?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End content -->
