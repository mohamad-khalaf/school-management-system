<?php
ob_start();
session_start();  
if (isset($_SESSION['user_username']) && $_SESSION['user_group_id'] == '1' ) {

    include('config.php');
    include('lang.php');
    $home_page    = 'HOME';
    $current_page = 'MODAL';
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
                <!-- Basic Modal Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-15">
                            <div class="item-title">
                                <h3>Basic Modals</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <div class="ui-modal-box">
                            <div class="modal-box">
                                <label>Standard Modal</label>
                                <!-- Button trigger modal -->
                                <button type="button" class="modal-trigger" data-toggle="modal"
                                    data-target="#standard-modal">
                                    Lunch Live Demo
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="standard-modal" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Woohoo, you're reading this text in a modal!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="footer-btn bg-dark-low"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="footer-btn bg-linkedin">Save
                                                    Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-box">
                                <label>Scrolling Long Modal</label>
                                <!-- Button trigger modal -->
                                <button type="button" class="modal-trigger" data-toggle="modal"
                                    data-target="#long-modal">
                                    Lunch long Scrolling Live Demo
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="long-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus
                                                    ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
                                                    consectetur ac,
                                                    vestibulum at eros. Praesent commodo cursus magna, vel scelerisque
                                                    nisl
                                                    consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum
                                                    faucibus dolor auctor.
                                                </p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                    cursus magna,
                                                    vel scelerisque nisl consectetur et. Donec sed odio dui. Donec
                                                    ullamcorper
                                                    nulla non metus auctor fringilla. Cras mattis consectetur purus sit
                                                    amet
                                                    fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget
                                                    quam.
                                                    Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor.Aenean
                                                    lacinia bibendum nulla sed consectetur. Praesent commodo cursus
                                                    magna, vel
                                                    scelerisque nisl consectetur et. Donec sed odio dui. Donec
                                                    ullamcorper nulla
                                                    non metus auctor fringilla. Cras mattis consectetur purus sit amet
                                                    fermentum.
                                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi
                                                    leo risus,
                                                    porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus
                                                    magna,
                                                    vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                                                    augue laoreet
                                                    rutrum faucibus dolor auctor.Aenean lacinia bibendum nulla sed
                                                    consectetur.
                                                    Praesent commodo cursus magna
                                                </p>
                                                <p>vel scelerisque nisl consectetur et. Donec sed odio dui. Donec
                                                    ullamcorper nulla
                                                    non metus auctor fringilla. Cras mattis consectetur purus sit amet
                                                    fermentum.
                                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi
                                                    leo risus,
                                                    porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus
                                                    magna,
                                                    vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                                                    augue
                                                    laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla
                                                    sed
                                                    consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur
                                                    et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                                    fringilla. Cras mattis
                                                    consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                                    facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                                    vestibulum at eros.
                                                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis
                                                    lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia
                                                    bibendum nulla
                                                    sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                    consectetur et.
                                                    Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                                    fringilla. Cras mattis
                                                    consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                                    facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                                    vestibulum at eros.
                                                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis
                                                    lacus vel augue laoreet rutrum faucibus dolor auctor.
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="footer-btn bg-dark-low"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="footer-btn bg-linkedin">Save
                                                    Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-box">
                                <label>Modal With Events</label>
                                <!-- Button trigger modal -->
                                <button type="button" class="modal-trigger" data-toggle="modal"
                                    data-target="#success-modal">
                                    Show Success
                                </button>
                                <button type="button" class="modal-trigger" data-toggle="modal"
                                    data-target="#confirmation-modal">
                                    Show Confirmation
                                </button>
                                <button type="button" class="modal-trigger" data-toggle="modal"
                                    data-target="#error-modal">
                                    Show Error
                                </button>
                                <!-- Success Modal -->
                                <div class="modal fade" id="success-modal" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog success-modal-content" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="success-message">
                                                    <div class="item-icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <h3 class="item-title">Successfully Message Sent</h3>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="footer-btn bg-linkedin"
                                                    data-dismiss="modal">Okay</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Confirmation Modal -->
                                <div class="modal fade" id="confirmation-modal" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog success-modal-content" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="success-message">
                                                    <div class="item-icon">
                                                        <i class="fas fa-exclamation"></i>
                                                    </div>
                                                    <h3 class="item-title">You want to delete this file ?</h3>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="footer-btn bg-linkedin">Ok</button>
                                                <button type="button" class="footer-btn bg-dark-low"
                                                    data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Error Modal -->
                                <div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog success-modal-content" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="success-message">
                                                    <div class="item-icon">
                                                        <i class="fas fa-exclamation-triangle"></i>
                                                    </div>
                                                    <h3 class="item-title">An error things happen !</h3>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="footer-btn bg-linkedin"
                                                    data-dismiss="modal">Okay</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-box">
                                <label>Modal Sizes</label>
                                <!-- Button trigger modal -->
                                <button type="button" class="modal-trigger" data-toggle="modal"
                                    data-target="#large-modal">
                                    Large Modal
                                </button>
                                <button type="button" class="modal-trigger" data-toggle="modal"
                                    data-target="#small-modal">
                                    Small Modal
                                </button>
                                <!-- Large Modal -->
                                <div class="modal fade" id="large-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Large Modal</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h3 class="font-semibold">You are seeing Large Modal</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur,
                                                    assumenda aut eaque eius error, eum expedita iusto nobis obcaecati,
                                                    perspiciatis quae quos saepe similique! Iure non perspiciatis qui
                                                    veniam vitae!
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="footer-btn bg-dark-low"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="footer-btn bg-linkedin">Save
                                                    Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Small Modal -->
                                <div class="modal fade" id="small-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Small Modal</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h3 class="font-semibold">This is Small Modal</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur,
                                                    assumenda aut eaque eius error, veniam vitae!
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="footer-btn bg-dark-low"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="footer-btn bg-linkedin">Save
                                                    Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Modal Area End Here -->
                <!-- Variation Modal Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-15">
                            <div class="item-title">
                                <h3>Modals Variations</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <div class="ui-modal-box">
                            <div class="modal-box">
                                <!-- Custom modal trigger -->
                                <button type="button" class="modal-trigger" data-toggle="modal" data-target="#sign-up">
                                    Custom Modal
                                </button>
                                <!-- Left slide modal trigger -->
                                <button type="button" class="modal-trigger" data-toggle="modal"
                                    data-target="#left-slide-modal">
                                    Slide From Left
                                </button>
                                <!-- Right slide modal trigger -->
                                <button type="button" class="modal-trigger" data-toggle="modal"
                                    data-target="#right-slide-modal">
                                    Slide From Right
                                </button>
                                <!-- Left slide Modal -->
                                <div class="modal left-slide-modal fade" id="left-slide-modal" tabindex="-1"
                                    role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Woohoo, you're reading this text in a modal!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="footer-btn bg-dark-low"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="footer-btn bg-linkedin">Save
                                                    Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right slide Modal -->
                                <div class="modal right-slide-modal fade" id="right-slide-modal" tabindex="-1"
                                    role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Woohoo, you're reading this text in a modal!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="footer-btn bg-dark-low"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="footer-btn bg-linkedin">Save
                                                    Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Variation Modal Area End Here -->
                <!-- Custom Modal Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1 mg-b-15">
                            <div class="item-title">
                                <h3>Custom Modals</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <div class="ui-modal-box">
                            <p>We have modified bootstraps base modal to generate different popup banners</p>
                            <div class="modal-box">
                                <!-- Modal trigger -->
                                <button type="button" class="modal-trigger" data-toggle="modal" data-target="#sign-up">
                                    Sign Up
                                </button>
                                <button type="button" class="modal-trigger" data-toggle="modal"
                                    data-target="#notification-modal">
                                    Notifications
                                </button>
                                <button type="button" class="modal-trigger" data-toggle="modal"
                                    data-target="#feedback-modal">
                                    Feedback
                                </button>
                                <!-- Sign Up Modal -->
                                <div class="modal sign-up-modal fade" id="sign-up" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="close-btn">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="item-logo">
                                                    <img src="img/logo2.png" alt="logo">
                                                </div>
                                                <form class="login-form">
                                                    <div class="row gutters-15">
                                                        <div class="form-group col-12">
                                                            <input type="text" placeholder="Name" class="form-control">
                                                        </div>
                                                        <div class="form-group col-12">
                                                            <input type="text" placeholder="E-mail"
                                                                class="form-control">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <input type="text" placeholder="City" class="form-control">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <input type="text" placeholder="Zip Code"
                                                                class="form-control">
                                                        </div>
                                                        <div class="form-group col-12">
                                                            <input type="text" placeholder="Password"
                                                                class="form-control">
                                                        </div>
                                                        <div class="form-group col-12">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="remember-me">
                                                                <label for="remember-me" class="form-check-label">I
                                                                    agree to tha terms & condition</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-12">
                                                            <button type="submit" class="login-btn">Create
                                                                Account</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Notification Modal -->
                                <div class="modal notification-modal fade" id="notification-modal" tabindex="-1"
                                    role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <h5 class="item-title">School Management System</h5>
                                                <p>Lorem ipsum dolor consectetur amet maiores unde natus.</p>
                                                <div class="close-btn">
                                                    <button type="button" class="item-btn" data-dismiss="modal"
                                                        aria-label="Close">
                                                        Join Akkhor
                                                    </button>
                                                    <button type="button" class="close-btn" data-dismiss="modal"
                                                        aria-label="Close">
                                                        Dismiss
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Feedback Modal -->
                                <div class="modal feedback-modal fade" id="feedback-modal" tabindex="-1"
                                    role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="close-btn">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <h3 class="item-title">Feedback</h3>
                                                <p>Before you leave please tell us know the reason why you leave</p>
                                                <form class="feedback-form">
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="feedback1">
                                                            <label for="feedback1" class="form-check-label">
                                                                Service was not suitable for me.</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="feedback2">
                                                            <label for="feedback2" class="form-check-label">
                                                                Service was not upto mark.</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="feedback3">
                                                            <label for="feedback3" class="form-check-label">
                                                                Pricing issue.</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="feedback4">
                                                            <label for="feedback4" class="form-check-label">
                                                                So much bug.</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="feedback5">
                                                            <label for="feedback5" class="form-check-label">
                                                                Need better customer support.</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mt-5">
                                                        <button type="button" class="item-btn" data-dismiss="modal"
                                                        aria-label="Close">
                                                        Share Feedback
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Custom Modal Area End Here -->
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