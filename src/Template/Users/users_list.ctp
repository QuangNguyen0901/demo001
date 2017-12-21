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
                    ['class' => 'btn-info btn-sm','style'=>'float:right;margin:5px 15px 5px 0px;' ]
                );
                ?>
                <?php echo $this->Html->link(
                    'sample',
                    ['controller' => 'Users', 'action' => 'userEdit2'],
                    ['class' => 'btn-info btn-sm','style'=>'float:right;margin:5px 15px 5px 0px;' ]
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
                                        echo 'Male';}
                                        else {echo 'Female';}?>
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
</div>
</body>
</html>