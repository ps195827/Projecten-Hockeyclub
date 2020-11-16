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
    <div class="table-responsive">
        <table class="table table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Titel</th>
                    <th>Domein</th>
                    <th>Sector</th>
                    <th>Subsector</th>
                    <th>Datum</th>
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
                    <td>{{ $resultaat->created_at->format('d-m-y') }}</td>
                    <td>{{ $resultaat->users['name'] }}</td>
                    <td> 
                        <form action="{{ route('oefening.destroy', $resultaat->id )}}" method="POST">
                        @csrf
                        @method('delete')
                           <a href="{{ route('oefening.show' , $resultaat->id ) }}" class="btn btn-success btn-sm">Details</a>
                            <a href="{{ route('oefening.edit' , $resultaat->id ) }}" class="btn btn-primary btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr> 
            @endforeach
            </tbody>
        </table>
    </div>
        {{ $oefening->links() }}
@endsection