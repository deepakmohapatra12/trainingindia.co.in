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
				   <a href="addurl.php" class="btn btn-success btn-sm">  
				   <i class="fa fa-plus"> </i>  New Page </a>
				  </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
		<div class="box-body">
             
            <?php
			if(isset($_SESSION['METAMESSAGE']))
			{
				echo "<center>". $_SESSION['METAMESSAGE'] ."</center>";
				unset($_SESSION['METAMESSAGE']);
			}
				$sql ="SELECT * FROM meta WHERE id ='".$_REQUEST['id']."'";
				$res = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($res);
		  	?>
  
  
<div class="row">
   
	   <div class="col-md-6">
<form action="updatemeta.php" method="POST">    
    
	    <input type="hidden" name="metaid" value="<?php echo $row['id']?>">
			
		  <div class="form-group">
			<label for="pagename">Page Name<span style="color:red;"></span></label>
			<textarea  class="form-control" name="pagename" id="pagename"><?php echo $row['courseurl']?></textarea>
		  </div>
		  
		  <div class="form-group">
			<label for="title">Title<span style="color:red;"></span></label>
			<textarea  class="form-control" name="title" id="title" maxlength="250"><?php echo $row['title']?></textarea>
		  </div>
		  
		 <div class="form-group">
			<label for="user">Assigned To</label>
				<select class="form-control" id="user" name="user">
                            <option value="">--Select User--</option>
							<?php						   
								$sql_user ="SELECT * FROM adminuser"; 				
							    $res_user=mysqli_query($conn,$sql_user);
							    while($row_user = mysqli_fetch_assoc($res_user)) {
							?>
							 <option value="<?php echo $row_user['userid'];?>"  <?php if($row_user['userid']==$row['createdby']){ echo " selected='selected'"; }?>><?php echo $row_user['username'];?></option>
							 <?php
							 }
							 ?>
							 
                 </select>
		  </div>
</div>	
<div class="col-md-6">	  
		  <div class="form-group">
			<label for="keyword">Keyword<span style="color:red;"></span></label>
<textarea  class="form-control" name="keyword" id="keyword"  rows="5" cols="80"><?php echo $row['keyword'];?></textarea>
		  </div>
		  
		  
		  
		    <div class="form-group">
			<label for="description">Description</label>
			<textarea type="text" class="form-control" name="description" id="description"  rows="5" cols="80"><?php echo $row['description']?></textarea>	
		   </div>
		  
		 
		  	<br><br>

		   <button  id="submit" type="submit" class="btn btn-primary">Update</button>&nbsp;&nbsp;
		   <button type="reset" class="btn btn-primary">Reset</button>
	   
		   
</form>
</div>
 </div>
 </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     
    </div><!-- ./wrapper -->
	<?php
include("footer.php");
?>

		
			