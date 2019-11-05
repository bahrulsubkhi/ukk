<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title;?></title>
</head>
<body>
<form action="index.php/welcome/savedata" method="POST" enctype="multipart/form-data" >
	Nama
	<input type="text" name="nama"/>
	<p>Telphone
	<input type="text" name="tlp">
	<p>Alamat
	<input type="text" name="alamat">
	<p><button type="submit">save</button></p>
</form>

<?php foreach($user as $use){ ?>
	<table border='2'>
		<tbody>
			<tr>
				<td><?= $use->id?></td>
				<td><?= $use->nama?></td>
				<td><?= $use->tlp?></td>

			</tr>
		</tbody>
		
	</table>
<?php } ?>

</body>
</html>