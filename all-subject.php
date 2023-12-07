<?php
ob_start();
session_start();  
if (isset($_SESSION['user_username']) ) :
    if ($_SESSION['user_group_id'] == '1' || $_SESSION['user_group_id'] == '2' || $_SESSION['user_group_id'] == '4'  )  :

    include('config.php');
    include('lang.php');
    $home_page    = 'HOME';
    $current_page = 'ALL_SUBJECTS';
    $parent_page  = 'SUBJECTS';
    $alter_massage = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') :

        $subject_name   = $_POST['subject_name'];

        $sql = "INSERT INTO `subjects` (`subject_name`) VALUES  ('$subject_name');";
        
        if(mysqli_query($connect, $sql)) :
            $alter_massage =  "successfully registered";
        else :
            $alter_massage =  "Failed to register";
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
                <!-- All Subjects Area Start Here -->
                <div class="row">
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3> <?php echo lang('ADD_NEW_SUBJECT'); ?> </h3>
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
                                <form class="new-added-form" action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="POST">
                                    <div class="row">
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Subject Name *</label>
                                            <input type="text" placeholder="" class="form-control" name="subject_name">
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Subject Type *</label>
                                            <select class="select2" name="subject_type">
                                                <option value="">Please Select</option>
                                                <option value="1">Bangla</option>
                                                <option value="2">English</option>
                                                <option value="3">Mathematics</option>
                                                <option value="3">Economics</option>
                                                <option value="3">Chemistry</option>
                                            </select>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Select Class *</label>
                                            <select class="select2" name="class">
                                                <option value="0">Please Select</option>
                                                <option value="1">Play</option>
                                                <option value="2">Nursery</option>
                                                <option value="3">One</option>
                                                <option value="3">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Select Code</label>
                                            <select class="select2" name="code">
                                                <option value="0">Please Select</option>
                                                <option value="1">00524</option>
                                                <option value="2">00525</option>
                                                <option value="3">00526</option>
                                                <option value="3">00527</option>
                                                <option value="3">00528</option>
                                            </select>
                                        </div>
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>All Subjects</h3>
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
                                                        <label class="form-check-label">ID</label>
                                                    </div>
                                                </th>
                                                <th>Subject Name</th>
                                                <th>Subject Type</th>
                                                <th>Class</th>
                                                <th>Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $sql = "SELECT * FROM `subjects`";
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
                                                            <td> <?php echo $row['subject_name'];   ?> </td>
                                                            <td> <?php echo $row['subject_type'];   ?> </td>
                                                            <td> <?php echo $row['class'];          ?> </td>
                                                            <td> <?php echo $row['date'];           ?> </td>
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