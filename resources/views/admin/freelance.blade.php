@extends('layouts.app')
@section('content')


			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- User Menu -->
				<div class="header-widget">
				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->
<!-- Dashboard Container -->
<div class="dashboard-container">

	<!-- Dashboard Sidebar
	================================================== -->
	<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>
				
				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">

						<ul>
							<li class="active" @if(request()->route()->getName() =='admin.index') active @endif><a href="{{route('admin.index')}}"><i class="icon-material-outline-dashboard"></i> Tableau de bord</a></li>
							<li><a href="dashboard-messages.html"><i class="icon-material-outline-question-answer"></i> Messages <span class="nav-tag">2</span></a></li>
							<li><a href="dashboard-reviews.html"><i class="icon-feather-bell"></i> Notifications<span class="nav-tag">3</span></a></li>
							<li><a href="#"><i class="icon-material-outline-face"></i> Membres</a>
								<ul>
									<li><a href="{{route('user.admin.freelance')}}">Gérer les freelancers</a></li>
									<li><a href="{{route('user.admin.client')}}">Gérer les employeurs</a></li>
								</ul>	
							</li>
						</ul>
						
						<ul data-submenu-title="Organize and Manage">
							<li><a href="#"><i class="icon-material-outline-business-center"></i> Emplois</a>
								<ul>
									<li><a href="dashboard-manage-jobs.html">Gérer les emplois <span class="nav-tag">3</span></a></li>
									<li><a href="dashboard-manage-candidates.html">Gérer les Freelancer</a></li>
									<li><a href="dashboard-post-a-job.html">Publier un emploi</a></li>
								</ul>	
							</li>
							<li><a href="#"><i class="icon-material-outline-assignment"></i>Tâches</a>
								<ul>
									<li><a href="dashboard-manage-tasks.html">Gérer les tâches <span class="nav-tag">2</span></a></li>
									<li><a href="dashboard-manage-bidders.html">Gérer les soumissionnaires</a></li>
									<li><a href="dashboard-my-active-bids.html">Mes offres actives <span class="nav-tag">4</span></a></li>
									<li><a href="dashboard-post-a-task.html">Publier une tâche</a></li>
								</ul>	
							</li>
						</ul>
						<ul data-submenu-title="Account">
							<li @if(request()->route()->getName() =='user.admin.edit') active @endif><a href="{{route('user.admin.edit')}}"><i class="icon-material-outline-settings"></i> Paramètres</a></li>
							<li><a href="{{route('logout')}}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
							<i class="icon-material-outline-power-settings-new"></i> Se déconnecter</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
						</ul>
					</div>
				</div>
				<!-- Navigation / End -->
				<br>
			<br>
			<br>
			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->
<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Gestion des Professionnels</h3>
				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Manage Candidates</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-supervisor-account"></i> {{$countFreelances}} Professionnels</h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
                                @foreach($freelances as $freelance)
								<li>
									<!-- Overview -->
									<div class="freelancer-overview manage-candidates">
										<div class="freelancer-overview-inner">

											<!-- Avatar -->
											<div class="freelancer-avatar">
												<div class="verified-badge"></div>
												<a href="#"><img src="images/user-avatar-big-03.jpg" alt=""></a>
											</div>

											<!-- Name -->
											<div class="freelancer-name">
												<h4><a href="#">{{$freelance->name}} <img class="flag" src="images/flags/au.svg" alt="" title="Australia" data-tippy-placement="top"></a></h4>

												<!-- Details -->
												<span class="freelancer-detail-item"><a href="#"><i class="icon-feather-mail"></i> {{$freelance->email}}</a></span>
												<span class="freelancer-detail-item"><i class="icon-feather-phone"></i>{{$freelance->telephone}}</span>

												<!-- Rating -->
												<div class="freelancer-rating">
													<div class="star-rating" data-rating="5.0"></div>
												</div>

												<!-- Buttons -->
												<div class="buttons-to-right always-visible margin-top-25 margin-bottom-5">
													<a href="#" class="button ripple-effect"><i class="icon-feather-file-text"></i> Download CV</a>
													<a href="#small-dialog" class="popup-with-zoom-anim button dark ripple-effect"><i class="icon-feather-mail"></i> Send Message</a>
													<a href="#" class="button gray ripple-effect ico" title="Remove Candidate" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
												</div>
											</div>
										</div>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>

			</div>
			<!-- Row / End -->


		</div>
	</div>
	<!-- Dashboard Content / End -->
	<!-- Send Direct Message Popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">
				<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Ajouter une categorie</h3>
				</div>
					
				<!-- Form -->
				<form method="post" id="send-pm" name="" action="{{route('admin.categories.store')}}">
                    {{csrf_field()}}
                    <input type="texte" name="name" placeholder="Message" class="with-border" required>
                    <button class="button full-width button-sliding-icon ripple-effect" type="submit" form="send-pm">Ajouter <i class="icon-material-outline-arrow-right-alt"></i></button>

				</form>
				
				<!-- Button -->

			</div>

		</div>
	</div>
</div>
<!-- Send Direct Message Popup / End -->

<!-- Send Direct Message Popup
================================================== -->
<div id="smal-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
	<!--Tabs -->
	<br><br>
	<div class="row">
				<!-- Dashboard Box -->
				<div class="col-xl-3"></div>
				<div class="col-xl-6 sign-in-form">
					<div class="dashboard-box margin-top-0 ">
						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-business-center"></i> Gestion des catégories</h3>
						</div>
						<div class="popup-tab-content content" id="tab">
							<ul class="dashboard-box-list">
								@foreach($categ as $cat)
								<li>
									<!-- Job Listing -->
									<div class="job-listing">
										<!-- Job Listing Details -->
										<div class="job-listing-details">
											<!-- Logo -->
											<a href="#" class="job-listing-company-logo">
												<img src="images/company-logo-02.png" alt="">
											</a>
											<!-- Details -->
											<div class="job-listing-description">
												<h3 class="job-listing-title"><a href="#">{{$cat->name}}</a></h3>
											</div>
										</div>
									</div>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="#" class="button red ripple-effect ico" title="Remove" data-tippy-placement="left"><i class="icon-feather-trash-2"></i></a>
									</div>
								</li>
								<br>

								@endforeach

							</ul>
						</div>
					</div>
				</div>
    </div>
</div>
<!-- Send Direct Message Popup / End -->
<div id="smalls-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">
				<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Ajouter un abonnement</h3>
				</div>
					
				<!-- Form -->
				<form method="post" id="send-pm" name="" action="{{route('admin.abonnement.store')}}">
                    {{csrf_field()}}
					<input type="texte" name="title" placeholder="Message" class="with-border" required>
					<select name="type_abonnement" class="form-control" id="">
						<option value="">choisir le type d'abonnement</option>
						<option value="">Mois</option>
						<option value="">Année</option>
					</select>
					<input type="number" name="prix" placeholder="ajouter le prix">
                    <button class="button full-width button-sliding-icon ripple-effect" type="submit" form="send-pm">Ajouter <i class="icon-material-outline-arrow-right-alt"></i></button>

				</form>
				
				<!-- Button -->

			</div>

		</div>
	</div>
</div>
<!-- Send Direct Message Popup / End -->
<div id="smals-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
	<!--Tabs -->
	<br><br>
	<div class="row">
				<!-- Dashboard Box -->
				<div class="col-xl-3"></div>
				<div class="col-xl-6 sign-in-form">
					<div class="dashboard-box margin-top-0 ">
						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-business-center"></i> Gestion des abonnements</h3>
						</div>
						<div class="popup-tab-content content" id="tab">
							<ul class="dashboard-box-list">
								@foreach($abonnements as $abonnement)
								<li>
									<!-- Job Listing -->
									<div class="job-listing">
										<!-- Job Listing Details -->
										<div class="job-listing-details">
											<!-- Logo -->
											<a href="#" class="job-listing-company-logo">
												<img src="images/company-logo-02.png" alt="">
											</a>
											<!-- Details -->
											<div class="job-listing-description">
												<h3 class="job-listing-title"><a href="#">{{$abonnement->title}}</a></h3>
											</div>
										</div>
										<div class="job-listing-footer">
										<ul>
														<li><i class="icon-material-outline-business"></i> {{$abonnement->type_abonnement}}</li>
														<li><i class="icon-material-outline-location-on"></i>{{$abonnement->prix}}</li>
													
													</ul>
										</div>
									</div>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="#" class="button red ripple-effect ico" title="Remove" data-tippy-placement="left"><i class="icon-feather-trash-2"></i></a>
									</div>
								</li>
								<br>

								@endforeach

							</ul>
						</div>
					</div>
				</div>
    </div>
</div>
    @endsection
