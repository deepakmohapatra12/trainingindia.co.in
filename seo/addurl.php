<?php
include("header.php");
 include("leftnav.php");
?>

      <div class="content-wrapper">
        <section class="content-header">
          <h1>Manage SEO</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo BASEURL;?>welcome.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">SEO</a></li>
            <li class="active">New Page</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-12">
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Seo
				   &nbsp;&nbsp;&nbsp; 
				   <a href="taglist.php" class="btn btn-success btn-sm">  
				   <i class="fa fa-table"> </i>  All Pages </a>
				  </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
		<div class="box-body">
	     <form id="frmnotes" role="form" action="saveurl.php" method="POST">
	<div class="row">
      <div class="col-md-6">
		<div class="form-group">
			<label> Page URL</label>
			<textarea  class="form-control" name="pagename" id="pagename" placeholder="Enter page name"></textarea>
		  </div>
		   
		  
		   <div class="form-group">
			<label> Page Description</label>
		<textarea  class="form-control" class="form-control" name="description" id="description" placeholder="Enter description" rows="7"></textarea>
		  </div>
		  
		   <div class="form-group">
			<label> User</label>
				<select class="form-control" id="user" name="user">
                            <option value="">--Select User--</option>
							<?php
							    $sql="select * from adminuser where status='active' order by username";
							    $res=mysqli_query($conn,$sql);
							    while($row = mysqli_fetch_assoc($res)) {
							?>
							 <option value="<?php echo $row['userid'];?>"><?php echo $row['username'];?></option>
							 <?php
							 }
							 ?>
							 
                 </select>
		  </div>	

		  
	  </div>
	   <div class="col-md-6">
	  
	    
		  <div class="form-group">
			<label> Page Title</label>
		<textarea  class="form-control" class="form-control" name="title" id="title" placeholder="Enter title"></textarea>
		  </div>
		  
		 
		  
		  <div class="form-group">
			<label> Page Keyword</label>
			<textarea  class="form-control" name="keyword" id="keyword" placeholder="Enter keyword"rows="7" cols="80"  ></textarea>
		  </div>
		  
		  <br>
		   <button  id="submit" type="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;
		   <button type="reset" class="btn btn-primary">Reset</button>
		 
	    
		   
	   </div>  
	   </div></form>	
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     
    </div><!-- ./wrapper -->
	<?php
include("footer.php");
?>