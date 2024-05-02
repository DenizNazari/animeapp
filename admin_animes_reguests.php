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



					<script>
							function showUser(str) {
							if (str == "") {
								document.getElementById("txtHint").innerHTML = "";
								return;
							} else {
								var xmlhttp = new XMLHttpRequest();
								xmlhttp.onreadystatechange = function() {
								if (this.readyState == 4 && this.status == 200) {
									document.getElementById("txtHint").innerHTML = this.responseText;
								}
								};
								xmlhttp.open("GET","admin_serch_place.php?q="+str,true);
								xmlhttp.send();
							}
							}
							</script>





					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">

							<form>
									<select name="users"  onchange="showUser(this.value)">
										<option   value="1">ALL</option>
										<option  value="2"> REGUESTS</option>
										<option  value="3">ADDED</option>
									</select>
							</form>


							<div class="container physicianList">
									<input type='hidden' id='current_page' />
									<input type='hidden' id='show_per_page' />
								<div class="row "  id="txtHint">
													<?php $_GET["q"]=1; include("admin_serch_place.php") ?>

								</div>
							</div>
                        <div class="row tm-mb-90">
								<div role="group" aria-label="Third group" id="page_navigation" class="btn-group col-12 d-flex justify-content-between align-items-center tm-paging-col"> </div>
				    	</div>  









								<script>

var target = document.querySelector('#txtHint');

// Options for the observer (which mutations to observe)
var config = { childList: true };

// Callback function to execute when mutations are observed
var callback = function(mutationsList, observer) {
    for(var mutation of mutationsList) {
        if (mutation.type === 'childList') {
            // Content has changed, call the function
            go_to_page(0);
        }
    }
};

// Create an observer instance linked to the callback function
var observer = new MutationObserver(callback);

// Start observing the target node for configured mutations
observer.observe(target, config);


													jQuery(document).ready(function () {

													//Pagination JS
													//how much items per page to show
													var show_per_page = 4; 
													//getting the amount of elements inside pagingBox div
													var number_of_items = $('#txtHint').children().length;
													//calculate the number of pages we are going to have
													var number_of_pages = Math.ceil(number_of_items/show_per_page);

													//set the value of our hidden input fields
													$('#current_page').val(0);
													$('#show_per_page').val(show_per_page);

	
													var navigation_html = '<div class="btn-group" role="group" > <a class="btn btn-secondary previous_link   btn-sm tm-btn-prev mb-2 " href="javascript:previous();">Prev</a></div><div class="tm-paging d-flex">';
													var current_link = 0;
													while(number_of_pages > current_link){
														navigation_html += '<a class="btn btn-secondary page_link active tm-paging-link" href="javascript:go_to_page(' + current_link +')" longdesc="' + current_link +'">'+ (current_link + 1) +'</a>';
														current_link++;
													}
													navigation_html += '  </div><div class="btn-group" role="group" ><a class="next_link btn-secondary btn  btn-sm tm-btn-next" href="javascript:next();">Next</a></div>';

													$('#page_navigation').html(navigation_html);

													//add active_page class to the first page link
													$('#page_navigation .page_link:first').addClass('active_page');

													//hide all the elements inside pagingBox div
													$('#txtHint').children().css('display', 'none');

													//and show the first n (show_per_page) elements
													$('#txtHint').children().slice(0, show_per_page).css('display', 'block');

													});

													

													function previous(){

													new_page = parseInt($('#current_page').val()) - 1;
													//if there is an item before the current active link run the function
													if($('.active_page').prev('.page_link').length==true){
													go_to_page(new_page);
													}

													}

													function next(){
													new_page = parseInt($('#current_page').val()) + 1;
													//if there is an item after the current active link run the function
													if($('.active_page').next('.page_link').length==true){
													go_to_page(new_page);
													}

													}
													function go_to_page(page_num){
													//get the number of items shown per page
													var show_per_page = parseInt($('#show_per_page').val());

													//get the element number where to start the slice from
													start_from = page_num * show_per_page;

													//get the element number where to end the slice
													end_on = start_from + show_per_page;

													$('#txtHint').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');

													$('.page_link[longdesc=' + page_num +']').addClass('active_page').siblings('.active_page').removeClass('active_page');

													//update the current page input field
													$('#current_page').val(page_num);
													}
								</script> 



									</h5>
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