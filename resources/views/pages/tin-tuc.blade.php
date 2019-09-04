@extends('master-layout')
@section('content')


<section class="news-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="a-link">
					Trang chủ / <span style="color: #007633;">Tin tức</span>
				</div>
				<div class="news-content">
					<div class="news-member">
						<div class="news-title">
							<a href="{{ url('tin-tuc/tin-tuc-chi-tiet') }}">Quỹ Bảo vệ môi trường Việt Nam tổ chức thành công Hội nghị hỗ trợ tài chính năm 2019 cho các hoạt động bảo vệ môi trường, ứng phó với biến đổi khí hậu.</a>
						</div>
						<div class="news-info">
							<div class="row">
								<div class="col-lg-3">
									<a href="{{ url('tin-tuc/tin-tuc-chi-tiet') }}"><img src="images/anh-5.jpg" class="img-fluid"></a>
								</div>
								<div class="col-lg-9">
									<span style="font-size: 11px; color: #999;"><i class="far fa-clock"></i> 08/07/2019 5:12:09 CH</span><br>
									Trong 02 ngày 05 - 06 tháng 7 năm 2019, Hội nghị hỗ trợ tài chính năm 2019 cho các hoạt động bảo vệ môi trường, ứng phó với biến đổi khí hậu do Quỹ Bảo vệ môi trường Việt Nam tổ chức tại Tp. Hồ Chí Minh đã diễn ra thành công tốt đẹp.
								</div>
							</div>
						</div>
					</div>
					<div class="news-member">
						<div class="news-title">
							<a href="{{ url('tin-tuc/tin-tuc-chi-tiet') }}">Quỹ Bảo vệ môi trường Việt Nam tổ chức thành công Hội nghị hỗ trợ tài chính năm 2019 cho các hoạt động bảo vệ môi trường, ứng phó với biến đổi khí hậu.</a>
						</div>
						<div class="news-info">
							<div class="row">
								<div class="col-lg-3">
									<a href="{{ url('tin-tuc/tin-tuc-chi-tiet') }}"><img src="images/anh-5.jpg" class="img-fluid"></a>
								</div>
								<div class="col-lg-9">
									<span style="font-size: 11px; color: #999;"><i class="far fa-clock"></i> 08/07/2019 5:12:09 CH</span><br>
									Trong 02 ngày 05 - 06 tháng 7 năm 2019, Hội nghị hỗ trợ tài chính năm 2019 cho các hoạt động bảo vệ môi trường, ứng phó với biến đổi khí hậu do Quỹ Bảo vệ môi trường Việt Nam tổ chức tại Tp. Hồ Chí Minh đã diễn ra thành công tốt đẹp.
								</div>
							</div>
						</div>
					</div>
					<div class="news-member">
						<div class="news-title">
							<a href="{{ url('tin-tuc/tin-tuc-chi-tiet') }}">Quỹ Bảo vệ môi trường Việt Nam tổ chức thành công Hội nghị hỗ trợ tài chính năm 2019 cho các hoạt động bảo vệ môi trường, ứng phó với biến đổi khí hậu.</a>
						</div>
						<div class="news-info">
							<div class="row">
								<div class="col-lg-3">
									<a href="{{ url('tin-tuc/tin-tuc-chi-tiet') }}"><img src="images/anh-5.jpg" class="img-fluid"></a>
								</div>
								<div class="col-lg-9">
									<span style="font-size: 11px; color: #999;"><i class="far fa-clock"></i> 08/07/2019 5:12:09 CH</span><br>
									Trong 02 ngày 05 - 06 tháng 7 năm 2019, Hội nghị hỗ trợ tài chính năm 2019 cho các hoạt động bảo vệ môi trường, ứng phó với biến đổi khí hậu do Quỹ Bảo vệ môi trường Việt Nam tổ chức tại Tp. Hồ Chí Minh đã diễn ra thành công tốt đẹp.
								</div>
							</div>
						</div>
					</div>
					<div class="news-pagi">
					  <ul class="pagination">
					    <li class="page-item disabled">
					      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Trước đó</a>
					    </li>
					    <li class="page-item"><a class="page-link page-link-active" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item">
					      <a class="page-link" href="#">Tiếp theo</a>
					    </li>
					  </ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				@include('menu-right')
			</div>
		</div>
	</div>
</section>


@endsection