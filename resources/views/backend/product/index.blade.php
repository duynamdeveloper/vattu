@extends('backend.layouts.layout')
@section('title','Admin - Manage Products')
@section('page-title','Products')
@section('parent-breadcum','Product')
@section('item-breadcum','Home')
@section('css')
	<link type="text/css" href="{{ asset('AdminLTE/plugins/datatables/dataTables.bootstrap4.min.css') }}">
@endsection
@section('content')
<section class="col-lg-12 table-responsive">
	<div class="card">
	<div class="card-header">
		<div class="card-title">
			Products
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="product_table" class="table" width="100%">
			<thead>
				<th>#</th>
				<th>Code</th>
				<th>Name</th>
				<th>Category</th>
				<th>Created At</th>
				<th>Updated At</th>
			</thead>
		</table>
		</div>
		
	</div>

</div>
</section>

@endsection
@section('scripts')
<script src="{{ asset('AdminLTE/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script type="text/javascript">
	var productTable = $("#product_table").DataTable({
		"ajax": {
        	"url" : "{{ route('be.product.ajax.all') }}",
       		"dataSrc" : ''
    	},
    	"search": true,
    	"ordering": true,
		"columns":[
			{ "data" : "id",
			  "ordering": true,
			},
			{ "data" : "code" },
			{ "data" : "name" },
			{ "data" : "category.name" },
			{ "data" : "created_at" },
			{ "data" : "updated_at" },
		],
	});
</script>
@endsection