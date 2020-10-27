@extends('template_backend_admin.home')
    @section('sub-title','Oefeningen')
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
    <button onclick="window.print()" class="btn btn-danger btn-sm">Print</button>
    <script type="text/javascript">
        $(document).ready(function(){
        $('.btnprn').printPage();
        });
    </script>
    <br><br>

        <table class="table table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Titel</th>
                    <th>Domein</th>
                    <th>Doelgroep</th>
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
                    <td>{{ $resultaat->doelgroep['name'] }}</td>
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
        {{ $oefening->links() }}

@endsection