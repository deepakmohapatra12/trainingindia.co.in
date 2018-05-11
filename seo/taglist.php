<script>
	function passid(userid)
	{
		window.location.href="taglist.php?userid="+userid;
	}
function updaterank(value,rowid)
	{
		$.ajax({
		url:'updatecurrentworking.php',
		type:'POST',
		data:{"value":value, "rowid":rowid},
		success:function(response) {
          alert("Updated Successfully !");		  
		}
		
	});
}

function changeuser(userid,rowid)
	{
		$.ajax({
		url:'changeuser.php',
		type:'POST',
		data:{"userid":userid, "rowid":rowid},
		success:function(response) {
          alert("user changed");		  
		}
		
	});
}

function delpagefrommeta(rowid)
	{
          var sts = confirm("Are you sure ?");
             if(sts==true){
		$.ajax({
		url:'delpagefrommeta.php',
		type:'POST',
		data:{"rowid":rowid},
		success:function(response) {
                 alert("deleted successfully");	
                window.location.reload();	  
		}
		
	});
   }
}
</script>
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
              <div class="row">
			  <div class="col-sm-2">Serch By User</div>
			  <div class="col-sm-3"><select class="form-control" onchange="passid(this.value)">
                            <option value="All">--Select User--</option>
							<?php
							$userid='';
							 if(!empty($_REQUEST['userid'])){
									$userid = $_REQUEST['userid'];
							 }
							    $sql="select * from adminuser where status='active' order by username";
							    $res=mysqli_query($conn,$sql);
							    while($row = mysqli_fetch_assoc($res)) {
							?>
							 <option value="<?php echo $row['userid'];?>" 
							 <?php 
							 if($userid ==$row['userid']){ echo " selected='selected'"; }
							 ?>
							 ><?php echo $row['username'];?></option>
							 <?php
							 }
							 ?>
							 
                 </select>
				</div>
			<div class="col-sm-7">
			<p class="btn btn-info">
                 
		Total KeyWords :<font color="red"><b> 
		<?php  
			$res2 = mysqli_query($conn,"select count(*) as total from keywordrank");
			$row2 = mysqli_fetch_array($res2);
			echo $row2['total'];
		?>
		</b></font>
		&nbsp;&nbsp;&nbsp;&nbsp;
						 
		1 Page :<font color="red"><b>
		<?php  
			$res3 = mysqli_query($conn,"select count(*) as total from keywordrank where rank='1'");
			$row3 = mysqli_fetch_array($res3);
			echo $row3['total'];
		?>
		</b></font>

		||&nbsp; (My KeyWords :<font color="red"><b> 
		<?php  
			$res2 = mysqli_query($conn,"select count(*) as total from keywordrank where userid='$userid'");
			$row2 = mysqli_fetch_array($res2);
			echo $row2['total'];
		?>
		</b></font>
		&nbsp;&nbsp;&nbsp;&nbsp;
						 
		First Page:<font color="red"><b>
		<?php  
			$res3 = mysqli_query($conn,"select count(*) as total from keywordrank where rank='1' and userid='$userid'");
			$row3 = mysqli_fetch_array($res3);
			echo $row3['total'];
		?>
		</b></font>)
		</p>
       </div>
	  </div>
        <br>
	<?php
		$current="";
         if(!empty($_REQUEST['current'])){
           $current=" AND current='".$_REQUEST['current']."'";  
         }

     if(!empty($_REQUEST['userid'])){
		 $userid = $_REQUEST['userid'];
		 $ra="SELECT * FROM meta where createdby='".$_REQUEST['userid']."' $current order by current desc";   
	 }else {
		  $ra="SELECT * FROM meta where createdby='99'"; 
	 }
	 $test=mysqli_query($ra);
		?>
   <table id="example1" class="table table-bordered table-striped">
         <thead>
    <tr>      
                 <th>Page
                  <th><a href="taglist.php?userid=1&current=yes">Current Page</a> &nbsp; | &nbsp;
&nbsp;<a href="taglist.php?userid=1">All</a></th>

</th> 
<th>User</th>				 
<th>Updated Date</th>				 
    <th>Action</th>
   </tr>
</thead>
    <?php
	$counterscolor =0;
$color ='';
         
        while($row=mysqli_fetch_array($test))
		{
		if ($counterscolor % 2 == 0) {
                                    $rowStyle = "trcolorone";
                                } else {
                                    $rowStyle = "trcolortwo";
                                }
								$counterscolor++;
    ?>
     <tr class="<?php echo $rowStyle; ?>">
	<td><a href="keyrank.php?userid=<?php echo $userid; ?>&metaid=<?php echo $row['id'];?>" target="_new">
<?php echo substr($row['courseurl'],-40);?></a>
<div style="float:right;"><b>Total (&nbsp;
<font color="red"><?php  
$res1 = mysqli_query($conn,"select count(*) as total from keywordrank where userid='$userid' and metaid='".$row['id']."'");
$row1 = mysqli_fetch_array($res1);
echo $row1['total'];
 ?>
</font>&nbsp;)
First : (&nbsp;<font color="red"><?php  
$res2 = mysqli_query($conn,"select count(*) as total from keywordrank where userid='$userid' and metaid='".$row['id']."' and rank='1'");
$row2 = mysqli_fetch_array($res2);
echo $row2['total'];
 ?></font>&nbsp;)</b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
</td> 
<td align='center'>
 <select class="form-control" id="rank" id="rank" onchange="updaterank(this.value,'<?php echo $row['id'];?>')">

			  <option value="no" <?php if ($row['current']=='no') { echo "selected='selected'"; };?>>
			  No</option>
			  <option value="yes" <?php if ($row['current']=='yes') { echo "selected='selected'"; };?>>
			  Yes</option>
	
			 </select>
		</td>
<td align='center'>
<select class="form-control" onchange="changeuser(this.value,'<?php echo $row['id'];?>')">
                            <option value="">--Select User--</option>
							<?php
							$userid='';
							 if(!empty($_REQUEST['userid'])){
									$userid = $_REQUEST['userid'];
							 }
							    $sql="select * from adminuser where status='active' order by username";
							    $res=mysqli_query($conn,$sql);
							    while($row1 = mysqli_fetch_assoc($res)) {
							?>
							 <option value="<?php echo $row1['userid'];?>" 
							 <?php 
							 if($userid ==$row1['userid']){ echo " selected='selected'"; }
							 ?>
							 ><?php echo $row1['username'];?></option>
							 <?php
							 }
							 ?>
							 
                 </select>
		</td> 
	<td><?php echo $row['updateddate'];?> 
<?php
if($_SESSION['username']=="Siyaram"){?>
<a href='#' onclick='delpagefrommeta(<?php echo $row['id']; ?>)'>Delete</a>
<?php } ?>
</td> 
    <td><a href="editmeta.php?id=<?php echo $row['id']; ?>">Update</a></td> 	
     </tr>
	 <?php } ?>
  	</tbody>
</table>


                    
           </div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     
    </div><!-- ./wrapper -->
	<?php
include("footer.php");
?>
<script>
	$(function(){
		$(".content-wrapper").css({"min-height":"500px"});
	});
</script>