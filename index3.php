<?php 
ob_start();
session_start();  
if (isset($_SESSION['user_username']) ) :
    if ($_SESSION['user_group_id'] == '4' )  :

    include('config.php');
    include('lang.php');
    $home_page    = 'HOME';
    $parent_page  = 'STUDENTS';
    $current_page = 'STUDENT';
    $alter_massage = '';
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
        <!-- Full Calender CSS -->
        <link rel="stylesheet" href="css/fullcalendar.min.css">
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
                    <div class="row">
                        <!-- Student Info Area Start Here -->
                        <div class="col-4-xxxl col-12">
                            <div class="card dashboard-card-ten">
                                <div class="card-body">
                                    <div class="heading-layout1">
                                        <div class="item-title">
                                            <h3>About Me</h3>
                                        </div>
                                        <!-- <div class="dropdown"> __edit_future__
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
                                        </div> -->
                                    </div>
                                    <div class="student-info">

                                        <?php
                                            $sql = "SELECT * FROM `students`";
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
                                        ?>





                                        <div class="media media-none--xs">
                                            <div class="item-img">
                                                <img src="assets/img/student-img/123456789.jpg" class="media-img-auto" alt="student">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="item-title"> <?php echo $row['ar_name']; ?> </h3>
                                                <h3 class="item-title"> <?php echo $row['en_name']; ?> </h3>
                                                <p> <?php echo $row['bio']; ?> </p>
                                            </div>
                                        </div>
                                        <div class="table-responsive info-table">
                                            <table class="table text-nowrap">
                                                <tbody>
                                                    <tr>
                                                        <td>arabic Name:</td>
                                                        <td class="font-medium text-dark-medium"><?php echo $row['ar_name']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Name:</td>
                                                        <td class="font-medium text-dark-medium"><?php echo $row['en_name']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gender:</td>
                                                        <td class="font-medium text-dark-medium"><?php echo $row['gender']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Father Name:</td>
                                                        <td class="font-medium text-dark-medium"><?php echo $row['parent_name']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mother Name:</td>
                                                        <td class="font-medium text-dark-medium"><?php echo $row['mother_name']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date Of Birth:</td>
                                                        <td class="font-medium text-dark-medium"><?php echo $row['birthday']; ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>E-Mail:</td>
                                                        <td class="font-medium text-dark-medium"><?php echo $row['email']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Class:</td>
                                                        <td class="font-medium text-dark-medium"><?php echo $row['class']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Season:</td>
                                                        <td class="font-medium text-dark-medium"><?php echo $row['season']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Adress:</td>
                                                        <td class="font-medium text-dark-medium"><?php echo $row['address']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Phone:</td>
                                                        <td class="font-medium text-dark-medium"><?php echo $row['phone']; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Student Info Area End Here -->
                        <div class="col-8-xxxl col-12">
                            <div class="row">
                                <!-- Summery Area Start Here -->
                                <div class="col-lg-4">
                                    <div class="dashboard-summery-one">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="item-icon bg-light-magenta">
                                                    <i class="flaticon-shopping-list text-magenta"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="item-content">
                                                    <div class="item-title">Notification</div>
                                                    <div class="item-number"><span class="counter" data-num="12">12</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="dashboard-summery-one">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="item-icon bg-light-blue">
                                                    <i class="flaticon-calendar text-blue"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="item-content">
                                                    <div class="item-title">Events</div>
                                                    <div class="item-number"><span class="counter" data-num="06">06</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="dashboard-summery-one">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="item-icon bg-light-yellow">
                                                    <i class="flaticon-percentage-discount text-orange"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="item-content">
                                                    <div class="item-title">Attendance</div>
                                                    <div class="item-number"><span class="counter" data-num="94">94</span><span>%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Summery Area End Here -->
                                <!-- Exam Result Area Start Here -->
                                <div class="col-lg-12">
                                    <div class="card dashboard-card-eleven">
                                        <div class="card-body">
                                            <div class="heading-layout1">
                                                <div class="item-title">
                                                    <h3> <?php echo lang('ALL_EXAM_RESULTS'); ?> </h3>
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
                                                                <!-- <th>ID</th> -->
                                                                <th>Exam Name</th>
                                                                <th>Subject</th>
                                                                <th>Grade</th>
                                                                <th>Percent</th>
                                                                <th>Date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        <?php
                                                            $sql = "SELECT * from `exams` 
                                                                    JOIN `students` 
                                                                    on `students`.`id` = `exams`.`student_id` 
                                                                    WHERE `students`.`id` = '1' ";

                                                            $res = mysqli_query($connect, $sql);

                                                            $count = mysqli_num_rows($res);
                                                            if ($count > 0) :

                                                                
                                                                while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC) ) :
    
                                                        ?>
                                                                    <tr>
                                                                        <!-- <td> <?php // echo $row['id'];         ?>  </td> الرقم هنا يبقى واحد  --> 
                                                                        <td> <?php echo $row['exam_name'];  ?> </td>
                                                                        <td> <?php echo $row['subject'];    ?> </td>
                                                                        <td> <?php echo $row['grade'];      ?> </td>
                                                                        <td> <?php echo $row['percent'];    ?> </td>
                                                                        <td> <?php echo $row['date'];       ?> </td>
                                                                    </tr>
                                                        <?php
                                                                endwhile;

                                                            else :
                                                                echo "no data";
                                                            endif;
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Exam Result Area End Here -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4-xxxl col-xl-6 col-12">
                            <div class="card dashboard-card-three">
                                <div class="card-body">
                                    <div class="heading-layout1">
                                        <div class="item-title">
                                            <h3> <?php echo lang('ATTENDANCE'); ?> </h3>
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
                                    <div class="doughnut-chart-wrap">
                                        <canvas id="student-doughnut-chart" width="100" height="270"></canvas>
                                    </div>
                                    <div class="student-report">
                                        <div class="student-count pseudo-bg-blue">
                                            <h4 class="item-title">  <?php echo lang('ABSENT'); ?>  </h4>
                                            <div class="item-number">28.2%</div>
                                        </div>
                                        <div class="student-count pseudo-bg-yellow">
                                            <h4 class="item-title">  <?php echo lang('PRESENT'); ?>  </h4>
                                            <div class="item-number">65.8%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4-xxxl col-xl-6 col-12">
                            <div class="card dashboard-card-thirteen">
                                <div class="card-body">
                                    <div class="heading-layout1">
                                        <div class="item-title">
                                            <h3> <?php echo lang('EVENT_CALENDER'); ?>   </h3>
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
                                    <div class="calender-wrap">
                                        <div id="fc-calender" class="fc-calender"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4-xxxl col-12">
                            <div class="card dashboard-card-six">
                                <div class="card-body">
                                    <div class="heading-layout1 mg-b-17">
                                        <div class="item-title">
                                            <h3>  <?php echo lang('NOTIFICATION'); ?> </h3>
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
                                    <div class="notice-box-wrap">
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
                                            <div class="post-date bg-skyblue">16 June, 2019</div>
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
                                            <div class="post-date bg-pink">16 June, 2019</div>
                                            <h6 class="notice-title"><a href="#">Great School manag meneesom.</a></h6>
                                            <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Area Start Here -->
                    <?php include('layout/footer.php'); ?>
                    <!-- Footer Area End Here -->
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
        <!-- Moment Js -->
        <script src="js/moment.min.js"></script>
        <!-- Waypoints Js -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- Scroll Up Js -->
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- Full Calender Js -->
        <script src="js/fullcalendar.min.js"></script>
        <!-- Chart Js -->
        <script src="js/Chart.min.js"></script>
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
    elseif ($_SESSION['user_group_id'] == '1' )  :
        header('Location: index.php'); 
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