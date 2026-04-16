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
								<h3 class="f_s_30 f_w_700 text_white">Settings</h3>
								<ol class="breadcrumb page_bradcam mb-0">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Settings </a></li>
									<li class="breadcrumb-item"><a href="../">Dashboard</a></li>
								</ol>
							</div>
							<a href="#" class="white_btn3">Text Here</a>
						</div>
					</div>
				</div>
				<div class="row ">
					<div class="col-lg-12 card_height_100 d-flex justify-content-between">
						<div class="container-fluid">
							<div class="row">
								<!-- LEFT PROFILE -->
								<div class="col-lg-4 col-12">
									<div class="row">
										<div class="col-12">
											<div class="card w-100 p-4 d-flex flex-column justify-content-between">
												<div>
													<h4>Profile</h4>

													<div class="profile-text mt-4">
														<div class="profile-img">
															<div class="profile-img-wrapper">
																<img src="../../img/profile.png" alt="profile" class="profile-img">
															</div>
														</div>
														<p class="small-text mt-2">User ID : PXL-<?php echo $user['uid']; ?></p>
														<h5><?php echo $user['fname'] . ' ' . $user['lname']; ?></h5>
														<p class="small-text">2026 years, Barbados</p>
													</div>

													<div class="mt-4 mb-5">
														<!-- <div class="icon-text">📱 +1234567764</div> -->
														<div class="icon-text">✉️ <?php echo $user['email']; ?></div>
														<div class="icon-text">📅 <?php echo $user['date']; ?></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- RIGHT FORM -->
								<div class="col-lg-8 col-md-12 d-flex">
									<div class="card w-100 p-4 d-flex flex-column justify-content-between">
										<form method="POST" class="UPDATE">
											<h4>Profile Settings</h4>

											<div class="row mt-4">
												<div class="col-md-12 mb-3">
													<label>First Name *</label>
													<input class="form-control input-custom" name="fname" value="<?php echo $user['fname']; ?>" placeholder="Enter Firstname">
												</div>
												<div class="col-md-12 mb-3">
													<label>Last Name *</label>
													<input class="form-control input-custom" name="lname" value="<?php echo $user['lname']; ?>" placeholder="Enter Lastname">
												</div>

												<div class="col-md-12 mb-3">
													<label>Mail *</label>
													<input class="form-control input-custom" name="email" value="<?php echo $user['email']; ?>" placeholder="Enter E-Mail">
												</div>
											</div>
											<div class="d-flex justify-content-end mt-1">
												<button type="submit" class="save-btn">
													Save Changes
												</button>
											</div>
										</form>
									</div>
								</div>

							</div>

							<!-- AUTH DETAILS -->
							<div class="row mt-4">
								<div class="col-12">
									<div class="card p-4">
										<h4>Authentication Details</h4>
										<div class="row mt-3">
											<div class="col-md-4">User Name :</div>
											<div class="col-md-8"><?php echo $login['username']; ?></div>

											<div class="col-md-4 mt-2">Login Password :</div>
											<div class="col-md-8 mt-2">********</div>

											<div class="col-md-4 mt-2">Last Password change :</div>
											<div class="col-md-8 mt-2">************</div>
										</div>
									</div>
								</div>
							</div>

							<!-- LOGIN ACTIVITY -->
							<div class="row mt-4">
								<div class="col-12">
									<div class="card p-4">
										<h4>Last Login activity</h4>

										<div class="login-item">
											<div class="login-left">
												<div class="login-icon">🌐</div>
												<div>
													<div>Chrome-V147.0.0.0-Windows</div>
													<small class="small-text">London Windows</small>
												</div>
											</div>
											<div>
												85.255.237.198<br>
												<small class="small-text">2026-04-15 10:39:15</small>
											</div>
										</div>

										<div class="login-item">
											<div class="login-left">
												<div class="login-icon">🌐</div>
												<div>
													<div>Chrome-V146.0.0.0-Windows</div>
													<small class="small-text">Madrid Windows</small>
												</div>
											</div>
											<div>
												102.218.103.1<br>
												<small class="small-text">2026-04-06 23:26:14</small>
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
			$('.UPDATE').on('submit', function(e) {
				e.preventDefault();

				$.ajax({
					url: "../api/user/update.php",
					type: "POST",
					data: $(this).serialize(),
					success: function(data) {
						alert(data);
					},
				});
			});
		});
	</script>

</body>

</html>