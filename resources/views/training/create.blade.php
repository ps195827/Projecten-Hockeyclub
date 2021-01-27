@extends('template_backend_admin.home')
@section('sub-title','Nieuwe Training')
    @section('path')
        <div class="section-header-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('training.index') }}">Trainingen</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Nieuwe Training</li>
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

    <form action="{{ route('training.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label>Titel</label>
            <input type="text" class="form-control" name="titel">
        </div>

        <div class="form-group">
            <label>Opmerking</label>
            <textarea class="form-control" name="opmerking" id="content"></textarea>
        </div>


    <div class="form-group">
        <label>Oefeningen</label>
        <select class="form-control select2" multiple="" name="oefening[]">
            @foreach($oefening as $oefenings)
                <option value="{{ $oefenings->id }}">
                    Titel: {{ $oefenings->titel }},
                    Domein:  {{ $oefenings->domein['name'] }}  ,
                    Sector:  {{ $oefenings->sector['name'] }}  ,
                    Subsector:  {{ $oefenings->subsector['name'] }}
                    @foreach($oefenings->doelgroep as $doelgroep)
                       Doelgroep: {{ $doelgroep->name }}
                    @endforeach
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
            <label>Trainingsdatum</label>
            <input type="date" class="form-control" name="trainingdatum">
        </div>

    <div class="form-group">
        <label>Team</label>
        <select class="form-control" name="team_id">
        <option value="" holder>Kies een Team</option>
        @foreach($team as $result)
            <option value="{{ $result->id }}">{{ $result->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-block" value="Niewe oefening toevoegen">
    </div>
  
</form>


<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>

@endsection