@extends('template_backend_admin.home')
    @section('sub-title','Oefeningen')
    @section('path')
        <div class="section-header-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Oefeningen</li>
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

    <a href="{{ route('oefening.create') }}" class="btn btn-success btn-sm">Maak nieuwe oefening aan</a>
    <br><br>
    
        <table class="table table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Titel</th>
                    <th>Domein</th>
                    <th>Sector</th>
                    <th>Subsector</th>
                    <th>Datum</th>
                    <th>Doelgroep</th>
                    <th>Auteur</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($oefening as $result => $resultaat)
                <tr>
                    <td>{{ $result + $oefening->firstitem() }}</td>
                    <td>{{ $resultaat->titel }}</td>
                    <td>{{ $resultaat->domein['name'] }}</td>
                    <td>{{ $resultaat->sector['name'] }}</td>
                    <td>{{ $resultaat->subsector['name'] }}</td>
                    <td>{{ $resultaat->created_at->format('d-m-y ') }}</td>
                    <td>
                    @foreach($resultaat->doelgroep as $doelgroeps)
                        {{ $doelgroeps->name }},
                    @endforeach
                    </td>
                    <td>{{ $resultaat->users['name'] }}</td>
                    <td> 
                        <form action="{{ route('oefening.destroy', $resultaat->id )}}" method="POST">
                        @csrf
                        @method('delete')
                            <span class="d-inline-block" data-toggle="tooltip" data-title="Details">
                                <a href="{{ route('oefening.show' , $resultaat->id ) }}" class="btn btn-sm btn-icon btn-success"><i class="fas fa-info-circle"></i></a>
                            </span>
                            <span class="d-inline-block" data-toggle="tooltip" data-title="Edit">
                                <a href="{{ route('oefening.edit' , $resultaat->id ) }}" class="btn btn-sm btn-icon btn-primary"><i class="far fa-edit"></i></a>
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
        {{ $oefening->links() }}
    
@endsection