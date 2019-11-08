@extends('layouts.app')

@section('content')
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

						<ul data-submenu-title="Commencer">
							<li class="active" @if(request()->route()->getName() =='user.index') active @endif><a href="{{route('user.index')}}"><i class="icon-material-outline-dashboard"></i> Tableau de bord</a></li>
							<li><a href="dashboard-messages.html"><i class="icon-material-outline-question-answer"></i> Messages <span class="nav-tag">2</span></a></li>
							<li><a href="dashboard-bookmarks.html"><i class="icon-material-outline-star-border"></i> Signets</a></li>
							<li><a href="dashboard-reviews.html"><i class="icon-material-outline-rate-review"></i> Clients</a></li>
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
							<li @if(request()->route()->getName() =='user.index.edit') active @endif><a href="{{route('user.index')}}"><i class="icon-material-outline-settings"></i> Paramètres</a></li>
							<li><a href="index-logged-out.html"><i class="icon-material-outline-power-settings-new"></i> Se déconnecter</a></li>
						</ul>
					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->
<!-- Row -->
<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Settings</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Settings</li>
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
							<h3><i class="icon-material-outline-account-circle"></i> My Account</h3>
						</div>

						<div class="content with-padding padding-bottom-0">
                            <form method="post" action="{{route('user.email.update') }}">
                            {{csrf_field()}}
							<div class="row">
								<div class="col-auto">
									<div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
										<img class="profile-pic" src="images/user-avatar-placeholder.png" alt="" />
										<div class="upload-button"></div>
										<input class="file-upload" type="file" accept="image/*"/>
									</div>
								</div>

								<div class="col">
									<div class="row">

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>First Name</h5>
												<input type="text" name="name" class="with-border" value="{{auth()->user()->name}}">
											</div>
                                        </div>
                                        <div class="col-xl-6">
										<div class="submit-field">
												<h5>Last Name</h5>
												<input type="text" name="lastname" class="with-border" value="{{auth()->user()->lastname}}">
											</div>
											
										</div>
										<div class="col-xl-6">
										    <div class="submit-field">
												<h5>Profession</h5>
												<input type="text" name="profession" class="with-border" value="{{auth()->user()->profession}}">
											</div>
										</div>
										<div class="col-xl-6">
										    <div class="submit-field">
												<h5>Telephone</h5>
												<input type="text" name="telephone" class="with-border" value="{{auth()->user()->telephone}}">
											</div>
										</div>
										<div class="col-xl-6">
											<!-- Account Type -->
											<div class="submit-field">
												<h5>Account Type</h5>
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
											</div>
										</div>

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Email</h5>
												<input type="text" name="email"  class="with-border" value="{{auth()->user()->email}}">
											</div>
											
										</div>

									</div>
								</div>
                            </div>
						</div>
					</div>
				</div>

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-face"></i> My Profile</h3>
						</div>

						<div class="content">
							<ul class="fields-ul">
							<li>
								<div class="row">
									<div class="col-xl-4">
										<div class="submit-field">
											<div class="bidding-widget">
												<!-- Headline -->
												<span class="bidding-detail">Set your <strong>minimal hourly rate</strong></span>

												<!-- Slider -->
												<div class="bidding-value margin-bottom-10">$<span id="biddingVal"></span></div>
												<input class="bidding-slider" type="number" name="honoraire" data-slider-value="{{auth()->user()->honoraire}}" data-slider-handle="custom" data-slider-currency="$" data-slider-min="5" data-slider-max="150" data-slider-value="35" data-slider-step="1" data-slider-tooltip="hide" />
											</div>
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Compétences <i class="help-icon" data-tippy-placement="right" title="Add up to 10 skills"></i></h5>

											<!-- Skills List -->
											<div class="keywords-container">
												<div class="keyword-input-container">
                                                    
													<input type="text" multiple name="competence" class="keyword-input with-border" placeholder="e.g. Angular, Laravel"/>
                                                    <input type="text" name="competence_deux" class="keyword-input with-border" placeholder="e.g. Angular, Laravel"/>
													<input type="text" name="competence_trois" class="keyword-input with-border" placeholder="e.g. Angular, Laravel"/>
													<input type="text" name="competence_quatre" class="keyword-input with-border" placeholder="e.g. Angular, Laravel"/>

                                                </div>
												<div class="keywords-list">
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">{{auth()->user()->competence}}</span></span>
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">{{auth()->user()->competence_deux}}</span></span>
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">{{auth()->user()->competence_trois}}</span></span>
													<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">{{auth()->user()->competence_quatre}}</span></span>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>Attachments</h5>
											
											<!-- Attachments -->
											<div class="attachments-container margin-top-0 margin-bottom-0">
												<div class="attachment-box ripple-effect">
													<span>Cover Letter</span>
													<i>PDF</i>
													<button class="remove-attachment" data-tippy-placement="top" title="Remove"></button>
												</div>
												<div class="attachment-box ripple-effect">
													<span>Contract</span>
													<i>DOCX</i>
													<button class="remove-attachment" data-tippy-placement="top" title="Remove"></button>
												</div>
											</div>
											<div class="clearfix"></div>
											
											<!-- Upload Button -->
											<div class="uploadButton margin-top-0">
												<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>
												<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
												<span class="uploadButton-file-name">Maximum file size: 10 MB</span>
											</div>

										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
								
                                <div class="col-xl-6">

										 <div class="form-control">
											<h5>Choisir votre catégorie</h5>
										<!-- <select  name="category" class="selectpicker"  title="Select Job Type" data-live-search="true">
                                            @foreach($categories as $categorie)
                                            <option value="">{{$categorie->name}}</option>
                                            @endforeach
											</select> -->
											<select multiple name="category"  title="Select Job Type">
											@foreach($categories as $categorie)
                                            <option>{{$categorie->name}}</option>
                                            @endforeach
											</select>
                                        </div>
									</div>
									<div class="col-xl-6">
									    <div class="submit-field">
										<h5>Job Category</h5>
										<select class="selectpicker with-border" multiple name="ville">
											<option>Accounting and Finance</option>
											<option>Clerical & Data Entry</option>
											<option>Counseling</option>
											<option>Court Administration</option>
											<option>Human Resources</option>
											<option>Investigative</option>
											<option>IT and Computers</option>
											<option>Law Enforcement</option>
											<option>Management</option>
											<option>Miscellaneous</option>
											<option>Public Relations</option>
										</select>
									    </div>
									</div>
<!-- <select name="category">
    <option value="{{auth()->user()->category}}">bonjour</option>
    <option>bonsoir</option>
</select> -->
									<div class="col-xl-12">
										<div class="submit-field">
											<h5>Introduce Yourself</h5>
											<textarea cols="30" rows="5" name="presentation" class="with-border">
                                                {{auth()->user()->presentation}}
                                            </textarea>
										</div>
									</div>

								</div>
							</li>
						</ul>
						</div>
					</div>
				</div>
	<!-- Dashboard Box -->
	<div class="col-xl-12">
					<div id="test1" class="dashboard-box">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-brand-facebook-f"></i><i class="icon-brand-twitter"></i>Reseaux Sociaux</h3>
						</div>

						<div class="content with-padding">
							<div class="row">
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Compte facebook</h5>
										<input type="text" name="facebook" class="with-border" placeholder="coller l'url de votre compte" value="{{auth()->user()->facebook}}">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Compte twitter</h5>
										<input type="text" name="twitter" class="with-border" placeholder="coller l'url de votre compte"  value="{{auth()->user()->twitter}}">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>site web personnel</h5>
										<input type="text" name="site" class="with-border" placeholder="coller l'url de votre site"  value="{{auth()->user()->site}}">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div id="test1" class="dashboard-box">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-lock"></i> Password & Security</h3>
						</div>

						<div class="content with-padding">
							<div class="row">
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Current Password</h5>
										<input type="password" class="with-border">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>New Password</h5>
										<input type="password" class="with-border">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Repeat New Password</h5>
										<input type="password" class="with-border">
									</div>
								</div>

								<div class="col-xl-12">
									<div class="checkbox">
										<input type="checkbox" id="two-step" checked>
										<label for="two-step"><span class="checkbox-icon"></span> Enable Two-Step Verification via Email</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Button -->
				<div class="col-xl-12">
					<input type="submit" class="button ripple-effect big margin-top-30" value="Save Changes">
				</div>
                </form>
			</div>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2018 <strong>Hireo</strong>. All Rights Reserved.
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