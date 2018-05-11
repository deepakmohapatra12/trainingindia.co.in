<?php
include("header.php");
include("leftnav.php");
?>
<script src="jq/jquery-1.11.3.js"></script>

<div class="content-wrapper">
        <section class="content-header">
          <h1>Manage user Track List</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">User Track </a></li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-12">
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">User Track 
				   &nbsp;&nbsp;&nbsp; 
				  </h3>
				  <span><a href="delete_all_usertrack.php" class="btn btn-danger" role="button">Delete All</a></span>
                </div><!-- /.box-header -->
                <!-- form start -->
		<div class="box-body">
		 <table id="example23" class="table table-bordered table-striped">
      <thead>
								<tr>      
									<th><label for="email">SlNo</label></th> 
									<th><label for="email">Session Id</label></th>
									<th><label for="email">IP Address</label></th>
									<th><label for="email">PageName</label></th>
									<th><label for="email">Visit Time</label></th>
									<th><label for="email">delete</label></th>				             

								</tr>
							</thead>
							<tbody>
									<?php
								include("config.php");
								$sql = "select * from usertrack";
								$res = mysqli_query($conn,$sql);
								$i=1;
								$total = mysqli_num_rows($res);
								while($row = mysqli_fetch_object($res))
								{
									echo "<tr>";
									echo "<td>".$row->utr_pk_id."</td>";
									echo "<td>".$row->session_id."</td>";
									echo "<td>".$row->ipaddress."</td>";
									echo "<td>".$row->pagename."</td>";
									echo "<td>".substr($row->visittime,0,10)."</td>";
									echo "<td> <a href='delete_user_track.php?id=$row->utr_pk_id'>Delete </a></td>";
									echo "</tr>";
								}
								?>

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