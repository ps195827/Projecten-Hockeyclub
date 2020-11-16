@extends('template_backend_admin.home')
    @section('sub-title','Oefening')
    @section('path')
        <div class="section-header-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('oefening.index') }}">Oefeningen</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $oefening->titel }}</li>
                </ol>
            </nav>
        </div>
    @endsection
    @section('content')
    
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <h2 class="section-title">Titel</h2>
            {{ $oefening->titel }}
            <h2 class="section-title">Domein</h2>
            {{ $oefening->domein['name'] }}
            <h2 class="section-title">Sector</h2>
            {{ $oefening->sector['name'] }}
            <h2 class="section-title">Subsector</h2>
            {{ $oefening->subsector['name'] }}
            <h2 class="section-title">Leerfase</h2>
            {{ $oefening->leerfase['name'] }}
            <h2 class="section-title">Moeilijkheidsgraad</h2>
            {{ $oefening->moeilijkheidsgraad['name'] }}
            <h2 class="section-title">Beschrijving</h2>
            {!! $oefening->beschrijving !!}
            <h2 class="section-title">Spelfase</h2>
            {{ $oefening->spelfase['name'] }}
            <h2 class="section-title">Trainingsonderdeel</h2>
            {{ $oefening->trainingsonderdeel['name'] }}
            <h2 class="section-title">Oefeningensduur</h2>
            {{ $oefening->duur }} minuten
            <h2 class="section-title">Hulpmiddelen</h2>
            {{ $oefening->hulpmiddelen }}
            <h2 class="section-title">Aandachtspunten</h2>
            {!! $oefening->aandachtspunten !!}
            <h2 class="section-title">Werkvorm</h2>
            {{ $oefening->werkvorm['name'] }}
            <h2 class="section-title">Fouten</h2>
            {!! $oefening->fouten !!}
        </div>

        

        <div class="col-12 col-md-6 col-lg-6">
            <h2 class="section-title">Makkelijker maken</h2>
            {!! $oefening->makkelijkmaken !!}
            <h2 class="section-title">Moeilijker maken</h2>
            {!! $oefening->moeilijkmaken !!}
            <h2 class="section-title">Tips</h2>
            {!! $oefening->tips !!}
            <h2 class="section-title">Afbeelding</h2>
            <img src="{{ asset( $oefening->afbeelding) }}" class="img-fluid" style="width:100%;">
            <h2 class="section-title">Video</h2>
            <iframe width="100%" height="300px" frameborder="0" allowfullscreen src="https://www.youtube.com/embed/tgbNymZ7vqY">
            </iframe>
            <h2 class="section-title">Info</h2>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                Auteur:
                <span >{{ $oefening->users['name'] }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                Gemaakt op:
                <span>{{ $oefening->created_at->format('d-m-y m:h') }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                Upgedate op:
                <span>{{ $oefening->updated_at->format('d-m-y m:h') }}</span>
                </li>
            </ul>
        </div>
    </div>


    @endsection