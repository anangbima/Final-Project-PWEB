function cari() {  //fungsi untuk pencarian yang mengarah ke google
	var kata = document.formcari.keyword.value;
	var hasil= "http://www.google.com/search?q=" + kata ;
	window.open(hasil, 'google', config='height=500, width=auto, scrollbars=yes location=yes') 
}

function displayDate() {  //fugsi untuk menampilkan waktu sekarang
  document.getElementById("demo").innerHTML = Date();
}

function daftar() {  //fungsi untuk mmberi peringatan jika value nama kosong
	var nama= document.formdaftar.nama.value;
	if(nama== "") alert("nama tidak boleh kosong");
}

