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
									<li class="breadcrumb-item active">Add</li>
								</ol>
							</div>
							<a href="#" class="white_btn3">Text Here</a>
						</div>
					</div>
				</div>
				<div class="row ">
					<div class="col-lg-12 card_height_100">
						<div class="white_card mb_20">
							<div class="white_card_header">
								<div class="box_header m-0">
									<div class="main-title">
										<h3 class="m-0">New user</h3>
									</div>
								</div>
							</div>
							<div class="white_card_body">
								<div class="row">
									<div class="col-lg-12">
										<form method="post" class="user_from ADD_USER">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="fname">First Name</label>
														<input type="text" name="fname" id="fname" class="form-control"
															placeholder="Enter first name">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="lname">Last Name</label>
														<input type="text" name="lname" id="lname" class="form-control"
															placeholder="Enter last name">
													</div>
												</div>
											</div>

											<div class="row mt-3">
												<div class="col-md-6">
													<div class="form-group">
														<label for="email">Email</label>
														<input type="email" name="email" id="email" class="form-control"
															placeholder="Enter first name">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<div class="form-group">
															<label for="fname">Role</label>
															<select class="form-control custom-select" name="role"
																id="role">
																<option selected>Choose Role</option>
																<option value="Admin">Admin</option>
																<option value="User">User</option>
																<!-- <option value=""></option> -->
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-md-6">
													<div class="form-group">
														<label for="Username">Username</label>
														<input type="text" name="username" id="username"
															class="form-control" placeholder="Enter Username">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="Password">Password</label>
														<input type="password" name="password" id="password"
															class="form-control" placeholder="Enter Password">
													</div>
												</div>
											</div>

											<button type="submit" name="save"
												class="mt-5 btn btn-primary save-btn">Save</button>
										</form>
									</div>
								</div>
							</div>
						</div>
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
																<form Active="#">
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
			$('.ADD_USER').on('submit', function(e) {
				e.preventDefault();

				$.ajax({
					url: "../api/user/save.php",
					type: "POST",
					data: $(this).serialize(),
					success: function(data) {
						alert(data);
						history();

						$('.ADD_USER')[0].reset();
					},
				});
			});

			$(document).on('click', '.DELETE', function() {
				let data = $(this).attr('id');

				if (confirm('Are you sure you want to delete this Account?')) {
					$.ajax({
						url: "../api/user/delete.php",
						type: "POST",
						data: {
							uid: data
						},
						success: function(data) {
							alert(data);
							history();
						},
					});
				}
			});

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