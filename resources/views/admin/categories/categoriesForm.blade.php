@extends('layouts.app')
@section('content')



<!-- Send Direct Message Popup
================================================== -->
<a href="#smal-dialog" class="popup-with-zoom-anim button dark ripple-effect">clique</a>
<div id="smal-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">
				<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Ajouter une categorie</h3>
				</div>
					
				<table>
					<td>heloo</td>
					<td>heloo</td>

				</table>
				<!-- Form -->
				<form method="post" id="send-pm" name="" action="{{route('admin.categories.store')}}">
                    {{csrf_field()}}
                    <input type="texte" name="name" placeholder="Message" class="with-border" required>
                    <button class="button full-width button-sliding-icon ripple-effect" type="cancel" form="send-pm">OK <i class="icon-material-outline-arrow-right-alt"></i></button>

				</form>
				
				<!-- Button -->

			</div>

		</div>
	</div>
</div>
<!-- Send Direct Message Popup / End -->









@endsection
