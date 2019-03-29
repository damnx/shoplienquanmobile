<!--new-->
<?php
$array = array('dong-i' => 'Đồng I',
    'dong-ii' => 'Đồng II',
    'dong-iii' => 'Đồng III',
    'dong-iv' => 'Đồng IV',
    'dong-v' => 'Đồng V',
    'bac-i' => 'Bạc I',
    'bac-ii' => 'Bạc II',
    'bac-iii' => 'Bạc III',
    'bac-iv' => 'Bạc IV',
    'bac-v' => 'Bạc V',
    'vang-i' => 'Vàng I',
    'vang-ii' => 'Vàng II',
    'vang-iii' => 'Vàng III',
    'vang-iv' => 'Vàng IV',
    'vang-V' => 'Vàng V',
    'bac-kim-i' => 'Bạch Kim I',
    'bac-kim-ii' => 'Bạch Kim II',
    'bac-kim-iii' => 'Bạch Kim III',
    'bac-kim-iv' => 'Bạch Kim IV',
    'bac-kim-v' => 'Bạch Kim V',
    'kim-cuong-i' => 'Kim cương I',
    'kim-cuong-ii' => 'Kim cương II',
    'kim-cuong-iii' => 'Kim cương III',
    'kim-cuong-iv' => 'Kim cương IV',
    'kim-cuong-v' => 'Kim cương V',
    'cao-thu' => 'Cao thủ',
    'thach-dau' => 'Thách đấu');
?>
<div class="new">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">Host <span>Nick Liên Quân Mobile</span></h3>
				<p>Nick Liên Quân Mobile Host nhất hiện nay</p>
			</div>
			<div class="new-info">
                <?php
foreach ($postFeatureS as $key => $postFeature) {
    ?>
                <div id ='id-<?=$postFeature['id']?>' class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay=".4s">
					<div class="new-top">
						<a href="/sp/<?=$postFeature['alias']?>.html"><img src="<?=$postFeature['thumb']?>" class="img-responsive" alt="" /></a>
						<div class="new-text">
							<form  method="post" action="mua-nick.html">
								<ul>
									<li>
										<a href="javascript:;"onclick="muaNick(<?=$postFeature['id']?>)" class='btn-submit-mua-ngay-nick-host'>Mua ngay</a>
									</li>
									<li><a href="/sp/<?=$postFeature['alias']?>.html">Xem chi tiết</a></li>
								</ul>
							</form>
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
						<h5><a class="name" href="/sp/<?=$postFeature['alias']?>.html"><?=$postFeature['name']?></a></h5>
						<div class="ofr">
						<?php
if ($postFeature['fake_price']) {
        ?>
									<p class="pric1"><del><?=number_format($postFeature['price'])?> đ</del></p>
									<p><span class="item_price"><?=number_format($postFeature['fake_price'])?> đ</span></p>
								<?php
} else {
        ?>
									<p><span class="item_price"><?=number_format($postFeature['price'])?> đ</span></p>
								<?php
}
    ?>
						</div>
						<div class="ofr ofr-p">
							<h4 class="ofr-title"><?=$array[$postFeature['rank']]?></h4>
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


