<div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  EDIT TESTIMONIAL
                              </header>
                              <div class="panel-body">
                                  <form role="form" action="<?php echo base_url('admin/testmonials/edit/').$testmonial['id']; ?>" enctype="multipart/form-data" method="post">

                                      <div class="form-group">
                                          <label>Client Name</label>
                                          <input type="text" class="form-control" id="client_name" name="client_name" value="<?php echo $testmonial['client_name']; ?>">
                                      </div>
                                      <div class="form-group">
                                          <label>Designation</label>
                                          <input type="text" class="form-control" id="designation" name="designation" value="<?php echo $testmonial['designation']; ?>" >
                                      </div>
                                      <div class="form-group">
                                          <label>Description</label>
                                          <input type="text" class="form-control" id="description" name="description" value="<?php echo $testmonial['description']; ?>"  >
                                      </div>
                                      <div class="form-group">
                                          <label for="image">Profile</label><br>
                                          <img src="<?php echo base_url($testmonial['image']);?>" height="80" width="80"><br>
                                          <input type="file" name="image"> 
                                          <input type="hidden" name="old_image" value="<?php echo $testmonial['image']; ?>">
                                          </div>

                                       <button type="submit" class="btn btn-info">UPDATE</button>
                                      <button class="btn btn-info"><a href="<?php echo base_url('admin/testmonials/cancel'); ?>">Cancel</button>
                                  </form>

                              </div>
                          </section>
                      </div>