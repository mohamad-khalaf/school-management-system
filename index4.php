<?php
ob_start();
session_start();  
if (isset($_SESSION['user_username']) ) :
    if ($_SESSION['user_group_id'] == '3' )  :

    include('config.php');
    include('lang.php');
    $home_page    = 'HOME';
    $current_page = 'ADD_STUDENT';
    $parent_page  = 'STUDENTS';
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
    <!-- Custom RTL CSS -->
    <?php if ($dir == "rtl") echo '<link rel="stylesheet" href="style.rtl.css">'; ?>    
    <link rel="stylesheet" href="style.css">
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
                <!-- Dashboard summery Start Here -->
                <div class="row">
                    <div class="col-3-xxxl col-sm-6 col-12">
                        <div class="dashboard-summery-one">
                            <div class="row">
                                <div class="col-6">
                                    <div class="item-icon bg-light-red">
                                        <i class="flaticon-money text-red"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title"> <?php echo lang('DUE_FEES'); ?> </div>
                                        <div class="item-number"><span>$</span><span class="counter" data-num="4503">4,503</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3-xxxl col-sm-6 col-12">
                        <div class="dashboard-summery-one">
                            <div class="row">
                                <div class="col-6">
                                    <div class="item-icon bg-light-magenta">
                                        <i class="flaticon-shopping-list text-magenta"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">  <?php echo lang('NOTIFICATION'); ?>  </div>
                                        <div class="item-number"><span class="counter" data-num="12">12</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3-xxxl col-sm-6 col-12">
                        <div class="dashboard-summery-one">
                            <div class="row">
                                <div class="col-6">
                                    <div class="item-icon bg-light-yellow">
                                        <i class="flaticon-mortarboard text-orange"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">  <?php echo lang('RESULT'); ?>  </div>
                                        <div class="item-number"><span class="counter" data-num="16">16</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3-xxxl col-sm-6 col-12">
                        <div class="dashboard-summery-one">
                            <div class="row">
                                <div class="col-6">
                                    <div class="item-icon bg-light-blue">
                                        <i class="flaticon-money text-blue"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">  <?php echo lang('EXPENSES'); ?>  </div>
                                        <div class="item-number"><span>$</span><span class="counter" data-num="193000">1,93,000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dashboard summery End Here -->
                <!-- Dashboard Content Start Here -->
                <div class="row">
                    <div class="col-5-xxxl col-12">
                        <div class="card dashboard-card-twelve">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>  <?php echo lang('MY_KIDS'); ?> </h3>
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
                                <div class="kids-details-wrap">
                                    <div class="row">
                                        <div class="col-12-xxxl col-xl-6 col-12">
                                            <div class="kids-details-box mb-5">
                                                <div class="item-img">
                                                    <img src="img/figure/student.png" alt="kids">
                                                </div>
                                                <div class="item-content table-responsive">
                                                    <table class="table text-nowrap">
                                                        <tbody>
                                                            <tr>
                                                                <td>  <?php echo lang('NAME'); ?> :</td>
                                                                <td>Jessia Rose</td>
                                                            </tr>
                                                            <tr>
                                                                <td>  <?php echo lang('GENDER'); ?>  :</td>
                                                                <td>Female</td>
                                                            </tr>
                                                            <tr>
                                                                <td>  <?php echo lang('CLASS'); ?>  :</td>
                                                                <td>2</td>
                                                            </tr>
                                                            <tr>
                                                                <td>  <?php echo lang('ROLL'); ?> :</td>
                                                                <td>#2225</td>
                                                            </tr>
                                                            <tr>
                                                                <td> <?php echo lang('SECTION'); ?> :</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr>
                                                                <td>  <?php echo lang('ADMISSION_ID'); ?> :</td>
                                                                <td>#0021</td>
                                                            </tr>
                                                            <tr>
                                                                <td>  <?php echo lang('ADMISSION_DATE'); ?> :</td>
                                                                <td>07.08.2017</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12-xxxl col-xl-6 col-12">
                                            <div class="kids-details-box">
                                                <div class="item-img">
                                                    <img src="img/figure/student1.png" alt="kids">
                                                </div>
                                                <div class="item-content table-responsive">
                                                    <table class="table text-nowrap">
                                                        <tbody>
                                                            <tr>
                                                                <td>Name:</td>
                                                                <td>Jack Steve</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gender:</td>
                                                                <td>Male</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Class:</td>
                                                                <td>3</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Roll:</td>
                                                                <td>#2205</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Section:</td>
                                                                <td>A</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Admission Id:</td>
                                                                <td>#0045</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Admission Date:</td>
                                                                <td>07.08.2017</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7-xxxl col-12">
                        <div class="card dashboard-card-eleven">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>All Expenses</h3>
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
                                <div class="table-box-wrap">
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
                                    <div class="table-responsive expenses-table-box">
                                        <table class="table data-table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input checkAll">
                                                            <label class="form-check-label">ID</label>
                                                        </div>
                                                    </th>
                                                    <th>Expanse</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>E-Mail</th>
                                                    <th>Date</th>
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
                                                    <td>Exam Fees</td>
                                                    <td>$150.00</td>
                                                    <td class="badge badge-pill badge-success d-block mg-t-8">Paid</td>
                                                    <td>akkhorschool@gmail.com</td>
                                                    <td>22/02/2019</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
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
                                                    <td>Semister Fees</td>
                                                    <td>$350.00</td>
                                                    <td class="badge badge-pill badge-danger d-block mg-t-8">Due</td>
                                                    <td>akkhorschool@gmail.com</td>
                                                    <td>22/02/2019</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
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
                                                    <td>Exam Fees</td>
                                                    <td>$150.00</td>
                                                    <td class="badge badge-pill badge-success d-block mg-t-8">Paid</td>
                                                    <td>akkhorschool@gmail.com</td>
                                                    <td>22/02/2019</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
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
                                                    <td>Exam Fees</td>
                                                    <td>$150.00</td>
                                                    <td class="badge badge-pill badge-danger d-block mg-t-8">Due </td>
                                                    <td>akkhorschool@gmail.com</td>
                                                    <td>22/02/2019</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
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
                                                    <td>Exam Fees</td>
                                                    <td>$150.00</td>
                                                    <td class="badge badge-pill badge-success d-block mg-t-8">Paid</td>
                                                    <td>akkhorschool@gmail.com</td>
                                                    <td>22/02/2019</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
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
                                                    <td>Semister Fees</td>
                                                    <td>$350.00</td>
                                                    <td class="badge badge-pill badge-danger d-block mg-t-8">Due</td>
                                                    <td>akkhorschool@gmail.com</td>
                                                    <td>22/02/2019</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
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
                                                    <td>Exam Fees</td>
                                                    <td>$150.00</td>
                                                    <td class="badge badge-pill badge-success d-block mg-t-8">Paid</td>
                                                    <td>akkhorschool@gmail.com</td>
                                                    <td>22/02/2019</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-12">
                        <div class="card dashboard-card-six">
                            <div class="card-body">
                                <div class="heading-layout1 mg-b-17">
                                    <div class="item-title">
                                        <h3>  <?php echo lang('EVENT_CALENDER'); ?>  Notifications</h3>
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
                                <div class="notice-box-wrap m-height-660">
                                    <div class="notice-list">
                                        <div class="post-date bg-skyblue">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag mene esom tus eleifend
                                                lectus
                                                sed maximus mi faucibusnting.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-yellow">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag printing.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-pink">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag Nulla rhoncus eleifensed
                                                mim
                                                us mi faucibus id. Mauris vestibulum non purus lobortismenearea</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-blue">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag mene esom text of the
                                                printing.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-yellow">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag printing.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-blue">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag meneesom.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-pink">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag meneesom.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-12">
                        <div class="card dashboard-card-eleven">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>  <?php echo lang('ALL_EXAM_RESULTS'); ?>  </h3>
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
                                <div class="table-box-wrap">
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
                                    <div class="table-responsive result-table-box">
                                        <table class="table display data-table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input checkAll">
                                                            <label class="form-check-label">ID</label>
                                                        </div>
                                                    </th>
                                                    <th>Exam Name</th>
                                                    <th>Subject</th>
                                                    <th>Class</th>
                                                    <th>Roll</th>
                                                    <th>Grade</th>
                                                    <th>Percent</th>
                                                    <th>Date</th>
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
                                                    <td>Class Test</td>
                                                    <td>English</td>
                                                    <td>2</td>
                                                    <td>#0045</td>
                                                    <td>A</td>
                                                    <td>99.00 > 100</td>
                                                    <td>22/02/2019</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
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
                                                    <td>Class Test</td>
                                                    <td>English</td>
                                                    <td>1</td>
                                                    <td>#0025</td>
                                                    <td>A</td>
                                                    <td>99.00 > 100</td>
                                                    <td>22/02/2019</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
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
                                                    <td>Class Test</td>
                                                    <td>Drawing</td>
                                                    <td>2</td>
                                                    <td>#0045</td>
                                                    <td>A</td>
                                                    <td>99.00 > 100</td>
                                                    <td>22/02/2019</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
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
                                                    <td>Class Test</td>
                                                    <td>English</td>
                                                    <td>1</td>
                                                    <td>#0048</td>
                                                    <td>A</td>
                                                    <td>99.00 > 100</td>
                                                    <td>22/02/2019</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
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
                                                    <td>Class Test</td>
                                                    <td>Chemistry</td>
                                                    <td>8</td>
                                                    <td>#0050</td>
                                                    <td>A</td>
                                                    <td>99.00 > 100</td>
                                                    <td>22/02/2019</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
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
                                                    <td>Class Test</td>
                                                    <td>Bangla</td>
                                                    <td>4</td>
                                                    <td>#0035</td>
                                                    <td>D</td>
                                                    <td>70.00 > 100</td>
                                                    <td>22/02/2019</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
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
                                                    <td>Class Test</td>
                                                    <td>Drawing</td>
                                                    <td>2</td>
                                                    <td>#0045</td>
                                                    <td>C</td>
                                                    <td>80.00 > 100</td>
                                                    <td>22/02/2019</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
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
                                                    <td>Class Test</td>
                                                    <td>English</td>
                                                    <td>4</td>
                                                    <td>#0048</td>
                                                    <td>B</td>
                                                    <td>99.00 > 100</td>
                                                    <td>22/02/2019</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
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
                                                    <td>First Semister</td>
                                                    <td>English</td>
                                                    <td>2</td>
                                                    <td>#0045</td>
                                                    <td>A</td>
                                                    <td>99.00 > 100</td>
                                                    <td>22/02/2019</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="flaticon-more-button-of-three-dots"></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include('layout/footer.php'); ?>
                <!-- Dashboard Content End Here -->
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
    <!-- Counterup Js -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Waypoints Js -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Data Table Js -->
    <script src="js/jquery.dataTables.min.js"></script>
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
