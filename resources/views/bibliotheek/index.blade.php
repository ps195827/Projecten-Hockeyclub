@extends('template_backend_admin.home')
@section('sub-title','Bibliotheek')
@section('path')
  <div class="section-header-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('media.index') }}">Media</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bibliotheek</li>
        </ol>
    </nav>
  </div>
@endsection
@section('content')

<div class="section-body">

            <h2 class="section-title">Foto's</h2>
            <div class="row">
              <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                    <img width="100%" heigth="auto" src="assets/image/download2.jpg" alt="">
                  <div class="article-details">
                    <div class="article-category"><a href="#">Foto's</a> <div class="bullet"></div> <a href="#">5 Days</a></div>
                    <div class="article-title">
                        <h6 class="text-primary">Excepteur sint occaecat cupidatat non proident</h6>
                    </div>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                  </div>
                </article>
              </div>
              <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                    <img width="100%" heigth="auto" src="assets/image/downloaden.jpg" alt="">
                  <div class="article-details">
                    <div class="article-category"><a href="#">Foto's</a> <div class="bullet"></div> <a href="#">5 Days</a></div>
                    <div class="article-title">
                        <h6 class="text-primary">Excepteur sint occaecat cupidatat non proident</h6>
                    </div>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                  </div>
                </article>
              </div>
              <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                    <img width="100%" heigth="auto" src="assets/image/download2.jpg" alt="">
                  <div class="article-details">
                    <div class="article-category"><a href="#">Foto's</a> <div class="bullet"></div> <a href="#">5 Days</a></div>
                    <div class="article-title">
                        <h6 class="text-primary">Excepteur sint occaecat cupidatat non proident</h6>
                    </div>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                  </div>
                </article>
              </div>
            </div>

            <h2 class="section-title">Documenten</h2>
            <div class="row">
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article article-style-b">
                  <div class="article-details">
                    <div class="article-title">
                      <h6 class="text-primary">Excepteur sint occaecat cupidatat non proident</h6>
                    </div>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
                    <div class="article-cta">
                        </i><a href="#">Downloaden <i class="fas fa-download"></i></a>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article article-style-b">
                  <div class="article-details">
                    <div class="article-title">
                        <h6 class="text-primary">Excepteur sint occaecat cupidatat non proident</h6>
                    </div>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                    <div class="article-cta">
                        </i><a href="#">Downloaden <i class="fas fa-download"></i></a>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article article-style-b">
                  <div class="article-details">
                    <div class="article-title">
                        <h6 class="text-primary">Excepteur sint occaecat cupidatat non proident</h6>
                    </div>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                    <div class="article-cta">
                        </i><a href="#">Downloaden <i class="fas fa-download"></i></a>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article article-style-b">
                  <div class="article-details">
                    <div class="article-title">
                        <h6 class="text-primary">Excepteur sint occaecat cupidatat non proident</h6>
                    </div>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                    <div class="article-cta">
                      </i><a href="#">Downloaden <i class="fas fa-download"></i></a>
                    </div>
                  </div>
                </article>
              </div>
            </div>
            <h2 class="section-title">Filmpjes</h2>
            <div class="row">
              <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                  <div class="article-header">
                    <iframe width="100%" height="220px" frameborder="0" allowfullscreen src="https://www.youtube.com/embed/tgbNymZ7vqY">
                    </iframe>
                  </div>
                  <div class="article-details">
                    <div class="article-category"><a href="#">Filmpje</a> <div class="bullet"></div> <a href="#">5 Days</a></div>
                    <div class="article-title">
                        <h6 class="text-primary">Excepteur sint occaecat cupidatat non proident</h6>
                    </div>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                  </div>
                </article>
              </div>
              <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                  <div class="article-header">
                    <iframe width="100%" height="220px" frameborder="0" allowfullscreen src="https://www.youtube.com/embed/tgbNymZ7vqY">
                    </iframe>
                  </div>
                  <div class="article-details">
                    <div class="article-category"><a href="#">Filmpje</a> <div class="bullet"></div> <a href="#">5 Days</a></div>
                    <div class="article-title">
                        <h6 class="text-primary">Excepteur sint occaecat cupidatat non proident</h6>
                    </div>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                  </div>
                </article>
              </div>
              <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                  <div class="article-header">
                    <iframe width="100%" height="220px" frameborder="0" allowfullscreen src="https://www.youtube.com/embed/tgbNymZ7vqY">
                    </iframe>
                  </div>
                  <div class="article-details">
                    <div class="article-category"><a href="#">Filmpje</a> <div class="bullet"></div> <a href="#">5 Days</a></div>
                    <div class="article-title">
                        <h6 class="text-primary">Excepteur sint occaecat cupidatat non proident</h6>
                    </div>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                  </div>
                </article>
              </div>
            </div>
          </div>
      

@endsection