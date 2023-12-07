<?php
ob_start();
session_start();  
if (isset($_SESSION['user_username']) && $_SESSION['user_group_id'] == '1' ) {

    include('config.php');
    include('lang.php');
    $home_page    = 'HOME';
    $current_page = 'GRID';
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
                <!-- Grid Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Base on Bootstrap System</h3>
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
                        <div class="row">
                           <div class="col-lg-12">
                               <div class="ui-grid-box">Col-lg-12</div>
                           </div> 
                           <div class="col-lg-6">
                               <div class="ui-grid-box">Col-lg-6</div>
                           </div> 
                           <div class="col-lg-6">
                               <div class="ui-grid-box">Col-lg-6</div>
                           </div> 
                           <div class="col-lg-4">
                               <div class="ui-grid-box">Col-lg-4</div>
                           </div> 
                           <div class="col-lg-4">
                               <div class="ui-grid-box">Col-lg-4</div>
                           </div> 
                           <div class="col-lg-4">
                               <div class="ui-grid-box">Col-lg-4</div>
                           </div> 
                           <div class="col-lg-3">
                               <div class="ui-grid-box">Col-lg-3</div>
                           </div> 
                           <div class="col-lg-3">
                               <div class="ui-grid-box">Col-lg-3</div>
                           </div> 
                           <div class="col-lg-3">
                               <div class="ui-grid-box">Col-lg-3</div>
                           </div> 
                           <div class="col-lg-3">
                               <div class="ui-grid-box">Col-lg-3</div>
                           </div> 
                        </div>
                    </div>
                </div>
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Mobile, Tablet & Destop System</h3>
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
                        <div class="row">
                           <div class="col-lg-6">
                               <div class="ui-grid-box">Col-xs-6</div>
                           </div> 
                           <div class="col-lg-6">
                               <div class="ui-grid-box">Col-xs-6</div>
                           </div> 
                           <div class="col-lg-4">
                               <div class="ui-grid-box">Col-sm-4</div>
                           </div> 
                           <div class="col-lg-4">
                               <div class="ui-grid-box">Col-sm-4</div>
                           </div> 
                           <div class="col-lg-4">
                               <div class="ui-grid-box">Col-sm-4</div>
                           </div> 
                           <div class="col-lg-4">
                               <div class="ui-grid-box">Col-sm-4</div>
                           </div> 
                           <div class="col-lg-3">
                               <div class="ui-grid-box">Col-sm-3</div>
                           </div> 
                           <div class="col-lg-3">
                               <div class="ui-grid-box">Col-sm-3</div>
                           </div> 
                           <div class="col-lg-2">
                               <div class="ui-grid-box">Col-sm-2</div>
                           </div> 
                        </div>
                    </div>
                </div>
                <!-- Grid Area End Here -->
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
