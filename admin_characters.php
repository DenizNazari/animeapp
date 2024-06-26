<!DOCTYPE html>
<?php
session_start();

include('baglan.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANIBASE</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



	<link href="css/modern.css" rel="stylesheet">

	<style>
		body {
			opacity: 0;
		}
	</style>
	<script src="js/settings.js"></script>




</head>

<body>




<div class="splash active">
		<div class="splash-icon"></div>
	</div>

	<div class="wrapper">

          <?php include("admin_sidebar.php") ?>


		  

								<!-- <nav id="sidebar" class="sidebar">
										<a class="sidebar-brand" href="index.php">
											<svg>
												<use xlink:href="#ion-ios-pulse-strong"></use>
											</svg>
											ANIBASE
										</a>
										<div class="sidebar-content">
											<div class="sidebar-user">

												<div class="fw-bold"><?php echo $_SESSION["user_name"]?></div>

											</div>

											<ul class="sidebar-nav">
												<li class="sidebar-header">
													Main
												</li>
												<li class="sidebar-item">
													<a class="sidebar-link" href="admin_panel.php">
														<i class="align-middle me-2 fas fa-fw fa-list"></i> <span class="align-middle">DATA</span>
													</a>
												</li>

												<li class="sidebar-item">
													<a class="sidebar-link" href="admin_USER_PAGE.php">
														<i class="align-middle me-2 fas fa-fw fa-list"></i> <span class="align-middle">ANIMES REGUESTS</span>
													</a>
												</li>
												<li class="sidebar-item">
													<a class="sidebar-link" href="admin_USER_PAGE.php">
														<i class="align-middle me-2 fas fa-fw fa-list"></i> <span class="align-middle">ANIMES</span>
													</a>
												</li>

												<li class="sidebar-item">
													<a class="sidebar-link" href="admin_USER_PAGE.php">
														<i class="align-middle me-2 fas fa-fw fa-list"></i> <span class="align-middle">CHARACTERS</span>
													</a>
												</li>


												<li class="sidebar-item">
													<a class="sidebar-link" href="admin_USER_PAGE.PHP">
													<i class="align-middle me-2 fas fa-fw fa-list"></i> <span class="align-middle">USER PAGE</span>
													</a>
												</li>



											</ul>
										</div>
							</nav> -->
		<div class="main">
			<nav class="navbar navbar-expand navbar-theme">
				<a class="sidebar-toggle d-flex me-2">
					<i class="hamburger align-self-center"></i>
				</a>



				<div class="navbar-collapse collapse">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item dropdown ms-lg-2">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-bs-toggle="dropdown">
								<i class="align-middle fas fa-cog"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-user"></i> View Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-comments"></i> Contacts</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-chart-pie"></i> Analytics</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-cogs"></i> Settings</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<main class="content">
				<div class="container-fluid">







				<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">jQuery Validation</h5>
								</div>
								<div class="card-body">
									<form id="validation-form">
										<div class="mb-3 error-placeholder">
											<label class="form-label">Email</label>
											<input type="text" class="form-control" name="validation-email" placeholder="Email">
											<small class="form-text d-block text-muted">Example block-level help text here.</small>
										</div>
										<div class="mb-3 error-placeholder">
											<label class="form-label">Password</label>
											<input type="password" class="form-control" name="validation-password" placeholder="Password">
											<small class="form-text d-block text-muted">Example block-level help text here.</small>
										</div>
										<div class="mb-3 error-placeholder">
											<label class="form-label">Confirm password</label>
											<input type="password" class="form-control" name="validation-password-confirmation" placeholder="Confirm password">
										</div>
										<div class="mb-3 error-placeholder">
											<label class="form-label">Required</label>
											<input type="text" class="form-control" name="validation-required" placeholder="Required">
										</div>
										<div class="mb-3 error-placeholder">
											<label class="form-label">URL</label>
											<input type="text" class="form-control" name="validation-url" placeholder="URL">
										</div>
										<div class="mb-3 error-placeholder">
											<label class="form-label">Select</label>
											<select class="form-control" name="validation-select">
												<option value>Select gear...</option>
												<optgroup label="Climbing">
													<option value="pitons">Pitons</option>
													<option value="cams">Cams</option>
													<option value="nuts">Nuts</option>
													<option value="bolts">Bolts</option>
													<option value="stoppers">Stoppers</option>
													<option value="sling">Sling</option>
												</optgroup>
												<optgroup label="Skiing">
													<option value="skis">Skis</option>
													<option value="skins">Skins</option>
													<option value="poles">Poles</option>
												</optgroup>
											</select>
										</div>
										<div class="mb-3 error-placeholder">
											<label class="form-label">Multiselect</label>
											<select class="form-control" name="validation-multiselect" multiple>
												<optgroup label="Climbing">
													<option value="pitons">Pitons</option>
													<option value="cams">Cams</option>
													<option value="nuts">Nuts</option>
													<option value="bolts">Bolts</option>
													<option value="stoppers">Stoppers</option>
													<option value="sling">Sling</option>
												</optgroup>
												<optgroup label="Skiing">
													<option value="skis">Skis</option>
													<option value="skins">Skins</option>
													<option value="poles">Poles</option>
												</optgroup>
											</select>
										</div>
										<div class="mb-3 error-placeholder">
											<label class="form-label">Select2</label>
											<div class="d-flex">
												<select class="form-control" name="validation-select2" style="width: 100%">
													<option value>Select gear...</option>
													<optgroup label="Climbing">
														<option value="pitons">Pitons</option>
														<option value="cams">Cams</option>
														<option value="nuts">Nuts</option>
														<option value="bolts">Bolts</option>
														<option value="stoppers">Stoppers</option>
														<option value="sling">Sling</option>
													</optgroup>
													<optgroup label="Skiing">
														<option value="skis">Skis</option>
														<option value="skins">Skins</option>
														<option value="poles">Poles</option>
													</optgroup>
												</select>
											</div>
										</div>
										<div class="mb-3 error-placeholder">
											<label class="form-label">Select2 Multiple</label>
											<div class="d-flex">
												<select class="form-control" name="validation-select2-multi" multiple style="width: 100%">
													<optgroup label="Climbing">
														<option value="pitons">Pitons</option>
														<option value="cams">Cams</option>
														<option value="nuts">Nuts</option>
														<option value="bolts">Bolts</option>
														<option value="stoppers">Stoppers</option>
														<option value="sling">Sling</option>
													</optgroup>
													<optgroup label="Skiing">
														<option value="skis">Skis</option>
														<option value="skins">Skins</option>
														<option value="poles">Poles</option>
													</optgroup>
												</select>
											</div>
										</div>
										<div class="mb-3 error-placeholder">
											<label class="form-label">Text</label>
											<textarea class="form-control" name="validation-text"></textarea>
										</div>
										<div class="mb-3 error-placeholder">
											<label class="form-label">File</label>
											<div>
												<input type="file" class="validation-file" name="validation-file">
											</div>
										</div>
										<div class="mb-3 error-placeholder">
											<label class="form-label">Radios</label>
											<label class="form-check">
												<input name="validation-radios" type="radio" class="form-check-input">
												<span class="form-check-label">Option one is this and that—be sure to include why it's great</span>
											</label>
											<label class="form-check">
												<input name="validation-radios" type="radio" class="form-check-input">
												<span class="form-check-label">Option two can be something else and selecting it will deselect option one</span>
											</label>
											<label class="form-check">
												<input name="validation-radios" type="radio" class="form-check-input">
												<span class="form-check-label">Option three is disabled</span>
											</label>
										</div>
										<div class="mb-3 error-placeholder">
											<label class="form-label">Checkbox</label>
											<br>
											<label class="form-check d-block">
												<input type="checkbox" class="form-check-input" name="validation-checkbox">
												<span class="form-check-label">Check me</span>
											</label>
										</div>
										<div class="mb-3 error-placeholder">
											<label class="form-label">Checkbox group</label>
											<label class="form-check">
												<input type="checkbox" class="form-check-input" name="validation-checkbox-group-1">
												<span class="form-check-label">One</span>
											</label>
											<label class="form-check">
												<input type="checkbox" class="form-check-input" name="validation-checkbox-group-2">
												<span class="form-check-label">Two</span>
											</label>
										</div>

										<button type="submit" class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>
					</div>










				</div>
			</main>

		</div>
	</div>

	<svg width="0" height="0" style="position:absolute">
		<defs>
			<symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
				<path
					d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
				</path>
			</symbol>
		</defs>
	</svg>
	<script src="js/app.js"></script>





	<script>
		$(function() {
			$('#datetimepicker-dashboard').datetimepicker({
				inline: true,
				sideBySide: false,
				format: 'L'
			});
		});
	</script>





</div>
    
    <script src="js/plugins.js"></script>
    <script>




        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>