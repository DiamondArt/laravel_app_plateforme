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
							<li class="active" @if(request()->route()->getName() =='admin.index') active @endif><a href="{{route('admin.index')}}"><i class="icon-material-outline-dashboard"></i> Tableau de bord</a></li>
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
							<li @if(request()->route()->getName() =='admin.index.edit') active @endif><a href="{{route('admin.index')}}"><i class="icon-material-outline-settings"></i> Paramètres</a></li>
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
                            <form method="post" action="{{route('user.admin.update') }}">
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
														<input type="radio" name="role" value="freelance" id="freelancer-radio" class="account-type-radio" />
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

										 <div class="submit-field">
											<h5>Choisir votre catégorie</h5>
									
                                        </div>
									</div>
									<div class="col-xl-6">
										<div class="">
											<h5>Ville de résidence</h5>
											<select  name="ville" class="selectpicker"  title="Select Job Type" data-live-search="true">
												<option value="AR">Argentina</option>
												<option value="AM">Armenia</option>
												<option value="AW">Aruba</option>
												<option value="AU">Australia</option>
												<option value="AT">Austria</option>
												<option value="AZ">Azerbaijan</option>
												<option value="BS">Bahamas</option>
												<option value="BH">Bahrain</option>
												<option value="BD">Bangladesh</option>
												<option value="BB">Barbados</option>
												<option value="BY">Belarus</option>
												<option value="BE">Belgium</option>
												<option value="BZ">Belize</option>
												<option value="BJ">Benin</option>
												<option value="BM">Bermuda</option>
												<option value="BT">Bhutan</option>
												<option value="BG">Bulgaria</option>
												<option value="BF">Burkina Faso</option>
												<option value="BI">Burundi</option>
												<option value="KH">Cambodia</option>
												<option value="CM">Cameroon</option>
												<option value="CA">Canada</option>
												<option value="CV">Cape Verde</option>
												<option value="KY">Cayman Islands</option>
												<option value="CO">Colombia</option>
												<option value="KM">Comoros</option>
												<option value="CG">Congo</option>
												<option value="CK">Cook Islands</option>
												<option value="CR">Costa Rica</option>
												<option value="CI">Côte d'Ivoire</option>
												<option value="HR">Croatia</option>
												<option value="CU">Cuba</option>
												<option value="CW">Curaçao</option>
												<option value="CY">Cyprus</option>
												<option value="CZ">Czech Republic</option>
												<option value="DK">Denmark</option>
												<option value="DJ">Djibouti</option>
												<option value="DM">Dominica</option>
												<option value="DO">Dominican Republic</option>
												<option value="EC">Ecuador</option>
												<option value="EG">Egypt</option>
												<option value="GP">Guadeloupe</option>
												<option value="GU">Guam</option>
												<option value="GT">Guatemala</option>
												<option value="GG">Guernsey</option>
												<option value="GN">Guinea</option>
												<option value="GW">Guinea-Bissau</option>
												<option value="GY">Guyana</option>
												<option value="HT">Haiti</option>
												<option value="HN">Honduras</option>
												<option value="HK">Hong Kong</option>
												<option value="HU">Hungary</option>
												<option value="IS">Iceland</option>
												<option value="IN">India</option>
												<option value="ID">Indonesia</option>
												<option value="NO">Norway</option>
												<option value="OM">Oman</option>
												<option value="PK">Pakistan</option>
												<option value="PW">Palau</option>
												<option value="PA">Panama</option>
												<option value="PG">Papua New Guinea</option>
												<option value="PY">Paraguay</option>
												<option value="PE">Peru</option>
												<option value="PH">Philippines</option>
												<option value="PN">Pitcairn</option>
												<option value="PL">Poland</option>
												<option value="PT">Portugal</option>
												<option value="PR">Puerto Rico</option>
												<option value="QA">Qatar</option>
												<option value="RE">Réunion</option>
												<option value="RO">Romania</option>
												<option value="RU">Russian Federation</option>
												<option value="RW">Rwanda</option>
												<option value="SZ">Swaziland</option>
												<option value="SE">Sweden</option>
												<option value="CH">Switzerland</option>
												<option value="TR">Turkey</option>
												<option value="TM">Turkmenistan</option>
												<option value="TV">Tuvalu</option>
												<option value="UG">Uganda</option>
												<option value="UA">Ukraine</option>
												<option value="GB">United Kingdom</option>
												<option value="US" selected>United States</option>
												<option value="UY">Uruguay</option>
												<option value="UZ">Uzbekistan</option>
												<option value="YE">Yemen</option>
												<option value="ZM">Zambia</option>
												<option value="ZW">Zimbabwe</option>
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