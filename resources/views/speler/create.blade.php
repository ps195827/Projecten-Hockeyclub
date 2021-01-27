@extends('template_backend_admin.home')
@section('sub-title','Nieuwe speler')
@section('path')
  <div class="section-header-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('speler.index') }}">Spelers</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create speler</li>
        </ol>
    </nav>
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

    <form action="{{ route('trainer.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email">
    </div>

    <div class="form-group">
        <label>Type</label>
        <select class="form-control" name="role">
            <option value="4" holder>Speler</option>
        </select> 
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password">
    </div>

    <div class="form-group">
        <label>In welk team komt deze speler</label>
        <select class="form-control" name="team">
        <option value="" holder>Kies een team</option>
        @foreach($team as $result)
            <option value="{{ $result->id }}">{{ $result->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-block" value="Create User">
    </div>
</form>

@endsection