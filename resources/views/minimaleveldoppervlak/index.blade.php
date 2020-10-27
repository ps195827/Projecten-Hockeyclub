@extends('template_backend_admin.home')
    @section('sub-title','Minimale veldoppervlakte')
    @section('path')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Minimale veldoppervlakte</li>
        </ol>
    </nav>
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

    <a href="{{ route('minimaleveldoppervlak.create') }}" class="btn btn-success btn-sm">Maak nieuwe Minimale veldoppervlakte aan</a>
    <br><br>

        <table class="table table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($minimaleveldoppervlak as $result => $resultaat)
                <tr>
                    <td>{{ $result + $minimaleveldoppervlak->firstitem() }}</td>
                    <td>{{ $resultaat->name }}</td>
                    <td> 
                        <form action="{{ route('minimaleveldoppervlak.destroy', $resultaat->id )}}" method="POST">
                        @csrf
                        @method('delete')
                            <a href="{{ route('minimaleveldoppervlak.edit' , $resultaat->id ) }}" class="btn btn-primary btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr> 
            @endforeach
            </tbody>
        </table>
        {{ $minimaleveldoppervlak->links() }}

@endsection