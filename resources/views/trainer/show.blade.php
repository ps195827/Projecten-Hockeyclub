@extends('template_backend_admin.home')
    @section('sub-title','Trainer')
    @section('path')
  <div class="section-header-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('trainer.index') }}">Trainers</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $trainer->name }}</li>
        </ol>
    </nav>
  </div>
@endsection
    @section('content')
        <div class="row ">
            <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                    <div class="profile-widget-header">                     
                        <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                        <div class="profile-widget-items">
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Trainer van team(s): </div>
                                <div class="profile-widget-item-value">
                                    @foreach($trainer->team as $teams)
                                        {{ $teams->name }} <br>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="profile-widget-description">
                        <div class="profile-widget-name">{{ $trainer->name }}<div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Trainer</div></div>
                    </div>
                </div>
            </div> 

            <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                    <div class="card-header">
                        <h4>Gegevens</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <label>Voornaam</label>
                                <h5>{{ $trainer->name }}</h5>
                                <br>
                                <label>Tussenvoegsel</label>
                                <h5>Moet nog in de database komen</h5>
                                <br>
                                <label>Achternaam</label>
                                <h5>Moet nog in de database komen</h5>
                                <br>
                                <label>email</label>
                                <h5>{{ $trainer->email }}</h5>
                                <br>
                                <label>Telefoonnummer</label>
                                <h5>Komt nog in de database</h5>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    @endsection