<?php 
include 'Ust.php';
?>
	



	


	<!-- letest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>YENİ EKLENEN ÜRÜNLER</h2>
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
	<!-- letest product section end -->



	


	


	<?php 
include 'Alt.php';
?>