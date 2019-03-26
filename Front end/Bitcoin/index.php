<!DOCTYPE html>
<html>
<head>
	<title>
		Bitcoin Service
	</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">	

</head>
<body>

	<header>
		<div class="container-fluid"><!--start container-->
			<div class="row"><!--start row-->

				<div class="col-md-12 topnav" id="home">
					<nav class="navbar navbar-default nav navbar-fixed-top" id="startchange">


  					<div class="container-fluid">
   
  							  <div class="navbar-header">
							      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							        <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							      </button>
							      <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
							    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="navbar-nav nav navbar-right">

        <li class="active"><a id="link">Home <span class="sr-only">(current)</span></a></li>
        <li><a id="link1">Service</a></li>
        
        
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
				</div>
			</div><!--end row-->
		</div><!--end container-->
		<div class="container-fluid"><!--start container-->

			<div class="row"><!--start row-->
				<div class="col-md-12 banner">

					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  

  <!-- Wrapper for slides -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->


  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/banner1.png" alt="..." class="img-responsive">
      <div class="carousel-caption">
               <h2 style="color: #fff " class="col-md-4 banner-caption">We put the power in your hands to <br> buy, sell and trade digital currency</h2>
               <!-- <h3 style="color: #fff ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae tortor arcu. Vestibulum ac ex lacinia. Nulla molestie nunc varius.</h3> -->
                     	<img src="images/banner.png" class="img-responsive col-md-6 banner-image" alt="">
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->

</div>
		

<div class="blog"><!--start blog-->
	<div class="container "><!--start container-->
		<div class="row"><!--start row-->
			<div class="col-md-6">
				<img src="images/info3.png" alt="ad">
			</div>
			<div class="col-md-6 read">
				
				<h2>We make it safe and simple to buy and sell cryptocurrency.</h2>
				<p>From day one, we designed and built Cryptoma for newcomers and experts alike. While we're proud to be one of the largest bitcoin exchanges, serving clients in over 190 countries, we're just as excited about helping people discover the world of crypto and expand their portfolios to include other digital assets.</p>
				
			</div>
		</div><!--end row-->
	</div><!--end container-->
</div><!--end blog-->
<div class="blog"><!--start blog-->
	<div class="container "><!--start container-->
		<div class="row"><!--start row-->
			<div class="col-md-6 read">
				<h2>We built a platform for the crypto trading industry</h2>
				<p>While existing solutions offer to solve just one problem at a time, our team is up to build a secure, useful, & easy-to-use product based on private blockchain. It will include easy cryptocurrency payments integration, and even a digital arbitration system.</p>
				<p>At the end, Our aims to integrate all companies, employees, and business assets into a unified blockchain ecosystem, which will make business truly efficient, transparent, and reliable.</p>
			</div>
			<div class="col-md-6 extramargin">
			<img src="images/info1.png" alt="ad">
			</div>
		</div><!--end row-->
	</div><!--end container-->
</div><!--end blog-->
		
<div class="work" id="service"><!--start work-->
	<h2>SERVICES</h2>
	<p>We helps you in investing your money in Bitcoin currency. We provide you with the buying and selling decision of bitcoin based on the bitcoin price predicted by our deep learning model. </p>
	<div class="container"><!--start container-->
		<div class="row"><!--start row-->
			<div class="col-md-3 work1">
				<figure class="figure">
				  <figcaption class="figure-caption"><h2>Pred-value</h2><p>
				  <?php
		$con = mysqli_connect("173.194.109.182","root","abc123","bitcoin123");
		$sql = "SELECT * FROM live_data where datetime=(select max(datetime) from live_data)";
		if ($result=mysqli_query($con,$sql))
		{
		while($row = mysqli_fetch_row($result))
		{
			printf ("%s",$row[0]);
		}
		// Free result set
			mysqli_free_result($result);
		}
		mysqli_close($con);
	?>
		</p></figcaption>
				</figure>
			</div>
			<div class="col-md-3 work1">
				<figure class="figure">
				  
				  <figcaption class="figure-caption"><h2>True_value</h2><p> <?php
		$con = mysqli_connect("173.194.109.182","root","abc123","bitcoin123");
		$sql = "SELECT * FROM live_data where datetime=(select max(datetime) from live_data)";
		if ($result=mysqli_query($con,$sql))
		{
		while($row = mysqli_fetch_row($result))
		{
			printf ("%s",$row[1]);
		}
		// Free result set
			mysqli_free_result($result);
		}
		mysqli_close($con);
	?></p></figcaption>
				</figure>
			</div>
			<div class="col-md-3 work1">
				<figure class="figure">
				 
				  <figcaption class="figure-caption"><h2>Sentiment</h2><p> <?php
		$con = mysqli_connect("173.194.109.182","root","abc123","bitcoin123");
		$sql = "SELECT * FROM live_data where datetime=(select max(datetime) from live_data)";
		if ($result=mysqli_query($con,$sql))
		{
		while($row = mysqli_fetch_row($result))
		{
			printf ("%s",$row[2]);
		}
		// Free result set
			mysqli_free_result($result);
		}
		mysqli_close($con);
	?></p></figcaption>
				</figure>
			</div>
			<div class="col-md-3 work1">
				<figure class="figure">
				  
				  <figcaption class="figure-caption"><h2>DateTime</h2><p> <?php
		$con = mysqli_connect("173.194.109.182","root","abc123","bitcoin123");
		$sql = "SELECT * FROM live_data where datetime=(select max(datetime) from live_data)";
		if ($result=mysqli_query($con,$sql))
		{
		while($row = mysqli_fetch_row($result))
		{
			printf ("%s",$row[3]);
		}
		// Free result set
			mysqli_free_result($result);
		}
		mysqli_close($con);
	?></p></figcaption>
				</figure>
			</div>
			<div class="col-md-3 work1 extrapadding">
				<figure class="figure">
				  
				  <figcaption class="figure-caption"><h2>Dedecision</h2><p> <?php
		$con = mysqli_connect("173.194.109.182","root","abc123","bitcoin123");
		$sql = "SELECT * FROM live_data where datetime=(select max(datetime) from live_data)";
		if ($result=mysqli_query($con,$sql))
		{
		while($row = mysqli_fetch_row($result))
		{
			printf ("%s",$row[4]);
		}
		// Free result set
			mysqli_free_result($result);
		}
		mysqli_close($con);
	?></p></figcaption>
				</figure>
			</div>
		</div><!--end row-->
	</div><!--end container-->
</div><!--end work-->
 

             
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="script/bootstrap.js"></script>
<script type="text/javascript" src="script/scripts.js"></script>







</body>
</html> 