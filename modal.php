<style>
	@media screen and (min-width:640px)
	{
		#myModalLabel
		{
			font-size: 20px;
		}
	}
</style>
<div class="modal fade postLearningNeeds in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: #0a6d9b;">
				<h3 class="modal-title text-center" id="myModalLabel" style="color:white;">Provide your details to assist better</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:red; font-size:30px;"><span aria-hidden="true">×</span></button>
			</div>
			<form class="form-horizontal" action="http://gyanguide.com/index.php/user/saveLearningNeedss" method="POST" onsubmit="return popup_validate();">
				<div class="modal-body">
					<div class="col-sm-12">
						<div class="form-field">
							<input class="input-lg form-full" id="fname" type="text" name="form-name" placeholder="Your Name">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-field">
							<input class="input-lg form-full" id="email" type="text" name="form-email" placeholder="Email">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-field">
							<select class="form-control" id="cor" name="course1" required="">
								<option value="0">--Select Course--</option>
								<option value="Advanced Java Training">Advanced Java Training</option><option value="Android Training">Android Training</option><option value="AngularJS Training">AngularJS Training</option><option value="CMS Tools Training">CMS Tools Training</option><option value="Codeigniter Training">Codeigniter Training</option><option value="Core Java">Core Java</option><option value="Digital Marketing Training">Digital Marketing Training</option><option value="IOS Training">IOS Training</option><option value="Jquery Training">Jquery Training</option><option value="Manual Software Testing Training">Manual Software Testing Training</option><option value="NodeJS Training">NodeJS Training</option><option value="PHP Mysql">PHP Mysql</option><option value="Selenium Training">Selenium Training</option><option value="Web Designing Training">Web Designing Training</option><option value="Web Development Training">Web Development Training</option><option value="Wordpress Training (CMS)">Wordpress Training (CMS)</option>									</select>
							</div>
						</div>
						<div class="col-sm-12">
							<select name="locality1" id="loc" class="form-control">
								<option value="0">--Choose Location--</option>
								<option value="Adugodi">Adugodi</option><option value="Banasawadi">Banasawadi</option><option value="Bannerghata Road">Bannerghata Road</option><option value="Bellandur">Bellandur</option><option value="BTM IInd Stage">BTM IInd Stage</option><option value="BTM Ist Stage">BTM Ist Stage</option><option value="BTM Layout">BTM Layout</option><option value="Domlur">Domlur</option><option value="Electronic city">Electronic city</option><option value="H S R Layout">H S R Layout</option><option value="Hebbal">Hebbal</option><option value="Hennur">Hennur</option><option value="Indira Nagar">Indira Nagar</option><option value="ITPL">ITPL</option><option value="J P Nagar">J P Nagar</option><option value="Jaya Nagar">Jaya Nagar</option><option value="Jaya Nagar East">Jaya Nagar East</option><option value="Jaya Nagar II Block">Jaya Nagar II Block</option><option value="Jaya Nagar South">Jaya Nagar South</option><option value="K R Puram">K R Puram</option><option value="Kalyan Nagar">Kalyan Nagar</option><option value="Koramangala">Koramangala</option><option value="Koramangala Layout">Koramangala Layout</option><option value="Kundanahalli">Kundanahalli</option><option value="Malleswaram">Malleswaram</option><option value="Marathahalli">Marathahalli</option><option value="Rajaji Nagar">Rajaji Nagar</option><option value="Sarjapur">Sarjapur</option><option value="Shivaji Nagar">Shivaji Nagar</option><option value="Teachers colony">Teachers colony</option><option value="Vijaya Nagar">Vijaya Nagar</option><option value="White Field">White Field</option><option value="Yelahanka">Yelahanka</option><option value="Yelankha New Town">Yelankha New Town</option><option value="Yeswanthpur">Yeswanthpur</option>				
							</select>
						</div>
						<div class="col-sm-12">
							<div class="form-field">
								<textarea class="form-full" id="msg" rows="7" name="form-message" placeholder="Your Message"></textarea>
							</div>
						</div>
						<div class="col-sm-12 text-center">
							<button class="btn btn-text" type="button" id="btn22" name="button">
								Send Message
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(function()
		{
			$("#btn22").click(function()
			{
				var status = true;
				var fname = $("#fname").val().trim();
				if(fname=="")
				{
					status = false;
					$("#fname").css({"border":"1px solid red"});
				}
				else
				{
					$("#fname").css({"border":""});
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
				var cor = $("#cor").val();
				if(cor=="0")
				{
					status = false;
					$("#cor").css({"border":"1px solid red"});
				}
				else
				{
					$("#cor").css({"border":""});
				}
				var loc = $("#loc").val();
				if(loc=="0")
				{
					status = false;
					$("#loc").css({"border":"1px solid red"});
				}
				else
				{
					$("#loc").css({"border":""});
				}
				var msg = $("#msg").val().trim();
				if(msg=="")
				{
					status = false;
					$("#msg").css({"border":"1px solid red"});
				}
				else
				{
					$("#msg").css({"border":""});
				}
				if(status==true)
				{
					var mydata = {"fname":fname,"email":email,"cor":cor,"loc":loc,"msg":msg};
					$.ajax({
						type:"POST",
						url:"courseenquiry.php",
						data:mydata,
						success:function(response)
						{
							$("#fname").val("");
							$("#email").val("");
							$("#cor").val("");
							$("#loc").val("");
							$("#msg").val("");
							$("#showmsg").html(response);
						}
					});
				}
				return status;
			});
		});	
	</script>
