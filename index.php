<?php 
include 'Ust.php';
?>
	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="koltuk1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<h2>KOLTUK TAKIMLARI</h2>
							<p>LaVita'nın birbirinden güzel, göz kamaştıran koltuk takımları çok uygun fiyatlarla sizleri karşılıyor. </p>
							<a href="#" class="site-btn sb-line">İNCELE</a>
							<a href="#" class="site-btn sb-white">SEPETE EKLE</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<h4>2500 TL'DEN</h4>
						<span>BAŞLAYAN FİYATLARLA</span>						
						<p>ŞİMDİ SATIN AL</p>
					</div>
				</div>
			</div>
			
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->



	


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