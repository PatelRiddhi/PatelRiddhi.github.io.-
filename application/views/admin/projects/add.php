<div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  ADD PROJECT
                              </header>
                              <div class="panel-body">
                                  <form role="form" enctype="multipart/form-data" action="<?php base_url('admin/projects/add/'); ?> " method="post">
                                      <div class="form-group">
                                          <label for="projectname">Project Name</label>
                                          <input type="text" class="form-control" id="project_name" name="title" placeholder="Enter project name">
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-2 control-label col-lg-2">Categories</label>
                                          <div class="col-lg-10">
<?php 
          $CI =& get_instance();
          $CI->load->model('categories_model');       
          $categories = $CI->categories_model->get_all(); 
          foreach ($categories as $category) 
          {
?>  
                                              <label class="checkbox-inline">
                                                  <input type="checkbox" name="category[]" value="<?php echo $category['name']; ?>"></label><?php echo $category['name']; ?><br>
                                              </label>

<?php
          }
?>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="clientname">Client Name</label>
                                          <input type="text" class="form-control" id="clientname" name="client_name" placeholder="Client Name">
                                      </div>
                                      <div class="form-group">
                                          <label for="description">Description</label>
                                          <textarea class="form-control" id="description" name="description" placeholder="Description" rows="5" cols="20" ></textarea>
                                      </div>
                                      <div class="form-group">
                                          <label for="url">Website url</label>
                                          <input type="text" class="form-control" id="url" name="url" placeholder="www.example.com">
                                      </div>
                                      <div class="form-group">
                                          <label for="features">Features</label>
                                          <input type="text" class="form-control" id="features" name="features" placeholder="features">
                                      </div>
                                      <div class="form-group">
                                          <label>Profile</label>
                                          <input type="file" name="profile"> 
                                      </div>
                                      <div class="form-group">
                                          <label>Project Image Gallery</label>
                                          <input type="file" multiple="" name="images[]"> 
                                      </div>
                                      <button type="submit" class="btn btn-info">ADD</button>
                                       <button class="btn btn-info"><a href="<?php echo base_url('admin/projects/cancel'); ?>">CANCEL</button>
                                  </form>

                              </div>
                          </section>
                      </div>