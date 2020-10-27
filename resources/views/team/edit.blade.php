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

<div class="col-12">
  <div class="col-md-4">
    <img class="" src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" width="448" height="299" alt="Woman paying for a purchase">
  </div>
  <div class="col-md-8">
    <div class="">Marketing</div>
    <a href="#" class="">Finding customers for your new business</a>
    <p class="">Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.</p>
  </div>
</div>


@endsection