@extends('master-layout')
@section('content')


<section class="about-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="a-link">
					Trang chủ / Hợp tác phát triển / <span style="color: #007633;">Quan hệ với tổ chức trong nước</span>
				</div>
				<div class="about">
					<p>
						<div class="font-size-23 font-bold">
							Quan hệ với tổ chức trong nước
						</div>
					</p>
					<p>
						<div class="a-time">
							<i class="far fa-clock"></i> 16/01/2014 2:03:11 CH
						</div>
					</p>
					<ul style="margin-left: 30px;">
						<li>Hợp tác chặt chẽ với các cơ quan quản lý nhà nước về bảo vệ môi trường từ trung ương đến địa phương, các quỹ bảo vệ môi trường địa phương và ngành nhằm phục vụ công tác hỗ trợ tài chính các dự án và hoạt động bảo vệ môi trường của Quỹ, nâng cao năng lực và phối hợp công tác, tổ chức các sự kiện quốc gia về môi trường.</li>
						<li>Hợp tác với các tổ chức,doanh nghiệp thực hiện các dự án hợp tác nhằm tuyên truyền nâng cao nhận thức cộng đồng về bảo vệ môi trường và triển khai các hoạt động của Quỹ tại địa phương.</li>
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