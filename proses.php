<div class="pages">
<div>
<?php

	//menyimpan data yang sudah dimasukkan sebelumnya di biodata.php kedalam file data.txt

	$fp = fopen("data.txt","a+");    

	//pemberian nama variabe
	$nama1 = $_POST['nama'];
	$ttl1 = $_POST['ttl'];
	$kelamin1 = $_POST['kelamin'];
	$komentar1 = $_POST['komentar'];

	//menyimpan data ke file dengan fungsi fputs
	fputs($fp,"$nama1 | $ttl1 | $kelamin1 | $komentar1\n");
	fclose($fp);

	include "baca.php";

?>
</div>
</div>