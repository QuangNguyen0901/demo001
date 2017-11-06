<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sach user </title>
    <link rel="stylesheet" href="http://project-demo001.com/css/bootstrap-3.3.7-dist/css/bootstrap.css"/>
</head>
<body>
<h3>Users</h3>
<?php echo $this->Html->link(
    'Add',
    ['controller' => 'Users', 'action' => 'userAdd'],
    ['class' => 'btn-success btn-sm']
);
?>
<?php echo $this->Html->link(
    'sample',
    ['controller' => 'Users', 'action' => 'userEdit2'],
    ['class' => 'btn-info btn-sm']
);
?>
<?php echo $this->Html->link(
    'Register',
    ['controller' => 'Users', 'action' => 'userRegister'],
    ['class' => 'btn-info btn-sm']
);
?>
<div class="table-bordered" style="align-content: center">
    <?php
    foreach ($users as $user) {
        ?>
        <div class="1user table-bordered" style="float:left; width: 150px; margin:5px;">
            <h4> User ID : <?php echo $user->user_id ?></h4>
            <p><?php echo $this->Html->link(
                    $user->username,
                    ['controller' => 'Users', 'action' => 'userDetail', $user->user_id]  //
                ); ?></p>
            <h4> Sex</h4>
            <p> <?php echo $user->sex ?></p>

            <?php echo $this->Html->link(
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
        </div>
        <?php
    }
    ?>
</div>
</body>
</html>