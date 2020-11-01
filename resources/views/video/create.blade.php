@extends('template_backend_admin.home')
@section('sub-title','Nieuwe Video')
@section('path')
  <div class="section-header-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('media.index') }}">Media</a></li>
            <li class="breadcrumb-item"><a href="{{ route('video.index') }}">Video</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nieuwe Video</li>
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

    <form action="{{ route('video.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Titel</label>
        <input type="text" class="form-control" name="titel">
    </div>

    <div class="form-group">
        <label>Omschrijving</label>
        <textarea class="form-control" name="omschrijving" id="content"></textarea>
    </div>

    <div class="form-group">
        <label>Link</label>
        <input type="text" class="form-control" name="link">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-block" value="Nieuwe video toevoegen">
    </div>
</form>

<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>


@endsection