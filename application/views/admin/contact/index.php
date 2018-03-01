
<div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    CONTACT LIST
                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                                <!-- </div> -->

                                <div class="panel-body table-responsive">
                                    <table class="table table-hover">
                                        <tbody>
                                        <tr>
                                            <th>Sr. No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Website</th>
                                            <th>Message</th>
                                            <th>created on</th>
                                            <th>Action</th>
                                        </tr>
                                       
<?php
        foreach ($contact as $row)
        {
?>
 
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['website']; ?></td> 
                                            <td><?php echo $row['message']; ?></td>
<?php
                                    $date=date_create($row['created_on']);
?>
                                            <td><?php echo date_format($date,"d F Y "); ?></td>
                                            <td><a href= "<?php echo base_url('admin/contact/delete').$row['id'];?>" onclick="return confirm('Are you sure you want to delete this data?');">  Delete </a>   
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