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
							<li class="active" @if(request()->route()->getName() =='user.index') active @endif><a href="{{route('user.index')}}"><i class="icon-material-outline-dashboard"></i> Tableau de bord</a></li>
							<li><a href="dashboard-messages.html"><i class="icon-material-outline-question-answer"></i> Messages <span class="nav-tag">2</span></a></li>
							<li><a href="dashboard-bookmarks.html"><i class="icon-material-outline-star-border"></i> Notification</a></li>
						</ul>
						
						<ul data-submenu-title="Organize and Manage">
							<li><a href="#"><i class="icon-material-outline-business-center"></i> Mon abonnement</a>
								<ul>
									<!-- <li><a href="dashboard-manage-jobs.html">commission reçu<span class="nav-tag">3</span></a></li>
									<li><a href="dashboard-manage-candidates.html">commission non payé</a></li> -->
									<li><a href="{{route('user.abonnement.edit')}}">Choisir mon abonnement<span class="nav-tag">3</span></a></li>
									<li><a href="dashboard-manage-candidates.html">mes rappels</a></li>
								</ul>	
							</li>

							<li><a href="#"><i class="icon-material-outline-assignment"></i> Mes offres</a>
								<ul>
									<li><a href="dashboard-manage-bidders.html">offre reçu</a></li>
									<li><a href="dashboard-my-active-bids.html">offre accepté <span class="nav-tag">4</span></a></li>
								</ul>	
							</li>
						</ul>
						<ul data-submenu-title="Account">
							<li @if(request()->route()->getName() =='user.email.edit') active @endif><a href="{{route('user.email.edit')}}"><i class="icon-material-outline-settings"></i> Paramètres</a></li>
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
			<div class="container">
	<div class="row">

		<div class="col-xl-12">
			<!-- Pricing Plans Container -->
			<div class="pricing-plans-container">
			@foreach($abonnements as $abonnement)

				<!-- Plan -->
				<div class="pricing-plan">
					<h3>{{$abonnement->title}}</h3>
					<p class="margin-top-10">One time fee for one listing or task highlighted in search results.</p>
					<div class="pricing-plan-label billed-monthly-label"><strong>€{{$abonnement->prix}}</strong>/ {{$abonnement->type_abonnement}}</div>
					<div class="pricing-plan-features">
						<strong>Features of Basic Plan</strong>
						<ul>
							<li>{{$abonnement->periode}}Days Visibility</li>
						</ul>
					</div>
					<a href="{{route('user.abonnement.liste',['id'=>$abonnement->id])}}" class="button full-width margin-top-20">Buy Now</a>
				</div>
				@endforeach

			</div>

		</div>

	</div>
</div>

	
			
			<!-- Row / End -->

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









@endsection
