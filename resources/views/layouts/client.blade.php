
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