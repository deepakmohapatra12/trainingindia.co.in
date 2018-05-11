<?php
include("header.php");
include("leftnav.php");
?>
<script src="jq/jquery-1.11.3.js"></script>

<div class="content-wrapper">
        <section class="content-header">
          <h1>Manage Course Enquiry List</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">CourseEnquiry Keywords</a></li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-12">
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">CourseEnquiry Keywords
				   &nbsp;&nbsp;&nbsp; 
				  </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
		<div class="box-body">
		 <table id="example23" class="table table-bordered table-striped">
      <thead>
								<tr>      
									<th><label for="email">SlNo</label></th> 
									<th><label for="email">Name</label></th>
									<th><label for="email">Email</label></th>
									<th><label for="email">Mobile</label></th>
									<th><label for="email">Course</label></th>
									<th><label for="email">Location</label></th>
									<th><label for="email">Message</label></th>				             
									<th><label for="email">postdate</label></th>
									<th><label for="email">delete</label></th>				             

								</tr>
							</thead>
									<?php
								include("config.php");
								$sql = "select * from courseenquiry order by id desc";
								$res = mysqli_query($conn,$sql);
								$i=1;
								$total = mysqli_num_rows($res);
								while($row = mysqli_fetch_object($res))
								{
									echo "<tr>";
									echo "<td>".$row->id."</td>";
									echo "<td>".$row->name."</td>";
									echo "<td>".$row->email."</td>";
									echo "<td>".$row->mobile."</td>";
									echo "<td>".$row->course."</td>";
									echo "<td>".$row->location."</td>";
									echo "<td>".$row->message."</td>";
									echo "<td>".substr($row->datetime,0,10)."</td>";
									echo "<td> <a href='delete_course_enquiry.php?id=$row->id'>Delete </a></td>";
									echo "<tr>";
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
	<?php
include("footer.php");
?>