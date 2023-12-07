
<nav class="navbar navbar-expand-md header-menu-one bg-light">

    <div class="nav-bar-header-one">
        <div class="header-logo">
            <a href="index.php"> <img src="img/logo.png" alt="logo"> </a>
        </div>
        <div class="toggle-button sidebar-toggle">
            <button type="button" class="item-link">
                <span class="btn-icon-wrap">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>
        </div>
    </div>
    
    <div class="d-md-none mobile-nav-bar">
        <button  class="navbar-toggler pulse-animation" 
                type="button" 
                data-toggle="collapse" 
                data-target="#mobile-navbar" 
                aria-expanded="false">
            <i class="far fa-arrow-alt-circle-down"></i>
        </button>
        <button type="button" class="navbar-toggler sidebar-toggle-mobile">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">

        <ul class="navbar-nav">
            <li class="navbar-item header-search-bar">
                <div class="input-group stylish-input-group">
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="flaticon-search" aria-hidden="true"></span>
                        </button>
                    </span>
                    <input type="text" class="form-control" placeholder="<?php echo lang('FIND_SOMETHING') . '. . . '; ?> ">
                </div>
            </li>
        </ul>
        
        <ul class="navbar-nav">
            <li class="navbar-item dropdown header-admin">
                <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    <div class="admin-img">
                        <img src="img/figure/admin.jpg" alt="Admin">
                    </div>
                    <div class="admin-title">
                        <h5 class="item-title"> <?php echo $_SESSION['user_full_name'];?> </h5>
                        <span> <?php echo $_SESSION['user_rank']; ?> </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="item-header">
                        <h6 class="item-title"> <?php echo $_SESSION['user_full_name']; ?> </h6>
                    </div>
                    <div class="item-content">
                        <ul class="settings-list">
                            <li><a href="#">          <i class="flaticon-user"></i> <?php echo lang('MY_PROFILE');?> </a></li>
                            <li><a href="#">          <i class="flaticon-list"></i><?php echo lang('TASK');  ?> </a></li>
                            <li><a href="#">          <i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i><?php echo lang('MASSAGE')  ?> </a></li>
                            <li><a href="#">          <i class="flaticon-gear-loading"> </i><?php echo lang('ACCOUNT') . lang('SETTING'); ?> </a></li>
                            <li><a href="logout.php"> <i class="flaticon-turn-off">     </i><?php echo lang('LOGOUT');  ?> </a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="navbar-item dropdown header-message">
                <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    <i class="far fa-envelope"></i>
                    <div class="item-title d-md-none text-16 mg-l-10"><?php echo lang('MASSAGE')  ?></div>
                    <span>5</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <div class="item-header">
                        <h6 class="item-title">05 <?php echo lang('MASSAGES')  ?></h6>
                    </div>

                    <div class="item-content">

                        <div class="media">
                            <div class="item-img bg-skyblue author-online">
                                <img src="img/figure/student11.png" alt="img">
                            </div>
                            <div class="media-body space-sm">
                                <div class="item-title">
                                    <a href="#">
                                        <span class="item-name">Maria Zaman</span> 
                                        <span class="item-time">18:30</span> 
                                    </a>  
                                </div>
                                <p>What is the reason of buy this item. 
                                Is it usefull for me.....</p>
                            </div>
                        </div>

                        <div class="media">
                            <div class="item-img bg-yellow author-online">
                                <img src="img/figure/student12.png" alt="img">
                            </div>
                            <div class="media-body space-sm">
                                <div class="item-title">
                                    <a href="#">
                                        <span class="item-name">Benny Roy</span> 
                                        <span class="item-time">10:35</span> 
                                    </a>  
                                </div>
                                <p>What is the reason of buy this item. 
                                Is it usefull for me.....</p>
                            </div>
                        </div>

                        <div class="media">
                            <div class="item-img bg-pink">
                                <img src="img/figure/student13.png" alt="img">
                            </div>
                            <div class="media-body space-sm">
                                <div class="item-title">
                                    <a href="#">
                                        <span class="item-name">Steven</span> 
                                        <span class="item-time">02:35</span> 
                                    </a>  
                                </div>
                                <p>What is the reason of buy this item. 
                                Is it usefull for me.....</p>
                            </div>
                        </div>

                        <div class="media">
                            <div class="item-img bg-violet-blue">
                                <img src="img/figure/student11.png" alt="img">
                            </div>
                            <div class="media-body space-sm">
                                <div class="item-title">
                                    <a href="#">
                                        <span class="item-name">Joshep Joe</span> 
                                        <span class="item-time">12:35</span> 
                                    </a>  
                                </div>
                                <p>What is the reason of buy this item. 
                                Is it usefull for me.....</p>
                            </div>
                        </div>

                    </div> <!-- END .item-content --> 
                </div>
            </li>

            <li class="navbar-item dropdown header-notification">
                <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    <i class="far fa-bell"></i>
                    <div class="item-title d-md-none text-16 mg-l-10"> <?php echo lang('NOTIFICATIONS'); ?> </div>
                    <span> <?php echo 7; ?> </span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <div class="item-header">
                        <h6 class="item-title"> <?php echo 7; ?> <?php echo lang('NOTIFICATIONS'); ?> </h6>
                    </div>
                    <div class="item-content">
                        <div class="media">
                            <div class="item-icon bg-skyblue">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="media-body space-sm">
                                <div class="post-title">Complete Today Task</div>
                                <span>1 <?php echo lang('MINS') . ' ' . lang('AGO') ?> </span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="item-icon bg-orange">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="media-body space-sm">
                                <div class="post-title"></div>
                                <span>20 <?php echo lang('MINS') . ' ' . lang('AGO') ?> </span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="item-icon bg-violet-blue">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <div class="media-body space-sm">
                                <div class="post-title">Update Password</div>
                                <span>45 <?php echo lang('MINS') . ' ' . lang('AGO') ?> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="navbar-item dropdown header-language">
                <a  class="navbar-nav-link dropdown-toggle" href="#" role="button" 
                    data-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-globe-americas"></i>
                    <?php echo strtoupper($lang); ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                        <?php if($lang == 'ar') { ?>
                            <a class="dropdown-item active" href="<?php echo $_SERVER['PHP_SELF'] . '?lang=ar' ?>" >عربي </a>
                            <a class="dropdown-item"        href="<?php echo $_SERVER['PHP_SELF'] . '?lang=en' ?>">English</a>
                        <?php  } else { ?>
                            <a class="dropdown-item active" href="<?php echo $_SERVER['PHP_SELF'] . '?lang=en' ?>">English</a>
                            <a class="dropdown-item"        href="<?php echo $_SERVER['PHP_SELF'] . '?lang=ar' ?>" >عربي </a>
                        <?php } ?>
                </div>
            </li>
        </ul>
    </div>
</nav>