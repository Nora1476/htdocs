
		<?php  

	
		  /* 서버 접속 */
		  require_once("./dbconfig.php");

		  $no = $_GET['no'];
		  		  
		  settype( $_GET['no'], 'integer');
		 			  
			$sql=" SELECT a.file, b.* FROM pf_img a LEFT JOIN pf_list b ON b.no = a.mno
		    		where b.no=$no ";

			
			$result = mysqli_query($conn, $sql);	
			$row = mysqli_fetch_array($result);
			
				
		?>

<!DOCTYPE html>
<!-- 
Theme: JANGO - Ultimate Multipurpose HTML Theme Built With Twitter Bootstrap 3.3.7
Version: 2.0.1
Author: Themehats
Site: http://www.themehats.com
Purchase: http://themeforest.net/item/jango-responsive-multipurpose-html5-template/11987314?ref=themehats
Contact: support@themehats.com
Follow: http://www.twitter.com/themehats
-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<title>공간공작소</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES 
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>-->
	<link href="./assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css" />
	<link href="./assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css" />
	<link href="./assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="./assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="./assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css" />
	<link href="./assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN: BASE PLUGINS  -->
	<link href="./assets/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css" />
	<link href="./assets/plugins/revo-slider/css/layers.css" rel="stylesheet" type="text/css" />
	<link href="./assets/plugins/revo-slider/css/navigation.css" rel="stylesheet" type="text/css" />
	<link href="./assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
	<link href="./assets/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
	<link href="./assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
	<link href="./assets/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css" />
	<!-- END: BASE PLUGINS -->
	<!-- BEGIN THEME STYLES -->
	<link href="./assets/demos/default/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="./assets/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css" />
	<link href="./assets/demos/default/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css" />
	<link href="./assets/demos/default/css/custom.css" rel="stylesheet" type="text/css" />
	<!-- END THEME STYLES -->
	<link href="./main.css?after" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="favicon.ico" />

	
</head>

<body class="c-layout-header-fixed c-layout-header-mobile-fixed">
	


	
	
	
	<!-- BEGIN: LAYOUT/HEADERS/HEADER-ONEPAGE -->
	<!-- BEGIN: HEADER -->
	<header class="c-layout-header c-layout-header-onepage c-layout-header-4 c-layout-header-default-mobile" id="home" data-minimize-offset="40">
		<div class="c-navbar">
			<div class="container-fluid">
				<!-- BEGIN: BRAND -->
				<div class="c-navbar-wrapper clearfix">
					<div class="c-brand c-pull-left">
						<a href="index.php" class="c-logo">
							<img src="./img_main/logo1.png" alt="Gongan" class="c-desktop-logo">
							<img src="./img_main/logo1.png" alt="Gongan" class="c-desktop-logo-inverse">
							<img src="./img_main/logo1.png" alt="Gongan" class="c-mobile-logo">
						</a>
						<button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
							<span class="c-line"></span>
							<span class="c-line"></span>
							<span class="c-line"></span>
						</button>
					</div>
					<!-- END: BRAND -->
					<!-- BEGIN: HOR NAV -->
					<!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU-ONEPAGE -->
					<!-- BEGIN: MEGA MENU -->
					<nav class="c-mega-menu c-mega-menu-onepage c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold" data-onepage-animation-speed="700">
						<ul class="nav navbar-nav c-theme-nav">
							<li class="c-onepage-link ">
								<a href="index.php#about" class="c-link">About</a>
							</li>
							<li class="c-onepage-link ">
								<a href="portfolio.php" class="c-link">Portfolio</a>
							</li>
							<li class="c-onepage-link ">
								<a href="index.php#contact" class="c-link">Contact</a>
							</li>
							<li class="c-onepage-link ">
								<a href="index.php#clients" class="c-link">Clients</a>
							</li>
						</ul>
					</nav>
					<!-- END: MEGA MENU -->
					<!-- END: LAYOUT/HEADERS/MEGA-MENU-ONEPAGE -->
					<!-- END: HOR NAV -->
				</div>
			</div>
		</div>
	</header>
	<!-- END: HEADER -->
	<!-- END: LAYOUT/HEADERS/HEADER-ONEPAGE -->
	<!-- BEGIN: PAGE CONTAINER -->
	<div class="c-layout-page">
		<!-- BEGIN: PAGE CONTENT -->
		
		<div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold">
				<div class="container">
					<div class="c-page-title c-pull-left">
						<h3 class="c-font-uppercase c-font-sbold">Portfolio > Detail</h3>
					</div>
				</div>
			</div>
		
		<!-- BEGIN: CONTENT/TABS/TAB-1 -->
		<div class="c-content-box c-size-md">
			<div class="container">
				<div class="c-content-tab-4 c-opt-5" role="tabpanel">
					<ul class="nav nav-justified" role="tablist">
						<li role="presentation" class="active">
							<a href="#tab-1" role="tab" data-toggle="tab">After</a>
						</li>
						<li role="presentation">
							<a href="#tab-2" role="tab" data-toggle="tab">Before</a>
						</li>
						<li role="presentation">
							<a href="#tab-3" role="tab" data-toggle="tab">Floor plan</a>
						</li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="tab-1">
							
							
							


						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab-2">
							
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab-3">
							<ul class="c-tab-items">
								<li class="row">
									<div class="col-sm-4 col-xs-5">
										<img class="img-responsive" width="350" height="230"
											src="../../assets/base/img/content/stock/42.jpg"  alt=""/>
									</div>
									<div class="col-sm-8 col-xs-7">
										<h4 class="c-font-23">Incredible Robust</h4>
										<p>Lorem ipsum dolor sit amet, consectetuer
											adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
											magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
											exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
											consequat.</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
					
					<div class="cbp-l-project-container">
				    <div class="cbp-l-project-desc">
				        <div class="cbp-l-project-desc-title"><span><? echo $row['title']; ?></span></div>
				        <div class="cbp-l-project-desc-text">
									<? echo $row['cont']; ?>
									설명첨부
									Lorem ipsum dolor sit amet, consectetuer
									adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
									magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
									exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
									consequat.
				        </div>
				    </div>
				    <div class="cbp-l-project-details">
				        <div class="cbp-l-project-details-title"><span>Detail</span></div>

				        <ul class="cbp-l-project-details-list">
			            <li><strong>Category</strong><? echo $row['title']; ?></li>
			            <li><strong>Area</strong> <? echo $row['area']; ?> </li>
			            <li><strong>Location</strong> <? echo $row['location']; ?> </li>
				        </ul>
				    </div>
					</div>
				</div>
			</div>
		</div>
		
		
		<!-- END: CONTENT/TABS/TAB-1 -->
				
		<!-- END: PAGE CONTENT -->
	</div>
	<!-- END: PAGE CONTAINER -->
	
	
	
	<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-5 -->
	<a name="footer"></a>
	<footer class="c-layout-footer c-layout-footer-3 c-bg-dark">
		<div class="c-prefooter">
			<div class="container">
				<div class="c-container c-last">
					<ul class="c-socials">
						<li>
							<a href="https://www.youtube.com/channel/UCVJmFrvPvcEfZ83xsWGn1Fw" target='_blank'>
								<i class="icon-social-youtube"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="icon-social-facebook"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="icon-social-twitter"></i>
							</a>
						</li>
					</ul>
					<ul class="c-address">
						<li>
							<i class="icon-call-end c-theme-font"></i> TEL. 051-583-0144 | FAX. 051-703-2994
						</li>
						<li>
							<i class="icon-pointer c-theme-font"></i> 대표 이 동 준 | 사업자등록번호 889-81-02623 | 부산광역시 영도구 조내기로 5번길 23, 4층
						</li>
					</ul>
					<p class="c-copyright c-font-grey">2022 &copy; 공간공작소
						<span class="c-font-grey-3">All Rights Reserved.</span>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- END: LAYOUT/FOOTERS/FOOTER-5 -->
	<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
	<div class="c-layout-go2top">
		<i class="icon-arrow-up"></i>
	</div>
	<!-- END: LAYOUT/FOOTERS/GO2TOP -->
	<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
	<!-- BEGIN: CORE PLUGINS -->
	<!--[if lt IE 9]>
<script src="./assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
	<script src="./assets/plugins/jquery.min.js" type="text/javascript"></script>
	<script src="./assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>	
	<script src="./assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="./assets/plugins/jquery.easing.min.js" type="text/javascript"></script>
	<script src="./assets/plugins/reveal-animate/wow.js" type="text/javascript"></script>
	<script src="./assets/demos/default/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript"></script>
	<!-- END: CORE PLUGINS -->
	<!-- BEGIN: LAYOUT PLUGINS -->
	<script src="./assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
	<script src="./assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
	<script src="./assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js" type="text/javascript"></script>
	<script src="./assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
	<script src="./assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js" type="text/javascript"></script>
	<script src="./assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js" type="text/javascript"></script>
	<script src="./assets/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js" type="text/javascript"></script>
	<script src="./assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
	<script src="./assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
	<script src="./assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
	<script src="./assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
	<script src="./assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script src="./assets/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
	<script src="./assets/plugins/typed/typed.min.js" type="text/javascript"></script>
	<script src="./assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
	<script src="./assets/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
	<!-- END: LAYOUT PLUGINS -->
	<!-- BEGIN: THEME SCRIPTS -->
	<script src="./assets/base/js/components.js" type="text/javascript"></script>
	<script src="./assets/base/js/components-shop.js" type="text/javascript"></script>
	<script src="./assets/base/js/app.js" type="text/javascript"></script>

	
	<script>
		$(document).ready(function() {
			App.init(); // init core  
		})
	</script>
	<!-- END: THEME SCRIPTS -->
	<!-- BEGIN: PAGE SCRIPTS 
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLPWnOu970nrxAY1eApfQb0UKBaxov3zg" type="text/javascript"></script>
	<script src="./assets/plugins/gmaps/gmaps.js" type="text/javascript"></script>
	<script src="./assets/demos/default/js/scripts/pages/contact.js" type="text/javascript"></script>-->
	<script src="./assets/demos/default/js/scripts/revo-slider/slider-4.js" type="text/javascript"></script><!--메인슬라이드 속도 조절-->
	<!-- END: PAGE SCRIPTS -->
	<!-- END: LAYOUT/BASE/BOTTOM -->
</body>

</html>

