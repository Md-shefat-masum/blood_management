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
                    <h3 class="text-themecolor">Ajax Crud</h3>
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

                <p>
                    <h1>Ajax CRUD Laravel</h1>
                </p>
                <div class="row">
                    <div class="col-md-8">
                        <table id="datatable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Detail</th>
                                    <th>Author</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <form>
                            <div class="form-group myid">
                                <label>ID</label>
                                <input type="number" id="id" class="form-control" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Detail</label>
                                <textarea id="detail" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Author</label>
                                <input type="text" id="author" class="form-control">
                            </div>
                            <button type="button" id="save" onclick="saveData()" class="btn btn-primary">Submit</button>
                            <button type="button" id="update" onclick="updateData()" class="btn btn-warning">Update</button>
                        </form>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                $('#datatable').DataTable();
                $('#save').show();
                $('#update').hide();
                $('.myid').hide();



                function viewData(){
                    $.ajax({
                        type: "GET",
                        dataType: "json",
                        url: "/ajax",
                        success: function(response){
                            var rows = "";
                            $.each(response, function(key, value){
                                rows = rows + "<tr>";
                                rows = rows + "<td>"+value.id+"</td>";
                                rows = rows + "<td>"+value.name+"</td>";
                                rows = rows + "<td>"+value.roll+"</td>";
                                rows = rows + "<td>"+value.phone+"</td>";
                                rows = rows + "<td width='180'>";
                                rows = rows + "<button type='button' class='btn btn-warning' onclick='editData("+value.id+")'>Edit</button>";
                                rows = rows + "<button type='button' class='btn btn-danger' onclick='deleteData("+value.id+")'>Delete</button>";
                                rows = rows + "</td></tr>";
                            });
                            $('tbody').html(rows);
                        }
                    })
                }

                viewData();

                function saveData(){
                    var name = $('#name').val();
                    var detail = $('#detail').val();
                    // var author = $('#author').val();
                    var author = Math.random()+10;
                    $.ajax({
                        type: 'POST',
                        dataType: 'json',
                        data: {name:name, roll:detail, mobile:author,slug:author},
                        url: '/ajax',
                        success: function(response){
                            viewData();
                            clearData();
                            $('#save').show();
                        }
                    })
                }

                function clearData(){
                    $('#id').val('');
                    $('#name').val('');
                    $('#detail').val('');
                    $('#author').val('');
                }

                function editData(id){
                    $('#save').hide();
                    $('#update').show();
                    $('.myid').show();
                    $.ajax({
                        type: "GET",
                        dataType: 'json',
                        url: "/ajax/"+id+"/edit",
                        success: function(response){
                            $('#id').val(response.id);
                            $('#name').val(response.name);
                            $('#detail').val(response.roll);
                            $('#author').val(response.mobile);
                        }
                    })
                }

                function updateData(){
                    var id = $('#id').val();
                    var name = $('#name').val();
                    var detail = $('#detail').val();
                    var author = $('#author').val();
                    $.ajax({
                        type: "PUT",
                        dataType: "json",
                        data: {name:name, roll:detail, mobile:author},
                        url: '/ajax/'+id,
                        success: function(response){
                            viewData();
                            clearData();
                            $('#save').show();
                            $('#update').hide();
                            $('.myid').hide();
                        }
                    })
                }

                function deleteData(id){
                    $.ajax({
                        type: "DELETE",
                        dataType: "json",
                        url: '/ajax/'+id,
                        success: function(response){
                            viewData();
                        }
                    })
                }
            </script>

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->

            </div>

@endsection
