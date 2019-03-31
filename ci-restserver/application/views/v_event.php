		
		<div class="colorlib-event">
			<div class="container">
				<div class="row">
					<?php foreach($user as $u){ ?>

					<div class="col-md-4 animate-box">
						<div class="event-entry">
							<div class="desc">

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
																	<!-- tanggal dinamis -->
								<p class="meta"><span class="day"> <?php echo $date[2]; ?> </span><span class="month"> <?php echo $month; ?> </span></p>
								<p class="organizer"><span>Organized by:</span> <span> <?php echo $u->penyelenggara ?></span></p>
								<h2><a href="<?php echo base_url().'web/event' ?>"><?php echo $u->nama_event ?></a></h2>
							</div>
							<div class="location">
								<span class="icon"><i class="icon-map"></i></span>
								<p><?php echo $u->tempat ?></p>
							</div>
						</div>
					</div>
					
					<?php } ?>
					<!-- <div class="col-md-4 animate-box">
						<div class="event-entry">
							<div class="desc">
								<p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
								<p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
								<h2><a href="<?php echo base_url().'web/event' ?>">You're Invited 1st Anniversary of Eskwela</a></h2>
							</div>
							<div class="location">
								<span class="icon"><i class="icon-map"></i></span>
								<p>291 South 21th Street, Suite 721 New York NY 10016</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="event-entry">
							<div class="desc">
								<p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
								<p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
								<h2><a href="<?php echo base_url().'web/event' ?>">Practice Workshop 2018</a></h2>
							</div>
							<div class="location">
								<span class="icon"><i class="icon-map"></i></span>
								<p>291 South 21th Street, Suite 721 New York NY 10016</p>
							</div>
						</div>
					</div> -->
				</div>
				<!-- <div class="row">
					<div class="col-md-4 animate-box">
						<div class="event-entry">
							<div class="desc">
								<p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
								<p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
								<h2><a href="<?php echo base_url().'web/event' ?>">We Held Free Training for Basic Programming</a></h2>
							</div>
							<div class="location">
								<span class="icon"><i class="icon-map"></i></span>
								<p>291 South 21th Street, Suite 721 New York NY 10016</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="event-entry">
							<div class="desc">
								<p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
								<p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
								<h2><a href="<?php echo base_url().'web/event' ?>">You're Invited 1st Anniversary of Eskwela</a></h2>
							</div>
							<div class="location">
								<span class="icon"><i class="icon-map"></i></span>
								<p>291 South 21th Street, Suite 721 New York NY 10016</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="event-entry">
							<div class="desc">
								<p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
								<p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
								<h2><a href="<?php echo base_url().'web/event' ?>">Practice Workshop 2018</a></h2>
							</div>
							<div class="location">
								<span class="icon"><i class="icon-map"></i></span>
								<p>291 South 21th Street, Suite 721 New York NY 10016</p>
							</div>
						</div>
					</div>

				</div> -->
			</div>
		</div>
