<?php 
include 'Ust.php';
?>

	
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>ÜRÜNLER</h2>
			</div>
			<div class="product-slider owl-carousel">
				<?php 
				$Urunler=$db->query("SELECT * FROM urun ORDER BY urun_id DESC LIMIT 5");

				while($Urun=$Urunler->fetch())
				UrunListeGorunumu($Urun);
				?>
			</div>
		</div>
	</section>
	


	<?php 
include 'Alt.php';
?>