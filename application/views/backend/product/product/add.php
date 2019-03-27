<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Thông tin nick game</h3>
            </div>

        </div>
        <div class="clearfix"></div>
        <form class="form-horizontal form-label-left" id="save" method="post" action="">
            <div class="row">
                <div class="col-md-3">
                    <label>Đanh mục sản phẩm (*)</label>
                    <p>Không được để trống</p>
                </div>
                <div class="col-md-9">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Category<small> product</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="form-group">
                                <?php
if (!isset($category_check)) {
    $category_check = array();
}
if (isset($categorys) && is_array($categorys)) {
    echo showCategories($categorys, 0, '', $category_check);
}
?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <label>Sản phẩm nổi bật</label>
                </div>
                <div class="col-md-9">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Sản phẩm nổi bật <small></small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="material-switch">
                                        <input id="someSwitchOptionSuccess"  value="1" <?=isset($post['feature']) && $post['feature'] == 1 ? 'checked' : ''?> name="feature" type="checkbox"/>
                                        <label for="someSwitchOptionSuccess" class="label-success"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <label>Trạng thái sản phảm (*)</label>
                </div>
                <div class="col-md-9">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Trạng thái sản phảm <small></small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <select id="type" name="type" class="form-control">
                                        <option  <?php if (isset($post['type']) && $post['type'] == 'game') {echo 'selected';}?> value="game">Game</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select id="status" name="status" class="form-control">
                                        <option  <?php if (isset($post['status']) && $post['status'] == 1) {echo 'selected';}?> value="1">Publish</option>
                                        <option  <?php if (isset($post['status']) && $post['status'] == 0) {echo 'selected';}?> value="0">Pending</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="thumb" name="thumb" value="<?=isset($post['thumb']) ? $post['thumb'] : set_value('thumb')?>" class="form-control col-md-6" placeholder="ảnh sản phẩm">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label>Thời gian (*)</label>
                </div>
                <div class="col-md-9">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Thời gian <small></small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="row">
                                        <fieldset>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left" value="<?php if (isset($post['published'])) {echo date("m/d/Y", $post['published']);} else {echo set_value('day');}?>" name="day" id="single_cal1" placeholder="First Name" aria-describedby="inputSuccess2Status">
                                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <input type="text" name="hour" onkeypress='validate(event)' id="hour" maxlength="2" value="<?php if (isset($post['published'])) {echo date("H", $post['published']);} else {echo set_value('hour');}?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <input type="text" onkeypress='validate(event)' name="min" id="min" maxlength="2" value="<?php if (isset($post['published'])) {echo date("i", $post['published']);} else {echo set_value('min');}?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label>Tên sản phẩm (*)</label>
                    <p>Không được để trống</p>
                </div>
                <div class="col-md-9">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Tên <small>sản phẩm</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="form-group">
                                <input type="hidden" id="id" name="id"  value="<?=isset($post['id']) ? $post['id'] : ''?>" class="form-control">
                                <input type="text" id="name" autocomplete="off" name="name" value="<?=isset($post['name']) ? $post['name'] : set_value('name')?>" onkeyup="autoAlias()" class="form-control" placeholder="Tên sản phẩm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label><?=URL?>/san-pham/ (*)</label>
                    <p>Không được để trống</p>
                    <p>Liên kết không tự động nhập giống như tên sản phẩm</p>
                </div>
                <div class="col-md-9">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Link chi tiết <small>sản phẩm</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="form-group">
                                <input type="text" id="alias" name="alias" value="<?=isset($post['alias']) ? $post['alias'] : set_value('alias')?>"  class="form-control" placeholder="Link chi tiết sản phẩm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label>Chi tiết sản phẩm</label>
                </div>
                <div class="col-md-9">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Chi tiết<small> sản phẩm</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="form-group col-md-6">
                                <input type="text" id="price" name="price" value="<?=isset($post['price']) ? number_format($post['price']) : set_value('price')?>" onkeyup="reformatText(this)" class="form-control" placeholder="Giá thực tế">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" id="fake_price" name="fake_price" value="<?=isset($post['fake_price']) ? number_format($post['fake_price']) : set_value('fake_price')?>"  onkeyup="reformatText(this)" class="form-control" placeholder="Giá khuyến mãi">
                            </div>
                            <div style=' display: none;' class="form-group col-md-4">
                                <input  type="text" id="quantity" name="quantity"  value="1" onkeypress='return isNumber(event)' class="form-control" placeholder="Quantity products ">
                            </div>

                            <div class="form-group col-md-3">
                                <input type="text" id="tuong" name="tuong" value="<?=isset($post['tuong']) ? ($post['tuong']) : set_value('tuong')?>" class="form-control" placeholder="Tướng">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" id="vang" name="vang" value="<?=isset($post['vang']) ? ($post['vang']) : set_value('vang')?>" class="form-control" placeholder="Vàng">
                            </div>
                            <div  class="form-group col-md-3">
                                <input  type="text" id="ngoc" name="ngoc"  value="<?=isset($post['ngoc']) ? ($post['ngoc']) : set_value('ngoc')?>" class="form-control" placeholder="Ngọc">
                            </div>
                            <div  class="form-group col-md-3">
                                <select id='rank' name='rank' class="form-control">
                                        <option  <?php if (isset($post['rank']) && $post['rank'] == '1') {echo 'selected';}?> value="1">Đồng</option>
                                        <option  <?php if (isset($post['rank']) && $post['rank'] == '2') {echo 'selected';}?> value="2">Bạc</option>
                                        <option  <?php if (isset($post['rank']) && $post['rank'] == '3') {echo 'selected';}?> value="3">Vàng</option>
                                        <option  <?php if (isset($post['rank']) && $post['rank'] == '4') {echo 'selected';}?> value="4">Bạch Kim</option>
                                        <option  <?php if (isset($post['rank']) && $post['rank'] == '5') {echo 'selected';}?> value="5">Kim cương</option>
                                        <option  <?php if (isset($post['rank']) && $post['rank'] == '6') {echo 'selected';}?> value="6">cao thủ</option>
                                </select>
                            </div>
                            <div  class="form-group col-md-6">
                                <input  type="text" id="trang_phuc" name="trang_phuc"  value="<?=isset($post['trang_phuc']) ? ($post['trang_phuc']) : set_value('trang_phuc')?>" class="form-control" placeholder="Trang phục">
                            </div>
                            <div class="form-group col-md-6">
                            <select id='rating' name='rating' class="form-control">
                                        <option  <?php if (isset($post['rating']) && $post['rating'] == '1') {echo 'selected';}?> value="1">1 sao</option>
                                        <option  <?php if (isset($post['rating']) && $post['rating'] == '2') {echo 'selected';}?> value="2">2 sao</option>
                                        <option  <?php if (isset($post['rating']) && $post['rating'] == '3') {echo 'selected';}?> value="3">3 sao</option>
                                        <option  <?php if (isset($post['rating']) && $post['rating'] == '4') {echo 'selected';}?> value="4">4 sao</option>
                                        <option  <?php if (isset($post['rating']) && $post['rating'] == '5') {echo 'selected';}?> value="5">5 sao</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="showhied" style="overflow: hidden">
                <div style=' display: none;' class="row">
                    <div class="col-md-3">
                        <label>Link dowload / password download</label>
                        <p>Not required for product quantity management</p>
                    </div>
                    <div class="col-md-9">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Link dowload / password download<small></small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="form-group col-md-6">
                                    <input type="text" id="link_dowload" value="<?=isset($post['link_dowload']) ? $post['link_dowload'] : set_value('link_dowload')?>" name="link_dowload" class="form-control" placeholder="Link dowload ">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" id="password" name="password" value="<?=isset($post['password']) ? $post['password'] : set_value('password')?>" class="form-control" placeholder="password download">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div  style=' display: none;' class="row">
                <div class="col-md-3">
                    <label>Tags</label>
                </div>
                <div class="col-md-9">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Tags<small></small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="form-group col-md-12">
                                <script id="script_e12">
                                    $(document).ready(function () {
                                        $("#tags").select2({tags:[<?php
if (isset($tags) && count($tags) > 0) {
    $i = 0;
    foreach ($tags as $tag) {
        $i++;
        if ($i == count($tags)) {
            echo "'" . $tag['name'] . "'";
        } else {
            echo "'" . $tag['name'] . "' ,";
        }
    }
}

?>]});
                                    });
                                </script>
                                <input type="hidden"  id="tags" name="tags" style="width:100%" value="<?php
if (isset($tags_product) && count($tags_product) > 0) {
    $j = 0;
    foreach ($tags_product as $tag) {
        $j++;
        if ($j == count($tags_product)) {
            echo $tag['name'];
        } else {
            echo $tag['name'] . ',';
        }
    }
}
?>"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <label>Nội dung</label>
                </div>
                <div class="col-md-9">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Nội dung<small></small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="form-group col-md-12">
                                <textarea class="form-control" rows="5" name="content" id="content"><?=isset($post['content']) ? $post['content'] : set_value('content')?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <label>Mô tả</label>
                </div>
                <div class="col-md-9">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Mô Tả<small></small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="form-group col-md-12">
                                <textarea class="form-control" rows="5" name="describe" id="describe"><?=isset($post['describe']) ? $post['describe'] : set_value('describe')?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <label>Ảnh sản phẩm</label>
                    <p>Mỗi hình ảnh được phân tách bằng |</p>
                </div>
                <div class="col-md-9">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Ảnh sản phẩm<small></small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="form-group col-md-12">
                                <textarea class="form-control" rows="5" name="practical_photo" id="practical_photo"><?=isset($post['practical_photo']) ? $post['practical_photo'] : set_value('practical_photo')?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-9">
                    <div class="x_panel">
                        <div class="x_title">
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="form-group col-md-12">
                                <button type="button" onclick="validateForm()" class="btn btn-success">Lưu sản phẩm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
</div>
<link href="<?=CDN?>/backend/css/select2.css?gb=<?=time()?>" rel="stylesheet"/>
<script src="<?=CDN?>/backend/js/select2.js?gb=<?=time()?>"></script>
<script type="text/javascript" src="<?=CDN?>/backend/ckeditor/ckeditor.js"></script>

<script type="text/javascript">
    <?php
if (isset($post['type']) && $post['type'] == 'code') {
    ?>
                $("#link_dowload").val('<?=$post['link_dowload']?>');
                $("#password").val('<?=$post['password']?>');
                $("#showhied").show();
            <?php
} else {
    ?>
                $("#showhied").show();
                $("#link_dowload").val('');
                $("#password").val('');
          <?php
}
?>

    $('#type').on('change', function() {
        var value = $(this).val();
        if (value =='code')
        {
            $("#link_dowload").val('<?=isset($post['link_dowload']) ? $post['link_dowload'] : ''?>');
            $("#password").val('<?=isset($post['password']) ? $post['password'] : ''?>');
            $("#showhied").show();
        }
        if (value =='game')
        {
            $("#showhied").hide();
            $("#link_dowload").val('');
            $("#password").val('');
        }
    });
// isnumber input
    String.prototype.reverse = function () {
        return this.split("").reverse().join("");
    }
    function reformatText(input) {
        var x = input.value;
        x = x.replace(/,/g, ""); // Strip out all commas
        x = x.reverse();
        x = x.replace(/.../g, function (e) {
            return e + ",";
        }); // Insert new commas
        x = x.reverse();
        x = x.replace(/^,/, ""); // Remove leading comma
        input.value = x;
    }
    //end
    // js select2
    if ($.fn.select2) {
        $("#tags").select2({
            tags:[{id:11, text:"test"},{id:12, text:"test 2"},]
        });
    }

    $(function() {
        if(CKEDITOR.instances['describe']) {
            CKEDITOR.remove(CKEDITOR.instances['describe']);
        }
        CKEDITOR.config.entities_latin = false;
        CKEDITOR.config.width = '100%';
        CKEDITOR.config.height = 150;
        CKEDITOR.config.basicEntities = false;
        CKEDITOR.replace('describe',{});
    })
    $(function() {
        if(CKEDITOR.instances['content']) {
            CKEDITOR.remove(CKEDITOR.instances['content']);
        }
        CKEDITOR.config.entities_latin = false;
        CKEDITOR.config.width = '100%';
        CKEDITOR.config.basicEntities = false;
        CKEDITOR.config.height = 150;
        CKEDITOR.replace('content',{});
    })
    function notification (type,text) {
        new PNotify({
            title: 'Warning!',
            text: text,
            type: type,
            styling: 'bootstrap3'
        });
    }
    function autoAlias() {
        var alias = $("#name").val();
        $.post("<?=URL?>/manager/ajax-category/alias", {alias:alias},
            function(data){
                $("#alias").val(data);
            });
    }
    function validateForm() {
        var thumb = document.forms["save"]["thumb"].value;
        var title = document.forms["save"]["name"].value;
        var alias = document.forms["save"]["alias"].value;
        var price = document.forms["save"]["price"].value;
        if (thumb == "") {
            var type ='error';
            var text ='Thumb bắt buộc';
            onload =  notification (type,text);
            return false;
        }
        if (title == "") {
            var type ='error';
            var text ='title bắt buộc';
            onload =  notification (type,text);
            return false;
        }
        if (alias == "") {
            var type ='error';
            var text ='alias bắt buộc';
            onload =  notification (type,text);
            return false;
        }
        if (price ="")
        {
            var type ='error';
            var text ='price bắt buộc';
            onload =  notification (type,text);
            return false;
        }
        document.getElementById("save").submit();
        return true
    }
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
    function validate(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode( key );
        var regex = /[0-9]|\./;
        if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }
</script>
<!-- /page content -->