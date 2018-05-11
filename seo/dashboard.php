<!-- Right side column. Contains the navbar and content of the page -->
<?php 
  //$this->db = $this->load->database('default', TRUE);
?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       

        <!-- Main content -->
        <section class="content">
		  <link rel="stylesheet" href="graph/css/style.css">
		  <link rel="stylesheet" href="graph/css/bar.css">
		  
		  <div class="row">
		  <div class="col-sm-1"></div>
			<div class="col-sm-10">
				
         <div class="chart">
            <h3>Total Keywords ( <?php 
							$res = mysqli_query($conn,"select count(*) as totals from keywordrank");
							$row = mysqli_fetch_object($res);
							echo $row->totals;
							?> ) </h3>
            <table id="data-table" border="1" cellpadding="10" cellspacing="0"
            summary="Percentage of knowledge acquired during my experience
            for each technology or language.">
               <thead>
                  <tr>
                     <td>&nbsp;</td>
                     <th scope="col"></th>
                  </tr>
               </thead>
               <tbody>
			   <?php 
			     for($i=1; $i<=10; $i++)
				 {?>
                  <tr>
                     <th scope="row"><?php echo $i;?> PEG</th>
                     <td>
						<?php 
							$res = mysqli_query($conn,"select count(*) as total from keywordrank where rank='$i'");
							$row = mysqli_fetch_object($res);
							echo $row->total;
						?>
					 </td>
                  </tr>
                 <?php } ?> 
               </tbody>
            </table>
       
      </div>
			</div>
			<div class="col-sm-1"></div>
		  </div>
		   <script src="jq/jquery-1.11.3.js"></script>
		<script src="graph/js/graph.js"></script>
          <!--graph end -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->