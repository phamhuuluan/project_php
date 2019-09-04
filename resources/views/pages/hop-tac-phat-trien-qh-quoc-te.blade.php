@extends('master-layout')
@section('content')


<section class="about-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="a-link">
					Trang chủ / Hợp tác phát triển / <span style="color: #007633;">Quan hệ với tổ chức quốc tế</span>
				</div>
				<div class="about">
					<p>
						<div class="font-size-23 font-bold">
							Quan hệ với tổ chức quốc tế
						</div>
					</p>
					<p>
						<div class="a-time">
							<i class="far fa-clock"></i> 16/01/2014 10:45:19 SA
						</div>
					</p>
					<ul style="margin-left: 30px;">
						<li>
							<p>Quỹ Bảo vệ môi trường Việt Nam chủ trương hợp tác với tất cả các tổ chức quốc tế hoạt động trong lĩnh vực bảo vệ môi trường, ứng phó biến đổi khí hậu nhằm huy động tối đa các nguồn lực quốc tế hỗ trợ cho hoạt động bảo vệ môi trường, ứng phó với biến đổi khí hậu tại Việt Nam, phối hợp thực hiện các cam kết quốc tế của Việt Nam về bảo vệ môi trường và ứng phó với biến đổi khí hậu.</p>
							<p>Hiện nay, Quỹ Bảo vệ môi trường Việt Nam đã đặt quan hệ hợp tác với nhiều tổ chức quốc tế, tổ chức ngoài nước như: Tổ chức Y tế Thế giới (WHO), Tổ chức Phát triển Công nghiệp Liên Hợp quốc (UNIDO), Ngân hàng Thế giới (WB), Ngân hàng Phát triển Châu Á (ADB), Ủy ban Môi trường và Xã hội Châu Á Thái Bình Dương (ESCAP) của Liên Hợp Quốc; Các tổ chức nước ngoài: Cơ quan Phát triển Quốc tế Đan Mạch (DANIDA), Cơ quan Hợp tác Quốc tế Nhật Bản (JICA), Trung tâm Hợp tác Môi trường Hải ngoại (OECC) của Nhật Bản, Cơ quan Hợp tác Quốc tế Hàn Quốc (KOICA), Cơ quan Phát triển Cộng hòa Séc, Quỹ Môi trường Cộng hòa Séc(SEF), Cơ quan Hợp tác phát triển Đức (GIZ) … Các Đại sứ quán tại Việt Nam: ĐSQquán Cộng hòa Séc, ĐSQ Vương Quốc Bỉ, ĐSQ Úc, ĐSQ Pháp, ĐSQ CHLB Đức,….; Các cơquan đại diện và tổ chức phi chính phủ của một số nước trên thế giới: Quỹ Rosa Luxemburg, Viện nghiên cứu độc lập các vấn đề môi trường Đức (UfU), Viện Công nghệ và Công nghiệp Môi trường Hàn Quốc (KEITI), Cơ quan Môi trường Hàn Quốc(KECO), Tổ chức Phát triển thế giới (DWW) - Cộng hòa Séc,…</p>
						</li>
						<li>Ngoài ra, Quỹ Bảo vệ môi trường Việt Nam còn có quan hệ hợp tác với nhiều công ty đa quốc gia, quốc tế hoạt động trong lĩnh vực công nghệ sạch, thân thiện môi trường, xử lý ô nhiễm nhằm giúp các doanh nghiệp Việt Nam tiếp cận công nghệ mới, hiện đại và xúc tiến đầu tư vào Việt Nam trong lĩnh vực bảo vệ môi trường.</li>
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