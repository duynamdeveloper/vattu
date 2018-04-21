@extends('backend.layouts.layout')
@section('page-title','Products')
@section('parent-breadcum','Product')
@section('item-breadcum','Home')
@section('content')
<div class="card">
	<div class="card-header">
		<div class="card-title">
			Products
		</div>
	</div>
	<div class="card-body">
		<table id="product_table" class="table-responsive">
			<thead>
				<th>#</th>
				<th>Code</th>
				<th>Name</th>
				<th>Category</th>
				<th>Created At</th>
				<th>Updated At</th>
			</thead>
			<tbody>
				
			</tbody>
		</table>
	</div>

</div>
@endsection