<!-- 		<div id="colorlib-subscribe" class="subs-img" style="background-image: url(<?php echo base_url() ?>assets/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Subscribe Newsletter</h2>
						<p>Subscribe our newsletter and get latest update</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-6 col-md-offset-3">
						<div class="row">
							<div class="col-md-12">
							<form class="form-inline qbstp-header-subscribe">
								<div class="col-three-forth">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
									</div>
								</div>
								<div class="col-one-third">
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Subscribe Now</button>
									</div>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<footer id="colorlib-footer">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>About SMA N 1 Tayu</h4>
						<p>SMA N 1 Tayu atau yang lebih dikenal dengan sebutan SMANTA, merupakan sekolah unggulan nomer 3 di daerah Kabupaten Pati. Sekolah yang menjadi urutan ketiga ini juga tidak kalah dengan sekolah-sekolah di atasnya. Fasilitas yang dimiliki di SMANTA ini sudah sangat mumpuni dan layak. Lab. Fisika, Lab. Kimia, Lab. Biologi, Lab Komputer, Lab. Bahasa</p>
						<p>
					  <ul class="colorlib-social-icons">
								<li><a href="https://twitter.com/sman1tayu"><i class="icon-twitter"></i></a></li>
								<li><a href="https://www.facebook.com/SMA-N-1-TAYU-244263385601417/"><i class="icon-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/osissman1tayu/"><i class="icon-instagram"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Quick Links</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="<?php echo base_url().'web/about'?>"><i class="icon-check"></i> About Us</a></li>
								<li><a href="<?php echo base_url().'web/news'?>"><i class="icon-check"></i> News</a></li>
								<li><a href="<?php echo base_url().'web/contact'?>"><i class="icon-check"></i> Information</a></li>
							</ul>
						</p>
					</div>

<!--
					<div class="col-md-3 colorlib-widget">
						
						<h4>Recent Post</h4>				
						<?php
															
									foreach ($user as $i) :
										$id=$i->id;
										$judul=$i->judul;
										$image=$i->gambar;
										$isi=$i->isi;
										$tanggal=$i->tanggal;
										$sumber=$i->sumber;

								?>
								<div class="f-blog">
									<a href="<?php echo base_url().'post_berita/view_berita/'.$id;?>" class="blog-img" style="background-image: url(<?php echo base_url() ?>/assets/img/<?php echo $image ?>);">
												<?php 
													$date=(explode('-', $tanggal, 3));
													if($date[1]==='01'){
														$month="jan";
													}elseif ($date[1]==='02') {
														$month="feb";
													}elseif ($date[1]==='03') {
														$month="mar";
													}elseif ($date[1]==='04') {
														$month="apr";
													}elseif ($date[1]==='05') {
														$month="may";
													}elseif ($date[1]==='06') {
														$month="jun";
													}elseif ($date[1]==='07') {
														$month="jul";
													}elseif ($date[1]==='08') {
														$month="ags";
													}elseif ($date[1]==='09') {
														$month="sep";
													}elseif ($date[1]==='10') {
														$month="okt";
													}elseif ($date[1]==='11') {
														$month="nov";
													}elseif ($date[1]==='12') {
														$month="des";
													}

													 ?>
												<p class="meta"><span class="day"><?php echo $date[2]; ?></span><span class="month"><?php echo $month; ?></span></p>
											</a>
											<div class="desc">
											<?php //echo limit_words($isi,30);?>
											<h2><?php echo $judul;?></h2><hr/>
											<p class="admin"><span>Posted by:</span> <span><?php echo $sumber ?></span></p>
											<a href="<?php echo base_url().'post_berita/view_berita/'.$id;?>"> Selengkapnya ></a>
									</div>
								</div>
								<?php endforeach;?>
							</div>

					<div class="col-md-3 colorlib-widget">
						
						<h4>Recent Post</h4>
						
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(<?php echo base_url() ?>assets/images/blog-1.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">Creating Mobile Apps</a></h2>
								<p class="admin"><span>18 April 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(<?php echo base_url() ?>assets/images/blog-2.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">Creating Mobile Apps</a></h2>
								<p class="admin"><span>18 April 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(<?php echo base_url() ?>assets/images/blog-3.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">Creating Mobile Apps</a></h2>
								<p class="admin"><span>18 April 2018</span></p>
							</div>
						</div>
					</div>-->

					<div class="col-md-3 colorlib-widget">
					  <h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<p><span><i class="icon-location-2"></i></span>PATI</p>
							<p>Jl. P. Diponegoro No. 60, Tayu, Jepat Lor, Tayu, Kabupaten Pati, Jawa Tengah 59155 </p>
							<li><a><i class="icon-phone"></i>(0295) 452350</a></li>
							<li><a><i class="icon-envelope"></i>sman_tayu@yahoo.co.id</a></li>
							<li><a><i class="icon-world"></i>www.sman1tayu.sch.id</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								<small class="block">&copy; SMAN 1 Tayu | Trayutama <a href="https://colorlib.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</small><br> 
								<!--<small class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a>, <a href="http://pexels.com/" target="_blank">Pexels</a></small>-->
						  </p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url() ?>assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url() ?>assets/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?php echo base_url() ?>assets/js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url() ?>assets/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="<?php echo base_url() ?>assets/js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="<?php echo base_url() ?>assets/js/main.js"></script>

	</body>
</html>