@extends('template_backend_admin.home')
    @section('sub-title','Mededeling')
    @section('path')
        <div class="section-header-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('mededeling.index') }}">Mededelingen</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $mededeling->titel }}</li>
                </ol>
            </nav>
        </div>
    @endsection
    @section('content')

    <div class="row"> 
        <div class="mb-4 mt-4 col-12 col-lg-8 offset-lg-2">
        <h4>{{ $mededeling->titel }} </h4>
        {{ $mededeling->created_at->format('d-m-y') }} - {{ $mededeling->created_at->format('m:h') }}
        </div>   
        <div class="col-12 col-lg-8 offset-lg-2">
        {!! $mededeling->omschrijving !!} 
        </div>  

        <div class="mt-4 col-12 col-lg-8 offset-lg-2">
            <li class="media">
                <img alt="image" class="mr-3 rounded-circle" width="50" src="/assets/img/avatar/avatar-1.png">
                <div class="media-body">
                    <div class="media-title">{{ $mededeling->users['name'] }}</div>
                    <div class="text-job text-muted">Bestuur</div>
                </div>
            </li> 
        </div> 

              
    </div>
    


    @endsection