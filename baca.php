<div class="pages">
	<h1><center>ORANG YANG TELAH JOIN</center></h1>

	<?php

			//membaca data yang terletak pada data.txt 

			$fp = fopen("data.txt","r") or die("file tidak bisa terbuka");
			
			echo "<br>";
			echo "<table border=0>";

			//$isi dalam bentuk string diambil dari data.txt
			while ($isi = fgets($fp,80))
			{

			//fungsi explode, memiliki fungsi sebagai pemisah sting, jadi string $isi dipisah - pisah
			$pisah = explode("|",$isi);

			//string yang dipisah akan menjadi array
			echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>";
			echo "<tr><td>Tanggal lahir </td><td>: $pisah[1]</td></tr>";
			echo "<tr><td>Kelamin </td><td>: $pisah[2]</td></tr>";
			echo "<tr><td>Komentar </td><td>: $pisah[3]</td></tr>

			<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
			}

			fclose($fp);
		?>
		<table>
			
		</table>
</div>