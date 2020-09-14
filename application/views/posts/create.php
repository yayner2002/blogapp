<div class="row">
	<div class="col-md-8 col-md-offset-0">
		
		<h2><?= $title ?></h2>

		<!-- <?php echo validation_errors(); ?> -->
		<?php echo form_open_multipart('post/create'); ?>
			<div class="form-group">
				<label>Title</label>
				<input type="text" name="title" placeholder="Add Title" class="form-control">
				 <?php echo form_error("title","<div style='color:red'>","</div>"); ?>
			</div>

			<div class="form-group">
				<label>Body</label>
				<textarea id="editor1" class="form-control" placeholder="Add Body" name="body"></textarea>
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
				<?php echo form_error("category","<div style='color:red'>","</div>"); ?>
			</div>
				<div class="form-group">
				<label>Upload Image</label>
				<input type="file" name="userfile" size="20">
				<?php echo form_error("userfile","<div style='color:red'>","</div>"); ?>
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Create Post" class="btn btn-primary">
			</div>
		<?php echo form_close(); ?>
	</div>
</div>