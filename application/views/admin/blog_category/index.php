
<div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    Blog Categories
                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                                <!-- </div> -->
                                <div class="panel-body table-responsive">
                                    <div class="box-tools m-b-15">
                                        <div class="input-group">
                                            <button type="button" class="btn btn-primary"><a href="<?php echo base_url('admin/blog_category/add'); ?>">Add New</a></button>
                                        </div>
                                    </div>
                                    <table class="table table-hover">
                                        <tbody><tr>
                                            <th>SR. No.</th>
                                            <th>Name</th>
                                            <th>Created on</th>
                                            <th colspan = "2">Action</th>
                                        </tr>
                                       
<?php
        foreach ($categories as $row)
        {
?>
 
                                        <tr>
                                             <td><?php echo $row['id']; ?></td>
                                            <td><?php echo ucfirst($row['name']); ?></td>
<?php
                                    $date=date_create($row['created_on']);
?>
                                            <td><?php echo date_format($date,"d F Y "); ?></td> 
                                            <td><a href= "<?php echo base_url('admin/blog_category/edit/').$row['id'];?>" onclick="return confirm('Are you sure you want to edit this data?');" > Edit </a>
                                            <td><a href= "<?php echo base_url('admin/blog_category/delete/').$row['id'];?>" onclick="return confirm('Are you sure you want to delete this data?');">  Delete </a>   
                                        </tr>
<?php
        }
?>
                                    </tbody></table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            <div>

                       <!--!<?php echo $records; ?> -->
                                         

                                            </div>
                        </div>

                    </div>