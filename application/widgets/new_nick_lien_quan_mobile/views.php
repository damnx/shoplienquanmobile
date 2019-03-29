<?php 
$array =array('dong-i'=>'Đồng I',
'dong-ii'=>'Đồng II',
'dong-iii'=>'Đồng III',
'dong-iv'=>'Đồng IV',
'dong-v'=>'Đồng V',
'bac-i'=>'Bạc I',
'bac-ii'=>'Bạc II',
'bac-iii'=>'Bạc III',
'bac-iv'=>'Bạc IV',
'bac-v'=>'Bạc V',
'vang-i'=>'Vàng I',
'vang-ii'=>'Vàng II',
'vang-iii'=>'Vàng III',
'vang-iv'=>'Vàng IV',
'vang-V'=>'Vàng V',
'bac-kim-i'=>'Bạch Kim I',
'bac-kim-ii'=>'Bạch Kim II',
'bac-kim-iii'=>'Bạch Kim III',
'bac-kim-iv'=>'Bạch Kim IV',
'bac-kim-v'=>'Bạch Kim V',
'kim-cuong-i'=>'Kim cương I',
'kim-cuong-ii'=>'Kim cương II',
'kim-cuong-iii'=>'Kim cương III',
'kim-cuong-iv'=>'Kim cương IV',
'kim-cuong-v'=>'Kim cương V',
'cao-thu'=>'Cao thủ',
'thach-dau'=>'Thách đấu',);
?>
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
					<a href="/sp/<?=$newProduct['alias']?>.html"><img src="<?=$newProduct['thumb']?>" class="img-responsive" alt="" /></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="/sp/<?=$newProduct['alias']?>.html"><?=$newProduct['name']?></a></h5>
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
							<h4 class="ofr-title"><?=$array[$newProduct['rank']]?></h4>
							<p class="">Trướng: <?=$newProduct['tuong']?></p>
							<p><span class="">Vàng: <?=$newProduct['vang']?></span></p>
							<p><span class="">Trang phục: <?=$newProduct['trang_phuc']?></span></p>
							<p><span class="">Điểm ngọc: <?=$newProduct['ngoc']?></span></p>
						</div>
						
						<div class='row'>
							<div class='col-md-6' style='padding: 5px 15px;'>
								<a href="/sp/<?=$newProduct['alias']?>.html" class="btn btn-secondary">Xem nick</a>
							</div>
							<div class='col-md-6' style='padding: 5px 15px;'>
								<button  onclick="muaNick(<?=$newProduct['id']?>)" class="btn btn-danger">Mua ngay</button>
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
