<h2><?= $title ?></h2>
<?php foreach ($posts as $post): ?>
	<h3><?php echo $post['title']; ?></h3>
	<div class="row">
		<div class="col-md-3">
			
			<img src="<?php echo base_url(); ?>uploads/images/post/<?php echo $post['post_image']; ?>" width="200px" height="100px">

			
		</div>
		<div class="col-md-9">
			<small class="post-date">Posted on <?php echo $post['posted_at']; ?> in <?php echo $post['name']; ?></small><br>
	        <?php echo word_limiter($post['body'],50); ?><br><br><a href="<?php echo site_url('/post/'.$post['slug']); ?>" class="btn btn-primary">Read More</a>
			
		</div>
	</div>
	
	
	<?php endforeach; ?>
	<div class="pagination-links">
    	<?php echo $this->pagination->create_links(); ?>
	</div>
	