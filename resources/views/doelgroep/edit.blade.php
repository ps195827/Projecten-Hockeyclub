@extends('template_backend_admin.home')
@section('sub-title','Edit Doelgroep')
@section('content')


    @if(count($errors)>0)
        @foreach($errors->all() as $errors)
            <div class="alert alert-danger" role="alert">
                {{ $errors }}
            </div>
        @endforeach
    @endif

<form action="{{ route('doelgroep.update', $doelgroep->id) }}" method="POST">
    @csrf
    @method('patch')
    <div class="form-group">
        <label>Doelgroep</label>
        <input type="text" class="form-control" name="name" value="{{ $doelgroep->name }}">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-block" value="Edit doelgroep">
    </div>
</form>


@endsection