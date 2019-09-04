@extends('master-layout')
@section('content')


<section class="vdchitiet-wrap">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-9">
				<div class="a-link">
					Trang chủ / <span style="color: #007633;">Thư viện</span>
				</div>
				<div class="vidchitiet-content">
					<h5 class="title-vidchitiet">
						Thủ tướng chính phủ Nguyễn Xuân Phúc phát động phong trào chống rác thải nhựa trên toàn quốc
					</h5>
					<p>
						<div class="a-time">
							<i class="far fa-clock"></i> 09:34 AM 14/12/2016
						</div>
					</p>
					<div class="embed-responsive embed-responsive-16by9">
					  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
					</div>
					
					<p style="font-weight: bold;color:#02843a;margin-top: 30px;">XEM THÊM</p>
					<div class="views-plus">

							<div class="row">
								<div class="col-md-4">
									<img src="{{ asset('images/tt1.jpg') }}" alt="" width="100%"> <br>
									<p><a href="{{ route('video-chitiet') }}" title="" class="sub-cont">
									 Hành trình thu gom rác thải điện tử miễn phí tại nhà</a></p>
								</div>
								<div class="col-md-4">
									<img src="{{ asset('images/tt1.jpg') }}" alt="" width="100%"> <br>
									<p><a href="{{ route('video-chitiet') }}" title="" class="sub-cont">
									 Hành trình thu gom rác thải điện tử miễn phí tại nhà</a></p>
								</div>
								<div class="col-md-4">
									<img src="{{ asset('images/tt1.jpg') }}" alt="" width="100%"> <br>
									<p><a href="{{ route('video-chitiet') }}" title="" class="sub-cont">
									 Hành trình thu gom rác thải điện tử miễn phí tại nhà</a></p>
								</div>
								<div class="col-md-4">
									<img src="{{ asset('images/tt1.jpg') }}" alt ="" width="100%"> <br>
									<p><a href="{{ route('video-chitiet') }}" title="" class="sub-cont">
									 Hành trình thu gom rác thải điện tử miễn phí tại nhà</a></p>
								</div>
								<div class="col-md-4">
									<img src="{{ asset('images/tt1.jpg') }}" alt="" width="100%"> <br>
									<p><a href="{{ route('video-chitiet') }}" title="" class="sub-cont">
									 Hành trình thu gom rác thải điện tử miễn phí tại nhà</a></p>
								</div>
								<div class="col-md-4">
									<img src="{{ asset('images/tt1.jpg') }}" alt="" width="100%"> <br>
									<p><a href="{{ route('video-chitiet') }}" title="" class="sub-cont">
									 Hành trình thu gom rác thải điện tử miễn phí tại nhà</a></p>
								</div>
								<div class="col-md-4">
									<img src="{{ asset('images/tt1.jpg') }}" alt="" width="100%"> <br>
									<p><a href="{{ route('video-chitiet') }}" title="" class="sub-cont">
									 Hành trình thu gom rác thải điện tử miễn phí tại nhà</a></p>
								</div>
								<div class="col-md-4">
									<img src="{{ asset('images/tt1.jpg') }}" alt="" width="100%"> <br>
									<p><a href="{{ route('video-chitiet') }}" title="" class="sub-cont">
									 Hành trình thu gom rác thải điện tử miễn phí tại nhà</a></p>
								</div>
								<div class="col-md-4">
									<img src="{{ asset('images/tt1.jpg') }}" alt="" width="100%"> <br>
									<p><a href="{{ route('video-chitiet') }}" title="" class="sub-cont">
									 Hành trình thu gom rác thải điện tử miễn phí tại nhà</a></p>
								</div>
								<div class="col-md-4">
									<img src="{{ asset('images/tt1.jpg') }}" alt="" width="100%"> <br>
									<p><a href="{{ route('video-chitiet') }}" title="" class="sub-cont">
									 Hành trình thu gom rác thải điện tử miễn phí tại nhà</a></p>
								</div>
								<div class="col-md-4">
									<img src="{{ asset('images/tt1.jpg') }}" alt="" width="100%"> <br>
									<p><a href="{{ route('video-chitiet') }}" title="" class="sub-cont">
									 Hành trình thu gom rác thải điện tử miễn phí tại nhà</a></p>
								</div>
								<div class="col-md-4">
									<img src="{{ asset('images/tt1.jpg') }}" alt="" width="100%"> <br>
									<p><a href="{{ route('video-chitiet') }}" title="" class="sub-cont">
									 Hành trình thu gom rác thải điện tử miễn phí tại nhà</a></p>
								</div>
							</div>

					</div>

					<div class="" style="text-align: right;font-weight: bold;margin-bottom: 100px;">(Báo TN&MT)</div>

					<div class="form-comment">
						<form>
							<h5>BÌNH LUẬN</h5>
							<textarea name="" cols="50" rows="2" class="form-control"></textarea>
							<div class="send-comment"><button class="btn btn-success send-cm">Gửi bình luận</button></div>
							<div style="clear: both;"></div>
						</form>

					</div>

				<div class="tintuc">
					<div class="row">
						<div class="col-md-3  title_tt">
							<span >TIN LIÊN QUAN</span>
						</div>
						<div class="col-md-9">
							<div class="view_date">
								Xem theo ngày 
								<select>
									<option>26</option>
									<option>2</option>
									<option>3</option>
								</select>
								<select>
									<option>Tháng 1</option>
									<option>Tháng 2</option>
									<option> Tháng 33</option>
								</select>
								<select>
									<option>2018</option>
									<option>2019</option>
									<option>2020</option>
								</select>
								<button> XEM</button>
							</div>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="row content-tt">
						<div class="col-md-4 tt">
							<img src="{{ asset('images/hop.jpg') }}">
							<p>Lorem ipsum dolor sit amet, consect adipisicing elit. Eos simili</p>
						</div>
						<div class="col-md-4 tt">
							<img src="{{ asset('images/hoinghi.jpg') }}">
							<p>Lorem ipsum dolor sit amet, consect adipisicing elit. Eos simili</p>
						</div>
						<div class="col-md-4 tt">
							<img src="{{ asset('images/hop.jpg') }}">
							<p>Lorem ipsum dolor sit amet, consect adipisicing elit. Eos simili</p>
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