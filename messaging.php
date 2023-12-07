<?php
ob_start();
session_start();  
if (isset($_SESSION['user_username']) ):
    if ($_SESSION['user_group_id'] == '1' )  :

    include('config.php');
    include('lang.php');
    $home_page    = 'HOME';
    $current_page = 'MESSAGING';
    $parent_page  = '';
    $alter_massage = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') :

        $title     = $_POST['title'];
        $recipient = $_POST['recipient'];
        $sender    = $_SESSION['user_full_name'];
        $message   = $_POST['message'];
        $sql = "INSERT INTO `messaging` (`title`,`recipient`,`sender`,`message`) 
                                 VALUES ('$title','$recipient','$sender','$message')";
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
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3><?php echo lang('WRITE_NEW_MESSAGE'); ?></h3>
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
                                        <div class="col-12 form-group">
                                            <label><?php echo lang('TITLE'); ?></label>
                                            <input type="text" placeholder="" class="form-control" name="title" >
                                        </div>
                                        <div class="col-12 form-group">
                                            <label><?php echo lang('RECIPIENT'); ?></label>
                                            <input type="text" placeholder="" class="form-control" name="recipient">
                                        </div>
                                        <div class="col-12 form-group">
                                            <label><?php echo lang('MESSAGE'); ?> </label>
                                            <textarea class="textarea form-control" name="message" id="form-message" cols="10"  name="message" 
                                            rows="9"></textarea>
                                        </div>
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark"><?php echo lang('SAVE'); ?>Save</button>
                                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow"><?php echo lang('RESET'); ?>Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Add Notice Area End Here -->
                    <!-- All Notice Area Start Here -->
                    <div class="col-xl-4">
                        <div class="card message-box-wrap height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3><?php echo lang('SUCCESSFUL_MESSAGE'); ?> </h3>
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
                                <div class="message-success-box">
                                    <div class="item-content">
                                        <div class="item-icon">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <h3 class="item-title"><?php echo lang('SUCCESSFUL_MESSAGE_SEND'); ?> </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card message-box-wrap height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3><?php echo lang('ERROR_MESSAGE'); ?></h3>
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
                                <div class="message-error-box">
                                    <div class="item-content">
                                        <div class="item-icon">
                                            <i class="fas fa-exclamation-circle"></i>
                                        </div>
                                        <h3 class="item-title"> <?php echo lang('SOME_REQUIRED'); ?> </h3>
                                    </div>
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
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>
</html>

<?php
    elseif ($_SESSION['user_group_id'] == '2' )  :
        header('Location: index5.php'); 
        exit();
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