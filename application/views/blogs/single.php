<div id="content">
			<div class="inner-content">
				<div class="single-project">
					<div class="single-box">
						<div class="single-box-content">
							<div class="project-post-content">

								<div>
									<ul>
										<li>
											<img alt="" src="<?php echo base_url().$blog['thumbnail']; ?>" height="400" width="400"/>
										</li>
									</ul>
								</div>

								<div class="project-text">
									<h1><?php echo $blog['title']; ?></h1>
									<p><?php echo $blog['long_description']; ?></p>			
								</div>
											
							</div>
						</div>
						<div class="sidebar">
							<div class="post-info">
								<h1>Post Info</h1>
								<ul>									
									<li>
<?php
									$date=date_create($blog['created_on']);
?>
										<span><i class="fa fa-calendar"></i></span><?php echo date_format($date,"d F Y "); ?>
									</li>									
								</ul>
							</div>
							<div class="tags-box">
								<h1>Category</h1>
								<ul>
  <?php
      $CI =& get_instance();
        $CI->load->model('blog_categories_model');
       	$category_id = $CI->blog_categories_model->get_category_id($blog['id']); 
        foreach($categories as $category)
                                                    {
                                                        foreach ($category_id as $cat_id) 
                                                        {
                                                            if($cat_id['category_id']==$category['id'])
                                                            {
?>
                                                                   <li><?php echo $category['name'];?></li>
<?php																			
                                                            }
                                                        }
                                                    }
?>    
								</ul>
							</div>
							<div class="archives-sidebar">
								<h1>Archives</h1>
								<ul>
									<li><a href="#">December 2013 <span>(23)</span></a></li>
									<li><a href="#">November 2013 <span>(12)</span></a></li>
									<li><a href="#">March 2013 <span>(5)</span></a></li>
									<li><a href="#">September 2012 <span>(10)</span></a></li>
									<li><a href="#">April 2012 <span>(4)</span></a></li>
									<li><a href="#">Jannuary 2012 <span>(20)</span></a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>