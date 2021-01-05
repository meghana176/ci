<html>

    <head>


    </head>
    <body>

    	<?php echo form_open('user/updateuser');   ?>
    	UID:<input type='text'  name='uid' value='<?php echo $uid ;?>'/></br>
    	Name:<input type='text'  name='ename' value=''/></br>
    	Email:<input type='email'  name='email' value=''/></br>
        Mobile:<input type='text'  name='emobile' value=''/></br>
    	Location:<input type='text'  name='elocation' value=''/></br> 
    	<input type='submit'  name='esubmit' value='Update User'/></br>

    	<?php echo form_close();   ?>

    </body>

 </html>