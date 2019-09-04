@extends('master-layout')
@section('content')


<section class="document-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="a-link">
					Trang chủ / <span style="color: #007633;">Văn bản chế độ</span>
				</div>
				<div class="document-content">
					<div class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-xl">
						<table class="table table-bordered" style="margin-top: 10px;">
						  <thead class="thead-dark|thead-light">
						    <tr style="background-color: #d8e0eb; border-color: #d8e0eb;" class="document-thead">
						      <th scope="col">Số/Ký hiệu</th>
						      <th scope="col">Ngày ban hành</th>
						      <th scope="col">Nơi ban hành</th>
						      <th scope="col">Trích yếu</th>
						    </tr>
						  </thead>
						  <tbody class="document-tbody">
						    <tr>
						      <td scope="row">03/QĐ-HĐQL</td>
						      <td>11/07/2019</td>
						      <td>Hội đồng quản lý</td>
						      <td>Về mức hỗ trợ lãi suất sau đầu tư năm 2019</td>
						    </tr>
						    <tr>
						      <td scope="row">10/QĐ-HĐQL</td>
						      <td>28/12/2018</td>
						      <td>Hội đồng quản lý</td>
						      <td>Áp dụng lãi suất cho vay ưu đãi của Quỹ Bảo vệ môi trường <br> Việt Nam năm 2019</td>
						    </tr>
						    <tr>
						      <td scope="row">11/QĐ-HĐQL</td>
						      <td>28/12/2018</td>
						      <td>Hội đồng quản lý</td>
						      <td>Ban hành lĩnh vực ưu tiên, tiêu chí lựa chọn cho vay ưu đãi của <br> Quỹ Bảo vệ môi trường Việt Nam</td>
						    </tr>
						    <tr>
						      <td scope="row">2168/QĐ-BTNMT</td>
						      <td>05/07/2018</td>
						      <td>Bộ Tài nguyên và môi trường</td>
						      <td>Ban hành Điều lệ tổ chức và hoạt động của Quỹ Bảo vệ môi trường Việt Nam</td>
						    </tr>
						    <tr>
						      <td scope="row">03/QĐ-HĐQL</td>
						      <td>23/04/2018</td>
						      <td>Hội đồng quản lý</td>
						      <td>Về mức hỗ trợ lãi suất sau đầu tư năm 2008</td>
						    </tr>
						    <tr>
						      <td scope="row">01/QĐ-HĐQL</td>
						      <td>02/04/2018</td>
						      <td>Hội đồng quản lý</td>
						      <td>Về việc áp dụng lãi suất năm 2018</td>
						    </tr>
						    <tr>
						      <td scope="row">02/QĐ-HĐQL</td>
						      <td>04/04/2017</td>
						      <td>Hội đồng quản lý Quỹ Bảo vệ môi trường Việt Nam</td>
						      <td>Về mức hỗ trợ lãi suất sau đầu tư năm 2017</td>
						    </tr>
						    <tr>
						      <td scope="row">03/QĐ-HĐQL</td>
						      <td>04/04/2017</td>
						      <td>Hội đồng quản lý Quỹ Bảo vệ môi trường Việt Nam</td>
						      <td>Về thẩm quyền quyết định cho vay vốn với lãi suất ưu đãi của Giám đốc Quỹ Bảo vệ môi trường Việt Nam giai đoạn 2017 - 2020</td>
						    </tr>
						    <tr>
						      <td scope="row">01/QĐ-HĐQL</td>
						      <td>04/04/2017</td>
						      <td>Hội đồng quản lý Quỹ Bảo vệ môi trường Việt Nam</td>
						      <td>Về việc áp dụng lãi suất năm 2017</td>
						    </tr>
						    <tr>
						      <td scope="row">07/QĐ-HĐQL</td>
						      <td>12/04/2016</td>
						      <td>Hội đồng quản lý Quỹ Bảo vệ môi trường Việt Nam</td>
						      <td>Về mức hỗ trợ lãi suất sau đầu tư năm 2016</td>
						    </tr>
						    <tr>
						      <td scope="row">03/QĐ-HĐQL</td>
						      <td>07/04/2016</td>
						      <td>Hội đồng quản lý Quỹ Bảo vệ môi trường Việt Nam</td>
						      <td>Về việc áp dụng lãi suất cho vay ưu đãi năm 2016</td>
						    </tr>
						    <tr>
						      <td scope="row">04/QĐ-HĐQL</td>
						      <td>07/04/2016</td>
						      <td>Hội đồng quản lý Quỹ Bảo vệ môi trường Việt Nam</td>
						      <td>Ban hành Lĩnh vực ưu tiên, tiêu chí lựa chọn cho vay ưu đãi đầu tư Bảo vệ môi trường của Quỹ Bảo vệ môi trường Việt Nam giai đoạn 2016-2018</td>
						    </tr>
						  </tbody>
						</table>
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