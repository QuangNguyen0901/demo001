<!--<div class="users form">-->
<?php // $this->Flash->render() ?>
<!--    --><?php //= $this->Form->create() ?>
<!--    <fieldset>-->
<!--        <legend>--><?php //= __('Please enter your username and password') ?><!--</legend>-->
<!--        --><?php //= $this->Form->control('username') ?>
<!--        --><?php //= $this->Form->control('pass') ?>
<!--    </fieldset>-->
<!--    --><?php //= $this->Form->button(__('Login')); ?>
<!--    --><?php //= $this->Form->end() ?>
<!--</div>-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User register</title>
    <link rel="stylesheet" href="http://project-demo001.com/css/bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="http://project-demo001.com/css/metisMenu/metisMenu.min.css"/>
    <link rel="stylesheet" href="http://project-demo001.com/css/sb-admin-2.css"/>
    <link rel="stylesheet" href="http://project-demo001.com/css/font-awesome/css/font-awesome.min.css" type="text/css"/>
</head>
<body>
<div id="wrapper" style="max-width: 600px;">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Login
            </div>
        </div>
        <div class="panel-body">
            <?php
            echo $this->Form->create();?>
            <div class="form-group">
                <label>Username</label>
                <?php echo $this->Form->input('username',['required'=> false,'label'=>false,'class'=>'form-control','placeholder'=>'Username']); ?>
                <!--                <p class="help-block">Please input username</p>-->
            </div>
            <div class="form-group">
                <label>Password</label>
                <?php echo $this->Form->input('pass',
                    ['required'=> false,'label'=>false,'class'=>'form-control','type'=>'password','placeholder'=>'Password']);?>
                <!--                <p class="help-block">Please input your password</p>-->
            </div>

            <?php echo $this->Form->submit('Login',
                array('after' => $this->Html->link('Cancel', array('action' => 'userLogin')))
            );
            echo $this->Form->end();
            //            pr($user);
            ?>
        </div>
    </div>
</div>
</body>
</html>