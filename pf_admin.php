


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
				<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
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
		
		
		
		<!-- BEGIN: LAYOUT/HEADERS/HEADER-ONEPAGE -->
		<!-- BEGIN: HEADER -->
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
									<a href="index_admin.php#contact" class="c-link">Contact</a>
								</li>
								<li class="c-onepage-link ">
									<a href="pf_admin.php" class="c-link">Portfolio</a>
								</li>
								 <li class="c-onepage-link " >
		                <a href='admin_pw.php' class="c-link">Change Password</a>
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
		<!-- END: HEADER -->
		<!-- END: LAYOUT/HEADERS/HEADER-ONEPAGE -->
		<!-- BEGIN: PAGE CONTAINER -->
		<div class="c-layout-page">
			<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
			<div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold">
				<div class="container">
					<div class="c-page-title c-pull-left">
						<h3 class="c-font-uppercase c-font-sbold">Portfolio</h3>
					</div>
				</div>
			</div>

			<!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
			<!-- BEGIN: PAGE CONTENT -->
			<div class="c-content-box c-size-md">
				<div class="container">
					<div class="cbp-l-filters-button" style="display:flex; flex-direction: row-reverse;">
						<div>
							<a href="pf_write.php">
								<button class="btn c-btn-dark-2 c-btn-uppercase c-btn-bold c-btn-square" style="margin-right:10px;">등록하기</button>
							</a>
						</div>
					</div>
				
					<div>
							
					<table id="example" class="display" style="width:100%">
		        <thead>
	            <tr>
	            	<th>ID</th>
                <th>사진</th>
                <th>제목</th>
                <th>분류</th>
                <th>위치</th>
                <th>평수</th>
                <th>내용</th>
                <th>등록일자</th>
	            </tr>
		        </thead>
		        <tfoot>
	            <tr>
	            	<th>ID</th>
                <th>사진</th>
                <th>제목</th>
                <th>분류</th>
                <th>위치</th>
                <th>평수</th>
                <th>내용</th>
                <th>등록일자</th>
	            </tr>
		        </tfoot>
			    </table>
						
					</div>
					
					
				</div>
			</div>
			<!-- END: PAGE CONTENT -->
			
			<!-- Large modal -->
			<div class="modal fade bs-example-modal-lg" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" 
									data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-lg">
					<div class="modal-content c-square">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span id="modalClose" aria-hidden="true">×</span></button>
							<h4 class="modal-title" id="myLargeModalLabel">포트폴리오 수정 및 삭제</h4>
						</div>
						<div class="modal-body">
								
							
							<div class="row">
								<div class="col-md-12">

									<div class="c-body">
										<div class="c-content-title-1 c-title-md c-margin-b-20 clearfix">
											<h3 class="c-center c-font-uppercase c-font-bold">포트폴리오 수정</h3>
											<div class="c-line-center c-theme-bg"></div>
										</div>
										<!-- 수정 삭제 Modal form -->
										<form enctype="multipart/form-data" id="frm_modi" class="form-horizontal"  method="post">
											<div class="form-group"hidden>
												<label for="no" class="col-md-2 control-label">ID</label>
												<div class="col-md-9">
													<input type="text" class="form-control  c-square c-theme" id="no" name="no">
												</div>											
											</div>
											
											<div class="form-group">
												<label for="p_title" class="col-md-2 control-label">제목</label>
												<div class="col-md-9">
													<input type="text" class="form-control  c-square c-theme" id="p_title" name="p_title">
												</div>
											</div>
											
											<div class="form-group">
												<label for="p_kind" class="col-md-2 control-label">분류</label>
												<div class="col-md-9">
													<input type="text" class="form-control  c-square c-theme" id="p_kind" name="p_kind">
												</div>
											</div>
											
											<div class="form-group">
												<label for="p_location" class="col-md-2 control-label">위치</label>
												<div class="col-md-9">
													<input type="text" class="form-control  c-square c-theme" id="p_location" name="p_location">
												</div>
											</div>
											
											<div class="form-group">
												<label for="p_area" class="col-md-2 control-label">평수</label>
												<div class="col-md-9">
													<input type="text" class="form-control  c-square c-theme" id="p_area" name="p_area">
												</div>
											</div>
											
											<div class="form-group">
												<label for="p_cont" class="col-md-2 control-label">내용</label>
												<div class="col-md-9">
													<input type="text" class="form-control  c-square c-theme" id="p_cont" name="p_cont">
												</div>
											</div>
											
											<div class="form-group">
												<label for="file" class="col-md-2 control-label">이미지</label>
												<div class="col-md-9" id="image">
													<!-- jquery load() 이미지추가 -->
												</div>
											</div>
											
											<div class="form-group">
												<label for="" class="col-md-2 control-label">이미지파일 <br>업로드</label>
												<ul class="col-md-8 pre_imglist">		
													<li>
														<div class="filebox clearfix">
														    <div class="inputFile">
													        <label for="AddImgs" class="addImgBtn">공사후 </label>
													        <input type="file" name="files[]" id="AddImgs"  accept=".jpg, .png, .gif" multiple /><!-- style="display:none;"-->
														    	<ul id="Preview" class="sortable"></ul>
														    </div> 
														</div>										    
									        </li>
									        
									        <li>
														<div class="filebox clearfix">
														    <div class="inputFile">
													        <label for="AddImgs2" class="addImgBtn">공사전 </label>
													        <input type="file" name="files2[]" id="AddImgs2"  accept=".jpg, .png, .gif" multiple />
														    	<ul id="Preview2" class="sortable"></ul> 
														    </div> 
														</div>										    
									        </li>
									        
									        <li>
														<div class="filebox clearfix">
														    <div class="inputFile">
													        <label for="AddImgs3" class="addImgBtn">평면도 </label>
													        <input type="file" name="files3[]" id="AddImgs3"  accept=".jpg, .png, .gif" multiple />
														    	<ul id="Preview3" class="sortable"></ul> 
														    </div>
														</div>										    
									        </li> 
										    </ul>     
											</div>
											
											<div class="form-group" style="display:none;">
												<label class="col-md-2 control-label">공개여부</label>
												<div class="col-md-8">
													<label class="radio-inline">
														<input type="radio" name="p_open" id="p_open" value="공개" checked > 공개
													</label>
													<label class="radio-inline">
														<input type="radio" name="p_open" id="p_open" value="비공개"> 비공개
													</label>
												</div>
											</div>

											<div class="form-group">
												<label for="reg_date" class="col-md-2 control-label">등록일자</label>
												<div class="col-md-9">
													<input type="text" class="form-control  c-square c-border-2px c-theme" id="reg_date"  name="reg_date" readonly >
												</div>
											</div><br><br>
											
											<div class="modal-footer">								
												<button type="submit" class="btn c-btn-dark c-btn-square c-btn-bold c-btn-uppercase" id="btnModi">Modify</button>
												<button type="button" class="btn c-btn-yellow-2 c-btn-square c-btn-bold c-btn-uppercase" id="btnDel">Delete</button>
												<button type="button" class="btn c-btn-dark c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" id="modalClose" data-dismiss="modal">Close</button>
											</div>
										
										</form>
									</div>
									
								</div>
							</div>
							
						</div>
						
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			
		</div>
		
		<!-- Small modal -->
		<div id="del_chk" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content c-square">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span id="modalClose" aria-hidden="true">×</span></button>
						<h4 class="modal-title" id="mySmallModalLabel">삭제 확인</h4>
					</div>
					<div class="modal-body">
						<p>
							삭제하시겠습니까?
						</p>
					</div>
					<div class="modal-footer">								
						<button type="button" id="del_ok" class="btn c-theme-btn c-btn-square c-btn-bold c-btn-uppercase">삭제</button>
						<button type="button" id="modalClose" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">닫기</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
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
		<script src="./assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
		<script src="./assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
		<script src="./assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
		<script src="./assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
		<script src="./assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
		<script src="./assets/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
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
		
		<!-- sortable 드래그앤드롭-->
		<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" ></script>
		
		<script>
		
		// 미리보기 이미지 정보들을 담을 배열     
		
    $(document).ready(function () {
      App.init(); // init core
      
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
        ajax: 'pf_load.php',

        //hidden column id
        columnDefs: [
            {
              target: 0,
              visible: false,
            },
            {
              target: 5,
              visible: false,
            },
        ],
        
        order: [[0, 'desc']],

		  	search: {
		       return: true,
		    },

    	});
    	
    
    	
    	//datatable row 클릭 이벤트
  	  $('#example tbody').on('click', 'tr', function (e) {

  	  	e.preventDefault();
  	  	
	      var data = table.row(this).data();
				id = data[0];  //전역스코프 속성으로 var 없이 변수 설정
				
				
	      //모달창 backdrop, esc키로 창닫기 방지
	      $("#modal").modal("show").modal({backdrop:'static', keyboard:false}); 
	      					
	      
	      	$('#no').val(id);
					$('#p_title').val(data[2]);
					$('#p_kind').val(data[3]);
					$('#p_location').val(data[4]);
					$('#p_area').val(data[5]);
					$('#p_cont').val(data[6]);
					$('#reg_date').val(data[7]);
	
					$('#image').load('pf_imgload.php', {'mno':id});
	         	    
    	});
    	
    	
  		//모달창 안에 로드된 개별이미지 클릭(삭제) 이벤트
    	$("#modal #image").on('click','img',function(){
    		$("#del_chk").modal("show");
    		var src = $(this).attr("src");
    		var file = src.substr(2);

    		//개별 이미지 삭제확인 modal
    		$("#del_chk").off('click').on('click', '#del_ok' ,function(e){  //클릭 중복이벤트 방지
					e.preventDefault();
					console.log(file);

					$.ajax({
						url: "pf_del1pic.php",
						type: "POST",
						data:{
							'file': file,  
						},
						success: function(data){
							$("#del_chk").modal("hide");
							alert('삭제되었습니다.');
							$("#modal").modal("hide");
    					$('#example').DataTable().ajax.reload();
						}
					})

				});
				
				//개별 이미지 삭제확인 modal 닫기	    		
    		$("#del_chk").on('click', '#modalClose' ,function(e){
    			$("#del_chk").modal("hide");	    			
    		});
					
    	});
    	
    	  	
    	//모달창 닫기
    	$('#modal').on('click', '#modalClose', function(e){  
					$("#modal").modal("hide");
				})	


    	//포트폴리오 삭제
    	$('#modal').on('click', '#btnDel', function(e){ 
				e.preventDefault();
				
				

				$.ajax({
					url: "pf_del.php",
					type: "POST",
					data:{
						'no': id,  //#example tbody의 id값 받아서 삭제
					},
					success: function(data){
						$("#modal").modal("hide");
						$('#example').DataTable().ajax.reload();
						alert('삭제되었습니다.');
					}
				})
			});
  	
  	
  		//드래그 앤 드롭
		  $(".sortable").sortable();
		  
		  //이미지 등록
		  $("#AddImgs").change(function(e){
		      //div 내용 비워주기
		      $('#Preview').empty();

		      var files = e.target.files;
		      var arr = Array.prototype.slice.call(files);

		      preview(arr);

		      function preview(arr){
	          arr.forEach(function(f){

              //div에 이미지 추가
              var str = '<li class="ui-state-default">';
              //str += '<span>'+fileName+'</span><br>';

              //이미지 파일 미리보기
              if(f.type.match('image.*')){
                //파일을 읽기 위한 FileReader객체 생성
                var reader = new FileReader(); 
                reader.onload = function (e) { 
                  //파일 읽어들이기를 성공했을때 호출되는 이벤트 핸들러
                  str += '<img src="'+e.target.result+'" title="'+f.name+'" id="'+f.lastModified+'"  width=80 height=80>';
                  str += '<span class="delBtn" data-index="'+f.lastModified+'"> x </span>';
                  str += '</li>';
                  $(str).appendTo('#Preview');
                } 
                reader.readAsDataURL(f);
              }
	          })
		      }
		  });
		  $("#AddImgs2").change(function(e){
	      //div 내용 비워주기
	      $('#Preview2').empty();

	      var files = e.target.files;
	      var arr = Array.prototype.slice.call(files);

	      preview(arr);

	      function preview(arr){
          arr.forEach(function(f){
              
            //div에 이미지 추가
            var str = '<li class="ui-state-default">';
            //str += '<span>'+fileName+'</span><br>';

            //이미지 파일 미리보기
            if(f.type.match('image.*')){
              //파일을 읽기 위한 FileReader객체 생성
              var reader = new FileReader(); 
              reader.onload = function (e) { 
                //파일 읽어들이기를 성공했을때 호출되는 이벤트 핸들러
                str += '<img src="'+e.target.result+'" title="'+f.name+'" id="'+f.lastModified+'"  width=80 height=80>';
                str += '<span class="delBtn" data-index="'+f.lastModified+'"> x </span>';
                str += '</li>';
                $(str).appendTo('#Preview2');
              } 
              reader.readAsDataURL(f);
            }
          })
	      }
		  });
		  $("#AddImgs3").change(function(e){
	      //div 내용 비워주기
	      $('#Preview3').empty();

	      var files = e.target.files;
	      var arr = Array.prototype.slice.call(files);

	      preview(arr);

	      function preview(arr){
          arr.forEach(function(f){

            //div에 이미지 추가
            var str = '<li class="ui-state-default">';
            //str += '<span>'+fileName+'</span><br>';

            //이미지 파일 미리보기
            if(f.type.match('image.*')){
              //파일을 읽기 위한 FileReader객체 생성
              var reader = new FileReader(); 
              reader.onload = function (e) { 
                //파일 읽어들이기를 성공했을때 호출되는 이벤트 핸들러
                str += '<img src="'+e.target.result+'" title="'+f.name+'" id="'+f.lastModified+'"  width=80 height=80>';
                str += '<span class="delBtn" data-index="'+f.lastModified+'"> x </span>';
                str += '</li>';
                $(str).appendTo('#Preview3');
              } 
              reader.readAsDataURL(f);
            }
          })
	      }
		  });
		  
			//미리보기 이미지 삭제
		  $(document).on("click",".delBtn",function(){
				//삭제할 이미지타이틀 가져와서 선택된 input배열 동기화
	
		    var removeTargetId  = $(this).data('index'); 
		    var removeTarget  =	$('#'+ removeTargetId );
		    var files = $(this).closest('div').children('input')[0].files;
		    //var files = $(this).closest('div').children().first().find('input')[0].files; 
		    //console.log(files.attr('id')); 
		    
		    var dataTranster = new DataTransfer();
		    
		   
				
				 Array.from(files)
                    .filter(file => file.lastModified != removeTargetId)
                    .forEach(file => {
                    dataTranster.items.add(file);
                 });
                 
 				$(this).closest('div').children('input')[0].files = dataTranster.files;

         removeTarget.parent('li').remove();
		 	 	
		  });
  		
  		//포트폴리오 수정		
    	$('#modal').on('submit', '#frm_modi', function(e) {	
				e.preventDefault();													
				$.ajax({
					url: "pf_modi.php",
					type: "POST",
					data: new FormData(this),  
	        cache: false,
	        contentType: false,  
	        processData:false,  
					success: function(data){
						alert('수정되었습니다.');
						$('#Preview, #Preview2, #Preview3').empty();
						$("#AddImgs, #AddImgs2, #AddImgs3").val("");
						//$("#modal").modal("hide");
						//$('#example').DataTable().ajax.reload();
						
					 //모달창 리로드
				    var link = $(e.relatedTarget);
				    $(this).find(".modal-body").load(link.attr("href"));
				    
						
						
						//window.location.href = "";
						
						
					}
			  });
			  
			});	   
    	
    });
    

    
 
    
		</script>
		
		<!-- END: THEME SCRIPTS -->
		<!-- BEGIN: PAGE SCRIPTS -->
		<script src="./assets/demos/default/js/scripts/pages/4col-portfolio.js" type="text/javascript"></script>
		<!-- END: PAGE SCRIPTS -->
		<!-- END: LAYOUT/BASE/BOTTOM -->
	</body>
	
	<style>
		
  .inputFile,#Preview,#Preview2,#Preview3,
	#Preview li,#Preview2 li,#Preview3 li{
	    float:left;
	}
	.inputFile{
	   padding: 10px 10px 5px 10px;
	}
	.pre_imglist li{
			border: 1px solid #b7b7b7;
			list-style: none;
	}

	/* 
	.addImgBtn{
	    width: 80px !important;
	    height: 80px !important;
	    line-height: 71px !important;
	    background-color:#D6E4E5 !important;
	    color: #111 !important;
	    font-size: 15px !important;
	    padding: 0 !important;
	    text-align:center;
	} 
	*/

	#Preview,#Preview2,#Preview3{
	    list-style:none;
	    display:inline;
	    padding:0;
	}

	#Preview li,#Preview2 li,#Preview3 li{
			margin: 10px;
	    position: relative;
	    cursor:move;
	    border: none;
	}
	.delBtn{
	    position: absolute;
	    top: 0;
	    right: 0;
	    font-size: 13px;
	    background-color: #000;
	    color: #fff;
	    width: 18px;
	    height: 18px;
	    line-height: 16px;
	    display: inline-block;
	    text-align: center;
	    cursor: pointer;
	}
  
	</style>
	
</html>