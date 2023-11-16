@extends('main')

@section('main-section')

@section('title', 'Active Users')
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex justify-content-between mb-2">
                            <ul class="nav nav-tabs b-none">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#list"><i
                                            class="fa fa-list-ul"></i>Users List</a></li>
                                <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#addnew"><i class="fa fa-plus"></i> Add New</a></li> -->
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="input-group mb-1">
                                    <input type="text" class="form-control" placeholder="User Name">
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4 col-sm-6">
                                <div class="input-group mb-1">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <a href="javascript:void(0);" class="btn btn-primary btn-block mb-1"
                                    title="">Search</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-body">
    <div class="container-fluid">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="list" role="tabpanel">
                <div class="row clearfix">
                    @foreach ($form as $form)
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="card" style="height:352;">
                                <div class="online-indicator" style="margin-top: 20px; margin-left: 250px;">
                                    <span class="blink"></span>
                                </div>
                                <div class="card-body text-center ribbon">
                                    <img 
                                        src="{{ asset('/images/' . $form->map_picture) }}"
alt="" style=" border-radius: 100% ;width: 50px;">
                                    <h6 class="mt-3 mb-0">{{ $form->fname }} {{ $form->lname }}</h6>
                                    <span>{{ $form->email }}</span>
                                    <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                    </ul>
                                    <button class="btn btn-default btn-sm"> <a
                                            href="{{ route('adminview', $form->id) }}">View
                                            Profile</a>
                                    </button>
                                    <button class="btn btn-default btn-sm"> <a
                                        href="{{ route('delete', $form->id) }}">Delete
                                        Profile</a>
                                    </button>
                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

    </div>
</div>
@endsection

<script src="assets/bundles/lib.vendor.bundle.js"></script>

<script src="assets/plugins/dropify/js/dropify.min.js"></script>

<script src="assets/js/core.js"></script>
<script src="assets/js/form/dropify.js"></script>
</body>

<!-- soccer/project/project-clients.html  07 Jan 2020 03:41:29 GMT -->

</html>
