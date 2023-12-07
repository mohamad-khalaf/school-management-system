<?php
ob_start();
session_start();  
if (isset($_SESSION['user_username']) ) :
    if ($_SESSION['user_group_id'] == '1' )  :

    include('config.php');
    include('lang.php');
    $home_page    = 'HOME';
    $current_page = 'ADD_PARENTS';
    $parent_page  = 'PARENTS';
    $alter_massage = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') :


        $name           = $_POST['name'];
        $gender         = $_POST['gender'];
        $occupation     = $_POST['occupation'];
        $id_number      = $_POST['id_number'];
        $blood_type     = $_POST['blood_type'];
        $religion       = $_POST['religion'];
        $email          = $_POST['email'];
        $address        = $_POST['address'];
        $phone          = $_POST['phone'];
        $short_bio      = $_POST['short_bio'];



        $sql = "INSERT INTO `parents` (`name`, `gender`, `occupation`, `id_number`, `blood_type`, `religion`, `email`, `address`, `phone`, `short_bio`)
                              VALUES  ('$name','$gender','$occupation','$id_number','$blood_type','$religion','$email','$address','$phone','$short_bio');";


        if (mysqli_query($connect, $sql) ) :
                $alter_massage =  "successfully registered";
        else :
            $alter_massage =  "Failed to register " . "<br>" . mysqli_error($connect);
        endif;
    
        mysqli_close($connect);

    endif;      
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
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3> <?php echo lang('ADD_NEW_PARENT'); ?> </h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-times text-orange-red"></i>
                                        <?php echo lang('CLOSE'); ?>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs text-dark-pastel-green"></i>
                                        <?php echo lang('EDIT'); ?>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-redo-alt text-orange-peel"></i>
                                        <?php echo lang('REFRESH'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="POST">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('NAME'); ?>  *</label>
                                    <input type="text" placeholder="" class="form-control" name="name">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('GENDER'); ?>  *</label>
                                    <select class="select2" name="gender">
                                    <option value="0">Please Select Gender *</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('OCCUPATION'); ?> </label>
                                    <input type="text" placeholder="" class="form-control" name="occupation">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('ID_NUMBER'); ?> </label>
                                    <input type="text" placeholder="" class="form-control" name="id_number">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('BLOOD_GROUP'); ?>  *</label>
                                    <select class="select2" name="blood_type">
                                    <option value="0">Please Select Group *</option>
                                    <option value="a+">A+</option>
                                    <option value="a-">A-</option>
                                    <option value="b+">B+</option>
                                    <option value="b-">B-</option>
                                    <option value="o+">O+</option>
                                    <option value="o-">O-</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('RELIGION'); ?>  *</label>
                                    <select class="select2" name="religion">
                                        <option value="">Please Select Religion *</option>
                                        <option value="1">Islam</option>
                                        <option value="2">Hindu</option>
                                        <option value="3">Christian</option>
                                        <option value="3">Buddish</option>
                                        <option value="3">Others</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('EMAIL'); ?> </label>
                                    <input type="email" placeholder="" class="form-control" name="email">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('ADDRESS'); ?> </label>
                                    <input type="text" placeholder="" class="form-control" name="address">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('PHONE'); ?> </label>
                                    <input type="text" placeholder="" class="form-control" name="phone">
                                </div>
                                <div class="col-md-6 d-none d-xl-block">
                                    
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('SHORT_BIO'); ?> </label>
                                    <textarea class="textarea form-control" id="form-message" cols="10" rows="9" name="short_bio"></textarea>
                                </div>
                                <!-- <div class="col-lg-6 col-12 form-group mg-t-30">
                                    <label class="text-dark-medium"> <?php // echo lang('IMG-150'); ?> </label>
                                    <input type="file" class="form-control-file">
                                </div> -->
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark"> <?php echo lang('SAVE'); ?> </button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow"> <?php echo lang('RESET'); ?> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Add New Teacher Area End Here -->
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
    elseif ($_SESSION['user_group_id'] == '3' ) :
        header('Location: index4.php'); 
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