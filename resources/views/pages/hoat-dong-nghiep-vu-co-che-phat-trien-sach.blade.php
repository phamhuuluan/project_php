@extends('master-layout')
@section('content')


<section class="about-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="a-link">
					Trang chủ / Hoạt động nghiệp vụ / <span style="color: #007633;">Cơ chế phát triển sạch (CDM)</span>
				</div>
				<div class="about">
					<p>
						<div class="font-size-23 font-bold">
							Cơ chế phát triển sạch (CDM)
						</div>
					</p>
					<p>
						<div class="a-time">
							<i class="far fa-clock"></i> 03/11/2017 2:08:05 CH
						</div>
					</p>
					<div>
						<p style="color: #00b050;font-weight: bold; padding-top: 15px;">Văn bản quy định</p>
						<ul style="margin-left: 30px;">
							<li>Quyết định số 35/2008/QĐ-TTg ngày 03/3/2008 của Thủ tướng Chính phủ về việc tổ chức và hoạt động của Quỹ Bảo vệ môi trường Việt Nam;</li>
							<li>Quyết định số 130/2007/QĐ-TTg ngày 02/8/2007 của Thủ tướng Chính phủ về một số chính sách, cơ chế tài chính đối với dự án đầu tư theo cơ chế phát triển sạch;</li>
							<li>Thông tư liên tịch số 58/2008/TTLT-BTC-BTN&MT ngày 04/7/2008 hướng dẫn thực hiện một số điều của Quyết định số 130/2007/QĐ-TTg ngày 02/8/2007 của Thủ tướng Chính phủ về một số chính sách, cơ chế tài chính đối với dự án đầu tư theo cơ chế phát triển sạch;</li>
							<li>Thông tư liên tịch số 204/2010/TTLT-BTC-BTN&MT ngày 15/12/2010 của liên bộ Tài chính, Bộ Tài nguyên và Môi trường sửa đổi, bổ sung một số nội dung của thông tư liên tịch số 58/2008/TTLT-BTC-BTN&MT ngày 4/7/2008.</li>
							<li>Quyết định số 97/QĐ-QBVMT ngày 26/6/2013 của Quỹ Bảo vệ môi trường Việt Nam về việc ban hành quy trình hỗ trợ giá điện.</li>
							<li>Quyết định số 37/2011/QĐ-TTg ngày 29/6/2011 của của Thủ tướng Chính phủ về cơ chế hỗ trợ các dự án điện gió tại Việt Nam.</li>
							<li>Quyết định số 36/QĐ-QBVMT  ngày 03/9/2016 của Quỹ Bảo vệ môi trường Việt Nam về việc ban hành quy trình hỗ trợ giá điện theo Quyết định số 37/2011/QĐ-TTg của Thủ tướng Chính phủ.</li>
						</ul>
						<p style="color: #00b050;font-weight: bold; padding-top: 15px;">Các nội dung hoạt động trong lĩnh vực CDM</p>
						<ul style="margin-left: 30px;">
							<li>Đăng ký, theo dõi và quản lý các chứng chỉ giảm phát thải khí nhà kính được chứng nhận (CERs)</li>
							<li>Thu lệ phí bán/chuyển CERs</li>
							<li>Hỗ trợ tài chính xây dựng văn kiện thiết kế dự án (PDD)</li>
							<li>Trợ giá cho các sản phẩm dự án đầu tư theo cơ chế phát triển sạch (CDM)</li>
							<li>Hỗ trợ tài chính cho các hoạt động phổ biến, tuyên truyền nâng cao nhận thức về biến đổi khí hậu và CDM</li>
							<li>Hỗ trợ các hoạt động của Ban chỉ đạo thực hiện Công ước khung của Liên hợp quốc về biến đổi khí hậu và Nghị định thư Kyoto</li>
							<li>Hỗ trợ các hoạt động khác liên quan đến CDM theo quy định của pháp luật</li>
							<li>Hỗ trợ 10% vốn đầu tư thiết bị của dự án triển khai ứng dụng sáng chế bảo vệ môi trường</li>
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