@extends('template_backend_admin.home')
    @section('sub-title','Melding')
    @section('path')
        <div class="section-header-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('melding.index') }}">Melding</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $melding->titel }}</li>
                </ol>
            </nav>
        </div>
    @endsection
    @section('content')
    
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <h2 class="section-title">Titel</h2>
            {{ $melding->titel }}
            <h2 class="section-title">Onderwerp</h2>
            {{ $melding->onderwerp }}
            <h2 class="section-title">Omschrijving</h2>
            {{ $melding->omschrijving }}
        </div>

        

        <div class="col-12 col-md-6 col-lg-6">
            <h2 class="section-title">Info melder</h2>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                Naam melder:
                <span >{{ $melding->users['name'] }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                Email:
                <span>{{ $melding->users['email'] }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                Datum Melding:
                <span>{{ $melding->created_at->format('d-m-y m:h') }}</span>
                </li>
            </ul>
        </div>
    </div>


    @endsection