<?php
ob_start();
session_start();  
if (isset($_SESSION['user_username']) ) :
    if ($_SESSION['user_group_id'] == '1' )  :

    include('config.php');
    include('lang.php');
    $home_page    = 'HOME';
    $current_page = 'ADD_EXPENSE';
    $parent_page  = 'FEES';
    $alter_massage = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') :

        $name           = $_POST['name'];
        $id_number      = $_POST['id_number'];
        $expense_type   = $_POST['expense_type'];
        $quantity       = $_POST['quantity'];
        $phone          = $_POST['phone'];
        $email          = $_POST['email'];
        $status         = $_POST['status'];
        $date           = $_POST['date'];



        $sql = "INSERT INTO `expense` (`name`, `id_number`, `expense_type`, `quantity`, `phone`, `email`, `status`, `date`)
                              VALUES  ('$name','$id_number','$expense_type','$quantity','$phone','$email','$status','$date');";


        if (mysqli_query($connect, $sql) ) :
                $alter_massage =  "successfully registered";
        else :
            $alter_massage =  "Failed to register " . "<br>" . mysqli_error($connect);
        endif;
    
        mysqli_close($connect);

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
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="css/datepicker.min.css">
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
                <!-- Add Expense Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3> <?php echo lang('ADD_NEW_EXPENSE'); ?> </h3>
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
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('NAME'); ?>  *</label>
                                    <input type="text" placeholder="" class="form-control" name="name">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('ID_NUMBER'); ?>  *</label>
                                    <input type="text" placeholder="" class="form-control" name="id_number">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('EXPANSE_TYPE'); ?>  *</label>
                                    <select class="select2" name="expense_type">
                                        <option value="">Please Select</option>
                                        <option value="1">Salary</option>
                                        <option value="2">Transport</option>
                                        <option value="3">Maintanance</option>
                                        <option value="3">Purchase</option>
                                        <option value="3">Utilities</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('AMOUNT'); ?>  *</label>
                                    <input type="text" placeholder="" class="form-control" name="quantity">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('PHONE'); ?> </label>
                                    <input type="text" placeholder="" class="form-control" name="phone">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('EMAIL'); ?> </label>
                                    <input type="text" placeholder="" class="form-control" name="email">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('STATUS'); ?> </label>
                                    <select class="select2" name="status">
                                        <option value="0">Please Select</option>
                                        <option value="1">Paid</option>
                                        <option value="2">Due</option>
                                        <option value="3">Others</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> <?php echo lang('DATE'); ?> </label>
                                    <input type="text" placeholder="yyyy/mm/dd" data-date-format="yyyy/mm/dd" class="form-control air-datepicker" data-position="bottom right" name="date">
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark"> <?php echo lang('SAVE') ?> </button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow"> <?php echo lang('RESET') ?> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Add Expense Area End Here -->
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
    <!-- Date Picker Js -->
    <script src="js/datepicker.min.js"></script>
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