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
                               
                            </ul>
                        </div>
                        <div class="row">
                           <!--  <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="input-group mb-1">
                                    <input type="text" class="form-control" placeholder="User Name">
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4 col-sm-6">
                                <div class="input-group mb-1">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div> -->
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <a href="{{url('/userpage')}}" class="btn btn-primary btn-block mb-1"
                                    title="">Add User</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
       <!--  <div class="container" style="margin-left: 310px; margin-top:50px;">
            <a href="{{url('/userpage')}}"><button class="btn btn-success">Add User</button></a>
            <br>
            <br>
            <div class="container" style=" margin-right:20px; color:#2b3035;"> -->
                <div class="section-body">
    <div class="container-fluid">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="list" role="tabpanel">
                <div class="row clearfix">

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>

                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $form)
                        <tr>
                            <td scope = "col">{{ $form->fname }}</td>
                            <td scope = "col">{{ $form->lname }}</td>
                            <!-- <td scope = "col">{{ $form->number }}</td> -->
                            <td scope = "col">{{ $form->status }}</td>
                            <td scope = "col">
                                <a href="{{route('adminview', $form->id)}}"><i class="fa fa-eye" style="color: black; margin-right:100px"></i></i></a>
                                <a href="{{route('delete', $form->id)}}"><i class="fa fa-trash" style="color: red; margin-left:-85px"></i></a>
                                <a href="{{route('statusedit', $form->id)}}"><i class="fa fa-pencil" style="color: blue; margin-left:18px"></i></a>
                                 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- <nav aria-label="Page navigation example" style="margin-right:120px">
                <ul class="pagination justify-content-end">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav> -->
        </div>
@endsection

<script src="assets/bundles/lib.vendor.bundle.js"></script>

<script src="assets/plugins/dropify/js/dropify.min.js"></script>

<script src="assets/js/core.js"></script>
<script src="assets/js/form/dropify.js"></script>
</body>

<!-- soccer/project/project-clients.html  07 Jan 2020 03:41:29 GMT -->

</html>
