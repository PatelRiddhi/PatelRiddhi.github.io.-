
<div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  ADD BLOG
                              </header>
                              <div class="panel-body">
                                  <form role="form" enctype="multipart/form-data" action="<?php base_url('admin/blogs/add/'); ?> " method="post">
                                      <div class="form-group">
                                          <label for="projectname">Blog Name</label>
                                          <input type="text" class="form-control" id="title" name="title" >
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-2 control-label col-lg-2">Categories</label>
                                          <div class="col-lg-10">
<?php 
          $CI =& get_instance();
          $CI->load->model('blog_categories_model');       
          $categories = $CI->blog_categories_model->get_all();
          foreach ($categories as $category) 
          {
            
?>  
                                              <label class="checkbox-inline">
                                              <input type="checkbox" name="category[]" value="<?php echo $category['name']; ?>"
                                              ></label><?php echo $category['name']; ?><br>
                                              </label>                                           
<?php
        }
?>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="short_description">Short Description</label>
                                          <textarea class="form-control" id="short_description" name="short_description" rows="5" cols="20" >Enter short description here...</textarea>
                                      </div>
                                      <div class="form-group">
                                          <label for="long_description">Long Description</label>
                                          <textarea class="form-control" id="long_description" name="long_description" rows="10" cols="20" >Enter long description here...</textarea>
                                      </div>
                                      <div class="form-group">
                                          <label>Profile</label>
                                          <input type="file" name="profile"> 
                                      </div>
                                      <button type="submit" class="btn btn-info">ADD</button>
                                      <button class="btn btn-info"><a href="<?php echo base_url('admin/blogs/cancel'); ?>">CANCEL</button>
                                  </form>

                              </div>
                          </section>
                      </div>