@extends('template_backend_admin.home')
@section('sub-title','Edit Team')
@section('content')


    @if(count($errors)>0)
        @foreach($errors->all() as $errors)
            <div class="alert alert-danger" role="alert">
                {{ $errors }}
            </div>
        @endforeach
    @endif

<form action="{{ route('team.update', $team->id) }}" method="POST">
    @csrf
    @method('patch')
    <div class="form-group">
        <label>Team</label>
        <input type="text" class="form-control" name="name" value="{{ $team->name }}">
    </div>

    <div class="form-group">
        <label>Doelgroep</label>
        <select class="form-control" name="doelgroep_id">
        <option value="" holder>Kies een Doelgroep</option>
        @foreach($doelgroep as $result)
            <option value="{{ $result->id }}"
                @if($result->id == $team->doelgroep_id) 
                    selected
                @endif
            >{{ $result->name }}</option>
            @endforeach
        </select>
    </div> 

    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-block" value="Edit Team">
    </div>
</form>


@endsection