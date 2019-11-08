@extends('layouts.app')

@section('content')
<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Accueil</a></li>
						<li>S'inscrire</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-5 offset-xl-3">

			<div class="login-register-page">
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3 style="font-size: 26px;">Créeons votre compte !</h3>
					<span>Avez-vous déjà un compte? <a href="{{ route('login') }}">Se connecter!</a></span>
				</div>

				<!-- Account Type -->
								<!-- Form -->

				<form method="POST" action="{{ route('register') }}">
                        @csrf
						<div class="account-type">
													<div>
														<input type="radio" name="role" value="freelance" id="freelancer-radio" class="account-type-radio" checked/>
														<label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Freelancer</label>
													</div>

													<div>
														<input type="radio" name="role" value="client" id="employer-radio" class="account-type-radio"/>
														<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Employer</label>
													</div>
													
												</div>
                        <div class="input-with-icon-left">
						<i class="icon-material-user-outline"></i>
                                <input id="name" type="text" class="input-text with-border {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

								@if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="input-with-icon-left"  data-tippy-placement="bottom">
						<i class="icon-material-baseline-mail-outline"></i>
                                <input id="email" type="email" class="input-text with-border {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email">

							
								
								@if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="input-with-icon-left" title="Should be at least 8 characters long"> 
						<i class="icon-material-outline-lock"></i>
                                <input id="password" type="password" class="input-text with-border {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="new-password">

								@if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
                    
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                    
                                <button type="submit" class="button full-width button-sliding-icon ripple-effect margin-top-10">
                                    {{ __('Register') }}<i class="icon-material-outline-arrow-right-alt"></i>
                                </button>
                            </div>
                        </div>
                    </form>
				
				<!-- Button -->
				
				<!-- Social Login -->
				<div class="social-login-separator"><span>ou</span></div>
				<div class="social-login-buttons">
				<button class="facebook-login ripple-effect " ><a href="{{route('social.auth',['provider'=>'facebook'])}}" class="full-width " ><i class="icon-brand-facebook-f"></i> S'inscrire via Facebook</a></button>
				<button class="google-login ripple-effect" ><a  href="{{route('social.auth',['provider'=>'google'])}}"><i class="icon-brand-google-plus-g"></i> S'incrire via Google+</a></button>	
						</div>
			</div>

		</div>
	</div>
</div>
<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->
@endsection
