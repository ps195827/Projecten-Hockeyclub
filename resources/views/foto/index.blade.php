@extends('template_backend_admin.home')
@section('sub-title','Foto')
@section('path')
  <div class="section-header-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('media.index') }}">Media</a></li>
            <li class="breadcrumb-item active" aria-current="page">Foto</li>
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
            <b>Success</b> , {{ Session('success') }}
            </div>
        </div>
    @endif

    <a href="{{ route('foto.create') }}" class="btn btn-success btn-sm">Maak nieuwe foto aan</a>
    <br><br>

        <table class="table table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Titel</th>
                    <th>Foto</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($foto as $result => $resultaat)
                <tr>
                    <td>{{ $result + $foto->firstitem() }}</td>
                    <td>{{ $resultaat->titel }}</td>
                    <td><img src="{{ asset( $resultaat->image) }}" class="img-fluid" style="width:50px;"></td>
                    <td> 
                        <form action="{{ route('foto.destroy', $resultaat->id )}}" method="POST">
                        @csrf
                        @method('delete')
                            <a href="{{ route('foto.edit' , $resultaat->id ) }}" class="btn btn-primary btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr> 
            @endforeach
            </tbody>
        </table>
        {{ $foto->links() }}

@endsection