<?php include("header.php");?>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>

<script>

	$(function()
	{
		$("#btn2").click(function()
			
		{
			var status = true;

			var name = $("#name").val().trim();
			if(name=="")
			{
				status = false;
				$("#name").css({"border":"1px solid red"});
			}
			else
			{
				$("#name").css({"border":""});
			}

			var email = $("#email").val().trim();
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if((email=="")||(!email.match(mailformat)))

			{
				status = false;
				$("#email").css({"border":"1px solid red"});
			}
			else
			{
				$("#email").css({"border":""});
			}



			var sub = $("#sub").val().trim();
			if(sub=="")
			{
				status = false;
				$("#sub").css({"border":"1px solid red"});
				
			}
			else
			{
				$("#sub").css({"border":""});

			}



			var message = $("#message").val().trim();
			if(message=="")
			{
				status = false;
				$("#message").css({"border":"1px solid red"});

			}
			else
			{
				$("#message").css({"border":""});
			}
			if(status==true)
			{
				alert("hfjhdf");
				var mydata = {"name":name, "email":email,"sub":sub,"message":message};

				$.ajax({
					type:"POST",
					url:"saveenquiry.php",
					data:mydata,
					success:function(response)
					{
						$("#name").val("");
						$("#email").val("");
						$("#sub").val("");
						$("#message").val("");
						$("#showmsg").html(response);
					}

				});
			}



			return status;

		});
	});		

	</script>

	<!--Header End Here-->
	<!--End mainmenu area-->
	<!-- END HEADER -->
	<!-- CONTENT -->
	<!-- Intro Section -->
	<section class="inner-intro  padding bg-img overlay-dark light-color">
		<div class="container">
			<div class="row title">
				<h1>Contact</h1>
				<div class="page-breadcrumb">
					<a>Home</a>/<span>Contact</span>
				</div>
			</div>
		</div>
	</section>
	<!-- End Intro Section -->
	<!-- Contact Section -->
	<section class="padding ptb-xs-60">
		<div class="container">

			<div class="row">

				<div class="col-lg-8">

					<div class="headeing pb-30">
						<h2>Get in Touch</h2>
						<span class="b-line l-left line-h"></span>
					</div>


					<!-- Contact FORM -->
					<form class="contact-form " id="contact">
						<!-- IF MAIL SENT SUCCESSFULLY -->
						<div id="success">
							<div role="alert" class="alert alert-success">
								<strong>Thanks</strong> for using our template. Your message has been sent.
							</div>
						</div>
						<!-- END IF MAIL SENT SUCCESSFULLY -->
						<div class="row">
							<div class="col-lg-6">
								<div class="form-field">
									<input class="input-sm form-full" id="name" type="text" name="form-name" placeholder="Your Name">
								</div>
								<div class="form-field">
									<input class="input-sm form-full" id="email" type="text" name="form-email" placeholder="Email" >
								</div>
								<div class="form-field">
									<input class="input-sm form-full" id="sub" type="text" name="form-subject" placeholder="Subject">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-field">
									<textarea class="form-full" id="message" rows="7" name="form-message" placeholder="Your Message" ></textarea>
								</div>
							</div>
							<div class="col-lg-12 mt-30">
								<button class="btn-text" type="button" id="btn2" name="button">
									Send Message
								</button>
							</div>
						</div>
					</form>
					<!-- END Contact FORM -->
				</div>

				<div class="col-lg-4 contact mt-sm-30 mt-xs-30">
					<div class="headeing pb-20">
						<h2>Contact Info</h2>
						<span class="b-line l-left line-h"></span>
					</div>
					<div class="contact-info">

						<ul class="info">
							<li>
								<div class="icon ion-ios-location"></div>
								<div class="content">
									<p>
										123 Main Street, St. NW Ste,
									</p>
									<p>
										1 Washington, DC,USA.
									</p>
								</div>
							</li>

							<li>
								<div class="icon ion-android-call"></div>
								<div class="content">
									<p>
										200 256 265 000
									</p>
									<p>
										200 256 265 000
									</p>
								</div>
							</li>
							<li>
								<div class="icon ion-ios-email"></div>
								<div class="content">
									<p>
										Support@yourmail.com
									</p>
									<p>
										http://admin@.com
									</p>
								</div>
							</li>
						</ul>
						<ul class="event-social">
							<li>
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
		<!-- Map Section -->

	</section>
	<!-- Map -->
	<section class="map-box">
		<div class="map">
			<div id="map"></div>
		</div>
	</section>
	<!-- Contact Section -->
	<!--End Contact-->
	<!-- footer -->
	<?php include("footer.php")?>