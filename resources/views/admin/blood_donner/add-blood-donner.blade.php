@extends('layouts.admin')
@section('contents')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Add Blood Donner</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">admin</a></li>
                        <li class="breadcrumb-item">blood donner list</li>
                        <li class="breadcrumb-item active">add donner</li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Donner Information</h4>
                                {{-- <h6 class="card-subtitle">Use Bootstrap's predefined grid classes for horizontal form</h6> --}}
                                <form class="form-horizontal p-t-20" novalidate method="POST" action="{{url('/admin/add-donner')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Donner Name*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group controls">
                                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                                <input name="name" type="text" class="form-control" id="exampleInputuname3" required data-validation-required-message="This field is required" placeholder="Donner Name">
                                            </div>
                                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label text-capitalize">Blood Group*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group controls">
                                                <div class="input-group-addon"><i class="wi wi-raindrop" style="color:red; padding-left:3px; padding-right:3px;"></i></div>
                                                <select name="blood_group" class="form-control custom-select" required data-validation-required-message="This field is required">
                                                    <option></option>
                                                    <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label text-capitalize">Mobile NO*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group controls">
                                                <div class="input-group-addon"><i class="ti-mobile"></i></div>
                                                <input name="mobile_no" type="text" class="form-control" id="exampleInputuname3" required data-validation-required-message="This field is required" placeholder="Mobile NO">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="exampleInputEmail3" class="col-sm-3 control-label">Email*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group controls">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <input name="email" type="email" class="form-control" id="exampleInputEmail3"  placeholder="Enter email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label text-capitalize">Present Address</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-pencil"></i></div>
                                                <input name="address" type="text" class="form-control" id="exampleInputuname3" placeholder="Present address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label text-capitalize">Facebook Profile Address*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group controls">
                                                <div class="input-group-addon"><i class="ti-facebook"></i></div>
                                                <input name="fb_address" type="text" class="form-control" id="exampleInputuname3" placeholder="fb address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label text-capitalize">Skype Name</label>
                                        <div class="col-sm-9">
                                            <div class="input-group controls">
                                                <div class="input-group-addon"><i class="ti-skype"></i></div>
                                                <input name="skype" type="text" class="form-control" id="exampleInputuname3" placeholder="skype">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label text-capitalize">linkedin Profile Address</label>
                                        <div class="col-sm-9">
                                            <div class="input-group controls">
                                                <div class="input-group-addon"><i class="ti-linkedin"></i></div>
                                                <input name="linkedin" type="text" class="form-control" id="exampleInputuname3" placeholder="linkedin address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label text-capitalize">twitter Profile Address</label>
                                        <div class="col-sm-9">
                                            <div class="input-group controls">
                                                <div class="input-group-addon"><i class="ti-twitter"></i></div>
                                                <input name="twitter" type="text" class="form-control" id="exampleInputuname3" placeholder="twitter address">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="web" class="col-sm-3 control-label">Website</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-world"></i></div>
                                                <input name="website" type="text" class="form-control" id="web" placeholder="Enter Website Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="web" class="col-sm-3 control-label">Donner Role</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-shield"></i></div>
                                                <input name="donner_role" type="text" class="form-control" id="web" placeholder="blood_donner" disabled value="blood_donner">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="web" class="col-sm-3 control-label">Birth Date</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-calendar"></i></div>
                                                <input name="birth_date" type="date" class="form-control" id="web" placeholder="Birth Date" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="web" class="col-sm-3 control-label">Last Donnet</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-calendar"></i></div>
                                                <input name="last_donnet" type="date" class="form-control" id="web" placeholder="last donnet" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="web" class="col-sm-3 control-label">Donner Image</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-image"></i></div>
                                                <input name="donner_image" type="file" class="form-control" id="web" placeholder="Donner Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-0">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" class="btn btn-info waves-effect waves-light m-auto">Add Donner</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('contents/admin/assets')}}/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('contents/admin/assets')}}/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('contents/admin/assets')}}/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('contents/admin/assets')}}/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('contents/admin/assets')}}/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('contents/admin/assets')}}/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('contents/admin/assets')}}/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('contents/admin/assets')}}/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>

@endsection
