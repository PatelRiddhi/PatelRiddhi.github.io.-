
<div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  EDIT BLOG
                              </header>
                              <div class="panel-body">
                                  <form role="form" enctype="multipart/form-data" action="<?php base_url('admin/blogs/edit/'); ?> " method="post">
                                      <div class="form-group">
                                          <label for="projectname">Blog Name</label>
                                          <input type="text" class="form-control" id="title" name="title" value="<?php echo $blog['title']; ?>">
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-2 control-label col-lg-2">Categories</label>
                                          <div class="col-lg-10">
<?php 
          $CI =& get_instance();
          $CI->load->model('blog_categories_model');       
          $categories = $CI->blog_categories_model->get_all();
          $category_id = $CI->blog_categories_model->get_category_id($blog['id']); 
          foreach ($categories as $category) 
          {
            
?>  
                                              <label class="checkbox-inline">
                                              <input type="checkbox" name="category[]" value="<?php echo $category['name']; ?>"
                                              <?php
                                              foreach ($category_id as $cat_id) 
                                              {
                                                if($cat_id['category_id']==$category['id'])
                                                  {
                                        
                                                      echo "checked";
                                                  }
                                              }
                                              ?>
                                              ></label><?php echo $category['name']; ?><br>
                                              </label>                                           
<?php
        }
?>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="short_description">Short Description</label>
                                          <textarea class="form-control" id="short_description" name="short_description" rows="5" cols="20" ><?php echo $blog['short_description']; ?> </textarea>
                                      </div>
                                      <div class="form-group">
                                          <label for="long_description">Long Description</label>
                                          <textarea class="form-control" id="long_description" name="long_description" rows="10" cols="20" ><?php echo $blog['long_description']; ?> </textarea>
                                      </div>
                                      <div class="form-group">
                                          <label>Profile</label>
                                          <label>Profile</label><br>
                                          <img src="<?php echo base_url($blog['thumbnail']);?>" height="80" width="80"><br><br>
                                          <input type="file" name="profile" >
                                          <input type="hidden" name="old_profile" value="<?php echo $blog['thumbnail']; ?>" > 
                                      </div>
                                      <button type="submit" class="btn btn-info">UPDATE</button>
                                      <button class="btn btn-info"><a href="<?php echo base_url('admin/blogs/cancel'); ?>">CANCEL</button>
                                  </form>

                              </div>
                          </section>
                      </div>