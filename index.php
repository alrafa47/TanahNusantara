<!DOCTYPE html>
<html>
<head>
	<title>Tanah Nusantara</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="assets/font">
	<style type="text/css">
	#frame-image {
            /* 
            CSS Untuk croping gambar / foto 
            
            Disini Anda dapat menentukan lebar dan tinggi image
            */
            height: 645px;
            width: 100%;
            overflow: hidden;

            /* 
            CSS Untuk mengatur posisi gambar 
            Menjadikan frame / bingkai sebagai patokan koordinat left/top
            */
            position: relative;
        }
        
        #frame-image img {
            /*
            CSS Untuk croping gambar
            Membatasi tinggi gambar, membiarkan width-nya auto
            Bisa juga diganti jadi height: 320px jika tinggi gambar mau dipaksakan jadi 320px
            */
            max-height: auto;
            max-width: 100%;
            
            /* 
            CSS Untuk mengatur posisi gambar 
            Left/top berpatokan pada frame
            Diisi dengan nilai minus untuk memposisikan keluar dari frame
            karena frame overflow-nya dibuat jadi hidden
            posisi yg keluar area frame jadi tidak terlihat
            
            Disini Anda dapat mengatur bagian/posisi gambar yg mana yg akan ditampilkan
            */
            position: absolute;
        }
    </style>
</head>
<body>
	<header>
		<nav class="navbar navbar-default" style="margin-bottom: 0px;">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">TANAH NUSANTARA</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="#">HOME</a></li>
						<li><a href="#">STATISTIK</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">JOURNAL <span class="caret"></span></a>
							
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">SIGN IN</a></li>
						<li><a href="#">SIGN UP</a></li>

					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</header>

	<!-- body -->
	<!-- image sliding -->

	<div id="carousel-example-generic" style="height: 645px;width: 100%" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div  id="frame-image">
					<img src="img/Bendera.jpg"  alt="TANAH AIRKU">
				</div>
				<div class="carousel-caption">
					<h2>
						
					CAPTURE EVERY MOMENT IN INDONESIA
					</h2>
				</div>
			</div>
			<div class="item">
				<div id="frame-image">
					<img src="img/Photo.jpg" alt="Photograpy">
				</div>
				<div class="carousel-caption">
					<h2>
						WITH YOUR EVERY SKILL IN PHOTOGRAPHY
					</h2>
				</div>
			</div>
			...
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- ===================================== -->
	<!-- ==================CONTENT================= -->

	<section class="home_gallery_area" style="padding-top: 20px;padding-bottom: 20px">
		<!-- ======================PHOTOGRAPHY============== -->
		<div class="container">
			<div class="isotope_fillter">
				<ul class="gallery_filter list">
					<li class="active" data-filter="*"><a href="#">PHOTOGRHAPY</a></li>

				</ul>
			</div>
		</div>
		<div class="container box_1620">
			<div class="gallery_f_inner row imageGallery1">
				<div class="col-lg-3 col-md-4 col-sm-6 ap">
					<div class="h_gallery_item">
						<img src="img/lighthouse.jpg" alt="">
						<div class="hover">
							<a href="#"><h4>Spreading Peace to world</h4></a>
							<a class="light" href="img/gallery/gallery-1.jpg"><i class="fa fa-expand"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 unv">
					<div class="h_gallery_item">
						<img src="img/Koala.jpg" alt="">
						<div class="hover">
							<a href="#"><h4>Spreading Peace to world</h4></a>
							<a class="light" href="img/gallery/gallery-2.jpg"><i class="fa fa-expand"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 unp ap">
					<div class="h_gallery_item">
						<img src="img/Desert.jpg" alt="">
						<div class="hover">
							<a href="#"><h4>Spreading Peace to world</h4></a>
							<a class="light" href="img/gallery/gallery-3.jpg"><i class="fa fa-expand"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 unp">
					<div class="h_gallery_item">
						<img src="img/Penguins.jpg" alt="">
						<div class="hover">
							<a href="#"><h4>Spreading Peace to world</h4></a>
							<a class="light" href="img/gallery/gallery-4.jpg"><i class="fa fa-expand"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 unv">
					<div class="h_gallery_item">
						<img src="img/Jellyfish.jpg" alt="">
						<div class="hover">
							<a href="#"><h4>Spreading Peace to world</h4></a>
							<a class="light" href="img/gallery/gallery-5.jpg"><i class="fa fa-expand"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 ap">
					<div class="h_gallery_item">
						<img src="img/Tulips.jpg" alt="">
						<div class="hover">
							<a href="#"><h4>Spreading Peace to world</h4></a>
							<a class="light" href="img/gallery/gallery-6.jpg"><i class="fa fa-expand"></i></a>
						</div>
					</div>
				</div>
			</div>
<!-- 			<div class="button_more" style="margin-top: 50px; margin-bottom: 50px">
				<a class="btn theme_btn" href="#">Load More Images</a>
			</div> -->
		</div>
		<!-- ================================================== -->
		<!-- ==================Journalistic======================== -->
		<div class="container">
			<div class="isotope_fillter" style="
			margin-bottom: 50px;
			">
			<ul class="gallery_filter list">
				<li class="active" data-filter="*"><a href="#">Journalistic</a></li>
			</ul>
		</div>
	</div>
	<div class="container ">
		<div class="row">
			<div class="col-md-6">
				<div class=" panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Jembatan Pembatas</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-5">
								<div class="h_gallery_item" style="margin-bottom: 0px;">
									<img src="img/lighthouse.jpg" alt="">
									
								</div>
							</div>
							<div class="col-md-7">
								<p>
									alfrizal rhama setia putra utomo lahir di malang tanggal 11 agustus 1999
								</p>

							</div>
						</div>

					</div>
				</div>	
			</div>
			<div class="col-md-6">
				<div class=" panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Jembatan Pembatas</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-5">
								<div class="h_gallery_item" style="margin-bottom: 0px;">
									<img src="img/lighthouse.jpg" alt="">
									
								</div>
							</div>
							<div class="col-md-7">
								<p></p>
							</div>
						</div>

					</div>
				</div>	
			</div>
		</div>
	</div>
</section>
</div>
<!-- ===================================== -->

<footer>
	<div class="" style="background-color: #031d41; padding-top: 10px;padding-bottom: 10px; color:white;">
		<div class="container">
			<div class="row">
				<!-- About Me -->
				<div class="col-lg-5 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h3>About Me</h3>
						</div>
						<p>Ini adalah website untuk menampung anak muda yang senang dengan dunia fotografi</p>
						<p>
							Copyright &copy;2018 by PagestuBudiman
						</p>
					</aside>
				</div>
				<div class="col-md-4">
					<h3>LAYANAN</h3>
					<ul>
						<li>Jurnal</li>
						<li>Photograpy</li>
						<li>Infografik</li>
					</ul>


				</div>
				<div class="col-md-3">
					<div class="f_title">
						<h3>Follow Me</h3>
					</div>
					<!-- <p>Let us be social</p> -->
					<ul class="list">
						<li>Instagram</li>
						<li>Facebook</li>
						<li>Twitter</a></li>
					</ul>
				</div>
			</div>
		</div>	
	</div>
</footer>
<!-- ========================js file ========================= -->
<script type="text/javascript" src="assets/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap.min.js"></script>
</body>
</html>