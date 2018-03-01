
<div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    MANAGE TESTIMONIAL
                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                                <!-- </div> -->
                                <div class="panel-body table-responsive">
                                    <div class="box-tools m-b-15">
                                        <div class="input-group">
                                            <button type="button" class="btn btn-primary"><a href="<?php echo base_url('admin/testmonials/add/'); ?>">Add New</a></button>
                                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search">
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-hover">
                                        <tbody><tr>
                                            <th>ID</th>
                                            <th>Profile</th>
                                            <th>Client ame</th>
                                            <th>Designation</th>
                                            <th>Description</th>
                                            <th colspan = "2">Action</th>
                                        </tr>
                                       
<?php
        foreach ($testmonial as $row)
        {
?>
 
                                        <tr>
                                             <td><?php echo $row['id']; ?></td>
                                            <td><img src="<?php echo base_url().$row['image']; ?>"  height="80" width="80"> </img></td>
                                            <td><?php echo $row['client_name']; ?></td>
                                            <td><?php echo $row['designation']; ?></td> 
                                            <td><?php echo $row['description']; ?></td> 
                                            <td><a href= "<?php echo base_url('admin/testmonials/edit/').$row['id'];?>" onclick="return confirm('Are you sure you want to edit this data?');" > Edit </a>
                                            <td><a href= "<?php echo base_url('admin/testmonials/delete/').$row['id'];?>" onclick="return confirm('Are you sure you want to delete this data?');">  Delete </a>   
                                        </tr>
<?php
        }
?>
                                    </tbody></table>
                                    <ul class="pagination pagination-sm m-b-10 m-t-10 pull-right">

                                            <li><?php echo $links; ?></li>

                                        </ul>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            <div>

                       <!--!<?php echo $records; ?> -->
                                         

                                            </div>
                        </div>

                    </div>