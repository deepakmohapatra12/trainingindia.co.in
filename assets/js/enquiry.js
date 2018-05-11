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
