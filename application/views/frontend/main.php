<!--banner-->
<div class="banner">
		<div class="container">
			<div class="banner-text">
				<!-- <div class="col-sm-5 banner-left wow fadeInLeft animated" data-wow-delay=".5s">
					<h2>On Entire Fashion range</h2>
					<h3>Coming Soon </h3>
					<h4>Our New Designs</h4>
					<div class="count main-row">
						<ul id="example">
							<li><span class="hours">00</span>
								<p class="hours_text">Hours</p>
							</li>
							<li><span class="minutes">00</span>
								<p class="minutes_text">Minutes</p>
							</li>
							<li><span class="seconds">00</span>
								<p class="seconds_text">Seconds</p>
							</li>
						</ul>
						<div class="clearfix"> </div>
						<script type="text/javascript" src="js/jquery.countdown.min.js"></script>
						<script type="text/javascript">
							$('#example').countdown({
								date: '12/24/2020 15:59:59',
								offset: -8,
								day: 'Day',
								days: 'Days'
							}, function () {
								alert('Done!');
							});
						</script>
					</div>
				</div> -->
				<div class="col-sm-7 banner-right wow fadeInRight animated" data-wow-delay=".5s">
					<!-- <section class="slider grid">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<h4>-30%</h4>
									<img src="images/b1.png" alt="">
								</li>
								<li>
									<h4>-25%</h4>
									<img src="images/b2.png" alt="">
								</li>
								<li>
									<h4>-32%</h4>
									<img src="images/b3.png" alt="">
								</li>
							</ul>
						</div>
					</section> -->
					<!--FlexSlider-->
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
						$(window).load(function () {
							$('.flexslider').flexslider({
								animation: "pagination",
								start: function (slider) {
									$('body').removeClass('loading');
								}
							});
						});
					</script>
					<!--End-slider-script-->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//banner-->
	<?=$this->load->widget('host_nick_lien_quan_mobile');?>
	<!--gallery-->
	<div class="gallery">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">New<span> Nick Liên Quân Mobile</span></h3>
				<p>Nick Liên Quân Mobile ngon giá rẻ </p>
			</div>
			<div class="gallery-info">
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay=".5s">
					<a href="products.html"><img src="images/g1.jpg" class="img-responsive" alt="" /></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Nick #252</a></h5>
						<div class="ofr">
							<p class="pric1"><del>$2000.00</del></p>
							<p><span class="item_price">$500.00</span></p>
						</div>
						<div class="ofr ofr-pp ">
							<h4 class="ofr-title">Bạch Kim</h4>
							<p class="">Trướng: 27</p>
							<p><span class="">Vàng: 3000</span></p>
							<p><span class="">Trang phục: 3000</span></p>
							<p><span class="">Điểm ngọc: 3000</span></p>
						</div>
						<div>
							<div style="width: 50%;float: left; text-align: left;padding: 0px 15px;">
								<button type="button" class="btn btn-secondary">Xem nick</button>
							</div>
							<div style="width: 50%;float: left; text-align: right;padding: 0px 15px;">
								<button type="button" class="btn btn-danger">Mua ngay</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay=".7s">
					<a href="products.html"><img src="images/g2.jpg" class="img-responsive" alt="" /></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Nick #252</a></h5>
						<div class="ofr">
							<p class="pric1"><del>$2000.00</del></p>
							<p><span class="item_price">$500.00</span></p>
						</div>
						<div class="ofr ofr-pp ">
							<h4 class="ofr-title">Bạch Kim</h4>
							<p class="">Trướng: 27</p>
							<p><span class="">Vàng: 3000</span></p>
							<p><span class="">Trang phục: 3000</span></p>
							<p><span class="">Điểm ngọc: 3000</span></p>
						</div>
						<div>
							<div style="width: 50%;float: left; text-align: left;padding: 0px 15px;">
								<button type="button" class="btn btn-secondary">Xem nick</button>
							</div>
							<div style="width: 50%;float: left; text-align: right;padding: 0px 15px;">
								<button type="button" class="btn btn-danger">Mua ngay</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay=".9s">
					<a href="products.html"><img src="images/g3.jpg" class="img-responsive" alt="" /></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Nick #252</a></h5>
						<div class="ofr">
							<p class="pric1"><del>$2000.00</del></p>
							<p><span class="item_price">$500.00</span></p>
						</div>
						<div class="ofr ofr-pp ">
							<h4 class="ofr-title">Bạch Kim</h4>
							<p class="">Trướng: 27</p>
							<p><span class="">Vàng: 3000</span></p>
							<p><span class="">Trang phục: 3000</span></p>
							<p><span class="">Điểm ngọc: 3000</span></p>
						</div>
						<div>
							<div style="width: 50%;float: left; text-align: left;padding: 0px 15px;">
								<button type="button" class="btn btn-secondary">Xem nick</button>
							</div>
							<div style="width: 50%;float: left; text-align: right;padding: 0px 15px;">
								<button type="button" class="btn btn-danger">Mua ngay</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay="1.1s">
					<a href="products.html"><img src="images/g4.jpg" class="img-responsive" alt="" /></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Nick #252</a></h5>
						<div class="ofr">
							<p class="pric1"><del>$2000.00</del></p>
							<p><span class="item_price">$500.00</span></p>
						</div>
						<div class="ofr ofr-pp ">
							<h4 class="ofr-title">Bạch Kim</h4>
							<p class="">Trướng: 27</p>
							<p><span class="">Vàng: 3000</span></p>
							<p><span class="">Trang phục: 3000</span></p>
							<p><span class="">Điểm ngọc: 3000</span></p>
						</div>
						<div>
							<div style="width: 50%;float: left; text-align: left;padding: 0px 15px;">
								<button type="button" class="btn btn-secondary">Xem nick</button>
							</div>
							<div style="width: 50%;float: left; text-align: right;padding: 0px 15px;">
								<button type="button" class="btn btn-danger">Mua ngay</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay=".5s">
					<a href="products.html"><img src="images/g5.jpg" class="img-responsive" alt="" /></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Nick #252</a></h5>
						<div class="ofr">
							<p class="pric1"><del>$2000.00</del></p>
							<p><span class="item_price">$500.00</span></p>
						</div>
						<div class="ofr ofr-pp ">
							<h4 class="ofr-title">Bạch Kim</h4>
							<p class="">Trướng: 27</p>
							<p><span class="">Vàng: 3000</span></p>
							<p><span class="">Trang phục: 3000</span></p>
							<p><span class="">Điểm ngọc: 3000</span></p>
						</div>
						<div>
							<div style="width: 50%;float: left; text-align: left;padding: 0px 15px;">
								<button type="button" class="btn btn-secondary">Xem nick</button>
							</div>
							<div style="width: 50%;float: left; text-align: right;padding: 0px 15px;">
								<button type="button" class="btn btn-danger">Mua ngay</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay=".7s">
					<a href="products.html"><img src="images/g6.jpg" class="img-responsive" alt="" /></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Nick #252</a></h5>
						<div class="ofr">
							<p class="pric1"><del>$2000.00</del></p>
							<p><span class="item_price">$500.00</span></p>
						</div>
						<div class="ofr ofr-pp ">
							<h4 class="ofr-title">Bạch Kim</h4>
							<p class="">Trướng: 27</p>
							<p><span class="">Vàng: 3000</span></p>
							<p><span class="">Trang phục: 3000</span></p>
							<p><span class="">Điểm ngọc: 3000</span></p>
						</div>
						<div>
							<div style="width: 50%;float: left; text-align: left;padding: 0px 15px;">
								<button type="button" class="btn btn-secondary">Xem nick</button>
							</div>
							<div style="width: 50%;float: left; text-align: right;padding: 0px 15px;">
								<button type="button" class="btn btn-danger">Mua ngay</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay=".9s">
					<a href="products.html"><img src="images/g7.jpg" class="img-responsive" alt="" /></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Nick #252</a></h5>
						<div class="ofr">
							<p class="pric1"><del>$2000.00</del></p>
							<p><span class="item_price">$500.00</span></p>
						</div>
						<div class="ofr ofr-pp ">
							<h4 class="ofr-title">Bạch Kim</h4>
							<p class="">Trướng: 27</p>
							<p><span class="">Vàng: 3000</span></p>
							<p><span class="">Trang phục: 3000</span></p>
							<p><span class="">Điểm ngọc: 3000</span></p>
						</div>
						<div>
							<div style="width: 50%;float: left; text-align: left;padding: 0px 15px;">
								<button type="button" class="btn btn-secondary">Xem nick</button>
							</div>
							<div style="width: 50%;float: left; text-align: right;padding: 0px 15px;">
								<button type="button" class="btn btn-danger">Mua ngay</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay="1.1s">
					<a href="products.html"><img src="images/g8.jpg" class="img-responsive" alt="" /></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Nick #252</a></h5>
						<div class="ofr">
							<p class="pric1"><del>$2000.00</del></p>
							<p><span class="item_price">$500.00</span></p>
						</div>
						<div class="ofr ofr-pp ">
							<h4 class="ofr-title">Bạch Kim</h4>
							<p class="">Trướng: 27</p>
							<p><span class="">Vàng: 3000</span></p>
							<p><span class="">Trang phục: 3000</span></p>
							<p><span class="">Điểm ngọc: 3000</span></p>
						</div>
						<div>
							<div style="width: 50%;float: left; text-align: left;padding: 0px 15px;">
								<button type="button" class="btn btn-secondary">Xem nick</button>
							</div>
							<div style="width: 50%;float: left; text-align: right;padding: 0px 15px;">
								<button type="button" class="btn btn-danger">Mua ngay</button>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//ramdom nick-->
	<!--trend-->
	<div class="gallery">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">Ramdom<span> Nick Liên Quân Mobile</span></h3>
				<p>Thử vân may với nick Liên Quân ramdom VIP</p>
			</div>
			<div class="gallery-info">
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay=".5s">
					<a href="products.html"><img src="images/g1.jpg" class="img-responsive" alt="" /></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Nick #252</a></h5>
						<div class="ofr">
							<p class="pric1"><del>$2000.00</del></p>
							<p><span class="item_price">$500.00</span></p>
						</div>
						<div class="ofr ofr-pp ">
							<h4 class="ofr-title">Bạch Kim</h4>
							<p class="">Trướng: 27</p>
							<p><span class="">Vàng: 3000</span></p>
							<p><span class="">Trang phục: 3000</span></p>
							<p><span class="">Điểm ngọc: 3000</span></p>
						</div>
						<div>
							<div style="width: 50%;float: left; text-align: left;padding: 0px 15px;">
								<button type="button" class="btn btn-secondary">Xem nick</button>
							</div>
							<div style="width: 50%;float: left; text-align: right;padding: 0px 15px;">
								<button type="button" class="btn btn-danger">Mua ngay</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay=".7s">
					<a href="products.html"><img src="images/g2.jpg" class="img-responsive" alt="" /></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Nick #252</a></h5>
						<div class="ofr">
							<p class="pric1"><del>$2000.00</del></p>
							<p><span class="item_price">$500.00</span></p>
						</div>
						<div class="ofr ofr-pp ">
							<h4 class="ofr-title">Bạch Kim</h4>
							<p class="">Trướng: 27</p>
							<p><span class="">Vàng: 3000</span></p>
							<p><span class="">Trang phục: 3000</span></p>
							<p><span class="">Điểm ngọc: 3000</span></p>
						</div>
						<div>
							<div style="width: 50%;float: left; text-align: left;padding: 0px 15px;">
								<button type="button" class="btn btn-secondary">Xem nick</button>
							</div>
							<div style="width: 50%;float: left; text-align: right;padding: 0px 15px;">
								<button type="button" class="btn btn-danger">Mua ngay</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay=".9s">
					<a href="products.html"><img src="images/g3.jpg" class="img-responsive" alt="" /></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Nick #252</a></h5>
						<div class="ofr">
							<p class="pric1"><del>$2000.00</del></p>
							<p><span class="item_price">$500.00</span></p>
						</div>
						<div class="ofr ofr-pp ">
							<h4 class="ofr-title">Bạch Kim</h4>
							<p class="">Trướng: 27</p>
							<p><span class="">Vàng: 3000</span></p>
							<p><span class="">Trang phục: 3000</span></p>
							<p><span class="">Điểm ngọc: 3000</span></p>
						</div>
						<div>
							<div style="width: 50%;float: left; text-align: left;padding: 0px 15px;">
								<button type="button" class="btn btn-secondary">Xem nick</button>
							</div>
							<div style="width: 50%;float: left; text-align: right;padding: 0px 15px;">
								<button type="button" class="btn btn-danger">Mua ngay</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay="1.1s">
					<a href="products.html"><img src="images/g4.jpg" class="img-responsive" alt="" /></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Nick #252</a></h5>
						<div class="ofr">
							<p class="pric1"><del>$2000.00</del></p>
							<p><span class="item_price">$500.00</span></p>
						</div>
						<div class="ofr ofr-pp ">
							<h4 class="ofr-title">Bạch Kim</h4>
							<p class="">Trướng: 27</p>
							<p><span class="">Vàng: 3000</span></p>
							<p><span class="">Trang phục: 3000</span></p>
							<p><span class="">Điểm ngọc: 3000</span></p>
						</div>
						<div>
							<div style="width: 50%;float: left; text-align: left;padding: 0px 15px;">
								<button type="button" class="btn btn-secondary">Xem nick</button>
							</div>
							<div style="width: 50%;float: left; text-align: right;padding: 0px 15px;">
								<button type="button" class="btn btn-danger">Mua ngay</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay=".5s">
					<a href="products.html"><img src="images/g5.jpg" class="img-responsive" alt="" /></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Nick #252</a></h5>
						<div class="ofr">
							<p class="pric1"><del>$2000.00</del></p>
							<p><span class="item_price">$500.00</span></p>
						</div>
						<div class="ofr ofr-pp ">
							<h4 class="ofr-title">Bạch Kim</h4>
							<p class="">Trướng: 27</p>
							<p><span class="">Vàng: 3000</span></p>
							<p><span class="">Trang phục: 3000</span></p>
							<p><span class="">Điểm ngọc: 3000</span></p>
						</div>
						<div>
							<div style="width: 50%;float: left; text-align: left;padding: 0px 15px;">
								<button type="button" class="btn btn-secondary">Xem nick</button>
							</div>
							<div style="width: 50%;float: left; text-align: right;padding: 0px 15px;">
								<button type="button" class="btn btn-danger">Mua ngay</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay=".7s">
					<a href="products.html"><img src="images/g6.jpg" class="img-responsive" alt="" /></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Nick #252</a></h5>
						<div class="ofr">
							<p class="pric1"><del>$2000.00</del></p>
							<p><span class="item_price">$500.00</span></p>
						</div>
						<div class="ofr ofr-pp ">
							<h4 class="ofr-title">Bạch Kim</h4>
							<p class="">Trướng: 27</p>
							<p><span class="">Vàng: 3000</span></p>
							<p><span class="">Trang phục: 3000</span></p>
							<p><span class="">Điểm ngọc: 3000</span></p>
						</div>
						<div>
							<div style="width: 50%;float: left; text-align: left;padding: 0px 15px;">
								<button type="button" class="btn btn-secondary">Xem nick</button>
							</div>
							<div style="width: 50%;float: left; text-align: right;padding: 0px 15px;">
								<button type="button" class="btn btn-danger">Mua ngay</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay=".9s">
					<a href="products.html"><img src="images/g7.jpg" class="img-responsive" alt="" /></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Nick #252</a></h5>
						<div class="ofr">
							<p class="pric1"><del>$2000.00</del></p>
							<p><span class="item_price">$500.00</span></p>
						</div>
						<div class="ofr ofr-pp ">
							<h4 class="ofr-title">Bạch Kim</h4>
							<p class="">Trướng: 27</p>
							<p><span class="">Vàng: 3000</span></p>
							<p><span class="">Trang phục: 3000</span></p>
							<p><span class="">Điểm ngọc: 3000</span></p>
						</div>
						<div>
							<div style="width: 50%;float: left; text-align: left;padding: 0px 15px;">
								<button type="button" class="btn btn-secondary">Xem nick</button>
							</div>
							<div style="width: 50%;float: left; text-align: right;padding: 0px 15px;">
								<button type="button" class="btn btn-danger">Mua ngay</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay="1.1s">
					<a href="products.html"><img src="images/g8.jpg" class="img-responsive" alt="" /></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Nick #252</a></h5>
						<div class="ofr">
							<p class="pric1"><del>$2000.00</del></p>
							<p><span class="item_price">$500.00</span></p>
						</div>
						<div class="ofr ofr-pp ">
							<h4 class="ofr-title">Bạch Kim</h4>
							<p class="">Trướng: 27</p>
							<p><span class="">Vàng: 3000</span></p>
							<p><span class="">Trang phục: 3000</span></p>
							<p><span class="">Điểm ngọc: 3000</span></p>
						</div>
						<div>
							<div style="width: 50%;float: left; text-align: left;padding: 0px 15px;">
								<button type="button" class="btn btn-secondary">Xem nick</button>
							</div>
							<div style="width: 50%;float: left; text-align: right;padding: 0px 15px;">
								<button type="button" class="btn btn-danger">Mua ngay</button>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//trend-->