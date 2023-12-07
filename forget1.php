<?php

    ob_start();
    session_start();  
    include('config.php');
    include('lang.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require './libs/php_mailer/Exception.php';
    require  "./libs/php_mailer/PHPMailer.php";
    require  "./libs/php_mailer/SMTP.php";

    $home_page      = 'HOME';
    $current_page   = 'FORGET';
    $parent_page    = '';
    $alter_massage  = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') :

        $member = $_POST['member'];

        $sql = "SELECT `email` FROM `users`  WHERE  `email` = '$member' ";
        $res = mysqli_query($connect, $sql);
        $count = mysqli_num_rows($res);



        if ($count > 0  ) {
        

            $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
            $password_recovery_token = '';
            $length = 97;  
            for ($i = 0; $i < $length; $i++) :
                 $password_recovery_token .= $characters[rand(0, strlen($characters) - 1)]; 
            endfor;

            $time = date('Y-m-d H:i:s');
            // expire the token after 12 hours
            $RESET_TOKEN_LIFE = '12 hours';
            $expireAt = date('Y-m-d H:i:s', strtotime($time . ' + ' . $RESET_TOKEN_LIFE));

            $sql = "INSERT INTO `password_reset` (`id`, `member`, `password_recovery_token`, `expire_at`, `is_valid`, `create_at`) 
                                            VALUES (NULL, '$member', '$password_recovery_token', '$expireAt', '1', CURRENT_TIMESTAMP);";
            $res = mysqli_query($connect, $sql);



            // -------------------------------------------------------------------------------- Start Sending EMAIL 
            $mail = new PHPMailer(true);
            $mail->isSMTP();   
            $mail->Host       	= 'smtp.gmail.com';
            $mail->SMTPAuth   	= true;
            $mail->CharSet   	= "UTF-8";
            $mail->SMTPSecure 	= 'tls';
            $mail->Port       	= '587';
            $mail->Username   	= 'mohamadalkhlaf1@gmail.com';
            $mail->Password   	= 'mbjtisiragfjgzao'; 
            $mail->Subject 		= '  أعادة تعيين كلمة السر ';
            $mail->Body 		=  "<br>رابط أستعادة كلمة السر <br>" . "http://localhost/Cleints/school/rest-password.php?token=$password_recovery_token"; 
            $mail->setFrom('mohamadalkhlaf1@gmail.com', 'تطبيق ادارة المدرسة ');
            $mail->addAddress("mohamadalkhlaf1@gmail.com", 'عنوان اضافي هنا '); 

            if ($mail->send())  $alter_massage = "تم أرسال الرمز  الى " . $member;
            else  $results = "فشل في ارسال الرمز  " . $mail->ErrorInfo;

        //     $mail->smtpClose();

        } else {
            $alter_massage = "البريد المدخل غير صحيحح";
        }

    endif;
?>




<!doctype html>
<html class="no-js" lang="<?php echo $lang; ?>" dir="<?php echo $dir?>" >
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
    <!-- Login Page Start Here -->
    <div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo">
                    <img src="img/logo2.png" alt="logo">
                </div>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="login-form">
                    <div class="form-group">
                        <label> <?php echo lang('EMAIL'); ?> </label>
                        <input name="member" type="text" placeholder="<?php echo lang('ENTER_EMAIL'); ?> " class="form-control">
                        <i class="far fa-envelope"></i>
                    </div>

                    <div class="form-group d-flex align-items-center justify-content-between">
                        <a href="login.php" class="forgot-btn"> <?php echo lang('LOGIN');?>  </a>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="login-btn"> <?php echo lang('FORGET_PASSWORD');?> </button>
                    </div>
                </form>
                <!-- <div class="login-social">
                    <p>or sign in with</p>
                    <ul>
                        <li><a href="#" class="bg-fb">      <i class="fab fa-facebook-f">   </i></a></li>
                        <li><a href="#" class="bg-twitter"> <i class="fab fa-twitter">      </i></a></li>
                        <li><a href="#" class="bg-gplus">   <i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#" class="bg-git">     <i class="fab fa-github">       </i></a></li>
                    </ul>
                </div> -->
            </div>
            <div class="sign-up">Don't have an account ? <a href="#">Signup now!</a></div>
        </div>
    </div>
    <!-- Login Page End Here -->
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

<?php ob_end_flush(); ?>