<?php 
include("header.php");
?>

<div class="home">		
	<?php
	$open = (isset($_GET["open"]) ? $_GET["open"] : '') ;
	
	switch ($open) {
		case "cat":
		include("kategori.php");
		break;
		
		case "detail":
		include("detail.php");
		break;

		case "cari":
		include("cari.php");
		break;
		
		default:
		include("depan.php");
		break;
	}

	?>
</div>

<?php 
include("footer.php");
?>