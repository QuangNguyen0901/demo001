<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Danh sach user </title>
    <link rel="stylesheet" href="/webroot/css/bootstrap-3.3.7-dist/css/bootstrap.css"/>
</head>
<h4>Chi tiet user ID <?php echo $user->user_id ?></h4>
<p> <?php echo $user->username ?></p>
<h4>Gioi tinh</h4>
<p><?php echo $user->sex ?></p>
<?php //echo $this->Form->postButton('Delete Record', ['controller' => 'Users', 'action' => 'userDelete', $user->user_id],
//    ['class' => 'btn-danger btn-sm']) ?>

<?php echo $this->Html->link(
    'Delete',
    ['controller' => 'Users', 'action' => 'userDelete', $user->user_id],
    ['class' => 'btn-info btn-sm', 'confirm' => 'Xóa user?']
);
?>
<?php echo $this->Html->link(
    'Edit',
    ['controller' => 'Users', 'action' => 'userEdit', $user->user_id,2],
    ['class' => 'btn-info btn-sm']
);
?>

</body>
