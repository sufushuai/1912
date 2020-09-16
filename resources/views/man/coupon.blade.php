<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>我的收藏</title>
    <link rel="icon" href="/asses/img/favicon.ico">

    <link rel="stylesheet" type="text/css" href="/asses/css/webbase.css" />
    <link rel="stylesheet" type="text/css" href="/asses/css/pages-seckillOrder.css" />
</head>

<body>
<!-- 头部栏位 -->
@include("index.layouts.head")

<script type="text/javascript" src="/asses/js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
        $("#service").hover(function(){
            $(".service").show();
        },function(){
            $(".service").hide();
        });
        $("#shopcar").hover(function(){
            $("#shopcarlist").show();
        },function(){
            $("#shopcarlist").hide();
        });

    })
</script>
<script type="text/javascript" src="/asses/js/plugins/jquery.easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="/asses/js/plugins/sui/sui.min.js"></script>
<script type="text/javascript" src="/asses/js/plugins/jquery-placeholder/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="/asses/js/widget/nav.js"></script>
</body>
<!--header-->
<div id="account">
    <div class="py-container">
        <div class="yui3-g collect">

            <!--左侧列表-->
            @include("index.layouts.manleft")
                    <!--右侧主内容-->
            <div class="yui3-u-5-6 goods">
                <div class="body">
                    <h4> 优惠券管理</h4>
                    <div class="goods-list">
                        <ul class="yui3-g" id="goods-list">
                            <li class="yui3-u-1-4">
                                <div class="list-wrap">
                                    <div class="p-img"><img src="/asses/img/_/t.jpg" alt=''></div>
                                    <div class="price"><strong><em>¥</em> <i>139.00</i></strong></div>
                                    <div class="attr"><em>Apple苹果iPhone 6s 32G金色 移动联通电信4G手机</em></div>
                                    <div class="cu"><em><span>促</span>满一件可参加超值换购</em></div>
                                    <div class="operate">
                                        <a href="success-cart.html" target="_blank" class="sui-btn btn-bordered btn-danger">加入购物车</a>
                                        <a href="javascript:void(0);" class="sui-btn btn-bordered">对比</a>
                                        <a href="javascript:void(0);" class="sui-btn btn-bordered">降价通知</a>
                                    </div>
                                </div>
                            </li >
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</html>
<!-- 底部栏位 -->
@include("index.layouts.foot")