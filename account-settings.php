<?php
ob_start();
session_start();  
if (isset($_SESSION['user_username']) ):
    if ($_SESSION['user_group_id'] == '1' )  :

    include('config.php');
    include('lang.php');
    $home_page    = 'HOME';
    $current_page = 'SETTING';
    $parent_page  = 'ACCOUNT_SETTING';
    $alter_massage = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') :
        
        $username       = $_POST['username'];
        $password       = $_POST['password'];
        $sha_password   = sha1($password);
        $full_name      = $_POST['full_name'];
        $group_id       = $_POST['group_id'];
        $gender         = $_POST['gender'];
        $father_name    = $_POST['father_name'];
        $mother_name    = $_POST['mother_name'];
        $birthday       = $_POST['birthday'];
        $religon        = $_POST['religon'];
        $joing_date     = $_POST['joing_date'];
        $email          = $_POST['email'];
        $id_number      = $_POST['id_number'];
        $phone          = $_POST['phone'];
        $address        = $_POST['address'];
        
        $sql = "SELECT `username` FROM `users` WHERE `username` = '$username'";
        // on failure return false 
        $res = mysqli_query($connect, $sql); 
        $count = mysqli_num_rows($res);
        if (! $count > 0 ) {
        
            $sql = "INSERT INTO `users` (`username`, `password`, `full_name`, `group_id`, `gender`, `father_name`, `mother_name`, `birthday`, `religon`, `joing_date`, `email`, `id_number`, `phone`, `address`)
                                VALUES  ('$username','$sha_password','$full_name','$group_id','$gender','$father_name','$mother_name','$birthday','$religon','$joing_date','$email','$id_number','$phone', '$address');";
            
            if(mysqli_query($connect, $sql)) :
                $alter_massage =  "successfully registered";
            else :
                $alter_massage =  "Failed to register";
            endif;
        
        } else {
            $alter_massage =  "user is exist";
        }
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
                    <!-- Account Settings Area Start Here -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="heading-layout1">
                                        <div class="item-title">
                                            <h3> <?php echo lang('ADD_NEW_USER'); ?> </h3>
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
                                                <label> <?php echo lang('NAME');?> </label>
                                                <input type="text" placeholder="" class="form-control" name="full_name">
                                            </div>

                                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                <label> <?php echo lang('USERNAME');?> </label>
                                                <input type="text" placeholder="" class="form-control" name="username">
                                            </div>
                                            
                                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                <label> <?php echo lang('PASSWORD');?> </label>
                                                <input type="text" placeholder="" class="form-control" name="password">
                                            </div>

                                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                <label>  <?php echo lang('USER_TYPE');?>  </label>
                                                <select class="select2" name="group_id">
                                                    <option value="0">Please Select*</option>
                                                    <option value="1">ADMIN</option>
                                                    <option value="2">TEACHER</option>
                                                    <option value="3">PARENT</option>
                                                    <option value="4">STUDENT</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                <label>   <?php echo lang('GENDER');?> </label>
                                                <select name="gender" class="select2" name="gender">
                                                    <option value="0">Please Select Gender *</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="others">Others</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                <label>   <?php echo lang('FATHER_NAME');?>  </label>
                                                <input type="text" placeholder="" class="form-control" name="father_name" >
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                <label>   <?php echo lang('MOTHER_NAME');?>   </label>
                                                <input type="text" placeholder="" class="form-control" name="mother_name">
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                <label>   <?php echo lang('BIRTHDAY');?>  </label>
                                                <input type="text" placeholder="yyyy/mm/dd" data-date-format="yyyy/mm/dd" class="form-control air-datepicker" name="birthday"
                                                    data-position='bottom right'>
                                                <i class="far fa-calendar-alt"></i>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                <label>   <?php echo lang('RELIGION');?>  </label>
                                                <select class="select2" name="religon">
                                                    <option value="">Please Select *</option>
                                                    <option value="1">Islam</option>
                                                    <option value="2">Christian</option>
                                                    <option value="3">Hindu</option>
                                                    <option value="4">Buddhish</option>
                                                    <option value="5">Others</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                <label>   <?php echo lang('JOINING_DATE');?>   </label>
                                                <input type="text" placeholder="yyyy/mm/dd" data-date-format="yyyy/mm/dd"  class="form-control air-datepicker" name="joing_date"
                                                    data-position='bottom right'>
                                                <i class="far fa-calendar-alt"></i>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                <label>   <?php echo lang('EMAIL');?>   </label>
                                                <input type="email" placeholder="" class="form-control" name="email">
                                            </div>


                                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                <label>  <?php echo lang('ID_NUMBER');?>  </label>
                                                <input type="text" placeholder="" class="form-control" name="id_number">
                                            </div>                               
                                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                                <label>   <?php echo lang('PHONE');?> </label>
                                                <input type="text" placeholder="" class="form-control" name="phone">
                                            </div>
                                            <div class="col-lg-6 col-12 form-group">
                                                <label>  <?php echo lang('ADDRESS');?></label>
                                                <textarea class="textarea form-control" name="address" id="form-message" cols="10"
                                                    rows="4"></textarea>
                                            </div> 
                                            <div class="col-12 form-group mg-t-8">
                                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark"> <?php echo lang('SAVE') ?> </button>
                                                <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow"> <?php echo lang('SAVE') ?> </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-4-xxxl col-xl-5">
                            <div class="card account-settings-box height-auto">
                                <div class="card-body">
                                    <div class="heading-layout1 mg-b-20">
                                        <div class="item-title">
                                            <h3>  <?php echo lang('ALL_USER');?>  </h3>
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
                                    <div class="all-user-box">

                                    <?php 
                                        $sql = "SELECT * FROM `users`";
                                        $res = mysqli_query($connect, $sql);
                                        $count = mysqli_num_rows($res);
                                        if ($count > 0) :
                                            while ($row = mysqli_fetch_array($res)) :
                                        ?>

                                            <div class="media media-none--xs " id="<?php echo $row['id']?>">
                                                <div class="item-img">
                                                    <img src="img/figure/user1.jpg" class="media-img-auto" alt="user">
                                                </div>
                                                <div class="media-body space-md">
                                                    <h5 class="item-title"><?php  echo $row['full_name']; ?></h5>
                                                    <div class="item-subtitle">
                                                        <?php 
                                                            if ($row['group_id'] == 1) {
                                                                echo "admin";
                                                            } elseif ($row['group_id'] == 2) {
                                                                echo "Teacher";
                                                            } elseif ($row['group_id'] == 3) {
                                                                echo "parent";
                                                            } elseif ($row['group_id'] == 4) {
                                                                echo "student";
                                                            }  else {
                                                                echo "unknown";
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>

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


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-8-xxxl col-xl-7">
                            <div class="card account-settings-box">
                                <div class="card-body">
                                    <div class="heading-layout1 mg-b-20">
                                        <div class="item-title">
                                            <h3>   <?php echo lang('USER_DETAILS');?>  </h3>
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
                                    <div class="user-details-box">
                                        <div class="item-img">
                                            <img src="img/figure/user.jpg" alt="user">
                                        </div>
                                        <div class="item-content">
                                            <div class="info-table table-responsive">
                                                <table class="table text-nowrap">
                                                    <tbody>
                                                        <?php
                                                        $sql = "SELECT * FROM `users` ORDER BY `id` ASC LIMIT 1";
                                                        $res = mysqli_query($connect, $sql);
                                                        $count = mysqli_num_rows($res);
                                                        if ($count > 0 ) : 
                                                            $row = mysqli_fetch_array($res);
                                                        ?>
                                                        <tr>
                                                            <td> <?php echo lang('NAME');?>  </td>
                                                            <td class="font-medium text-dark-medium full_name-js"> <?php echo $row['full_name'] ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td> <?php echo lang('USER_TYPE');?>  </td>
                                                            <td class="font-medium text-dark-medium group_id-js">
                                                                <?php 
                                                                    if ($row['group_id'] == 1) {
                                                                        echo "admin";
                                                                    } elseif ($row['group_id'] == 2) {
                                                                        echo "Teacher";
                                                                    } elseif ($row['group_id'] == 3) {
                                                                        echo "parent";
                                                                    } elseif ($row['group_id'] == 4) {
                                                                        echo "student";
                                                                    }  else {
                                                                        echo "unknown";
                                                                    };
                                                                ?>  
                                                            
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> <?php echo lang('GENDER');?>  </td>
                                                            <td class="font-medium text-dark-medium gender-js"><?php echo $row['gender'] ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td> <?php echo lang('BIRTHDAY');?>  </td>
                                                            <td class="font-medium text-dark-medium birthday-js"><?php echo $row['birthday'] ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td> <?php echo lang('FATHER_NAME');?>  </td>
                                                            <td class="font-medium text-dark-medium father_name-js"><?php echo $row['full_name'] ?> </td>
                                                        </tr>

                                                        <tr>
                                                            <td> <?php echo lang('RELIGION');?>  :</td>
                                                            <td class="font-medium text-dark-medium religion-js"><?php echo $row['religon'] ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td> <?php echo lang('JOINING_DATE');?>  </td>
                                                            <td class="font-medium text-dark-medium joing_date-js"><?php echo $row['joing_date'] ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td> <?php echo lang('EMAIL');?>  </td>
                                                            <td class="font-medium text-dark-medium email-js"><?php echo $row['email'] ?> </td>
                                                        </tr>

                                                        <tr>
                                                            <td> <?php echo lang('ID_NUMBER');?>  </td>
                                                            <td class="font-medium text-dark-medium id_number-js"><?php echo $row['id_number'] ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td> <?php echo lang('ADDRESS');?>  </td>
                                                            <td class="font-medium text-dark-medium address-js"><?php echo $row['address'] ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>  <?php echo lang('PHONE');?>   </td>
                                                            <td class="font-medium text-dark-medium phone-js"><?php echo $row['phone'] ?> </td>
                                                        </tr>
                                                        <?php 
                                                        else : 
                                                            echo "no data to display";
                                                        endif;
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Account Settings Area End Here -->
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
        <!-- Scroll Up Js -->
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- Select 2 Js -->
        <script src="js/select2.min.js"></script>
        <!-- Date Picker Js -->
        <script src="js/datepicker.min.js"></script>
        <!-- Custom Js -->
        <script src="js/main.js"></script>
        <script src="js/request-js/account-setting.js"></script>

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