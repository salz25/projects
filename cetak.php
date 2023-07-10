<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="25%">Id</th>
			<th width="25%">Nama</th>
			<th width="25%">Alamat</th>
			<th width="25%">Pekerjaan</th>
		</tr>
		<?php 
		$sql = mysqli_query($koneksi,"select * from user");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['pekerjaan']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>