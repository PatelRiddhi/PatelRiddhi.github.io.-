<div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  ADD TESTIMONIAL
                              </header>
                              <div class="panel-body">
                                  <form role="form" action="<?php echo base_url('admin/testmonials/add') ?>" enctype="multipart/form-data" method="post">

                                      <div class="form-group">
                                          <label>Client Name</label>
                                          <input type="text" class="form-control" id="client_name" name="client_name" >
                                      </div>
                                      <div class="form-group">
                                          <label>Designation</label>
                                          <input type="text" class="form-control" id="designation" name="designation"  >
                                      </div>
                                      <div class="form-group">
                                          <label>Description</label>
                                          <input type="text" class="form-control" id="description" name="description"  >
                                      </div>
                                      <div class="form-group">
                                          <label for="image">File input</label>
                                          <input type="file" id="image" name="image"  >
                                      </div>

                                      <button type="submit" class="btn btn-info">ADD</button>
                                      <button class="btn btn-info"><a href="<?php echo base_url('admin/testmonial/cancel'); ?>">Cancel</button>
                                  </form>

                              </div>
                          </section>
                      </div>