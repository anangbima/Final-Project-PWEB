<div class="pages">
	<center><h1>JOIN US</h1>
	<p>Join Us untuk menjadi salah satu fans musik metal</p>
	<!-- input data diri yang prosesnya akan dialihkan ke proses.php -->
	<form name="form1" method="post" action="proses.php">
	<table>
		<tr>
			<td>Nama Lengkap</td>
			<td><input name="nama" type="text" id="nama"></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><input type="date" name="ttl" id="ttl"></td>
		</tr>
		<tr>
			<td>Jenis kelamin</td>
			<td><select name="kelamin" id="kelamin">
			<option>laki - laki</option>
			<option>Perempuan</option>
			</select></td>
		</tr>
		<tr>
			<td>Alasan ingin Join</td>
			<td><textarea name="komentar" id="komentar"></textarea></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="Submit" value="Kirim"><input type="reset"
			name="Submit2" value="Reset">
		</td>
		</tr>
		</table>
		</form>

		<!--link untuk menampilkan data yang tersmpan di data.txt -->
		<p>klik link dibawah untuk melihat orang yang telah join</p>
		<a href="index.php?pages=baca">Yang Telah join</a>
	</center>
</div>