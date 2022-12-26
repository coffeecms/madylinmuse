

<footer class="footer-area ">
    <div class="footer-widget-area">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-lg-3 col-md-3 col-sm-6  col-12">
                    <div><strong>6 ngày đổi sản phẩm</strong></div>
                    <div><span>Đổi trả sản phẩm trong 6 ngày</span></div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6  col-12">
                    <div><strong>Hotline 1800 6650</strong></div>
                    <div><span>8h00 - 21h00, T2 - CN nghỉ Tết Âm lịch</span></div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6  col-12">
                    <div><strong>Hệ thống cửa hàng</strong></div>
                    <div><span>gần 60 cửa hàng trên toàn hệ thống</span></div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6  col-12">
                    <div><strong>Vận chuyển</strong></div>
                    <div><span>Đồng giá 25K toàn quốc</span></div>
                </div>
                             
            </div>
        </div>
    </div>
</footer>


<!-- footer area start here -->
<footer class="footer-area">
    <div class="footer-widget-area">
        <div class="container-fluid">
            <div class="row">
               
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                            <div class="single-widget">
                                <h3 class="widget-title">Madylinmuse</h3>
                                <div class="block-content mb-30">
                                    <p class="contact">Sang trọng</p>
                                    <p class="contact">Ứng dụng ở mức giá tầm trung</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-widget">
                                <h3 class="widget-title">Hỗ trợ khách hàng</h3>
                                <ul class="widget-menu">
                                    <li class="menu-item"><a class="menu-link"
                                            href="{{ route('shipping.return') }}">CHÍNH SÁCH VẬN CHUYỂN</a>
                                    </li>
                            
                                    <li class="menu-item"><a class="menu-link"
                                            href="{{ route('shipping.return') }}">CHÍNH SÁCH ĐỔI TRẢ</a>
                                    </li>
                            
                                    <li class="menu-item"><a class="menu-link"
                                            href="{{ route('terms.conditions') }}">PHƯƠNG THỨC THANH TOÁN</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-widget">
                                <h3 class="widget-title">Social network</h3>
                                <ul class="social-media">
                            @if (getSocialLink()->Facebook)
                                <li class="social-media-item">
                                    <a target="_blank" class="social-media-link" href="{{ getSocialLink()->Facebook }}">
                                        <i class="fab fa-facebook-f"></i></a>
                                </li>
                            @endif
                            @if (getSocialLink()->Skype)
                                <li class="social-media-item">
                                    <a target="_blank" class="social-media-link" href="{{ getSocialLink()->Skype }}">
                                        <i class="fab fa-skype"></i></a>
                                </li>
                            @endif
                            @if (getSocialLink()->Twitter)
                                <li class="social-media-item">
                                    <a target="_blank" class="social-media-link" href="{{ getSocialLink()->Twitter }}">
                                        <i class="fab fa-twitter"></i></a>
                                </li>
                            @endif
                            @if (getSocialLink()->Linkedin)
                                <li class="social-media-item">
                                    <a target="_blank" class="social-media-link"
                                        href="{{ getSocialLink()->Linkedin }}">
                                        <i class="fab fa-linkedin-in"></i></a>
                                </li>
                            @endif
                            @if (getSocialLink()->Instagram)
                                <li class="social-media-item">
                                    <a target="_blank" class="social-media-link"
                                        href="{{ getSocialLink()->Instagram }}">
                                        <i class="fab fa-instagram"></i></a>
                                </li>
                            @endif
                        </ul>
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container-fluid">
            <div class="footer-bottom-wrap">
            ©2020 Sixdo.vn
            </div>
        </div>
    </div>
</footer>
<!-- footer area end here -->
