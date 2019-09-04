@extends('master-layout2')
@section('content')

<section class="home-wrap">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9">
				<div class="row content-left-row main-banner">
					<div class="col-md-7 left_main_banner">
						<div class="slide owl-carousel owl-theme">

							<div class="item"><img src="{{ asset('images/index1_03.jpg') }}">
								<p class="title-img lang" key="eng">Hội nghị hỗ trợ tài chính năm 2019 cho các hoạt động bảo vệ môi trường, ứng phó biến đổi khí hậu</p>
							</div>
							<div class="item"><img src="{{ asset('images/index1_05.png') }}">
								<p class="title-img lang" key="eng">Chuẩn bị tổ chức hưởng ứng Tuần lễ Biển và Hải đảo Việt Nam, Tháng hành động vì môi trường năm 2019</p>
							</div>
							<div class="item"><img src="{{ asset('images/index1_08.png') }}">
								<p class="title-img lang" key="eng">Quỹ Bảo vệ môi trường Việt Nam ký Biên bản hợp tác với Công ty Mevos, Cộng hòa Séc</p>
							</div>
							<div class="item"><img src="{{ asset('images/index1_11.png') }}">
								<p class="title-img lang" key="eng">Bộ trưởng Trần Hồng Hà tham quan mô hình xử lý nước thải tại KCN Sóng Thần II</p>
							</div>
							<div class="item"><img src="{{ asset('images/index1_13.png') }}">
								<p class="title-img lang" key="eng">Chuẩn bị tổ chức hưởng ứng Tuần lễ Biển và Hải đảo Việt Nam, Tháng hành động vì môi trường năm 2019</p>
							</div>
							<div class="item"><img src="{{ asset('images/index1_08.png') }}">
								<p class="title-img lang" key="eng">Quỹ Bảo vệ môi trường Việt Nam ký Biên bản hợp tác với Công ty Mevos, Cộng hòa Séc</p>
							</div>

						</div>
					</div>
					<div class="col-md-5 right_main_banner">
						<div class="row sub-content mt-3">
							<div class="col-md-4 sub-image"><img src="{{ asset('images/index1_05.png') }}"></div>
							<div class="col-md-8 sub-title lang" key="eng">
								Hội nghị hỗ trợ tài chính năm 2019 cho các hoạt động bảo vệ môi trường, ứng phó biến đổi khí hậu
							</div>
						</div>
						<div class="row sub-content">
							<div class="col-md-4 sub-image"><img src="{{ asset('images/index1_08.png') }}"></div>
							<div class="col-md-8 sub-title lang" key="eng">
								Chuẩn bị tổ chức hưởng ứng Tuần lễ Biển và Hải đảo Việt Nam, Tháng hành động vì môi trường năm 2019
							</div>
						</div>
						<div class="row sub-content">
							<div class="col-md-4 sub-image"><img src="{{ asset('images/index1_11.png') }}"></div>
							<div class="col-md-8 sub-title lang" key="eng">
								Quỹ Bảo vệ môi trường Việt Nam ký Biên bản hợp tác với Công ty Mevos, Cộng hòa Séc
							</div>
						</div>
						<div class="row sub-content">
							<div class="col-md-4 sub-image"><img src="{{ asset('images/index1_13.png') }}"></div>
							<div class="col-md-8 sub-title lang" key="eng">
								Bộ trưởng Trần Hồng Hà tham quan mô hình xử lý nước thải tại KCN Sóng Thần II
                            </div>
                        </div>
                        <div class="row sub-content">
                            <div class="col-md-4 sub-image"><img src="{{ asset('images/index1_05.png') }}"></div>
                            <div class="col-md-8 sub-title lang" key="eng">
                                Quỹ Bảo vệ môi trường Việt Nam ký Biên bản hợp tác với Công ty Mevos, Cộng hòa Séc
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row content-left-row banner">
    <img src="images/banner.png">
</div>
<div class="row content-left-row news">
    <div class="col news-container">
        <div class="row">
            <div class="col-md-6 news-header lang" key="hd-quy">Tin hoạt động của quỹ</div>
            <div class="col-md-6 news-header2"></div>
        </div>
        <div style="clear: both;"></div>
        <div class="box-news">
            <div class="row news-main">
                <div class="col-md-6 news-main-img"><img src="{{ asset('images/index1_05.png') }}"></div>
                <div class="col-md-6 news-main-title lang" key="eng">Hội nghị hỗ trợ tài chính năm 2019 cho các hoạt động bảo vệ môi trường, ứng phó biến đổi khí hậu
                    <p><i class="far fa-clock"></i><span>26/07/2019</span></p>
                </div>
                <div>
                    <ul>
                        <li class="lang" key="eng">Tập đoàn Biwater (Anh Quốc) mong muốn hỗ trợ Việt Nam xử lý nước thải (13/02/2018)<span>(13/02/2018)</span></li>
                        <li class="lang" key="eng">Quỹ Bảo vệ môi trường Việt Nam ký Biên bản hợp tác với Công ty Mevos, Cộng hòa Séc (13/02/2018)<span>(13/02/2018)</span></li>
                        <li class="lang" key="eng">Bộ trưởng Bộ TN&MT Trần Hồng Hà thị sát mô hình đốt rác sinh hoạt phát điện (13/02/2018)<span>(13/02/2018)</span></li>
                    </ul>
                </div>
                <div style="width:100%;">
                    <div class="btn see_more lang" key="more">XEM THÊM >></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
    <div class="col news-container">
        <div class="row">
            <div class="col-md-6 news-header lang" key="hd-quy">TIN MÔI TRƯỜNG</div>
            <div class="col-md-6 news-header2"></div>
        </div>
        <div style="clear: both;"></div>
        <div class="box-news">
            <div class="row news-main">
                <div class="col-md-6 news-main-img"><img src="{{ asset('images/index1_08.png') }}"></div>
                <div class="col-md-6 news-main-title lang" key="hd-quy">Chuẩn bị tổ chức hưởng ứng Tuần lễ Biển và Hải đảo Việt Nam, Tháng hành động vì môi trường năm 2019
                    <p><i class="far fa-clock"></i><span>26/07/2019</span></p>
                </div>
                <div>
                    <ul>
                        <li class="lang" key="eng">Bộ trưởng Trần Hồng Hà tham quan mô hình xử lý nước thải tại KCN Sóng Thần II (13/02/2018)<span>(13/02/2018)</span></li>
                        <li class="lang" key="eng">Bộ trưởng Bộ TN&MT Trần Hồng Hà thị sát mô hình đốt rác sinh hoạt phát điện (13/02/2018)<span>(13/02/2018)</span></li>
                        <li class="lang" key="eng">Hội thảo Hợp tác quốc tế về ngăn ngừa ô nhiễm Việt Nam – Nhật Bản (13/02/2018)<span>(13/02/2018)</span></li>
                    </ul>
                </div>
                <div style="width:100%;">
                    <div class="btn see_more lang" key="more">XEM THÊM >></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row content-left-row news">
    <div class="col news-container">
        <div class="row">
            <div class="col-md-6 news-header lang" key="hd-quy">HỢP TÁC PHÁT TRIỂN</div>
            <div class="col-md-6 news-header2"></div>
        </div>
        <div style="clear: both;"></div>
        <div class="box-news">
            <div class="row news-main">
                <div class="col-md-6 news-main-img"><img src="{{ asset('images/index_03.jpg') }}"></div>
                <div class="col-md-6 news-main-title lang" key="hd-quy">Ký Thỏa thuận hợp tác với Công ty TNHH MTV Võ Việt Chung xây dựng và triển khai dự án “Blue Ocean World” 
                    <p><i class="far fa-clock"></i><span>26/07/2019</span></p>
                </div>
                <div>
                    <ul>
                        <li class="lang" key="eng">Tham gia tổ chức Lễ phát động quốc gia hưởng ứng Chiến dịch Làm cho thế giới sạch hơn năm 2019 tại Đà lạt  (13/02/2018)<span>(13/02/2018)</span></li>
                        <li class="lang" key="eng">Thực hiện dự án “nâng cao năng lực và trao đổi kinh nghiệm cho cán bộ của Quỹ  trong công tác hỗ trợ vay vốn cho các dự án bảo vệ môi trường” (13/02/2018)<span>(13/02/2018)</span></li>
                        <li class="lang" key="eng">Tham gia tổ chức Lễ phát động quốc gia hưởng ứng Chiến dịch Làm cho thế giới sạch hơn năm 2019 tại Đà lạt  (13/02/2018)<span>(13/02/2018)</span></li>
                    </ul>
                </div>
                <div style="width:100%;">
                    <div class="btn see_more lang" key="more">XEM THÊM >></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
    <div class="col news-container">
        <div class="row">
            <div class="col-md-6 news-header lang" key="hd-quy">KHOA HỌC CÔNG NGHỆ</div>
            <div class="col-md-6 news-header2"></div>
        </div>
        <div style="clear: both;"></div>
        <div class="box-news">
            <div class="row news-main">
                <div class="col-md-6 news-main-img"><img src="{{ asset('images/index_06.jpg') }}"></div>
                <div class="col-md-6 news-main-title lang" key="eng">Việt Nam - EU Tăng cường hợp tác bảo vệ khí hậu
                    <p><i class="far fa-clock"></i><span>26/07/2019</span></p>
                </div>
                <div>
                    <ul>
                        <li class="lang" key="eng">Công nghệ bê tông rỗng thoát nước nhanh thích ứng với biến đổi khí hậu (13/02/2018)<span>(13/02/2018)</span></li>
                        <li class="lang" key="eng">ổng cục Môi trường: Đánh giá, lựa chọn mô hình xử lý chất thải rắn để nhân rộng tại các địa phương (13/02/2018)<span>(13/02/2018)</span></li>
                        <li class="lang" key="eng">Công nghệ bê tông rỗng thoát nước nhanh thích ứng với biến đổi khí hậu (13/02/2018)<span>(13/02/2018)</span></li>
                    </ul>
                </div>
                <div style="width:100%;">
                    <div class="btn see_more lang" key="more">XEM THÊM >></div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active lang" key="hoidap" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
            aria-controls="nav-home" aria-selected="true">Hỏi Đáp</a>
        <a class="nav-item nav-link lang" key="gui-cauhoi" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
            aria-controls="nav-profile" aria-selected="false">Gửi Câu Hỏi</a>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="questions">
            <div class="row">
                <div class="col-md-6 left_questions">
                    <p class="lang" key="toimuon">
                        <span>1.</span>Tôi muốn thực hiện dự án lọc khí thải công nghiệp trước khi thải ra môi trường đang cần nguồn kinh phí hỗ trợ. xin hỏi có nguồn kinh phí nào hộ trợ phát triển dự án không?
                        <p class="detail lang" key="more"><a href="#">Chi Tiết >></a></p>
                        <div style="clear: both;"></div>
                    </p>
                    <p class="lang" key="toimuon">
                        <span>3.</span>kính chào Quỹ bảo vệ môi trường Việt Nam, Tôi từ công ty TNHH Môi trường Sung mun,Hiện tại công ty chúng tôi đang muốn xây dựng hệ thống xử lý nước thải của công ty đặt trong Khu công nghiệp, tôi muốn hỏi điều kiện nào để được vay vốn từ Quỹ và tôi phải tiến hành chuẩn bị những hồ sơ, thủ tục gì để có thể vay vốn ạ? Xin chân thành cảm ơn.
                        <p class="detail lang" key="more"><a href="#"> Chi Tiết >></a></p>
                    </p>
                </div>
                <div class="col-md-6 ">
                    <p class="lang" key="toimuon">
                        <span>2.</span> Tôi muốn vay vốn. Tôi muốn đầu tư nhà máy sản xuất gạch không nung.Dây chuyền của công ty Trung Hậu sản xuất trong nước.Công suất 3 triệu viên /năm. Giá dự toán khoảng 3 tỷ. Tôi ở Sơn La có được vay vốn của quỹ bảo vệ môi trường việt Nam không...? 
                        <p class="detail lang" key="more"><a href="#">Chi Tiết>></a></p>
                        <div style="clear: both;"></div>
                    </p>
                    <p class="lang" key="toimuon">
                        <span>4.</span>Chúng tôi có một dự án nhà máy phát điện xử dụng rác thải cứng ( kể cả công nghiệp và y tế) công nghệ khí hóa bằng Plamas. công xuất 600 tấn ngày ( sản xuất 100.000 MGW điện năm ) Tồng vốn đầu tư 60 triệu USD. Xin được hỏi có thể xin hổ trợ về lãi xuất để vay vốn không? trân trọng
                        <p class="detail lang" key="more"><a href="#"> Chi Tiết >></a></p>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div class="questions" >
            <div class="row">
                <div class="col-md-6 send-ques">
                    <textarea type="text" rows="6" placeholder="Input your questions..."></textarea>
                    <br>
                    <button>Gửi</button>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
</div>


<nav>
    <div class="nav nav-tabs" id="nav-tab1" role="tablist">
        <a class="nav-item nav-link active lang" key="thuvien" id="nav-home-tab1" data-toggle="tab" href="#nav-home1" role="tab" aria-controls="nav-home" aria-selected="true">THƯ VIỆN</a>
        <a class="nav-item nav-link lang" id="nav-profile-tab1" key="ha-vd" data-toggle="tab" href="#nav-profile1" role="tab" aria-controls="nav-profile" aria-selected="false">Hình ảnh | Video</a>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent1">
    <div class="tab-pane fade show active" id="nav-home1" role="tabpanel" aria-labelledby="nav-home-tab">
        
        <div class="slide2 owl-carousel owl-theme">
            <div class="item"><img class="img-tent" src="{{ asset('images/index_14.jpg') }}">
                <p class="lang" key="eng">Hệ thống xử lý nước thải tập trung</p>
            </div>
            <div class="item"><img class="img-tent" src="{{ asset('images/index_16.jpg') }}">
                <p class="lang" key="eng">Kỉ niệm 10 năm thành lập Quỹ Bảo Vệ Môi trường</p>
            </div>
            <div class="item"><img class="img-tent" src="{{ asset('images/index1_11.png') }}">
                <p class="lang" key="eng">Hội thảo kinh tế xanh và phát triển bền vững</p>
            </div>
            <div class="item"><img class="img-tent" src="{{ asset('images/index_14.jpg') }}">
                <p class="lang" key="eng">Hệ thống xử lý nước thải tập trung</p>
            </div>
            <div class="item"><img class="img-tent" src="{{ asset('images/index_16.jpg') }}">
                <p class="lang" key="eng">Kỉ niệm 10 năm thành lập Quỹ Bảo Vệ Môi trường</p>
            </div>
            <div class="item"><img class="img-tent" src="{{ asset('images/index1_11.png') }}">
                <p class="lang" key="eng">Hội thảo kinh tế xanh và phát triển bền vững</p>
            </div>
        </div>
    </div>
      <div class="tab-pane fade" id="nav-profile1" role="tabpanel" aria-labelledby="nav-profile-tab">
          Xin chào các bạn !!!
      </div>
</div>

			</div>
			<div class="col-md-3">
				<div class="content">
            <div class=" customer-info">
    <h6 class="lang" key="dangky-vayvon">đăng ký vay vốn ưu đãi</h6>
</div>

<form id="form-info">
    <div class="form-group">
        <label class="lang" key="ten-cty" for=""><strong>Tên doanh nghiệp<span style="color:red;">*</span></strong></label>
        <input type="text" class="form-control" id="exampleInput1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label class="lang" key="ten-duan" for=""><strong>Tên dự án<span style="color:red;">*</span></strong></label>
        <input type="text" class="form-control" id="exampleInput2">
    </div>
    <div class="form-group">
        <label class="lang" key="dia-chi" for=""><strong>Địa chỉ<span style="color:red;">*</span></strong></label>
        <input type="text" class="form-control" id="exampleInput3">
    </div>
    <div class="form-group">
        <label class="lang" key="sodienthoai" for=""><strong>Số điện thoại<span style="color:red;">*</span></strong></label>
        <input type="text" class="form-control" id="exampleInput4">
    </div>
    <div class="form-group">
        <label class="lang" key="duan" for=""><strong>Tóm tắt nội dung dự án<span style="color:red;">*</span></strong></label>
        <textarea name="" cols="32" rows="3" class="form-control"></textarea>
    </div>
    <div class="btn-send-info">
        <button type="submit" class="btn btn-primary lang" key="sent">Gửi thông tin</button>
    </div>

</form> <!-- hết form-info -->

<div class="adv">
    <img src="images/adv.jpg" alt="" class="img-fluid">

    <div class="img-text lang" key="lai-suat">
        Mức lãi suất cho vay ưu đãi các dự án đầu tư 
bảo vệ môi trường 
năm 2019 là 2.6%/năm hoặc 3.6%/năm
        <br><br>
        Mức hỗ trợ lãi suất 
sau đầu tư cho các dự án 
bảo vệ môi trường
 năm 2019 là 2,4%/năm
    </div>
</div> <!-- hết adv -->

<div class="services">
    <div class="title-services">
        <h6 class="lang" key="hoatdong-nghiepvu">HOẠT ĐỘNG NGHIỆP VỤ</h6>
    </div>
    <ul class="form-inner">
        <li>
            <img src="images/sv1.png" alt="">
            <span class="lang" key="cho-vay">Cho vay lãi suất ưu đãi</span>
        </li>
        <li> <img src="images/sv2.png" alt="">
            <span class="lang" key="taitro">Tài trợ và đồng tài trợ</span>
        </li>
        <li> <img src="images/sv3.png" alt="">
            <span class="lang" key="y-quy">ý quỹ cải tạo phục hồi môi trường trong khai thác khoáng sản</span>
        </li>
        <li> <img src="images/sv4.png" alt="">
            <span class="lang" key="kinhte-xanh">Kinh tế xanh</span>
        </li>
        <li> <img src="images/sv5.png" alt="">
            <span class="lang" key="GEF">Văn phòng GEF Việt Nam</span>
        </li>
        <li> <img src="images/sv6.png" alt="">
            <span class="lang" key="khac">Các hoạt động khác</span>
        </li>
    </ul>

</div> <!-- hết services -->

<div class="meeting-online">
    <img src="images/adv2.jpg" alt="">
    <div class="sub-text lang" key="hop">HỌP TRỰC TUYẾN</div>
</div>

<div class="adv2">
    <img src="images/dubao.jpg" alt="" class="img-fluid">
</div>

<div class="link">
    <div class="title-link">
        <h6 class="lang" key="lk-trang">Liên Kết Trang</h6>
    </div>
    <form action="" id="form-link">
        <br>
        <select class="form-control">
            <option class="lang" key="bo-nganh" value="Ministry, Industry, Local">Bộ, Ngành, Địa Phương</option>
            <option class="lang" key="bo-nganh" value="Ministry, Industry, Local 2">Bộ, Ngành, Địa Phương 2</option>
            <option class="lang" key="bo-nganh" value="Ministry, Industry, Local 3">Bộ, Ngành, Địa Phương 3</option>
        </select>

        <select class="form-control">
            <option class="lang" key="cac-don-vi" value="Career units">Các đơn vị sự kiện</option>
            <option class="lang" key="cac-don-vi" value="Career units 2">Đơn vị 2</option>
            <option class="lang" key="cac-don-vi" value="Career units 3">Đơn vị 3</option>
        </select>
        <br>
    </form>
</div> <!-- hết link -->

<div class="access-time">
    <div class="title-link">
        <h6 class="lang" key="thongke">thống kê truy cập</h6>
    </div>
    <div class="number">
        <div class="num1 lang" key="onl">
            Đang Online <br>
            <span>65</span>
        </div>
        <div class="num2 lang" key="luot">
            Lượt truy cập <br>
            <span>2044189</span>
        </div>
        <div style="clear: both;"></div>
    </div>

</div><!--  hết access-time -->
</div>


			</div>
		</div>
	</div>
</section>

@endsection