	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-info">
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h4 class="footer-logo"><a href="index.html">Liên Quân Mobile <b>Shoppe</b> <span class="tag">Mọi thứ Liên Quân
								Mobile
							</span> </a></h4>
					<p>© 2019 Liên Quân Mobile Shoppe . All rights reserved | Design by <a href="https://www.facebook.com/damnx.dev"
						 target="_blank">Đạm Nguyễn</a></p>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".7s">
					<!-- <h3>Popular</h3>
					<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="products.html">new</a></li>
						<li><a href="contact.html">Contact Us</a></li>
						<li><a href="faq.html">FAQ</a></li>
						<li><a href="checkout.html">Wishlist</a></li>
					</ul> -->
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".9s">
					<h3>Facebook</h3>
					<p>Fanpage Facebook <br> Thông tin mới nhất trên Facebook </p>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

		<script type="text/javascript">
			function muaNick(id) {
			if (id)
				{
					$.post("<?=URL?>/mua-nick.html", {id:id},
							function(data)
							{
								var data = jQuery.parseJSON(data);
								if(data.status =='1'){
									$.notify(data.mess);
								}else{
									$(location).attr('href', '/tai-khoan.html')
									$.notify(data.mess);
								}
							});

				}
				}

		</script>
	
	<!--//footer-->
	<!--search jQuery-->
	<script src="<?=CDN?>/frontend/js/main.js"></script>
	<!--//search jQuery-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function () {

			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<!--//smooth-scrolling-of-move-up-->
	<!--Bootstrap core JavaScript
    ================================================== -->
	<!--Placed at the end of the document so the pages load faster -->
	<script src="<?=CDN?>/frontend/js/bootstrap.js"></script>

	

</body>

</html>