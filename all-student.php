<?php
ob_start();
session_start();  
if (isset($_SESSION['user_username']) ) :
    if ($_SESSION['user_group_id'] == '1' )  :

    include('config.php');
    include('lang.php');
    $home_page      = 'HOME';
    $current_page   = 'ALL_STUDENTS';
    $parent_page    = 'STUDENTS';
?>


    <!doctype html>
    <html class="no-js" lang="<?php echo $lang; ?>" dir="<?php echo $dir?>">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> <?php echo lang($current_page); ?> | <?php echo lang('SITE_NAME');?> </title>
        
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
                    
                    <!-- Student Table Area Start Here -->
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>All Students Data</h3>
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
                                <table class="table display data-table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input checkAll">
                                                    <label class="form-check-label">Roll</label>
                                                </div>
                                            </th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Name en </th>
                                            <th>Gender</th>
                                            <th>Class</th>
                                            <th>Season</th>
                                            <th>Parents</th>
                                            <th>Address</th>
                                            <th>Date Of Birth</th>
                                            <th>Parent Phone</th>
                                            <th>E-mail</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sql = "SELECT * FROM `students`";
                                            $res =  mysqli_query($connect, $sql);
                                            if ($res) {
                                                $count = mysqli_num_rows($res);
                                                if ($count > 0 ) :
                                                    while ($row = mysqli_fetch_array($res)) :
                                                ?>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    <label class="form-check-label"> <?php echo $row['id']; ?> </label>
                                                                </div>
                                                            </td>
                                                            <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                                                            <td> <?php echo $row['ar_name'];        ?> </td>
                                                            <td> <?php echo $row['en_name'];        ?> </td>
                                                            <td> <?php echo $row['gender'];         ?> </td>
                                                            <td> <?php echo $row['class'];          ?> </td>
                                                            <td> <?php echo $row['season'];         ?> </td>
                                                            <td> <?php echo $row['parent_name'];    ?>  </td>
                                                            <td> <?php echo $row['address'];        ?> </td>
                                                            <td> <?php echo $row['birthday'];       ?> </td>
                                                            <td> <?php echo $row['parent_phone'];   ?> </td>
                                                            <td> <?php echo $row['email'];          ?> </td>
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
                                                    $alter_massage = "فشل الاستعلام ";
                                                else: 
                                                    $alter_massage = "Query failed";
                                                endif;
                                            }
                                            mysqli_close($connect);
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Student Table Area End Here -->
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