<html>
<head>
	<title>Register</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
	<link rel="stylehseet" href="<?php echo base_url() . 'assets/css/bootstrap.css'?>">
	<link rel="stylehseet" href="<?php echo base_url() . 'assets/css/style.css'?>">
<body>
	
<div class="container">
	<?php
	$msg = $this->session->flashdata('msg');
	if($msg !="") {
		echo "<div class='alert alert-success'>'.$msg.'</div>";
	}
	?>
	<div class="col-md-6">
		<div class="card mt-4">
			<div class="card-header">
				Register Here
			</div>
            <form action="<?php echo base_url() . 'index.php/Auth/register'?>" name="register form" id="registerForm" method="post">
			<div class="card-body register">
			    <p class="card-text">Please fill with your details</p>
			    <div class="form-group">
			    	<label for="name">First Name</label>
			    	<input type="text" name="first_name"  id="first_name" value=""  class="form-control <?php echo(form_error(field: 'first_name') !="") ? 'is-invalid' : '';?>"  placeholder="First name">
			    	<p><?php echo strip_tags(form_error(field: 'first_name'));?></p>
			    </div>
			     <div class="form-group">
			    	<label for="name">Last Name</label>
			    	<input type="text" name="last_name"  id="last_name"  value=""  class="form-control"  placeholder="Last name">
			    	<p><?php echo form_error(field: 'last_name');?></p>
                </div>
			     <div class="form-group">
			    	<label for="name">Email</label>
			    	<input type="text" name="email" id="email" value="" class="form-control" placeholder="Email">
			    	<p><?php echo form_error(field: 'email');?></p>
			    </div>
			     <div class="form-group">
			    	<label for="name">Phone</label>
			    	<input type="text" name="phone" id="phone" value="" class="form-control" placeholder="Phone">
			    	<p><?php echo form_error(field: 'phone');?></p>
			    </div>
			     <div class="form-group">
			    	<label for="name">Password</label>
			    	<input type="password" name="password" id="password" value="" class="form-control" placeholder="Password">
			    	<p><?php echo form_error(field: 'password');?></p>
			    </div>
			   <div class="form-group">
			    	<label for="name">Location</label>
			    	<!----
			    	<input type="text" name="location" id="location" value="" class="form-control" placeholder="Location">
			    	<p><?php echo form_error(field: 'location');?></p>
			    	--------->
    <select class="form-control" name="location" id="location">
      <option>Select city</option>
      <option value="hyd">hyd</option>
      <option value="wgl">wgl</option>
    </select>
     </div>


    <div class="form-check">
  <input class="form-check-input" name="conditions" type="checkbox" value="1" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    terms and conditions are accepted
  </label>
</div>
			    <div class="form-group">
			    	<label for="name">Gender</label><br>
			    	<input type="radio" name="selection" value="male">MALE</br>
			    	<input type="radio" name="selection" value="female">FEMAlE</br>
			    	<p><?php echo form_error(field: 'gender');?></p>
			    </div>

			    





                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary">REGISTER NOW</button>
                </div>
			</div>
		</form>
		</div> 
	</div>
</div>
</body>
</html>