
<div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  EDIT PROJECT
                              </header>
                              <div class="panel-body">
                                  <form role="form" enctype="multipart/form-data" action="<?php base_url('admin/projects/add/'); ?> " method="post">
                                      <div class="form-group">
                                          <label for="projectname">Project Name</label>
                                          <input type="text" class="form-control" id="project_name" name="title" value="<?php echo $project['title']; ?>">
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-2 control-label col-lg-2">Categories</label>
                                          <div class="col-lg-10">
<?php 
          $CI =& get_instance();
          $CI->load->model('categories_model');       
          $categories = $CI->categories_model->get_all();
          $category_id = $CI->categories_model->get_category_id($project['id']); 
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
                                          <label for="clientname">Client Name</label>
                                          <input type="text" class="form-control" id="clientname" name="client_name" value="<?php echo $project['client_name']; ?>">
                                      </div>
                                      <div class="form-group">
                                          <label for="description">Description</label>
                                          <textarea class="form-control" id="description" name="description" rows="5" cols="20" ><?php echo $project['description']; ?> </textarea>
                                      </div>
                                      <div class="form-group">
                                          <label for="url">Website url</label>
                                          <input type="text" class="form-control" id="url" name="url" value="<?php echo $project['url']; ?>">
                                      </div>
                                      <div class="form-group">
                                          <label for="features">Features</label>
                                          <input type="text" class="form-control" id="features" name="features" value="<?php echo $project['features']; ?>">
                                      </div>
                                      <div class="form-group">
                                          <label>Profile</label><br>
                                          <img src="<?php echo base_url($project['thumbnail']);?>" height="80" width="80"><br><br>
                                          <input type="file" name="profile"> 
                                          <input type="hidden" name="old_profile" value="<?php echo $project['thumbnail']; ?>">
                                      </div>
                                      <div class="form-group">
                                          <label>Project Image Gallery</label><br>
                                          <?php
                                          foreach($images as $image)
                                          {
                                            ?>
                                            <img src="<?php echo base_url($image['image_path']) ?>" height="80" width="80">
                                            <?php
                                          } 
                                          ?>
                                          <br><br>
                                          <input type="file" multiple="" name="images[]"> 
                                      </div>
                                      <button type="submit" class="btn btn-info">UPDATE</button>
                                      <button class="btn btn-info"><a href="<?php echo base_url('admin/projects/cancel'); ?>">CANCEL</button>
                                  </form>

                              </div>
                          </section>
                      </div>