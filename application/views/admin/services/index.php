
<div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                  MANAGE SERVICES
                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                                <!-- </div> -->
                                <div class="panel-body table-responsive">
                                    <div class="box-tools m-b-15">
                                        <div class="input-group">
                                            <button type="button" class="btn btn-primary"><a href="<?php echo base_url('admin/services/add/'); ?>">Add New</a></button>
                                        </div>
                                    </div>
                                    <table class="table table-hover">
                                        <tbody><tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th colspan = "2">Action</th>
                                        </tr>
                                       
<?php
        foreach ($services as $row)
        {
?>
 
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['name']; ?></td>                  
                                            <td><a href= "<?php echo base_url('admin/services/edit/').$row['id'];?>" onclick="return confirm('Are you sure you want to edit this data?');" > EDIT </a>
                                            <td><a href= "<?php echo base_url('admin/services/delete/').$row['id'];?>" onclick="return confirm('Are you sure you want to delete this data?');">  DELETE </a>   
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