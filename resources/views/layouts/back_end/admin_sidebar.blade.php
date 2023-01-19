<?php 
// Get the current URL without the query string...
 $url = url()->current();
?>
<div class="app-sidebar bg-success sidebar-text-light sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading"> <a href="{{ url('/admin/dashboard') }}"> Dashboard </a></li>
                <?php 
                $base_user_url = trim(basename($url));
                ?>
                <li <?php if(preg_match("/sell-farm/i", $url)||(preg_match("/product/i", $url))){ ?> style="display:block;" <?php } ?>>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-home"></i>CMS
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li <?php if(preg_match("/get-home/i", $url)){ ?> class="mm-active" <?php } ?>>
                            <a href="{{ url('/get-home') }}" <?php if(preg_match("/get-home/i", $url)){ ?> class="mm-active" <?php } ?>>
                                <i class="metismenu-icon"></i>Home  
                            </a>
                        </li>
                        <li <?php if(preg_match("/get-about/i", $url)){ ?> class="mm-active" <?php } ?>>
                            <a href="{{ url('/get-about') }}" <?php if(preg_match("/get-about/i", $url)){ ?> class="mm-active" <?php } ?>>
                                <i class="metismenu-icon"></i>About
                            </a>
                        </li>
                        <li <?php if(preg_match("/get-corevalue/i", $url)){ ?> class="mm-active" <?php } ?>>
                            <a href="{{ url('/get-corevalue') }}" <?php if(preg_match("/get-corevalue/i", $url)){ ?> class="mm-active" <?php } ?>>
                                <i class="metismenu-icon"></i>Core Values
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-users"></i>Forms
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li <?php if(preg_match("/forms/i", $url)){ ?>  class="mm-active" <?php } ?>>
                            <a href="{{ url('/forms') }}" <?php if(preg_match("/forms/i", $url)){ ?>  class="mm-active" <?php } ?>>
                                <i class="metismenu-icon"></i> Registration
                            </a>
                        </li>
                        <li <?php if(preg_match("/admin-programs/i", $url)){ ?>  class="mm-active" <?php } ?>>
                            <a href="{{ url('/admin-programs') }}" <?php if(preg_match("/admin-programs/i", $url)){ ?>  class="mm-active" <?php } ?>>
                                <i class="metismenu-icon"></i> Programs
                            </a>
                        </li>
                        <li <?php if(preg_match("/get-cons/i", $url)){ ?>  class="mm-active" <?php } ?>>
                            <a href="{{ url('/get-cons') }}" <?php if(preg_match("/get-cons/i", $url)){ ?>  class="mm-active" <?php } ?>>
                                <i class="metismenu-icon"></i> Consultancy
                            </a>
                        </li>
                        <li <?php if(preg_match("/get-advocancy/i", $url)){ ?>  class="mm-active" <?php } ?>>
                            <a href="{{ url('/get-advocancy') }}" <?php if(preg_match("/get-advocancy/i", $url)){ ?>  class="mm-active" <?php } ?>>
                                <i class="metismenu-icon"></i> Advocancy
                            </a>
                        </li>
                        <li <?php if(preg_match("/get-teams/i", $url)){ ?>  class="mm-active" <?php } ?>>
                            <a href="{{ url('/get-teams') }}" <?php if(preg_match("/get-teams/i", $url)){ ?>  class="mm-active" <?php } ?>>
                                <i class="metismenu-icon"></i> Team
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-credit"></i> Contact 
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li <?php if(preg_match("/view-newsletter/i", $url)){ ?> class="mm-active" <?php } ?>>
                            <a href="{{ url('/view-newsletter') }}" <?php if(preg_match("/view-newsletter/i", $url)){ ?> class="mm-active" <?php } ?>>
                                <i class="metismenu-icon"></i> Newsletter
                            </a>
                        </li>
                        <li <?php if(preg_match("/inquiry/i", $url)){ ?> class="mm-active" <?php } ?>>
                            <a href="{{ url('/inquiry') }}" <?php if(preg_match("/inquiry/i", $url)){ ?> class="mm-active" <?php } ?>>
                                <i class="metismenu-icon"></i> Contact Us
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('admin/logout')}}">
                        <i class="metismenu-icon pe-7s-power"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
