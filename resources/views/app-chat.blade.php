@extends('main')

@section('main-section')

@section('title', 'User Chat')
    <div class="page">
        <div class="section-light py-3 chat_app">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="card bg-none b-none">
                            <div class="card-header bline bg-none">
                                <h3 class="card-title">Users Chat</h3>
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
                                        <img class="avatar mr-3" src="assets/images/xs/avatar2.jpg" alt="avatar">
                                        <div class="message">
                                            <p class="bg-light-blue">Are we meeting today?</p>
                                            <span class="time" >10:10 AM, Today</span>
                                        </div>
                                    </li>
                                    <li class="other-message">
                                        <img class="avatar mr-3" src="assets/images/xs/avatar3.jpg" alt="avatar">
                                        <div class="message">
                                            <p class="bg-light-cyan">Hi Aiden, how are you? How is the project coming along?</p>
                                            <p class="bg-light-cyan">Are we meeting today?</p>
                                            <span class="time" >10:15 AM, Today</span>
                                        </div>
                                    </li>
                                    <li class="my-message">
                                        <div class="message">
                                            <p class="bg-light-gray">Project has been already finished and I have results to show you.</p>

                                            <span class="time">10:17 AM, Today</span>
                                        </div>
                                    </li>
                                    <li class="other-message">
                                        <img class="avatar mr-3" src="assets/images/xs/avatar4.jpg" alt="avatar">
                                        <div class="message">
                                            <div class="media_img">
                                                <img src="assets/images/gallery/1.jpg" class="w150 img-thumbnail mb-1" />
                                                <img src="assets/images/gallery/2.jpg" class="w150 img-thumbnail mb-1" />
                                            </div>
                                            <span class="time" >10:15 AM, Today</span>
                                        </div>
                                    </li>
                                    <li class="other-message">
                                        <span class="avatar avatar-blue mr-3">NG</span>
                                        <div class="message">
                                            <p class="bg-light-pink">Are we meeting today I have results?</p>
                                            <p class="bg-light-pink">Project has been already finished and to show you.</p>
                                            <span class="time" >10:18 AM, Today</span>
                                        </div>
                                    </li>
                                    <li class="my-message">
                                        <div class="message">
                                            <p class="bg-light-gray">Well we have good budget for the project</p>
                                            <span class="time">10:25 AM, Today</span>
                                        </div>
                                    </li>
                                    <li class="my-message">
                                        <div class="message">
                                            <div class="media_img">
                                                <img src="assets/images/gallery/3.jpg" class="w100 img-thumbnail mb-1"/>
                                                <img src="assets/images/gallery/4.jpg" class="w100 img-thumbnail mb-1" />
                                                <img src="assets/images/gallery/5.jpg" class="w100 img-thumbnail mb-1" />
                                                <img src="assets/images/gallery/6.jpg" class="w100 img-thumbnail mb-1" />
                                            </div>
                                            <span class="time">10:25 AM, Today</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="chat-message clearfix">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#addtask"><i class="icon-camera"></i></a>
                                    <a href="javascript:void(0);"><i class="icon-camcorder"></i></a>
                                    <a href="javascript:void(0);"><i class="icon-paper-plane"></i></a>
                                    <div class="input-group mb-0">
                                        <input type="text" class="form-control" placeholder="Enter text here...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Add New Task -->
<div class="modal fade" id="addtask" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add Picture</h6>
            </div>
            <div class="modal-body">
                <input type="file" class="dropify">
                <small class="text-danger">Recommended image size is 5MB</small>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="assets/bundles/lib.vendor.bundle.js"></script>

<script src="assets/plugins/dropify/js/dropify.min.js"></script>

<script src="assets/js/core.js"></script>
<script>
    $(function() {
        "use strict";

        $('.dropify').dropify();

        var drEvent = $('#dropify-event').dropify();
        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });
    });
    </script>
</body>

<!-- soccer/project/app-chat.html  07 Jan 2020 03:40:36 GMT -->
</html>
