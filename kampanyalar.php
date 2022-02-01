<?php 
include 'Ust.php';
?>

	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>KAMPANYALAR</h2>
			</div>
			
			<div class="row">
				<?php 
				$Urunler=$db->query("SELECT * FROM urun WHERE urun_vitrin=1 ORDER BY rand() LIMIT 8");
				while ($Urun=$Urunler->fetch())
				{ 									
				?>
				<div class="col-lg-3 col-sm-6">
				<?php UrunListeGorunumu($Urun) ?>
				</div>
				<?php 
			}
				?>
			</div>
			
		</div>
	</section>
	<!-- Product filter section end -->


	<?php 
include 'Alt.php';
?>