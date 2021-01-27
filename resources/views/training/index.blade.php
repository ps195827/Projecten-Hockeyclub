@extends('template_backend_admin.home')
    @section('sub-title','Trainingen')
    @section('path')
        <div class="section-header-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Trainingen</li>
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

    <a href="{{ route('training.create') }}" class="btn btn-success btn-sm">Maak nieuwe training aan</a>
    <br><br>
    
        <table class="table table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Titel</th>
                    <th>Team</th>
                    <th>Trainingsdatum</th>
                    <th>Auteur</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($training as $result => $resultaat)
                <tr>
                    <td>{{ $result + $training->firstitem() }}</td>
                    <td>{{ $resultaat->titel }}</td>
                    <td>{{ $resultaat->team['name'] }}</td>
                    <td>{{ $resultaat->trainingdatum }}</td>
                    <td>{{ $resultaat->users['name'] }}</td>
                    <td> 
                        <form action="{{ route('training.destroy', $resultaat->id )}}" method="POST">
                        @csrf
                        @method('delete')
                            <span class="d-inline-block" data-toggle="tooltip" data-title="Details">
                                <a href="{{ route('training.show' , $resultaat->id ) }}" class="btn btn-sm btn-icon btn-success"><i class="fas fa-info-circle"></i></a>
                            </span>
                            <span class="d-inline-block" data-toggle="tooltip" data-title="Edit">
                                <a href="{{ route('training.edit' , $resultaat->id ) }}" class="btn btn-sm btn-icon btn-primary"><i class="far fa-edit"></i></a>
                            </span>
                            <span class="d-inline-block" data-toggle="tooltip" data-title="Delete">
                                <button type="submit" class="btn btn-sm btn-icon btn-danger"><i class="far fa-trash-alt"></i></button>
                            </span>
                            
                        </form>
                    </td>
                </tr> 
            @endforeach
            </tbody>
        </table>
        {{ $training->links() }}
    
@endsection