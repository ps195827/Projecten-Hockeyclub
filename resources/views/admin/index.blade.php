@extends('template_backend_admin.home')
    @section('sub-title','Admin gebruikers')
    @section('path')
  <div class="section-header-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Admin</li>
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

    <a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">Maak nieuwe doelgroep aan</a>
    <br><br>

        <table class="table table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>profielphoto</th>
                    <th>Volledige naam</th>
                    <th>Email</th>
                    <th>phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($admin as $result => $resultaat)
                <tr>
                    <td>{{ $result + $admin->firstitem() }}</td>
                    <td>moet nog in de database komen</td>
                    <td>{{ $resultaat->name }}</td>
                    <td>{{ $resultaat->email }}</td>
                    <td>moet nog in de database toegevoegd worden</td>
                    
                    <td> 
                    <form action="{{ route('admin.destroy', $resultaat->id )}}" method="POST">
                        @csrf
                        @method('delete')
                            <span class="d-inline-block" data-toggle="tooltip" data-title="Details">
                                <a href="{{ route('admin.show' , $resultaat->id ) }}" class="btn btn-sm btn-icon btn-success"><i class="fas fa-info-circle"></i></a>
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
        {{ $admin->links() }}

@endsection