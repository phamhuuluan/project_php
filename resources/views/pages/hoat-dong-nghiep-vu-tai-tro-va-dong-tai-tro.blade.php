@extends('master-layout')
@section('content')


<section class="about-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="a-link">
					Trang chủ / Hoạt động nghiệp vụ / <span style="color: #007633;">Tài trợ và đồng tài trợ</span>
				</div>
				<div class="about">
					<p>
						<div class="font-size-23 font-bold">
							Tài trợ và đồng tài trợ
						</div>
					</p>
					<p>
						<div class="a-time">
							<i class="far fa-clock"></i> 03/11/2017 1:52:42 CH
						</div>
					</p>
					<div>
						<p style="color: #00b050;font-weight: bold; padding-top: 15px;">Văn bản quy định</p>
						<ul style="margin-left: 30px;">
							<li>Quyết định số 35/2008/QĐ-TTg ngày 03/3/2008 của Thủ tướng Chính phủ về việc tổ chức và hoạt động của Quỹ Bảo vệ môi trường Việt Nam.</li>
							<li>Quyết định số 82/2002/QĐ-TTg ngày 26/6/2002 của Thủ tướng Chính phủ về việc thành lập, tổ chức và hoạt động của Quỹ Bảo vệ môi trường Việt Nam.</li>
							<li>Quyết định số 2031/QĐ-BTNMT ngày 13/10/2008 của Bộ Tài nguyên và Môi trường về việc ban hành Điều lệ Tổ chức và Hoạt động của Quỹ Bảo vệ môi trường Việt Nam.</li>
							<li>Quyết định số 24/QĐ-HĐQL ngày 12/01/2004 của Hội đồng quản lý Quỹ Bảo vệ môi trường Việt Nam về việc ban hành quy chế cho vay với lãi suất ưu đãi, hỗ trợ lãi suất vay, tài trợ và đồng tài trợ của Quỹ Bảo vệ môi trường Việt Nam.</li>
							<li>Quyết định số 07/QĐ-QBVMT ngày 07 tháng 01 năm 2013 của Giám đốc Quỹ Bảo vệ môi trường Việt Nam về việc ban hành quy trình tài trợ.</li>
						</ul>
						<p style="color: #00b050;font-weight: bold; padding-top: 15px;">Đối tượng xét chọn</p>
						<p>Đối tượng xét chọn nhận tài trợ và đồng tài trợ là Chủ đầu tư thực hiện các dự án bảo vệ môi trường trong các lĩnh vực sau đây:</p>
						<ul style="margin-left: 30px;">
							<li>Tuyên truyền, giáo dục nâng cao nhận thức môi trường; phổ cập kiến thức bảo vệ môi trường trong cộng đồng và khen thưởng;</li>
							<li>Các dự án xử lý chất thải, cải tạo môi trường;</li>
							<li>Xây dựng, thử nghiệm, phổ biến và nhân rộng các mô hình cộng đồng tham gia bảo vệ môi trường;</li>
							<li>Thiết kế các chương trình, dự án nhằm vận động sự tài trợ của các tổ chức, cá nhân trong nước và ngoài nước cho bảo vệ môi trường;</li>
							<li>Đào tạo, chuyển giao công nghệ thân thiện với môi trường, sản xuất sạch hơn, các giải pháp phòng tránh, hạn chế và khắc phục sự cố môi trường;</li>
							<li>Tài trợ khắc phục sự cố môi trường.</li>
						</ul>
						<p style="color: #00b050;font-weight: bold; padding-top: 15px;">Điều kiện để được xem xét tài trợ</p>
						<p>Để được xem xét tài trợ, Chủ đầu tư phải đáp ứng đủ các điều kiện sau:</p>
						<ul style="margin-left: 30px;">
							<li>Dự án của Chủ đầu tư được cơ quan quản lý nhà nước về môi trường xác nhận thuộc đối tượng được xét chọn;</li>
							<li>Chủ đầu tư có vốn đối ứng ít nhất là 50% tổng chi phí đầu tư để thực hiện dự án đó.</li>
							<li>Hồ sơ xin tài trợ hoặc đồng tài trợ được Quỹ chấp thuận và tiến hành ký hợp đồng tài trợ hoặc đồng tài trợ.</li>
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