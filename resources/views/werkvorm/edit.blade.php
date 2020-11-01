@extends('template_backend_admin.home')
@section('sub-title','Edit Werkvorm')
@section('path')
  <div class="section-header-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('werkvorm.index') }}">Werkvorm</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Werkvorm</li>
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

<form action="{{ route('werkvorm.update', $werkvorm->id) }}" method="POST">
    @csrf
    @method('patch')
    <div class="form-group">
        <label>Werkvorm</label>
        <input type="text" class="form-control" name="name" value="{{ $werkvorm->name }}">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-block" value="Edit werkvorm">
    </div>
</form>


@endsection