<div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  EDIT TEAM MEMBER
                              </header>
                              <div class="panel-body">
                                  <form role="form" action="<?php echo base_url('admin/team/edit/').$team['id']; ?>" enctype="multipart/form-data" method="post">

                                      <div class="form-group">
                                          <label>Member Name</label>
                                          <input type="text" class="form-control" id="name" name="name" value="<?php echo $team['name']; ?>">
                                      </div>
                                      <div class="form-group">
                                          <label>Designation</label>
                                          <input type="text" class="form-control" id="designation" name="designation" value="<?php echo $team['designation']; ?>" >
                                      </div>
                                      <div class="form-group">
                                          <label for="image">Profile</label><br>
                                          <img src="<?php echo base_url($team['image']);?>" height="80" width="80"><br>
                                          <input type="file" name="image"> 
                                          <input type="hidden" name="old_image" value="<?php echo $team['image']; ?>">
                                      </div>

                                       <button type="submit" class="btn btn-info">UPDATE</button>
                                      <button class="btn btn-info"><a href="<?php echo base_url('admin/team/cancel'); ?>">CANCEL</button>
                                  </form>

                              </div>
                          
                          </section>
                      </div>