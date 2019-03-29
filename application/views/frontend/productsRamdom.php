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
				<li class="active">Danh sách nick Liên Quân MoBile ramdom VIP</li>
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
									<a href="single.html"><img style="width: 50%;    margin: auto;" src="/statics/frontend/images/qua-tang.gif" class="img-responsive" alt=""></a>
									<div class="new-text">
										<ul>
											<!-- <li><a href="single.html">Xem chi tiết</a></li> -->
											<!-- <li><input type="number" class="item_quantity" min="1" value="1"></li> -->
											<li><a class="item_add" href="javascript:;" onclick="muaNick(<?=$products['id']?>)"  > Mua ngay</a></li>
										</ul>
									</div>
								</div>
								<div class="new-bottom">
										<div class="ofr">
											<h5><a class="name" href="javascript:;"><?=$products['name']?></a></h5>
											<p><span class="item_price"><?=number_format($products['price'])?> đ</span></p>
										</div>
									<div class="ofr ofr-pp ofr-pp-1 ">
										<h4 class="ofr-title">Chắc chắn vào được</h4>
										<?=$products['describe']?>
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
					<p>Hãy thử vận may của bạn</p>
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
