<!doctype html>
<html lang="en">
<head>
	<title>VITI Express</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta property="og:description"
	      content="VITI Express"/>

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,900;1,300&display=swap"
	      rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('css/aos.css') }}">
	<link rel="stylesheet" href="{{ asset('//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css') }}">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<style>
		.ftco-cover-1, .ftco-cover-1 .container > .row {
			height: inherit;
		}
	</style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div id="overlayer"></div>
<div class="loader">
	<div class="spinner-border text-primary" role="status">
		<span class="sr-only">Loading...</span>
	</div>
</div>

<div class="site-wrap" id="home-section">

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close mt-3">
				<span class="icon-close2 js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>


	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<a href="mailto:hotro.vitiexpress@gmail.com" class=""><span
								class="mr-2  icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">hotro.vitiexpress@gmail.com</span></a>
					<span class="mx-md-2 d-inline-block"></span>
					<a href="tel:0704881688" class=""><span class="mr-2  icon-phone"></span> <span
								class="d-none d-md-inline-block">0704.88.1688</span></a>
					<span class="mx-md-2 d-inline-block"></span>
					<a href="#" target="_blank" class=""><span class="mr-2  icon-facebook"></span> <span
								class="d-none d-md-inline-block">Facebook</span></a>

				</div>

			</div>

		</div>
	</div>

	<header class="site-navbar js-sticky-header site-navbar-target" role="banner">

		<div class="container">
			<div class="row align-items-center position-relative">


				<div class="site-logo">
					<a href="#" class="text-black"><span class="text-primary" style="color: #12487b!important">VITI EXPRESS</span></a>
				</div>

				<div class="col-12">
					<nav class="site-navigation text-right ml-auto " role="navigation">

						<ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
							<li><a href="#services-section" class="nav-link">Dịch vụ</a></li>

							<li><a href="#" class="nav-link">Bảng giá</a></li>
							<li class="has-childrens">
								<a href="#about-section" class="nav-link">Về chúng tôi</a>
								<ul class="dropdown arrow-top d-none">
									<li><a href="#team-section" class="nav-link">Team</a></li>
									<li><a href="#pricing-section" class="nav-link">Pricing</a></li>
									<li><a href="#faq-section" class="nav-link">FAQ</a></li>
									<li class="has-children">
										<a href="#">More Links</a>
										<ul class="dropdown">
											<li><a href="#">Menu One</a></li>
											<li><a href="#">Menu Two</a></li>
											<li><a href="#">Menu Three</a></li>
										</ul>
									</li>
								</ul>
							</li>

							<li><a href="#why-us-section" class="nav-link">Chứng nhận</a></li>

							<li><a href="#contact-section" class="nav-link">Liên hệ</a></li>
							<li><a href="#" class="nav-link">Tra cứu đơn hàng</a></li>
							<li><a href="#" class="nav-link" style="font-weight: bold;">Đăng nhập</a></li>
						</ul>
					</nav>

				</div>

				<div class="toggle-button d-inline-block d-lg-none"><a href="#"
				                                                       class="site-menu-toggle py-5 js-menu-toggle text-black"><span
								class="icon-menu h3"></span></a></div>

			</div>
		</div>

	</header>

	<div class="ftco-blocks-cover-1">
		<div class="ftco-cover-1 overlay"
		     style="background-image: url('https://source.unsplash.com/pSyfecRCBQA/1920x780')">
			<div class="container">
				<div class="row align-items-center">

					<div class="col-lg-9 mr-auto ml-auto text-center">
						<h1>GIẢI PHÁP GIÚP BẠN KẾT NỐI TRỰC TIẾP ĐẾN NHÀ MÁY, XƯỞNG SẢN XUẤT TRÊN TOÀN THẾ GIỚI <br>
							<span>HÃY ĐỂ LẠI SỐ ĐIỆN THOẠI ĐĂNG KÝ ĐỂ VITI EXPRESS ĐƯỢC TƯ VẤN VÀ HỖ TRỢ CHO BẠN</span>
						</h1>
						<p class="mb-5">Với đội ngũ tư vấn chuyên nghiệp, VITI EXPRESS sẽ mang tới cho bạn giải pháp mua
							hàng quốc tế tốt nhất.</p>

						<a type="button" href="#contact-section"
						   class="btn btn-danger text-white px-4" > LIÊN HỆ NGAY</a>

					</div>
				</div>
			</div>
		</div>
		<!-- END .ftco-cover-1 -->
		<div class="ftco-service-image-1 pb-5">
			<div class="container">
				<div class="owl-carousel owl-all">
					<div class="service text-center">
						<a href="#"><img src="{{ asset('images/image1.png') }}" alt="Image"
						                 class="img-fluid text-center"></a>
						<div class="px-md-3">
							<h3><a href="#">Tối ưu chi phí mua hàng</a></h3>
							<p>Hỗ trợ, hướng dẫn, tạo tài khoản để khách hàng đặt hàng bằng chính tài khoản của mình</p>
						</div>
					</div>
					<div class="service text-center">
						<a href="#"><img src="{{ asset('images/image2.jpg') }}" alt="Image"
						                 class="img-fluid text-center"></a>
						<div class="px-md-3">
							<h3><a href="#">An toàn</a></h3>
							<p>Cam kết bồi thường 100% giá trị hàng hóa khí xảy ra thất lạc, hỏng hóc do lỗi đơn vị vận
								chuyển</p>
						</div>
					</div>
					<div class="service text-center">
						<a href="#"><img src="{{ asset('images/image3.png') }}" alt="Image"
						                 class="img-fluid text-center"></a>
						<div class="px-md-3">
							<h3><a href="#">Thời gian nhanh chóng</a></h3>
							<p>Cam kết hàng hóa về đến kho Việt Nam từ 2-4 ngày ( Tình từ thời điểm hàng hóa ký nhận tại
								kho Trung Quốc)</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="site-section bg-light" id="order-section">
		<div class="container">
			<div class="row mb-5 justify-content-center">
				<div class="col-md-8 text-center">
					<div class="block-heading-1">
						<h2>BẢNG GIÁ ORDER HÀNG TRUNG QUỐC</h2>
					</div>
				</div>
			</div>
			<div class="order d-flex align-items-start justify-content-center">
				<div class="order-item">
					<div class="order-item-img">
						<img src="{{ asset('images/002-laptop.png') }}" alt="">
                    </div>
                    <p class="text-center">Giá Web</p>
                </div>
                <div class="order-connect d-lg-block d-none">
                    <img src="{{ asset('images/add.png') }}" alt="">
					</div>
					<div class="order-item">
						<div class="order-item-img">
							<img src="{{ asset('images/001-plane.png') }}" alt="">
						</div>
						<p class="text-center">Ship Trung Quốc</p>
					</div>
					<div class="order-connect d-lg-block d-none">
						<img src="{{ asset('images/add.png') }}" alt="">
					</div>
					<div class="order-item">
						<div class="order-item-img">
							<img src="{{ asset('images/003-invoices.png') }}" alt="">
						</div>
						<p class="text-center">Phí đơn hàng</p>
					</div>
					<div class="order-connect d-lg-block d-none">
						<img src="{{ asset('images/add.png') }}" alt="">
					</div>
					<div class="order-item">
						<div class="order-item-img">
							<img src="{{ asset('images/006-delivery-truck.png') }}" alt="">
						</div>
						<p class="text-center">Phí vận chuyển</p>
					</div>
					<div class="order-connect d-lg-block d-none">
						<img src="{{ asset('images/add.png') }}" alt="">
					</div>
					<div class="order-item">
						<div class="order-item-img">
							<img src="{{ asset('images/004-call-center-agent.png') }}" alt="">
						</div>
						<p class="text-center">Phí dịch vụ</p>
					</div>
					<div class="order-connect d-lg-block d-none">
						<img src="{{ asset('images/add.png') }}" alt="">
					</div>
					<div class="order-item">
						<div class="order-item-img">
							<img src="{{ asset('images/005-shopping-basket.png') }}" alt="">
						</div>
						<p class="text-center">Dịch vụ gia tăng <br>(Nếu có)</p>
					</div>
				</div>
			</div>
		</div>

		<div class="site-section bg-light" id="services-section">
			<div class="container">
				<div class="row mb-5 justify-content-center">
					<div class="col-md-7 text-center">
						<div class="block-heading-1">
							<h2>VITIEXPRESS MANG TỚI CHO KHÁCH HÀNG ĐIỀU GÌ?</h2>
							<p>Với những chính sách của mình, VITIEXPRESS luôn hướng tới lợi ích, tạo điều kiện cao nhất
								cho mỗi khách hàng.</p>
						</div>
					</div>
				</div>
				<div class="owl-carousel owl-all">
					<div class="block__35630">
						<div class="icon mb-0">
							<span class="flaticon-ferry"></span>
						</div>
						<h3 class="mb-3">MUA SẮM TIỆN LỢI</h3>
						<p>Hệ thống thông minh, báo giá tự động giúp khách hàng mua sắm hàng hóa dễ dàng. </p>
					</div>

					<div class="block__35630">
						<div class="icon mb-0">
							<span class="flaticon-airplane"></span>
						</div>
						<h3 class="mb-3">KHẢ NĂNG MUA ĐA DẠNG</h3>
						<p>Liên tục cập nhật thêm các website thương mại điện tử tại Trung Quốc, Mỹ, Anh, Nhật đáp ứng
							nhu cầu khách hàng.
						</p>
					</div>

					<div class="block__35630">
						<div class="icon mb-0">
							<span class="flaticon-box"></span>
						</div>
						<h3 class="mb-3">TRACKING</h3>
						<p>Tra cứu đơn hàng nhanh chóng dễ dàng.</p>
					</div>

					<div class="block__35630">
						<div class="icon mb-0">
							<span class="flaticon-lorry"></span>
						</div>
						<h3 class="mb-3">HỖ TRỢ ĐỔI TRẢ</h3>
						<p>Vận chuyển hàng hóa quay đầu khi có yêu cầu đổi trả
						</p>
					</div>

					<div class="block__35630">
						<div class="icon mb-0">
							<span class="flaticon-warehouse"></span>
						</div>
						<h3 class="mb-3">HỆ THỐNG ĐỐI TÁC RỘNG LỚN</h3>
						<p>Hệ thống đối tác mua hàng và liên kết vận chuyển trải dài khắp các nước Châu Á, Châu Âu, ...
							(Trung Quốc, Mỹ, Nhật, Hàn, ...)</p>
					</div>

					<div class="block__35630">
						<div class="icon mb-0">
							<span class="flaticon-add"></span>
						</div>
						<h3 class="mb-3">CHI PHÍ CẠNH TRANH</h3>
						<p>Chuyển tiền và thanh toán họ với mức tỷ giá rẻ nhất thị trường</p>
					</div>

				</div>
			</div>
		</div>
		<div class="site-section bg-light" id="about-section">
			<div class="container">
				<div class="row justify-content-center mb-4 block-img-video-1-wrap">
					<div class="col-md-12 mb-5">
						<figure class="block-img-video-1 d-none" data-aos="fade">
							<a href="https://vimeo.com/45830194" data-fancybox data-ratio="2">
								<span class="icon"><span class="icon-play"></span></span>
								<img src="{{ asset('images/cargo_delivery_big.jpg') }}" alt="Image" class="img-fluid">
							</a>
						</figure>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="row">
							<div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="300">
								<div class="block-counter-1">
									<span class="number"><span data-number="50">0</span>+</span>
									<span class="caption">Nhà cung cấp</span>
								</div>
							</div>
							<div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="50">
								<div class="block-counter-1">
									<span class="number"><span data-number="300">150</span>+</span>
									<span class="caption">Thành phố nhận đặt hàng</span>
								</div>
							</div>
							<div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="30">
								<div class="block-counter-1">
									<span class="number"><span data-number="108">80</span>+</span>
									<span class="caption">Khách hàng</span>
								</div>
							</div>
							<div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="300">
								<div class="block-counter-1">
									<span class="number"><span data-number="1500">1470</span>+</span>
									<span class="caption">Đơn hàng hoàn thành</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="site-section" id="about-section">

			<div class="container">
				<div class="row mb-5 justify-content-center">
					<div class="col-md-10 text-center">
						<div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
							<h2>VỀ CHÚNG TÔI</h2>
							<p style="margin-bottom: 5px;">VITI EXPRESS Chuyên cung cấp các dịch vụ như Order Taobao,
								1688, Tmall, Alibaba, đặt hàng qua Wechat, săn sales Zara, Hm, Bershka, Lining và vận
								chuyển hàng từ Trung Quốc và các nước khác trên Thế giới về Việt Nam với tốc độ nhanh,
								giá hợp lý, uy tín và đảm bảo.</p>
							<p style="margin-bottom: 5px;">Cam kết đền bù 100% giá trị đơn hàng nếu trong quá trình vận
								chuyển không may hàng hóa có xảy ra hỏng hóc hay thất lạc</p>
							<p style="margin-bottom: 5px;">Chúng tôi luôn luôn hướng tới là doanh nghiệp vận chuyển uy
								tín nhất, chất lượng dịch vụ tốt nhất, mang lại giá trị cao nhất thiết thực tới các
								khách hàng</p>
						</div>
					</div>
				</div>
			</div>

		</div>


		<div class="site-section bg-light  d-none" id="pricing-section">
			<div class="container">
				<div class="row mb-5 justify-content-center text-center">
					<div class="col-md-7">
						<div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
							<h2>Pricing</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								there live the blind texts. </p>
						</div>
					</div>
				</div>
				<div class="row mb-5">
					<div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="">
						<div class="pricing">
							<h3 class="text-center text-black">Basic</h3>
							<div class="price text-center mb-4 ">
								<span><span>$47</span> / year</span>
							</div>
							<ul class="list-unstyled ul-check success mb-5">

								<li>Officia quaerat eaque neque</li>
								<li>Possimus aut consequuntur incidunt</li>
								<li class="remove">Lorem ipsum dolor sit amet</li>
								<li class="remove">Consectetur adipisicing elit</li>
								<li class="remove">Dolorum esse odio quas architecto sint</li>
							</ul>
							<p class="text-center">
								<a href="#" class="btn btn-secondary btn-md">Buy Now</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="100">
						<div class="pricing">
							<h3 class="text-center text-black">Premium</h3>
							<div class="price text-center mb-4 ">
								<span><span>$200</span> / year</span>
							</div>
							<ul class="list-unstyled ul-check success mb-5">

								<li>Officia quaerat eaque neque</li>
								<li>Possimus aut consequuntur incidunt</li>
								<li>Lorem ipsum dolor sit amet</li>
								<li>Consectetur adipisicing elit</li>
								<li class="remove">Dolorum esse odio quas architecto sint</li>
							</ul>
							<p class="text-center">
								<a href="#" class="btn btn-primary btn-md text-white">Buy Now</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
						<div class="pricing">
							<h3 class="text-center text-black">Professional</h3>
							<div class="price text-center mb-4 ">
								<span><span>$750</span> / year</span>
							</div>
							<ul class="list-unstyled ul-check success mb-5">

								<li>Officia quaerat eaque neque</li>
								<li>Possimus aut consequuntur incidunt</li>
								<li>Lorem ipsum dolor sit amet</li>
								<li>Consectetur adipisicing elit</li>
								<li>Dolorum esse odio quas architecto sint</li>
							</ul>
							<p class="text-center">
								<a href="#" class="btn btn-secondary btn-md">Buy Now</a>
							</p>
						</div>
					</div>
				</div>


			</div>
		</div>


		<div class="site-section" id="faq-section">
			<div class="container">
				<div class="row mb-5">
					<div class="block-heading-1 col-12 text-center">
						<h2>CAM KẾT CỦA CHÚNG TÔI</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">

						<div class="mb-5" data-aos="fade-up" data-aos-delay="100">
							<h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>CAM
								KẾT ĐẶT HÀNG </h3>
							<p>Đền bù 100% tiền hàng nếu VitiExpress đặt sai link của quý khách. Cam kết mua hàng trong
								vòng 24h kể từ lúc đơn hàng được đặt cọc.</p>
						</div>

						<div class="mb-5" data-aos="fade-up" data-aos-delay="100">
							<h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>CAM
								KẾT BỒI THƯỜNG </h3>
							<p>Chúng tôi cam kết đền bù 100% tiền hàng nếu trong quá trình vận chuyển hàng hóa bị thất
								lạc hoặc hỏng hóc. </p>
						</div>

						<div class="mb-5" data-aos="fade-up" data-aos-delay="100">
							<h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>CAM
								KẾT ĐÚNG GIÁ</h3>
							<p>Viti Express cam kết mua đúng giá sản phẩm trên website và đúng phí nội địa trên web
								không gian dối. </p>
						</div>


					</div>
					<div class="col-lg-6">

						<div class="mb-5" data-aos="fade-up" data-aos-delay="100">
							<h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>TỶ
								GIÁ </h3>
							<p>Tỷ giá công khai minh bạch khớp với hệ thống đặt hàng. Luôn luôn ưu tiên để tỷ giá thấp
								nhất nhằm mang lại lợi ích tối đa cho khách hàng.</p>
						</div>

						<div class="mb-5" data-aos="fade-up" data-aos-delay="100">
							<h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>CAM
								KẾT HỖ TRỢ </h3>
							<p>VitiExpress luôn luôn cố gắng phục vụ 24/7 nhằm mang lại dịch vụ tốt nhất tới quý khách
								hàng.</p>
						</div>

						<div class="mb-5" data-aos="fade-up" data-aos-delay="100">
							<h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>THỜI
								GIAN VẬN CHUYỂN </h3>
							<p>VitiExpress luôn luôn cố gắng tối ưu từng công đoạn để hàng hóa của quý khách về nhanh
								nhất, an toàn nhất có thể.</p>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="block__73694 site-section border-top" id="why-us-section">
			<div class="container">
				<div class="row d-flex no-gutters align-items-stretch">

					<div class="col-12 col-lg-6 block__73422 order-lg-2"
					     style="background-image: url('{{ asset('images/cargo_sea_small.jpg') }}');"
					     data-aos="fade-left" data-aos-delay="">
					</div>


					<div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right"
					     data-aos-delay="">
						<h2 class="mb-4 text-black">VÌ SAO BẠN NÊN CHỌN DỊCH VỤ CỦA CHÚNG TÔI</h2>
						<h4 class="text-primary">CHÚNG TÔI LUÔN ĐẶT QUYỀN LỢI CỦA KHÁCH HÀNG LÊN ĐẦU</h4>
						<p>Với hệ thống đặt hàng thông minh và đội ngũ nhân viên xử lí đơn hàng chuyên nghiệp, VITI
							EXPRESS sẽ mang tới sự trải nghiệm mua sắm hàng nước ngoài tốt nhất tới khách hàng. Hơn nữa,
							chi phí cho đặt hàng luôn ở mức cạnh tranh nhất tại Việt Nam, giúp khách hàng tiết kiệm được
							số tiền của mình.</p>

						<ul class="ul-check primary list-unstyled mt-5">
							<li>Hệ thống tạo đơn hàng thông minh</li>
							<li>Đặt hàng nhanh chóng</li>
							<li>Đội ngũ nhân viên tư vấn nhiệt tình</li>
							<li>Tiết kiệm chi phí đặt hàng</li>
							<li>Hàng hóa được vận chuyển đúng thời hạn</li>
						</ul>

					</div>

				</div>
			</div>
		</div>


		<div class="site-section bg-light block-13 d-none" id="testimonials-section" data-aos="fade">
			<div class="container">

				<div class="text-center mb-5">
					<div class="block-heading-1">
						<h2>Nhận xét của khách hàng</h2>
					</div>
				</div>

				<div class="owl-carousel nonloop-block-13">
					<div>
						<div class="block-testimony-1 text-center">

							<blockquote class="mb-4">
								<p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of bad
									Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t
									listen. She packed her seven versalia, put her initial into the belt
									and made herself on the way.&rdquo;</p>
							</blockquote>

							<figure>
								<img src="{{ asset('images/person_4.jpg') }}" alt="Image"
								     class="img-fluid rounded-circle mx-auto">
							</figure>
							<h3 class="font-size-20 text-black">Ricky Fisher</h3>
						</div>
					</div>

					<div>
						<div class="block-testimony-1 text-center">
							<blockquote class="mb-4">
								<p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
									almost unorthographic life One day however a small line of blind text by the name of
									Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
							</blockquote>
							<figure>
								<img src="{{ asset('images/person_2.jpg') }}" alt="Image"
								     class="img-fluid rounded-circle mx-auto">
							</figure>
							<h3 class="font-size-20 mb-4 text-black">Ken Davis</h3>

						</div>
					</div>

					<div>
						<div class="block-testimony-1 text-center">


							<blockquote class="mb-4">
								<p>&ldquo;A small river named Duden flows by their place and supplies it with the
									necessary regelialia. It is a paradisematic country, in which roasted parts of
									sentences fly into your mouth.&rdquo;</p>
							</blockquote>

							<figure>
								<img src="{{ asset('images/person_1.jpg') }}" alt="Image"
								     class="img-fluid rounded-circle mx-auto">
							</figure>
							<h3 class="font-size-20 text-black">Mellisa Griffin</h3>


						</div>
					</div>

					<div>
						<div class="block-testimony-1 text-center">
							<blockquote class="mb-4">
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
									Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
									at the coast of the Semantics, a large language ocean.&rdquo;</p>
							</blockquote>

							<figure>
								<img src="{{ asset('images/person_3.jpg') }}" alt="Image"
								     class="img-fluid rounded-circle mx-auto">
							</figure>
							<h3 class="font-size-20 mb-4 text-black">Robert Steward</h3>

						</div>
					</div>


				</div>

			</div>
		</div>

		<div class="site-section py-5 d-none" id="blog-section">
			<div class="container">
				<div class="row justify-content-center text-center mb-5">
					<div class="col-lg-4 mb-5 mb-lg-0">
						<div class="block-heading-1" data-aos="fade-right" data-aos-delay="">
							<h2>Articles</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="mb-5 d-flex blog-entry" data-aos="fade-right" data-aos-delay="">
							<a href="#" class="blog-thumbnail"><img src="{{ asset('images/cargo_sea_small.jpg') }}"
							                                        alt="Image" class="img-fluid"></a>
							<div class="blog-excerpt">
								<span class="d-block text-muted">Apr 19, 2019</span>
								<h2 class="h4  mb-3"><a href="single.html">Knowing the Difference Is Key to Effective
										Logistics</a></h2>

								<p>Far far away, behind the word mountains, far from the countries Vokalia and
									Consonantia, there live the blind texts</p>
								<p><a href="single.html" class="text-primary">Read More</a></p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mb-5 d-flex blog-entry" data-aos="fade-right" data-aos-delay="">
							<a href="#" class="blog-thumbnail"><img src="{{ asset('images/cargo_air_small.jpg') }}"
							                                        alt="Image" class="img-fluid"></a>
							<div class="blog-excerpt">
								<span class="d-block text-muted">Apr 19, 2019</span>
								<h2 class="h4  mb-3"><a href="single.html">Knowing the Difference Is Key to Effective
										Logistics</a></h2>

								<p>Far far away, behind the word mountains, far from the countries Vokalia and
									Consonantia, there live the blind texts</p>
								<p><a href="single.html" class="text-primary">Read More</a></p>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>


	<div class="site-section bg-light" id="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
					<div class="block-heading-1">
						<span>Có câu hỏi?</span>
						<h2>Liên hệ ngay</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
					<form id="contact-form" >
						<div class="form-group row">
							<div class="col-md-6 mb-4 mb-lg-0">
								<input type="text" class="form-control" name="name" placeholder="Họ tên">
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" name="phone" placeholder="Số điện thoại">
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-12">
								<input type="text" class="form-control" name="email" placeholder="Địa chỉ email">
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-12">
								<textarea class="form-control" name="note" placeholder="Nội dung tin nhắn." cols="30"
								          rows="10"></textarea>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-12 mr-auto">
								<button class="btn btn-block btn-primary text-white py-3 px-5" id="send-contact" type="button" value="add">
									Gửi tin nhắn
								</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
					<div class="bg-white p-3 p-md-5">
						<h3 class="text-black mb-4">Thông tin liên hệ</h3>
						<ul class="list-unstyled footer-link">
							<li class="d-block mb-3">
								<span class="d-block text-black">Địa chỉ:</span>
								<span>Biệt thự TT4.11 KĐT Cổ Nhuế, Phường Cổ Nhuế 1, Quận Bắc Từ Liêm Hà Nội.</span>
							</li>
							<li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>0704.88.1688/ 0868.40.1688</span>
							</li>
							<li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>hotro.vitiexpress@gmail.com</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-9">
							<img class="img-fluid" src="{{ asset('images/image4.jpg') }}" alt="">
						</div>
						<div class="col-md-3 ml-auto">
							<h2 class="footer-heading mb-4">Liên kết</h2>
							<ul class="list-unstyled">
								<li><a href="#services-section">Dịch vụ</a></li>
								<li><a href="#about-section">Về chúng tôi</a></li>
								<li><a href="#why-us-section">Hướng dẫn</a></li>
								<li><a href="#">Điều khoản</a></li>
								<li><a href="#contact-section">Liên hệ</a></li>
							</ul>
						</div>

					</div>
				</div>
				<div class="col-md-3 ml-auto">

					<div class="mb-5">
						<h2 class="footer-heading mb-4">Đăng ký nhận tin</h2>
						<form action="#" method="post" class="footer-suscribe-form">
							<div class="input-group mb-3">
								<input type="text" class="form-control border-secondary text-white bg-transparent"
								       placeholder="Email" aria-label="Email" aria-describedby="button-addon2">
								<div class="input-group-append">
									<button class="btn btn-primary text-white" type="button" id="button-addon2">Đăng
										ký
									</button>
								</div>
							</div>
							<h2 class="footer-heading mb-4">Mạng xã hội</h2>
							<a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>

						</form>
					</div>

				</div>
			</div>
			<div class="row pt-5 mt-5 text-center">
				<div class="col-md-12">
					<div class="border-top pt-5">
						<p class="copyright">

							Copyright &copy;<script>document.write(new Date().getFullYear());</script>
							All rights reserved | VITI EXPRESS

						</p>
					</div>
				</div>

			</div>
		</div>
	</footer>
	<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
	<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('js/aos.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script>
        $(document).ready(function() {
            $("#send-contact").click(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: '/send-contact',
                    data: {
                        name: $("#contact-form input[name=name]").val(),
                        phone: $("#contact-form input[name=phone]").val(),
                        email: $("#contact-form input[name=email]").val(),
                        note: $("#contact-form textarea[name=note]").val(),
                    },
                    dataType: 'json',
                    success: function (data) {
                        $('#contact-form').trigger("reset");
                        $("#contact-form .close").click();
                        toastr.success('Chúng tôi đã nhận yêu cầu hỗ trợ của bạn!', 'Thành công!');
                    },
                    error: function (data) {
                        let errors = $.parseJSON(data.responseText);
                        console.log(errors);
                        $.each(errors.errors, function (key, value) {
                            toastr.error(value, 'Dữ liệu không hợp lệ!');
                        });
                    }
                });
            });
        });
	</script>
</body>
</html>
