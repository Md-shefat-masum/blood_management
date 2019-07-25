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
            <style>
                .top{
                    background: url('{{asset('contents/admin/assets')}}/images/header-back-ground.png');
                    background-size:cover;
                    background-position:center center;
                    position:relative;
                    z-index:1;
                }
                .top::before{
                    position: absolute;
                    top: 0;
                    left: 0;
                    content: '';
                    height: 100%;
                    width: 100%;
                    /* background: rgba(0,0,0,.5); */
                }
                .top h1{
                    text-align: center;
                    text-transform: uppercase;
                    padding: 20px 0px;
                    color: white;
                    position: relative;
                    z-index: 99;
                }
                .top img{
                    width: 200px;
                    height: 200px;
                    overflow: hidden;
                    border: 1px solid white;
                    position: relative;
                    z-index: 99;
                    margin-left: 50%;
                    transform: translateX(-50%);
                    border-radius: 50%;
                    margin-bottom: 20px;
                }
                .card-body{
                        padding: 5px;
                    }
                    .top{
                        position: relative;
                        height: 165px;
                        background-size:cover;
                        background-position: bottom center;
                        background-repeat: no-repeat;
                    }
                    .top h1{
                        position: absolute;
                        top: 40%;
                        left: 50%;
                        transform: translate(-50%,-50%);
                        font-size: 20px;
                    }
                    .top img{
                        width: 100%;
                        height: 100%;
                    }
                    .top .profile-pic{
                        position: absolute;
                        bottom: -50px;
                        overflow: hidden;
                        height: 100px;
                        width: 100px;
                        left: 20%;
                        transform: translateX(-50%);
                    }
                    .top-info{
                        padding-left: 0px;
                    }
                    .top-info li{
                        list-style-type: none;
                        font-size: 14px;
                        width: 100%;
                    }
                    .top-info li i{
                        height: 10px;
                        width: 22px;
                        display: inline-block;
                    }
                    ul{
                        padding: 0;
                    }
                    ul li{
                        list-style: none;
                    }
                    .d-info td{
                        padding: 8px 0px;
                    }
                    .operation a{
                        margin: 0px 2px;
                    }

                @media (min-width: 576px) and (max-width: 767.98px)
                {
                    .top{
                        height: 225px;
                    }
                    table{
                        margin: 0 auto;
                    }
                }

                @media (min-width: 768px) and (max-width: 991.98px) {
                    .top{
                        height: 230px;
                    }
                    .top .profile-pic{
                        height: 150px;
                        width: 150px;
                        bottom: -70px;
                    }
                    table{
                        margin: 0 auto;
                    }
                }

                @media (min-width: 992px) and (max-width: 1199.98px) {
                    .top{
                        height: 230px;
                    }
                    .top .profile-pic{
                        height: 200px;
                        width: 200px;
                        bottom: -80px;
                    }
                    table{
                        margin: 0 auto;
                    }
                }
                @media (min-width: 1200px) {
                    .top{
                        height: 300px;
                    }
                    .top .profile-pic{
                        height: 200px;
                        width: 200px;
                        bottom: -80px;
                    }
                    table{
                        margin: 0 auto;
                    }

                }
            </style>

            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-7 col-lg-8 col-md-10 col-sm-12 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="top">
                                    <h1>{{$donner->name}}</h1>
                                    <div class="profile-pic">
                                        <img style="" src="{{asset('uploads')}}/blood-donner/{{$donner->donner_image}}" alt="{{asset('contents/website')}}/images/team/masum.png">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5"></div>
                                    <div class="col-7 p-0">
                                        <ul class="top-info">
                                            <li><i class="ti-location-pin"></i>{{$donner->address}}</li>
                                            <li><i class="ti-user"></i>{{$age}} yr</li>
                                            <li><i class="ti-heart-broken"></i>blood donneted {{$length}} months ago</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row" style="padding-top:13px;">
                                    <div class="col-12">
                                        <ul style="display:flex; justify-content:center;">
                                            <li>
                                                <a href="{{$donner->fb_address}}" target="_blank" class="btn btn-circle btn-outline-primary"><i class="ti-facebook"></i></a>
                                                <a href="{{$donner->twitter}}" target="_blank" class="btn btn-circle btn-outline-primary"><i class="ti-twitter"></i></a>
                                                <a href="{{$donner->skype}}" target="_blank" class="btn btn-circle btn-outline-primary"><i class="ti-skype"></i></a>
                                                <a href="{{$donner->linkedin}}" target="_blank" class="btn btn-circle btn-outline-primary"><i class="ti-linkedin"></i></a>
                                                <a href="{{$donner->website}}" target="_blank" class="btn btn-circle btn-outline-primary"><i class="ti-world"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row" style="padding-top:7px;">
                                    <div class="col-12">
                                        <table class="d-info" style="width:auto">
                                            <tr>
                                                <td class="one" style="color:black;font-weight:500;font-size:14px;"> <i class="ti-user" style="padding:0px 10px;"></i>Name</td>
                                                <td style="width:10%;text-align:center;">:</td>
                                                <td style="width:50%">{{$donner->name}}</td>
                                            </tr>
                                            <tr>
                                                <td class="one" style="color:black;font-weight:500;font-size:14px;"> <i class="ti-crown" style="padding:0px 10px;"></i>Age</td>
                                                <td style="width:10%;text-align:center;">:</td>
                                                <td style="width:50%">{{$age}}</td>
                                            </tr>
                                            <tr>
                                                <td class="one" style="color:black;font-weight:500;font-size:14px;"> <i class="ti-heart" style="color:red;padding:0px 10px;"></i>Blood Group</td>
                                                <td style="width:10%;text-align:center;">:</td>
                                                <td style="width:50%;color:red;">{{$donner->blood_group}}</td>
                                            </tr>
                                            <tr>
                                                <td class="one" style="color:black;font-weight:500;font-size:14px;"> <i class="ti-mobile" style="padding:0px 10px;"></i>Mobile NO</td>
                                                <td style="width:10%;text-align:center;">:</td>
                                                <td style="width:50%">{{$donner->mobile_no}}</td>
                                            </tr>
                                            <tr>
                                                <td class="one" style="color:black;font-weight:500;font-size:15px;"> <i class="ti-email" style="padding:0px 10px;"></i>Email</td>
                                                <td style="width:10%;text-align:center;">:</td>
                                                <td style="width:50%">{{$donner->email}}</td>
                                            </tr>
                                            <tr>
                                                <td class="one" style="color:black;font-weight:500;font-size:15px;"> <i class="ti-location-pin" style="padding:0px 10px;"></i>Address</td>
                                                <td style="width:10%;text-align:center;">:</td>
                                                <td style="width:50%">{{$donner->address}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="row operation" style="padding:30px 0px 10px;">
                                    <div class="col-12 d-flex" style="justify-content:center;">
                                        <a href="{{route('donner_update_view',$donner->slug)}}" class="btn btn-blocked btn-outline-primary">Update</a>
                                        <a href="{{route('blood_list')}}" class="btn btn-blocked btn-outline-primary">All</a>
                                        <a href="{{route('add_donner')}}" class="btn btn-blocked btn-outline-primary">Add</a>
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
