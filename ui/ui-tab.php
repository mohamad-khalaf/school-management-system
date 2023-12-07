<?php
ob_start();
session_start();  
if (isset($_SESSION['user_username']) && $_SESSION['user_group_id'] == '1' ) {

    include('config.php');
    include('lang.php');
    $home_page    = 'HOME';
    $current_page = 'UI_TAB';
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
                <!-- Tab Area Start Here -->
                <div class="card ui-tab-card">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Default Tab</h3>
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
                        <div class="basic-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" data-toggle="tab" href="#tab3" role="tab" aria-selected="false">Settings</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                                <div class="tab-pane fade" id="tab2" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                                <div class="tab-pane fade" id="tab3" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card ui-tab-card">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Custom Tab</h3>
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
                        <div class="custom-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab4" role="tab" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab5" role="tab" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab6" role="tab" aria-selected="false">Settings</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab4" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                                <div class="tab-pane fade" id="tab5" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                                <div class="tab-pane fade" id="tab6" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card ui-tab-card">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Nav Tab</h3>
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
                        <div class="border-nav-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab7" role="tab" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab8" role="tab" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab9" role="tab" aria-selected="false">Settings</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab7" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                                <div class="tab-pane fade" id="tab8" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                                <div class="tab-pane fade" id="tab9" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card ui-tab-card">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Vertical Tab</h3>
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
                        <div class="vertical-tab">
                            <ul class="nav nav-tabs flex-column" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab10" role="tab" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab11" role="tab" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab12" role="tab" aria-selected="false">Settings</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab10" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                        It has survived not only five centuries, but alsowhen an unknown printer took a galley of type 
                                        and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                        alsowhen an unknown printer took.When an unknown printer took a galley of type and scrambled 
                                        it to make a type specimen book. It has survived not only five centuries, but alsowhen an 
                                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has 
                                        survived not only five centuries, but alsowhen an unknown printer took.</p>
                                </div>
                                <div class="tab-pane fade" id="tab11" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                        It has survived not only five centuries, but alsowhen an unknown printer took a galley of type 
                                        and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                        alsowhen an unknown printer took.When an unknown printer took a galley of type and scrambled 
                                        it to make a type specimen book. It has survived not only five centuries, but alsowhen an 
                                        unknown printer took a galley of type and scrambled it to make a type specimen book. It 
                                        has survived not only five centuries, but alsowhen an unknown printer took.</p>
                                </div>
                                <div class="tab-pane fade" id="tab12" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                        It has survived not only five centuries, but alsowhen an unknown printer took a galley of type 
                                        and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                        alsowhen an unknown printer took.When an unknown printer took a galley of type and scrambled 
                                        it to make a type specimen book. It has survived not only five centuries, but alsowhen an 
                                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has 
                                        survived not only five centuries, but alsowhen an unknown printer took.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card ui-tab-card">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-25">
                            <div class="item-title">
                                <h3>Icon Tab</h3>
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
                        <div class="icon-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link border-dark-pastel-green active" data-toggle="tab" href="#tab13" role="tab" aria-selected="true"><i class="fas fa-home text-dark-pastel-green"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link border-dodger-blue" data-toggle="tab" href="#tab14" role="tab" aria-selected="false"><i class="fas fa-user text-dodger-blue"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link border-orange-peel" data-toggle="tab" href="#tab15" role="tab" aria-selected="false"><i class="fas fa-share text-orange-peel"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link border-red" data-toggle="tab" href="#tab16" role="tab" aria-selected="false"><i class="fas fa-exclamation-triangle text-red"></i></a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab13" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                                <div class="tab-pane fade" id="tab14" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                                <div class="tab-pane fade" id="tab15" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                                <div class="tab-pane fade" id="tab16" role="tabpanel">
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries,but alsowhen an unknown printer took a galley of type 
                                    and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                                    alsowhen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab Area End Here -->
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