<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="Username">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" name="password" placeholder="Password">
  </div> 
   <div class="form-group">
    <label>Confirm Password</label>
    <input type="text" class="form-control" name="cpassword" placeholder="Retype Password">
  </div> 
  <button type="submit" class="btn btn-default">Submit</button>
</form>