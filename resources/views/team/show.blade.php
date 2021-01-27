@extends('template_backend_admin.home')
    @section('sub-title','Team')
    @section('path')
  <div class="section-header-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('team.index') }}">Teams</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $team->name }}</li>
        </ol>
    </nav>
  </div>
@endsection
    @section('content')
    <h2>spelers</h2>
    <table class="table table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Profielfoto</th>
                    <th>Naam</th>
                    <th>Team</th>
                </tr>
            </thead>
            <tbody>  
            @foreach($team->user as $user)   
                <tr>
                    <td></td>
                    <td>Komt nog in database</td>
                   
                        <td>{{ $user->name }}</td>
                   
                    <td>{{ $team->name }}</td>
                </tr> 
                @endforeach
            </tbody>
        </table>



    @endsection