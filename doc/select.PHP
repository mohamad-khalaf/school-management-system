
<?php
    $sql = "SELECT * FROM `students`";
    $res =  mysqli_query($connect, $sql);
    if ($res) {
        $count = mysqli_num_rows($res);
        if ($count > 0 ) :
            while ($row = mysqli_fetch_array($res)) :
                
            endwhile;
            else : 
                if ($lang == "ar") :
                    $alter_massage = "لايوجد بيانات لعرضها ";
                else: 
                    $alter_massage = "There is no data to display";
                endif;
        endif;
        // Free result set
        mysqli_free_result($res);
    } else {
        if ($lang == "ar") :
            $alter_massage = "فشل الاستعلام ";
        else: 
            $alter_massage = "Query failed";
        endif;
    }
    mysqli_close($connect);
?>







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

































































// rigerstr the student as user 
$password = sha1('123123');
$sql2 =" INSERT INTO `users` (`id`,`full_name`, `username`, `password`, `group_id`)
                        VALUES (NULL, '$ar_full_name', '$num_id_student', '$password', 4)";

if (mysqli_query($connect, $sql2)) :
    if ($lang == 'ar') {
        echo "تم تسجيل رقم الطالب  ك اسم  مستخدم جديد";
    } else {
        echo "The student number has been registered as a new username";
    }
else : echo "Error: " . $sql . "<br>" . mysqli_error($conn);
endif;

if ($img['error'] == 0) :
    move_uploaded_file($img['tmp_name'],  __DIR__ . "\\assets\\img\\student-img\\" . $img['name'] );
    if ($lang == 'ar') {
        echo "تم تحميل الصرو في نجاح";
    } else {
        echo "Image uploaded successfully";
    }
else :
    if ($lang == 'ar') {
        echo "فشل في تحميل الصورة ";
    } else {
        echo "Failed to load the image";
    }
endif;

enctype="multipart/form-data"



<?php 
    $sql = "SELECT * FROM `classes`";
    $res = mysqli_query($connect, $sql);
    $count = mysqli_num_rows($res);
    if ($count > 0) :
        while ($row = mysqli_fetch_array($res)) :
    ?>
            <tr>
                <td>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label"> <?php echo $row['id']; ?> </label>
                    </div>
                </td>
                <td class="text-center"><img src="img/figure/student3.png" alt="student"></td>
                <td> <?php echo $row['teacher_name']; ?>   </td>
                <td> <?php echo $row['gender']; ?>  </td>
                <td> <?php echo $row['class']; ?>   </td>
                <td> <?php echo $row['subject']; ?> </td>
                <td> <?php echo $row['date']; ?>    </td>
                <td> <?php echo $row['time']; ?>    </td>
                <td> <?php echo $row['phone']; ?>   </td>
                <td> <?php echo $row['email']; ?>   </td>
                <td>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <span class="flaticon-more-button-of-three-dots"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                        </div>
                    </div>
                </td>
            </tr>
    <?php
        endwhile;
        
    else :

        if ($lang == 'en') :
            $alter_massage = "There is currently no data to display"; 
        else :
            $alter_massage = "لايوجد بيانات حاليا لعرضها "; 
        endif;

    endif;    
    ?>         