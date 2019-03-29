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
<!--breadcrumbs-->
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Danh sách nick Liên Quân MoBile</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
<div class="products">
		<div class="container">
			<div class="col-md-9 product-model-sec">
				<?php
foreach ($products as $key => $products) {
    ?>
							<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
								<div class="new-top">
									<a href="sp/<?=$products['alias']?>.html"><img src="<?=$products['thumb']?>" class="img-responsive" alt=""/></a>
									<div class="new-text">
										<ul>
											<li><a href="sp/<?=$products['alias']?>.html">Xem chi tiết</a></li>
											<!-- <li><input type="number" class="item_quantity" min="1" value="1"></li> -->
											<li><a class="item_add" href="javascript:;" onclick="muaNick(<?=$products['id']?>)" > Mua ngay</a></li>
										</ul>
									</div>
								</div>
								<div class="new-bottom">
								<div class="ofr">
								<h5><a class="name" href="sp/<?=$products['alias']?>.html"><?=$products['name']?></a></h5>
							<?php
if ($products['fake_price']) {
        ?>
									<p class="pric1"><del><?=number_format($products['price'])?> đ</del></p>
									<p><span class="item_price"><?=number_format($products['fake_price'])?> đ</span></p>
								<?php
} else {
        ?>
									<p><span class="item_price"><?=number_format($products['price'])?> đ</span></p>
								<?php
}
    ?>

						</div>
						<div class="ofr ofr-product ">
							<h4 class="ofr-title"><?=$array[$products['rank']]?></h4>
							<p class="">Trướng: <?=$products['tuong']?></p>
							<p><span class="">Vàng: <?=$products['vang']?></span></p>
							<p><span class="">Trang phục: <?=$products['trang_phuc']?></span></p>
							<p><span class="">Điểm ngọc: <?=$products['ngoc']?></span></p>
						</div>
								</div>
							</div>
						<?php
}
?>
 <div class="row text-center">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <?=isset($pagination) ? $pagination : ''?>
                </div>
            </div>
			</div>
			<div class="col-md-3 rsidebar">
			<form id="attribute" class="attribute" method="get" action="">
				<div class="rsidebar-top">
					<div class="sidebar-row">
							<h4>Rank</h4>
							<div class="row row1 scroll-pane">
								<?php
$checkRank = '';
if (isset($_GET['rank'])) {
    $checkRank = $_GET['rank'];
}
?>
								<label class="checkbox"><input type="radio" <?php if ($checkRank == 'dong') {echo 'checked';}?> name="rank" value="dong"><i></i>Đồng</label>
								<label class="checkbox"><input type="radio" <?php if ($checkRank == 'bac') {echo 'checked';}?> name="rank" value="bac"><i></i>Bạc</label>
								<label class="checkbox"><input type="radio" <?php if ($checkRank == 'vang') {echo 'checked';}?> name="rank" value="vang"><i></i>Vàng</label>
								<label class="checkbox"><input type="radio" <?php if ($checkRank == 'bach-kim') {echo 'checked';}?> name="rank" value="bach-kim"><i></i>Bạch kim</label>
								<label class="checkbox"><input type="radio" <?php if ($checkRank == 'kim-cuong') {echo 'checked';}?> name="rank" value="kim-cuong"><i></i>Kim cương</label>
								<label class="checkbox"><input type="radio" <?php if ($checkRank == 'cao-thu') {echo 'checked';}?> name="rank" value="cao-thu"><i></i>Cao thủ</label>
								<label class="checkbox"><input type="radio" <?php if ($checkRank == 'thach-dau') {echo 'checked';}?> name="rank" value="thach-dau"><i></i>Thách đấu</label>
							</div>
					</div>
					<div class="sidebar-row">
							<h4>Giá</h4>
							<div class="row row1 scroll-pane">
							<?php
$checkGia = '';
if (isset($_GET['gia'])) {
    $checkRank = $_GET['gia'];
}
?>
								<label class="checkbox"><input type="radio"<?php if ($checkRank == '1') {echo 'checked';}?>  name="gia" value='1'><i></i>Nhỏ hơn 50k</label>
								<label class="checkbox"><input type="radio" <?php if ($checkRank == '2') {echo 'checked';}?> name="gia" value='2'><i></i>Từ 100k-200k</label>
								<label class="checkbox"><input type="radio" <?php if ($checkRank == '3') {echo 'checked';}?> name="gia" value='3'><i></i>Từ 200k-300k</label>
								<label class="checkbox"><input type="radio" <?php if ($checkRank == '4') {echo 'checked';}?> name="gia" value ='4'><i></i>Từ 300k-400k</label>
								<label class="checkbox"><input type="radio" <?php if ($checkRank == '5') {echo 'checked';}?> name="gia" value='5'><i></i>Từ 400k-500k</label>
								<label class="checkbox"><input type="radio" <?php if ($checkRank == '6') {echo 'checked';}?> name="gia" value ='6'><i></i>Lớn hơn 500k</label>
							</div>
					</div>

					<div class="sidebar-row">
							<h4>Sắp xếp</h4>
							<?php
$checkGia = '';
if (isset($_GET['orderBy'])) {
    $checkRank = $_GET['orderBy'];
}
?>
							<div class="row row1 scroll-pane">
								<label class="checkbox"><input type="radio" <?php if ($checkRank == 'tuong') {echo 'checked';}?> name="orderBy" value='tuong'><i></i>Tướng nhiều nhất</label>
								<label class="checkbox"><input type="radio" <?php if ($checkRank == 'trangPhuc') {echo 'checked';}?> name="orderBy" value='trangPhuc'><i></i>Trang phục nhiều nhất</label>
								<label class="checkbox"><input type="radio" <?php if ($checkRank == 'rank') {echo 'checked';}?> name="orderBy" value='rank'><i></i>Rank vip nhất</label>
							</div>
					</div>

				</div>
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<!-- the jScrollPane script -->
<script type="text/javascript" src="<?=CDN?>/frontend/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" id="sourcecode">
    $(function()
    {
        $('.scroll-pane').jScrollPane();
    });
    $(document).ready(function(){
        $("#attribute").on("change", "input:radio", function(){
            $("#attribute").submit();
        });
    });
</script>
<!-- //the jScrollPane script -->
<script type="text/javascript" src="<?=CDN?>/frontend/js/jquery.mousewheel.js"></script>
<!-- the mousewheel plugin -->
	<!--//products-->
	<!--footer-->
