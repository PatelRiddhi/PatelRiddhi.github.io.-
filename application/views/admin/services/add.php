<div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  ADD SERVICE...
                              </header>
                              <div class="panel-body">
                                  <form role="form" action="<?php echo base_url('admin/services/add/'); ?>" method="post">

                                      <div class="form-group">
                                          <label>Service Name</label>
                                          <input type="text" class="form-control" id="name" name="name" >
                                      </div>
                                       <button type="submit" class="btn btn-info">ADD</button>
                                      <button class="btn btn-info"><a href="<?php echo base_url('admin/services/cancel'); ?>">CANCEL</button>
                                  </form>

                              </div>
                          </section>
                      </div>