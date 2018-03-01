<!-- content 
			================================================== -->

		<div id="content">
			<div class="inner-content">
				<div class="portfolio-page">
					<div class="portfolio-box">
<?php 
					$CI =& get_instance();
					$CI->load->model('categories_model');				
					$categories = $CI->categories_model->get_all();
					foreach($projects as $project)
					{

?>
						<div class="project-post web-design illustration">
							<img alt="" src="<?php echo base_url($project['thumbnail']); ?>" height="200" width="200">
							<div class="hover-box">
								<div class="project-title">
									<h2><?php echo $project['title']; ?></h2>
<?php


      	$CI =& get_instance();
        $CI->load->model('categories_model');
       	$category_id = $CI->categories_model->get_category_id($project['id']); 
        foreach($categories as $category)
                                                    {
                                                        foreach ($category_id as $cat_id) 
                                                        {
                                                            if($cat_id['category_id']==$category['id'])
                                                            {
?>
                                                                   <span><?php echo $category['name']; ?></span>
<?php																			
                                                            }
                                                        }
                                                    }
?>    
									<div><a href="<?php echo base_url('projects/'.$project['id']); ?>"><i class="fa fa-arrow-right"></i></a></div>
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
		<!-- End content -->