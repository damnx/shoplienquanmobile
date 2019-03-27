<div class="gallery">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">New<span> Nick Liên Quân Mobile</span></h3>
				<p>Nick Liên Quân Mobile ngon giá rẻ </p>
			</div>
			<div class="gallery-info">
			<?php 
				foreach($newProducts as $key=>$newProduct){
					?>
					<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay=".5s">
					<a href="products.html"><img src="<?=$newProduct['thumb']?>" class="img-responsive" alt="" /></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html"><?=$newProduct['name']?></a></h5>
						<div class="ofr">
							<?php 
							if($newProduct['fake_price']){
								?>
									<p class="pric1"><del><?=number_format($newProduct['price'])?> đ</del></p>
									<p><span class="item_price"><?=number_format($newProduct['fake_price'])?> đ</span></p>
								<?php
							}else{
								?>
									<p><span class="item_price"><?=number_format($newProduct['price'])?> đ</span></p>
								<?php
							}
							?>
							
						</div>
						<div class="ofr ofr-pp ">
							<h4 class="ofr-title"><?=$newProduct['rank']?></h4>
							<p class="">Trướng: <?=$newProduct['tuong']?></p>
							<p><span class="">Vàng: <?=$newProduct['vang']?></span></p>
							<p><span class="">Trang phục: <?=$newProduct['trang_phuc']?></span></p>
							<p><span class="">Điểm ngọc: <?=$newProduct['ngoc']?></span></p>
						</div>
						
						<div class='row'>
							<div class='col-md-6' style='padding: 5px 15px;'>
								<button type="button" class="btn btn-secondary">Xem nick</button>
							</div>
							<div class='col-md-6' style='padding: 5px 15px;'>
								<button type="button" class="btn btn-danger">Mua ngay</button>
							</div>
						</div>
					</div>
				</div>
					<?php
				}
			?>
				
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
