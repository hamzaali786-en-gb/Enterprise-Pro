<?php $paths = 2;

include('inc/header.php'); ?>

<body class="crm_body_bg">
	<?php include('inc/nav.php'); ?>

	<section class="main_content dashboard_part large_header_bg">
		<!-- menu  -->
	<?php include('inc/menu.php'); ?>
		
		<!--/ menu  -->
		<div class="main_content_iner overly_inner ">
			<div class="container-fluid p-0 ">
				<!-- page title  -->
				<div class="row">
					<div class="col-12">
						<div class="page_title_box d-flex align-items-center justify-content-between">
							<div class="page_title_left">
								<h3 class="f_s_30 f_w_700 text_white">Dashboard</h3>
								<ol class="breadcrumb page_bradcam mb-0">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Project </a></li>
									<li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
									<li class="breadcrumb-item active">index</li>
								</ol>
							</div>
							<a href="#" class="white_btn3">Text Here</a>
						</div>
					</div>
				</div>
				<div class="row ">
					<div class="col-lg-8 card_height_100">
						<div class="white_card mb_20">
							<div class="white_card_header">
								<div class="box_header m-0">
									<div class="main-title">
										<h3 class="m-0">Revenue</h3>
									</div>
								</div>
							</div>
							<div class="white_card_body" style="height: 286px;">
								<!-- Enter text here -->
								<div class="text-center">Text Here</div>
							</div>
						</div>
						<div class="white_card mb_20">
							<div
								class="white_card_body white_card2 d-flex align-items-center justify-content-between flex-wrap">
								<div class="renew_report_left">
									<h4 class="f_s_19 f_w_600 color_theme2 mb-0">Text</h4>
									<p class="color_gray2 f_s_12 f_w_600">Lorem ipsum dolor, sit amet consectetur
										adipisicing elit. Provident, quasi..</p>
								</div>
								<div class="btn">
									<a href="#" class="btn_1 mt-1 mb-1">Text Here</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 card_height_100 mb_20">
						<div class="white_card">
							<div class="white_card_header">
								<div class="box_header m-0">
									<div class="main-title">
										<h3 class="m-0">Header</h3>
									</div>
								</div>
							</div>
							<div class="white_card_body p-0">
								<div class="card_container">
									<div id="platform_type_dates_donut" style="height:280px"></div>
								</div>
							</div>
						</div>
						<div class="card_unit_footer d-flex justify-content-between">
							<div class="single_card">
								<p>Header</p>
								<h3>Text</h3>
								<p class="d-flex align-items-center">More Text Here</p>
							</div>
							<div class="single_card disable_card">
								<p>Header</p>
								<h3>Text</h3>
								<p class="d-flex align-items-center">More Text Here</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- footer part -->
		<div class="footer_part">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="footer_iner text-center">
							<p>Footer here</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer End -->

	</section>
	<!-- main content part end -->
	<?php include('inc/footer.php'); ?>

</body>

</html>