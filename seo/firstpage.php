<?php
include("header.php");
include("leftnav.php");
?>
<div class="content-wrapper">
        <section class="content-header">
          <h1>Manage SEO</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo BASEURL;?>welcome.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">First Page Keywords</a></li>
            <li class="active">New Page</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-12">
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">First Page Keywords
				   &nbsp;&nbsp;&nbsp; 
				   <a href="addurl.php" class="btn btn-success btn-sm">  
				   <i class="fa fa-plus"> </i>  New Page </a>
				   
				   <a class="btn btn-success btn-sm" href="taglist.php">BACK</a>
				  </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
		<div class="box-body">
<script src="jq/jquery-1.11.3.js"></script>
<script>
	function updaterank(rank,rankid)
	{
		$.ajax({
		url:'updtstatus.php',
		type:'POST',
		data:{"rank":rank, "rankid":rankid},
		success:function(response) {
		$("#r"+rankid).html("<font color='red'>"+ response +"</font>");
          alert("Rank Updated");		  
		}
		
	});
	}
	function updateposition(position, positionid)
	{		
		$.ajax({
		url:'updtposition.php',
		type:'POST',
		data:{"position":position, "positionid":positionid},
		success:function(response) {		
		 if (response=="1") {
          alert("Position Updated");		  
		}
		}
	});
	}
</script>

	<?php
		
		$ra="SELECT * FROM keywordrank where rank='1'"; 
		$test=mysqli_query($conn,$ra);		 
	 
	?>
	 <table id="example1" class="table table-bordered table-striped">
         <thead>
			<tr>      
				<th><label for="email">Page Url</label></th> 
				<th><label for="email">Check Keywords On Google</label></th>
				<th><label for="email">Current Rank</label></th>
				<th><label for="email">Last Rank</label></th>
				<th><label for="email">Position</label></th>
				<th><label for="email">Updated Date</label></th>				             
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
	<td><a href="http://gyanguide.com/<?php echo $row['url'];?>" target="_blank">View Website</a></td> 
	<td><a href="https://www.google.co.in/?gfe_rd=cr&ei=TmViVqKDF-bI8AfMhIaICw&gws_rd=ssl#q=<?php echo $row['keyword'];?>" target="blank"><?php echo $row['keyword'];?></a></td> 
		<td align='center'>
 <select id="rank" id="rank" onchange="updaterank(this.value,'<?php echo $row['id'];?>')">
<option value="0">0</option>
			  <?php for($i=1; $i<=10; $i++) {?>
			  <option value="<?php echo $i;?>" <?php if ($row['rank']==$i) { echo "selected='selected'"; };?>>
			  <?php echo $i;?></option>
			  <?php 
			     } 
			  ?>
			 </select>
		</td> 

		<td id='r<?php echo $row['id'];?>' align='center'><?php echo $row['oldrank'];?></td> 
<td align='center'>
		  <select id="position" name="position" onchange="updateposition(this.value,'<?php echo $row['id'];?>')">
			  <?php for($j=10; $j>=1; $j--) {?>
			  <option value="<?php echo $j;?>" <?php if ($row['position']==$j) { echo "selected='selected'"; };?>>
			  <?php echo $j;?></option>
			  <?php 
			     } 
			  ?>
			 </select>
		</td> 
	<td><?php echo $row['updateddate'];?></td> 
   	
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