<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>微信支付页</title>
    <link rel="icon" href="/asses/img/favicon.ico">


    <link rel="stylesheet" type="text/css" href="/asses/css/webbase.css" />
    <link rel="stylesheet" type="text/css" href="/asses/css/pages-weixinpay.css" />
</head>

<body>
<!--head-->
{{--头部信息--}}
@include('index.layouts.layout')

    <!--主内容-->
    <div class="checkout py-container  pay">
        <div class="checkout-tit">
            <h4 class="fl tit-txt"><span class="success-icon"></span><span  class="success-info">订单提交成功，请您及时付款！订单号：{{$order}}</span></h4>
            <span class="fr"><em class="sui-lead">应付金额：</em><em  class="orange money">￥123456</em>元</span>
            <div class="clearfix"></div>
        </div>
        <div class="checkout-steps">
            <div class="fl weixin">支付宝支付</div>
            <div class="fl sao">
                <p class="red">二维码已过期，刷新页面重新获取二维码。</p>
                <div class="fl code">
                    <img src="/asses/img/erweima.png" alt="">
                    <div class="saosao">
                        <p>请使用微信扫一扫</p>
                        <p>扫描二维码支付</p>
                    </div>
                </div>
                <div class="fl phone">

                </div>

            </div>
            <div class="clearfix"></div>
            <p><a href="pay.html" target="_blank">> 其他支付方式</a></p>
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
<script type="text/javascript" src="/asses/js/widget/nav.js"></script>
<script type="text/javascript">
    $(function(){
        $("ul.payType li").click(function(){
            $(this).css("border","2px solid #E4393C").siblings().css("border-color","#ddd");
        })
    })
</script>
</body>

</html>