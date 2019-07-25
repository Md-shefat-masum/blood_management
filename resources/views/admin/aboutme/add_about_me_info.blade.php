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
                    <h3 class="text-themecolor">Update About Me Section Contents</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">admin</a></li>
                        <li class="breadcrumb-item">aboutme</li>
                        <li class="breadcrumb-item active">update</li>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Udate Contents</h4>

                                {{-- <h6 class="card-subtitle">Bootstrap Form Validation check the <a href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> --}}

                                <form class="m-t-40" novalidate method="POST" action="{{url('/admin/aboutme/update')}}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="card">
                                                <div class="card-body ">
                                                    <div class="form-group ">
                                                        <h5>About me heading <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="aboutme_heading" value="" class="form-control" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">About me paragraph</h4>
                                                    <h6 class="card-subtitle">only text</h6>
                                                    <div class="form-group">
                                                        <textarea name="aboutme_details" class="textarea_editor form-control" rows="15" placeholder="Enter text ..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="card">
                                                <div class="card-body ">
                                                    <div class="form-group ">
                                                        <h5>Read More Llink <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="aboutme_link" value="" class="form-control" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">About me photo</h4>
                                                    <label for="input-file-max-fs">You can add a max file size</label>
                                                    <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
                                                </div>
                                            </div>
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
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            @endsection
