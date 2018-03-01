 <div class="panel-group m-bot20" id="accordion">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <img src="<?php echo base_url($blog['thumbnail']);?>" style="float:left;" height="200" width="200">
                                                
                                                   <br><br><br><br>More information about <?php echo $blog['title']; ?> 
                                                </h3>
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
                                                                  <h5><?php echo $category['name'].", "; ?></h5>
<?php
                                                            }
                                                        }
                                                    }
?>                                                
                                                </div>
                                        </div>
                                        <div class="panel">
                                            <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Short Descriptions :</label>
                                            <div class="col-lg-10">
                                                <h5><?php echo $blog['short_description']; ?></h5>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Long Description :</label>
                                            <div class="col-lg-10">
                                                <h5><?php echo $blog['long_description']; ?></h5>
                                            </div>
                                        </div>
                                       
                                        <button class="btn btn-info"><a href="<?php echo base_url('admin/blogs/cancel'); ?>">BACK</button>
</div>                                        
                                            