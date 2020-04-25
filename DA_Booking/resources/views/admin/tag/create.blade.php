@extends('admin.layouts.main')
@section('title','Create Role')
@section('content')
<!-- Begin Page Content -->
    @if(Session::has('erro'))
            <div id="mydiv" style="position:absolute; right: 10px; top: 100px;" class="float-right mt-2 alert alert-success alert-dismissible fade show" role="alert" style="position: absolute;">
                <strong>{{ Session::get('erro') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    {{Form::open(['url'=>'admin/tag', 'method'=>'post'])}}
    <div class="container">
        <h3>Add new Tag</h3>
        <div class="form-group">
            {{Form::label('Name:')}}
            {{Form::text('name','',['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::submit('Save',['class'=>'btn btn-outline-info '])}}
            <a href="{{route('tag.index')}}" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
        </div>
    </div>
    {{Form::close()}}
    <!-- /.container-fluid -->
@endsection
@section('script')
    @include('admin.shared.scrip')
@endsection
