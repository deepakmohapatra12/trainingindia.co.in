<?php include("header.php");?>
<!--Header End Here-->
<!--End mainmenu area-->
<!-- END HEADER -->
<!-- Intro Section -->
<section class="inner-intro bg-img light-color overlay-before parallax-background">
	<div class="container">
		<div class="row title">
			<h1 data-title="Blog"><span>Blog</span></h1>
		</div>
	</div>
</section>
<!-- Intro Section -->
<!-- Blog Post Section -->
<section class="ptb ptb-xs-60">
	<div class="container">
		<div class="row">
			<!-- Post Item -->
			<div class="col-lg-9">
				<div class="row">
					<div class="col-md-12 blog-post-hr">
						<?php
						//error_reporting(0);
						$page = "";
						if(isset($_GET['page'])){
						$page = $_GET['page'];
					}
						if ($page < 1) $page = 1;
						$numberOfPages = 5;
						$resultsPerPage = 3;
						$startResults = ($page - 1) * $resultsPerPage;
						$numberOfRows = mysqli_num_rows(mysqli_query($conn,'SELECT * FROM blog'));
						$totalPages = ceil($numberOfRows / $resultsPerPage);

						$query = mysqli_query($conn,"SELECT * from  blog LIMIT $startResults, $resultsPerPage");
						while($row = mysqli_fetch_object($query)) {
							?>	
							<div class="blog-post mb-45">
								<div class="post-media">
									<div class ="item">
										<img src="seo/assets/blogimages/<?php echo $row->photo;?>" style="height:400px;width:800px;">	
									</div>
									<?php 
									$time = strtotime($row->postdate);
									$readmonth = date("M",$time);
									$readdate = date("j",$time);
									?>
									<span class="event-calender blog-date"> <?php echo $readmonth?> <span><?php echo $readdate?></span> </span>
								</div>
								<div class="post-meta">
									<div class="post-more-link pull-right">
										<div class="icons-hover-black">
											<a href="#" class="facebook-icon"> <i class="fa fa-facebook"></i> </a><a href="#" class="twitter-icon"> <i class="fa fa-twitter"></i> </a><a href="#" class="googleplus-icon"> <i class="fa fa-google-plus"></i> </a><a href="#" class="linkedin-icon"> <i class="fa fa-linkedin"></i> </a>
										</div>
										<a class="btn-text xs-hidden"> <i class="ion-android-share-alt"></i></a>
									</div>
								</div>
								<div class="post-header">
									<h2><a href="blog-detail.php?id=<?php echo $row->id ?>"><?php echo $row->title;?></a></h2>
								</div>
								<div class="post-entry">
									<?php echo $row->description;?>
								</div>
								<div class="post-more-link pull-left">
									<a href="blog-detail.php?id=<?php echo $row->id ?>" class="btn-text">Read More</a>
								</div>
							</div>
							<hr />
							<?php 
						}
						?>
					</div>
				</div>
				<!-- Pagination Nav -->
				<div class="pagination-nav text-left mt-60 mtb-xs-30">
					<ul>
						<?php
						$halfPages = floor($numberOfPages / 2);
						$range = array('start' => 1, 'end' => $totalPages);
						$isEven = ($numberOfPages % 2 == 0);
						$atRangeEnd = $totalPages - $halfPages;

						if($isEven) $atRangeEnd++;

						if($totalPages > $numberOfPages)
						{
							if($page <= $halfPages)
								$range['end'] = $numberOfPages;
							elseif ($page >= $atRangeEnd)
								$range['start'] = $totalPages - $numberOfPages + 1;
							else
							{
								$range['start'] = $page - $halfPages;
								$range['end'] = $page + $halfPages;
								if($isEven) $range['end']--;
							}
						}

						if($page > 1) 

							echo '<li><a href="?page='.($page - 1).'"><i class="fa fa-angle-left"></i></a></li>';


						for ($i = $range['start']; $i <= $range['end']; $i++)
						{
							if($i == $page)
								echo '<li><a>'.$i.'</a></li>';
							else
								echo '<li><a href="?page='.$i.'">'.$i.'</a></li>';
						}
						if ($page < $totalPages) echo '<li><a href="?page='.($page + 1).'"><i class="fa fa-angle-right"></i></a></li>';
						?>						
					</ul>
				</div>
				<!-- End Pagination Nav -->
			</div>
			<!-- End Post Item -->
			<!-- Sidebar -->
			<div class="col-lg-3 mt-sm-30 mt-xs-30">
				<div class="sidebar-widget">
					<h4>Most Read Blogs</h4>
					<ul class="categories">
						<?php
						$cat = "select title,id from blog where status='active' order by totalread DESC limit 8";
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
						$sql = "select * from blog where status='active' order by id desc limit 10";
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
