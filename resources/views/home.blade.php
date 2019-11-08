
@extends('layouts.app')

@section('content')


<!-- Intro Banner
================================================== -->
<!-- add class "disable-gradient" to enable consistent background overlay -->
<div class="intro-banner" data-background-image="images/slider-index1.jpg">
	<div class="container">
		
    <!-- Intro Headline -->
		<div class="row">
			<div class="col-md-12">
				<div class="banner-headline" style="height: 400px; margin-top: -40px;">
					<h3>
						<strong>Embaucher des experts ou être embauché pour tout travail, à tout moment.</strong>
						<br>
						<span>Des milliers de personnes utilisent<strong class="color"> Notre plateforme</strong> pour réaliser leurs travaux.</span>
					</h3>
				</div>
			</div>
        </div>
		
		<!-- Search Bar -->
		<div class="row">
			<div class="col-md-12" style="margin-top: -150px;">
				<div class="intro-banner-search-form margin-top-95">
					<!-- Search Field -->
					<div class="intro-search-field with-autocomplete">
					<form  id="formAd" method="POST" :action="url">

						<label for="autocomplete-input" class="field-title ripple-effect">Recherche</label>
						<div class="input-with-icon">
							<input id="autocomplete-input" type="text" placeholder="Taper votre recherche" size="10px">
							<i class="fa fa-search" style="font-size:24px"></i>
						</div>
					</div>
					<div class="intro-search-field">
						<label for ="intro-keywords" class="field-title ripple-effect ">Catégories</label>
						<select name="category" id="category"  type="text" placeholder="Catégories" class="chosen-select">
							<option value="Graphisme">Plombier</option>
							<option value="Web/Développement Logiciel">Jardinier</option>
							<option value="Vidéo">Charpentier</option>
							<option value="Rédaction">Menuisier</option>
							<option value="Marketing">Ménagère</option>
							<option value="Audio">Comptable</option>
           				 </select>
					</div>

					<!-- Button -->
					<div class="intro-search-button">
						<button class="button ripple-effect" onclick="window.location.href='jobs-list-layout-full-page-map.html'">Rechercher</button>
					</div>
					</form>
				</div>
			</div>
		</div>

		<!-- Stats -->
		<div class="row">
			<div class="col-md-12">
				<ul class="intro-stats margin-top-45 hide-under-992px">
					<li>
						<strong class="counter">0</strong>
						<span>Emplois Postés</span>
					</li>
					<li>
						<strong class="counter">0</strong>
						<span>Tâches Postées</span>
					</li>
					<li>
						<strong class="counter">0</strong>
						<span>Professionel</span>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<!-- Category Boxes -->
<div class="section margin-top-65">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
	
					<div class="section-headline centered margin-bottom-15">
						<h3>Les profils les plus demandés</h3>
					</div>
	
					<!-- Category Boxes Container -->
					<div class="categories-container" style="margin-bottom:40px;">
	
						<!-- Category Box -->
						<a href="freelancers-grid-layout-full-page.html" class="category-box col-lg-4 col-sm-6" style="text-decoration: none;">
							<div class="category-box-icon">
								<i class="icon-material-outline-compare-arrows"></i>
							</div>
							<div class="category-box-counter">612</div>
							<div class="category-box-content">
								<h3>Plombiers</h3>
								<p>Reparations / Installations</p>
							</div>
						</a>
	
						<!-- Category Box -->
						<a href="freelancers-grid-layout-full-page.html" class="category-box col-lg-4 col-sm-6" style="text-decoration: none;">
							<div class="category-box-icon">
								<i class="icon-feather-users"></i>
							</div>
							<div class="category-box-counter">113</div>
							<div class="category-box-content">
								<h3>Menagère</h3>
								<p>Nettoyage / Temps plein, Temps partiel / A la tâche</p>
							</div>
						</a>
	
						<!-- Category Box -->
						<a href="freelancers-grid-layout-full-page.html" class="category-box col-lg-4 col-sm-6" style="text-decoration: none;">
							<div class="category-box-icon">
								<i class="icon-material-outline-account-balance"></i>
							</div>
							<div class="category-box-counter">186</div>
							<div class="category-box-content">
								<h3>Charpentiers</h3>
								<p>Contruction / Reparation / Amelioration</p>
							</div>
						</a>
	
						<!-- Category Box -->
						<a href="freelancers-grid-layout-full-page.html" class="category-box col-lg-4 col-sm-6" style="text-decoration: none;">
							<div class="category-box-icon">
								<i class="icon-feather-codepen"></i>
							</div>
							<div class="category-box-counter">298</div>
							<div class="category-box-content">
								<h3>Menuisiers</h3>
								<p>Construction / Reparation / travail à la tâche</p>
							</div>
						</a>
	
						<!-- Category Box -->
						<a href="freelancers-grid-layout-full-page.html" class="category-box col-lg-4 col-sm-6" style="text-decoration: none;">
							<div class="category-box-icon">
								<i class="icon-material-outline-business"></i>
							</div>
							<div class="category-box-counter">549</div>						
							<div class="category-box-content">
								<h3>Maçons</h3>
								<p>Contruction / Tâches / Petit travaux</p>
							</div>
						</a>
	
						<!-- Category Box -->
						<a href="freelancers-grid-layout-full-page.html" class="category-box col-lg-4 col-sm-6" style="text-decoration: none;">
							<div class="category-box-icon">
								<i class="icon-brand-nutritionix"></i>
							</div>
							<div class="category-box-counter">873</div>
							<div class="category-box-content">
								<h3>Jardinier & Fleuriste</h3>
								<p>Vente / Nettoyage / Service à domicile  </p>
							</div>
						</a>
	
					</div>
	
				</div>
			</div>
		</div>
	</div>
	<!-- Category Boxes / End -->
	
	<!-- Highest Tauxd Freelancers -->
	<div class="section gray padding-top-65 padding-bottom-70 full-width-carousel-fix">
		<div class="container">
			<div class="row">
	
				<div class="col-xl-12">
					<!-- Section Headline -->
					<div class="section-headline margin-top-0 margin-bottom-25">
						<h3>Freelancers les mieux notés</h3>
						<a href="freelancers-grid-layout.html" class="headline-link">Parcourir tous les professionels</a>
					</div>
				</div>
	
				<div class="col-xl-12">
					<div class="default-slick-carousel freelancers-container freelancers-grid-layout">
	
						<!--Freelancer -->
						<div class="freelancer">
	
							<!-- Overview -->
							<div class="freelancer-overview">
								<div class="freelancer-overview-inner">
									
									<!-- Bookmark Icon -->
									<span class="bookmark-icon"></span>
									
									<!-- Avatar -->
									<div class="freelancer-avatar">
										<div class="verified-badge"></div>
										<a href="single-freelancer-profile.html"><img src="images/user-avatar-big-01.jpg" alt=""></a>
									</div>
	
									<!-- Name -->
									<div class="freelancer-name">
										<h4><a href="single-freelancer-profile.html">Test Prof <img class="flag" src="images/flags/gb.svg" alt="" title="United Kingdom" data-tippy-placement="top"></a></h4>
										<span>Jardinier</span>
									</div>
	
									<!-- Rating -->
									<div class="freelancer-rating">
										<div class="star-rating" data-rating="5.0"></div>
									</div>
								</div>
							</div>
							
							<!-- Details -->
							<div class="freelancer-details">
								<div class="freelancer-details-list">
									<ul>
										<li>Location <strong><i class="icon-material-outline-location-on"></i> Paris</strong></li>
										<li>Taux <strong>$60 / hr</strong></li>
										<li>Succès d'emploi <strong>95%</strong></li>
									</ul>
								</div>
								<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">Voir Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
							</div>
						</div>
						<!-- Freelancer / End -->
	
						<!--Freelancer -->
						<div class="freelancer">
	
							<!-- Overview -->
							<div class="freelancer-overview">
								<div class="freelancer-overview-inner">
									
									<!-- Bookmark Icon -->
									<span class="bookmark-icon"></span>
									
									<!-- Avatar -->
									<div class="freelancer-avatar">
										<div class="verified-badge"></div>
										<a href="single-freelancer-profile.html"><img src="images/user-avatar-big-02.jpg" alt=""></a>
									</div>
	
									<!-- Name -->
									<div class="freelancer-name">
										<h4><a href="#">Hervé <img class="flag" src="images/flags/de.svg" alt="" title="Germany" data-tippy-placement="top"></a></h4>
										<span>Menuisier</span>
									</div>
	
									<!-- Rating -->
									<div class="freelancer-rating">
										<div class="star-rating" data-rating="5.0"></div>
									</div>
								</div>
							</div>
							
							<!-- Details -->
							<div class="freelancer-details">
								<div class="freelancer-details-list">
									<ul>
										<li>Location <strong><i class="icon-material-outline-location-on"></i> Maroc</strong></li>
										<li>Taux <strong>$40 / hr</strong></li>
										<li>Succès d'emploi <strong>88%</strong></li>
									</ul>
								</div>
								<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">Voir Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
							</div>
						</div>
						<!-- Freelancer / End -->
	
						<!--Freelancer -->
						<div class="freelancer">
	
							<!-- Overview -->
							<div class="freelancer-overview">
								<div class="freelancer-overview-inner">
									<!-- Bookmark Icon -->
									<span class="bookmark-icon"></span>
									
									<!-- Avatar -->
									<div class="freelancer-avatar">
										<a href="single-freelancer-profile.html"><img src="images/user-avatar-placeholder.png" alt=""></a>
									</div>
	
									<!-- Name -->
									<div class="freelancer-name">
										<h4><a href="#">Test Prof 2 <img class="flag" src="images/flags/pl.svg" alt="" title="Poland" data-tippy-placement="top"></a></h4>
										<span>Fleuriste </span>
									</div>
	
									<!-- Rating -->
									<div class="freelancer-rating">
										<div class="star-rating" data-rating="4.9"></div>
									</div>
								</div>
							</div>
							
							<!-- Details -->
							<div class="freelancer-details">
								<div class="freelancer-details-list">
									<ul>
										<li>Location <strong><i class="icon-material-outline-location-on"></i> Toulouse</strong></li>
										<li>Taux <strong>$50 / hr</strong></li>
										<li>Succès d'mploi <strong>100%</strong></li>
									</ul>
								</div>
								<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">Voir Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
							</div>
						</div>
						<!-- Freelancer / End -->
	
						<!--Freelancer -->
						<div class="freelancer">
	
							<!-- Overview -->
							<div class="freelancer-overview">
									<div class="freelancer-overview-inner">
									<!-- Bookmark Icon -->
									<span class="bookmark-icon"></span>
									
									<!-- Avatar -->
									<div class="freelancer-avatar">
										<div class="verified-badge"></div>
										<a href="single-freelancer-profile.html"><img src="images/user-avatar-big-03.jpg" alt=""></a>
									</div>
	
									<!-- Name -->
									<div class="freelancer-name">
										<h4><a href="#">Sindy Forest <img class="flag" src="images/flags/au.svg" alt="" title="Australia" data-tippy-placement="top"></a></h4>
										<span>Magento Certified Developer</span>
									</div>
	
									<!-- Rating -->
									<div class="freelancer-rating">
										<div class="star-rating" data-rating="5.0"></div>
									</div>
								</div>
							</div>
							
							<!-- Details -->
							<div class="freelancer-details">
								<div class="freelancer-details-list">
									<ul>
										<li>Location <strong><i class="icon-material-outline-location-on"></i> Brisbane</strong></li>
										<li>Taux <strong>$70 / hr</strong></li>
										<li>Succès d'emploi <strong>100%</strong></li>
									</ul>
								</div>
								<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">Voir Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
							</div>
						</div>
						<!-- Freelancer / End -->
						
						<!--Freelancer -->
						<div class="freelancer">
	
							<!-- Overview -->
							<div class="freelancer-overview">
									<div class="freelancer-overview-inner">
									<!-- Bookmark Icon -->
									<span class="bookmark-icon"></span>
									
									<!-- Avatar -->
									<div class="freelancer-avatar">
										<a href="single-freelancer-profile.html"><img src="images/user-avatar-placeholder.png" alt=""></a>
									</div>
	
									<!-- Name -->
									<div class="freelancer-name">
										<h4><a href="#">Sebastiano Piccio <img class="flag" src="images/flags/it.svg" alt="" title="Italy" data-tippy-placement="top"></a></h4>
										<span>Laravel Dev</span>
									</div>
	
									<!-- Rating -->
									<div class="freelancer-rating">
										<div class="star-rating" data-rating="4.5"></div>
									</div>
								</div>
							</div>
							
							<!-- Details -->
							<div class="freelancer-details">
								<div class="freelancer-details-list">
									<ul>
										<li>Location <strong><i class="icon-material-outline-location-on"></i> Milan</strong></li>
										<li>Taux <strong>$80 / hr</strong></li>
										<li>Succès d'emploi <strong>89%</strong></li>
									</ul>
								</div>
								<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">Voir Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
							</div>
						</div>
						<!-- Freelancer / End -->
									
						<!--Freelancer -->
						<div class="freelancer">
	
							<!-- Overview -->
							<div class="freelancer-overview">
									<div class="freelancer-overview-inner">
									<!-- Bookmark Icon -->
									<span class="bookmark-icon"></span>
									
									<!-- Avatar -->
									<div class="freelancer-avatar">
										<a href="single-freelancer-profile.html"><img src="images/user-avatar-placeholder.png" alt=""></a>
									</div>
	
									<!-- Name -->
									<div class="freelancer-name">
										<h4><a href="#">Gabriel Lagueux <img class="flag" src="images/flags/fr.svg" alt="" title="France" data-tippy-placement="top"></a></h4>
										<span>WordPress Expert</span>
									</div>
	
									<!-- Rating -->
									<div class="freelancer-rating">
										<div class="star-rating" data-rating="5.0"></div>
									</div>
								</div>
							</div>
							
							<!-- Details -->
							<div class="freelancer-details">
								<div class="freelancer-details-list">
									<ul>
										<li>Location <strong><i class="icon-material-outline-location-on"></i> Paris</strong></li>
										<li>Taux <strong>$50 / hr</strong></li>
										<li>Succès d'emploi <strong>100%</strong></li>
									</ul>
								</div>
								<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">Voir Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
							</div>
						</div>
						<!-- Freelancer / End -->
	
	
					</div>
				</div>
	
			</div>
		</div>
	</div>
	<!-- Highest Tauxd Freelancers / End-->
	
	

	<!-- Footer
	================================================== -->
	<div id="footer">
		
		<!-- Footer Top Section -->
		<div class="footer-top-section">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
	
						<!-- Footer Rows Container -->
						<div class="footer-rows-container">
							
							<!-- Left Side -->
							<div class="footer-rows-left">
								<div class="footer-row">
									<div class="footer-row-inner footer-logo">
										<img src="images/logo2.png" alt="">
									</div>
								</div>
							</div>
							
							<!-- Right Side -->
							<div class="footer-rows-right">
	
								<!-- Social Icons -->
								<div class="footer-row">
									<div class="footer-row-inner">
										<ul class="footer-social-links">
											<li>
												<a href="#" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
													<i class="icon-brand-facebook-f"></i>
												</a>
											</li>
											<li>
												<a href="#" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
													<i class="icon-brand-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">
													<i class="icon-brand-google-plus-g"></i>
												</a>
											</li>
											<li>
												<a href="#" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
													<i class="icon-brand-linkedin-in"></i>
												</a>
											</li>
										</ul>
										<div class="clearfix"></div>
									</div>
								</div>
								
								<!-- Language Switcher
								<div class="footer-row">
									<div class="footer-row-inner">
										<select class="selectpicker language-switcher" data-selected-text-format="count" data-size="5">
											<option selected>Anglais</option>
											<option>Français</option>
											<option>Español</option>
											<option>Allemand</option>
										</select>
									</div>
								</div> -->
							</div>
	
						</div>
						<!-- Footer Rows Container / End -->
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Top Section / End -->
	
		<!-- Footer Middle Section -->
		<div class="footer-middle-section">
			<div class="container">
				<div class="row">
	
					<!-- Links 
					<div class="col-xl-2 col-lg-2 col-md-3">
						<div class="footer-links">
							<h3>Pour les Professionnels</h3>
							<ul>
								<li><a href="#"><span>Parcourir les emplois</span></a></li>
								<li><a href="#"><span>Alertes d'emploi</span></a></li>
								<li><a href="#"><span>Mes signets</span></a></li>
							</ul>
						</div>
					</div>-->
	
					<!-- Links -->
					<div class="col-xl-2 col-lg-2 col-md-3">
						<div class="footer-links">
							<h3>Pour les Clients</h3>
							<ul>
								<li><a href="freelancers-grid-layout-full-page.html"><span>Parcourir les Professionels</span></a></li>
								<li><a href="#"><span>Offres et Abonnement</span></a></li>
							</ul>
						</div>
					</div>
	
					<!-- Links -->
					<div class="col-xl-2 col-lg-2 col-md-3">
						<div class="footer-links">
							<h3>Liens Utiles</h3>
							<ul>
								<li><a href="pages-contact.html"><span>Contact</span></a></li>
								<li><a href="#"><span>Politique de Confidentialité</span></a></li>
								<li><a href="#"><span>Conditions d'utilisation</span></a></li>
							</ul>
						</div>
					</div>
	
					<!-- Links -->
					<div class="col-xl-2 col-lg-2 col-md-3">
						<div class="footer-links">
							<h3>Comptes</h3>
							<ul>
								<li><a href="pages-login.html"><span>Se connecter</span></a></li>
								<li><a href="dashboard.html"><span>Mon compte</span></a></li>
							</ul>
						</div>
					</div>
	
					<!-- Newsletter -->
					<div class="col-xl-4 col-lg-4 col-md-12">
						<h3><i class="icon-feather-mail"></i> Inscrivez-vous à une newsletter</h3>
						<p>Actualités hebdomadaires, analyses et conseils de pointe en matière de recherche d’emploi.</p>
						<form action="#" method="get" class="newsletter">
							<input type="text" name="fname" placeholder="Entrer votre adresse email">
							<button type="submit"><i class="icon-feather-arrow-right"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Middle Section / End -->
		
		<!-- Footer Copyrights -->
		<div class="footer-bottom-section">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						© 2019 <strong>Pro</strong>. Tous droits réservés.
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Copyrights / End -->
	
	</div>
	<!-- Footer / End -->
	
	</div>
	<!-- Wrapper / End -->
	
                
@endsection
    
