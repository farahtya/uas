<?php 
require 'functions.php';
$id = $_GET["id"];
if (hapusitem($id) > 0 ) {
	echo "
		<script>
			alert('Produk berhasil dihapus!');
			document.location.href = 'index.php';
		</script>
	";
    } else {
	echo "
		<script>
			alert('Produk gagal dihapus!');
			document.location.href = 'index.php';
		</script>
	";
	}
 ?>