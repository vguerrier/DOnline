<!-- /# sidebar -->
<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <div class="logo"><a href="index.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>Dashboard Online</span></a></br>
                <span class="quickinfo"><i class="fa fa-user"></i>Vincent Guerrier</span>
            </div>
            <ul>
                <li class="active"><a class="sidebar-sub-toggle"><i class="fa fa-table" aria-hidden="true"></i> Dashboard  <span class="sidebar-collapse-icon fa fa-chevron-down"></span></a>
                    <ul>
                        <li><a href="#">Assigned</a></li>
                        <li><a href="#">Today</a></li>
                        <li><a href="#">Exit Criteria</a></li>
                        <li><a href="#">Retrofit</a></li>
                        <li><a href="#">Cards late</a></li>
                    </ul>
                </li>
                <!--<li class="label">KPI</li>-->
                <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i>  KPI  <span class="sidebar-collapse-icon fa fa-chevron-down"></span></a>
                    <ul>
                        <li><a href="#">Rejects</a></li>
                        <li><a href="#">Fix</a></li>
                        <li><a href="#">Productivity</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="ti-calendar"></i> Process </a></li>
                <li><a class="sidebar-sub-toggle"><i class="ti-layout"></i> AX <span class="sidebar-collapse-icon fa fa-chevron-down"></span></a>
                    <ul>
                        <li><a href="#">Codes</a></li>
                        <li><a href="#">Timesheet</a></li>
                    </ul>
                </li>
                <?php
                    //require_once dirname(_DIR_) . DIRECTORY_SEPARATOR . 'functions/auth.php';
                    //require_once dirname(_DIR_) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'auth.php';
                    require_once 'functions/auth.php';
                    if (est_connecte()): ?>
                        <li><a href="/logout.php"><i class="ti-close"></i> Logout</a></li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</div>
<!-- /# sidebar -->

<!-- header -->
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="float-left">
                    <div class="hamburger sidebar-toggle">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="float-right">
                    <ul>
                        <li class="">
                            <div class="header-icon dib">
                                <i class="ti-bell"></i>
                            </div>
                            <img class="header-icon2 dib" src="assets/images/Logo Color.png"  />    
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /# header -->
            
<!-- jquery vendor -->
<script src="assets/js/lib/jquery.min.js"></script>
<script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
<!-- nano scroller -->
<script src="assets/js/lib/menubar/sidebar.js"></script>
<script src="assets/js/lib/preloader/pace.min.js"></script>
<!-- sidebar -->
<script src="assets/js/lib/bootstrap.min.js"></script>

<!-- bootstrap -->
<script src="assets/js/scripts.js"></script>