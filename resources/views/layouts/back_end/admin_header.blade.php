
<!--Header-part-->
<div class="app-header bg-success header-text-light header-shadow">
    <div class="app-header__logo"  >
      <div class="logo-src"></div>
      <h5 style="color: white"><b>SDI</b></h5>
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
    </div>  
    <div class="app-header__content">
                <div class="app-header-left">
                    <ul class="header-megamenu nav">
                        <li class="dropdown nav-item">
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-rounded dropdown-menu-lg rm-pointers dropdown-menu">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner bg-primary">
                                        <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/abstract3.jpg');"></div>
                                        <div class="menu-header-content text-left">
                                            <h5 class="menu-header-title">Change Settings</h5>
                                            <h6 class="menu-header-subtitle">Account Settings</h6>
                                            <div class="menu-header-btn-pane">
                                              <a href="{{ url('/front/settings') }}" style="text-decoration:none;">  <button class="mr-2 btn btn-dark btn-sm">Settings</button>
                                                <button class="btn-icon btn-icon-only btn btn-warning btn-sm">
                                                    <i class="pe-7s-config btn-icon-wrapper"></i>
                                                </button>
                                              </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ url('/front/settings') }}" style="text-decoration:none;"><button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-file-empty"></i>Update Password
                                </button>
                                </a>
                                <a href="{{ url('/front/account-info') }}" style="text-decoration:none;">
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-file-empty"> </i>View Account Info
                                </button>
                                </a>
                            </div>
                        </li>
                    </ul>        
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-success">
                                                    <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                                                    <div class="menu-header-content text-left">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">{{auth()->user()->name}}</div>
                                                                    <div class="widget-subheading opacity-8">{{auth()->user()->type}}</div>
                                                                </div>
                                                                <div class="widget-content-right mr-2">
                                                                <a style="color:white;" href="{{ url('/admin/logout') }}"><input type="button" class="btn-pill btn-shadow btn-shine btn btn-focus" value="Logout"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="scroll-area-xs" style="height: 150px;">
                                                <div class="scrollbar-container ps">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-header nav-item">Activity</li>
                                                        <li class="nav-item">
                                                            <a href="{{ url('/front/send-inquiry') }}" class="nav-link">Settings
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="{{ url('/front/view-pending-products') }}" class="nav-link">View Profile
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading"> {{auth()->user()->name}} </div>
                                    <div class="widget-subheading"> {{auth()->user()->type}} </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
    
</div>
<script type="text/javascript">
  var today = new Date();
  var day = today.getDay();
  var daylist = ["Sunday","Monday","Tuesday","Wednesday ","Thursday","Friday","Saturday"];
  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
  var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  var dateTime = date+' '+time;
   
  document.getElementById("displayDateTime").innerHTML = dateTime + ' ' + daylist[day];
 
  </script>
<!--close-top-Header-menu-->


