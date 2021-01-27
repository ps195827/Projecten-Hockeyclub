@extends('template_backend_admin.home')
@section('sub-title','Trainers')
@section('path')
  <div class="section-header-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Trainers</li>
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

    <a href="{{ route('trainer.create') }}" class="btn btn-success btn-sm">Maak een nieuwe trainer aan</a>
    <br><br>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-sm">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>profielphoto</th>
                        <th>Volledige naam</th>
                        <th>Email</th>
                        <th>phone</th>
                        <th>Teams</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($trainer as $result => $resultaat)
                    <tr>
                        <td>{{ $result + $trainer->firstitem() }}</td>
                        <td>moet nog in de database komen</td>
                        <td>{{ $resultaat->name }}</td>
                        <td>{{ $resultaat->email }}</td>
                        <td>moet nog in de database toegevoegd worden</td>
                        <td>
                            <a href="{{ route('team.index') }}">
                                @foreach($resultaat->team as $teams)
                                    {{ $teams->name }},
                                @endforeach
                            </a>
                        </td>
                        <td> 
                            <form action="{{ route('trainer.destroy', $resultaat->id )}}" method="POST">
                            @csrf
                            @method('delete')
                                <a href="{{ route('trainer.show' , $resultaat->id ) }}" class="btn btn-success btn-sm">Details</a>
                                <a href="{{ route('trainer.edit' , $resultaat->id ) }}" class="btn btn-primary btn-sm">Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr> 
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $trainer->links() }}

@endsection