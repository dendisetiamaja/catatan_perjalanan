<?php
	session_start();
	if(empty( $_SESSION['nik'])){?>
		<script type="text/javascript">
		alert('Anda Belum Login, Silahkan Login Terlebih Dahulu.')
		window.location.assign('login.php');
		 </script>
<?php }

?>

<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from radixtouch.com/templates/admin/redstar/source/light/dashboard2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Oct 2021 14:48:24 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="RedstarHospital" />
	<title>Catatan Perjalanan</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="../assets/bundles/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--bootstrap -->
	<link href="../assets/bundles/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/bundles/material/material.min.css">
	<link rel="stylesheet" href="css/material_style.css">
	<!-- Theme Styles -->
	<link href="css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="css/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="img/hospital1.png" />
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="index.html">
						<span class="material-icons">flight_takeoff</span>
						<span class="logo-default">Catatan Perjalanan</span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
					
				</ul>

			
				<!-- start mobile menu -->
				
				<a class="menu-toggler responsive-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<!-- start language menu -->
						
						<!-- end language menu -->
						<!-- start notification dropdown -->
						
						<!-- end message dropdown -->
						<!-- start manage user dropdown -->
						
						<!-- end manage user dropdown -->
						
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->
		<!-- start color quick setting -->
	
		<!-- end color quick setting -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
							data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="pull-left image">
										<img src="img/dp.jpg" class="img-circle user-img-circle" alt="User Image" />
									</div>
									<div class="pull-left info">
										<?php
										echo"<p>".$_SESSION['nama_lengkap']."</p>";
										echo"<p>".$_SESSION['nik']."</p>" ?>
									</div>
								</div>
							</li>
							<li class="nav-item ">
								<a href="user.php" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Dashboard</span>
									<span class="selected"></span>
								</a>
							</li>
							<li class="nav-item">
								<a href="tulis_catatan.php" class="nav-link nav-toggle">
									<i class="material-icons">note_add</i>
									<span class="title">Tulis Catatan Perjalanan</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="catatan_perjalanan.php" class="nav-link nav-toggle"> <i class="material-icons">book</i>
									<span class="title">Catatan Perjalanan</span>
								</a>
							</li>
							<li class="nav-item  ">
								<a href="logout.php" class="nav-link nav-toggle"><i class="material-icons">logout</i>
									<span class="title">Logout</span></a>
								
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end sidebar menu -->
			<!-- start page content -->
					
					<!-- start admited patient list -->
                    <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Tulis Catatan Perjalanan Anda</div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Masukkan Data</header>
                                </div>
                                <div class="card-body" id="bar-parent">
                                    <form action="simpan_catatan.php" method="post">
                                        <div class="form-body">
                                        <div class="form-group row">
                                                <label class="control-label col-md-3">Masukkan Lokasi
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="lokasi" required class="form-control"
                                                        placeholder="Masukkan Lokasi"
                                                        />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Masukkan Suhu Tubuh
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="suhu" required class="form-control"
                                                        placeholder="Masukkan Suhu Tubuh"
                                                        />
                                                </div>
                                            </div>
                                           
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Pilih Jam
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="time" name="jam" 
                                                    required class="form-control"
                                                        placeholder="Masukkan Jam"
                                                         />
                                                </div>
    </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Pilih Tanggal
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="date" name="tanggal" 
                                                    required class="form-control"
                                                        placeholder="Masukkan Tanggal"
                                                         />
                                                </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="offset-md-3 col-md-9">
                                                        <button type="submit"
                                                            class="btn btn-info m-r-20">Simpan</button>
                                                        <button type="reset" class="btn btn-default">Batalkan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          
			<!-- end page content -->
			<!-- start chat sidebar -->
		
			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2021 &copy; Catatan Perjalanan By
				<a href="https://www.instagram.com/dendiism_/" target="_top" class="makerCss">Dendi Setia Mauludin</a>
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script data-cfasync="false" src="../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../assets/bundles/jquery/jquery.min.js"></script>
	<script src="../assets/bundles/popper/popper.js"></script>
	<script src="../assets/bundles/jquery-blockUI/jquery.blockui.min.js"></script>
	<script src="../assets/bundles/jquery.slimscroll/jquery.slimscroll.js"></script>
	<!-- bootstrap -->
	<script src="../assets/bundles/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/bundles/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<!-- counterup -->
	<script src="../assets/bundles/counterup/jquery.waypoints.min.js"></script>
	<script src="../assets/bundles/counterup/jquery.counterup.min.js"></script>
	<!-- Common js-->
	<script src="../assets/app.js"></script>
	<script src="../assets/layout.js"></script>
	<script src="../assets/theme-color.js"></script>
	<!-- material -->
	<script src="../assets/bundles/material/material.min.js"></script>
	<!-- chart js -->
	<script src="../assets/bundles/apexcharts/apexcharts.min.js"></script>
	<script src="../assets/data/apex-home2.js"></script>
	<script src="../assets/bundles/sparkline/jquery.sparkline.js"></script>
	<script src="../assets/data/sparkline-data.js"></script>
	<!-- end js include path -->
</body>


<!-- Mirrored from radixtouch.com/templates/admin/redstar/source/light/dashboard2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Oct 2021 14:48:26 GMT -->
</html>