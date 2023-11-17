<!doctype html>
<html lang="en" dir="ltr">

<!-- soccer/project/  07 Jan 2020 03:36:49 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="assets/images/bottom_circle_red.svg" type="image/x-icon"/>

<title>:: WhatsAppening</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

<!-- Plugins css -->
<link rel="stylesheet" href="assets/plugins/charts-c3/c3.min.css"/>

<!-- Core css -->
<link rel="stylesheet" href="assets/css/main.css"/>
<link rel="stylesheet" href="assets/css/theme1.css"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body{
        overflow: hidden;
    }
</style>
</head>
  <body>
    <div class="sidebar">
        <div id="header_top" class="header_top">
            <div class="container">
                <div class="hleft">
                    <a class="header-brand" href="{{url('index')}}"><i class=""><img src="assets/images/bottom_circle_red.svg" alt=""></i></a>
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="nav-link user_btn"><img class="avatar" src="assets/images/user.png" alt="" data-toggle="tooltip" data-placement="right" title="User Menu"/></a>
                        <a href="{{url('/userpage')}}" class="nav-link icon xs-hide"><i class="fa fa-user" aria-hidden="true"></i></a>
                        <a href="{{url('/user-view-table')}}" class="nav-link icon xs-hide"><i class="fa fa-search"></i></a>
                        <a href="{{url('/app-setting')}}"  class="nav-link icon xs-hide"><i class="fa fa-cog" aria-hidden="true"></i></a>
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
    </div>
    <div id="left-sidebar" class="sidebar ">
        <h5 class="brand-name">WhatsAppening <a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul class="metismenu">
                <li class="active"><a href="{{url('/index')}}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="fa fa-user" aria-hidden="true"></i><span>Users</span></a>
                    <ul>
                        <li><a href="{{url('/page-clients')}}">Active User</a></li>
                        <li><a href="{{url('/user-view-table')}}">User Profiles</a></li>
                        <li><a href="{{url('/inactiveusers')}}">Blocked User</a></li>
                    </ul>
                </li>
                <li><a href="{{url('/app-chat')}}"><i class="fa fa-comments"></i><span>User Chat</span></a></li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="fa fa-user" aria-hidden="true"></i><span>Support Chat</span></a>
                    <ul>
                        <li><a href="{{url('/adminchat')}}">New Chats</a></li>
                        <li><a href="{{url('/adminchat')}}">On Going Chats</a></li>
                        <li><a href="{{url('/adminchat')}}">Completed Chats</a></li>
                    </ul>
                </li>
                <li><a href="{{url('/report-abuse')}}"><i class="fa fa-flag" aria-hidden="true"></i><span>Abuse Reports</span></a></li>
                <li><a href="{{('/app-setting')}}"><i class="fa fa-gear"></i><span>App Setting</span></a></li>
                <li><a href="{{('/app-setting')}}"><i class="fa fa-gear"></i><span>General Setting</span></a></li>
            </ul>
        </nav>
    </div>
    <div class="page">
        <div id="page_top" class="section-body top_dark">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <a href="javascript:void(0)" class="icon menu_toggle mr-3"><i class="fa  fa-align-left"></i></a>
                        <h1 class="page-title">User Signup</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 05px; margin-right:60px">
        <div class="container col-md-8">
            <div class="row">
                <form action="{{url('/customuserpage')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Choose Profile Pic</label>
                            <div><input
                                id="" name="map_picture"
                                type="file" class="form-control" aria-required="true"
                                aria-invalid="false"> <img width="100px" src="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="" value="" style="margin-bottom: 12px">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">First Name</label>
                                <input type="text" name="fname" class="form-control" placeholder="" value="" style="margin-bottom: 12px">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Last Name</label>
                                <input type="text" name="lname" class="form-control" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Bio</label>
                                <input type="text" name="bio" class="form-control" placeholder="" value="">
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Number</label>
                                <input type="text" name="number" class="form-control" placeholder="" value="">
                            </div>
                        </div> -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">DOB</label>
                                <input type="text" name="dob" class="form-control" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Interest</label>
                                <input type="text" name="interested_in" class="form-control" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Relationship</label>
                                <input type="text" name="relationship_status" class="form-control" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Age Range</label>
                                <input type="text" name="age" class="form-control" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Location</label>
                                <input type="text" name="location" class="form-control" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Distance</label>
                                <input type="text" name="max_distance" class="form-control" placeholder="" value="">
                            </div>
                        </div>
                       <!--  <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">My age</label>
                                <select class="form-select form-control" name="my_age" aria-label="Default select example">
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                  </select>
                            </div>
                        </div> -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Pronouns</label>
                                <select class="form-select form-control" name="pronouns" aria-label="Default select example">
                                    <option value="he">He</option>
                                    <option value="she">She</option>
                                  </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <input type="text" name="status" class="form-control" placeholder="" value="Active">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group" style="margin-top:-30px">
                                <button type="submit" class="btn btn-success btn-lg"
                                data-mdb-ripple-color="dark" style="margin-top: 50px;">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
