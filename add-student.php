<?php
ob_start();
session_start();  
if (isset($_SESSION['user_username']) ) :
    if ($_SESSION['user_group_id'] == '1' )  :

        include('config.php');
        include('lang.php');
        $home_page    = 'HOME';
        $current_page = 'ADD_STUDENT';
        $parent_page  = 'STUDENTS';
        $alter_massage = '';


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ar_name            = $_POST['ar_name'];
            $en_name            = $_POST['en_name'];
            $gender             = $_POST['gender'];
            $birthday           = $_POST['birthday'];
            $place_birthday     = $_POST['place_birthday'];
            $blood              = $_POST['blood'];
            $email              = $_POST['email'];
            $id_number          = $_POST['id_number'];
            $id_academy         = $_POST['id_academy'];
            $phone              = $_POST['phone'];
            $class              = $_POST['class'];
            $season             = $_POST['season'];
            $prev_school        = $_POST['prev_school'];
            $join_date          = $_POST['join_date'];
            $address            = $_POST['address'];
            $parent_name        = $_POST['parent_name'];
            $parent_id_number   = $_POST['parent_id_number'];
            $parent_phone       = $_POST['parent_phone'];
            $mother_name        = $_POST['mother_name'];
            $bio                = $_POST['bio'];
            // $img            = $_FILES['img-student'];
            // $img_name       = $_FILES['img-student']['name'];
            // print_r($img);

            $sql =" INSERT INTO `students` (`id`, `ar_name`,    `en_name`, `gender`,     `birthday`, `place_birthday`, `blood`, `email`,     `id_number`, `id_academy`, `phone`, `class`,    `season`, `prev_school`, `join_date`, `address`, `parent_name`, `parent_id_number`, `parent_phone`, `mother_name`, `bio`) 
                                    VALUES (NULL, '$ar_name', '$en_name', '$gender', '$birthday', '$place_birthday', '$blood', '$email', '$id_number', '$id_academy', '$phone', '$class', '$season', '$prev_school', '$join_date', '$address', '$parent_name', '$parent_id_number', '$parent_phone', '$mother_name', '$bio');";
            
            if (mysqli_query($connect, $sql)) :
                if ($lang == 'ar') {
                    $alter_massage =  "تم تسجيل الطالب بنجاح ";
                } else {
                    $alter_massage = "New record created successfully";
                }
            else : $alter_massage = "Error: " . $sql . "<br>" . mysqli_error($connect);
            endif;

        }

?>

<!doctype html>
<html class="no-js" lang="<?php echo $lang; ?>" dir="<?php echo $dir?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo lang($current_page); ?> | <?php echo lang('SITE_NAME');?> </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="css/datepicker.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Custom RTL CSS -->
    <?php if ($dir == "rtl") echo '<link rel="stylesheet" href="style.rtl.css">'; ?>
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>

<body>
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
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
        <?php include('layout/header.php') ?> 
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <?php include('layout/sidebar.php'); ?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <?php include('layout/breadcrumbs-area.php'); ?>
                <!-- Breadcubs Area End Here -->
                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3> <?php echo lang('ADD_NEW_STUDENT');?> </h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="true">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"> <i class="fas fa-times text-orange-red">       </i> <?php echo lang('CLOSE');?>   </a>
                                    <a class="dropdown-item" href="#"> <i class="fas fa-cogs text-dark-pastel-green"> </i> <?php echo lang('EDIT');?>    </a>
                                    <a class="dropdown-item" href="#"> <i class="fas fa-redo-alt text-orange-peel">   </i> <?php echo lang('REFRESH');?> </a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" method="POST" action="<?php ECHO $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('FULL_AR_NAME') ?> *</label>
                                    <input name="ar_name" type="text" placeholder="" class="form-control" dir="auto">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('EN_FULL_NAME') ?> </label>
                                    <input name="en_name" type="text" placeholder="" class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('SELECT_GENDER') ?> *</label>
                                    <select name="gender" class="select2">
                                        <option value="0">Please Select Gender *</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('DATE_OF_BIRTH') ?> *</label>
                                    <input name="birthday" type="text" placeholder="dd/mm/yyyy" data-date-format="yyyy-mm-dd" class="form-control air-datepicker" data-position='bottom right'>
                                    <i class="far fa-calendar-alt"></i>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('PLACE_OF_BIRTH'); ?> </label>
                                    <input name="place_birthday" type="text" placeholder="" class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('BLOOD_GROUP') ?>  *</label>
                                    <select name="blood" class="select2">
                                        <option value="0" selected >unknown</option>
                                        <option value="a+">A+</option>
                                        <option value="a-">A-</option>
                                        <option value="b+">B+</option>
                                        <option value="b-">B-</option>
                                        <option value="o+">O+</option>
                                        <option value="o-">O-</option>
                                    </select>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('STUDENT_EMAIL') ?> </label>
                                    <input name="email" type="email" placeholder="" class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('STUDENT_ID_NUMBER') ?> </label>
                                    <input name="id_number" type="number" placeholder="" class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('ID_ACADEMY') ?> </label>
                                    <input name="id_academy"  type="number" placeholder="" class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('PHONE') ?> </label>
                                    <input name="phone" type="number" placeholder="" class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('CLASS'); ?> *</label>
                                    <select name="class" class="select2">
                                        <option value="1">Play</option>
                                        <option value="2">Nursery</option>
                                        <option value="3">One</option>
                                        <option value="3">Two</option>
                                        <option value="3">Three</option>
                                        <option value="3">Four</option>
                                        <option value="3">Five</option>
                                    </select>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('SEASON');?> *</label>
                                    <select name="season" class="select2">
                                        <option value="1">Pink</option>
                                        <option value="2">Blue</option>
                                        <option value="3">Bird</option>
                                        <option value="3">Rose</option>
                                        <option value="3">Red</option>
                                    </select>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('PREV_SCHOOL') ?> </label>
                                    <input name="prev_school" type="text" placeholder="" class="form-control">
                                </div>                                

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label><?php echo lang('JOINING_DATE');?>*</label>
                                    <input name="join_date" type="text" placeholder="yyy-mm-dd" data-date-format="yyyy-mm-dd" class="form-control air-datepicker" data-position='bottom right'>
                                    <i class="far fa-calendar-alt"></i>
                                </div>


                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('ADDRESS') ?> </label>
                                    <input name="address" type="text" placeholder="" class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('PARENT_NAME') ?> </label>
                                    <input name="parent_name" type="text" placeholder="" class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('PATENT_NUM_ID') ?> </label>
                                    <input name="parent_id_number" type="number" placeholder="" class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('PATENT_NUM_PHONE') ?> </label>
                                    <input name="parent_phone" type="number" placeholder="" class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('MOTHER_NAME') ?> </label>
                                    <input name="mother_name" type="text" placeholder="" class="form-control">
                                </div>

                                <div class="col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('SHORT_BIO'); ?> </label>
                                    <textarea name="bio" class="textarea form-control" name="message" id="form-message" cols="10"
                                        rows="9"></textarea>
                                </div>

                                <!-- <div class="col-lg-6 col-12 form-group mg-t-30">
                                    <label class="text-dark-medium"> <?php //echo lang('IMG-150') ?> </label>
                                    <input name="img-student" type="file" class="form-control-file">
                                </div> -->

                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark"> <?php echo lang('SAVE') ?> </button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow"> <?php echo lang('RESET') ?> </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <!-- Admit Form Area End Here -->
                <?php include('layout/footer.php'); ?>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Select 2 Js -->
    <script src="js/select2.min.js"></script>
    <!-- Date Picker Js -->
    <script src="js/datepicker.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>

</html>

<?php
    elseif ($_SESSION['user_group_id'] == '2' )  :
        header('Location: index5.php'); 
        exit();
    elseif ($_SESSION['user_group_id'] == '1' )  :
        header('Location: index.php'); 
        exit();
    elseif ($_SESSION['user_group_id'] == '4' )  :
        header('Location: index3.php'); 
        exit();
    else :
        header('Location: login.php'); 
        exit();
    endif;
    exit();
    
else :
    header('Location: login.php'); 
    exit();
endif;
ob_end_flush();
?>