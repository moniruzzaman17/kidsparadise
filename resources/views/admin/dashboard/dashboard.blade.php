@section('title', __('Dahsboard / Shuddhoraj'))
@section('body-class', __('admin_dashboard'))
<div class="box1">
	<h5 class="box-title">ORDER HISTORY</h5>
	<div class="order-history row w-100 m-auto justify-content-center">
		<div class="col-md-4">
			<div class="block green">
				<div class="heading d-flex align-items-center justify-content-center">
					Today's Order
				</div>
				<div class="num">1</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="block green">
				<div class="heading d-flex align-items-center justify-content-center">
					Current Month's Order
				</div>
				<div class="num">1</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="block green">
				<div class="heading d-flex align-items-center justify-content-center">
					Total Order
				</div>
				<div class="num">1</div>
			</div>
		</div>
	</div>
</div>
<div class="box2" style="margin-top: 36px;">
	<h5 class="box-title">ORDER STATUS COUNT</h5>
	<div class="order-history row w-100 m-auto">
		<div style="width: 20%; float: left;">
			<div class="block green">
				<div class="heading d-flex align-items-center justify-content-center">
					PENDING
				</div>
				<div class="num">1</div>
			</div>
		</div>
		<div style="width: 20%; float: left;">
			<div class="block green">
				<div class="heading d-flex align-items-center justify-content-center">
					ON HOLD
				</div>
				<div class="num">1</div>
			</div>
		</div>
		<div style="width: 20%; float: left;">
			<div class="block green">
				<div class="heading d-flex align-items-center justify-content-center">
					PROCESSING
				</div>
				<div class="num">1</div>
			</div>
		</div>
		<div style="width: 20%; float: left;">
			<div class="block green">
				<div class="heading d-flex align-items-center justify-content-center">
					COMPLETE
				</div>
				<div class="num">1</div>
			</div>
		</div>
		<div style="width: 20%; float: left;">
			<div class="block green">
				<div class="heading d-flex align-items-center justify-content-center">
					CANCELLED
				</div>
				<div class="num">1</div>
			</div>
		</div>
	</div>
</div>
<div class="box3" style="margin-top: 36px;">
	{{-- <h5 class="box-title">REGISTERED CUSTOMER COUNT</h5> --}}
	<div class="order-history row w-100 m-auto">
		<div style="width: 25%; margin: auto;">
			<div class="block green">
				<div class="heading d-flex align-items-center justify-content-center">
					TOTAL REGISTERED CUSTOMER
				</div>
				<div class="num">1</div>
			</div>
		</div>
	</div>
</div>