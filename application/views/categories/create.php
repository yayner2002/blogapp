<div class="row">
	<div class="col-md-4 col-md-offset-4">
				<h2>
		<?= $title; ?></h2>
		<?php echo form_open_multipart('categories/create'); ?>
		<div class="form-group">
			<label>Category Name</label>
			<input type="text" name="name" class ="form-control" placeholder="Enter Name Of Category">
			<?php echo form_error('name',"<div style=color:red>",'</div>'); ?>
		</div>
		<input type="submit" name="submit" value="Add" class="btn btn-primary btn-block">
		<?php echo form_close(); ?>
	</div>
</div>