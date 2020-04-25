@extends('admin.layouts.main')
@section('title','Index Room')
@section('content')
<!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Room Listings</h1>
        @if(Session::has('warning'))
            <div id="mydiv" style="position:absolute; right: 10px; top: 100px;" class="float-right mt-2 alert alert-success alert-dismissible fade show" role="alert" style="position: absolute;">
                <strong>{{ Session::get('warning') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <p class="mb-4">
            <a href="{{route('room.create')}}" class="btn btn-outline-secondary btn-sm">Add new <i class="fas fa-plus"></i></a>
        </p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Stt</th>
                            <th>Avatar</th>
                            <th>Name</th>
                            <th>Room Code</th>
                            <th>Acreage</th>
                            <th>Room Type</th>
                            <th>Description</th>
                            <th>Công cụ</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach($value as $key => $data)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$data->image->avatar}}</td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->room_code}}</td>
                                        <td>{{$data->acreage}}</td>
                                        <td>{{$data->room_type->name}}</td>
                                        <td>{{ substr(strip_tags($data->description), 0, 50)."..." }}</td>
                                        <td>
                                            <a href="{{route('permission.edit',$data->id)}}" class="ml-1 mr-1 float-left"><i class="far fa-edit"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
@section('script')
    @include('admin.shared.scrip')
@endsection
