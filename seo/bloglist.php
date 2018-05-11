<?php
include("header.php");
include("leftnav.php");
?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Blog Details</h1>
		<ol class="breadcrumb">
			<li><a href="#">Blog</a></li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-sm-12">
				<div class="box box-warning">
					<div class="box-header">
						<h3 class="box-title">Blog List
							&nbsp;&nbsp;&nbsp; 				   
						</h3>
					</div><!-- /.box-header -->
					<!-- form start -->
					<div class="box-body">
						<table class="table table-bordered table-responsive">

							<tr>
								<th>Id</th>
								<th>Title</th>
								<th>Image</th>
								<th>desc</th>
								<th>Delete</th>
								<th>Status</th>

							</tr>

							<?php
							include("config.php");
							$sql = "select * from blog order by id desc";
							$res = mysqli_query($conn,$sql);
							$i=1;
							$total = mysqli_num_rows($res);
							while($row = mysqli_fetch_object($res))
							{
								echo "<tr>";
								echo "<td>".$row->id."</td>";
								echo "<td>".$row->title."</td>";
								echo "<td><img src='assets/blogimages/".$row->photo."' height='100' width='100'></td>";
								echo "<td>".$row->description."</td>";
								?>
								<td>
									<a href="#" onclick="deleteblog(<?php echo $row->id;?>);">Delete</a>
								</td>
								<td>
								<select onchange="changeStatus(this.value, <?php echo $row->id?>)">
									<option <?php if($row->status=="active") { echo " Selected";} ?>>Active</option>
									<option <?php if($row->status=="inactive") { echo " Selected";} ?>>InActive</option>
								</select>
								</td>
							<?php
							echo "</tr>";
						}
						?>
					</table>
				</div>
			</div><!-- /.box -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->

</div><!-- ./wrapper -->


	<script>
		function changeStatus(sts, blogid)
		{
			
		var blogstatus = confirm("Are you Sure?");
        if(blogstatus==true)
        {
           var mydata = {"sts":sts,"blogid":blogid}
                    
                    $.ajax({
                      type:"POST",
                      url:"updateblogstatus.php",
                      data:mydata,
                      success:function(response)
                      {
                        alert(response.trim());
                      }
                      
                    });
        }
		}

		function deleteblog(id)
		{
			var blogitem = confirm("Are you Sure?");
        if(blogitem==true)
        {
           var mydata = {"blogid":id}
                    
                    $.ajax({
                      type:"POST",
                      url:"deleteblogitem.php",
                      data:mydata,
                      success:function(response)
                      {
                        alert(response.trim());
                        window.location.reload();
                      }
                      
                    });
        }

		}
	</script>
<?php
include("footer.php");
?>