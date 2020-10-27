@extends('template_backend_admin.home')
@section('sub-title','Dashboard')
@section('content')

    <div class="row">
				<div class="col-md-6 col-sm-6 col-12 ">
					<div class="hero bg-primary text-white">
						<div class="hero-inner">
							<h2>Welcome, {{ Auth::user()->name }}</h2>
							<p class="lead">You almost arrived, complete the information about.</p>
							<div class="mt-4">
								<a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Setup Account</a>
							</div>
						</div>
					</div>
                </div>
				
				  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="card card-statistic-1">
					  <div class="card-icon bg-danger">
						<i class="far fa-newspaper"></i>
					  </div>
					  <div class="card-wrap">
						<div class="card-header">
						  <h4>Aantal Oefeningen</h4>
						</div>
						<div class="card-body">
						  120
						</div>
					  </div>
					</div>
					
					<div class="card card-statistic-1">
					  <div class="card-icon bg-primary">
						<i class="far fa-user"></i>
					  </div>
					  <div class="card-wrap">
						<div class="card-header">
						  <h4>Aantal Teams</h4>
						</div>
						<div class="card-body">
						  23
						</div>
					  </div>
					</div>
				  </div>
				  
				  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="card card-statistic-1">
					  <div class="card-icon bg-success">
						<i class="fas fa-circle"></i>
					  </div>
					  <div class="card-wrap">
						<div class="card-header">
						  <h4>Aantal Gebruikers</h4>
						</div>
						<div class="card-body">
						  476
						</div>
					  </div>
					</div>
					
					<div class="card card-statistic-1">
					  <div class="card-icon bg-warning">
						<i class="far fa-file"></i>
					  </div>
					  <div class="card-wrap">
						<div class="card-header">
						  <h4>Aantal trainingen</h4>
						</div>
						<div class="card-body">
						  201
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
								<a href="#" class="btn btn-primary">Alle Nieuwe trainingen bekijken <i class="fas fa-chevron-right"></i></a>
							</div>
						</div>
					<div class="card-body p-0">
						<div class="table-responsive table-invoice">
							<table class="table table-striped">
							<tr>
								<th>Trainings ID</th>
								<th>Titel</th>
								<th>Creator</th>
								<th>Action</th>
							</tr>
							<tr>
								<td><a href="#">INV-87239</a></td>
								<td>Lopen met de bal</td>
								<td class="font-weight-600">Kusnadi</td>
								<td>
									<a href="#" class="btn btn-success">Details</a>
									<a href="#" class="btn btn-primary">Edit</a>
									<a href="#" class="btn btn-danger">Delete</a>
								</td>
							</tr>
							<tr>
								<td><a href="#">INV-48574</a></td>
								<td>Conditie opbouwen</td>
								<td class="font-weight-600">Hasan Basri</td>
								<td>
									<a href="#" class="btn btn-success">Details</a>
									<a href="#" class="btn btn-primary">Edit</a>
									<a href="#" class="btn btn-danger">Delete</a>
								</td>
							</tr>
							<tr>
								<td><a href="#">INV-76824</a></td>
								<td>De bal spelen</td>
								<td class="font-weight-600">Muhamad Nuruzzaki</td>
								<td>
									<a href="#" class="btn btn-success">Details</a>
									<a href="#" class="btn btn-primary">Edit</a>
									<a href="#" class="btn btn-danger">Delete</a>
								</td>
							</tr>
							<tr>
								<td><a href="#">INV-84990</a></td>
								<td>Conditie</td>
								<td class="font-weight-600">Agung Ardiansyah</td>
								<td>
									<a href="#" class="btn btn-success">Details</a>
									<a href="#" class="btn btn-primary">Edit</a>
									<a href="#" class="btn btn-danger">Delete</a>
								</td>
							</tr>
							<tr>
								<td><a href="#">INV-87320</a></td>
								<td>De bal spelen</td>
								<td class="font-weight-600">Ardian Rahardiansyah</td>
								<td>
									<a href="#" class="btn btn-success">Details</a>
									<a href="#" class="btn btn-primary">Edit</a>
									<a href="#" class="btn btn-danger">Delete</a>
								</td>
							</tr>
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
								<li class="media">
								<img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png" alt="avatar">
								<div class="media-body">
									<div class="float-right text-primary">Now</div>
									<div class="media-title">Farhan A Mujib</div>
									<span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
								</div>
								</li>
								<li class="media">
								<img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-2.png" alt="avatar">
								<div class="media-body">
									<div class="float-right">12m</div>
									<div class="media-title">Ujang Maman</div>
									<span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
								</div>
								</li>
								<li class="media">
								<img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-3.png" alt="avatar">
								<div class="media-body">
									<div class="float-right">17m</div>
									<div class="media-title">Rizal Fakhri</div>
									<span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
								</div>
								</li>
							</ul>
							<div class="text-center pt-1 pb-1">
								<a href="#" class="btn btn-primary btn-md btn-round">
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