<?php
ob_start();
session_start();  
if (isset($_SESSION['user_username']) ) :
    if ($_SESSION['user_group_id'] == '2' )  :

    include('config.php');
    include('lang.php');
    $home_page    = 'HOME';
    $current_page = 'TEACHER_DETAILS';
    $parent_page  = 'TEACHERS';
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
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3> <?php echo lang('ABOUT_ME'); ?> </h3>
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
                        <div class="single-info-details">
                            <div class="item-img">
                                <img src="img/figure/teacher.jpg" alt="teacher">
                            </div>
                            <div class="item-content">
                                <?php
                                    $sql = "SELECT * FROM `teachers`";
                                    $res =  mysqli_query($connect, $sql);
                                    if ($res) {
                                        $count = mysqli_num_rows($res);
                                        if ($count > 0 ) :
                                            $row = mysqli_fetch_array($res);
                                                
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
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium"> <?php ECHO $row['name']; ?>  </h3>
                                    <div class="header-elements">
                                        <ul>
                                            <li><a href="#"><i class="far fa-edit"></i></a></li>
                                            <li><a href="#"><i class="fas fa-print"></i></a></li>
                                            <li><a href="#"><i class="fas fa-download"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p> <?php echo lang('SHORT_BIO'); ?> </p>
                                <div class="info-table table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>

                                            <tr>
                                                <td> <?php echo lang('NAME'); ?> </td>
                                                <td class="font-medium text-dark-medium"> <?php ECHO $row['name']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td> <?php echo lang('GENDER'); ?> </td>
                                                <td class="font-medium text-dark-medium"> <?php ECHO $row['gender']; ?> </td>
                                            </tr>

                                            <tr>
                                                <td> <?php echo lang('RELIGION'); ?> </td>
                                                <td class="font-medium text-dark-medium"> <?php ECHO $row['religion']; ?> </td>
                                            </tr>

                                            <tr>
                                                <td> <?php echo lang('EMAIL'); ?> </td>
                                                <td class="font-medium text-dark-medium"> <?php ECHO $row['email']; ?> </td>
                                            </tr>

                                            <tr>
                                                <td> <?php echo lang('SUBJECT'); ?> </td>
                                                <td class="font-medium text-dark-medium"> <?php ECHO $row['section']; ?> </td>
                                            </tr>

                                            <tr>
                                                <td> <?php echo lang('ADDRESS'); ?> </td>
                                                <td class="font-medium text-dark-medium"> <?php ECHO $row['address']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td> <?php echo lang('PHONE'); ?> </td>
                                                <td class="font-medium text-dark-medium"> <?php ECHO $row['phone']; ?> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>

</html>
<?php
    elseif ($_SESSION['user_group_id'] == '1' )  :
        header('Location: index.php'); 
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