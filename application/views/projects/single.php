
		<!-- content 
			================================================== -->
		<div id="content">
			<div class="inner-content">
				<div class="single-project">

					<div class="single-box">
						<div class="single-box-content">
							<div class="project-post-content">

								<div class="flexslider">
									<ul >
										<li>
											<img alt="" src="<?php echo base_url($project['thumbnail']); ?>" />

										</li>
									</ul>
								</div>

								<div class="project-text">
									<h1><?php echo $project['title']; ?></h1>
									<p> <?php echo $project['description']; ?></p>			
								</div>

								<div class="similar-projects">
									<h1>Similar Projects</h1>
									<div class="portfolio-box">
										<div class="project-post">
											<img alt="" src="upload/image1.jpg">
											<div class="hover-box">
												<div class="project-title">
													<h2>Cool App Design</h2>
													<span>development, mobile</span>
													<div><a href="#"
														><i class="fa fa-arrow-right"></i></a></div>
												</div>
											</div>
										</div>

										<div class="project-post">
											<img alt="" src="upload/image2.jpg">
											<div class="hover-box">
												<div class="project-title">
													<h2>Cool App Design</h2>
													<span>development, mobile</span>
													<div><a href="single-project.html"><i class="fa fa-arrow-right"></i></a></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>						
						</div>
						<div class="sidebar">
							<div class="post-info">
								<h1>Project Info</h1>
								<ul>
									<li>
										<span><i class="fa fa-user"></i></span><a href="#">Premium Layers</a>
									</li>
									<li>
										<span><i class="fa fa-heart"></i></span><a href="#">138 Views</a>
									</li>
									<li>
<?php
									$date=date_create($project['created_on']);
?>
										<span><i class="fa fa-calendar"></i></span><a href="#"><?php echo date_format($date,"d F Y "); ?></a>
									</li>
									<li>
										<span><i class="fa fa-link"></i></span><a href="<?php echo $project['url']; ?>"><?php echo $project['url']; ?></a>
									</li>
								</ul>
							</div>
							<div class="project-gallery">
								<h1>Project Gallery</h1>
								<ul>
<?php 
									foreach($images as $image)
									{
?>
										<li>
											<a href="<?php echo base_url().$image['image_path']; ?>"><img  src="<?php echo base_url().$image['image_path']; ?>" height="150" width="400"></a>
										</li>	
<?php
									}
?>								
								</ul>
							</div>
							<div class="project-feature">
								<h1>Project Feature</h1>
								<?php
									$features = explode(',', $project['features']);
								?>
								<ul>
								<?php 
								foreach($features as $feature)	
								{
									?>
									<li>
										<?php echo $feature;  ?>
									</li>
								<?php } ?>	
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End content -->
