<?php  if ($_SESSION['user_group_id'] == '1' || $_SESSION['user_group_id'] == '2' ) {
    // $fn =  lang('ADD') . " " .  lang('STUDENT'); // change just this
    //     echo <<<"add_student_link"
    //     <li class="nav-item">
    //         <a href="add-student.php" class="nav-link">
    //             <i class="fas fa-angle-right"></i>  
    //             $fn
    //         </a>
    //     </li>
    // add_student_link;
}
?>
<div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
    <div class="mobile-sidebar-header d-md-none">
        <div class="header-logo">
            <a href="index.php"><img src="img/logo1.png" alt="logo"></a>
        </div>
    </div>
    <div class="sidebar-menu-content">
        <ul class="nav nav-sidebar-menu sidebar-toggle-view">

            <!-- Dashboard  -->
            <?php  if ($_SESSION['user_group_id'] == '1' || $_SESSION['user_group_id'] == '2' || $_SESSION['user_group_id'] == '3' || $_SESSION['user_group_id'] == '4' ) { ?>

                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link">
                        <i class="flaticon-dashboard"></i>
                        <span> <?php echo lang('DASHBOARD'); ?> </span>
                    </a>

                    <ul class="nav sub-group-menu">

                        <?php if($_SESSION['user_group_id'] == '1'): ?>
                            <li class="nav-item">
                                <a href="index.php" class="nav-link">
                                    <i class="fas fa-angle-right"></i> 
                                    <?php echo lang('ADMIN'); ?> 
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if($_SESSION['user_group_id'] == '4'): ?>
                            <li class="nav-item">
                                <a href="index3.php" class="nav-link">
                                    <i class="fas fa-angle-right"></i>
                                    <?php echo lang('STUDENTS'); ?>
                                </a>
                            </li>
                        <?php endif; ?>
                        
                        <?php if($_SESSION['user_group_id'] == '3'): ?>
                            <li class="nav-item">
                                <a href="index4.php" class="nav-link">
                                    <i class="fas fa-angle-right"></i>
                                    <?php echo lang('PARENTS'); ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if($_SESSION['user_group_id'] == '2'): ?>
                            <li class="nav-item">
                                <a href="index5.php" class="nav-link">
                                    <i class="fas fa-angle-right"></i>
                                    <?php echo lang('TEACHERS'); ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php } ?>

            <!-- Students  -->
            <?php  if ($_SESSION['user_group_id'] == '1' || $_SESSION['user_group_id'] == '1' ) {    ?>                
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link">
                        <i class="flaticon-classmates"></i>
                        <span> <?php echo lang('STUDENTS')?> </span>
                    </a>
                    <ul class="nav sub-group-menu">
                        <?php  if ($_SESSION['user_group_id'] == '1' ) {    ?>                
                            <li class="nav-item">
                                <a href="all-student.php" class="nav-link">
                                    <i class="fas fa-angle-right"></i>
                                    <?php echo lang('STUDENTS')?>
                                </a>
                            </li>

                                <li class="nav-item">
                                    <a href="add-student.php" class="nav-link">
                                        <i class="fas fa-angle-right"></i>  
                                        <?php echo lang('ADD_NEW_STUDENT');?>
                                    </a>
                                </li>
                    
                                <li class="nav-item">
                                    <a href="student-promotion.php" class="nav-link">
                                        <i class="fas fa-angle-right"></i>
                                        <?php echo lang('PROMOTION_STUDENTS');?>
                                        </a>
                                </li>
                            <?php } ?> 

                            <?php  if ($_SESSION['user_group_id'] == '4' || $_SESSION['user_group_id'] == '3' ) {    ?> 
                                <li class="nav-item">
                                    <a href="student-details.php" class="nav-link">
                                        <i class="fas fa-angle-right"></i>
                                        <?php echo lang('STUDENT_DETAILS'); ?>
                                    </a>
                                </li>
                            <?php } ?> 

                    </ul>
                </li>
            <?php } ?>

            <!-- Teacher  -->
            <?php  if ($_SESSION['user_group_id'] == '1' || $_SESSION['user_group_id'] == '2' ) { ?>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link">
                        <i class="flaticon-multiple-users-silhouette"> </i>
                        <span> <?php echo lang('TEACHERS'); ?> </span>
                    </a>
                    <ul class="nav sub-group-menu">
                        <?php  if ($_SESSION['user_group_id'] == '1') { ?>
                            <li class="nav-item">
                                <a href="all-teacher.php" class="nav-link">
                                    <i class="fas fa-angle-right"></i>
                                    <?php echo lang('ALL_TEACHERS');?> 
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="add-teacher.php" class="nav-link">
                                    <i class="fas fa-angle-right"></i>
                                    <?php echo lang('ADD_NEW_TEACHER'); ?> 
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="teacher-payment.php" class="nav-link">
                                    <i class="fas fa-angle-right"></i>
                                    <?php echo lang('PAYMENT_TEACHERS'); ?>
                                </a>
                            </li>
                        <?php } ?> 

                        <?php  if ($_SESSION['user_group_id'] == '2' ) { ?>
                            <li class="nav-item">
                                <a href="teacher-details.php" class="nav-link">
                                    <i class="fas fa-angle-right"></i>
                                    <?php echo lang('TEACHER_DETAILS') ?> 
                                </a>
                            </li>          
                        <?php } ?> 
                    </ul>
                </li>
            <?php } ?> 

            <!-- Parents  -->
            <?php  if ($_SESSION['user_group_id'] == '1' || $_SESSION['user_group_id'] == '3') { ?>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link">
                        <i class="flaticon-couple"></i>
                        <span> <?php echo lang('PARENTS'); ?> </span>
                    </a>
                    <ul class="nav sub-group-menu">
                        <?php  if ($_SESSION['user_group_id'] == '1' ) { ?>
                            <li class="nav-item">
                                <a href="all-parents.php" class="nav-link">
                                    <i class="fas fa-angle-right"></i>
                                    <?php echo lang('ALL_PARENTS');?>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="add-parents.php" class="nav-link">
                                    <i class="fas fa-angle-right"></i>
                                    <?php echo lang('ADD_NEW_PARENT');?>
                                </a>
                            </li>
                        <?php } ?>
                        
                        <?php  if ($_SESSION['user_group_id'] == '3' ) { ?>
                            <li class="nav-item">
                                <a href="parents-details.php" class="nav-link">
                                    <i class="fas fa-angle-right"></i>
                                    <?php echo lang('PARENTS_DETAILS'); ?>
                                </a>
                            </li>  
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>

            <!-- Library  -->
            <?php  if ($_SESSION['user_group_id'] == '1' ) { ?>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link">
                        <i class="flaticon-books"></i>
                        <span><?php echo lang('LIBRARY') ?> </span>
                    </a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="all-book.php" class="nav-link">
                                <i class="fas fa-angle-right"></i>
                                <?php ECHO lang('ALL_BOOKS');?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="add-book.php" class="nav-link">
                                <i class="fas fa-angle-right"></i>
                                <?php ECHO lang('ADD_NEW_BOOK');?>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php } ?>

            <!-- ACCOUNTS -->
            <?php  if ($_SESSION['user_group_id'] == '1' ) { ?>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link">
                        <i class="flaticon-technological"></i>
                        <span><?php ECHO lang('FEES') ?> </span>
                    </a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="all-fees.php" class="nav-link">
                                <i class="fas fa-angle-right"></i>
                                <?php  echo lang('ALL_FEES');?> 

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="all-expense.php" class="nav-link">
                                <i Class="fas fa-angle-right"></i>
                                <?php echo lang('ALL_EXPENSES');?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="add-expense.php" class="nav-link">
                                <i class="fas fa-angle-right"></i>
                                <?php ECHO lang('ADD_EXPENSE') ?> 
                            </a>
                        </li>
                    </ul>
                </li>
            <?php } ?>

            <!-- CLASS  -->
            <?php  if ($_SESSION['user_group_id'] == '1' ) { ?>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link">
                        <i class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
                        <span> <?php echo lang('CLASSES'); ?></span>
                    </a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="all-class.php" class="nav-link">
                                <i class="fas fa-angle-right"></i>
                                <?php echo lang('ALL_CLASSES');?> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="add-class.php" class="nav-link">
                                <i class="fas fa-angle-right"></i>
                                <?php echo lang('ADD_NEW_CLASS');?>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php } ?>

            <!-- SUBJECTS -->
            <?php  if ($_SESSION['user_group_id'] == '1' ) { ?>
                <li class="nav-item">
                    <a href="all-subject.php" class="nav-link"> 
                        <i class="flaticon-open-book"></i>
                        <span><?php echo lang('SUBJECTS'); ?></span>
                    </a>
                </li>
            <?php } ?>

            <!-- CLASS ROUTINE -->
            <?php  if ($_SESSION['user_group_id'] == '1') { ?> 
                <li class="nav-item">
                    <a href="class-routine.php" class="nav-link">
                        <i class="flaticon-calendar"></i>
                        <span> <?php echo lang('CLASS_ROUTINE'); ?></span> 
                    </a>
                </li>
            <?php } ?>

            <!-- ATTENDANCE -->
            <?php  if ($_SESSION['user_group_id'] == '1' || $_SESSION['user_group_id'] == '2' ) { ?>
                <li class="nav-item">
                    <a href="student-attendance.php" class="nav-link">
                        <i class="flaticon-checklist"></i> 
                        <span> <?php echo lang('ATTENDANCE') ?> </span>
                    </a>
                </li>
            <?php } ?>

            <!-- EXAMS  -->
            <?php  if ($_SESSION['user_group_id'] == '1' || $_SESSION['user_group_id'] == '2' ) {  ?>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link">
                        <i class="flaticon-shopping-list"></i>
                        <span> <?php echo lang('EXAMS'); ?> </span>
                    </a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="exam-schedule.php" class="nav-link">
                                <i class="fas fa-angle-right"></i>
                                <?php echo lang('EXAM_SCHEDULE'); ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="exam-grade.php" class="nav-link"> 
                                <i class="fas fa-angle-right"></i>
                                <?php echo lang('EXAM_GRADES');?>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php } ?>

            <!-- TRANSPORT -->
            <?php  if ($_SESSION['user_group_id'] == '1') { ?>
                <li class="nav-item">
                    <a href="transport.php" class="nav-link">
                        <i class="flaticon-bus-side-view"></i>
                        <span><?php echo lang('TRANSPORT') ?> </span></a>
                </li>
            <?php } ?>

            <!-- HOSTEL -->
            <?php  if ($_SESSION['user_group_id'] == '1') { ?>
                <li class="nav-item">
                    <a href="hostel.php" class="nav-link">
                        <i class="flaticon-bed"></i>
                        <span><?php echo lang('HOSTEL'); ?> </span>
                    </a>
                </li>
            <?php } ?> 

            <!-- NOTES -->
            <?php  if ($_SESSION['user_group_id'] == '1' || $_SESSION['user_group_id'] == '2') { ?>
                <li class="nav-item">
                    <a href="notice-board.php" class="nav-link">
                        <i class="flaticon-script"></i>
                        <?php echo lang('NOTES'); ?>
                    </a>
                </li>
            <?php } ?> 

            <!-- MESSAGE -->
            <?php  if ($_SESSION['user_group_id'] == '1' || $_SESSION['user_group_id'] == '2') { ?>
                <li class="nav-item">
                    <a href="messaging.php" class="nav-link">
                        <i class="flaticon-chat"></i>
                        <span><?php echo lang('MESSAGE') ?> </span>
                    </a>
                </li>
            <?php } ?> 


            <!-- MAP -->
            <?php  if ($_SESSION['user_group_id'] == '1') { ?>        
                <li class="nav-item">
                    <a href="map.php" class="nav-link">
                        <i class="flaticon-planet-earth"></i> 
                        <span> <?php echo lang('MAP'); ?> </span>
                    </a>
                </li>
            <?php } ?> 

            <!-- ACCOUNT -->
            <?php  if ($_SESSION['user_group_id'] == '1') { ?>            
                <li class="nav-item">
                    <a href="account-settings.php" class="nav-link"><i class="flaticon-settings"></i>
                    <span><?php echo lang('ACCOUNT'); ?> </span>
                    </a>
                </li>
            <?php } ?> 

        </ul>
    </div>
</div>