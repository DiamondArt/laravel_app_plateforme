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
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
	<div class="container">
	    <div class="row">
		<div class="col-xl-8 col-lg-8 content-right-offset">
			<!-- Billing Cycle Radios  -->
			<div class="billing-cycle margin-top-25">

				<!-- Radio -->
				<div class="radio">
					<input id="radio-5" name="radio-payment-type" type="radio" checked>
					<label for="radio-5">
						<span class="radio-label"></span>
						Abonnement {{$abonnement->type_abonnement}}
						<span class="billing-cycle-details">
							<span class="regular-price-tag">€{{$abonnement->prix}}/ {{$abonnement->type_abonnement}}</span>
						</span>
					</label>
				</div>
			</div>
			

			<!-- Hedline -->
			<h3 class="margin-top-50">Payment Method</h3>

			<!-- Payment Methods Accordion -->
			<div class="payment margin-top-30">

				<div class="payment-tab payment-tab-active">
					<div class="payment-tab-trigger">
						<input checked id="paypal" name="cardType" type="radio" value="paypal">
						<label for="paypal">PayPal</label>
						<img class="payment-logo paypal" src="https://i.imgur.com/ApBxkXU.png" alt="">
					</div>

					<div class="payment-tab-content">
						<p>You will be redirected to PayPal to complete payment.</p>
					</div>
				</div>


				<div class="payment-tab">
					<div class="payment-tab-trigger">
						<input type="radio" name="cardType" id="creditCart" value="creditCard">
						<label for="creditCart">Credit / Debit Card</label>
						<img class="payment-logo" src="https://i.imgur.com/IHEKLgm.png" alt="">
					</div>

					<div class="payment-tab-content">
						<div class="row payment-form-row">

							<div class="col-md-6">
								<div class="card-label">
									<input id="nameOnCard" name="nameOnCard" required type="text" placeholder="Cardholder Name">
								</div>
							</div>

							<div class="col-md-6">
								<div class="card-label">
									<input id="cardNumber" name="cardNumber" placeholder="Credit Card Number" required type="text">
								</div>
							</div>

							<div class="col-md-4">
								<div class="card-label">
									<input id="expiryDate" placeholder="Expiry Month" required type="text">
								</div>
							</div>

							<div class="col-md-4">
								<div class="card-label">
									<label for="expiryDate">Expiry Year</label>
									<input id="expirynDate" placeholder="Expiry Year" required type="text">
								</div>
							</div>

							<div class="col-md-4">
								<div class="card-label">
									<input id="cvv" required type="text" placeholder="CVV">
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
			<!-- Payment Methods Accordion / End -->
		
			<a href="pages-order-confirmation.html" class="button big ripple-effect margin-top-40 margin-bottom-65">Continuer</a>
		</div>


		

	</div>
</div>
</div>
</div>
</div>
@endsection
