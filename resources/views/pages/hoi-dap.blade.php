@extends('master-layout')
@section('content')

<section class="home-wrap">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-9">
				<div class="a-link">
					Trang chủ / <span > <a href="#" style="color: #007633;">Báo cáo thường nhiên</a></span>
				</div>
				<div class="news-content1">
					<div class="search">
						<div class="row">
							<div class="col-md-2">Nội dung </div>
							<div class="col-md-10"> <input type="text" name="content"></div>
						</div>
						<div class="row">
							<div class="col-md-2"> Lĩnh vực</div>
							<div class="col-md-10">
								<select>
									<option>---------Tất cả--------</option>
									<option>Chính trị</option>
									<option>Quyết định</option>
								</select> 
								<button>Tìm kiếm</button>
							</div>
						</div>
					</div>
				
					<div class="question_give">
						<p><a href="#">Đặt câu hỏi</a></p>
					</div>
					<div class="page_news">
						<span style="margin-left: 0"><b>Trang </b></span> 
						<span> <a href="#">Đầu</a> </span>
						<span> <a href="#">Trước</a></span>
						<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select>
						<div class="page_news_content">
							<div class="tilte_content">
								<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
							</div>
							<div>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dolorum laboriosam magnam quas placeat laudantium quo vel maxime rem. Amet ullam dignissimos ratione ab recusandae totam vero, ipsum, incidunt dolorem!
							</div>
							<div class="address">
								Nguyễn Thị Anh (nguyenquangtuyen@gmail.com), Hà Nội
							</div>
						</div>
						<div class="page_news_content">
							<div class="tilte_content">
								<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
							<div>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dolorum laboriosam magnam quas placeat laudantium quo vel maxime rem. Amet ullam dignissimos ratione ab recusandae totam vero, ipsum, incidunt dolorem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dolorum laboriosam magnam quas placeat laudantium quo vel maxime rem. Amet ullam dignissimos ratione ab recusandae totam vero, ipsum, incidunt dolorem! 
							</div>
							</div>
							<div class="address">
								Nguyễn Thị Anh (nguyenquangtuyen@gmail.com), Hà Nội
							</div>
						</div>
						<div class="page_news_content">
							<div class="tilte_content">
								<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
							</div>
							<div>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dolorum laboriosam magnam quas placeat laudantium quo vel maxime rem. Amet ullam dignissimos ratione ab recusandae totam vero, ipsum, incidunt dolorem!
							</div>
							<div class="address">
								Nguyễn Thị Anh (nguyenquangtuyen@gmail.com), Hà Nội
							</div>
						</div>
						<div class="page_news_content">
							<div class="tilte_content">
								<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
							</div>
							<div>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dolorum laboriosam magnam quas placeat laudantium quo vel maxime rem. Amet ullam dignissimos ratione ab recusandae totam vero, ipsum, incidunt dolorem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, eius molestiae distinctio atque, minus autem totam repellendus, aperiam aliquid quisquam voluptates fugiat reiciendis, omnis non molestias laborum alias. Libero, excepturi.
							</div>
							<div class="address">
								Nguyễn Thị Anh (nguyenquangtuyen@gmail.com), Hà Nội
							</div>
						</div>
						<div class="page_news_content last">
							<div class="tilte_content">
								<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
							</div>
							<div>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dolorum laboriosam magnam quas placeat laudantium quo vel maxime rem. Amet ullam dignissimos ratione ab recusandae totam vero, ipsum, incidunt dolorem!
							</div>
							<div class="address">
								Nguyễn Thị Anh (nguyenquangtuyen@gmail.com), Hà Nội
							</div>
						</div>
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