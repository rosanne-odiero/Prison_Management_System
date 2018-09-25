<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
	<div class="form-group">
		<label>Firstname</label>
		<input type="text" class="form-control" name="firstname" placeholder="Firstname">
	</div>
	<div class="form-group">
		<label>Lastname</label>
		<input type="text" class="form-control" name="lasttname" placeholder="Lastname">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="email" class="form-control" name="email" placeholder="Email">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close(); ?>