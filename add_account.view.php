<div class="container">
<form action="account_to_users.php" method="post">
  <div class="form-group">
    <label for="username">Create Username</label>
    <input type="text" class="form-control" name="username" placeholder="username">
    <small class="form-text text-muted">We'll never share your username with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Create Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="date">Create Date</label>
    <input type="date" class="form-control" name="date">
  </div>
  <div class="form-group">
  <label for="created_for">For user:</label>
        <select class="form-control" name="created_for">
            <?php foreach($users as $user):?>
                <option value="<?php echo "$user[created_for]"?>"><?php echo "$user[created_for]"?></option>
            <?php endforeach;?>
        </select>
  </div>
  <button type="submit" class="btn btn-primary">Create User</button>
</form>
</div>