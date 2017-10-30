<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit user  </title>
    <link rel="stylesheet" href="../webroot/css/bootstrap-3.3.7-dist/css/bootstrap.css"/>
</head>
<body>
<?php
echo $this->Form->create('User');
echo $this->Form->input('User.username',['value'=> $user->username]);
echo $this->Form->submit('Submit',
    array('after' => $this->Html->link('Cancel', array('action' => 'userList')))
);
echo $this->Form->end();
?>

<!--sdadad asda asda asd asd sada asd assss-->
</body>
</html>