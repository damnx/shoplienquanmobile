<!--breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow fadeInUp" data-wow-delay=".5s">
            <li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Đăng nhập</li>
        </ol>
    </div>
</div>
<!--//breadcrumbs-->
<!--login-->
<div class="login-page">
    <div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
        <h3 class="title">Nạp thẻ<span> Linh Chi's</span></h3>
    </div>
    <div class="widget-shadow">
        <div class="login-body wow fadeInUp animated" data-wow-delay=".7s">
            <?php
            if (isset($return))
            {
                ?>
                <div style="padding: 0px" class="col-lg-12">
                    <div class="alert alert-warning" role="alert">
                        <strong>Warning! </strong> <?=$return['text']?>
                    </div>
                </div>
                <?php
            }
            ?>
            <form method="post" action="">
                <input type="text" class="user" value="<?=set_value('pin')?>" id="pin" name="pin" placeholder="Mã thẻ" required="">
                <?php echo form_error('pin', '<label class="error">', '</label>'); ?>
                <input type="text" name="serial" class="lock" value="<?=set_value('serial')?>"  placeholder="Số seri">
                <?php echo form_error('serial', '<label class="error">', '</label>'); ?>

                 <select class="form-control" name="card_amount" id="type">
                    <option value="0">Chọn mệnh giá</option>
                    <option value="10000">10.000</option>
                    <option value="20000">20.000</option>
                    <option value="30000">30.000</option>
                    <option value="50000">50.000</option>
                    <option value="100000">100.000</option>
                    <option value="200000">200.000</option>
                    <option value="300000">300.000</option>
                    <option value="500000">500.000</option>
                    <option value="1000000">1.000.000</option>
                </select>

                <select class="form-control" name="card_type" id="type">
                    <option value="">Chọn Thẻ Nạp</option>
                    <option value="VTT">Viettel</option>
                    <option value="VMS">Mobiphone</option>
                    <option value="VNP">Vinaphone</option>
                </select>
                
                <input type="submit" class="dang-nhap" name="signin" value="Đăng nhập">
                <div class="forgot-grid">
                    <div class="forgot">
                        <!--                        <a href="#">Quên mật khẩu ?</a>-->
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--//login-->