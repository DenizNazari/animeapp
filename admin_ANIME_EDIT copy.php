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
		
	
		<nav id="sidebar" class="sidebar">
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
		</nav>		
		<nav id="sidebar" class="sidebar">
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
						<a class="sidebar-link" href="tables-bootstrap.html">
							<i class="align-middle me-2 fas fa-fw fa-list"></i> <span class="align-middle">Tables</span>
						</a>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link" href="calendar.html">
							<i class="align-middle me-2 far fa-fw fa-calendar-alt"></i> <span class="align-middle">Calendar</span>
						</a>
					</li>



				</ul>
			</div>
		</nav>
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

					<div class="header">
						<h1 class="header-title">
							Welcome back, Linda!
						</h1>
						<p class="header-subtitle">You have 24 new messages and 5 new notifications.</p>
					</div>

					<div class="row">
						<div class="col-xl-6 col-xxl-7">

						<div class="card flex-fill">
												<div class="card-header">
													<div class="card-actions float-end">
														<a href="#" class="me-1">
															<i class="align-middle" data-feather="refresh-cw"></i>
														</a>
														<div class="d-inline-block dropdown show">
															<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
																<i class="align-middle" data-feather="more-vertical"></i>
															</a>

															<div class="dropdown-menu dropdown-menu-end">
																<a class="dropdown-item" href="#">Action</a>
																<a class="dropdown-item" href="#">Another action</a>
																<a class="dropdown-item" href="#">Something else here</a>
															</div>
														</div>
													</div>
													<h5 class="card-title mb-0">Latest Projects</h5>
												</div>
												<table id="datatables-dashboard-projects" class="table table-striped my-0">
													<thead>
														<tr>
															<th>Name</th>
															<th class="d-none d-xl-table-cell">Start Date</th>
															<th class="d-none d-xl-table-cell">End Date</th>
															<th>Status</th>
															<th class="d-none d-md-table-cell">Assignee</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Project Apollo</td>
															<td class="d-none d-xl-table-cell">01/01/2021</td>
															<td class="d-none d-xl-table-cell">31/06/2021</td>
															<td><span class="badge bg-success">Done</span></td>
															<td class="d-none d-md-table-cell">Carl Jenkins</td>
														</tr>
														<tr>
															<td>Project Fireball</td>
															<td class="d-none d-xl-table-cell">01/01/2021</td>
															<td class="d-none d-xl-table-cell">31/06/2021</td>
															<td><span class="badge bg-danger">Cancelled</span></td>
															<td class="d-none d-md-table-cell">Bertha Martin</td>
														</tr>
														<tr>
															<td>Project Hades</td>
															<td class="d-none d-xl-table-cell">01/01/2021</td>
															<td class="d-none d-xl-table-cell">31/06/2021</td>
															<td><span class="badge bg-success">Done</span></td>
															<td class="d-none d-md-table-cell">Stacie Hall</td>
														</tr>
														<tr>
															<td>Project Nitro</td>
															<td class="d-none d-xl-table-cell">01/01/2021</td>
															<td class="d-none d-xl-table-cell">31/06/2021</td>
															<td><span class="badge bg-warning">In progress</span></td>
															<td class="d-none d-md-table-cell">Carl Jenkins</td>
														</tr>
														<tr>
															<td>Project Phoenix</td>
															<td class="d-none d-xl-table-cell">01/01/2021</td>
															<td class="d-none d-xl-table-cell">31/06/2021</td>
															<td><span class="badge bg-success">Done</span></td>
															<td class="d-none d-md-table-cell">Bertha Martin</td>
														</tr>
														<tr>
															<td>Project X</td>
															<td class="d-none d-xl-table-cell">01/01/2021</td>
															<td class="d-none d-xl-table-cell">31/06/2021</td>
															<td><span class="badge bg-success">Done</span></td>
															<td class="d-none d-md-table-cell">Stacie Hall</td>
														</tr>
														<tr>
															<td>Project Romeo</td>
															<td class="d-none d-xl-table-cell">01/01/2021</td>
															<td class="d-none d-xl-table-cell">31/06/2021</td>
															<td><span class="badge bg-success">Done</span></td>
															<td class="d-none d-md-table-cell">Ashley Briggs</td>
														</tr>
														<tr>
															<td>Project Wombat</td>
															<td class="d-none d-xl-table-cell">01/01/2021</td>
															<td class="d-none d-xl-table-cell">31/06/2021</td>
															<td><span class="badge bg-warning">In progress</span></td>
															<td class="d-none d-md-table-cell">Bertha Martin</td>
														</tr>
														<tr>
															<td>Project Zircon</td>
															<td class="d-none d-xl-table-cell">01/01/2021</td>
															<td class="d-none d-xl-table-cell">31/06/2021</td>
															<td><span class="badge bg-danger">Cancelled</span></td>
															<td class="d-none d-md-table-cell">Stacie Hall</td>
														</tr>
													</tbody>
												</table>
											</div>

						</div>

						<div class="col-xl-6 col-xxl-5 d-flex">
										<div class="w-100">
											<div class="row">
												<div class="col-sm-6">
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col mt-0">
																	<h5 class="card-title">Sales Today</h5>
																</div>

																<div class="col-auto">
																	<div class="avatar">
																		<div class="avatar-title rounded-circle bg-primary-dark">
																			<i class="align-middle" data-feather="truck"></i>
																		</div>
																	</div>
																</div>
															</div>
															<h1 class="display-5 mt-1 mb-3">2.562</h1>
															<div class="mb-0">
																<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.65% </span>
																Less sales than usual
															</div>
														</div>
													</div>
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col mt-0">
																	<h5 class="card-title">Visitors Today</h5>
																</div>

																<div class="col-auto">
																	<div class="avatar">
																		<div class="avatar-title rounded-circle bg-primary-dark">
																			<i class="align-middle" data-feather="users"></i>
																		</div>
																	</div>
																</div>
															</div>
															<h1 class="display-5 mt-1 mb-3">17.212</h1>
															<div class="mb-0">
																<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.50% </span>
																More visitors than usual
															</div>
														</div>
													</div>
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col mt-0">
																	<h5 class="card-title">Visitors Today</h5>
																</div>

																<div class="col-auto">
																	<div class="avatar">
																		<div class="avatar-title rounded-circle bg-primary-dark">
																			<i class="align-middle" data-feather="users"></i>
																		</div>
																	</div>
																</div>
															</div>
															<h1 class="display-5 mt-1 mb-3">17.212</h1>
															<div class="mb-0">
																<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.50% </span>
																More visitors than usual
															</div>
														</div>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col mt-0">
																	<h5 class="card-title">Total Earnings</h5>
																</div>

																<div class="col-auto">
																	<div class="avatar">
																		<div class="avatar-title rounded-circle bg-primary-dark">
																			<i class="align-middle" data-feather="dollar-sign"></i>
																		</div>
																	</div>
																</div>
															</div>
															<h1 class="display-5 mt-1 mb-3">$24.300</h1>
															<div class="mb-0">
																<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 8.35% </span>
																More earnings than usual
															</div>
														</div>
													</div>
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col mt-0">
																	<h5 class="card-title">Pending Orders</h5>
																</div>

																<div class="col-auto">
																	<div class="avatar">
																		<div class="avatar-title rounded-circle bg-primary-dark">
																			<i class="align-middle" data-feather="shopping-cart"></i>
																		</div>
																	</div>
																</div>
															</div>
															<h1 class="display-5 mt-1 mb-3">43</h1>
															<div class="mb-0">
																<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -4.25% </span>
																Less orders than usual
															</div>
														</div>
													</div>
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col mt-0">
																	<h5 class="card-title">Pending Orders</h5>
																</div>

																<div class="col-auto">
																	<div class="avatar">
																		<div class="avatar-title rounded-circle bg-primary-dark">
																			<i class="align-middle" data-feather="shopping-cart"></i>
																		</div>
																	</div>
																</div>
															</div>
															<h1 class="display-5 mt-1 mb-3">43</h1>
															<div class="mb-0">
																<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -4.25% </span>
																Less orders than usual
															</div>
														</div>
													</div>
												</div>
												
											</div>
										</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">


						<div class="card flex-fill w-100">
											<div class="card-header">
												<div class="card-actions float-end">
													<a href="#" class="me-1">
														<i class="align-middle" data-feather="refresh-cw"></i>
													</a>
													<div class="d-inline-block dropdown show">
														<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
															<i class="align-middle" data-feather="more-vertical"></i>
														</a>

														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
														</div>
													</div>
												</div>
												<h5 class="card-title mb-0">Browser Usage</h5>
											</div>
											<div class="card-body d-flex">
												<div class="align-self-center w-100">
													<div class="py-3">
														<div class="chart chart-xs">
															<canvas id="chartjs-dashboard-pie"></canvas>
														</div>
													</div>

													<table class="table mb-0">
														<tbody>
															<tr>
																<td><i class="fas fa-circle text-primary fa-fw"></i> Chrome</td>
																<td class="text-end">4401</td>
															</tr>
															<tr>
																<td><i class="fas fa-circle text-warning fa-fw"></i> Firefox</td>
																<td class="text-end">4003</td>
															</tr>
															<tr>
																<td><i class="fas fa-circle text-danger fa-fw"></i> IE</td>
																<td class="text-end">1589</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
							</div>




						</div>
						<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
									<div class="card flex-fill w-100">
															<div class="card-header">
																<div class="card-actions float-end">
																	<a href="#" class="me-1">
																		<i class="align-middle" data-feather="refresh-cw"></i>
																	</a>
																	<div class="d-inline-block dropdown show">
																		<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
																			<i class="align-middle" data-feather="more-vertical"></i>
																		</a>

																		<div class="dropdown-menu dropdown-menu-end">
																			<a class="dropdown-item" href="#">Action</a>
																			<a class="dropdown-item" href="#">Another action</a>
																			<a class="dropdown-item" href="#">Something else here</a>
																		</div>
																	</div>
																</div>
																<h5 class="card-title mb-0">Monthly Sales</h5>
															</div>
															<div class="card-body d-flex w-100">
																<div class="align-self-center chart chart-lg">
																	<canvas id="chartjs-dashboard-bar"></canvas>
																</div>
															</div>
														</div>







									</div>


									
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">


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
		document.addEventListener("DOMContentLoaded", function() {
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: 'line',
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
							label: "Orders",
							fill: true,
							backgroundColor: window.theme.primary,
							borderColor: window.theme.primary,
							borderWidth: 2,
							data: [3, 2, 3, 5, 6, 5, 4, 6, 9, 10, 8, 9]
						},
						{
							label: "Sales ($)",
							fill: true,
							backgroundColor: "rgba(0, 0, 0, 0.05)",
							borderColor: "rgba(0, 0, 0, 0.05)",
							borderWidth: 2,
							data: [5, 4, 10, 15, 16, 12, 10, 13, 20, 22, 18, 20]
						}
					]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					elements: {
						point: {
							radius: 0
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 5
							},
							display: true,
							gridLines: {
								color: "rgba(0,0,0,0)",
								fontColor: "#fff"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: 'pie',
				data: {
					labels: ["Chrome", "Firefox", "IE", "Other"],
					datasets: [{
						data: [4401, 4003, 1589],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger,
							"#E8EAED"
						],
						borderColor: "transparent"
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: 'bar',
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var map = new jsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				selectedRegions: [
					'US',
					'SA',
					'DE',
					'FR',
					'CN',
					'AU',
					'BR',
					'IN',
					'GB'
				],
				regionStyle: {
					initial: {
						fill: '#e4e4e4',
						"fill-opacity": 0.9,
						stroke: 'none',
						"stroke-width": 0,
						"stroke-opacity": 0
					},
					selected: {
						fill: window.theme.primary,
					}
				},
				zoomOnScroll: false
			});
			window.addEventListener("resize", () => {
				map.updateSize();
			});
			setTimeout(function() {
				map.updateSize();
			}, 250);
		});
	</script>
	<script>
		$(function() {
			$('#datatables-dashboard-projects').DataTable({
				pageLength: 6,
				lengthChange: false,
				bFilter: false,
				autoWidth: false
			});
		});
	</script>
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