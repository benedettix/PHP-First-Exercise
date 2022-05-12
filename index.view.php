<?php include "partials/head.php"?>
<?php include "partials/navbar.php"?>
<div class="container">
    <div class="row">
        <?php foreach($users as $user) : $index++?>
        <div class="col-3 text-center border mx-2 p-3">
            <h3><?php echo $index?></h3>
            <p><?php echo "$user[username]"?></p>
            <p><?php echo "$user[password]"?></p>
            <p><?php echo "$user[date]"?></p>
            <button class="btn btn-primary"><?php echo "$user[created_from]"?></button>
            <button class="btn btn-warning"><?php echo "$user[created_for]"?></button>
        </div>

        <?php endforeach?>
    </div>
</div>
<?php include "partials/bottom.php"?>