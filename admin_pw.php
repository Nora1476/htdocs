
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
<!--[if !IE]>-->
<html lang="en">
	<!--<![endif]-->
	<!-- BEGIN HEAD -->
	<head>
		<meta charset="utf-8" />
		<title>공간공작소_관리자</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta content="width=device-width, initial-scale=1.0" name="viewport" />
			<meta http-equiv="Content-type" content="text/html; charset=utf-8">
				<meta content="" name="description" />
				<meta content="" name="author" />
				<!-- BEGIN GLOBAL MANDATORY STYLES -->
				<link
    href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all'
    rel='stylesheet' type='text/css'>
					<link href="./assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css" />
					<link href="./assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css" />
					<link href="./assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
					<link href="./assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
					<link href="./assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css" />
					<link href="./assets/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
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
					<link href="./assets/demos/default/css/plugins-rtl.css" rel="stylesheet" type="text/css" />
					<link href="./assets/demos/default/css/components-rtl.css" id="style_components" rel="stylesheet" type="text/css" />
					<link href="./assets/demos/default/css/themes/default-rtl.css" rel="stylesheet" id="style_theme" type="text/css" />
					<link href="./assets/demos/default/css/custom-rtl.css" rel="stylesheet" type="text/css" />
					<!-- END THEME STYLES -->
					<link rel="shortcut icon" href="favicon.ico" />
					<link href="./main.css?after" rel="stylesheet" type="text/css">
						<!--BEGIN: datatables-->
						<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
						<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	</head>
	<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-fullscreen c-layout-header-topbar">
		    
		
		<?php
			session_start();
			//print_r($_SESSION);

			//로그인 세션이 없을 경우 admin_amin.php로 이동하여 로그인 유도
			if(!isset($_SESSION['username'])) {
			   
				echo "<script>alert('로그인이 필요한 페이지 입니다.')</script>";
	    	echo "<script>location.replace('index_admin.php');</script>";
	    	
			}
		
		?>
		
		
		
		
		<!-- BEGIN: LAYOUT/HEADERS/HEADER-ONEPAGE -->
		<!-- BEGIN: HEADER -->
		<header class="c-layout-header c-layout-header-onepage c-layout-header-4 c-layout-header-default-mobile" id="home"
	    			data-minimize-offset="40" style="background:white;">
			<div class="c-navbar">
				<div class="container-fluid">
					<!-- BEGIN: BRAND -->
					<div class="c-navbar-wrapper clearfix">
						<div class="c-brand c-pull-right">
							<a href="admin_main.php" class="c-logo">
								<img src="./img_main/logo1.png" alt="JANGO" class="c-desktop-logo">
								<img src="./img_main/logo1.png" alt="JANGO" class="c-desktop-logo-inverse">
								<img src="./img_main/logo1.png" alt="JANGO" class="c-mobile-logo">
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
						<nav
            class="c-mega-menu c-mega-menu-onepage c-pull-left c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold"
            data-onepage-animation-speed="700">
							<ul class="nav navbar-nav c-theme-nav">
								<li class="c-onepage-link " >
		                <a href='admin_logout.php' class="c-link">Logout</a>
		             </li>
		             <li class="c-onepage-link " >
		                <a href='admin_pw.php' class="c-link">Change Password</a>
		             </li>
		             <li class="c-onepage-link ">
									<a href="pf_admin.php" class="c-link">Portfolio</a>
								</li>
								<li class="c-onepage-link ">
									<a href="index_admin.php#contact" class="c-link">Contact</a>
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
			
			<section class="c-layout-revo-slider c-layout-revo-slider-7" dir="ltr">
					<div class="tp-banner-container tp-fullscreen tp-fullscreen-mobile">
						<div class="c-singup-form">
							<h3 class="c-font-54 c-font-thin c-font-white c-margin-b-40 c-font-uppercase">
		            관리자페이지 <span class="c-theme-font c-font-bold"> 비밀번호 </span> 변경
		          </h3>>

							<h5 class="c-font-24 c-font-thin c-font-uppercase c-font-white c-subtitle c-margin-b-40">
								새로운 비밀번호를 입력해주세요.
							</h5>
								
							<!-- 비밀번호 변경 -->
							<form class="form-block"  id="adminPw" >
								<div class="form-group">
									<input type="password" name="current_password" id="pwInput" class="form-control c-bg-transparent input-lg c-theme c-square c-center" placeholder="현재비밀번호" 
												 style="max-width:500px; margin:0 auto;">
								</div>
								<div class="form-group">
									<input type="password" name="new_password" id="pwInput" class="form-control c-bg-transparent input-lg c-theme c-square  c-center" placeholder="새로운 비밀번호"
												 style="max-width:500px; margin:0 auto;">
								</div>
								<div class="form-group">
									<input type="password" name="new_password_confirm" id="pwInput" class="form-control c-bg-transparent input-lg c-theme c-square  c-center" placeholder="새로운 비밀번호 확인"
									       style="max-width:500px; margin:0 auto;">
								</div>
								<input type="submit" class="btn btn-lg btn-danger c-btn-uppercase c-btn-square c-btn-bold" value="비밀번호 변경하기">

							</form>
						</div>
						<div class="tp-banner rev_slider" data-version="5.0">
							<ul>
								<!--BEGIN: SLIDE #1 -->
								<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-style="dark">
									<img alt="Gongan" src="./assets/base/img/content/backgrounds/bg-56.jpg" data-bgposition="center center"
	                data-bgfit="cover" data-bgrepeat="no-repeat">
								</li>
								<!--END -->
						 		<!--BEGIN: SLIDE #2 -->
								<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-style="dark">			
									<img 
										alt="" 
										src="../../assets/base/img/content/backgrounds/bg-57.jpg"
										data-bgposition="center center" 
										data-bgfit="cover" 
										data-bgrepeat="no-repeat"
									>	
						 		</li>
						 		<!--END -->
							</ul>
						</div>
					</div>
				</section>
			
			
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
								<a href="https://www.instagram.com/gonggan_workshop/" target=”_blank” >
									<i class="fa fa-instagram"></i>
								</a>
							</li>
							<li>
								<a href="https://blog.naver.com/spaceworkshop" target=”_blank” > 
									<img id="naver" src="./img_main/naver.png" alt="" >
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
		<script src="./assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js"
    type="text/javascript"></script>
		<script src="./assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js"
    type="text/javascript"></script>
		<script src="./assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js"
    type="text/javascript"></script>
		<script src="./assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js"
    type="text/javascript"></script>
		<script src="./assets/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js"
    type="text/javascript"></script>
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
		<!--BEGIN: datatables-->
		<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
		<!--END: datatables-->
		<script>
    $(document).ready(function () {
      App.init(); // init 
      
      $("#naver").hover(
				function () { // mouseover
					$(this).attr("src","./img_main/naver2.png");
				},function () { // mouseover
					$(this).attr("src","./img_main/naver.png");
				}
			);
			
			$("#adminPw").submit(function(e) {
				e.preventDefault();  
				var data = $( "#adminPw" ).serialize();
	      $.ajax({
					url: "admin_pw_ok.php",
					type: "POST",
					data: data,
					success: function(data) {
						alert(data);
						location.replace('index_admin.php');
					},
				});
			});
		      
		});
		</script>
		<!-- END: THEME SCRIPTS -->
		<!-- BEGIN: PAGE SCRIPTS 
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLPWnOu970nrxAY1eApfQb0UKBaxov3zg"
    type="text/javascript"></script>
		<script src="./assets/plugins/gmaps/gmaps.js" type="text/javascript"></script>
		<script src="./assets/demos/default/js/scripts/pages/contact.js" type="text/javascript"></script>-->
		<script src="./assets/demos/default/js/scripts/revo-slider/slider-7.js" type="text/javascript"></script>
		<!-- END: PAGE SCRIPTS -->
		<!-- END: LAYOUT/BASE/BOTTOM -->
	</body>
	
	<style>
		
		#pwInput, #pwInput::placeholder{
			font-weight:700;
			font-size:15px;
			color: #fff;
		}
	</style>

</html>