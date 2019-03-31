		
		<div class="colorlib-blog colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Berita Daniel Creative School</h2>
						<p>Berbagai berita seputar kegiatan  yang ada di lingkungan DCS</p>
					</div>
				</div>

				
				<div class="row">
						<?php
							function limit_words($string, $word_limit){
						        $words = explode(" ",$string);
						        return implode(" ",array_splice($words,0,$word_limit));
						    }
									
									foreach ($user as $i) :
										$id=$i->id;
										$judul=$i->judul;
										$image=$i->gambar;
										$isi=$i->isi;
										$tanggal=$i->tanggal;
										$sumber=$i->sumber;

								?>
								<div class="col-md-4 animate-box">
									<article class="article-entry">
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
									</article>
								</div>
								<?php endforeach;?>
							</div>
<!--
					<?php foreach($user as $u){ ?>
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(<?php echo base_url() ?>/assets/img/<?php echo $u->gambar ?>);">
								<?php 
									$date=(explode('-', $u->tanggal, 3));
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
								<h2><a href=""><?php echo $u->judul ?></a></h2>
								<p class="admin"><span>Posted by:</span> <span><?php echo $u->sumber ?></span></p>
							
								<a href="<?php echo base_url().'web.php/post_berita/view_berita/'.$u->id;?>"> Selengkapnya ></a>
							</div>
						</article>
					</div>
					<?php } ?>

-->
					<!-- <div class="col-md-4 animate-box"> 
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-2.jpg);">
								<p class="meta"><span class="day">18</span><span class="month">Apr</span></p>
							</a>
							<div class="desc">
								<h2><a href="blog.html">Creating Mobile Apps</a></h2>
								<p class="admin"><span>Posted by:</span> <span>James Smith</span></p>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
							</div>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-3.jpg);">
								<p class="meta"><span class="day">18</span><span class="month">Apr</span></p>
							</a>
							<div class="desc">
								<h2><a href="blog.html">Creating Mobile Apps</a></h2>
								<p class="admin"><span>Posted by:</span> <span>James Smith</span></p>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
							</div>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-4.jpg);">
								<p class="meta"><span class="day">18</span><span class="month">Apr</span></p>
							</a>
							<div class="desc">
								<h2><a href="blog.html">Creating Mobile Apps</a></h2>
								<p class="admin"><span>Posted by:</span> <span>James Smith</span></p>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
							</div>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-5.jpg);">
								<p class="meta"><span class="day">18</span><span class="month">Apr</span></p>
							</a>
							<div class="desc">
								<h2><a href="blog.html">Creating Mobile Apps</a></h2>
								<p class="admin"><span>Posted by:</span> <span>James Smith</span></p>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
							</div>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-6.jpg);">
								<p class="meta"><span class="day">18</span><span class="month">Apr</span></p>
							</a>
							<div class="desc">
								<h2><a href="blog.html">Creating Mobile Apps</a></h2>
								<p class="admin"><span>Posted by:</span> <span>James Smith</span></p>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
							</div>
						</article>
					</div>-->


				</div>
			</div>
		</div>
