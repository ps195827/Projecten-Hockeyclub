@extends('template_backend_admin.home')
    @section('sub-title','Spelfase')
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

    <a href="{{ route('spelfase.create') }}" class="btn btn-success btn-sm">Maak nieuwe spelfase aan</a>
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
            @foreach ($spelfase as $result => $resultaat)
                <tr>
                    <td>{{ $result + $spelfase->firstitem() }}</td>
                    <td>{{ $resultaat->name }}</td>
                    <td> 
                        <form action="{{ route('spelfase.destroy', $resultaat->id )}}" method="POST">
                        @csrf
                        @method('delete')
                            <a href="{{ route('spelfase.edit' , $resultaat->id ) }}" class="btn btn-primary btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr> 
            @endforeach
            </tbody>
        </table>
        {{ $spelfase->links() }}

@endsection