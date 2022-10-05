<!--Checkout Input-->
<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>	
	<div class="header">
		<h2>CHECKOUT</h2>
		<P>JASTORE</P>
	</div>
	<div class="main"><center>
		<form action="index2.php" method="POST">
			<table>
				<tr>
					<td>
						<label>Nama Pembeli</label>
						<input type="text" name="nama"></input>
					</td>
					<td>
						<label>Nama Barang</label>
						<input type="text" name="barang"></input>
					</td>
					<td>
						<label>Jumlah Barang</label>
						<input type="number" name="jumlah"></input>
					</td>
					<td>
						<label>Harga Satuan</label>
						<input type="number" name="harga"></input>
					</td>
					<td>
						<input class="submit" type="submit" name="submit"></input>
					</td>
				</tr>
			</table>
		</form>
	</div></center>
</body>
</html>