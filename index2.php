<!--Checkout Output-->
<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<?php
 $total= $_POST['jumlah'] * $_POST['harga'];
?>
<body>
<center>
<div class="header">
	<h2>Checkout Results</h2>
	<p>JaStore</p>
</div>
<div class="main">
	<table border="1" cellpadding="0" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Nama Pembeli</th>
			<th>Nama Barang</th>
			<th>Jumlah Barang</th>
			<th>Harga Satuan</th>
			<th>Total</th>
		</tr>
		<tr>
			<td>1</td>
			<td><?php echo $_POST['nama'];?></td>
			<td><?php echo $_POST['barang'];?></td>
			<td><?php echo $_POST['jumlah'];?></td>
			<td><?php echo $_POST['harga'];?></td>
			<td><?php echo $total;?></td>
		</tr>
	</table>
</div>
</center>
</body>
</html>