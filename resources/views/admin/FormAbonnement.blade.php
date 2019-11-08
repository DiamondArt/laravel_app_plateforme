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
							<li><a href="#"><i class="icon-material-outline-business-center"></i>Abonnements</a>
								<ul>
									<li><a href="{{route('admin.abonnement.create')}}">Ajouter un abonnement <span class="nav-tag">3</span></a></li>
								</ul>	
							</li>
							<li><a href="#"><i class="icon-material-outline-assignment"></i> Tâches</a>
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
        <div class="row">
<!-- Dashboard Box -->
    <div class="col-xl-12">
    <div class="dashboard-box margin-top-0">

        <!-- Headline -->
        <div class="headline">
            <h3><i class="icon-feather-folder-plus"></i> Soumission d'abonnement</h3>
        </div>
        <div class="content with-padding padding-bottom-10">
            <div class="row">
                <div class="col-xl-4">
                    <form action="{{route('admin.abonnement.store')}}" method="post">
                    {{csrf_field()}}                    <div class="submit-field">
                        <h5>Nom de l'abonnement</h5>
                        <input type="text" name="title" placeholder="nom" class="with-border">
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="submit-field">
                        <h5>Type d'abonnement</h5>
                        <select class="form-control with-border" name="type_abonnement" data-size="7" title="Select Job Type">
                            <option>choisir le type d'abonnement</option>
                            <option>Mois</option>
                            <OPTION>Trimestre</OPTION>
                            <option>Année</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="submit-field">
                        <h5>Duré d'abonnement</h5>
                        <select class="form-control with-border" name="periode" data-size="7" title="Select Job Type">
                            <option>choisir la duré d'abonnement</option>
                            <option>30</option>
                            <OPTION>90</OPTION>
                            <option>360</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="submit-field">
                        <h5>Price</h5>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="input-with-icon">
                                    <input class="form-control with-border" type="number" name="prix" placeholder="valeur">
                                    <i class="currency">euro</i>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
    <button type="submit" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i>Ajouter</button>
</div>
                </form>
            </div>
        </div>
    </div>
</div>



</div>

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2018 <strong>Weelance</strong>. Tous droits réservés.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" title="Facebook" data-tippy-placement="top">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Twitter" data-tippy-placement="top">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Google Plus" data-tippy-placement="top">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" title="LinkedIn" data-tippy-placement="top">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->






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
                    <input type="texte" name="name" placeholder="nom" class="with-border" required>
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
								@foreach($categories as $cat)
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



@endsection
