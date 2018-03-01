<div class="panel">
                                <header class="panel-heading">
                                   MANAGE BLOGS..

                                </header>
                                    <div class="panel-body table-responsive">
                                    <div class="box-tools m-b-15">
                                        <div class="input-group">
                                            <button type="button" class="btn btn-primary"><a href="<?php echo base_url('admin/blogs/add/'); ?>">Add New</a></button>
                                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search">
                                            <div class="input-group-btn">
                                            <button class="btn btn-sm btn-default" > </i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Name</th>
                                            <th>Short Description</th>
                                            <th>Created on</th>
                                            <th>Categoies</th>
                                            <th>Profile</th>
                                            <th colspan = "2">Action</th>
                                        </tr>
<?php
        $CI =& get_instance();
        $CI->load->model('blog_categories_model');
        foreach ($blogs as $blog)
        {
?>
                                        <tr>
                                            <td><?php echo $blog['id']; ?></td>
                                            <td><?php echo ucfirst($blog['title']); ?></td>
                                            <td><?php echo $blog['short_description']; ?></td>
<?php
                                    $date=date_create($blog['created_on']);
?>
                                            <td><?php echo date_format($date,"d F Y "); ?></td> 
                                               <td>
<?php
        $category_id = $CI->blog_categories_model->get_category_id($blog['id']); 
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
                                            <td><img src="<?php echo base_url().$blog['thumbnail']; ?>" height="80" width="80"></img></td>
                                            <td><a href= "<?php echo base_url('admin/blogs/edit/').$blog['id'];?>" onclick="return confirm('Are you sure you want to edit this data?');" > Edit</a>
                                            <td><a href= "<?php echo base_url('admin/blogs/delete/').$blog['id'];?>" onclick="return confirm('Are you sure you want to delete this data?');">  Delete </a>
                                            <td><a href= "<?php echo base_url('admin/blogs/more/').$blog['id'];?>">More.. </a></td>                                     
                                        </tr>
<?php
        }
?>
                                    </table>
                                    <ul class="pagination pagination-sm m-b-10 m-t-10 pull-right">

                                            <li><?php echo $links; ?></li>

                                        </ul>
                                </div><!-- /.panel-body -->
                            </div><!-- /.panel -->
