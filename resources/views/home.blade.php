@extends('template_backend_admin.home')
@section('sub-title','Dashboard')
@section('content')

    <div class="row">
				<div class="col-md-6 col-sm-6 col-12 ">
					<div class="hero bg-primary text-white">
						<div class="hero-inner">
							<h2>Welcome, {{ Auth::user()->name }}</h2>
							<p class="lead">Klaar om aan de slag te gaan</p>
							<div class="mt-4">
								<a href="{{ route('profiel.index') }}" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Setup Account</a>
							</div>
						</div>
					</div>
                </div>
				
				  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="card card-statistic-1">
					  <div class="card-icon bg-info">
						<i class="far fa-newspaper"></i>
					  </div>
					  <div class="card-wrap">
						<div class="card-header">
						  <h4>Aantal Oefeningen</h4>
						</div>
						<div class="card-body">
							{{ $oefeningcount }}
						</div>
					  </div>
					</div>
					
					<div class="card card-statistic-1">
					  <div class="card-icon bg-info">
						<i class="far fa-user"></i>
					  </div>
					  <div class="card-wrap">
						<div class="card-header">
						  <h4>Aantal Teams</h4>
						</div>
						<div class="card-body">
						{{ $teamcount }}
						</div>
					  </div>
					</div>
				  </div>
				  
				  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="card card-statistic-1">
					  <div class="card-icon bg-info">
						<i class="fas fa-circle"></i>
					  </div>
					  <div class="card-wrap">
						<div class="card-header">
						  <h4>Aantal Spelers</h4>
						</div>
						<div class="card-body">
						{{ $spelercount }}
						</div>
					  </div>
					</div>
					
					<div class="card card-statistic-1">
					  <div class="card-icon bg-info">
						<i class="far fa-file"></i>
					  </div>
					  <div class="card-wrap">
						<div class="card-header">
						  <h4>Aantal trainingen</h4>
						</div>
						<div class="card-body">
						{{ $trainingcount }}
						</div>
					  </div>
					</div>
				  </div>                  
          </div>
		  

          	<div class="row">
				<div class="col-lg-8 col-md-12 col-12 col-sm-12">
					<div class="card">
						<div class="card-header">
							<h4>Nieuwe trainingen</h4>
							<div class="card-header-action">
								<a href="{{ route('training.index') }}" class="btn btn-primary">Alle trainingen bekijken <i class="fas fa-chevron-right"></i></a>
							</div>
						</div>
					<div class="card-body p-0">
						<div class="table-responsive table-invoice">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>Titel</th>
										<th>productiedatum</th>
										<th>Creator</th>
										<th>Action</th>
									</tr>
								</thead>
								@foreach ($training as $result => $resultaat)
								<tbody>
									<tr>
										<td><a href="#">{{ $resultaat->id }}</a></td>
										<td>{{ $resultaat->titel }}</td>
										<td>{{ $resultaat->created_at->format('d-m-y H:m') }}</td>
										<td class="font-weight-600">{{ $resultaat->users['name'] }}</td>
										<td>
											<a href="" class="btn btn-success">Details</a>
										</td>
									</tr>
								</tbody>
							@endforeach
							</table>
						</div>
					</div>
				</div>
			</div>

				<div class="col-lg-4 col-md-12 col-12 col-sm-12">
					<div class="card">
						<div class="card-header">
						<h4>Meldingen</h4>
						</div>
						<div class="card-body">             
							<ul class="list-unstyled list-unstyled-border">
								@foreach ($melding as $result => $resultaat)
									<li class="media">
										<img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png" alt="avatar">
										<div class="media-body">
											<div class="float-right text-primary">{{ $resultaat->created_at->format('d-m-y H:m') }}</div>
											<div class="media-title">{{ $resultaat->users['name'] }}</div>
											<span class="text-small text-muted">{{ $resultaat->titel }}</span>
										</div>
									</li>
								@endforeach
							</ul>
							<div class="text-center pt-1 pb-1">
								<a href="{{ route('melding.index') }}" class="btn btn-primary btn-md btn-round">
								Bekijk alle meldingen
								</a>
							</div>
						</div>
					</div>
				</div>
		 </div>
           



          <div class="section-body">
          </div>
        </section>
      </div>
@endsection