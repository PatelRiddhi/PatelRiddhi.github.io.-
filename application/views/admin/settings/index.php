 <div class="col-lg-6">

                          <section class="panel">
                              <header class="panel-heading">
                                  Setting
                              </header>
                              <div class="panel-body">
<?php 
      foreach ($settings as $setting) 
      {
?>
                               <form role="form" action="<?php base_url('admin/settings'); ?> " method="post">
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Contact No.</label>
                                          <input type="number" class="form-control" name="contact_no" id="contact_no" value="<?php echo $setting['contact_no']; ?>" >
                                      </div>
                                      <div class="form-group">
                                          <label for="email">Email</label>
                                          <input type="email" class="form-control" name="email" id="email" value="<?php echo $setting['email']; ?>" >
                                      </div>
                                      <div class="form-group">
                                          <label for="address">Address</label>
                                          <input type="text" class="form-control" name="address" id="address" value="<?php echo $setting['address']; ?>" >
                                      </div>
                                      <div class="form-group">
                                          <label >Facebook URL</label>
                                          <input type="text" class="form-control" name="facebook_url" id="facebook_url" value="<?php echo $setting['facebook_url']; ?>">
                                      </div>
                                      <div class="form-group">
                                          <label>Instagram URL</label>
                                          <input type="text" class="form-control" name="instagram_url" id="instagram_url" value="<?php echo $setting['instagram_url']; ?>">
                                      </div>
                                      <div class="form-group">
                                          <label>Twitter URL</label>
                                          <input type="text" class="form-control"  name="twitter_url" id="twitter_url" value="<?php echo $setting['twitter_url']; ?>">
                                      </div>
                                      <div class="form-group">
                                          <label>Google-plus URL</label>
                                          <input type="text" class="form-control"  name="google_plus_url" id="google_plus_url" value="<?php echo $setting['google_plus_url']; ?>">
                                      </div>
                                      <div class="form-group">
                                          <label>Pinterest URL</label>
                                          <input type="text" class="form-control"  name="pinterest_url" id="pinterest_url" value="<?php echo $setting['pinterest_url']; ?>">
                                      </div>
                                      <div class="form-group">
                                          <label>Linked_in URL</label>
                                          <input type="text" class="form-control"  name="linked_in_url" id="linked_in_url" value="<?php echo $setting['linked_in_url']; ?>">
                                      </div>
                                      <div class="form-group">
                                          <label>Linked_in URL</label>
                                          <input type="text" class="form-control"  name="linked_in_url" id="linked_in_url" value="<?php echo $setting['linked_in_url']; ?>">
                                      </div>
                                      <div class="form-group">
                                          <label>You_Tube URL</label>
                                          <input type="text" class="form-control"  name="you_tube_url" id="you_tube_url" value="<?php echo $setting['youtbe_url']; ?>">
                                      </div>                       
                                      <button type="submit" class="btn btn-info">SAVE</button>
                                      <button class="btn btn-info"><a href="<?php echo base_url('admin/settings/cancel'); ?>">CANCEL</button>
                                  </form>
<?php
}
?>
                              </div>
                          </section>
                      </div>