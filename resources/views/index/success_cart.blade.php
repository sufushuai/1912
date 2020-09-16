<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>商品已成功加入购物车</title>

    <link rel="stylesheet" type="text/css" href="/asses/css/webbase.css" />
    <link rel="stylesheet" type="text/css" href="/asses/css/pages-success-cart.css" />
</head>

<body>
<!-- 头部栏位 -->
<!--页面顶部-->
@include('index.layouts.head')

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
<script type="text/javascript" src="/asses/js/widget/nav.js"></script>
</body>
<div class="success-cart">
    <div class="py-container ">
        <h3><i class="sui-icon icon-pc-right"></i>商品已成功加入购物车！</h3>
        <div class="goods">
            <div class="left-good">
                <div class="left-pic"><img src="/asses/img/_/gocart.jpg"></div>
                <div class="right-info">
                    <p class="title">美的（Midea)电饭煲WFZ5099IH IH电磁加热 1250W大火力 钛金釜5L电饭锅</p>
                    <p class="attr">颜色：WFZ5099IH/5L钛金釜内胆 数量：1</p>
                </div>
            </div>
            <div class="right-gocart">
                <a href="{{url('index/item')}}" class="sui-btn btn-xlarge">查看商品详情</a>
                <a href="{{url('index/cart')}}" class="sui-btn btn-xlarge btn-danger " target="_blank">去购物车结算 > </a>
            </div>
        </div>
    </div>
</div>

<div class="other-item py-container ">
    <h4>购买该商品的朋友还购买了</h4>

    <div class="banner-goods">
        <div class="goods-list">
            <div id="myCarousel" data-ride="carousel" data-interval="false" class="sui-carousel slide">

                <div class="carousel-inner">
                    <div class="active item">
                        <ul class="yui3-g">
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="{{url('index/success_cart')}}" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="{{url('index/success_cart')}}" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="{{url('index/success_cart')}}" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="{{url('index/success_cart')}}" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="{{url('index/success_cart')}}" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="{{url('index/success_cart')}}" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="{{url('index/success_cart')}}" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="{{url('index/success_cart')}}" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <ul class="yui3-g">
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <ul class="yui3-g">
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"><span>1</span></li>
                    <li data-target="#myCarousel" data-slide-to="1"><span>2</span></li>
                    <li data-target="#myCarousel" data-slide-to="2"><span>3</span></li>
                </ol>
            </div>
        </div>
    </div>

</div>
<div class="other-item py-container ">
    <h4>您可能还需要</h4>
    <div class="banner-goods">
        <div class="goods-list">
            <div id="needCarousel" data-ride="carousel" data-interval="false"  class="sui-carousel slide">

                <div class="carousel-inner">
                    <div class="active item">
                        <ul class="yui3-g">
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <ul class="yui3-g">
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <ul class="yui3-g">
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                            <li class="yui3-u-1-4">
                                <div class="banner-item">
                                    <div class="p-img"><a href="#"><img src="/asses/img/_/gocart01.jpg"></a></div>
                                    <div class="p-name"><a href="#">摩托罗拉 Moto Mods 摩眼-哈苏摄影模块</a></div>
                                    <div class="p-price">￥2299.00</div>
                                    <div class="p-btn"><a href="success-cart.html" target="_blank" class="sui-btn btn-bordered  ">加入购物车</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#needCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#needCarousel" data-slide-to="1"></li>
                    <li data-target="#needCarousel" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="other-item py-container ">
    <h4>买什么</h4>
    <div class="buy-goods">
        <ul class="yui3-g">
            <li  class="yui3-u-1-4">
                <div class="buy-list">
                    <h4>告诉你何谓电子产品达人</h4>
                    <p>血战龙</p>
                    <div class="imgs">
                        <div class="ab-cover"><img src="/asses/img/_/buy01.jpg"></div>
                        <div class="ab-list">
                            <ul>
                                <li><img src="/asses/img/_/buy001.jpg"></li>
                                <li><img src="/asses/img/_/buy002.jpg"></li>
                                <li><img src="/asses/img/_/buy002.jpg"></li>
                            </ul>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class=" operate">
                        <a href="#" class="point"><i class="sui-icon icon-tb-like"></i> 关注 7</a>
                        <a href="#"  class="zan"><i class="sui-icon icon-tb-appreciatefill"></i> 赞 9</a>
                    </div>
                </div>
            </li>
            <li  class="yui3-u-1-4">
                <div class="buy-list">
                    <h4>告诉你何谓电子产品达人</h4>
                    <p>血战龙</p>
                    <div class="imgs">
                        <div class="ab-cover"><img src="/asses/img/_/buy01.jpg"></div>
                        <div class="ab-list">
                            <ul>
                                <li><img src="/asses/img/_/buy001.jpg"></li>
                                <li><img src="/asses/img/_/buy002.jpg"></li>
                                <li><img src="/asses/img/_/buy002.jpg"></li>
                            </ul>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class=" operate">
                        <a href="#" class="point"><i class="sui-icon icon-tb-like"></i> 关注 7</a>
                        <a href="#"  class="zan"><i class="sui-icon icon-tb-appreciatefill"></i> 赞 9</a>
                    </div>
                </div>
            </li>
            <li  class="yui3-u-1-4">
                <div class="buy-list">
                    <h4>告诉你何谓电子产品达人</h4>
                    <p>血战龙</p>
                    <div class="imgs">
                        <div class="ab-cover"><img src="/asses/img/_/buy01.jpg"></div>
                        <div class="ab-list">
                            <ul>
                                <li><img src="/asses/img/_/buy001.jpg"></li>
                                <li><img src="/asses/img/_/buy002.jpg"></li>
                                <li><img src="/asses/img/_/buy002.jpg"></li>
                            </ul>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class=" operate">
                        <a href="#" class="point"><i class="sui-icon icon-tb-like"></i> 关注 7</a>
                        <a href="#"  class="zan"><i class="sui-icon icon-tb-appreciatefill"></i> 赞 9</a>
                    </div>
                </div>
            </li>
            <li  class="yui3-u-1-4">
                <div class="buy-list">
                    <h4>告诉你何谓电子产品达人</h4>
                    <p>血战龙</p>
                    <div class="imgs">
                        <div class="ab-cover"><img src="/asses/img/_/buy01.jpg"></div>
                        <div class="ab-list">
                            <ul>
                                <li><img src="/asses/img/_/buy001.jpg"></li>
                                <li><img src="/asses/img/_/buy002.jpg"></li>
                                <li><img src="/asses/img/_/buy002.jpg"></li>
                            </ul>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class=" operate">
                        <a href="#" class="point"><i class="sui-icon icon-tb-like"></i> 关注 7</a>
                        <a href="#"  class="zan"><i class="sui-icon icon-tb-appreciatefill"></i> 赞 9</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
</div>
<!-- 底部栏位 -->
<!--页面底部-->
@include('index.layouts.foot')
<!--页面底部END-->
undefined

</html>
