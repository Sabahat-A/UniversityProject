<?php 

	include_once"header.php";

 ?>
 	<div class="container p-5">
 		<div class="row">
 			<div class="col-md-12">
 				<h3 class="text-center" style="color: #007C7F;">Classes</h3>
			 	<table id="myTable" class="hover">
				    <thead>
				        <tr>
				            <th>SR No</th>
				            <th>Name</th>
				        </tr>
				    </thead>
				    <tbody>
				    	<?php

				    		$sql="SELECT * FROM class";
							$que=mysqli_query($con,$sql);

						
						$i=1;
						while ($record=mysqli_fetch_array($que)) 
						{
							$id=$record['c_id'];
							$name=$record['c_name'];;
						 ?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $name; ?></td>
					</tr>
					<?php 

						$i++;
						}
					 ?>
				    </tbody>
				</table>
    		</div>
    	</div>
    </div>


 <?php 

 	include_once"footer.php";

  ?>