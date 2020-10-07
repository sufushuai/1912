<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>支付页-失败</title>
    <link rel="icon" href="/asses/img/favicon.ico">


    <link rel="stylesheet" type="text/css" href="/asses/css/webbase.css" />
    <link rel="stylesheet" type="text/css" href="/asses/css/pages-payfail.css" />
</head>

<body>
<!--head-->
@include("index.layouts.layout")
    <!--logoArea-->
    <!--主内容-->
    <div class="payfail">
        <div class="fail">
            <h3><img src="/asses/img/_/fail.png" width="48" height="48">　支付失败，请稍后再试</h3>
            <div class="fail-text">
                <p>失败原因：不能使用金币购买！</p>
                <p>您可以先去　<a href="index.html" target="_blank">品优购首页</a>　逛逛</p>
                <p class="button"><a href="{{url("/order_info")}}" class="sui-btn btn-xlarge btn-danger">重新支付</a></p>
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