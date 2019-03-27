<div class="gallery">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">Ramdom<span> Nick Liên Quân Mobile</span></h3>
				<p>Thử vân may với nick Liên Quân ramdom VIP</p>
			</div>
			<div class="gallery-info">
				<?php 
				foreach($ramdomProducts as $key=>$ramdomProduct){
					?>
							<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay=".5s">
								<a href="products.html"><img style='width: 50%;' src="/statics/frontend/images/qua-tang.gif" class="img-responsive" alt="" /></a>
								<div class="gallery-text simpleCart_shelfItem">
									<h5><a class="name" href="single.html"><?=$ramdomProduct['name']?></a></h5>
									<div class="ofr">
										<p><span class="item_price"><?=number_format($ramdomProduct['price'])?> đ</span></p>
									</div>
									<div class="ofr ofr-pp ofr-pp-1 ">
										<h4 class="ofr-title">Chắc chắn vào được</h4>
										<?=$ramdomProduct['describe']?>
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
	