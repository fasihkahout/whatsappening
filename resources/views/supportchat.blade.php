<!doctype html>
<html lang="en" dir="ltr">

<!-- soccer/project/  07 Jan 2020 03:36:49 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="/assets/images/bottom_circle_red.svg" type="image/x-icon"/>

<title>:: WhatsAppening</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css" />

<!-- Plugins css -->
<link rel="stylesheet" href="/assets/plugins/charts-c3/c3.min.css"/>

<!-- Core css -->
<link rel="stylesheet" href="/assets/css/main.css"/>
<link rel="stylesheet" href="/assets/css/theme1.css"/>

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
                    <a class="header-brand" href="{{url('index')}}"><i class=""><img src="/assets/images/bottom_circle_red.svg" alt=""></i></a>
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="nav-link user_btn"><img class="avatar" src="/assets/images/user.png" alt="" data-toggle="tooltip" data-placement="right" title="User Menu"/></a>
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
        <div class="section-light py-3 chat_app">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="card bg-none b-none">
                            <div class="card-header bline bg-none">
                                <h3 class="card-title">Support Chat</h3>
                                <div class="card-options">
                                    <a href="javascript:void(0)" class="p-1"><i class="fa fa-plus"></i></a>
                                    <a href="javascript:void(0)" class="p-1"><i class="fa fa-cog"></i></a>
                                    <a href="javascript:void(0)" class="p-1"><i class="fa fa-refresh"></i></a>
                                    <a href="javascript:void(0)" class="p-1 chat_list_btn"><i class="fa fa-align-right"></i></a>
                                </div>
                            </div>
                            <div class="chat_windows">
                                <ul class="mb-0">
                                    <li class="other-message">
                                        <img class="avatar mr-3" src="/assets/images/xs/avatar2.jpg" alt="avatar">
                                        <div class="message">
                                            <p class="bg-light-blue">I am getting Issues regarding this app</p>
                                            <span class="time" >10:10 AM, Today</span>
                                        </div>
                                    </li>
                                    @foreach ($chat as $chat )
                                    <li class="my-message">
                                        <div class="message">
                                            <p class="bg-light-gray">{{ $chat->message }}</p>
                                            <span class="time">{{$chat->created_at}}</span>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="section-body">
                                <div class="container" style="display: flex; justify-content:center">
                                    <form action="{{ url('/customsupportchat') }}" method="post">
                                        @csrf
                                        <div class="row">
                                                <div class="form-group">
                                                    <label class="form-label" style="margin-top: 10px"><b>Enter your Message:-</b></label>
                                                    <input type="text" name="message" class="form-control" placeholder="" value=""
                                                        style="width:550px;" autocomplete="off">
                                                    <input type="hidden" name="id" class="form-control" value="{{ $id }}">
                                                </div>
                                        </div>
                                        <input type="submit" class="form-control" value="Send" style="width:100px; background-color:crimson; color:white; margin-left:-5px">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
