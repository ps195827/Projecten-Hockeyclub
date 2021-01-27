@extends('template_backend_admin.home')
@section('sub-title','Documenten')
@section('path')
  <div class="section-header-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('media.index') }}">Media</a></li>
            <li class="breadcrumb-item active" aria-current="page">Documenten</li>
        </ol>
    </nav>
  </div>
@endsection
@section('content')


    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                <strong>Success</strong> , {{ Session('success') }}
            </div>
        </div>
    @endif

    <a href="{{ route('document.create') }}" class="btn btn-success btn-sm">Maak nieuwe document aan</a>
    <br>
    <br>
        <table class="table table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Titel</th>
                    <th>Link</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($document as $result => $resultaat)
                <tr>
                    <td>{{ $result + $document->firstitem() }}</td>
                    <td>{{ $resultaat->titel }}</td>
                    <td>{{ $resultaat->link }}</td>
                    <td> 
                        <form action="{{ route('document.destroy', $resultaat->id )}}" method="POST">
                        @csrf
                        @method('delete')
                            <a href="uploads/documenten/{{ $resultaat->link }}" download="{{ $resultaat->link }}" class="btn btn-icon"><i class="fas fa-download"></i> download</a>
                            <a href="{{ route('document.edit' , $resultaat->id ) }}" class="btn btn-primary btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr> 
            @endforeach
            </tbody>
        </table>
        {{ $document->links() }}

@endsection