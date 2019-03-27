<!--new-->

<div class="new">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">Host <span>Nick Liên Quân Mobile</span></h3>
				<p>Nick Liên Quân Mobile Host nhất hiện nay</p>
			</div>
			<div class="new-info">
                <?php 
                foreach($postFeatureS as $key=>$postFeature){
                    ?>
                <div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay=".4s">
					<div class="new-top">
						<a href="single.html"><img src="<?=$postFeature['thumb']?>" class="img-responsive" alt="" /></a>
						<div class="new-text">
							<ul>
								<li><a class="item_add" href=""> Mua Ngay</a></li>
								<li><a href="single.html">Xem chi tiết</a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">

						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
						</div>
						<h5><a class="name" href="single.html"><?=$postFeature['name']?></a></h5>
						<div class="ofr">
						<?php 
							if($postFeature['fake_price']){
								?>
									<p class="pric1"><del><?=number_format($postFeature['price'])?> đ</del></p>
									<p><span class="item_price"><?=number_format($postFeature['fake_price'])?> đ</span></p>
								<?php
							}else{
								?>
									<p><span class="item_price"><?=number_format($postFeature['price'])?> đ</span></p>
								<?php
							}
							?>
						</div>
						<div class="ofr ofr-p">
							<h4 class="ofr-title"><?=$postFeature['rank']?></h4>
							<p class="">Trướng: <?=$postFeature['tuong']?></p>
							<p><span class="">Vàng: <?=$postFeature['vang']?></span></p>
							<p><span class="">Trang phục: <?=$postFeature['trang_phuc']?></span></p>
							<p><span class="">Điểm ngọc: <?=$postFeature['ngoc']?></span></p>
						</div>
					</div>
				</div>
                
                    <?php
                }
             
                ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//new-->
