@extends('master-layout')
@section('content')


<section class="about-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="a-link">
					Trang chủ / Giới thiệu / <span style="color: #007633;">Giới thiệu chung</span>
				</div>
				<div class="about">
					<p>
						<div style="font-size: 20px; font-weight: bold; color: #000; margin-bottom: 13px;">
							Giới thiệu chung
						</div>
					</p>
					<p>
						<div class="a-time">
							<i class="far fa-clock"></i> 28/09/2017 3:24:26 CH
						</div>
					</p>
					<div>
						<p>
							<span class="text-indent-30">Trang tin của Quỹ Bảo vệ môi trường Việt Nam đang ở trước mắt bạn!<br></span>
							<span class="text-indent-30">Qua kênh thông tin này, chúng tôi mong chuyển tới bạn đọc sớm nhất, nhanh nhất, đầy đủ và chính xác nhất một số thông tin liên quan trong lĩnh vực bảo vệ môi trường và những việc được tập thể cán bộ, công nhân viên của Quỹ đã, đang và sẽ thực hiện để góp phần thiết thực vì một Việt - Nam - Xanh với phương châm 3 tốt:</span>
						</p>
						<p>
							<ul class="text-indent-30">
								<li>Huy động tốt cho mọi nguồn tài chính cho bảo vệ môi trường</li>
								<li>Sử dụng tốt nguồn vốn do Quỹ quản lý</li>
								<li>Phát triển tốt để xây dựng Quỹ thành một tổ chức tài chính nhà nước vững mạnh</li>
							</ul>
						</p>
						<p>
							<span class="text-indent-30">Tất cả cho bảo vệ môi trường, tôn trọng pháp luật để đất nước phát triển bền vững. Mỗi người hãy xứng đáng là người công dân-vì-sự nghiệp-phát triển-bền vững.</span>
						</p>
					</div>
				</div>
				<div>
					@include('pages/gioi-thieu-tin-co-lien-quan')
				</div>
			</div>
			<div class="col-lg-3">
				@include('menu-right')
			</div>
		</div>
	</div>
</section>


@endsection