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
    <?php echo $this->Html->css('custom'); ?>

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
                        <div class="col-lg-12">
                            <?php
                            echo $this->Form->create('User'); ?>
                            <div class="form-group input_custom">
                                <?php echo $this->Form->input('User.username',
                                    ['class' => 'form-control', 'label' => 'User Name', 'value' => $user->username]);
                                ?>
                            </div>
                            <div class="form-group input_custom">
                                <?php echo $this->Form->input('User.first_name',
                                    ['class' => 'form-control', 'label' => 'First Name', 'value' => $user->first_name]);
                                ?>
                            </div>
                            <div class="form-group input_custom">
                                <?php echo $this->Form->input('User.last_name',
                                    ['class' => 'form-control', 'label' => 'Last Name', 'value' => $user->last_name]);
                                ?>
                            </div>
                            <div class="form-group ">
                                <div class="radio_custom">
                                <label >Sex</label>
                                </div>
                                <?php
                                echo $this->Form->input(
                                    'User.sex',
                                    [
                                        'options' => ['0' => 'Male', '1' => 'Female'],
                                        'value' => $user->sex,
                                        'type' => 'radio',
                                        'templates' => ['nestingLabel' => '{{hidden}}<label{{attrs}} class="radio-inline">{{input}}{{text}}</label>'],
                                        'label' => false
                                    ]
                                )
                                ?>
                            </div>
                            <div class="form-group input_custom">
                                <?php echo $this->Form->input('User.email',
                                    ['class' => 'form-control', 'label' => 'Email', 'value' => $user->email]);
                                ?>
                            </div>
                            <div class="form-group input_custom">
                                <?php echo $this->Form->input('User.phone',
                                    ['class' => 'form-control', 'label' => 'Phone', 'value' => $user->phone]);
                                ?>
                            </div>
                            <div class="form-group ">
                                <div class="radio_custom">
                                    <label >Role</label>
                                </div>
                                <?php
                                echo $this->Form->input(
                                    'User.role',
                                    [
                                        'options' => ['0' => 'Admin', '1' => 'User'],
                                        'value' => $user->role,
                                        'type' => 'radio',
                                        'templates' => ['nestingLabel' => '{{hidden}}<label{{attrs}} class="radio-inline">{{input}}{{text}}</label>'],
                                        'label' => false
                                    ]
                                )
                                ?>
                            </div>
                            <?php echo $this->Form->submit('Submit',
                                array('class' => 'btn btn-primary btn-sm ', 'after' => $this->Html->link('Cancel', array('action' => 'userEdit', $user->user_id, 2)))
                            ); ?>
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