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
                User Register
            </div>
        </div>
        <div class="panel-body">
            <?php
            echo $this->Form->create($user);?>
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
            <div class="form-group">
                <label>Password Confirm</label>
                <?php echo $this->Form->input('pass_confirm',
                    ['required'=> false,'label'=>false,'class'=>'form-control','type'=>'password','placeholder'=>'Password Confirm']);?>
<!--                <p class="help-block">Please confirm your password</p>-->
            </div>
            <?php echo $this->Form->submit('Submit',
            array('after' => $this->Html->link('Cancel', array('action' => 'userRegister')))
            );
            echo $this->Form->end();
            pr($user);
            ?>
        </div>
    </div>
</div>
</body>
</html>