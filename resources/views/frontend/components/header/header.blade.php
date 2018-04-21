@include('frontend.components.header.navigation')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 col-xs-0 left-sidebar__container hidden-xs">
			@include('frontend.components.main.sidebar')
		</div>
		<div class="col-md-10 col-xs-12 slider__container">
			@include('frontend.components.main.slider')
		</div>
	</div>
</div>