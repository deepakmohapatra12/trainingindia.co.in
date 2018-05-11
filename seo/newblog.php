<?php
include("header.php");
include("leftnav.php");
?>
<script src="assets/bootstrap/js/jQuery-2.1.3.min.js"></script>
<script src="assets/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
	tinymce.init({
		selector: "textarea",
		themes: "modern"  
	});
</script>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Home</h1>
		<ol class="breadcrumb">
			<li><a href="#">New Blog</a></li>
			<li class="active">Blog</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-sm-12">
				<div class="box box-warning">
					<div class="box-header">
						<h3 class="box-title">Blog
							&nbsp;&nbsp;&nbsp; 
							<a href="taglist.php" class="btn btn-success btn-sm">  
								<i class="fa fa-table"> </i>  Blog List </a>
							</h3>
						</div><!-- /.box-header -->
						<!-- form start -->
						<div class="box-body">
							<form id="frmnotes" role="form" action="saveblog.php" method="POST" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label> Image</label>
											<input type="file" class="form-control" name="photo"  required="required" />				
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Blog Title</label>
											<input type="text" class="form-control" name="title" name="title" required="required" />				
										</div>
									</div>  

								</div>
								<div class="row">
									<div class="form-group">
										<label>Blog Description</label>
										<textarea class="tinymce" name="desc"></textarea>
									</div>
								</div>

								<div class="row text-center">
									<br>
									<button  id="submit" type="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;
									<button type="reset" class="btn btn-primary">Reset</button>
								</div>


							</form>	
						</div><!-- /.box -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</section><!-- /.content -->
		</div><!-- /.content-wrapper -->

	</div><!-- ./wrapper -->
	<?php
	include("footer.php");
	?>