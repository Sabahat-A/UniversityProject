<!-- footer --> 
<footer>
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom"  style="background-color: #007C7F;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <!-- logo -->
          <a class="logo-footer" href="index.html"><img class="img-fluid mb-4 mt-1" src="media/kisspng-the-superior-college-faisalabad-bahawalpur-univers-college-logo-5ae02f341c4620.5999990315246415881158.png" alt="logo" width="100px"></a>
          <ul class="list-unstyled">
          	<?php 

          		include_once"connection/connect.php";

          		$sql="SELECT * FROM about";
				$que = mysqli_query($con,$sql);
				$record = mysqli_fetch_array($que);

          		$id=$record['a_id'];
				$dname=$record['a_dname'];
				$pname=$record['a_pname'];
				$email1=$record['a_email1'];
				$email2=$record['a_email2'];
				$phone1=$record['a_phone1'];
				$phone2=$record['a_phone2'];
				$address=$record['a_address'];


          	 ?>
            <li class="mb-2">
            	<p class="font-weight-bolder" style="color: #FFFFFF;"><?=$address?></p>
            </li>
            <li class="mb-2">
            	<p class="font-weight-bolder" style="color: #FFFFFF;"><?=$phone1?></p>
            </li>
            <li class="mb-2">
            	<p class="font-weight-bolder" style="color: #FFFFFF;"><?=$phone2?></p>
            </li>
            <li class="mb-2">
            	<p class="font-weight-bolder" style="color: #FFFFFF;"><?=$email1?></p>
            </li> 

          </ul>
        </div>
        <!-- company -->
        <div class="col-lg-4 col-md-3 col-sm-4 col-6 mb-5 mb-md-0 text-center mt-4">
          <h4 class="text-white mb-5">COMPANY</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" style="color: #FFFFFF;" href="about.php">About Us</a></li>
            <li class="mb-3"><a class="text-color" style="color: #FFFFFF;" href="teacher.html">Our Teacher</a></li>
            <li class="mb-3"><a class="text-color" style="color: #FFFFFF;" href="contact.html">Contact</a></li>
          </ul>
        </div>
        <!-- links -->
        <div class="col-lg-4 col-md-3 col-sm-4 col-6 mb-5 mb-md-0 text-center mt-4">
          <h4 class="text-white mb-5">LINKS</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" style="color: #FFFFFF;" href="courses.html">Courses</a></li>
            <li class="mb-3"><a class="text-color" style="color: #FFFFFF;" href="event.html">Events</a></li>
            <li class="mb-3"><a class="text-color" style="color: #FFFFFF;" href="gallary.html">Gallary</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class="copyright py-4 bg-footer"  style="background-color: #007C7F;">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <p class="mb-0" style="color: #FFFFFF;">
          	copyright@superiorcollege
          </p>
        </div>
        <div class="col-sm-5 text-sm-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="d-inline-block p-2" href="#" style="color: #FFFFFF;"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="#" style="color: #FFFFFF;"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="#" style="color: #FFFFFF;"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

	<script type="text/javascript" src="../css/bootstrap-4.5.3/js2/jquery-3.5.1.slim.min.js"></script>
  	<script type="text/javascript" src="../css/bootstrap-4.5.3/js2/popper.min.js"></script>
  	<script type="text/javascript" src="../css/bootstrap-4.5.3/dist/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="../css/DataTables-1.11.2/datatables.min.js"></script>
	<script>
		$(document).ready( function () {
    	$('#myTable').DataTable();
		} );
	</script>
</body>
</html>