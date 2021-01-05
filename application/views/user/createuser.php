<html>

    <head>


    </head>
    <body>

    	<?php echo form_open('user/createuser');   ?>
    	Name:<input type='text'  name='name' value=''/></br>
    	Email:<input type='email'  name='email' value=''/></br>
    	Mobile:<input type='text'  name='mobile' value=''/></br>
    	Location:<input type='text'  name='location' value=''/></br> 
    	<input type='submit'  name='submit' value='Createuser'/></br>

    	<?php echo form_close();   ?>
    </body>

 </html>