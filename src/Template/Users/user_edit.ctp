<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit user </title>
    <link rel="stylesheet" href=http://project-demo001.com/css/bootstrap-3.3.7-dist/css/bootstrap.css"/>
</head>
<body>
<div>
    <?php echo $this->Html->link(
        'User List',
        ['controller' => 'Users', 'action' => 'usersList'],
        ['class' => 'btn-info btn-sm']
    );
    ?>
</div>

<?php
echo $this->Form->create('User');
echo $this->Form->input('User.username', ['label' => 'User Name', 'value' => $user->username]);
echo $this->Form->label('Sex');
echo $this->Form->radio('User.sex', array('0' => 'Male', '1' => 'Female'), ['value' => $user->sex]);
//echo $this->Form->submit('Submit',
//    array('after' => $this->Html->link('Cancel', array('action' => 'userList')))
//);
echo $this->Form->end();
?>

<!--sdadad asda asda asd asd sada asd assss-->
</body>
</html>