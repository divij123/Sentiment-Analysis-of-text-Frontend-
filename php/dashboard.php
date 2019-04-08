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
									<a class="smooth" href="#upload"><li>Upload</li></a>
									<a class="smooth" href="#feed"><li>Feed</li></a>
									<a class="smooth" href="#callforhelp"><li>Call for Help</li></a>
									<a class="smooth" href="#explore"><li>Explore</li></a>
									<a class="smooth" href="#support"><li>Show support</li></a>
									<a class="smooth" href="../feedback.html"><li>Feedback</li></a>

									</ul>
								<a href="#" class="mobile-btn"><span class="lnr lnr-menu"></span></a>
							</nav>
							<div class="header-social d-flex align-items-center">
								
								<p class="text-uppercase text-white" style="margin-top: 0px;margin-bottom: 0px"><i class="fas fa-user"></i> <?php echo $_SESSION['Name']; ?></p>


	      		
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




						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Banner Area -->
		<!-- Start About Area -->
 		<section id="upload" class="section-full gray-bg">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="section-title text-center">
							<p class="text-uppercase">Upload Feed</p>
							
							<form method="post" action="feed.php" enctype="multipart/form-data">
								<div class="row">
									<div class="col-sm-8">
										<textarea cols="50" rows="4" class="form-control" name="message" placeholder="Enter message"></textarea>
									</div>
									<div class="col-sm-4">
										<input type="file" class="form-control" name="photo" >
									</div>
								</div>
									<br><br>

									<button type="submit" name="sub" class="primary-btn d-inline-flex align-items-center">submit<span class="lnr lnr-arrow-right"></span></button>

							</form>

						</div>
					</div>
				</div>
			</div>
		</section> 
		<!-- End About Area -->
		<!-- Start Product Area -->
	 <section id="feed" class="title-bg section-full">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
							<div class="product-area-title text-center">
							<p class="text-white text-uppercase">FEED</p>
							<h2 class="text-white h1">Go through your awesome <br> FEED </h2>
						</div>
					</div>
				</div>
				<div class="row">
					
							
						
						
							<?php

								$sql = "SELECT * FROM feed";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								while($row = mysqli_fetch_array($result)) {

									echo "
									<div class='col-lg-4 col-sm-6'>
						<div class='single-product'>
									<div class='icon'>
										
										<img class='lnr' src='userPhoto/".$row['photo']."' width='150px'>
									

									</div>

							<div class='desc'>

							<p>" .$row['message'] . "</p>

							</div>
</div>
	</div>

									";

									}
								}

							?>			
					
				</div>
			</div>
		</section> 
		<!-- End Product Area -->
		<!-- Start Progress Bar Area -->
		<div id="callforhelp" class="container pt-50">
			<div class="row justify-content-center">
					<div class="col-lg-8">
							<div class="product-area-title text-center">
							<h2 class="text-black h1">Call for <span style="color:#5b61cff2 ">help</span></h2>
						</div>
					</div>
				</div>

			<form method="post" action="help.php"> 
				

			<div class="row">
				<div class="col-lg-4 col-sm-6 d-flex justify-content-center">
												
					<?php
											$query="Select distinct cause,ngoname from registration";

											$result =  mysqli_query($conn,$query);
								echo "Area of expertise    <select id='ngocause' name='cause' onchange='changeData()'  style='margin-left:10px;height:25px;width:225px;'>";
								echo "<option value=''>SELECT</option>";
							while ($row=   mysqli_fetch_array($result) )
						{

								$str = str_replace(" ", "_", $row["cause"]);
					   			echo "<option value=".$str.">".htmlspecialchars($row["cause"])."</option>";
						}
					echo "</select>";

					?>


				</div>
				 <div class="col-lg-4 col-sm-6 d-flex justify-content-center">
					<div class="list text-center">
						<div class="list-item" id="dtable">


						</div>
						</div>

					</div>

						<div class="col-lg-4 col-sm-6">
										<textarea cols="50" rows="5" class="form-control" name="message" placeholder="Enter message"></textarea>
									</div>

					<div class="col-sm-12 text-center">
						<button type="submit" name="sub" class="primary-btn d-inline-flex align-items-center">submit<span class="lnr lnr-arrow-right"></span></button>
					</div>

					<br><br><br><br><br><br><br>
				</div>


			</form>
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

			function changeData() {

   			 $("#ngocause").change(function(){
        		var value = $(this).val()
        		console.log(value);
        		$.post("getTable.php",
  				{
    				dropdown : value,
 
  				},
    			function(data){
      			console.log(data);
      			document.getElementById("dtable").innerHTML= data;
      			return true; });
   				 });

}


		</script>
	</body>
</html>
