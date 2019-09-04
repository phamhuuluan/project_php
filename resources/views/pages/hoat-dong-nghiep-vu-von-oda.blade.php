@extends('master-layout')
@section('content')


<section class="about-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="a-link">
					Trang chủ / Hoạt động nghiệp vụ / <span style="color: #007633;">Vốn ODA và cho vay ủy thác</span>
				</div>
				<div class="about">
					<p>
						<div class="font-size-23 font-bold">
							Vốn ODA và cho vay ủy thác
						</div>
					</p>
					<p>
						<div class="a-time">
							<i class="far fa-clock"></i> 09/12/2014 9:38:39 SA
						</div>
					</p>
					<div>
						<p style="color: #00b050;font-weight: bold; padding-top: 15px;">Vốn ODA và cho vay ủy thác</p>
						<ul style="margin-left: 30px;">
							<li>Quỹ Bảo vệ môi trường Việt Nam tiếp nhận nguồn vốn ODA được Chính phủ cho vay lại, sử dụng nguồn vốn ODA để cho vay đầu tư và thu hồi nợ của chủ đầu tư dự án bảo vệ môi trường thông qua các hợp đồng tín dụng.</li>
							<li>Nhận ủy thác quản lý các nguồn vốn cho vay, tài trợ để cấp phát cho vay và thu hồi nợ của chủ đầu tư dự án bảo vệ môi trường từ các tổ chức trong và ngoài nước thông qua hợp đồng nhận ủy thác giữa Quỹ Bảo vệ môi trường Việt Nam và các tổ chức ủy thác.</li>
						</ul>
					</div>
				</div>
				<div>
					@include('pages/hoat-dong-nghiep-vu-tin-co-lien-quan')
				</div>
			</div>
			<div class="col-lg-3">
				@include('menu-right')
			</div>
		</div>
	</div>
</section>


@endsection