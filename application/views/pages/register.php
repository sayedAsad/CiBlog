<h2><?php echo $title;?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('Authentication/register');?>
<div class="form-group">
	<label>Name</label>
	<input type="text" name="name" class="form-control" placeholder="Name">
</div>
<div class="form-group">
	<label>Full Name</label>
	<input type="text" name="fname" class="form-control" placeholder="Full Name">
</div>

<div class="form-group">
	<label>Address</label>
	<input type="text" name="add" class="form-control" placeholder="Address">
</div>

<button type="submit" class="btn btn-default" >Submit</button>
</form>