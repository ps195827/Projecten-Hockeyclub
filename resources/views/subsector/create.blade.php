@extends('template_backend_admin.home')
@section('sub-title','Nieuwe Subsector')
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

    <form action="{{ route('subsector.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Subsector</label>
        <input type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
        <label>Sector</label>
        <select class="form-control" name="sector_id">
        <option value="" holder>Kies een sector</option>
            @foreach($sector as $result)
                <option value="{{ $result->id }}">{{ $result->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-block" value="Nieuwe subsector toevoegen">
    </div>
</form>


@endsection