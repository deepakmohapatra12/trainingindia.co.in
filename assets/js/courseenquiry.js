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
