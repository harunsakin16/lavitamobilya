<?php 
include"Ust.php";

$Urun=$db->prepare("SELECT * FROM urun WHERE urun_id=?");
$Urun->execute(array(intval($_GET['id'])));
if($Urun->rowCount()==1)
{
	$Urun=$Urun->fetch();
	$db->query("UPDATE urun SET urun_gosterilme=(urun_gosterilme+1) WHERE urun_id=".$Urun['urun_id']);
}
else 
{
	header("Location:./");
	exit;
}
?>
	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Ürün Detayı</h4>
			<div class="site-pagination">				
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- product section -->
	<section class="product-section">
		<div class="container">
			<div class="back-link">
				<a href="index.php"> &lt;&lt; Geri Dön</a>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="product-pic-zoom">
						<img class="product-big-img" src="img/single-product/1.jpg" alt="">
					</div>
					
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-title"><?php echo $Urun['urun_adi'] ?></h2>
					<h3 class="p-price"><?php echo number_format($Urun['urun_fiyat'],2,",",".")." TL" ?></h3>
					<h4 class="p-stock">Durum: <span>Stokta var</span></h4>
					<div class="p-rating">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o fa-fade"></i>
					</div>
					<div class="p-review">
						<a href=""><?php echo $Urun['urun_gosterilme']  ?></a> Kez Gösterildi
					</div>
					
					<div class="quantity">
						<p>MİKTAR</p>
                        <div class="pro-qty"><input type="text" value="1"></div>
                    </div>
					<a href="#" class="site-btn">SATIN AL</a>
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Ürün Açıklaması</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<?php echo $Urun['urun_aciklama'] ?>
								</div>
							</div>
						</div>
					</div>
					<div class="social-sharing">
						<a href=""><i class="fa fa-google-plus"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- product section end -->


	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>BLOG</h2>
						<p>Burası BLOG Alanıdır</p>
						
					</div>
				</div>
				
		

			</div>
		</div>
	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
