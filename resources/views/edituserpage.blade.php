<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="text-center" style="color: brown;"><i><b>User Profile update Form</b></i></h2>
    <div class="container col-md-12">
        <div class="row">
            <form action="{{url('/customuserpage')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Choose Profile Pic</label>
                        <div><input
                            id="" name="file_path"
                            type="file" class="form-control" aria-required="true"
                            aria-invalid="false"> <img width="100px" src="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">First Name</label>
                            <input type="text" name="fname" class="form-control" placeholder="" value="">
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
                            <label class="form-label">Number</label>
                            <input type="text" name="number" class="form-control" placeholder="" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">DOB</label>
                            <input type="text" name="dob" class="form-control" placeholder="" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Interest</label>
                            <input type="text" name="interest" class="form-control" placeholder="" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Relationship</label>
                            <input type="text" name="relationship" class="form-control" placeholder="" value="">
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
                            <input type="text" name="distance" class="form-control" placeholder="" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">My age</label>
                            <select class="form-select" name="my_age" aria-label="Default select example">
                                <option value="tf">25</option>
                                <option value="ts">26</option>
                                <option value="tse">27</option>
                                <option value="te">28</option>
                              </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Pronouns</label>
                            <select class="form-select" name="pronouns" aria-label="Default select example">
                                <option value="h">He</option>
                                <option value="s">She</option>
                              </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">My Relationship status</label>
                            <input type="text" name="status" class="form-control" placeholder="" value="">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg"
                            data-mdb-ripple-color="dark" style="margin-top: 30px;">Update</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
