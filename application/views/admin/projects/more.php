 <div class="panel-group m-bot20" id="accordion">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <img src="<?php echo base_url($project['thumbnail']);?>" style="float:left;" height="80" width="80">
                                                
                                                   <br><br><br>More information about <?php echo $project['title']; ?>; 
                                                </h4>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="panel">
                                            <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Categories :</label>
                                                <div class="col-lg-10">
<?php
                                                    foreach($categories as $category)
                                                    {
                                                        foreach ($category_id as $cat_id) 
                                                        {
                                                            if($cat_id['category_id']==$category['id'])
                                                            {
?>
                                                                  <h5><?php echo $category['name']; ?></h5>
<?php
                                                            }
                                                        }
                                                    }
?>                                                
                                                </div>
                                        </div>
                                        <div class="panel">
                                            <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Client Name :</label>
                                            <div class="col-lg-10">
                                                <h5><?php echo $project['client_name']; ?></h5>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Description :</label>
                                            <div class="col-lg-10">
                                                <h5><?php echo $project['description']; ?></h5>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">URL :</label>
                                            <div class="col-lg-10">
                                                <h5><?php echo $project['url']; ?></h5>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Features :</label>
                                            <div class="col-lg-10">
                                                <h5><?php echo $project['features']; ?></h5>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Project Gallery :</label>
                                            <div class="col-lg-10">
                                                <?php
                                                    foreach($images as $image)
                                                    {
                                                ?>
                                                        <img src="<?php echo base_url($image['image_path']) ?>" height="80" width="80">
                                                <?php
                                                    } 
                                                ?>
                                            </div>
                                          <br><br>
                                        </div>
                                        <button class="btn btn-info"><a href="<?php echo base_url('admin/projects/cancel'); ?>">BACK</button>
</div>                                        
                                            