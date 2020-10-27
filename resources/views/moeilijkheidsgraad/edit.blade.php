@extends('template_backend_admin.home')
@section('sub-title','Edit moeilijkheidsgraad')
@section('path')
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ url('home') }}">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="{{ route('moeilijkheidsgraad.index') }}">Moeilijkheidsgraad</a></div>
        <div class="breadcrumb-item">Edit</div>
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

<form action="{{ route('moeilijkheidsgraad.update', $moeilijkheidsgraad->id) }}" method="POST">
    @csrf
    @method('patch')
    <div class="form-group">
        <label>Moeilijkheidsgraad</label>
        <input type="text" class="form-control" name="name" value="{{ $moeilijkheidsgraad->name }}">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-block" value="Edit moeilijkheidsgraad">
    </div>
</form>


@endsection