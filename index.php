<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="java.js"></script>   
</head>
<body><center>
	<div class="all">
		<div class="head"></div> <!--header, untuk poster -->
			<ul>
				<!--link ke halaman selanjutnya -->
				<li><a href="index.php?pages=home">Home</a></li>
				<li><a href="index.php?pages=musik">Musik</a></li>
				<li><a href="index.php?pages=berita">Article</a></li>
				<li><a href="index.php?pages=biodata">Join Us</a></li>
				<li><a href="index.php?pages=profil">About</a></li>
				
				<!--pencarian ke google-->
				<div class="pencarian">
					<label for="pencarian">
					<form name="formcari" onSubmit="cari()">Search
					</label> 
					<input name="keyword" size="25" type="text">
					<input type="submit" value="Cari!">
					</form> 
				</div>
			</ul>
		<div class="isi">
			<!--menggunkan php pada div is, supaya yang berubah hanya di isi, sedanggkan div yang laiinya tetap-->
			<?php
				if (isset($_GET['pages'])) {
					$page = $_GET['pages'];

					switch ($page) {
						case 'home':
							include "pages/home.php";
							break;
						case 'profil':
							include "pages/profil.php";
							break;
						case 'musik':
							include "pages/musik.php";
							break;
						case 'berita':
							include "pages/berita.php";
							break;
						case 'biodata':
							include "pages/biodata.php";
							break;
						case 'baca':
							include "baca.php";
							break;
						case 'list';
							include "proses.php";
							break;
						default:
							break;
					}
				}
				else{
					include "pages/home.php";
				}

			?>
		</div>
		<div class="sidebar">
			<h3>Popular Post : </h3>
			<ol>
				<li1><a href="artikel_populer1"> favorit 1</a></li1><br><br>
				<li1><a href="artikel_populer2"> favorit 2</a></li1><br><br>
				<li1><a href="artikel_populer3"> favorit 3</a></li1><br><br>
			</ol>

			<!--FORM KOMENTAR -->
			<h2>Beri Komentar / Saran :</h2>
			<table>
				<form name="formdaftar">
					<tr>
						<td>Nama : </td>
						<td><input name="nama" size="40" type="text"><br></td>
					</tr>
					<tr>
						<td>Komentar : </td>
						<td><textarea style="width: 306px; height: 100px;"></textarea></td>
					</tr>
				</form> 
			</table>
			<input type="submit" value="Komentar"  onClick="daftar()"><br><br>					
			<button onclick="displayDate()">Waktu sekarang?</button>
			<p id="demo"></p>


		</div>
		<div class="footer"> <!--footer-->
			<p>copyright &copy; 2019 Anang Bima</p>
			<br>
			<br>
			<br>
			<br>
			<a href="https://www.facebook.com/bima.perdana.1840facebook/anangbima">Facebook </a> | 
			<a href="Instagram/sangbima11">Instagram</a>
		</div>
	</div>	
</center>
</body>
</html>