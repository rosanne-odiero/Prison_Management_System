<!--<h2><?php echo $post['firstname']; ?></h2>
<h2><?= $title; ?></h2>-->
<div class="post-body">
	<h2><?php echo $prisoner['firstname']?> <?php echo $prisoner['lastname']?></h2>
	<p><?php echo $prisoner['charges'];?></p>
</div>
<small class="post-date">Registered on <?php echo $prisoner['register_date']; ?></small><br>

<hr>
<a class="btn btn-primary pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $prisoner['firstname'];?>">Edit</a>
<?php echo form_open('/posts/delete/'.$prisoner['id']); ?>
	<input type="submit" value="Delete" class="btn btn-danger">
</form>

