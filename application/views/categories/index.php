<div class="row">
	<div class="col-md-4  col-md-offset-0">
		<h2><?= $title; ?></h2>
		<ul class="list-group">
			<?php foreach($Categories as $category) : ?>
				<li class="list-group-item"><a href="<?php echo site_url('/categories/posts/'.$category['id']); ?>" class="btn btn-info btn-block"><?php echo $category['name']; ?></a>
					<?php if($this->session->userdata('user_id') == $category['user_id']): ?>
						<form class="cat-delete" method="post" action="<?php echo base_url(); ?>categories/delete/<?php echo $category['id']; ?>">
						<input type="submit" value="[X]" class="btn-link text-danger btn-block">
						</form>
					<?php endif; ?> 
				</li>
			<?php endforeach; ?>
		</ul>

	</div>
</div>
