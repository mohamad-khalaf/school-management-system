<?php
    ob_start();
    session_start();  
    include('config.php');
    include('lang.php');
	// ==================================================================================== Start PHP_MAILER 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    function send_mail($parent_email, $student_name, $student_code) {
        require './libs/mailer/Exception.php';
        require  "./libs/mailer/PHPMailer.php";
        require  "./libs/mailer/SMTP.php";

        $mail = new PHPMailer(true);
        $mail->isSMTP();   
        $mail->Host       	= 'smtp.gmail.com';
        $mail->SMTPAuth   	= true;
        $mail->CharSet   	= "UTF-8";
        $mail->SMTPSecure 	= 'tls';
        $mail->Port       	= '587';
        $mail->Username   	= 'mohamadalkhlaf1@gmail.com';
        $mail->Password   	= 'mbjtisiragfjgzao'; 
        $mail->Subject 		= '  التسجيل الالكتروني مدارس المجد  ';
        $mail->Body 		=  "عزيزي ولي الأمر تم تسجيل الطالبـ/ـة ( ahmed ) في مدارس المجد الأهلية بنجاح ،، رقم مرجعي ( 111111 ) نسعد بخدمتكم 920008733)";
        $mail->setFrom('mohamadalkhlaf1@gmail.com', 'مدارس المجد الأهلية- info@almajd.edu.sa');
        $mail->addAddress("parent_email", 'مدارس المجد'); 
        $email_resulte = $mail->send() ? "تم التسجيل " : "فشل التسجيل  " . $mail->ErrorInfo;
        $mail->smtpClose();
    }
	// ==================================================================================== END PHP_MAILER 

    $home_page    = 'HOME';
    $current_page = 'E-REGESTRTION';
    $parent_page  = '';
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
                <div class="dashboard-content-one">
                    <!-- Breadcubs Area Start Here -->
                    <?php include('layout/breadcrumbs-area.php'); ?>
                    <!-- Breadcubs Area End Here -->
                    <!-- Add Class Area Start Here -->
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3> <?php echo lang('E-RESGETR_STUDENT_TEMPALTE'); ?>  </h3>
                                </div>
                            </div>
                            <form class="new-added-form" action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="POST">
                                <div class="row">
                                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 col-12 form-group">
                                        <label> <?php echo lang('TEACHER_NAME'); ?>  *</label>
                                        <input type="text" placeholder="" id="test" class=" form-control" name="teacher_name">
                                    </div>
                                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 col-12 form-group">
                                        <label> <?php echo lang('ID_NUMBER'); ?> </label>
                                        <input type="text" placeholder="" class="form-control" name="id_number">
                                    </div>
                                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 col-12 form-group">
                                        <label> <?php echo lang('GENDER'); ?>  *</label>
                                        <select class="select2" name="gender">
                                        <option value="0">Please Select Gender *</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 col-12 form-group">
                                        <label> <?php echo lang('CLASS'); ?> </label>
                                        <select class="select2" name="class">
                                            <option value="">Please Select</option>
                                            <option value="1">Play</option>
                                            <option value="2">Nursery</option>
                                            <option value="3">One</option>
                                            <option value="3">Two</option>
                                            <option value="3">Three</option>
                                            <option value="3">Four</option>
                                            <option value="3">Five</option>
                                        </select>
                                    </div>
                                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 col-12 form-group">
                                        <label> <?php echo lang('SUBJECT'); ?>  *</label>
                                        <select class="select2" name="subject">
                                            <option value="">Please Select*</option>
                                            <option value="1">English</option>
                                            <option value="2">Mathmethics</option>
                                            <option value="3">Physics</option>
                                            <option value="3">Chemestry</option>
                                            <option value="3">Biology</option>
                                        </select>
                                    </div>
                                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 col-12 form-group">
                                        <label> <?php echo lang('SECTION'); ?>  *</label>
                                        <select class="select2" name="season">
                                            <option value="">Please Select *</option>
                                            <option value="1">Pink</option>
                                            <option value="2">Blue</option>
                                            <option value="3">Bird</option>
                                            <option value="3">Rose</option>
                                            <option value="3">Red</option>
                                        </select>
                                    </div>
                                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 col-12 form-group">
                                        <label> <?php echo lang('TIME'); ?>  *</label>
                                        <input type="text" placeholder="" class="form-control" name="time">
                                    </div>
                                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 col-12 form-group">
                                        <label> <?php echo lang('DATE'); ?> *</label>
                                        <input type="text" placeholder="yyyy/mm/dd" class="form-control air-datepicker"  data-date-format="yyyy/mm/dd" data-position="bottom right" name="date">
                                        <i class="far fa-calendar-alt"></i>
                                    </div>
                                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 col-12 form-group">
                                        <label> <?php echo lang('PHONE'); ?>  *</label>
                                        <input type="text" placeholder="" class="form-control" name="phone">
                                    </div>
                                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 col-12 form-group">
                                        <label> <?php echo lang('EMAIL'); ?>  *</label>
                                        <input type="email" placeholder="" class="form-control" name="email">
                                    </div>
                                    <div class="col-md-6 form-group"></div>
                                    <div class="col-12 form-group mg-t-8">
                                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark"> <?php echo lang('SAVE') ?> </button>
                                        <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow"> <?php echo lang('RESET') ?> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Add Class Area End Here -->
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
        <script src="js/input-check.js"></script>
        <!-- Custom Js -->
        <script src="js/main.js"></script>

    </body>

    </html>
<?php
ob_end_flush();
?>
