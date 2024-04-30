<!-- pagination.php -->



<div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">






            <a  class="btn btn-primary tm-btn-prev mb-2 <?php if($page_no <= 1){ echo 'disabled'; } ?>">Previous</a>

                <div class="tm-paging d-flex">

                    <?php if (isset($_GET['theme']) && $_GET['theme']!=""){$catagory= "?theme=".$_GET['theme']."&";}else {$catagory="?";}

                                            if ($total_no_of_pages <= 10){  	 
                                                for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
                                                    if ($counter == $page_no) {
                                                echo "<a class='active  tm-paging-link'>$counter</a>";	
                                                        }else{
                                                echo "<a class=' tm-paging-link' >$counter</a>";
                                                        }
                                                }
                                            }
                                            elseif($total_no_of_pages > 10){
                                                
                                            if($page_no <= 4) {			
                                            for ($counter = 1; $counter < 8; $counter++){		 
                                                    if ($counter == $page_no) {
                                                        echo "<a class='active  tm-paging-link'>$counter</a>";	
                                                    }else{
                                                         echo "<a class=' tm-paging-link'>$counter</a>";
                                                    }
                                                }
                                                echo "<a  class='tm-paging-link'>...</a>";
                                                echo "<a class='tm-paging-link'>$second_last</a>";
                                                echo "<a class='tm-paging-link'>$total_no_of_pages</a>";
                                                }

                                            elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
                                                echo "<a  class='tm-paging-link'>1</a>";
                                                echo "<a  class='tm-paging-link' >2</a>";
                                                echo "<a class='tm-paging-link'>...</a>";
                                                for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
                                                if ($counter == $page_no) {
                                                echo "<a class='active tm-paging-link'>$counter</a>";	
                                                        }else{
                                                echo "<a  class='tm-paging-link'>$counter</a>";
                                                        }                  
                                            }
                                            echo "<a  class='tm-paging-link'>...</a>";
                                            echo "<a class='tm-paging-link'>$second_last</a>";
                                            echo "<a class='tm-paging-link'>$total_no_of_pages</a>";      
                                                    }
                                                
                                                else {
                                                echo "<a class='tm-paging-link'>1</a>";
                                                echo "<a class='tm-paging-link' >2</a>";
                                                echo "<a class='tm-paging-link'>...</a>";

                                                for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
                                                if ($counter == $page_no) {
                                                echo "<a class='active tm-paging-link'>$counter</a>";	
                                                        }else{
                                                echo "<a class='tm-paging-link'>$counter</a>";
                                                        }                   
                                                        }
                                                    }
                                            }
                                        ?>


                </div>
            
            <a  class="btn btn-primary tm-btn-next?>">Next Page</a>
            </div>            
        </div>
