<?php $paths = 3;

include('../inc/header.php'); ?>

<body class="crm_body_bg">
	<?php include('../inc/nav.php'); ?>

	<section class="main_content dashboard_part large_header_bg">
		<!-- menu  -->
		<?php include('../inc/menu.php'); ?>

		<!--/ menu  -->
		<div class="main_content_iner overly_inner ">
			<div class="container-fluid p-0 ">
				<!-- page title  -->
				<div class="row">
					<div class="col-12">
						<div class="page_title_box d-flex align-items-center justify-content-between">
							<div class="page_title_left">
								<h3 class="f_s_30 f_w_700 text_white">User</h3>
								<ol class="breadcrumb page_bradcam mb-0">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard </a></li>
									<li class="breadcrumb-item"><a href="javascript:void(0);">User</a></li>
									<li class="breadcrumb-item active">History</li>
								</ol>
							</div>
							<a href="#" class="white_btn3">Text Here</a>
						</div>
					</div>
				</div>
				<div class="row ">
					<div class="col-lg-12 card_height_100">
						<div class="white_card mb_20">
							<div class="row justify-content-center">
								<div class="col-lg-12">
									<div class="white_card card_height_100 mb_30">
										<div class="white_card_body">
											<div class="Table">
												<div class="white_box_tittle list_header">
													<h4>History</h4>
													<div class="box_right d-flex lms_block">
														<div class="serach_field_2">
															<div class="search_inner">
																<form Active="#" method="">
																	<div class="search_field">
																		<input type="text"
																			placeholder="Search content here...">
																	</div>
																	<button type="submit"> <i class="ti-search"></i>
																	</button>
																</form>
															</div>
														</div>
													</div>
												</div>

												<div class="output">

												</div>
											</div>
										</div>
									</div>
								</div>
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
	<?php include('../inc/footer.php'); ?>
	<script>
		$(document).ready(function() {
			function history() {

				$.ajax({
					url: "../api/user/history.php",
					type: "POST",
					data: "",
					beforeSend: function() {
						$('.output').html($(".spinner-box").html());
					},
					success: function(data) {
						$('.output').html(data);
					},
				});
			}
			history();

			function navigation(path, data) {
				$(document).on("click", ".page_navigation", function() {
					let page = $(this).attr("id");
					$.ajax({
						url: path,
						type: "POST",
						data: {
							page: page,
							query: data,
						},
						success: function(output) {
							$(".output").html(output);
						},
					});
				});
			}

			navigation('../api/user/history.php', '')
		});
	</script>

</body>

</html>