		
		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h2>Contact Information</h2>
						<div class="row">
							<div class="col-md-12">
								<div class="contact-info-wrap-flex">
									<div class="con-info">
										<p><span><i class="icon-location-2"></i></span> Semarang</p>
										<p>Puri Anjasmoro Blok J1 No.10A, Semarang, Jawa Tengah 50144</p>
									</div>
									<div class="con-info">
										<p><span><i class="icon-phone3"></i></span> <a href="tel://087733800021">(024) 762.2444</a></p>
									</div>
									<div class="con-info">
										<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@Swela.com">dcsinfo[at]</a></p>
										<p><a href="mailto:info@Swela.com">danielcreativeschool.com</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h2>Message Us</h2>
						<?php echo form_open_multipart('web/contact_user')?>
							<div class="row form-group">
								<div class="col-md-6">
									<label for="nama_depan">First Name</label>
									<input type="text" name="nama_depan" id="nama_depan" class="form-control" placeholder="Your firstname">
								</div>
								<div class="col-md-6">
									<label for="nama_belakang">Last Name</label>
									<input type="text" name="nama_belakang" id="nama_belakang" class="form-control" placeholder="Your lastname">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="text" name="email" id="email" class="form-control" placeholder="Your email address">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="subjek">Subject</label>
									<input type="text" name="subjek" id="subjek" class="form-control" placeholder="Your subject of this message">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="pesan">Message</label>
									<textarea name="pesan" id="pesan" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" name="kirim" value="Send Message" class="btn btn-primary">
							</div>
						</form>		
					</div>
				</div>
			</div>
		</div>
		<div id="map" class="colorlib-map"></div>
