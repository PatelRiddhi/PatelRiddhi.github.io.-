<div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  EDIT SKILL
                              </header>
                              <div class="panel-body">
                                  <form role="form" action="<?php echo base_url('admin/skills/edit/').$skills['id']; ?>" method="post">

                                      <div class="form-group">
                                          <label>Skill Name</label>
                                          <input type="text" class="form-control" id="name" name="name" value="<?php echo $skills['name']; ?>">
                                      </div>
                                      <div class="form-group">
                                          <label>level</label>
                                          <input type="text" class="form-control" id="level" name="level" value="<?php echo $skills['level']; ?>" >
                                      </div>
                                       <button type="submit" class="btn btn-info">UPDATE</button>
                                      <button class="btn btn-info"><a href="<?php echo base_url('admin/skills/cancel'); ?>">CANCEL</button>
                                  </form>

                              </div>
                          </section>
                      </div>