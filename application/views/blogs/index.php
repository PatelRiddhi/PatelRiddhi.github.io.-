
		<!-- content 
			================================================== -->
		<div id="content">
			<div class="inner-content">
				<div class="blog-page">
					<div class="blog-box">
<?php 
					foreach($blogs as $blog)
					{
?>
						<!-- blog-post -->
						<div class="blog-post gallery-post">
							<div class="inner-post">
								<div class="flexslider">
									<ul class="slides">
										<li>
											<img alt="" src="<?php echo base_url().$blog['thumbnail']; ?>" height="200" width="200" />
										</li>
		
									</ul>
								</div>
								<div class="post-content">
									<h2><a href="<?php echo base_url().'blogs/'.$blog['id']; ?>"><?php echo $blog['title']; ?></a></h2>
									<p><?php echo $blog['short_description']; ?></p>
								</div>
								<ul class="post-tags">
<?php
                                    $date=date_create($blog['created_on']);
?>
									<li><i class="fa fa-calendar"></i><?php echo date_format($date,"d F Y "); ?></li>
								</ul>					
							</div>
						</div>
<?php
					}
?>	
						

					</div>

					<a class="blog-page-link" href="#"><</a>
					<a class="blog-page-link" href="#">1</a>
					<a class="blog-page-link" href="#">2</a>
					<a class="blog-page-link" href="#">3</a>
					<a class="blog-page-link" href="#">></a>
				</div>
			</div>
		</div>
		<!-- End content -->

	