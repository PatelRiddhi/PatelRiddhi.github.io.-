<div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  ADD SKILLS
                              </header>
                              <div class="panel-body">
                                  <form role="form" action="<?php echo base_url('admin/skills/add/'); ?>" method="post">

                                      <div class="form-group">
                                          <label>Skill Name</label>
                                          <input type="text" class="form-control" id="name" name="name" >
                                      </div>
                                      <div class="form-group">
                                          <label>level</label>
                                          <input type="text" class="form-control" id="level" name="level" >
                                      </div>
                                       <button type="submit" class="btn btn-info">ADD</button>
                                      <button class="btn btn-info"><a href="<?php echo base_url('admin/skills/cancel'); ?>">CANCEL</button>
                                  </form>

                              </div>
                          </section>
                      </div>