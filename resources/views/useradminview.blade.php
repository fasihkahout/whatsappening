<!doctype html>
<html lang="en" dir="ltr">

<!-- soccer/project/  07 Jan 2020 03:36:49 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="assets/images/bottom_circle_red.svg" type="image/x-icon" />

    <title>:: WhatsAppening</title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

    <!-- Plugins css -->
    <link rel="stylesheet" href="assets/plugins/charts-c3/c3.min.css" />

    <!-- Core css -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme1.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            overflow: hidden;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div id="header_top" class="header_top">
            <div class="container">
                <div class="hleft">
                    <a class="header-brand" href="{{ url('index') }}"><i class=""><img
                                src="assets/images/bottom_circle_red.svg" alt=""></i></a>
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="nav-link user_btn"><img class="avatar"
                                src="assets/images/user.png" alt="" data-toggle="tooltip" data-placement="right"
                                title="User Menu" /></a>
                        <a href="{{ url('/userpage') }}" class="nav-link icon xs-hide"><i class="fa fa-user"
                                aria-hidden="true"></i></a>
                        <a href="{{ url('/user-view-table') }}" class="nav-link icon xs-hide"><i
                                class="fa fa-search"></i></a>
                        <a href="{{ url('/app-setting') }}" class="nav-link icon xs-hide"><i class="fa fa-cog"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="hright">
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="nav-link icon settingbar"><i class="fa fa-gear fa-spin"
                                data-toggle="tooltip" data-placement="right" title="Settings"></i></a>
                        <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i
                                class="fa  fa-align-left"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="left-sidebar" class="sidebar ">
        <h5 class="brand-name">WhatsAppening <a href="javascript:void(0)" class="menu_option float-right"><i
                    class="icon-grid font-16" data-toggle="tooltip" data-placement="left"
                    title="Grid & List Toggle"></i></a></h5>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul class="metismenu">
                <li class="active"><a href="{{ url('/index') }}"><i
                            class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="fa fa-user"
                            aria-hidden="true"></i><span>Users</span></a>
                    <ul>
                        <li><a href="{{ url('/page-clients') }}">Active User</a></li>
                        <li><a href="{{ url('/page-clients') }}">Inactive User</a></li>
                        <li><a href="{{ url('/inactiveusers') }}">Blocked User</a></li>

                    </ul>
                </li>
                <li><a href="{{ url('/app-chat') }}"><i class="fa fa-comments"></i><span>User Chat</span></a></li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="fa fa-user"
                            aria-hidden="true"></i><span>Support Chat</span></a>
                    <ul>
                        <li><a href="{{ url('/supportchat') }}">New Chats</a></li>
                        <li><a href="{{ url('/supportchat') }}">On going</a></li>
                        <li><a href="{{ url('/supportchat') }}">Completed</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/report-abuse') }}"><i class="fa fa-flag" aria-hidden="true"></i><span>Abuse
                            Reports</span></a></li>
                <li><a href="{{ '/app-setting' }}"><i class="fa fa-gear"></i><span>App Setting</span></a></li>
                <li><a href="{{ '/app-setting' }}"><i class="fa fa-gear"></i><span>General Setting</span></a></li>
            </ul>
        </nav>
    </div>
    <div class="page">
        <div id="page_top" class="section-body top_dark">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <a href="javascript:void(0)" class="icon menu_toggle mr-3"><i
                                class="fa  fa-align-left"></i></a>
                        <h1 class="page-title">Support CHat</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page">
        <div class="section-light py-3 chat_app">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="card bg-none b-none">
                            <div class="card-header bline bg-none">
                                <h3 class="card-title">Support Chat</h3>
                                <div class="card-options">
                                    <a href="javascript:void(0)" class="p-1"><i class="fa fa-plus"></i></a>
                                    <a href="javascript:void(0)" class="p-1"><i class="fa fa-cog"></i></a>
                                    <a href="javascript:void(0)" class="p-1"><i class="fa fa-refresh"></i></a>
                                    <a href="javascript:void(0)" class="p-1 chat_list_btn"><i
                                            class="fa fa-align-right"></i></a>
                                </div>
                            </div>
                            <div class="container">
                                <br>
                                <br>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Receiver_id</th>
                                            <th scope="col">message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($chat as $chat)
                                            <tr>
                                                <td scope="col">{{ $chat->recevier_id }}</td>
                                                <td scope="col">{{ $chat->message }}</td>
                                                <td scope="col">
                                                    <a href=""><i class="fa fa-comments-o" style="color:black"></i></a>
                                                    <a href=""><i class="fa fa-trash" style="color: black"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>
