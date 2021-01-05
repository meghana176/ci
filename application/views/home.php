<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Codeigniter Tutorial</title>
</head>
<body>
<h1>This is a View</h1>
<table>
	<?php foreach($users as $user):?>
		<tr>
			<td>
				<?=$user['firstname'];?>
			</td>
			<td>
				<?=$user['lastname'];?>
			</td>
		</tr>
<?php endforeach;?>
</table>
</body>
</html>