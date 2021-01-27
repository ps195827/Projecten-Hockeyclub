@extends('template_backend_admin.home')
    @section('sub-title','Profiel')
    @section('path')
        <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ url('home') }}">Dashboard</a></div>
              <div class="breadcrumb-item">Profile</div>
        </div>
    @endsection
    @section('content')
      <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-5">
            <div class="card profile-widget">
              <div class="profile-widget-header">                     
                <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                <div class="profile-widget-items">
                  <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Team </div>
                    <div class="profile-widget-item-value">A4</div>
                  </div>
                </div>
              </div>

              <div class="profile-widget-description">
                <div class="profile-widget-name">{{ Auth::user()->name }}<div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Speler</div></div>
              </div>
            </div>
              <div class="alert alert-light  alert-has-icon">
                <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                  <div class="alert-body">
                      <div class="alert-title">Problemen met uw account?</div>
                      <a href="#">Klik hier</a> om het probleem te melden
                  </div>
                </div>
              </div> 
              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                  <div class="card-header">
                    <h4>Gegevens</h4>
                  </div>
                  <div class="card-body">
                    <form action="" method="POST">
                    @csrf
                    @method('patch')
                      <div class="row">
                        <div class="col-lg-6 col-12">
                          <div class="form-group">
                            <label>Voornaam</label>
                            <input type="text" class="form-control" name="voornaam">
                          </div>
                          <div class="form-group">
                            <label>Tussenvoegsel</label>
                            <input type="text" class="form-control" name="tussenvoegsel">
                          </div>
                          <div class="form-group">
                            <label>Achternaam</label>
                            <input type="text" class="form-control" name="achternaam">
                          </div>
                        </div>
                        <div class="col-lg-6 col-12">
                          <div class="form-group">
                            <label>Telefoonnummer</label>
                            <input type="text" class="form-control" name="telefoonnummer">
                          </div>

                          <div class="form-group">
                            <label>E-mailadres</label>
                            <input type="text" class="form-control" name="email">
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <label>Profielfoto</label>
                            <input type="file" class="form-control" name="profielfoto">
                          </div>
                        </div>
                        <div class="col-lg-6 col-12">
                          <div class="form-group">
                            <label>Wachtwoord</label>
                            <input type="password" class="form-control" name="password">
                          </div>
                        </div>
                        <div class="col-lg-6 col-12">
                          <div class="form-group">
                            <label>Bevestig wachtwoord</label>
                            <input type="password" class="form-control" name="password">
                          </div>

                          <div class="form-group text-right">
                              <input type="submit" class="btn btn-primary" value="Updaten">
                          </div>
                        </div>
                      </div>        
                    </form>
                  </div>
                </div>
              </div>
        </div>
    </div>
                 
               






    @endsection