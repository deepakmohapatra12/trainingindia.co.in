	<?php include("header.php");?>
		<!--Header End Here-->
		<!--End mainmenu area-->
		<!-- END HEADER -->
		<!-- Intro Section -->
		<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<h1 data-title="Blog Detail"><span>Blog Detail</span></h1>
				</div>
			</div>
		</section>
		<!-- Intro Section -->
		<!-- Blog Post Section -->
		<section class="ptb ptb-xs-60">
			<div class="container">
				<div class="row">
					<!-- Post Bar -->
					<div class="col-lg-9 blog-post-hr post-section">
					<div class="blog-post">
						<?php 
							$blogid = $_REQUEST['id'];
							$sql = "select * from blog where id = '$blogid'";
							$res = mysqli_query($conn,$sql);
							$row = mysqli_fetch_object($res);
							
							$total = $row->totalread;
							$total = $total +1;
							$sql1 = "update blog set totalread='$total' where id = '$blogid'";
							$res1 = mysqli_query($conn,$sql1);
						?>
							<div class="post-meta">
								<div class="post-more-link pull-right">
									<div class="icons-hover-black">
										<a href="#" class="facebook-icon"> <i class="fa fa-facebook"></i> </a><a href="#" class="twitter-icon"> <i class="fa fa-twitter"></i> </a><a href="#" class="googleplus-icon"> <i class="fa fa-google-plus"></i> </a><a href="#" class="linkedin-icon"> <i class="fa fa-linkedin"></i> </a>
									</div>
									<a class="btn-text xs-hidden"> <i class="ion-android-share-alt"></i></a>
								</div>
							</div>
							<div class="post-header">
								<h2><?php echo $row->title;?></h2>
							</div>
							<?php 
								$time = strtotime($row->postdate);
								$readmonth = date("M",$time);
								$readdate = date("j",$time);
							?>
							<div class="post-media">
								<img src="seo/assets/blogimages/<?php echo $row->photo;?>" style="height:400px;width:800px;">
										<span class="event-calender blog-date"> <?php echo $readmonth?> <span><?php echo $readdate?></span> </span>
							</div>
							<div class="post-entry">
								<?php echo $row->description;?>
							</div>
						</div>
					    
						<hr />
						<div class="clearfix"></div>
												<div class="mtb-60">
							

						</div>
					</div>
					<!-- End Post Bar -->
					<!-- Sidebar -->
					<div class="col-lg-3">
						
						<div class="sidebar-widget">
							<h4>Most Read Blogs</h4>

							<ul class="categories">
								
							<?php
								$cat = "select title,id from blog where status='active' order by totalread DESC limit 5";
								$res2 = mysqli_query($conn,$cat);
								while($row = mysqli_fetch_object($res2))
								{
									echo "<li>";
										echo "<a>".$row->title."</a>";
									echo "</li>";
								}
								
							?>
							
							</ul>
						</div>
						<div class="sidebar-widget">
							<h4>Recent Post</h4>
							<ul class="widget-post pt-15">
							<?php 
							$sql = "select * from blog where status='active' order by id desc limit 3";
							$res = mysqli_query($conn,$sql);
							while($row = mysqli_fetch_object($res)){ ?>
								<li>
									<a class="widget-post-media"> <img src="seo/assets/blogimages/<?php echo $row->photo;?>" alt="<?php echo $row->totalread;?>"> </a>
									<div class="widget-post-info">
										<h6><a><?php echo substr($row->title,0,50);?>...</a></h6>
										<div class="post-meta">
											<span> <a href="javascript:avoid(0);"><i class="fa fa-heart-o"></i> <?php echo $row->totalread;?></a>,
										</div>
									</div>
								</li>
							<?php } ?>
							</ul>
						</div>
						
					</div>
					<!-- End Sidebar -->
				</div>
			</div>
		</section>
		<!-- End Blog Post Section -->
		<!-- footer -->
	<?php include("footer.php");?>
