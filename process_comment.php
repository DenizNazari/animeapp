<?php
if (isset($_POST['comment'])) {
    $comment = $_POST['comment'];
    ?>
                            <div class="d-flex justify-content-center py-2">
                            <div class="second py-2 px-2"> <span class="text1"><?php echo $comment?></span>
                                <div class="d-flex justify-content-between py-1 pt-2">
                                    <div><img src="https://i.imgur.com/tPvlEdq.jpg" width="18"><span class="text2">Curtis</span></div>
                                    <div><span class="text3">Upvote?</span><span class="thumbup"><i class="fa fa-thumbs-o-up"></i></span><span class="text4">3</span></div>
                                </div>
                            </div>
                        </div>
    <?php
} else {
    echo "Error: Comment not received";
}
?>
