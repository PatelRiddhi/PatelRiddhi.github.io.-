  <script src="<?php echo base_url('js/admin/ckeditor/ckeditor.js'); ?>"></script>

 <div class="col-lg-6">

                          <section class="panel">
                              <header class="panel-heading">
                                  ABOUT US
                              </header>
                              <div class="panel-body">
<?php 
      foreach ($about as $row) 
      {
?>
                               <form role="form" action="<?php base_url('admin/about/index'); ?> " method="post">
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">title</label>
                                          <input type="text" class="form-control" name="title" id="title" value="<?php echo $row['title']; ?>" >
                                      </div>
                                      <div class="form-group">
                                          <label for="description">Description</label>
                                        <textarea name="description" id="description"><?php echo $row['description']; ?></textarea>
    <script>
      CKEDITOR.plugins.addExternal( 'timestamp', 'https://sdk.ckeditor.com/samples/assets/plugins/timestamp/', 'plugin.js' );
      CKEDITOR.replace( 'description', {
      extraPlugins: 'timestamp'
    } );
    </script>
                                      <div class="form-group">
                                          <label for="image">Profile</label><br>
                                          <img src="<?php echo base_url($row['image']);?>" height="80" width="80"><br>
                                          <input type="file" name="image"> 
                                          <input type="hidden" name="old_image" value="<?php echo $row['image']; ?>">
                                      </div>          
                                      <button type="submit" class="btn btn-info">SAVE</button>
                                      <button class="btn btn-info"><a href="<?php echo base_url('admin/about/cancel'); ?>">CANCEL</button>
                                  </form>
<?php
}
?>
                              </div>
                          </section>
                      </div>