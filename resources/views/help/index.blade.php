@extends('template_backend_admin.home')
@section('sub-title','Help')
@section('path')
  <div class="section-header-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Help</li>
        </ol>
    </nav>
  </div>
@endsection
@section('content')

<div class="row">

  <div class="col-12 col-md-6 col-lg-6">
    <div class="card-body">
      <div class="media">
        <div class="mr-3 alert-icon"><i style="font-size: 23px;" class="fas fa-fire"></i></div>
        <div class="media-body">
          <h5 class="mt-0">Dashboard</h5>
          <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. 
            Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
             fringilla. Donec lacinia congue felis in faucibus.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-md-6 col-lg-6">
    <div class="card-body">
      <div class="media">
      <div class="mr-3 alert-icon"><i style="font-size: 23px;" class="far fa-clipboard"></i></div>
        <div class="media-body">
          <h5 class="mt-0">Onderdelen</h5>
          <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-md-6 col-lg-6">
    <div class="card-body">
      <div class="media">
      <div class="mr-3 alert-icon"><i style="font-size: 23px;" class="fas fa-dumbbell"></i></div>
        <div class="media-body">
          <h5 class="mt-0">Oefeningen</h5>
          <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-md-6 col-lg-6">
    <div class="card-body">
      <div class="media">
      <div class="mr-3 alert-icon"><i style="font-size: 23px;" class="fas fa-running"></i></div>
        <div class="media-body">
          <h5 class="mt-0">Trainingen</h5>
          <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-md-6 col-lg-6">
    <div class="card-body">
      <div class="media">
      <div class="mr-3 alert-icon"><i style="font-size: 23px;" class="fas fa-user"></i></div>
        <div class="media-body">
          <h5 class="mt-0">Gebruikers</h5>
          <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-md-6 col-lg-6">
    <div class="card-body">
      <div class="media">
      <div class="mr-3 alert-icon"><i style="font-size: 23px;" class="fas fa-users"></i></div>
        <div class="media-body">
          <h5 class="mt-0">Teams</h5>
          <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-md-6 col-lg-6">
    <div class="card-body">
      <div class="media">
      <div class="mr-3 alert-icon"><i style="font-size: 23px;" class="fas fa-envelope"></i></div>
        <div class="media-body">
          <h5 class="mt-0">Meldingen</h5>
          <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-md-6 col-lg-6">
    <div class="card-body">
      <div class="media">
      <div class="mr-3 alert-icon"><i style="font-size: 23px;" class="fas fa-file-image"></i></div>
        <div class="media-body">
          <h5 class="mt-0">Media</h5>
          <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-md-6 col-lg-6">
    <div class="card-body">
      <div class="media">
      <div class="mr-3 alert-icon"><i style="font-size: 23px;" class="fab fa-html5"></i></div>
        <div class="media-body">
          <h5 class="mt-0">Website</h5>
          <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        </div>
      </div>
    </div>
  </div>

</div>
                    

@endsection 