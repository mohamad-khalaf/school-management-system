<?php
ob_start();
session_start();  
if (isset($_SESSION['user_username']) ) :
    if ($_SESSION['user_group_id'] == '1' || $_SESSION['user_group_id'] == '2' )  :


    include('config.php');
    include('lang.php');
    $home_page    = 'HOME';
    $current_page = 'NOTICE_BOARD';
    $parent_page  = '';
    $alter_massage = '';

    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') :

        $title     = $_POST['title'];
        $details   = $_POST['details'];
        $creator   = $_POST['creator'];
        $date      = $_POST['date'];
        $sql = "INSERT INTO `notice` (`title`,`details`,`creator`,`date`) 
                            VALUES ('$title','$details','$creator','$date')";
        $res = mysqli_query($connect, $sql);

        if ($res) :
            if ($lang == 'ar') {
                $alter_massage = "تم العملية بنجاح";
            } else {
                $alter_massage =  "The operation was completed successfully";
            }
        endif;
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
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="css/datepicker.min.css">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
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
                <div class="row">
                    <!-- Add Notice Area Start Here -->
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3><?php echo lang('CREATE_NOTICE'); ?> </h3>
                                    </div>
                                     <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" 
                                        data-toggle="dropdown" aria-expanded="false">...</a>
                
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <form class="new-added-form" action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="POST" enctype="multipart/form-data" >
                                    <div class="row">
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label> <?php echo lang('TITLE'); ?> </label>
                                            <input type="text" placeholder="" class="form-control" name="title">
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label> <?php echo lang('DETAILS'); ?> </label>
                                            <input type="text" placeholder="" class="form-control" name="details">
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label> <?php echo lang('POSTED_BY'); ?> </label>
                                            <input type="text" placeholder="" class="form-control" name="creator">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label><?php echo lang('DATE'); ?> </label>
                                            <input type="text" placeholder="yyyy/mm/dd" class="form-control air-datepicker" data-date-format="yyyy/mm/dd" data-position="bottom right" name="date">
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark"><?php echo lang('SAVE'); ?> </button>
                                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow"><?php echo lang('RESET'); ?> </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Add Notice Area End Here -->
                    <!-- All Notice Area Start Here -->
                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3><?php echo lang('NOTICE_BOARD'); ?> </h3>
                                    </div>
                                     <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" 
                                        data-toggle="dropdown" aria-expanded="false">...</a>
                
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <form class="mg-b-20">
                                    <div class="row gutters-8">
                                        <div class="col-lg-5 col-12 form-group">
                                            <input type="text" placeholder="<?php echo lang('SEARCH_BY_DATE'); ?> ..." class="form-control">
                                        </div>
                                        <div class="col-lg-5 col-12 form-group">
                                            <input type="text" placeholder="<?php echo lang('SEARCH_BY_TITLE'); ?> ..." class="form-control">
                                        </div>
                                        <div class="col-lg-2 col-12 form-group">
                                            <button type="submit" class="fw-btn-fill btn-gradient-yellow"><?php echo lang('SEARCH'); ?> </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="notice-board-wrap">
                                    <!-- <div class="notice-list">
                                        <div class="post-date bg-skyblue">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School Great School manag mene esom  
                                            text of the printing Great School manag mene esom  text of the printing manag 
                                            mene esom  text of the printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-yellow">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School Great School manag mene esom  
                                            text of the printing Great School manag mene esom  text of the printing manag 
                                            mene esom  text of the printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-pink">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School Great School manag mene esom  
                                            text of the printing Great School manag mene esom  text of the printing manag 
                                            mene esom  text of the printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div> -->
                                    <?php
                                        $sql = "SELECT * FROM `notice`";
                                        $res =  mysqli_query($connect, $sql);
                                        if ($res) {
                                            $count = mysqli_num_rows($res);
                                            if ($count > 0 ) :
                                                while ($row = mysqli_fetch_array($res)) :
                                    ?>
                                        <div class="notice-list">
                                            <div class="post-date bg-pink"><?php echo $row['date']; ?></div>
                                            <h6 class="notice-title">
                                                <a href="#">
                                                    <?php echo $row['title']; ?>
                                                </a>
                                            </h6>
                                            <p> <?php echo $row['details']; ?> </p>
                                            <div class="entry-meta"> 
                                                <span>

                                                        <!-- 4mintus ago  -->



                                                </span>
                                            </div>
                                        </div> 
                                    <?php                
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
                                                $alter_massage = "فشل الاستعلام";
                                            else: 
                                                $alter_massage = "Query failed";
                                            endif;
                                        }
                                        mysqli_close($connect);
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- All Notice Area End Here -->
                </div>
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
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Date Picker Js -->
    <script src="js/datepicker.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>
    <script> 

</script>
</body>

</html>
<?php

    elseif ($_SESSION['user_group_id'] == '3' )  :
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
