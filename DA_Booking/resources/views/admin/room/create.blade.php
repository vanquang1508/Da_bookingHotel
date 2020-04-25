@extends('admin.layouts.main')
@section('title','Create Room')
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
    {{Form::open(['url'=>'admin/room', 'method'=>'post'])}}
    <div class="container row">
        <div class="col-6">
            <h3>Add new Room</h3>
        <div class="form-group">
            {{Form::label('Name:')}}
            {{Form::text('name','',['class'=>'form-control'])}}
        </div>
        
        <div class="form-group">
            {{Form::label('Decription (*):')}}
            {{Form::textarea('description','',['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('Acreage:')}}
            {{Form::text('acreage','',['class'=>'form-control'])}}
        </div>
        
        <div class="form-group">
                {{Form::label('Room Type:')}}
                {{Form::select('roomtype_id',$room_type,null,['class' => " form-control",'placeholder'=>'Chọn thể loại'])}}
        </div>

         <div class="form-group">
                {{ Form::label('Room Tag: ','',['class' => 'font-weight-bold']) }}
                {!! Form::select('tags[]', $tags,null,[
                    'class' => 'form-control tags','multiple'=>'multiple','id'=>'tags'
                ])
                !!}
        </div>
        <div class="form-group">
                {{ Form::label('Room Service: ','',['class' => 'font-weight-bold']) }}
                {!! Form::select('services[]', $services,null,[
                    'class' => 'form-control services','multiple'=>'multiple','id'=>'services'
                ])
                !!}
        </div>
        </div>

        <div class="col-6">
            <h5>Image</h5>
        <div class="form-group">
            {{Form::label('Avatar:')}}
            {{Form::text('avatar','',['class'=>'form-control'])}}
        </div>
        
        <div class="form-group">
            {{Form::label('Image Header:')}}
            {{Form::text('image_header','',['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('Image Body:')}}
            {{Form::text('image_body','',['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::submit('Save',['class'=>'btn btn-outline-info '])}}
            <a href="{{route('room.index')}}" class="btn btn-outline-dark"><i class="fas fa-undo-alt"></i></a>
        </div>
        </div>
    </div>
    {{Form::close()}}
    <!-- /.container-fluid -->
@endsection
@section('script')
    @include('admin.shared.scrip')
@endsection
