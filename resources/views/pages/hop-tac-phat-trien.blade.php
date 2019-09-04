@extends('master-layout')
@section('content')


<section class="about-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="a-link">
					Trang chủ / <span style="color: #007633;">Hợp tác phát triển</span>
				</div>
				<div class="about">
					<p style="color: #00b050;font-weight: bold;">Hợp tác phát triển<br></p>
					<ul style="margin-left: 30px;">
						<li><a href="{{ url('hop-tac-phat-trien/qh-quoc-te') }}">Quan hệ với tổ chức quốc tế</a></li>
						<li><a href="{{ url('hop-tac-phat-trien/qh-trong-nuoc') }}">Quan hệ với tổ chức trong nước</a></li>
						<li><a href="{{ url('hop-tac-phat-trien/ht-trong-nuoc') }}">Dự án và hoạt động hợp tác trong nước</a></li>
						<li><a href="{{ url('hop-tac-phat-trien/ht-quoc-te') }}">Dự án và hoạt động hợp tác quốc tế</a></li>
					</ul>
				</div>
				<div>
					@include('pages/hop-tac-phat-trien-tin-co-lien-quan')
				</div>
			</div>
			<div class="col-lg-3">
				@include('menu-right')
			</div>
		</div>
	</div>
</section>


@endsection