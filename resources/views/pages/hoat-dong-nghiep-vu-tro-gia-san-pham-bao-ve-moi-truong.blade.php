@extends('master-layout')
@section('content')


<section class="about-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="a-link">
					Trang chủ / Hoạt động nghiệp vụ / <span style="color: #007633;">Trợ giá sản phẩm bảo vệ môi trường</span>
				</div>
				<div class="about">
					<p>
						<div class="font-size-23 font-bold">
							Trợ giá sản phẩm bảo vệ môi trường
						</div>
					</p>
					<p>
						<div class="a-time">
							<i class="far fa-clock"></i> Thứ tư - 26/12/2018 09:36
						</div>
					</p>
					<div>
						<p style="color: #00b050;font-weight: bold; padding-top: 15px;">Văn bản quy định</p>
						<ul style="margin-left: 30px;">
							<li>Quyết định số 130/2007/QĐ-TTg ngày 02/08/2007 của Thủ tướng Chính phủ về một số cơ chế, chính sách tài chính đối với dự án đầu tư theo cơ chế phát triển sạch;</li>
							<li>Thông tư liên tịch số 58/2008/TTLT-BTC-BTNMT ngày 04/07/2008 của liên Bộ Tài chính - Bộ Tài nguyên và Môi trường về hướng dẫn thực hiện một số điều của Quyết định số 130/2007/QĐ-TTg ngày 02/08/2007 của Thủ tướng Chính phủ về một số cơ chế, chính sách tài chính đối với dự án đầu tư theo cơ chế phát triển sạch;</li>
							<li>Quyết định số 37/2011/QĐ-TTg ngày 29 tháng 6 năm 2011 của Thủ tướng Chính phủ về cơ chế hỗ trợ phát triển các dự án điện gió tại Việt Nam;</li>
							<li>Thông tư 96/2012/TT-BTC ngày 08 tháng 06 năm 2012 về việc hướng dẫn cơ chế tài chính hỗ trợ giá điện đối với các dự án điện gió nối lưới.</li>
						</ul>
						<p style="color: #00b050;font-weight: bold; padding-top: 15px;">Đối tượng trợ giá và hỗ trợ giá</p>
						<ul style="margin-left: 30px;">
							<li>Sản phẩm của dự án CDM thuộc lĩnh vực ưu tiên được Chính phủ quy định trợ giá</li>
							<li>Các dự án điện gió nối lưới</li>
						</ul>
						<p style="color: #00b050;font-weight: bold; padding-top: 15px;">Điều kiện được xem xét trợ giá đối với sản phẩm của dự án CDM</p>
						<ul style="margin-left: 30px;">
							<li>Sản phẩm của dự án CDM được trợ giá từ Quỹ Bảo vệ môi trường Việt Nam khi đáp ứng các điều kiện sau:</li>
							<ul class="menu-tier-2">
								<li>a) Trong danh mục sản phẩm của dự án CDM thuộc lĩnh vực ưu tiên.</li>
								<li>b) Chi phí thực tế để sản xuất ra sản phẩm lớn hơn giá bán thực tế theo hợp đồng được ký kết.</li>
							</ul>
							<li>Thời gian trợ giá đối với sản phẩm của Dự án CDM được xác định căn cứ vào thời điểm dự án có sản phẩm và khả năng bù đắp chi phí sản xuất sản phẩm được trợ giá.</li>
						</ul>
						<p style="color: #00b050;font-weight: bold; padding-top: 15px;">Điều kiện được xem xét hỗ trợ giá điện gió</p>
						<ul style="margin-left: 30px;">
							<li>Bên mua điện có trách nhiệm mua toàn bộ điện năng được sản xuất từ các nhà máy điện gió nối lưới thuộc địa bàn mình quản lý theo quy định tại khoản 1, Điều 11 và khoản 1, Điều 14 Quyết định số 37/2011/QĐ-TTg.</li>
							<li>Việc mua bán điện được thực hiện thông qua hợp đồng mua bán điện được lập theo Hợp đồng mua bán điện mẫu áp dụng cho các dự án điện gió nối lưới do Bộ Công Thương ban hành. Giá mua điện thực hiện theo quy định tại Điều 14 Quyết định số 37/2011/QĐ-TTg.</li>
							<li>Có đầy đủ hồ sơ đề nghị hỗ trợ giá điện theo quy định.</li>
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