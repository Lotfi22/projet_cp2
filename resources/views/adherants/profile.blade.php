@extends('layouts.solic')

@section('content')


	
<div class="container-fluid">



        <div class="card mb-4">


            <div class="card-body">

            	

				<div class="row row-sm">
				
					<div class="col-lg-4">

						<div class="card">
							@if ($adherant)
							<div class="card-body">
								<div class="ps-0">
									<div class="main-profile-overview">

										<div class="main-img-user profile-user">
											<img alt="" src="../../solic/assets/images/users/jss_user.png"><a class="ri-camera-line profile-edit" href="JavaScript:void(0);"></a>
										</div>
										<div class="d-flex justify-content-between mb-3">

											<div>
												
												<h5 class="main-profile-name">{{$adherant->nom}} {{$adherant->prenom}}</h5>
												<p class="main-profile-name-text">Adhérant {{$adherant->id}}</p>
												

											</div>
										</div>
										<div class="main-profile-work-list">
											<div class="media">
												<div class="media-logo text-success">
													<i class="fa fa-calendar"></i>
												</div>
												<div class="media-body">
													
													<h6>Date de Naissance</h6>
													
													<span>{{$adherant->date_naissance}}</span>
												</div>
											</div>

											<div class="media">
												<div class="media-logo text-success">
													<i class="fa fa-phone"></i>
												</div>
												<div class="media-body">
													
													<h6>Numéro Téléphone</h6>
													
													<span>{{$adherant->num_tel}}</span>	
												</div>
											</div>

											<div class="media">
												<div class="media-logo text-success">
													<i class="fa fa-phone"></i>
												</div>
												<div class="media-body">
													
													<h6>Numéro d'Urgence</h6>
													
													<span>{{$adherant->num_tel_urgence}}</span>	

												</div>
											</div>

											<div class="media">
												<div class="media-logo text-success">
													<i class="fa fa-envelope-o"></i>
												</div>
												<div class="media-body">
													
													<h6>Email</h6>
													
													<span>{{$adherant->email}}</span>	

												</div>
											</div>

											<div class="media">
												<div class="media-logo text-success">
													<i class="fa fa-map-marker"></i>
												</div>
												<div class="media-body">
													<h6>Adresse</h6>
													
													<span>{{$adherant->adresse}}</span>	

												</div>
											</div>

											<div class="media">
												<div class="media-logo text-success">
													<i class="fa fa-certificate"></i>
												</div>
												<div class="media-body">
													<h6>Type d'Abonnement</h6>
													
													<span>{{$adherant->type_abonnement}}</span>	

												</div>
											</div>
											
										</div>
										
									</div>
								</div>
							</div>
							@endif
						</div>

					</div>
				


					<div class="col-lg-8">
						<div class="main-content-body main-content-body-profile">

							<div class="tab-content">
								<div class="tab-pane active show" id="tab-51">
									<div id="profile-log-switch">

										<div class="card">
											<div class="card-header d-flex justify-content-between">
												<div class="media">
													<div class="media-user me-2">
														<div class="fa fa-calendar-check-o"></div>
													</div>
													<div class="media-body">
														<h6 class="mb-0 mg-t-9">Présences</h6>
													</div>
												</div>
											</div>

											<div class="card-body">
												<div class="table-responsive">
													<table class="table card-table text-nowrap table-striped" id="table_presences" width="70%" cellspacing="0">
														<thead class="bg-secondary text-white">
															<tr>
									                            <th>ID</th>
									                            <th>SÉANCE</th>
									                            <th>HEURE DÉBUT</th>
									                            <th>HEURE FIN</th>
									                            <th>ÉVALUATION</th>
									                            <th>DATE CRÉATION</th>
                        									</tr>
														</thead>
														<tbody>

                        								
                    									</tbody>
													</table>
												</div>
											</div>
										</div>
										

										<div class="card">
											<div class="card-header d-flex justify-content-between">
												<div class="media">
													<div class="media-user me-2">
														<div class="fa fa-users"></div>
													</div>
													<div class="media-body">
														<h6 class="mb-0 mg-t-9">Groupes</h6>
													</div>
												</div>
											</div>

											<div class="card-body">
												<div class="table-responsive">
													<table class="table card-table text-nowrap table-striped" id="table_presences" width="70%" cellspacing="0">
														<thead class="bg-secondary text-white">
															<tr>
									                            <th>ID GROUPE</th>
								                                <th>NOM</th>
								                                <th>COACH</th>
								                                <th>SPORT</th>
								                                <th>ABONNEMENT</th>
                        									</tr>
														</thead>
														<tbody>

                        								
                    									</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


				</div>


			

			</div>
		</div>
	

</div>


@endsection