<!--Checkout Output-->
<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
	<style type="text/css">
		html,body {
			margin: 0;
			padding: 0;
		}
		.header {
			background: #222222;
			color: #dfdfdf;
			padding: 1vh;
		}
		.main {
			margin: 0;
			padding: 0;
		}
		h2 {
			font-family: sans-serif;
			padding: 1px;
			margin: 0;
		}
		p {
			font-family: sans-serif;
			font-size: 3vh;
			padding: 1px;
			margin: 0;
		}
		table {
			margin: 3vh;
		}
		th {
			padding: 1vh;
			background: darkblue;
			color: #dfdfdf;
		}
		td {
			padding: 1vh;
		}
	</style>
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