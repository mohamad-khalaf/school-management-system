<?php
ob_start();
session_start();  
if (isset($_SESSION['user_username']) :
    if ($_SESSION['user_group_id'] == '1' ) ) :

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


<!-- Custom RTL CSS -->
<?php if ($dir == "rtl") echo '<link rel="stylesheet" href="style.rtl.css">'; ?>

<?php include('layout/header.php') ?>
<?php include('layout/sidebar.php'); ?>
<?php include('layout/breadcrumbs-area.php'); ?>
<?php include('layout/footer.php'); ?>




<?php
    elseif ($_SESSION['user_group_id'] == '2' ) ) :
        header('Location: index5.php'); 
        exit();
    elseif ($_SESSION['user_group_id'] == '3' ) ) :
        header('Location: index4.php'); 
        exit();
    elseif ($_SESSION['user_group_id'] == '4' ) ) :
        header('Location: index3.ph'); 
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

<div class="col-12 form-group mg-t-8">
    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark"> <?php echo lang('SAVE') ?> </button>
    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow"> <?php echo lang('RESET') ?> </button>
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

<?php echo lang('STUDENT_ATTENDANCE'); ?>