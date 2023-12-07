<?php
ob_start();
session_start();  
if (isset($_SESSION['user_username']) && $_SESSION['user_group_id'] == '1' ) {

    include('config.php');
    include('lang.php');
    $home_page    = 'HOME';
    $current_page = 'BUTTON';
    $parent_page  = 'UI_ELEMENTS';
    $alter_massage = '';
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
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Custom RTL CSS -->
    <?php if ($dir == "rtl") echo '<link rel="stylesheet" href="style.rtl.css">'; ?>
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>

<body>
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
                <!-- Button Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Filled Button</h3>
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
                        <div class="ui-btn-wrap">
                            <ul>
                                <li><button type="button" class="btn-fill-md text-light bg-dodger-blue">Primary</button></li>
                                <li><button type="button" class="btn-fill-md text-light bg-mauvelous">Secondary</button></li>
                                <li><button type="button" class="btn-fill-md text-light bg-orange-peel">Info</button></li>
                                <li><button type="button" class="btn-fill-md text-light bg-dark-pastel-green">Success</button></li>
                                <li><button type="button" class="btn-fill-xl text-light bg-red">Warning</button></li>
                                <li><button type="button" class="btn-fill-lmd radius-4 text-light bg-true-v">Awesome</button></li>
                                <li><button type="button" class="btn-fill-lmd radius-4 text-light bg-violet-blue">Disabled</button></li>
                                <li><button type="button" class="btn-fill-md radius-4 text-light bg-light-sea-green">Reload</button></li>
                                <li><button type="button" class="btn-fill-md radius-4 text-light bg-martini">Stories</button></li>
                                <li><button type="button" class="btn-fill-sm radius-4 text-light bg-yellow">Sure</button></li>
                                <li><button type="button" class="btn-fill-md radius-4 text-light bg-orange-red">Close</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Outline Button</h3>
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
                        <div class="ui-btn-wrap">
                            <ul>
                                <li><button type="button" class="btn-fill-md text-dodger-blue border-dodger-blue">Primary</button></li>
                                <li><button type="button" class="btn-fill-md text-mauvelous border-mauvelous">Secondary</button></li>
                                <li><button type="button" class="btn-fill-md text-orange-peel border-orange-peel">Info</button></li>
                                <li><button type="button" class="btn-fill-md text-dark-pastel-green border-dark-pastel-green">Success</button></li>
                                <li><button type="button" class="btn-fill-xl text-red border-red">Warning</button></li>
                                <li><button type="button" class="btn-fill-lmd radius-4 text-true-v border-true-v">Awesome</button></li>
                                <li><button type="button" class="btn-fill-lmd radius-4 text-violet-blue border-violet-blue">Disabled</button></li>
                                <li><button type="button" class="btn-fill-md radius-4 text-light-sea-green border-light-sea-green">Reload</button></li>
                                <li><button type="button" class="btn-fill-md radius-4 text-martini border-martini">Stories</button></li>
                                <li><button type="button" class="btn-fill-sm radius-4 text-yellow border-yellow">Sure</button></li>
                                <li><button type="button" class="btn-fill-md radius-4 text-orange-red border-orange-red">Close</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Shadow Button</h3>
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
                        <div class="ui-btn-wrap">
                            <ul>
                                <li><button type="button" class="btn-fill-lmd radius-30 text-light shadow-dodger-blue bg-dodger-blue">Primary</button></li>
                                <li><button type="button" class="btn-fill-lmd radius-30 text-light shadow-dark-pastel-green bg-dark-pastel-green">Success</button></li>
                                <li><button type="button" class="btn-fill-lmd radius-30 text-light shadow-true-v bg-true-v">Awesome</button></li>
                                <li><button type="button" class="btn-fill-lmd radius-30 text-light shadow-red bg-red">Warning</button></li>
                                <li><button type="button" class="btn-fill-md radius-30 text-light bg-martini shadow-martini">Stories</button></li>
                                <li><button type="button" class="btn-fill-xl radius-30 text-light shadow-violet-blue bg-violet-blue">Disabled</button></li>
                                <li><button type="button" class="btn-fill-xl radius-30 text-light shadow-light-sea-green bg-light-sea-green">Reload</button></li>
                                <li><button type="button" class="btn-fill-xl radius-30 text-light shadow-orange-peel bg-orange-peel">Info</button></li>
                                <li><button type="button" class="btn-fill-xl radius-30 text-light shadow-orange-red bg-orange-red">Close</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Gradient Button</h3>
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
                        <div class="ui-btn-wrap">
                            <ul>
                                <li><button type="button" class="btn-fill-lmd text-light gradient-dodger-blue">Primary</button></li>
                                <li><button type="button" class="btn-fill-lg font-normal no-radius text-light gradient-orange-peel">Awesome</button></li>
                                <li><button type="button" class="btn-fill-lmd text-light bg-gradient-gplus">Warning</button></li>
                                <li><button type="button" class="btn-fill-lg font-normal no-radius text-light gradient-pastel-green">Success</button></li>
                                <li><button type="button" class="btn-fill-lg font-normal text-light btn-gradient-yellow">Info</button></li>
                                <li><button type="button" class="btn-fill-lg font-normal text-light gradient-orange-peel">Awesome</button></li>
                                <li><button type="button" class="btn-fill-lmd text-light radius-4 bg-gradient-gplus">Warning</button></li>
                                <li><button type="button" class="btn-fill-lg font-normal text-light gradient-pastel-green">Success</button></li>
                                <li><button type="button" class="btn-fill-lg font-normal radius-4 text-light btn-gradient-yellow">Info</button></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Icon Button</h3>
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
                        <div class="ui-btn-wrap">
                            <ul>
                                <li><button type="button" class="btn-fill-lmd radius-30 text-light bg-dodger-blue">Primary<i class="fas fa-caret-down mg-l-10"></i></button></li>
                                <li><button type="button" class="btn-fill-lmd radius-30 text-light bg-violet-blue">Select Area<i class="fas fa-caret-down mg-l-10"></i></button></li>
                                <li><button type="button" class="btn-fill-md radius-30 text-light bg-dark-pastel-green">Success<i class="fas fa-check mg-l-15"></i></button></li>
                                <li><button type="button" class="btn-fill-lmd radius-30 text-light bg-true-v">Upload Image<i class="fas fa-cloud-upload-alt mg-l-10"></i></button></li>
                                <li><button type="button" class="btn-fill-md radius-30 text-light bg-red">Warning<i class="fas fa-exclamation-circle mg-l-10"></i></button></li>
                                <li><button type="button" class="btn-fill-md radius-30 text-light bg-orange-peel">Settings<i class="fas fa-cog mg-l-10"></i></button></li>
                                <li><button type="button" class="btn-fill-md radius-30 text-light bg-light-sea-green">Calender<i class="fas fa-calendar-alt mg-l-10"></i></button></li>
                                <li><button type="button" class="btn-fill-md radius-30 text-light bg-martini">Web Link<i class="fas fa-link mg-l-10"></i></button></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Button Area End Here -->
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
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>

</html>
<?php
    } else {
        header('Location: login.php'); 
        exit();
    }
    ob_end_flush();
?>