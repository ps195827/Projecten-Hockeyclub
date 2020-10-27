@extends('template_backend_admin.home')
    @section('sub-title','Moeilijkheidsgraad')
    @section('path')
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ url('home') }}">Dashboard</a></div>
            <div class="breadcrumb-item">Moeilijkheidsgraad</div>
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

    <a href="{{ route('moeilijkheidsgraad.create') }}" class="btn btn-success btn-sm">Maak nieuwe moeilijkheidsgraad aan</a>
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
            @foreach ($moeilijkheidsgraad as $result => $resultaat)
                <tr>
                    <td>{{ $result + $moeilijkheidsgraad->firstitem() }}</td>
                    <td>{{ $resultaat->name }}</td>
                    <td> 
                        <form action="{{ route('moeilijkheidsgraad.destroy', $resultaat->id )}}" method="POST">
                        @csrf
                        @method('delete')
                            <a href="{{ route('moeilijkheidsgraad.edit' , $resultaat->id ) }}" class="btn btn-primary btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr> 
            @endforeach
            </tbody>
        </table>
        {{ $moeilijkheidsgraad->links() }}

@endsection