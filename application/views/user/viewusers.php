
<html>

<head>

</head>

<body bgcolor="pink">

 
<table width="600" border="1" cellpadding="5" align="center">

<tr>

<th scope="col">ID</th>

<th scope="col">FIRSTNAME</th>

<th scope="col">UEMAIL</th>

<th scope="col">PHONENUMBER</th>

<th scope="col">LOCATION</th>

<th scope="col" colspan="9">Action</th>

</tr>

<?php

foreach($info as $rows) {
?> 
    <tr>

    <td><?php echo $rows->uid; ?></td>

    <td><?php echo $rows->uname; ?></td>

    <td><?php echo $rows->uemail; ?></td>

    <td><?php echo $rows->umobile; ?></td>

    <td><?php echo $rows->ulocation; ?></td>

    <td  width="40px"><a href='edituser/<?php echo $rows->uid ;?>'>Edit</a><br/></td>

    <td  width="40px"><a href='delete_a_user/<?php echo $rows->uid ;?>'>Delete</a><br/></td>

</tr>
<?php }?>
<tr>
</tr>
</table>
</body>
</html>






