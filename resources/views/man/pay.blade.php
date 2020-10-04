<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>待付款</title>
    <link rel="icon" href="assets//asses/img/favicon.ico">

    <link rel="stylesheet" type="text/css" href="/asses/css/webbase.css" />
    <link rel="stylesheet" type="text/css" href="/asses/css/pages-seckillOrder.css" />
</head>
<style>
    .card_tab li{
        display: inline-block;
        padding: 10px;
        border:1px solid #ccc;
        margin-left: 10px;
        cursor: pointer;
    }
    .cur{
        background: #ccc;
    }
    .hide{
        display:none;
    }
</style>

<body>
<!-- 头部栏位 -->
<!--页面顶部-->
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
    $(function(){
        $(".card_tab li").click(function(){
            $(this).addClass("cur").siblings().removeClass("cur");
            var index=$(this).index();
            $(".content_tab").eq(index).removeClass("hide").siblings().addClass("hide");
        });
    });
</script>
<script type="text/javascript" src="/asses/js/plugins/jquery.easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="/asses/js/plugins/sui/sui.min.js"></script>
<script type="text/javascript" src="/asses/js/plugins/jquery-placeholder/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="/asses/js/widget/nav.js"></script>
</body>
<!--header-->
<div id="account">
    <div class="py-container">
        <div class="yui3-g home">
            <!--左侧列表-->
            @include("index.layouts.manleft")
            <!--右侧主内容-->
            <div class="yui3-u-5-6 order-pay">
                <div class="body">
                    <div class="table-title">
                        <ul class="card_tab">
                            <li class="cur">未支付</li>
                            <li>已支付</li>
                            <li>未发货</li>
                            <li>已发货</li>
                        </ul>
                    </div>
                    <div class="content">
                        <div class="content_tab">
                                <table width="100%" border="0" cellpadding="5" cellspacing="1" class="tableBasic sui-table table-bordered order-datatable">
                                    <tbody>
                                    <div class="order-detail">
                                        <div class="clearfix"></div>
                                    </div>
                                    <tr>
                                        <td width="35%">
                                            <div class="typographic"><img src="/asses/img/goods.png" />
                                                <a href="#" class="block-text">包邮 正品玛姬儿压缩面膜无纺布纸膜100粒 送泡瓶面膜刷喷瓶 新款</a>
                                                <span class="guige">规格：温泉喷雾150ml</span>
                                            </div>
                                        </td>
                                        <td width="5%" class="center">
                                            <ul class="unstyled">
                                                <li class="o-price">¥599.00</li>
                                                <li>¥299.00</li>
                                            </ul>
                                        </td>
                                        <td width="5%" class="center">1</td>
                                        <td width="8%" class="center">
                                            <ul class="unstyled">
                                                <li><a>退货/退款</a></li>
                                            </ul>
                                        </td>
                                        <td width="10%" class="center">
                                            <ul class="unstyled">
                                                <li>¥299.00</li>
                                                <li>（含运费：￥0.00）</li>
                                            </ul>
                                        </td>
                                        <td width="10%" class="center">
                                            <ul class="unstyled">
                                                <li>物流派件中</li>
                                                <li><a href="orderDetail.html" class="btn">订单详情 </a></li>
                                            </ul>
                                        </td>
                                        <td width="10%" class="center">
                                            <ul class="unstyled">
                                                <li>还剩8天10小时</li>
                                                <li><a href="#" class="sui-btn btn-info">确认收货</a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                        </div>
                        <div class="content_tab hide">
                            <table width="100%" border="0" cellpadding="5" cellspacing="1" class="tableBasic sui-table table-bordered order-datatable">
                                <tbody>
                                <div class="order-detail">
                                    <div class="clearfix"></div>
                                </div>
                                <tr>
                                    <td width="35%">
                                        <div class="typographic"><img src="/asses/img/goods.png" />
                                            <a href="#" class="block-text">包邮 正品玛姬儿压缩面膜无纺布纸膜100粒 送泡瓶面膜刷喷瓶 新款</a>
                                            <span class="guige">规格：温泉喷雾150ml</span>
                                        </div>
                                    </td>
                                    <td width="5%" class="center">
                                        <ul class="unstyled">
                                            <li class="o-price">¥599.00</li>
                                            <li>¥299.00</li>
                                        </ul>
                                    </td>
                                    <td width="5%" class="center">1</td>
                                    <td width="8%" class="center">
                                        <ul class="unstyled">
                                            <li><a>退货/退款</a></li>
                                        </ul>
                                    </td>
                                    <td width="10%" class="center">
                                        <ul class="unstyled">
                                            <li>¥299.00</li>
                                            <li>（含运费：￥0.00）</li>
                                        </ul>
                                    </td>
                                    <td width="10%" class="center">
                                        <ul class="unstyled">
                                            <li>物流派件中</li>
                                            <li><a href="orderDetail.html" class="btn">订单详情 </a></li>
                                        </ul>
                                    </td>
                                    <td width="10%" class="center">
                                        <ul class="unstyled">
                                            <li>还剩8天10小时</li>
                                            <li><a href="#" class="sui-btn btn-info">确认收货</a></li>
                                        </ul>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="content_tab hide">
                            <table width="100%" border="0" cellpadding="5" cellspacing="1" class="tableBasic sui-table table-bordered order-datatable">
                                <tbody>
                                <div class="order-detail">
                                    <div class="clearfix"></div>
                                </div>
                                <tr>
                                    <td width="35%">
                                        <div class="typographic"><img src="/asses/img/goods.png" />
                                            <a href="#" class="block-text">包邮 正品玛姬儿压缩面膜无纺布纸膜100粒 送泡瓶面膜刷喷瓶 新款</a>
                                            <span class="guige">规格：温泉喷雾150ml</span>
                                        </div>
                                    </td>
                                    <td width="5%" class="center">
                                        <ul class="unstyled">
                                            <li class="o-price">¥599.00</li>
                                            <li>¥299.00</li>
                                        </ul>
                                    </td>
                                    <td width="5%" class="center">1</td>
                                    <td width="8%" class="center">
                                        <ul class="unstyled">
                                            <li><a>退货/退款</a></li>
                                        </ul>
                                    </td>
                                    <td width="10%" class="center">
                                        <ul class="unstyled">
                                            <li>¥299.00</li>
                                            <li>（含运费：￥0.00）</li>
                                        </ul>
                                    </td>
                                    <td width="10%" class="center">
                                        <ul class="unstyled">
                                            <li>物流派件中</li>
                                            <li><a href="orderDetail.html" class="btn">订单详情 </a></li>
                                        </ul>
                                    </td>
                                    <td width="10%" class="center">
                                        <ul class="unstyled">
                                            <li>还剩8天10小时</li>
                                            <li><a href="#" class="sui-btn btn-info">确认收货</a></li>
                                        </ul>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="content_tab hide">
                            <table width="100%" border="0" cellpadding="5" cellspacing="1" class="tableBasic sui-table table-bordered order-datatable">
                                <tbody>
                                <div class="order-detail">
                                    <div class="clearfix"></div>
                                </div>
                                <tr>
                                    <td width="35%">
                                        <div class="typographic"><img src="/asses/img/goods.png" />
                                            <a href="#" class="block-text">包邮 正品玛姬儿压缩面膜无纺布纸膜100粒 送泡瓶面膜刷喷瓶 新款</a>
                                            <span class="guige">规格：温泉喷雾150ml</span>
                                        </div>
                                    </td>
                                    <td width="5%" class="center">
                                        <ul class="unstyled">
                                            <li class="o-price">¥599.00</li>
                                            <li>¥299.00</li>
                                        </ul>
                                    </td>
                                    <td width="5%" class="center">1</td>
                                    <td width="8%" class="center">
                                        <ul class="unstyled">
                                            <li><a>退货/退款</a></li>
                                        </ul>
                                    </td>
                                    <td width="10%" class="center">
                                        <ul class="unstyled">
                                            <li>¥299.00</li>
                                            <li>（含运费：￥0.00）</li>
                                        </ul>
                                    </td>
                                    <td width="10%" class="center">
                                        <ul class="unstyled">
                                            <li>物流派件中</li>
                                            <li><a href="orderDetail.html" class="btn">订单详情 </a></li>
                                        </ul>
                                    </td>
                                    <td width="10%" class="center">
                                        <ul class="unstyled">
                                            <li>还剩8天10小时</li>
                                            <li><a href="#" class="sui-btn btn-info">确认收货</a></li>
                                        </ul>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="order-detail">
                        <div class="clearfix"></div>
                    </div>


                    <div class="like-title">
                        <div class="mt">
                            <span class="fl"><strong>热卖单品</strong></span>
                        </div>
                    </div>
                    <div class="like-list">
                        <ul class="yui3-g">
                            <li class="yui3-u-1-4">
                                <div class="list-wrap">
                                    <div class="p-img">
                                        <img src="/asses/img/_/itemlike01.png" />
                                    </div>
                                    <div class="attr">
                                        <em>DELL戴尔Ins 15MR-7528SS 15英寸 银色 笔记本</em>
                                    </div>
                                    <div class="price">
                                        <strong>
                                            <em>¥</em>
                                            <i>3699.00</i>
                                        </strong>
                                    </div>
                                    <div class="commit">
                                        <i class="command">已有6人评价</i>
                                    </div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="list-wrap">
                                    <div class="p-img">
                                        <img src="/asses/img/_/itemlike02.png" />
                                    </div>
                                    <div class="attr">
                                        <em>Apple苹果iPhone 6s/6s Plus 16G 64G 128G</em>
                                    </div>
                                    <div class="price">
                                        <strong>
                                            <em>¥</em>
                                            <i>4388.00</i>
                                        </strong>
                                    </div>
                                    <div class="commit">
                                        <i class="command">已有700人评价</i>
                                    </div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="list-wrap">
                                    <div class="p-img">
                                        <img src="/asses/img/_/itemlike03.png" />
                                    </div>
                                    <div class="attr">
                                        <em>DELL戴尔Ins 15MR-7528SS 15英寸 银色 笔记本</em>
                                    </div>
                                    <div class="price">
                                        <strong>
                                            <em>¥</em>
                                            <i>4088.00</i>
                                        </strong>
                                    </div>
                                    <div class="commit">
                                        <i class="command">已有700人评价</i>
                                    </div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="list-wrap">
                                    <div class="p-img">
                                        <img src="/asses/img/_/itemlike04.png" />
                                    </div>
                                    <div class="attr">
                                        <em>DELL戴尔Ins 15MR-7528SS 15英寸 银色 笔记本</em>
                                    </div>
                                    <div class="price">
                                        <strong>
                                            <em>¥</em>
                                            <i>4088.00</i>
                                        </strong>
                                    </div>
                                    <div class="commit">
                                        <i class="command">已有700人评价</i>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 底部栏位 -->
<!--页面底部-->
@include("index.layouts.foot")
<!--页面底部END-->

undefined

</html>