

<!DOCTYPE html><head>
<title><?= $data['judulHalaman'] ?></title>
<link rel="shortcut icon" href="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="MMCRSMANADO" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">

<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?= BASEURL; ?>/css/style.css" rel='stylesheet' type='text/css' />
<link  href="<?= BASEURL; ?>/css/side_menu.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?= BASEURL; ?>/css/font.css" type="text/css"/>
<link href="<?= BASEURL; ?>/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="<?= BASEURL; ?>/js/jquery.min.js"></script>
<script src="<?= BASEURL; ?>/js/modernizr.js"></script>
<script src="<?= BASEURL; ?>/js/jquery.cookie.js"></script>
<script src="<?= BASEURL; ?>/js/screenfull.js"></script>
<!------chart samping---->	
	<script>
	$(function () {
		$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

		if (!screenfull.enabled) {
			return false;
		}

		

		$('#toggle').click(function () {
			screenfull.toggle($('#container')[0]);
		});	
	});
	</script>
<!-- charts -->
<script src="<?= BASEURL; ?>/js/raphael-min.js"></script>
<script src="<?= BASEURL; ?>/js/morris.js"></script>
<link rel="stylesheet" href="<?= BASEURL; ?>/css/morris.css">
<!-- //charts -->
</head>
<body class="dashboard-page">
<nav class="main-menu">
	<ul>
			<li>
				<a href="<?= BASEURL; ?>/rekamedis">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Beranda
					</span>
				</a>
			</li>
			
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-bar-chart nav_icon"></i>
						<span class="nav-text">Dashbord Admin</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="<?= BASEURL; ?>/about">
							Modul Admin
						</a>
					</li>
					<li>
						<a class="subnav-text" href="<?= BASEURL; ?>/dokter">
							Modul Dokter
						</a>
					</li>
				</ul>
			</li>
			
			
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-list-ul" aria-hidden="true"></i>
					<span class="nav-text">Pengaturan</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="?l=2">Akun Login</a>
					</li>
					<li>
						<a class="subnav-text" href="?l=32">Akun Modul</a>
					</li>
				</ul>
			</li>
			<li class="has-subnav">
				<a href="adminrs?page=arsip">
					<i class="fa fa-file-text-o nav_icon" aria-hidden="true"></i>
					<span class="nav-text">Arsip</span>
					<i class=""></i><i class=""></i>
				</a>
				<li class="has-subnav">
				<a href="javascript:;">
					<i class="icon-table nav-icon" aria-hidden="true"></i>
					<span class="nav-text">Rekam Medis</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="?l=l-rmedis">Modul Rekam Medis</a>
					</li>
				</ul>
				<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-check-square-o nav_icon" aria-hidden="true"></i>
					<span class="nav-text">Input Data</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="dataentry">Modul Input Data</a>
					</li>
					<li>
						<a class="subnav-text" href="?page=up">Modul Import Data</a>
					</li>
				</ul>
			</li>
			</li>
			</li>
			<li>
			<a href="">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Keluar
			</span>
			</a>
			</li>
			
		</ul>
</nav>
	


<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
			<div class="logo">
				<a href=""><img src="<?= BASEURL; ?>/img/rsummcsh.jpg" style="width: 40%; height: 40%;" alt="RS MMC" />
				<br><strong>RSU. Manado Medical Center</strong></a>
				<br><strong><?php echo date ("d-F-Y ")?></strong></a>
			</div>

			<!-- PENCARIAN DIMATIKAN -->
			<!-- <div class="w3l_search">
				
				<form action="#" method="post">
					<input type="text" name="kode" value="search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" >
					<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
				
			</div> -->

				
									
				<div class="header-right">
					<div class="profile_details_left">
						<div class="header-right-left">
							<!--notifications of menu start -->									

								<li class="dropdown head-dpdn">
									<button class="btn btn-primary" onclick="history.back(-1)">
										<i class="fa fa-arrow-left" aria-hidden="true"></i>
									</button>

									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge">1</span></a>

									<ul class="dropdown-menu anti-dropdown-menu w3l-msg">
										<li>
											<div class="notification_header">
												<h3>Pemberitahuan</h3>
											</div>
										</li>

										<li><a href="#">
										   <div class="notification_desc">
											<p><?php  ?></p>
											<p><span>1 hour ago</span></p>
											</div>
												
										   <div class="clearfix"></div>	
										</a></li>
										
										<li>
											<div class="notification_bottom">
												<a href="#">See all messages</a>
											</div> 
										</li>

									</ul>
								</li>
						</div>		
						
					

					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
									<li> <a href=""><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
								
								<li><a href="#">ADMIN</li>
								
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</section>