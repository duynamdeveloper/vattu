@extends('frontend.layout.index')
@section('title','Danh mục sản phẩm')
@section('header')
	@include('frontend.partials.header')
@endsection
@section('main')
	@include('frontend.partials.shop.main')
@endsection
@section('footer')
	@include('frontend.partials.footer')
@endsection
@section('plugin-scripts')
	<script type='text/javascript' src='{{ asset('plugin/megamenu/js/jquery.hoverIntent.minified.js') }}'></script>
<script type='text/javascript' src='{{ asset('plugin/megamenu/js/jquery.dcverticalmegamenu.1.1.js') }}'></script>
{{-- </script><script type="text/javascript" src="{{ asset('sliderengine/jquery.hislider.js') }}"></script> --}}
@endsection
@section('custom-scripts')
@endsection