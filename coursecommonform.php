<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>

	<script type="text/javascript">
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
			var mobile = $("#mobile").val().trim();
			if(mobile=="")
			{
				status = false;
				$("#mobile").css({"border":"1px solid red"});
			}
			else
			{
				$("#mobile").css({"border":""});
			}
			var co = $("#co").val();
			if(co=="0")
			{
				status = false;
				$("#co").css({"border":"1px solid red"});
			}
			else
			{
				$("#co").css({"border":""});
			}
			var location = $("#location").val();
			if(location=="0")
			{
				status = false;
				$("#location").css({"border":"1px solid red"});
			}
			else
			{
				$("#location").css({"border":""});
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
				var mydata = {"name":name,"mobile":mobile,"co":co,"location":location,"message":message};
				$.ajax({
					type:"POST",
					url:"courseenquiry.php",
					data:mydata,
					success:function(response)
					{
						$("#name").val("");
						$("#mobile").val("");
						$("#co").val("");
						$("#location").val("");
						$("#message").val("");
						$("#showmsg").html(response);
					}
				});
			}
			return status;
		});
	});	
	</script>
</head>
<body>
	<div class="form_home">
					<div class="row bg_home_form">
						<div class="col-lg-12 col-md-12 mb-30">
							<div class="creative_heading">
								<h2 class="white_color text-center">Enquiry Form</h2>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-field">
								<input class="input-lg form-full" id="name" type="text" name="form-name" placeholder="Your Name">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-field">
								<input class="input-lg form-full" id="mobile" type="text" name="form-mobile" placeholder="Mobile">
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-field">
								<select class="input-lg form-full" id="co" placeholder="Select Location">
									<option value="0">-Select Course-</option>
									<option value="English">English</option>
									<option value="Hindi">Hindi</option>
									<option value="Telgu">Telgu</option>
									<option value="Kanadda">Kanadda</option>
								</select>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-field">
								<select class="input-lg form-full" id="location" placeholder="Select Location">
									<option value="0">-Select Location-</option>
									<option value="Marathahalli">Marathahalli</option>
									<option value="Adugodi">Adugodi</option>
									<option value="Bannerghata Road">Bannerghata Road</option>
									<option value="Bellandur">Bellandur</option>
									<option value="BTM Layout">BTM Layout</option>
								</select>
							</div>
						</div>



						<div class="col-sm-12">
							<div class="form-field">
								<textarea class="form-full" id="message" rows="7" name="form-message" placeholder="Your Message"></textarea>
							</div>
						</div>
						<div class="col-sm-12 text-center">

							<button class="btn btn-text text-center" type="button" id="btn2" name="button" style="margin-bottom: 10px;">
								Send Message
							</button>
						</div>
					</div>
				</div>
</body>
</html>