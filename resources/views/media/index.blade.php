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
                    <a href="" class="card-cta">View media <i class="fas fa-chevron-right"></i></a>
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
                    <p>Hier kunt u media foto's uploaden.</p>
                    <a href="features-setting-detail.html" class="card-cta">Foto's <i class="fas fa-chevron-right"></i></a>
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
                    <p>Hier kunt u media filmpjes uploaden.</p>
                    <a href="{{ route('video.index') }}" class="card-cta">Filmpjes <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-large-icons">
                  <div class="card-icon bg-primary text-white">
                    <i class="far fa-file-word"></i>
                  </div>
                  <div class="card-body">
                    <h4>Documenten</h4>
                    <p>Hier downloadbare documenten voor de media uploaden.</p>
                    <a href="{{ route('document.index') }}" class="card-cta">Documenten <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      

@endsection