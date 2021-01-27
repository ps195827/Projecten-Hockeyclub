@extends('template_backend_admin.home')
@section('sub-title','Edit Mededeling')
@section('path')
  <div class="section-header-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('mededeling.index') }}">Mededelingen</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Mededeling</li>
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

    <form action="{{ route('mededeling.update', $mededeling->id) }}" method="POST">
    @csrf
    @method('patch')
    <div class="form-group">
        <label>Titel</label>
        <input type="text" class="form-control" name="titel" value="{{ $mededeling->titel }}">
    </div>

    <div class="form-group">
        <label>Omschrijving</label>
        <textarea type="text" class="form-control" name="omschrijving" id="content">{{ $mededeling->omschrijving }}</textarea>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-block" value="Mededeling updaten">
    </div>
</form>

<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>


@endsection