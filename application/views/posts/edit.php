
<h2><?= $title ?></h2>

<!-- <?php echo validation_errors(); ?> -->
<?php echo form_open('post/update'); ?>
<input type="hidden" name="id" value="<?php echo $post['id']; ?>"> 
	<div class="form-group">
		<label>Title</label>
		<input type="text" name="title" placeholder="Add Title" class="form-control" value="<?php echo $post['title']; ?>">
		 <?php echo form_error("title","<div style='color:red'>","</div>"); ?>
	</div>

	<div class="form-group">
		<label>Body</label>
		<textarea id="editor1" class="form-control" placeholder="Add Body" name="body"><?php echo $post['body']; ?></textarea>
		<?php echo form_error("body","<div style='color:red'>","</div>"); ?>
	</div>
	<div class="form-group">
		<label>Category</label>
		<select id="category-id" class="form-control" name="category">
			<?php foreach($categories as $category): ?>
				<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?>
					
				</option>

			<?php endforeach; ?>
		</select>
		<?php echo form_error("body","<div style='color:red'>","</div>"); ?>
	</div>
	<div class="form-group">
		<input type="submit" name="submit" value="Update" class="btn btn-info">
	</div>
<?php echo form_close(); ?>