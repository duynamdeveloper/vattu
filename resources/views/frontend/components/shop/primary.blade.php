<div class="col-xs-12 col-lg-9 col-lg-push-3">
	<main class="site-main" role="main">
		<h2 class="category-title">Máy hàn</h2>

		<div id="products-wrapper">
			<form class="sort-form">
				<select>
					<option>Sắp xếp mặc định</option>
					<option>Sắp xếp theo giá</option>
					<option>Sắp xếp theo tên</option>
				</select>
			</form>
			<p class="show-statistic">Đang hiển thị 10 trên 20 sản phẩm</p>
			<div class="list-products row">
			@for($i=1;$i<10; $i++)
					<div class="col-md-3 product_box content_box">
				<div class="product_box_inner box_inner">
					<div class="product_thumbnail box_thumbnail">
						<a href="#" class="product_image_link box_image_link">
							<img src="{{ asset('imgs/products/demo.png') }}">
						</a>
					</div>
				<div class="product_box_info box_info">
					<h3 class="product_box_name">Máy hàn điện tử</h3>
					<div class="product_box_price_select">
						<span class="price">14.000.000 VNĐ</span>
						<a href="#" class="product_box_link_btn"><span class="lnr lnr-cart"></span> Chi tiết</a>
					</div>
				</div>
				</div>
			</div>
			@endfor
			</div>
		</div>
	</main>
</div>