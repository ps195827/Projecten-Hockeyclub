@extends('template_backend_admin.home')
@section('sub-title','Media')
@section('path')
  <div class="section-header-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Media</li>
        </ol>
    </nav>
  </div>
@endsection
@section('content')

          <div class="section-body">
            <div class="row">
              <div class="col-lg-6">
                <div class="card card-large-icons">
                  <div class="card-icon bg-primary text-white">
                    <i class="far fa-eye"></i>
                  </div>
                  <div class="card-body">
                    <h4>View media</h4>
                    <p>Bekijk de website live.</p>
                    <a href="" class="card-cta">View website <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-large-icons">
                  <div class="card-icon bg-primary text-white">
                    <i class="far fa-file-image"></i>
                  </div>
                  <div class="card-body">
                    <h4>Foto's</h4>
                    <p>Hier kunt u foto's voor de website uploaden.</p>
                    <a href="features-setting-detail.html" class="card-cta">Contactformulier <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-large-icons">
                  <div class="card-icon bg-primary text-white">
                    <i class="far fa-file-video"></i>
                  </div>
                  <div class="card-body">
                    <h4>Filmpjes</h4>
                    <p>Hier kunt u filmpjes voor de website uploaden.</p>
                    <a href="features-setting-detail.html" class="card-cta">Nieuwsberichten <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-large-icons">
                  <div class="card-icon bg-primary text-white">
                    <i class="far fa-file-word"></i>
                  </div>
                  <div class="card-body">
                    <h4>Download documenten</h4>
                    <p>Hier kunt u documenten uploaden.</p>
                    <a href="features-setting-detail.html" class="card-cta">Oefeningen <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      

@endsection