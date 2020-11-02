@extends('template_backend_admin.home')
@section('sub-title','Nieuwe Doelgroep')
@section('path')
  <div class="section-header-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('doelgroep.index') }}">Doelgroep</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create doelgroep</li>
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

    <form action="{{ route('doelgroep.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Doelgroep</label>
        <input type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-block" value="Nieuwe doelgroep toevoegen">
    </div>
</form>


@endsection