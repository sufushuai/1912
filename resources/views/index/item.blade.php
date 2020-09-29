<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>产品详情页</title>
    <link rel="icon" href="assets/img/favicon.ico">
    <link rel="icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/asses/css/webbase.css" />
    <link rel="stylesheet" type="text/css" href="/asses/css/pages-item.css" />
    <link rel="stylesheet" type="text/css" href="/asses/css/pages-zoom.css" />
    <link rel="stylesheet" type="text/css" href="/asses/css/widget-cartPanelView.css" />
</head>

<body>
<!-- 头部栏位 -->
<!--页面顶部-->
@include('index.layouts.head')

<div class="py-container">
    <div id="item">
        <div class="crumb-wrap">
            <ul class="sui-breadcrumb">
                <li>
                    <a href="#">手机、数码、通讯</a>
                </li>
                <li>
                    <a href="#">手机</a>
                </li>
                <li>
                    <a href="#">Apple苹果</a>
                </li>
                <li class="active">iphone 6S系类</li>
            </ul>
        </div>
        <!--product-info-->
        <div class="product-info">
            <div class="fl preview-wrap">
                <!--放大镜效果-->
                <div class="zoom">
                    <!--默认第一个预览-->
                    <div id="preview" class="spec-preview">
                        <span class="jqzoom"><img jqimg="{{env('UPLOAD_URL')}}{{$role_Info["goods_img"]}}" style="width: 100%;height: 100%" src="{{env('UPLOAD_URL')}}{{$role_Info["goods_img"]}}" /></span>
                    </div>
                    <!--下方的缩略图-->
                    <div class="spec-scroll">
                        <a class="prev">&lt;</a>
                        <!--左右按钮-->
                        <div class="items">
                            <ul>
                                <li><img src="/asses/img/_/s1.png" bimg="/asses/img/_/b1.png" onmousemove="preview(this)" /></li>
                                <li><img src="/asses/img/_/s2.png" bimg="/asses/img/_/b2.png" onmousemove="preview(this)" /></li>
                                <li><img src="/asses/img/_/s3.png" bimg="/asses/img/_/b3.png" onmousemove="preview(this)" /></li>
                                <li><img src="/asses/img/_/s1.png" bimg="/asses/img/_/b1.png" onmousemove="preview(this)" /></li>
                                <li><img src="/asses/img/_/s2.png" bimg="/asses/img/_/b2.png" onmousemove="preview(this)" /></li>
                                <li><img src="/asses/img/_/s3.png" bimg="/asses/img/_/b3.png" onmousemove="preview(this)" /></li>
                                <li><img src="/asses/img/_/s1.png" bimg="/asses/img/_/b1.png" onmousemove="preview(this)" /></li>
                                <li><img src="/asses/img/_/s2.png" bimg="/asses/img/_/b2.png" onmousemove="preview(this)" /></li>
                                <li><img src="/asses/img/_/s3.png" bimg="/asses/img/_/b3.png" onmousemove="preview(this)" /></li>
                            </ul>
                        </div>
                        <a class="next">&gt;</a>
                    </div>
                </div>
            </div>
            <div class="fr itemInfo-wrap">
                <div class="sku-name" id="goods_name">
                    <h3>{{$role_Info["goods_name"]}}</h3>
                </div>

                <div class="summary">
                    <div class="summary-wrap">
                        <div class="fl title">
                            <i>价　　格</i>
                        </div>
                        <div class="fl price" id="goods_price">
                            <i>¥</i>
                            <em>{{$role_Info["goods_price"]}}</em>
                            <span>降价通知</span>
                        </div>
                    </div>
                    <div class="summary-wrap">
                        <div class="fl title">
                            <i>促　　销</i>
                        </div>
                        <div class="fl fix-width">
                            <i class="red-bg">加价购</i>
                            <span id="goods_desc">{{$role_Info["goods_desc"]}}</span>
                        </div>
                    </div>
                </div>
                <div class="support">
                    <div class="summary-wrap">
                        <div class="fl title">
                            <h4><i>积　　分</i></h4>
                        </div>
                        <div class="fl fix-width" id="goods_score">
                            <h4><span style="color: red">{{$role_Info["goods_score"]}}</span></h4>
                        </div>
                    </div>

                </div>
                <div class="clearfix choose">
                    <div id="specification" class="summary-wrap clearfix">
                        <dl>
                            <dt>
                                <div class="fl title">
                                    <i>选择颜色</i>
                                </div>
                            </dt>
                            <dd><a href="javascript:;" class="selected">金色<span title="点击取消选择">&nbsp;</span>
                                </a></dd>
                            <dd><a href="javascript:;">银色</a></dd>
                            <dd><a href="javascript:;">黑色</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <div class="fl title">
                                    <i>内存容量</i>
                                </div>
                            </dt>
                            <dd><a href="javascript:;" class="selected">16G<span title="点击取消选择">&nbsp;</span>
                                </a></dd>
                            <dd><a href="javascript:;">64G</a></dd>
                            <dd><a href="javascript:;" class="locked">128G</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <div class="fl title">
                                    <i>选择版本</i>
                                </div>
                            </dt>
                            <dd><a href="javascript:;" class="selected">公开版<span title="点击取消选择">&nbsp;</span>
                                </a></dd>
                            <dd><a href="javascript:;">移动版</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <div class="fl title">
                                    <i>购买方式</i>
                                </div>
                            </dt>
                            <dd><a href="javascript:;" class="selected">官方标配<span title="点击取消选择">&nbsp;</span>
                                </a></dd>
                            <dd><a href="javascript:;">移动优惠版</a></dd>
                            <dd><a href="javascript:;"  class="locked">电信优惠版</a></dd>
                        </dl>
                        <dl>
                            <dt>
                                <div class="fl title">
                                    <i>套　　装</i>
                                </div>
                            </dt>
                            <dd><a href="javascript:;" class="selected">保护套装<span title="点击取消选择">&nbsp;</span>
                                </a></dd>
                            <dd><a href="javascript:;"  class="locked">充电套装</a></dd>
                        </dl>
                    </div>
                    <div class="summary-wrap">
                        <div class="fl title">
                            <div class="control-group">
                                <div class="controls">
                                    {{--<input autocomplete="off" type="text" value="1" minnum="1" class="itxt" />--}}
                                    {{--<a href="javascript:void(0)" class="increment plus" onclick="show" id="sub">+</a>--}}
                                    {{--<a href="javascript:void(0)" class="increment mins" onclick="show" id="sum">-</a>--}}
                                    <button id="num-jian" class="increment mins">-</button>
                                    <span id="aa"><input autocomplete="off" id="input-num"  type="text" name="buy_number" value="1" minnum="1" class="itxt" /></span>
                                    <button id="num-jia" class="increment plus">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="fl">
                            <ul class="btn-choose unstyled">
                                <li>
                                    <a href="#" target="_blank" class="sui-btn  btn-danger addshopcar" id="add">加入购物车</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--product-detail-->
        <div class="clearfix product-detail">
            <div class="fl aside">
                <ul class="sui-nav nav-tabs tab-wraped">
                    <li class="active">
                        <a href="#index" data-toggle="tab">
                            <span>相关分类</span>
                        </a>
                    </li>
                    <li>
                        <a href="#profile" data-toggle="tab">
                            <span>推荐品牌</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content tab-wraped">
                    <div id="index" class="tab-pane active">
                        <ul class="part-list unstyled">
                            <li>手机</li>
                            <li>手机壳</li>
                            <li>内存卡</li>
                            <li>Iphone配件</li>
                            <li>贴膜</li>
                            <li>手机耳机</li>
                            <li>移动电源</li>
                            <li>平板电脑</li>
                        </ul>
                        <ul class="goods-list unstyled">
                            <li>
                                <div class="list-wrap">
                                    <div class="p-img">
                                        <img src="/asses/img/_/part01.png" />
                                    </div>
                                    <div class="attr">
                                        <em>Apple苹果iPhone 6s (A1699)</em>
                                    </div>
                                    <div class="price">
                                        <strong>
                                            <em>¥</em>
                                            <i>6088.00</i>
                                        </strong>
                                    </div>
                                    <div class="operate">
                                        <a href="javascript:void(0);" class="sui-btn btn-bordered">加入购物车</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="list-wrap">
                                    <div class="p-img">
                                        <img src="/asses/img/_/part02.png" />
                                    </div>
                                    <div class="attr">
                                        <em>Apple苹果iPhone 6s (A1699)</em>
                                    </div>
                                    <div class="price">
                                        <strong>
                                            <em>¥</em>
                                            <i>6088.00</i>
                                        </strong>
                                    </div>
                                    <div class="operate">
                                        <a href="javascript:void(0);" class="sui-btn btn-bordered">加入购物车</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="list-wrap">
                                    <div class="p-img">
                                        <img src="/asses/img/_/part03.png" />
                                    </div>
                                    <div class="attr">
                                        <em>Apple苹果iPhone 6s (A1699)</em>
                                    </div>
                                    <div class="price">
                                        <strong>
                                            <em>¥</em>
                                            <i>6088.00</i>
                                        </strong>
                                    </div>
                                    <div class="operate">
                                        <a href="javascript:void(0);" class="sui-btn btn-bordered">加入购物车</a>
                                    </div>
                                </div>
                                <div class="list-wrap">
                                    <div class="p-img">
                                        <img src="/asses/img/_/part02.png" />
                                    </div>
                                    <div class="attr">
                                        <em>Apple苹果iPhone 6s (A1699)</em>
                                    </div>
                                    <div class="price">
                                        <strong>
                                            <em>¥</em>
                                            <i>6088.00</i>
                                        </strong>
                                    </div>
                                    <div class="operate">
                                        <a href="javascript:void(0);" class="sui-btn btn-bordered">加入购物车</a>
                                    </div>
                                </div>
                                <div class="list-wrap">
                                    <div class="p-img">
                                        <img src="/asses/img/_/part03.png" />
                                    </div>
                                    <div class="attr">
                                        <em>Apple苹果iPhone 6s (A1699)</em>
                                    </div>
                                    <div class="price">
                                        <strong>
                                            <em>¥</em>
                                            <i>6088.00</i>
                                        </strong>
                                    </div>
                                    <div class="operate">
                                        <a href="javascript:void(0);" class="sui-btn btn-bordered">加入购物车</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="profile" class="tab-pane">
                        <p>推荐品牌</p>
                    </div>
                </div>
            </div>
            <div class="fr detail">
                <div class="clearfix fitting">
                    <h4 class="kt">选择搭配</h4>
                    <div class="good-suits">
                        <div class="fl master">
                            <div class="list-wrap">
                                <div class="p-img">
                                    <img src="/asses/img/_/l-m01.png" />
                                </div>
                                <em>￥5299</em>
                                <i>+</i>
                            </div>
                        </div>
                        <div class="fl suits">
                            <ul class="suit-list">
                                <li class="">
                                    <div id="">
                                        <img src="/asses/img/_/dp01.png" />
                                    </div>
                                    <i>Feless费勒斯VR</i>
                                    <label data-toggle="checkbox" class="checkbox-pretty">
                                        <input type="checkbox"><span>39</span>
                                    </label>
                                </li>
                                <li class="">
                                    <div id=""><img src="/asses/img/_/dp02.png" /> </div>
                                    <i>Feless费勒斯VR</i>
                                    <label data-toggle="checkbox" class="checkbox-pretty">
                                        <input type="checkbox"><span>50</span>
                                    </label>
                                </li>
                                <li class="">
                                    <div id=""><img src="/asses/img/_/dp03.png" /></div>
                                    <i>Feless费勒斯VR</i>
                                    <label data-toggle="checkbox" class="checkbox-pretty">
                                        <input type="checkbox"><span>59</span>
                                    </label>
                                </li>
                                <li class="">
                                    <div id=""><img src="/asses/img/_/dp04.png" /></div>
                                    <i>Feless费勒斯VR</i>
                                    <label data-toggle="checkbox" class="checkbox-pretty">
                                        <input type="checkbox"><span>99</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="fr result">
                            <div class="num">已选购0件商品</div>
                            <div class="price-tit"><strong>套餐价</strong></div>
                            <div class="price">￥5299</div>
                            <button class="sui-btn  btn-danger addshopcar">加入购物车</button>
                        </div>
                    </div>
                </div>
                <div class="tab-main intro">
                    <ul class="sui-nav nav-tabs tab-wraped">
                        <li class="active">
                            <a href="#one" data-toggle="tab">
                                <span>商品介绍</span>
                            </a>
                        </li>
                        <li>
                            <a href="#two" data-toggle="tab">
                                <span>规格与包装</span>
                            </a>
                        </li>
                        <li>
                            <a href="#three" data-toggle="tab">
                                <span>售后保障</span>
                            </a>
                        </li>
                        <li>
                            <a href="#four" data-toggle="tab">
                                <span>商品评价</span>
                            </a>
                        </li>
                        <li>
                            <a href="#five" data-toggle="tab">
                                <span>手机社区</span>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="tab-content tab-wraped">
                        <div id="one" class="tab-pane active">
                            <ul class="goods-intro unstyled">
                                <li>分辨率：1920*1080(FHD)</li>
                                <li>后置摄像头：1200万像素</li>
                                <li>前置摄像头：500万像素</li>
                                <li>核 数：其他</li>
                                <li>频 率：以官网信息为准</li>
                                <li>品牌： Apple</li>
                                <li>商品名称：APPLEiPhone 6s Plus</li>
                                <li>商品编号：1861098</li>
                                <li>商品毛重：0.51kg</li>
                                <li>商品产地：中国大陆</li>
                                <li>热点：指纹识别，Apple Pay，金属机身，拍照神器</li>
                                <li>系统：苹果（IOS）</li>
                                <li>像素：1000-1600万</li>
                                <li>机身内存：64GB</li>
                            </ul>
                            <div class="intro-detail">
                                <img src="/asses/img/_/intro01.png" />
                                <img src="/asses/img/_/intro02.png" />
                                <img src="/asses/img/_/intro03.png" />
                            </div>
                        </div>
                        <div id="two" class="tab-pane">
                            <p>规格与包装</p>
                        </div>
                        <div id="three" class="tab-pane">
                            <p>售后保障</p>
                        </div>
                        <div id="four" class="tab-pane">
                            <p>商品评价</p>
                        </div>
                        <div id="five" class="tab-pane">
                            <p>手机社区</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--like-->
        <div class="clearfix"></div>
        <div class="like">
            <h4 class="kt">猜你喜欢</h4>
            <div class="like-list">
                <ul class="yui3-g">
                    <li class="yui3-u-1-6">
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
                    <li class="yui3-u-1-6">
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
                    <li class="yui3-u-1-6">
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
                    <li class="yui3-u-1-6">
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
                    <li class="yui3-u-1-6">
                        <div class="list-wrap">
                            <div class="p-img">
                                <img src="/asses/img/_/itemlike05.png" />
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
                    <li class="yui3-u-1-6">
                        <div class="list-wrap">
                            <div class="p-img">
                                <img src="/asses/img/_/itemlike06.png" />
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
<!-- 底部栏位 -->
<!--页面底部-->
@include('index.layouts.foot')
<!--页面底部END-->

<!--侧栏面板开始-->
<div class="J-global-toolbar">
    <div class="toolbar-wrap J-wrap">
        <div class="toolbar">
            <div class="toolbar-panels J-panel">

                <!-- 购物车 -->
                <div style="visibility: hidden;" class="J-content toolbar-panel tbar-panel-cart toolbar-animate-out">
                    <h3 class="tbar-panel-header J-panel-header">
                        <a href="" class="title"><i></i><em class="title">购物车</em></a>
                        <span class="close-panel J-close" onclick="cartPanelView.tbar_panel_close('cart');" ></span>
                    </h3>
                    <div class="tbar-panel-main">
                        <div class="tbar-panel-content J-panel-content">
                            <div id="J-cart-tips" class="tbar-tipbox hide">
                                <div class="tip-inner">
                                    <span class="tip-text">还没有登录，登录后商品将被保存</span>
                                    <a href="#none" class="tip-btn J-login">登录</a>
                                </div>
                            </div>
                            <div id="J-cart-render">
                                <!-- 列表 -->
                                <div id="cart-list" class="tbar-cart-list">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 小计 -->
                    <div id="cart-footer" class="tbar-panel-footer J-panel-footer">
                        <div class="tbar-checkout">
                            <div class="jtc-number"> <strong class="J-count" id="cart-number">0</strong>件商品 </div>
                            <div class="jtc-sum"> 共计：<strong class="J-total" id="cart-sum">¥0</strong> </div>
                            <a class="jtc-btn J-btn" href="#none" target="_blank">去购物车结算</a>
                        </div>
                    </div>
                </div>

                <!-- 我的关注 -->
                <div style="visibility: hidden;" data-name="follow" class="J-content toolbar-panel tbar-panel-follow">
                    <h3 class="tbar-panel-header J-panel-header">
                        <a href="#" target="_blank" class="title"> <i></i> <em class="title">我的关注</em> </a>
                        <span class="close-panel J-close" onclick="cartPanelView.tbar_panel_close('follow');"></span>
                    </h3>
                    <div class="tbar-panel-main">
                        <div class="tbar-panel-content J-panel-content">
                            <div class="tbar-tipbox2">
                                <div class="tip-inner"> <i class="i-loading"></i> </div>
                            </div>
                        </div>
                    </div>
                    <div class="tbar-panel-footer J-panel-footer"></div>
                </div>

                <!-- 我的足迹 -->
                <div style="visibility: hidden;" class="J-content toolbar-panel tbar-panel-history toolbar-animate-in">
                    <h3 class="tbar-panel-header J-panel-header">
                        <a href="#" target="_blank" class="title"> <i></i> <em class="title">我的足迹</em> </a>
                        <span class="close-panel J-close" onclick="cartPanelView.tbar_panel_close('history');"></span>
                    </h3>
                    <div class="tbar-panel-main">
                        <div class="tbar-panel-content J-panel-content">
                            <div class="jt-history-wrap">
                                <ul>
                                    <!--<li class="jth-item">
                                        <a href="#" class="img-wrap"> <img src=".portal//asses/img/like_03.png" height="100" width="100" /> </a>
                                        <a class="add-cart-button" href="#" target="_blank">加入购物车</a>
                                        <a href="#" target="_blank" class="price">￥498.00</a>
                                    </li>
                                    <li class="jth-item">
                                        <a href="#" class="img-wrap"> <img src="portal//asses/img/like_02.png" height="100" width="100" /></a>
                                        <a class="add-cart-button" href="#" target="_blank">加入购物车</a>
                                        <a href="#" target="_blank" class="price">￥498.00</a>
                                    </li>-->
                                </ul>
                                <a href="#" class="history-bottom-more" target="_blank">查看更多足迹商品 &gt;&gt;</a>
                            </div>
                        </div>
                    </div>
                    <div class="tbar-panel-footer J-panel-footer"></div>
                </div>

            </div>

            <div class="toolbar-header"></div>

            <!-- 侧栏按钮 -->
            <div class="toolbar-tabs J-tab">
                <div onclick="cartPanelView.tabItemClick('cart')" class="toolbar-tab tbar-tab-cart" data="购物车" tag="cart" >
                    <i class="tab-ico"></i>
                    <em class="tab-text"></em>
                    <span class="tab-sub J-count " id="tab-sub-cart-count">0</span>
                </div>
                <div onclick="cartPanelView.tabItemClick('follow')" class="toolbar-tab tbar-tab-follow" data="我的关注" tag="follow" >
                    <i class="tab-ico"></i>
                    <em class="tab-text"></em>
                    <span class="tab-sub J-count hide">0</span>
                </div>
                <div onclick="cartPanelView.tabItemClick('history')" class="toolbar-tab tbar-tab-history" data="我的足迹" tag="history" >
                    <i class="tab-ico"></i>
                    <em class="tab-text"></em>
                    <span class="tab-sub J-count hide">0</span>
                </div>
            </div>

            <div class="toolbar-footer">
                <div class="toolbar-tab tbar-tab-top" > <a href="#"> <i class="tab-ico  "></i> <em class="footer-tab-text">顶部</em> </a> </div>
                <div class="toolbar-tab tbar-tab-feedback" > <a href="#" target="_blank"> <i class="tab-ico"></i> <em class="footer-tab-text ">反馈</em> </a> </div>
            </div>

            <div class="toolbar-mini"></div>

        </div>

        <div id="J-toolbar-load-hook"></div>

    </div>
</div>
<!--购物车单元格 模板-->
<script type="text/template" id="tbar-cart-item-template">
    <div class="tbar-cart-item" >
        <div class="jtc-item-promo">
            <em class="promo-tag promo-mz">满赠<i class="arrow"></i></em>
            <div class="promo-text">已购满600元，您可领赠品</div>
        </div>
        <div class="jtc-item-goods">
            <span class="p-img"><a href="#" target="_blank"><img src="{2}" alt="{1}" height="50" width="50" /></a></span>
            <div class="p-name">
                <a href="#">{1}</a>
            </div>
            <div class="p-price"><strong>¥{3}</strong>×{4} </div>
            <a href="#none" class="p-del J-del">删除</a>
        </div>
    </div>
</script>
<!--侧栏面板结束-->


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
<script type="text/javascript" src="/asses/js/model/cartModel.js"></script>
<script type="text/javascript" src="/asses/js/plugins/jquery.easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="/asses/js/plugins/sui/sui.min.js"></script>
<script type="text/javascript" src="/asses/js/plugins/jquery.jqzoom/jquery.jqzoom.js"></script>
<script type="text/javascript" src="/asses/js/plugins/jquery.jqzoom/zoom.js"></script>
<script type="text/javascript" src="/asses/js/pages/index.js"></script>
</body>

</html>
<script>
    //购物车减
    $(document).on("click","#num-jian",function(){
        var minus =$("#aa").find("#input-num");
        if(minus.val()<= 1){
            minus.val(1);
        }else{
            minus.val(parseInt(minus.val()) - 1);
        }
        minus.change();
    });
    //购物车加
    $(document).on("click","#num-jia",function(){
        var add = $("#aa").find("#input-num");
       // alert(add);
        add.val(parseInt(add.val()) + 1);
        add.change();
    });
    $(document).ready(function() {
        $('#add').click(function () {
            var goods_price = $("#goods_price").val();

            $.ajax({
                type: "post",
                url: "/index/success_cart",
                data: {goods_price:goods_price},
                dataType: "json",
                success: function (res) {
                    if (res.code) {
                        alert(res.msg);
                        location.href = "/index/cart";
                    } else {
                        alert('添加失败');
                    }
                }
            })
           return false;
        })
    })
</script>
