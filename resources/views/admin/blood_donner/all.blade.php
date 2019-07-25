@extends('layouts.admin')
@section('contents')
<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">All Blood Donner</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                <li class="breadcrumb-item active">Blood Donner</li>
                <li class="breadcrumb-item active">All Blood Donner</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">


{{-- edit part start --}}
<style>
    table th,
    table td{
        text-align: center;
        width: auto;
    }
    table td:nth-child(2){
        text-transform: capitalize;
    }
    table td:nth-child(3){
        text-transform: uppercase;
    }
</style>

<div class="container-fluid">
<div class="card-body all-user" style="overflow-x:scroll;">
    <table id="dt-example" class="table table-bordered text-center" cellspacing="0" width="100%">
        <thead class="text-center">
            <tr>
                <th>Name</th>
                <th>age</th>
                <th>Blood Group</th>
                <th>Time Between Last Donnet</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>manage</th>
            </tr>
        </thead>
        {{-- <tfoot>
            <tr>
                <th>Name</th>
                <th>age</th>
                <th>Blood Group</th>
                <th>Time Between Last Donnet</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>manage</th>
            </tr>
        </tfoot> --}}
        <tbody>
            @foreach ($all as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>
                    @php
                        $select=App\blood_donner::where('slug',$data->slug)->firstOrFail();
                        $end=Carbon\Carbon::now();
                        $start=Carbon\Carbon::parse($select->birth_date);
                        $length = $start->diffInDays($end);
                        $length = number_format($length/365);
                    @endphp
                    {{$length}} yrs
                </td>
                <td style="letter-spacing: 1px;">{{$data->blood_group}}</td>
                <td>
                    @php
                        $select=App\blood_donner::where('slug',$data->slug)->firstOrFail();
                        $end=Carbon\Carbon::now();
                        $start=Carbon\Carbon::parse($select->last_donnet);
                        $length = $start->diffInDays($end);
                        $length = number_format($length/30);
                    @endphp
                    {{$length}} months
                </td>
                <td>{{$data->mobile_no}}</td>
                <td>{{$data->address}}</td>
                <td>
                    <a href="{{route('view_donner',$data->slug)}}" title="view user"><i class="ti-plus"></i></a>
                    <a href="{{route('donner_update_view',$data->slug)}}" title="edit user information"><i class="ti-pencil"></i></a>
                    <a href="{{route('soft_delete',$data->slug)}}" title="delete user information"><i class="ti-trash"></i></a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            app._loading.show($("#dt-ext-responsive"), {
                spinner: true
            });
            $("#dt-example").DataTable({
                "responsive": false,
                "initComplete": function(settings, json) {
                    setTimeout(function() {
                        app._loading.hide($("#dt-ext-responsive"));
                    }, 1000);
                }
            });
        });

    </script>
</div>
</div>
@endsection
