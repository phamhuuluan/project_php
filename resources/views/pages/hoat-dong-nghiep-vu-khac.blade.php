@extends('master-layout')
@section('content')


<section class="about-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="a-link">
					Trang chủ / Hoạt động nghiệp vụ / <span style="color: #007633;">Các hoạt động khác</span>
				</div>
				<div class="about">
					<p>
						<div class="font-size-23 font-bold">
							Các hoạt động khác
						</div>
					</p>
					<p>
						<div class="a-time">
							<i class="far fa-clock"></i> 07/01/2014 2:40:16 CH
						</div>
					</p>
					<div>
						<p style="color: #00b050;font-weight: bold; padding-top: 15px;">​Các hoạt động khác</p>
						<ul style="margin-left: 30px;">
							<li>Sử dụng vốn nhàn rỗi không có nguồn gốc từ ngân sách nhà nước và có sự thỏa thuận của tổ chức, cá nhân cung cấp vốn để mua trái phiếu chính phủ;</li>
							<li>Tham gia điều phối, quản lý tài chính các chương trình, dự án bảo vệ môi trường trọng điểm theo sự phân công của Bộ trưởng Bộ Tài nguyên và Môi trường và quyết định của cấp có thẩm quyền;</li>
							<li>Thực hiện các nhiệm vụ khác theo sự phân công của  Bộ trưởng Bộ Tài nguyên và Môi trường.</li>
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