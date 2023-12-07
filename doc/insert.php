action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="POST" enctype="multipart/form-data" >

if ($_SERVER['REQUEST_METHOD'] == 'POST') :

        $grade_name     = $_POST['grade_name'];
        $grade_point    = $_POST['grade_point'];
        $percent_from   = $_POST['percent_from'];
        $percent_to     = $_POST['percent_to'];
        $comment        = $_POST['comment'];
        $sql = "INSERT INTO `exam_grade` (`grade_name`,`grade_point`,`percent_from`,`percent_to`,`comment`) 
                            VALUES ('$grade_name','$grade_point','$percent_from','$percent_to','$comment')";
        $res = mysqli_query($connect, $sql);

        if ($res) :
            if ($lang == 'ar') {
                $alter_massage = "تم العملية بنجاح";
            } else {
                $alter_massage =  "The operation was completed successfully";
            }
        endif;
endif;

name="ssssss"

<?php if ($alter_massage) : ?>
    <div class="floating-alter">
        <div class=" alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $alter_massage; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
<?php  endif; ?>



<?php
    if (! empty($displayMessage["status"])) {
        if ($displayMessage["status"] == "error") {
?>
                        <div class="server-response error-msg"><?php echo $displayMessage["message"]; ?></div>
<?php
        } else if ($displayMessage["status"] == "success") {
?>
                        <div class="server-response success-msg"><?php echo $displayMessage["message"]; ?></div>
<?php
        }
    }
?>