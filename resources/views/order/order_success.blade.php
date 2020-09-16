<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>支付页-成功</title>
    <link rel="icon" href="/asses/img/favicon.ico">


    <link rel="stylesheet" type="text/css" href="/asses/css/webbase.css" />
    <link rel="stylesheet" type="text/css" href="/asses/css/pages-paysuccess.css" />
</head>

<body>
<!--head-->
@include("index.layouts.layout")
    <!--主内容-->
    <div class="paysuccess">
        <div class="success">
            <h3><img src="/asses/img/_/right.png" width="48" height="48">　恭喜您，支付成功啦！</h3>
            <div class="paydetail">
                <p>支付方式：支付宝</p>
                <p>支付金额：￥1006.00元</p>
                <p class="button"><a href="myOrder.html" class="sui-btn btn-xlarge btn-danger">查看订单</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.html" class="sui-btn btn-xlarge ">继续购物</a></p>
            </div>
        </div>

    </div>
</div>
<!-- 底部栏位 -->
<!--页面底部-->
@include("index.layouts.foot")
<!--页面底部END-->



<script type="text/javascript" src="/asses/js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/asses/js/plugins/jquery.easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="/asses/js/plugins/sui/sui.min.js"></script>
<script type="text/javascript" src="components/ui-modules/nav/nav-portal-top.js"></script>
</body>

</html>