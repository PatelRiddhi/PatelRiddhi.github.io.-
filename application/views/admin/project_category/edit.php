<div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  EDIT CATEGORY
                              </header>
                              <div class="panel-body">
                                  <form role="form" action="<?php echo base_url('admin/project_category/edit/').$categories['id']; ?>" method="post">

                                      <div class="form-group">
                                          <label>Category Name</label>
                                          <input type="text" class="form-control" id="name" name="name" value="<?php echo $categories['name']; ?>">
                                      </div>
                                       <button type="submit" class="btn btn-info">UPDATE</button>
                                      <button class="btn btn-info"><a href="<?php echo base_url('admin/project_category/cancel'); ?>">CANCEL</button>
                                  </form>

                              </div>
                          </section>
                      </div>