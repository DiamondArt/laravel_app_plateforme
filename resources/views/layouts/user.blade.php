<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Les meilleures annonces</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-select.min.css')}}" rel="stylesheet">

        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link href="{{asset('css/colors/blue.css')}}" rel="stylesheet">
    @yield('css')
</head>
<body>
<div id="wrapper">
        <header id="header-container" class="fullwidth transparent">

<!-- Header -->
<div id="header">
    <div class="container">
        
        <!-- Left Side Content -->
        <div class="left-side">
            
            <!-- Logo -->
            <div id="logo">
                <a href="{{route('home')}}"><img src="images/logo.png" alt=""></a>
            </div>

            <!-- Main Navigation -->
            <nav id="navigation">
                <ul id="responsive">
                @guest

                    <li><a href="{{route('home')}}" class="current">Accueil</a></li>
                    <li><a href="{{route('pros')}}">Recherche un professionel</a></li>
                    @else
                    <li><a href="{{route('user.index')}}">Administration</a></li>
                    <li><a href="{{route('pros')}}">Recherche un professionel</a></li>

                    @endguest
                </ul>
            
            </nav>
            <div class="clearfix">
        
        </div>
            <!-- Main Navigation / End -->
            
        </div>
        <!-- Left Side Content / End -->
        <!-- Right Side Content / End -->
        <div class="right-side">
            <div class="header-widget" style="padding-top:25px;">
            @guest
                <a href="{{ route('login') }}" ><i class="icon-feather-log-in"></i> <span>Se connecter / S'inscrire</span></a>
                        @else
                       
                                <a  href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Deconnexion
                                </a>
                             
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        @endguest
            </div>
            <!-- Mobile Navigation Button -->
            <span class="mmenu-trigger" >
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
        
        <main>
            @yield('content')
        </main>

    </div>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-migTaux-3.0.0.min.js')}}"></script>
	<script src="{{asset('js/mmenu.min.js')}}"></script>
	<script src="{{asset('js/tippy.all.min.js')}}"></script>
	<script src="{{asset('js/simplebar.min.js')}}"></script>
	<script src="{{asset('js/bootstrap-slider.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-modal.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/snackbar.js')}}"></script>
	<script src="{{asset('js/clipboard.min.js')}}"></script>
	<script src="{{asset('js/counterup.min.js')}}"></script>
	<script src="{{asset('js/magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script>
    $(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });


    function initAutocomplete() {
			var options = {
			types: ['(cities)'],
			  // componentRestrictions: {country: "us"}
		};
	
	var input = document.getElementById('autocomplete-input');
    var autocomplete = new google.maps.places.Autocomplete(input, options);
		}
        // Autocomplete adjustment for homepage
		if ($('.intro-banner-search-form')[0]) {
			setTimeout(function(){ 
				$(".pac-container").prependTo(".intro-search-field.with-autocomplete");
			}, 300);
		}
	
</script>
    
    @yield('script')
</body>
</html>
