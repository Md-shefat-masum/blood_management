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
                    <h3 class="text-themecolor">About me section</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">admin</a></li>
                        <li class="breadcrumb-item">about me</li>
                        <li class="breadcrumb-item active">all</li>
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
                    <!-- column -->
                    <div class="col-lg-6 col-md-6">
                        <!-- Card -->
                        <div class="card p-10">
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="text-primary">Section heading :</h3>
                                        <h4 class="card-title">{{$all->aboutme_heading}}</h4>
                                    </div>
                                </div>

                                <div class="card">
                                    <h3 class="text-primary">About me image :</h3>
                                    <img class="card-img-top" style="width:auto" src="{{asset('uploads/aboutme/'.$all->aboutme_photo)}}" alt="Card image cap">
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="text-primary">About me paragraph :</h3>
                                        {!!$all->aboutme_details!!}
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="text-primary">About me link :</h3>
                                        <a href="{{$all->aboutme_link}}" target="_blank" class="btn btn-primary">{{$all->aboutme_link}}</a>
                                    </div>
                                </div>

                                {{-- <div class="card">
                                    <div class="card-body">
                                            <h3 class="text-primary">Live view :</h3>
                                        <iframe src="http://mdshefat.com#about-me" style="height:500px;width:100%;" frameborder="0"></iframe>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                        <!-- Card -->
                    </div>

                    <!-- column -->
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Update Contents</h4>

                                {{-- <h6 class="card-subtitle">Bootstrap Form Validation check the <a href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> --}}

                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="card">
                                            <div class="card-body ">
                                                <form class="m-t-40" novalidate method="POST" action="{{url('/admin/aboutme/heading_update')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group ">
                                                        <h5>About me heading <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="aboutme_heading" value="" class="form-control" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                    <div class="text-xs-right">
                                                        <button type="submit" value="Submit" class="btn btn-info">Submit</button>
                                                        <button type="reset" class="btn btn-inverse">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <form class="m-t-40" novalidate method="POST" action="{{url('/admin/aboutme/aboutme_details_update')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <h4 class="card-title">About me paragraph</h4>
                                                    <h6 class="card-subtitle">only text</h6>
                                                    <div class="form-group">
                                                        <textarea name="aboutme_details" class="textarea_editor form-control" rows="15" placeholder="Enter text ..."></textarea>
                                                    </div>
                                                    <div class="text-xs-right">
                                                        <button type="submit" value="Submit" class="btn btn-info">Submit</button>
                                                        <button type="reset" class="btn btn-inverse">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="card">
                                            <div class="card-body ">
                                                <form class="m-t-40" novalidate method="POST" action="{{url('/admin/aboutme/aboutme_link_update')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group ">
                                                        <h5>Read More Link <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="aboutme_link" value="http://" class="form-control" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                    <div class="text-xs-right">
                                                        <button type="submit" value="Submit" class="btn btn-info">Submit</button>
                                                        <button type="reset" class="btn btn-inverse">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="card">
                                            <form class="m-t-40" novalidate method="POST" action="{{url('/admin/aboutme/aboutme_image_update')}}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="card-body">
                                                    <h4 class="card-title">About me photo</h4>
                                                    <label for="input-file-max-fs">You can add a max file size</label>
                                                    <input type="file" name="aboutme_photo" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
                                                </div>
                                                <div class="text-xs-right">
                                                    <button type="submit" value="Submit" class="btn btn-info">Submit</button>
                                                    <button type="reset" class="btn btn-inverse">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
                                    <a href="javascript:void(0)"><img src="{{asset('contents/admin/assets')}}/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-primary">Busy</small></span></a>
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
