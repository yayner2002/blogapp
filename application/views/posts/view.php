<h2><?php echo $post['title']; ?></h2>
	<small class="post-date">Posted on: <?php echo $post['posted_at']; ?></small><br>
	<img src="<?php echo base_url(); ?>uploads/images/post/<?php echo $post['post_image']; ?>">
<div class="post-body">
	<?php echo $post['body']; ?>
</div><br>
<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
		<a href="<?php echo base_url(); ?>post/edit/<?php echo $post['slug']; ?>" class ="btn btn-primary pull-left">Edit</a>
	<?php echo form_open('post/delete/'.$post['id']); ?>&nbsp
	<input type="submit" value="Delete Post" name="delete" class="btn btn-danger">
	<?php echo form_close(); ?>
<?php endif; ?>
<hr>
<h3>Comments:</h3>
<?php if ($comments) :?>
	<?php foreach ($comments as $comment): ?>
		<div class="well">
			<h5><?php echo $comment['body']; ?> [by <strong><?php echo $comment['name']; ?></strong>]</h5>
		</div>

	<?php endforeach; ?>
<?php else:?>
   <div class="well">
   	 <p>No Comments</p>
   </div>
<?php endif; ?>

<h2>Add Your Comments</h2>
<?php echo form_open('comments/create/'.$post['id']); ?>
<div class="form-group">
	<label>Name</label>
	<input type="text" name="name" placeholder="Ur name" class="form-control">
	<?php echo form_error("name","<div style='color:red'>","</div>"); ?>
</div>
<div class="form-group">
	<label>Email</label>
	<input type="email" name="email" placeholder="Ur Email" class="form-control">
	<?php echo form_error("email","<div style='color:red'>","</div>"); ?>
</div>
<div class="form-group">
	<label>Body</label>
	<textarea class="form-control" name="body" placeholder="Ur comments "></textarea>
	<?php echo form_error("body","<div style='color:red'>","</div>"); ?>
</div>
<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
<button class="btn btn-primary" type="submit">Submit</button>
<?php echo form_close(); ?>
