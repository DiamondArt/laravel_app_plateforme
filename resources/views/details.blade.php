@extends('layouts.app')
@section('content')

<!-- Titlebar
================================================== -->
<div class="single-page-header freelancer-header" data-background-image="images/single-freelancer.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-image freelancer-avatar"><img src="images/user-avatar-big-02.jpg" alt=""></div>
						<div class="header-details">
							<h3>{{$pro->name}}<span>{{$pro->profession}}</span></h3>
							<ul>
								<li><div class="star-rating" data-rating="5.0"></div></li>
								<li><img class="flag" src="images/flags/de.svg" alt=""> {{$pro->ville}}</li>
								<li><div class="{{$pro->status}}-badge-with-title">{{$pro->status}}</div></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		
		<!-- Content -->
		<div class="col-xl-8 col-lg-8 content-right-offset">
			
			<!-- Page Content -->
			<div class="single-page-section">
				<h3 class="margin-bottom-25">A propos de moi</h3>
				<p class="">{{$pro->presentation}}</p>
			</div>

			<!-- Boxed List -->
			<div class="boxed-list margin-bottom-60">
				<div class="boxed-list-headline">
					<h3><i class="icon-material-outline-thumb-up"></i> Historique de travail et commentaires</h3>
				</div>
				<ul class="boxed-list-ul">

					<li>
						<div class="boxed-list-item">
							<!-- Content -->
							<div class="item-content">
								<h4>Décoration d'une salle de fête <span>Classé comme Professionnel</span></h4>
								<div class="item-details margin-top-10">
									<div class="star-rating" data-rating="5.0"></div>
									<div class="detail-item"><i class="icon-material-outline-date-range"></i> Mai 2018</div>
								</div>
								<div class="item-description">
									<p>Excellent travail, va certainement être réembauché. Le projet a été achevé non seulement avec les exigences, mais dans les délais, dans les limites de notre petit budget.</p>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<!-- Boxed List / End -->
			
			<!-- Boxed List -->
			<div class="boxed-list margin-bottom-60">
				<div class="boxed-list-headline">
					<h3><i class="icon-material-outline-business"></i> Historique d'emploi</h3>
				</div>
				<ul class="boxed-list-ul">
					<li>
						<div class="boxed-list-item">
							<!-- Avatar -->
							<div class="item-image">
								<img src="images/browse-companies-03.png" alt="">
							</div>
							
							<!-- Content -->
							<div class="item-content">
								<h4>Décoration d'une salle de Fête</h4>
								<div class="item-details margin-top-7">
									<div class="detail-item"><a href="#"><i class="icon-material-outline-business"></i> Acodia</a></div>
									<div class="detail-item"><i class="icon-material-outline-date-range"></i> Mai 2018 - Présent</div>
								</div>
								<div class="item-description">
									<p>Concentrez l'équipe sur les tâches à accomplir ou sur les exigences internes et externes du client.</p>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<!-- Boxed List / End -->

		</div>
		

		<!-- Sidebar -->
		<div class="col-xl-4 col-lg-4">
			<div class="sidebar-container">
				
				<!-- Profile Overview -->
				<div class="profile-overview">
					<div class="overview-item"><strong>${{$pro->honoraire}}</strong><span>Taux horaire</span></div>
					<div class="overview-item"><strong>53</strong><span>Travaux effectués</span></div>
					<div class="overview-item"><strong>22</strong><span>Réembauches</span></div>
				</div>

				<!-- Button -->
				<a href="#small-dialog" class="apply-now-button popup-with-zoom-anim margin-bottom-50">Faire une offre <i class="icon-material-outline-arrow-right-alt"></i></a>

				<!-- Freelancer Indicators -->
				<div class="sidebar-widget">
					<div class="freelancer-indicators">

						<!-- Indicator -->
						<div class="indicator">
							<strong>88%</strong>
							<div class="indicator-bar" data-indicator-percentage="88"><span></span></div>
							<span>Réussite professionnelle</span>
						</div>

						<!-- Indicator -->
						<div class="indicator">
							<strong>100%</strong>
							<div class="indicator-bar" data-indicator-percentage="100"><span></span></div>
							<span>Recommendation</span>
						</div>
						
						<!-- Indicator -->
						<div class="indicator">
							<strong>90%</strong>
							<div class="indicator-bar" data-indicator-percentage="90"><span></span></div>
							<span>Ponctualité</span>
						</div>	
											
						<!-- Indicator -->
						<div class="indicator">
							<strong>80%</strong>
							<div class="indicator-bar" data-indicator-percentage="80"><span></span></div>
							<span>Respect du budget</span>
						</div>
					</div>
				</div>
				
				<!-- Widget -->
				<div class="sidebar-widget">
					<h3>Profils sociaux</h3>
					<div class="freelancer-socials margin-top-25">
						<ul>
							<li><a href="{{$pro->facebook}}" title="Dribbble" data-tippy-placement="top"><i class="icon-brand-facebook-f"></i></a></li>
							<li><a href="{{$pro->twitter}}" title="Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
							<li><a href="{{$pro->site}}" title="Behance" data-tippy-placement="top"><i class="icon-brand-dribbble"></i></a></li>
						
						</ul>
					</div>
				</div>

				<!-- Widget -->
				<div class="sidebar-widget">
					<h3>Compétences</h3>
					<div class="task-tags">
						<span>{{$pro->competence}}</span>
						<span>{{$pro->competence_deux}}</span>
						<span>{{$pro->competence_trois}}</span>
						<span>{{$pro->competence_quatre}}</span>

					</div>
				</div>

				<!-- Widget -->
				<div class="sidebar-widget">
					<h3>Pièces jointes</h3>
					<div class="attachments-container">
						<a href="#" class="attachment-box ripple-effect"><span>Lettre de motivation</span><i>PDF</i></a>
						<a href="#" class="attachment-box ripple-effect"><span>Contrat</span><i>DOCX</i></a>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>
@endsection
