@extends('template_backend_admin.home')
@section('sub-title','Meldingen')
@section('path')
  <div class="section-header-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Meldingen</li>
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

        <table class="table table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Onderwerp</th>
                    <th>Melder</th>
                    <th>Email melder</th>
                    <th>Datum melding</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($melding as $result => $resultaat)
                <tr>
                    <td>{{ $result + $melding->firstitem() }}</td>
                    <td>{{ $resultaat->titel }}</td>
                    <td>{{ $resultaat->onderwerp }}</td>
                    <td>{{ $resultaat->users['name'] }}</td>
                    <td><a href="mailto:email">{{ $resultaat->users['email'] }}</a></td>
                    <td>{{ $resultaat->created_at->format('d-m-y m:h') }}</td>
                    <td> 
                        <form action="{{ route('melding.destroy', $resultaat->id )}}" method="POST">
                        @csrf
                        @method('delete')
                            <a href="{{ route('melding.show' , $resultaat->id ) }}" class="btn btn-success btn-sm">Details</a>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr> 
            @endforeach
            </tbody>
        </table>
        {{ $melding->links() }}

@endsection