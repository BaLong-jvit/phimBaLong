<?php
    $get_option=(isset($_REQUEST['option']))?$_REQUEST['option']:"dashboard";
    $get_page=(isset($_REQUEST['page']))?$_REQUEST['page']:"";
?>

<script>
    function actiSetting(){
        let buttonSetting= document.getElementById('setting-menu');
        let cl_act = document.getElementsByClassName("activity");
        let n = cl_act.length;
            for (let i = 0; i < n; i++) {
                cl_act[i].classList.remove("activity");   
            }
        let ct_menu=document.getElementById('content-menu');
        if(ct_menu.classList.contains("d-block")){
            ct_menu.classList.remove("d-block");           
        }else{
            ct_menu.classList.add("d-block");
        }
        buttonSetting.classList.add("activity");
    }
</script>

<ul class="sidebar-nav overlay-scrollbar">
    <li class="sidebar-nav-item">
        <a href="index.php?option=dashboard" class="sidebar-nav-link <?php 
        if($get_option == "dashboard") echo 'activity'; ?>">
            <div>
            <i class="fa fa-tachometer"></i>
            </div>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="sidebar-nav-item">
        <a href="index.php?option=lorem" class="sidebar-nav-link <?php 
        if($get_option == "lorem") echo 'activity'; ?>">
            <div>
            <i class="fa fa-book"></i>
            </div>
            <span>Lorem</span>
        </a>
    </li>
    <li class="sidebar-nav-item">
         <a href="index.php?option=morbi" class="sidebar-nav-link <?php 
        if($get_option == "morbi") echo 'activity'; ?>">
            <div>
            <i class="fa fa-tasks"></i>
            </div>
            <span>Morbi</span>
        </a>
    </li>
    <li class="sidebar-nav-item">
         <a href="index.php?option=preasent" class="sidebar-nav-link <?php 
        if($get_option == "preasent") echo 'activity'; ?>">
            <div>
            <i class="fa fa-spinner"></i>
            </div>
            <span>Preasent</span>
        </a>
    </li>
    <li class="sidebar-nav-item">
         <a href="index.php?option=pellentesque" class="sidebar-nav-link <?php 
        if($get_option == "pellentesque") echo 'activity'; ?>">
            <div>
            <i class="fa fa-check-circle"></i>
            </div>
            <span>Pellentesque</span>
        </a>
    </li>
    <li class="sidebar-nav-item">
         <a href="index.php?option=content" class="sidebar-nav-link <?php 
        if($get_option == "content") echo 'activity'; ?>">
            <div>
            <i class="fa fa-bug"></i>
            </div>
            <span>Content</span>
        </a>
    </li>
    <li class="sidebar-nav-item">
         <a href="index.php?option=international" class="sidebar-nav-link <?php 
        if($get_option == "international") echo 'activity'; ?>">
            <div>
            <i class="fa fa-tachometer"></i>
            </div>
            <span>International</span>
        </a>
    </li>
    <li class="sidebar-nav-item  dropdown">
        <button id="setting-menu" class="btn sidebar-nav-link dropdown-toggle-setting-website <?php 
        if($get_option == "settingweb") echo 'activity'; ?>" onclick="actiSetting()">
            <div>
            <i class="fa fa-cog"></i>
            </div>
            <span>Setting Website</span>
        </button>
        <ul id="content-menu" class="sidebar-nav dropdown-menu-setting-website <?php 
            echo ($get_option == "settingweb")?"d-block":"";
            ?>">
            <li class="sidebar-nav-item dropdown-menu-item-setting-website">
                <a href="index.php?option=settingweb&page=gioithieu" class="sidebar-nav-link dropdown-menu-link-setting-website <?php 
        if($get_page == "gioithieu") echo 'page-setting'; ?>">
                    <div>
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <span>Giới thiệu</span>
                </a>
            </li>
            <li class="sidebar-nav-item dropdown-menu-item-setting-website">
                <a href="index.php?option=settingweb&page=lienhe" class="sidebar-nav-link dropdown-menu-link-setting-website <?php 
        if($get_page == "lienhe") echo 'page-setting'; ?>">
                    <div>
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <span>Liên hệ</span>
                </a>
            </li>
            <li class="sidebar-nav-item dropdown-menu-item-setting-website">
                <a href="index.php?option=settingweb&page=quanlytintuc" class="sidebar-nav-link dropdown-menu-link-setting-website <?php 
        if($get_page == "quanlytintuc") echo 'page-setting'; ?>">
                    <div>
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <span>Quản lý tin tức</span>
                </a>
            </li>
            <li class="sidebar-nav-item dropdown-menu-item-setting-website">
                <a href="index.php?option=settingweb&page=quanlyfilm" class="sidebar-nav-link dropdown-menu-link-setting-website <?php 
        if($get_page == "quanlyfilm") echo 'page-setting'; ?>">
                    <div>
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <span>Quản lý phim</span>
                </a>
            </li>
        </ul>
    </li>
</ul>