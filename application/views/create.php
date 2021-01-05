<!DOCTYPE html>
<html>
<head>
	<title>Crud Application - Create User</title>
//<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
<body>
<div class="container">
		<a href="#" class="navbar-brand">CRUD APPLICATION</a>
</div>
<div class="container" style="padding-top: 10px;">
	<h3>Create User</h3>
	<form method="post" name="createUser" action="<?php echo base_url().'index.php/user/create';?>">
	<div class="row">

		<div class="col-md-6">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" value="<?php echo set_value('name');?>" class="form-control">
				<?php echo form_error('name');?>
			</div>
			<div class="form-group">
			    <label>Email</label>
			    <input type="text" name="email" value="<?php echo set_value('email');?>" class="form-control">
			    <?php echo form_error('email');?>
			</div>
			<div class="form-group">
				<button class="btn-primary">Create</button>
				<a href="" class="btn-secondary btn">Cancel</a>
			</div>
		</div>
	</div>
</form>

</body>
</html>