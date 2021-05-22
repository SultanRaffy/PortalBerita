<?php 
include("inc/fungsi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portal Berita</title>
	<link rel="stylesheet" type="text/css" href="./assets/style.css">
</head>
<body>
	<div class="wrap">
		<div>
		<header>
			<nav>
				<a href="./">Home</a>
				<?php 
				global $connect;
				$menu = mysqli_query($connect,"SELECT * FROM kategori WHERE Terbit='1' ORDER BY ID ASC LIMIT 0,10");
				while ($r = mysqli_fetch_array($menu)) {
					extract($r);
					echo
					'<a href="./?open=cat&id='.$ID.'">'.$Kategori.'</a>';
				}
				?>

				<form action="" method="GET" class="btn fr" style="margin-top:-5px; margin-right: -8px;">
				 	<input type="text" name="key" placeholder="Cari..">
				 	<input type="submit" name="open" value="cari">
				</form>
			</nav>
		</header>
