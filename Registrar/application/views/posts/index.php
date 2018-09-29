 <h2><?= $title ?></h2>
<?php foreach($prisoner as $post) : ?>
	<h3  class="text-success"><?php echo $post['firstname'] ?> <?php echo $post['lastname'] ?></h3>
	<div class="row">
	<div class="col-md-3">
		<img class="prisoner-thumb thumbnail" src="<?php echo site_url(); ?>assests/images/prisoner/<?php echo $post['prisoner_image']; ?>">
	</div>
	<div class="col-md-9">
		<p>Charges: <?php echo  word_limiter($post['charges'], 60); ?></p>
	<p>Email: <?php echo $post['email']; ?></p>
	<p><a class="btn btn-primary" href="<?php echo site_url('/posts/'.$post['firstname']);?>"> Read more</a></p>
	<tr class="table-active"> 
		<table class="table table-hover">
			<th scope="row">
				<small class="post-date">Registered on <?php echo $post['register_date']; ?>; Duty<strong> <?php echo $post['name']; ?></strong></small><br>
			</th>	
		</table>	
	</div>	
	</div>
<?php endforeach; ?>