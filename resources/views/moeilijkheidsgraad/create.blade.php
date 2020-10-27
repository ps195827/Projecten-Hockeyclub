@extends('template_backend_admin.home')
@section('sub-title','Nieuwe moeilijkheidsgraad')
@section('path')
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('home') }}">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="{{ route('moeilijkheidsgraad.index') }}">Moeilijkheidsgraad</a></div>
        <div class="breadcrumb-item">Create</div>
    </div>
@endsection
@section('content')


    @if(count($errors)>0)
        @foreach($errors->all() as $errors)
            <div class="alert alert-danger" role="alert">
                {{ $errors }}
            </div>
        @endforeach
    @endif

    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
            <b>Success</b> , {{ Session('success') }}
            </div>
        </div>
    @endif

    <form action="{{ route('moeilijkheidsgraad.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Moeilijkheidsgraad</label>
        <input type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-block" value="Nieuwe moeilijkheidsgraad toevoegen">
    </div>
</form>


@endsection