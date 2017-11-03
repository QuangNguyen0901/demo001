<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit user </title>
    <link rel="stylesheet" href="http://project-demo001.com/css/bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="http://project-demo001.com/css/metisMenu/metisMenu.min.css"/>
    <link rel="stylesheet" href="http://project-demo001.com/css/sb-admin-2.css"/>
    <link rel="stylesheet" href="http://project-demo001.com/css/font-awesome/css/font-awesome.min.css" type="text/css"/>


</head>
<body>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-8">
                    <h1 class="page-header">User</h1>
                </div>
                <div class="col-lg-4">
                    <?php echo $this->Html->link(
                        'User List',
                        ['controller' => 'Users', 'action' => 'usersList'],
                        ['class' => 'btn-info btn-sm class="page-header']
                    );
                    ?>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit User
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php
                            echo $this->Form->create('User'); ?>
<!--                            <form role="form">-->
                                <div class="form-group">
                                    <?php
                                    //echo $this->Form->create('User'); ?>
                                    <div class="form-group">
                                        <?php echo $this->Form->input('User.username',
                                            ['class' => 'form-control', 'label' => 'User Name', 'value' => $user->username]);
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Sex</label>
                                    <label class="radio-inline">
                                        <?php
                                        echo $this->Form->input(
                                            'User.sex',
                                            [
                                                'options' => array('0' => 'Male', '1' => 'Female'),
                                                'value' => $user->sex,
                                                'type' => 'radio',
                                                'class' => 'radio-inline',

                                                'label' => false
                                            ]
                                        )
                                        ?>
                                    </label>

                                </div>
                                <?php echo $this->Form->submit('Submit',
                                    array('class'=> 'btn btn-primary btn-sm ','after' => $this->Html->link('Cancel', array('action' => 'userEdit', $user->user_id, 2)))
                                );?>
                                <?php echo $this->Form->end();
                                ?>
<!--                            </form>-->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /#wrapper -->

<!--sdadad asda asda asd asd sada asd assss-->
</body>
</html>