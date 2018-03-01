
                            <div class="panel">
                                <header class="panel-heading">
                                    MANAGE PROJECTS..
                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                                <!-- </div> -->
                                <div class="panel-body">
                                    <div class="box-tools">
                                       
                                    </div>
                                    <div class="panel-body table-responsive">
                                        <div class="box-tools m-b-15">
                                            <div class="input-group">
                                            <button type="button" class="btn btn-primary"><a href="<?php echo base_url('admin/projects/add/'); ?>">Add New</a></button>
                                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search">
                                            <div class="input-group-btn">
                                            <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-hover">
                                        <tbody><tr>
                                            <th>Sr. No.</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Client name</th>
                                            <th>Description</th>
                                            <th>Website</th>
                                            <th>Views</th>
                                            <th>Created on</th>
                                            <th>Gallery</th>
                                            <th>Features</th>
                                            <th colspan = "3">Action</th>
                                        </tr>
                                       
<?php
        $CI =& get_instance();
        $CI->load->model('categories_model');
        foreach ($projects as $project)
        {
?>
 
                                        <tr>
                                            <td><?php echo $project['id']; ?></td>
                                            <td><?php echo ucfirst($project['title']); ?></td>
                                            <td>
<?php
        $category_id = $CI->categories_model->get_category_id($project['id']); 
                                                    foreach($categories as $category)
                                                    {
                                                        foreach ($category_id as $cat_id) 
                                                        {
                                                            if($cat_id['category_id']==$category['id'])
                                                            {
                                                                   echo $category['name'].", ";
                                                            }
                                                        }
                                                    }
?>    
                                            </td>
                                            <td><?php echo $project['client_name']; ?></td>
                                            <td><?php echo $project['description']; ?></td>
                                            <td><?php echo $project['url']; ?></td> 
                                            <td><?php echo $project['view_count']; ?></td>
<?php
                                    $date=date_create($project['created_on']);
?>
                                            <td><?php echo date_format($date,"d F Y "); ?></td>
                                            <td><img src="<?php echo base_url().$project['thumbnail']; ?>" height="80" width="80"> </img></td>
                                            <td><?php echo $project['features']; ?></td>  
                                            <td><a href= "<?php echo base_url('admin/projects/edit/').$project['id'];?>" onclick="return confirm('Are you sure you want to edit this data?');" > Edit </a></td>
                                            <td><a href= "<?php echo base_url('admin/projects/delete/').$project['id'];?>" onclick="return confirm('Are you sure you want to delete this data?');">  Delete </a></td>  
                                            <td><a href= "<?php echo base_url('admin/projects/more/').$project['id'];?>">More.. </a></td>   
                                        </tr>
<?php
        }
?>
                                    </tbody>
                                    </table>
                                     <ul class="pagination pagination-sm m-b-10 m-t-10 pull-right">

                                            <li><?php echo $links; ?></li>

                                        </ul>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            <div>

                      
                                         

                                            </div>
                    