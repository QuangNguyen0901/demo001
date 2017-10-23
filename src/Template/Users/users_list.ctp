<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sach user </title>
    <link rel="stylesheet" href="/webroot/css/bootstrap-3.3.7-dist/css/bootstrap.css"/>
</head>
<body>
<h3>Users</h3>
<div class="table-bordered" style="align-content: center">

    <?php
    foreach ($users as $user){
        ?>

        <div class="1user table-bordered" style="float:left; width: 150px; margin:5px;">
            <h4> User</h4>
            <p><?php echo $this->Html->link(
                $user->username,
                ['controller' => 'Users', 'action' => 'userDetail', $user->user_id]
                );?></p>
            <h4> Sex</h4>
            <p> <?php echo $user->sex ?></p>
        </div>
        <?php
    }
    ?>

</div>
</body>
</html>