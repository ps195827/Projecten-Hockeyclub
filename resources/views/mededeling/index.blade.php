@extends('template_backend_admin.home')
@section('sub-title','Mededelingen')
@section('path')
  <div class="section-header-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mededelingen</li>
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

    <a href="{{ route('mededeling.create') }}" class="btn btn-success btn-sm">Maak nieuwe mededeling aan</a>
    <br><br>

        <table class="table table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Titel</th>
                    <th>Verzonden</th>
                    <th>Auteur</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
            @foreach ($mededeling as $result => $resultaat)
                <tr>
                    <td>{{ $result + $mededeling->firstitem() }}</td>
                    <td>{{ $resultaat->titel }}</td>
                    <td>{{ $resultaat->created_at->format('d-m-y') }} - {{ $resultaat->created_at->format('m:h') }}</td>
                    <td>{{ $resultaat->users['name'] }}</td>
                    <td> 
                        <form action="{{ route('mededeling.destroy', $resultaat->id )}}" method="POST">
                        @csrf
                        @method('delete')
                            <a href="{{ route('mededeling.show' , $resultaat->id ) }}" class="btn btn-success btn-sm">Details</a>
                            <a href="{{ route('mededeling.edit' , $resultaat->id ) }}" class="btn btn-primary btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr> 
            @endforeach
            </tbody>
        </table>
        {{ $mededeling->links() }}

@endsection