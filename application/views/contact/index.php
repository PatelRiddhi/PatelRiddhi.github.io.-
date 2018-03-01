<!-- content 
			================================================== -->
		<div id="content">
			<div class="inner-content">
				<div class="contact-page">
					<div id="map">
					</div>

					<div class="contact-box">
						<div class="contact-info">
							<h1>Get in touch with us</h1>
							<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
						</div>
						<form action = "<?php echo base_url('contact/input_data'); ?>" method = "post" id = "contact-form">
							<h1>Send us a Message</h1>
							<div class="text-fields">
								<div class="float-input">
									<input name="name" id="name" type="text" placeholder="Name">
									<span><i class="fa fa-user"></i></span>
								</div>
								<div class="float-input">
									<input name="mail" id="mail" type="text" placeholder="e-mail">
									<span><i class="fa fa-envelope-o"></i></span>
								</div>
								<div class="float-input">
									<input name="website" id="website" type="text" placeholder="website">
									<span><i class="fa fa-link"></i></span>
								</div>
							</div>

							<div class="submit-area">
								<textarea name="comment" id="comment" placeholder="Message"></textarea>
								<input type="submit" id="submit_contSact" name="submit" class="main-S" value="Send Now">
								<div id="msg" class="message"></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- End content -->

	 