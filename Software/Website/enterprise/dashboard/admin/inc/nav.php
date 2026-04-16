<!-- sidebar  -->
<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href=""><img src="<?php echo $path; ?>img/logo.png" alt="Logo Here"></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
            <a class="" href="<?php echo $path; ?>admin">
                <div class="icon_menu">
                    <img src="<?php echo $path; ?>img/menu-icon/dashboard.svg" alt="">
                </div>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="mm-active">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="<?php echo $path; ?>img/menu-icon/dashboard.svg" alt="">
                </div>
                <span>User</span>
            </a>
            <ul>
                <li><a class="active" href="<?php echo $path; ?>admin/user">New user</a></li>
                <li><a href="<?php echo $path; ?>admin/user/history.php">History</a></li>
            </ul>
        </li>

        <li class="mm-active">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="<?php echo $path; ?>img/menu-icon/dashboard.svg" alt="">
                </div>
                <span>Dataset</span>
            </a>
            <ul>
                <li><a class="active" href="<?php echo $path; ?>datatset">Upload</a></li>
                <li><a href="<?php echo $path; ?>dataset?query=UPDATE">Update</a></li>
                <li><a href="<?php echo $path; ?>dataset/history.php">History</a></li>
            </ul>
        </li>

        <li class="">
            <a class="" href="#">
                <div class="icon_menu">
                    <img src="<?php echo $path; ?>img/menu-icon/2.svg" alt="">
                </div>
                <span>Audience Analytics</span>
            </a>
        </li>

        <li class="">
            <a class="" href="#">
                <div class="icon_menu">
                    <img src="<?php echo $path; ?>img/menu-icon/2.svg" alt="">
                </div>
                <span>Hospitality Data</span>
            </a>
        </li>

        <li class="">
            <a class="" href="<?php echo $path; ?>admin/settings">
                <div class="icon_menu">
                    <img src="<?php echo $path; ?>img/menu-icon/settings.svg" alt="">
                </div>
                <span>Settings</span>
            </a>
        </li>

        <li class="">
            <a class="" href="<?php echo (isset($_SESSION['username']) && isset($_SESSION['role']) == "Admin"? "?logout=1" : ""); ?>">
                <div class="icon_menu">
                    <img src="<?php echo $path; ?>img/menu-icon/logout.svg" alt="">
                </div>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</nav>
<!--/ sidebar  -->