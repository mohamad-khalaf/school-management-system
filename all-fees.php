<?php
ob_start();
session_start();  
if (isset($_SESSION['user_username']) ) :
    if ($_SESSION['user_group_id'] == '1' )  :

    include('config.php');
    include('lang.php');
    $home_page    = 'HOME';
    $current_page = 'ALL_FEES';
    $parent_page  = 'FEES';
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
        <!-- Data Table CSS -->
        <link rel="stylesheet" href="css/jquery.dataTables.min.css">
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
                    <!-- Fees Table Area Start Here -->
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>All Fees Collection</h3>
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
                            <form class="mg-b-20">
                                <div class="row gutters-8">
                                    <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                        <input type="text" placeholder="<?php echo lang('SEARCH_BY_ID'); ?>" class="form-control">
                                    </div>
                                    <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                        <input type="text" placeholder="<?php echo lang('SEARCH_BY_ID'); ?>" class="form-control">
                                    </div>
                                    <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                        <input type="text" placeholder="<?php echo lang('SEARCH_BY_PHONE'); ?>" class="form-control">
                                    </div>
                                    <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                        <button type="submit" class="fw-btn-fill btn-gradient-yellow"><?php echo lang('SEARCH'); ?></button>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table data-table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th> 
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input checkAll">
                                                    <label class="form-check-label">ID</label>
                                                </div>
                                            </th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Class</th>
                                            <th>Section</th>
                                            <th>Expense</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Phone</th>
                                            <th>E-mail</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0021</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student2.png" alt="student"></td>
                                            <td>Mark Willy</td>
                                            <td>Male</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$2,0000.00</td>
                                            <td class="badge badge-pill badge-success d-block mg-t-8">Paid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
                                            <td>
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
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0022</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student3.png" alt="student"></td>
                                            <td>Jessia</td>
                                            <td>Female</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$2,0000.00</td>
                                            <td class="badge badge-pill badge-danger d-block mg-t-8">Unpaid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
                                            <td>
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
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0023</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student4.png" alt="student"></td>
                                            <td>Mike John</td>
                                            <td>Male</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$2,0000.00</td>
                                            <td class="badge badge-pill badge-success d-block mg-t-8">Paid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
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
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0024</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student6.png" alt="student"></td>
                                            <td>Maria Jaman</td>
                                            <td>Female</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$4,0000.00</td>
                                            <td class="badge badge-pill badge-danger d-block mg-t-8">Unpaid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
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
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0025</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student2.png" alt="student"></td>
                                            <td>Mark Willy</td>
                                            <td>Male</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$2,0000.00</td>
                                            <td class="badge badge-pill badge-success d-block mg-t-8">Paid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
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
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0026</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student3.png" alt="student"></td>
                                            <td>Jessia</td>
                                            <td>Female</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$2,0000.00</td>
                                            <td class="badge badge-pill badge-danger d-block mg-t-8">Unpaid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
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
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0027</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student4.png" alt="student"></td>
                                            <td>Mike John</td>
                                            <td>Male</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$2,0000.00</td>
                                            <td class="badge badge-pill badge-success d-block mg-t-8">Paid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
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
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0028</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student6.png" alt="student"></td>
                                            <td>Maria Jaman</td>
                                            <td>Female</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$4,0000.00</td>
                                            <td class="badge badge-pill badge-danger d-block mg-t-8">Unpaid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
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
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0029</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student2.png" alt="student"></td>
                                            <td>Mark Willy</td>
                                            <td>Male</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$2,0000.00</td>
                                            <td class="badge badge-pill badge-success d-block mg-t-8">Paid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
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
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0030</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student3.png" alt="student"></td>
                                            <td>Jessia</td>
                                            <td>Female</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$2,0000.00</td>
                                            <td class="badge badge-pill badge-danger d-block mg-t-8">Unpaid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
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
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0031</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student4.png" alt="student"></td>
                                            <td>Mike John</td>
                                            <td>Male</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$2,0000.00</td>
                                            <td class="badge badge-pill badge-success d-block mg-t-8">Paid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
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
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0032</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student6.png" alt="student"></td>
                                            <td>Maria Jaman</td>
                                            <td>Female</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$4,0000.00</td>
                                            <td class="badge badge-pill badge-danger d-block mg-t-8">Unpaid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
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
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0033</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student8.png" alt="student"></td>
                                            <td>Mark Willy</td>
                                            <td>Male</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$2,0000.00</td>
                                            <td class="badge badge-pill badge-success d-block mg-t-8">Paid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
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
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0034</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student3.png" alt="student"></td>
                                            <td>Jessia</td>
                                            <td>Female</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$2,0000.00</td>
                                            <td class="badge badge-pill badge-danger d-block mg-t-8">Unpaid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
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
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0035</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student4.png" alt="student"></td>
                                            <td>Mike John</td>
                                            <td>Male</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$2,0000.00</td>
                                            <td class="badge badge-pill badge-success d-block mg-t-8">Paid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
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
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0036</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student6.png" alt="student"></td>
                                            <td>Maria Jaman</td>
                                            <td>Female</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$4,0000.00</td>
                                            <td class="badge badge-pill badge-danger d-block mg-t-8">Unpaid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
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
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0037</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student2.png" alt="student"></td>
                                            <td>Mark Willy</td>
                                            <td>Male</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$2,0000.00</td>
                                            <td class="badge badge-pill badge-success d-block mg-t-8">Paid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
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
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0038</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student3.png" alt="student"></td>
                                            <td>Jessia</td>
                                            <td>Female</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$2,0000.00</td>
                                            <td class="badge badge-pill badge-danger d-block mg-t-8">Unpaid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
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
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0039</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student4.png" alt="student"></td>
                                            <td>Mike John</td>
                                            <td>Male</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$2,0000.00</td>
                                            <td class="badge badge-pill badge-success d-block mg-t-8">Paid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
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
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0040</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student6.png" alt="student"></td>
                                            <td>Maria Jaman</td>
                                            <td>Female</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$4,0000.00</td>
                                            <td class="badge badge-pill badge-danger d-block mg-t-8">Unpaid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
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
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0041</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student2.png" alt="student"></td>
                                            <td>Mark Willy</td>
                                            <td>Male</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$2,0000.00</td>
                                            <td class="badge badge-pill badge-success d-block mg-t-8">Paid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
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
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0042</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student3.png" alt="student"></td>
                                            <td>Jessia</td>
                                            <td>Female</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$2,0000.00</td>
                                            <td class="badge badge-pill badge-danger d-block mg-t-8">Unpaid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
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
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0043</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student4.png" alt="student"></td>
                                            <td>Mike John</td>
                                            <td>Male</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$2,0000.00</td>
                                            <td class="badge badge-pill badge-success d-block mg-t-8">Paid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
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
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label">#0044</label>
                                                </div>
                                            </td>
                                            <td><img src="img/figure/student6.png" alt="student"></td>
                                            <td>Maria Jaman</td>
                                            <td>Female</td>
                                            <td>2</td>
                                            <td>A</td>
                                            <td>Class Test</td>
                                            <td>$4,0000.00</td>
                                            <td class="badge badge-pill badge-danger d-block mg-t-8">Unpaid</td>
                                            <td>+ 123 9988568</td>
                                            <td>kazifahim93@gmail.com</td>
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Fees Table Area End Here -->
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
        <!-- Data Table Js -->
        <script src="js/jquery.dataTables.min.js"></script>
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