@extends('template_backend_admin.home')
@section('sub-title','Edit Trainingsonderdeel')
@section('content')


    @if(count($errors)>0)
        @foreach($errors->all() as $errors)
            <div class="alert alert-danger" role="alert">
                {{ $errors }}
            </div>
        @endforeach
    @endif

<form action="{{ route('trainingsonderdeel.update', $trainingsonderdeel->id) }}" method="POST">
    @csrf
    @method('patch')
    <div class="form-group">
        <label>Trainingsonderdeel</label>
        <input type="text" class="form-control" name="name" value="{{ $trainingsonderdeel->name }}">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-block" value="Edit Trainingsonderdeel">
    </div>
</form>


@endsection