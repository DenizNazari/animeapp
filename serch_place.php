
<?php

include('baglan.php');
if (isset($_GET['query'])) {
    $search_query = mysqli_real_escape_string($conn, $_GET['search']);
    $result = mysqli_query($conn, "SELECT * FROM animes WHERE anime_name LIKE '%$search_query%'");

} else {
    
}

?>

<div class="container physicianList">

<input type='hidden' id='current_page' />
<input type='hidden' id='show_per_page' />


        <div class="row" id="pagingBox">

        <?php
if (isset($_GET['search']) && $_GET['search']!="")
 {
    
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }
	$total_records_per_page = 20;
    $offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "2"; 
    $search_query = mysqli_real_escape_string($conn, $_GET['search']);
    $result_count = mysqli_query($conn, "SELECT COUNT(*) As total_records FROM animes WHERE name LIKE '%$search_query%'");
    $total_records = mysqli_fetch_array($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $search_query = mysqli_real_escape_string($conn, $_GET['search']);
    $result = mysqli_query($conn, "SELECT * FROM animes WHERE name LIKE '%$search_query%'");


}
else{
if (isset($_GET['theme']) && $_GET['theme']!=""&& $_GET['theme']!="all")
{
    $catagory= "  WHERE theme='".$_GET['theme']."' OR gener='".$_GET['theme']."' ";
}
else{
$catagory=" ";
    }
       

if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }
	$total_records_per_page = 20;
    $offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "2"; 

	$result_count = mysqli_query($conn,"SELECT DISTINCT COUNT( *) As total_records FROM animes   LEFT JOIN genres ON animes.animecode = genres.animeid   LEFT JOIN themes ON animes.animecode = themes.animeid ".$catagory." GROUP BY animes.animecode");
	$result_count = mysqli_query($conn, "SELECT COUNT(DISTINCT animes.animecode) AS total_records FROM animes LEFT JOIN genres ON animes.animecode = genres.animeid LEFT JOIN themes ON animes.animecode = themes.animeid " . $catagory);

    $total_records = mysqli_fetch_array($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1
    $result = mysqli_query($conn, "SELECT DISTINCT animes.*, genres.*, themes.* FROM animes LEFT JOIN genres ON animes.animecode = genres.animeid LEFT JOIN themes ON animes.animecode = themes.animeid " . $catagory ." GROUP BY animes.animecode");
    $result = mysqli_query($conn, "SELECT DISTINCT animes.*, genres.*, themes.* FROM animes LEFT JOIN genres ON animes.animecode = genres.animeid LEFT JOIN themes ON animes.animecode = themes.animeid " . $catagory . " GROUP BY animes.animecode ");

        }
    while($row = mysqli_fetch_array($result)){
?>

<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
    <figure class="effect-ming tm-video-item">
        <img class="scale-image" src="anime\<?php echo $row['imgnames']?>.jpg" alt="Image" class="img-fluid">
        <figcaption class="d-flex align-items-center justify-content-center">
            <h2><?php echo $row['name']?></h2>
            <a href="photo-detail.php?animeid=<?php echo $row['animecode']?>">View more</a>
        </figcaption>                   
    </figure>
    <div class="d-flex justify-content-between tm-text-gray">
        <span class="tm-text-gray-light"><?php echo $row['adddate']?></span>
        <span>9,906 views</span>
    </div>
</div>  



              <?php
        }
    ?>
    </div>
    </div>



    <div class="row tm-mb-90">
<!-- Add the pagination HTML and JavaScript -->
<div id="page_navigation" class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
    <!-- Pagination links will be added dynamically using JavaScript -->
</div>
</div>  



<script>jQuery(document).ready(function () {

//Pagination JS
//how much items per page to show
var show_per_page = 12; 
//getting the amount of elements inside pagingBox div
var number_of_items = $('#pagingBox').children().length;
//calculate the number of pages we are going to have
var number_of_pages = Math.ceil(number_of_items/show_per_page);

//set the value of our hidden input fields
$('#current_page').val(0);
$('#show_per_page').val(show_per_page);

//now when we got all we need for the navigation let's make it '

/* 
what are we going to have in the navigation?
    - link to previous page
    - links to specific pages
    - link to next page
*/
var navigation_html = '<a class="previous_link  btn-primary tm-btn-prev mb-2 " href="javascript:previous();">Prev</a><div class="tm-paging d-flex">';
var current_link = 0;
while(number_of_pages > current_link){
    navigation_html += '<a class="page_link active tm-paging-link" href="javascript:go_to_page(' + current_link +')" longdesc="' + current_link +'">'+ (current_link + 1) +'</a>';
    current_link++;
}
navigation_html += '  </div><a class="next_link  btn btn-primary tm-btn-next" href="javascript:next();">Next</a>';

$('#page_navigation').html(navigation_html);

//add active_page class to the first page link
$('#page_navigation .page_link:first').addClass('active_page');

//hide all the elements inside pagingBox div
$('#pagingBox').children().css('display', 'none');

//and show the first n (show_per_page) elements
$('#pagingBox').children().slice(0, show_per_page).css('display', 'block');

});


//Pagination JS

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

$('#pagingBox').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');

$('.page_link[longdesc=' + page_num +']').addClass('active_page').siblings('.active_page').removeClass('active_page');

//update the current page input field
$('#current_page').val(page_num);
}</script>
