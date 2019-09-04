
<header id="header">
    <div id="logo"><img src="images/logo.png" alt=""> <br>
        <h4>VEPF</h4>
    </div>
    <div id="h-right">
        <h3>Viet nam environment protection fund</h3>
        <h4>Quỹ bảo vệ môi trường việt nam</h4>
    </div>
    <div style="clear: both;"></div>
    <div class="menu">
        <nav class="navbar navbar-expand-xl navbar-light" style="padding: 0px;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentXL"
                aria-controls="navbarSupportedContentXL" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContentXL">
                <ul class="navbar-nav mr-auto" style="height: 100%;">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('trang-chu') }}"><i class="fas fa-home"></i> <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownXL" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About us
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownXL">
                            <a class="dropdown-item" href="{{ route('gioi-thieu-chung') }}">Giới thiệu
                                chung</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('chuc-nang-nhiem-vu') }}">Chức năng nhiệm
                                vụ</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('co-cau-to-chuc') }}">Cơ cấu tổ chức</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownXL" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Forms of services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownXL">
                            <a class="dropdown-item" href="{{ route('cho-vay') }}">Cho
                                vay lãi suất ưu đãi</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item"
                                href="{{ route('vay-von') }}">Hỗ trợ lãi
                                suất vay vốn sau đầu tư</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('tai-tro') }}">Tài
                                trợ và đồng tài trợ</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('co-che-phat-trien') }}">Cơ
                                chế phát triển sạch (CDM)</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item"
                                href="{{ route('tro-gia') }}">Trợ giá sản
                                phẩm bảo vệ môi trường</a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('ky-quy') }}">Ký quỹ phục hồi môi
                                trường trong khai thác khoáng sản</a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('von-oda') }}">Vốn ODA và cho vay
                                ủy thác</a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('khac') }}">Các hoạt động khác</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownXL" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cooperation and development
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownXL">
                            <a class="dropdown-item" href="{{ route('qh-quoc-te') }}">Quan hệ với tổ
                                chức quốc tế</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('qh-trong-nuoc') }}">Quan hệ với tổ
                                chức trong nước</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('ht-quoc-te') }}">Dự án và hoạt
                                động hợp tác quốc tế</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('ht-trong-nuoc') }}">Dự án và hoạt
                                động hợp tác trong nước</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tin-tuc') }}" id="navbarDropdownXL" role="button">
                            News
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('van-ban-che-do') }}">Legal documents</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('bao-cao-thuong-nien') }}">Annual report</a>
                    </li>
                    {{-- <li class="nav-item active">
              <a class="nav-link" href="#"><i class="fas fa-home"></i> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              Giới thiệu
              <ul>
                <li><a href="{{ url('gioi-thieu/gioi-thieu-chung') }}">Giới thiệu chung</a></li>
                    <li><a href="{{ url('gioi-thieu/chuc-nang-nhiem-vu') }}">Chức năng nhiệm vụ</a></li>
                    <li><a href="{{ url('gioi-thieu/co-cau-to-chuc') }}">Cơ cấu tổ chức</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    Hoạt động nghiệp vụ
                    <ul>
                        <li><a href="{{ url('hoat-dong-nghiep-vu/cho-vay-lai-suat-uu-dai') }}">Cho vay lãi suất ưu
                                đãi</a></li>
                        <li><a href="{{ url('hoat-dong-nghiep-vu/ho-tro-lai-suat-vay-von-sau-dau-tu') }}">Hỗ trợ lãi
                                suất vay vốn sau đầu tư</a></li>
                        <li><a href="{{ url('hoat-dong-nghiep-vu/tai-tro-va-dong-tai-tro') }}">Tài trợ và đồng tài
                                trợ</a></li>
                        <li><a href="{{ url('hoat-dong-nghiep-vu/co-che-phat-trien-sach') }}">Cơ chế phát triển sạch
                                (CDM)</a></li>
                        <li><a href="{{ url('hoat-dong-nghiep-vu/tro-gia-san-pham-bao-ve-moi-truong') }}">Trợ giá sản
                                phẩm bảo vệ môi trường</a></li>
                        <li><a href="{{ url('hoat-dong-nghiep-vu/ky-quy') }}">Ký quỹ phục hồi môi trường trong khai thác
                                khoáng sản</a></li>
                        <li><a href="{{ url('hoat-dong-nghiep-vu/von-oda') }}">Vốn ODA và cho vay ủy thác</a></li>
                        <li><a href="{{ url('hoat-dong-nghiep-vu/khac') }}">Các hoạt động khác</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    Hợp tác phát triển
                    <ul>
                        <li><a href="{{ url('hop-tac-phat-trien/qh-quoc-te') }}">Quan hệ với tổ chức quốc tế</a></li>
                        <li><a href="{{ url('hop-tac-phat-trien/qh-trong-nuoc') }}">Quan hệ với tổ chức trong nước</a>
                        </li>
                        <li><a href="{{ url('hop-tac-phat-trien/ht-quoc-te') }}">Dự án và hoạt động hợp tác quốc tế</a>
                        </li>
                        <li><a href="{{ url('hop-tac-phat-trien/ht-trong-nuoc') }}">Dự án và hoạt động hợp tác trong
                                nước</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ url('tin-tuc') }}">Tin tức</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('van-ban-che-do') }}">Văn bản chế độ</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('bao-cao-thuong-nien') }}">Báo cáo thường niên</a>
                </li> --}}

                </ul>
                <div style="padding: 5px 0;">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Input keyword" aria-label=""
                            style="padding:0rem .75rem; height: 26px;">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i
                                class="fas fa-search"></i></button>
                    </form>
                </div>
        </nav>
    </div>
    <div class="bottom-header">
        <div class="row">
            <div class="col-md-3 left_btm">
                <i class="far fa-calendar-alt"></i> Thursday, 07/04/2019 15:39 GMT +7
            </div>
            <div class="col-md-9 right_btm">
                <ul class="menu2">
                    <li><a href="{{ route('thu-vien') }}" style="border: none;"><i class="fas fa-folder-open"></i>Multimedia</a></li>
                    <!-- <li><a href="#"><i class="fas fa-comment-dots"></i>FQA</a></li> -->

                  <!--   <li><a href="#" style="border: none;"><i class="fas fa-folder-open"></i>Multimedia</a></li> -->
                    <li><a href="{{  route('hoi-dap')}}"><i class="fas fa-comment-dots"></i>FQA</a>
                    </li>
                    <li><a href="#"><i class="fas fa-id-card"></i>Contact</a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i>Email</a></li>
                    <li><a href="#"><i class="fas fa-rss-square"></i>RSS</a></li>
                    <li><a href="#"><i class="fas fa-sitemap"></i>SiteMap</a></li>
                    <li><a href="#"><i class="fas fa-user"></i>Login</a></li>
                    <li><a href="#"><i class="fas fa-flag"></i>Vietnamese</a></li>
                </ul>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>
</header>

<!-- finish menu -->
