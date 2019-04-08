	<?php require_once("db.php");
 session_start();
?>
<?php
   if (!isset($_SESSION['Email']))
     {
      echo "<script>alert ('You Need to login first.')</script>";
      echo "<script>window.open('../index.html', '_self')</script>";
      exit();
    }
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Social Media for a cause</title>


	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	 <script src="https://unpkg.com/ag-grid-community/dist/ag-grid-community.min.noStyle.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/ag-grid-community/dist/styles/ag-grid.css">
    <link rel="stylesheet" href="https://unpkg.com/ag-grid-community/dist/styles/ag-theme-balham.css">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="../css/linearicons.css">
		<link rel="stylesheet" href="../css/owl.carousel.css">
		<link rel="stylesheet" href="../css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/animate.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/main.css">



	<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
	</head>
	<body>
		<div id="top"></div>
		<!-- Start Header Area -->
		<header class="default-header">
			<div class="sticky-header">
				<div class="container">
					<div class="header-content d-flex justify-content-between align-items-center">
						<div class="logo">
							<a href="#top" class="smooth"><img src="img/logo.png" alt=""></a>
						</div>
						<div class="right-bar d-flex align-items-center">
							<nav class="d-flex align-items-center">
								<ul class="main-menu">
									<a class="smooth" href="#view"><li>View Users</li></a>
									<a class="smooth" href="#group"><li>Make a group</li></a>
									<a class="smooth" href="../feedback.html"><li>Feedback</li></a>
								</ul>
								<a href="#" class="mobile-btn"><span class="lnr lnr-menu"></span></a>
							</nav>
							<div class="header-social d-flex align-items-center">
								
								<p class="text-uppercase text-white" style="margin-top: 0px;margin-bottom: 0px"><i class="fas fa-user"></i> Admin</p>


	      		
							</div>
	      						<a href="logout.php" class="btn btn-danger square-btn-adjust" style="padding: 0.8em;font-size: 0.65rem; border-radius: 5px;margin-left: 25px; ">Logout</a>

						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header Area -->
		<!-- Start Banner Area -->
		<section class="banner-area relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row fullscreen justify-content-center align-items-center">
					<div class="col-lg-8">
						<div class="banner-content text-center">

							<p class="text-uppercase text-white">We are lazy (PLS change it)</p>
							<h1 class="text-uppercase text-white">Social media for a cause</h1>



<!-- <div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch
    Modal Login Form</a>
</div> -->


						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Banner Area -->
		<!-- Start About Area -->
 		<section id="view" class="section-full gray-bg">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="section-title text-center">
							<p class="text-uppercase">View users</p>


							 <div id="myGrid" style="height: 300px;" class="ag-theme-balham"></div>
							
							<?php 

							
							$sql="Select * from registration";
							$l= array();
							$result = mysqli_query($conn,$sql);
							while ($row = mysqli_fetch_assoc($result)) {
							  $l[] = $row;
							}
							$j = json_encode($l);

							?>


							 

  <script type="text/javascript" charset="utf-8">
    // specify the columns
    var columnDefs = [
      {headerName: "Name", field: "name" ,sortable: true, filter: true},
      {headerName: "Email", field: "email",sortable: true, filter: true},
      {headerName: "Phone Number", field: "phone",sortable: true, filter: true},
      {headerName: "NGO Name", field: "ngoname",sortable: true, filter: true},
      {headerName: "Cause", field: "cause",sortable: true, filter: true},
    ];
    
    // specify the data
    var rowData = <?php echo $j; ?>
    
    // let the grid know which columns and what data to use
    var gridOptions = {
      columnDefs: columnDefs,
      rowData: rowData
    };

  // lookup the container we want the Grid to use
  var eGridDiv = document.querySelector('#myGrid');

  // create the grid passing in the div to use together with the columns & data we want to use
  new agGrid.Grid(eGridDiv, gridOptions);

  </script>

						</div>
					</div>
				</div>

		<script src="../js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="../js/vendor/bootstrap.min.js"></script>
		<script src="../js/jquery.ajaxchimp.min.js"></script>
		<script src="../js/jquery.sticky.js"></script>
		<script src="../js/owl.carousel.min.js"></script>
		<script src="../js/mixitup.min.js"></script>
		<script src="../js/main.js"></script>

		<script type="text/javascript">
			$("#nav ul li a[href^='#']").on('click', function(e) {

   // prevent default anchor click behavior
   e.preventDefault();

   // store hash
   var hash = this.hash;

   // animate
   $('html, body').animate({
       scrollTop: $(hash).offset().top
     }, 300, function(){

       // when done, add hash to url
       // (default click behaviour)
       window.location.hash = hash;
     });

});
			
		</script>


	</body>
</html>
