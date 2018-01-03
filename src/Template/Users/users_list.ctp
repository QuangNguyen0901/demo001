<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sach user </title>
    <link rel="stylesheet" href="http://project-demo001.com/css/bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="http://project-demo001.com/css/metisMenu/metisMenu.min.css"/>
    <link rel="stylesheet" href="http://project-demo001.com/css/sb-admin-2.css"/>
    <link rel="stylesheet" href="http://project-demo001.com/css/font-awesome/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="http://project-demo001.com/css/datatables-plugins/dataTables.bootstrap.css"/>
    <link rel="stylesheet" href="http://project-demo001.com/css/datatables-responsive/dataTables.responsive.css"/>
</head>
<body>


<!--    // new design-->
<div id="page-wrapper" style="margin: 0px">
    <div class="row">
        <div class="col-lg-12">
            <div id="top-bar">
                <?php echo $this->Html->link(
                    'Logout',
                    ['controller' => 'Users', 'action' => 'logout'],
                    ['class' => 'btn-info btn-sm', 'style' => 'float:right;margin:5px 15px 5px 0px;']
                );
                ?>
                <?php echo $this->Html->link(
                    'sample',
                    ['controller' => 'Users', 'action' => 'userEdit2'],
                    ['class' => 'btn-info btn-sm', 'style' => 'float:right;margin:5px 15px 5px 0px;']
                );
                ?>
            </div>
            <!--            <h1 class="page-header">Users</h1>-->
        </div>
        <!-- /.col-lg-12 -->

    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List users
                </div>
                <!-- /.panel-heading -->
                <div style="border:#c7c7c7 solid 0.2px; padding: 20px;margin: 5px">
                    <?php
                    echo $this->Form->create();
                    ?>
                    <div class="form-group">
                        <label>Username</label>
                        <?php echo $this->Form->input('username',['required'=> false,'label'=>false,'class'=>'form-control','placeholder'=>'Username']); ?>
                    </div>
                    <div class="form-group">
                        <label>Sex</label>
                        <label class="radio-inline">
                            <label class="radio-inline">
                                <input type="radio" name="sex" id="sex0" value=0>Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="sex" id="sex1" value=1>Female
                            </label>
                        </label>
                    </div>
                    <?php echo $this->Form->submit('Search',
                        array('after' => $this->Html->link('Cancel', array('action' => 'usersList')))
                    );
                    echo $this->Form->end();
                    ?>
<!--                    --><?php //echo pr($_POST); ?>
                </div>

                <div>
                    <?php echo $this->Html->link(
                        'Add',
                        ['controller' => 'Users', 'action' => 'userAdd'],
                        ['class' => 'btn-success btn-sm', 'style' => 'float:right;margin:5px 15px 5px 0px;']
                    );
                    ?>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover"
                           id="dataTables-example">
                        <thead>
                        <tr>
                            <th>User ID</th>
                            <th>User Name</th>
                            <th>Sex</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($users as $user) {
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $user->user_id ?></td>
                                <td><?php echo $this->Html->link(
                                        $user->username,
                                        ['controller' => 'Users', 'action' => 'userDetail', $user->user_id]  //
                                    ); ?>
                                </td>
                                <td><?php if ($user->sex == 0) {
                                        echo 'Male';
                                    } else {
                                        echo 'Female';
                                    } ?>
                                </td>
                                <td><?php echo $this->Html->link(
                                        'Delete',
                                        ['controller' => 'Users', 'action' => 'userDelete', $user->user_id],
                                        ['class' => 'btn-danger btn-sm', 'confirm' => 'Xóa user?']
                                    );
                                    ?>
                                    <?php echo $this->Html->link(
                                        'Edit',
                                        ['controller' => 'Users', 'action' => 'userEdit', $user->user_id, 1],
                                        ['class' => 'btn-info btn-sm']
                                    );
                                    ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>


<!-- jQuery -->
<script src="http://project-demo001.com/bootstrap/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="http://project-demo001.com/bootstrap/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="http://project-demo001.com/bootstrap/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="http://project-demo001.com/bootstrap/datatables/js/jquery.dataTables.min.js"></script>
<script src="http://project-demo001.com/bootstrap/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="http://project-demo001.com/bootstrap/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="http://project-demo001.com/bootstrap/dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function () {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>
</html>