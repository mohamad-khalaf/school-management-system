<?php
ob_start();
session_start();  
if (isset($_SESSION['user_username']) ) :
    if ($_SESSION['user_group_id'] == '1' )  :

    include('config.php');
    include('lang.php');
    $home_page    = 'HOME';
    $current_page = 'TRANSPORT';
    $parent_page  = '';
    $alter_massage = ''; 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') :

        $path               = $_POST['path'];
        $vehicle_number     = $_POST['vehicle_number'];
        $driver_name        = $_POST['driver_name'];
        $licence_number     = $_POST['licence_number'];
        $driver_number      = $_POST['driver_number'];

        $sql = "INSERT INTO `transport` (`path`,`vehicle_number`,`driver_name`,`licence_number`) 
                                 VALUES ('$path','$vehicle_number','$driver_name','$licence_number')";
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
                    <!-- Add Transport Area Start Here -->
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3> <?php echo lang('ADD_NEW_TRANSPORT'); ?> </h3>
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
                                <form class="new-added-form" action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="POST" enctype="multipart/form-data" >
                                    <div class="row">
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label>  <?php echo lang('PATH'); ?>  </label>
                                            <input type="text" placeholder="" class="form-control" name="path">
                                        </div>
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label> <?php echo lang('VEHICLE_NUM'); ?> </label>
                                            <input type="text" placeholder="" class="form-control" name="vehicle_number">
                                        </div>
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label> <?php echo lang('DRIVER_NAME'); ?> </label>
                                            <input type="text" placeholder="" class="form-control" name="driver_name">
                                        </div>
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label> <?php echo lang('LICENSE_NUM'); ?> </label>
                                            <input type="text" placeholder="" class="form-control" name="licence_number">
                                        </div>
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label> <?php echo lang('PHONE_NUM'); ?> </label>
                                            <input type="text" placeholder="" class="form-control" name="driver_number">
                                        </div>
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark"> <?php echo lang('SAVE'); ?> </button>
                                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow"> <?php echo lang('RESET'); ?> </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Add Transport Area End Here -->
                    <!-- All Transport List Area Start Here -->
                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3><?php echo lang('TRANSPORT_LISTS'); ?></h3>
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
                                <form class="mg-b-20">
                                    <div class="row gutters-8">
                                        <div class="col-lg-4 col-12 form-group">
                                            <input type="text" placeholder=" <?php echo lang('SEARCH_BY_ROUTE'); ?> " class="form-control">
                                        </div>
                                        <div class="col-lg-3 col-12 form-group">
                                            <input type="text" placeholder=" <?php echo lang('SEARCH_BY_ID_NUM'); ?> "
                                                class="form-control">
                                        </div>
                                        <div class="col-lg-3 col-12 form-group">
                                            <input type="text" placeholder=" <?php echo lang('SEARCH_BY_PHONE'); ?> " class="form-control">
                                        </div>
                                        <div class="col-lg-2 col-12 form-group">
                                            <button type="submit"
                                                class="fw-btn-fill btn-gradient-yellow"><?php echo lang('SEARCH'); ?></button>
                                        </div>
                                    </div>
                                </form>
                                <div class="table-responsive">
                                    <table class="table display data-table text-nowrap">
                                        <thead>
                                            <tr>
                                                <!-- <th>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input checkAll">
                                                        <label class="form-check-label">  </label>
                                                    </div>
                                                </th> -->
                                                <th> <?php echo lang('PATH');           ?></th>
                                                <th> <?php echo lang('VEHICLE_NUM');    ?> </th>
                                                <th> <?php echo lang('DRIVER_NAME');    ?> </th>
                                                <th> <?php echo lang('LICENSE_NUM');    ?> </th>
                                                <th> <?php echo lang('PHONE_NUM');      ?> </th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                            $sql = "SELECT * FROM `transport`";
                                            $res =  mysqli_query($connect, $sql);
                                            if ($res) {
                                                $count = mysqli_num_rows($res);
                                                if ($count > 0 ) :
                                                    while ($row = mysqli_fetch_array($res)) :
                                        ?>

                                                    <tr>
                                                        <td> <?php echo $row['path'];           ?> </td>
                                                        <td> <?php echo $row['vehicle_number']; ?> </td>
                                                        <td> <?php echo $row['driver_name']; ?>  </td>
                                                        <td> <?php echo $row['licence_number']; ?> </td>
                                                        <td> <?php echo $row['driver_number']; ?> </td>
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
                    </div>
                    <!-- All Transport List Area End Here -->
                </div>
                <!-- All Subjects Area End Here -->
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