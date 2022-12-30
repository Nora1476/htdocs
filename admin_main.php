

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
				<!-- BEGIN GLOBAL MANDATORY STYLES -->
				<link
				    href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all'
				    rel='stylesheet' type='text/css'>
					<link href="./assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css" />
					<link href="./assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css" />
					<link href="./assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
					<link href="./assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
					<link href="./assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css" />
					<link href="./assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
					<!-- END GLOBAL MANDATORY STYLES -->
					<!-- BEGIN: BASE PLUGINS  -->
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
					
					<link rel="shortcut icon" href="favicon.ico" />
					<link href="./main.css" rel="stylesheet" type="text/css">
					
					<!--BEGIN: datatables-->
					<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
					<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
					<!--END: datatables-->

	</head>
	<body class="c-layout-header-fixed c-layout-header-mobile-fixed">
		
		
		<?php
			session_start();
			//print_r($_SESSION);

			//로그인 세션이 없을 경우 admin_amin.php로 이동하여 로그인 유도
			if(!isset($_SESSION['username'])) {
			   
				echo "<script>alert('로그인이 필요한 페이지 입니다.')</script>";
	    	echo "<script>location.replace('index_admin.php');</script>";
	    	
			}
		
		?>
		
		
	
			<header class="c-layout-header c-layout-header-onepage c-layout-header-4 c-layout-header-default-mobile" id="home"
	    data-minimize-offset="40">
				<div class="c-navbar">
					<div class="container-fluid">
						<!-- BEGIN: BRAND -->
						<div class="c-navbar-wrapper clearfix">
							<div class="c-brand c-pull-left">
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
	            class="c-mega-menu c-mega-menu-onepage c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold"
	            data-onepage-animation-speed="700">
								<ul class="nav navbar-nav c-theme-nav">
									<li class="c-onepage-link ">
										<a href="pf_admin.php" class="c-link">Portfolio</a>
									</li>
									<li class="c-onepage-link ">
										<a href="index_admin.php#contact" class="c-link">Contact</a>
									</li>
									<li class="c-onepage-link " >
			                <a href='admin_logout.php' class="c-link">Logout</a>
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
		
		  <!-- BEGIN: PAGE CONTAINER -->
		  <div class="c-layout-page">

		    <section class="c-layout-revo-slider c-layout-revo-slider-7" dir="ltr">
		      <div class="tp-banner-container tp-fullscreen tp-fullscreen-mobile">
		        <div class="c-singup-form">
		          <h3 class="c-font-54 c-font-thin c-font-white c-margin-b-40 c-font-uppercase">
		            공간공작소  <span class="c-theme-font c-font-bold"> 관리자 </span> 페이지
		          </h3>

		          <h5 class="c-font-24 c-font-thin c-font-uppercase c-font-white c-subtitle c-margin-b-40">
		            관리자 페이지에 오신 것을 환영합니다.
		          </h5>
							
		        </div>
		        <div class="tp-banner rev_slider" data-version="5.0">
		          <ul>
		            <!--BEGIN: SLIDE #1 -->
		            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-style="dark">
		              <img alt="" src="./assets/base/img/content/backgrounds/bg-56.jpg" data-bgposition="center center"
		                data-bgfit="cover" data-bgrepeat="no-repeat">
		            </li>
		            <!--END -->

		            <!--BEGIN: SLIDE #2 -->
		            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-style="dark">
		              <img alt="" src="./assets/base/img/content/backgrounds/bg-57.jpg" data-bgposition="center center"
		                data-bgfit="cover" data-bgrepeat="no-repeat">
		            </li>
		            <!--END -->
		          </ul>
		        </div>
		      </div>
		    </section>

		    <section id="contact">
					<!-- BEGIN: CONTENT/CONTACT/FEEDBACK-2 -->
					<div class="c-content-box c-size-md c-no-padding c-bg-img-center">
						<div class="container">
							<div class="c-content-feedback-1 c-option-2">
								<div class="c-content-title-1">
									<h3 class="c-center c-font-uppercase c-font-bold">Contact</h3>
									<div class="c-line-center c-theme-bg"></div>
								</div>
								<div class="row" style="padding:0;">
									<div class="col-md-1"></div>
									<div class="col-md-10">
										<div class="c-contact">

										<table id="example" class="display" style="width:100%">
							        <thead>
						            <tr>
						            	<th>ID</th>
					                <th>성함</th>
					                <th>연락처</th>
					                <th>현장위치</th>
					                <th>임대차계약</th>
					                <th>유형</th>
					                <th>기타내용</th>
					                <th>문의일자</th>
						            </tr>
							        </thead>
							        <tfoot>
						            <tr>
						            	<th>ID</th>
					                <th>성함</th>
					                <th>연락처</th>
					                <th>현장위치</th>
					                <th>임대차계약</th>
					                <th>유형</th>
					                <th>기타내용</th>
					                <th>문의일자</th>
						            </tr>
							        </tfoot>
								    </table>

										</div>
									</div>
									<div class="col-md-1"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- END: CONTENT/CONTACT/FEEDBACK-2 -->
				</section>

				<!--Modal-->
				<div class="modal fade" id="modal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content c-square">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>&nbsp&nbsp</button>
								<h4 class="modal-title" id="exampleModalLabel">문의글 수정 및 삭제하기</h4>
							</div>
							<div class="modal-body" style="font-size:10px;">
								<form>
									<input type="text" class="form-control c-square" id="id" name="id" style="display:none;">
									<div class="form-group" >
										<label for="name" class="control-label">성함 ::</label>
										<input type="text" class="form-control c-square" id="name" name="name">
									</div>
									<div class="form-group">
										<label for="phone" class="control-label">연락처 ::</label>
										<input type="text" class="form-control c-square" id="phone" name="phone">
									</div>
									<div class="form-group">
										<label for="location" class="control-label">현장위치 ::</label>
										<input type="text" class="form-control c-square" id="location" name="location">
									</div>
									<div class="form-group">
										<label for="lease_agreement" class="control-label">임대차계약 :: </label>
										<input type="text" class="form-control c-square" id="lease_agreement" name="lease_agreement">
									</div>
									<div class="form-group">
										<label for="type" class="control-label">유형 ::</label>
										<input type="text" class="form-control c-square" id="type" name="type">
									</div>
									<div class="form-group">
										<label for="content" class="control-label">기타문의내용 ::</label>
										<textarea class="form-control  c-square" id="content" name="content"></textarea>
									</div>
									<div class="form-group">
										<label for="created" class="control-label">등록일자 ::</label>
										<input type="text" class="form-control c-square" id="created" name="created">
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" id="btnModi" class="btn c-theme-btn c-btn-square c-btn-bold c-btn-uppercase" style="margin-right:5px;">Modify</button>
								<button type="button" id="btnDel" class="btn c-theme-btn c-btn-square c-btn-bold c-btn-uppercase">Delete</button>
								<button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>

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
			</div><!-- END: LAYOUT/FOOTERS/GO2TOP -->

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
		      
		      
		      //dataTable 게시판
		      var table = $('#example').DataTable({
		        processing: true,
		        serverSide: true,
		        ajax: 'contact_load.php',
		        //hidden column id
		        columnDefs: [
		            {
		              target: 0,
		              visible: false,
		            },
		        ],
		        order: [[0, 'desc']],

				  	search: {
				       return: true,
				    },

		    	});

	    	//모달창 오픈
	  	  $('#example tbody').on('click', 'tr', function (e) {

	  	  	e.preventDefault();
		      var data = table.row(this).data();

		      $("#modal").modal("show").modal({backdrop:'static'});
		      	$('#id').val(data[0]);
					  $('#name').val(data[1]);
						$('#phone').val(data[2]);
						$('#location').val(data[3]);
						$('#lease_agreement').val(data[4]);
						$('#type').val(data[5]);
						$('#content').val(data[6]);
						$('#created').val(data[7]);
	    	});



		    // modify
				$("#btnModi").off('click').on('click',function(e){

					e.preventDefault();
					
					var id  = $('#id').val();
					var name  = $('#name').val();
					var phone  = $('#phone').val();
					var location  = $('#location').val();
					var lease_agreement  = $('#lease_agreement').val();
					var type  = $('#type').val();
					var content  = $('#content').val();

					//console.log(id);

					
					$.ajax({
						url: "contact_modi.php",
						type: "POST",
						data:{
							id:id,
							name: name,
							phone: phone,
							location: location,
							lease_agreement: lease_agreement,
							type: type,
							content: content
						},
						success: function(data){
							$("#modal").modal("hide");
							$('#example').DataTable().ajax.reload();
							alert("수정되었습니다.");
						}
				  });
				  
				});


				 // delete
				 $("#btnDel").click(function(){
					var id  = $('#id').val();
					console.log(id)

					$.ajax({
						url: "contact_del.php",
						type: "POST",
						data:{
							id: id,
						},
						success: function(data){
							$("#modal").modal("hide");
							$('#example').DataTable().ajax.reload();
							alert("삭제되었습니다.");
						}
					})

				});


			});
		  </script>
		  <!-- END: THEME SCRIPTS -->

		  <!-- BEGIN: PAGE SCRIPTS -->
		  <script src="./assets/demos/default/js/scripts/revo-slider/slider-7.js" type="text/javascript"></script>
		  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLPWnOu970nrxAY1eApfQb0UKBaxov3zg"
		    type="text/javascript"></script>
		  <script src="./assets/plugins/gmaps/gmaps.js" type="text/javascript"></script>
		  <script src="./assets/demos/default/js/scripts/pages/contact.js" type="text/javascript"></script>
		  <!-- END: PAGE SCRIPTS -->
		  <!-- END: LAYOUT/BASE/BOTTOM -->
  
  
  
  
</body>

<style>
	td.details-control {
    background: url('../resources/details_open.png') no-repeat center center;
    cursor: pointer;
	}
	tr.details td.details-control {
	    background: url('../resources/details_close.png') no-repeat center center;
	}
</style>

</html>