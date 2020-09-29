<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>品优购，优质！优质！</title>
    <link rel="icon" href="/assets/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/asses/css/webbase.css" />
    <link rel="stylesheet" type="text/css" href="/asses/css/pages-JD-index.css" />
    <link rel="stylesheet" type="text/css" href="/asses/css/widget-jquery.autocomplete.css" />
    <link rel="stylesheet" type="text/css" href="/asses/css/widget-cartPanelView.css" />
</head>

<body>
<!-- 头部栏位 -->
<!--页面顶部-->

@include('index.layouts.head')

<!--列表-->
<div class="sort">
    <div class="py-container">
        <div class="yui3-g SortList ">
            {{--z左边分类菜单--}}
            @include('index.layouts.left')
            <div class="yui3-u Center banerArea">
                <!--banner轮播-->
                <div id="myCarousel" data-ride="carousel" data-interval="4000" class="sui-carousel slide">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">

                        @foreach($slide as $k=>$s)
                            @if($k==0)
                            <div class="active item">
                                <a href="http://{{$s->slide_url}}">
                                    <img src="{{env('UPLOAD_URL')}}{{$s->slide_log}}"  />
                                </a>
                            </div>
                            @else
                                <div class="item">
                                    <a href="http://{{$s->slide_url}}">
                                        <img src="{{env('UPLOAD_URL')}}{{$s->slide_log}}"  />
                                    </a>
                                </div>
                            @endif
                        @endforeach

                    </div><a href="#myCarousel" data-slide="prev" class="carousel-control left">‹</a><a href="#myCarousel" data-slide="next" class="carousel-control right">›</a>
                </div>
            </div>
            <div class="yui3-u Right">
                {{--广告--}}
                <div class="news">
                    <h4><em class="fl">品优购快报</em><span class="fr tip">更多 ></span></h4>
                    <div class="clearix"></div>
                    <ul class="news-list unstyled">
                        @foreach($ad as $a)
                        <li>
                            <span class="bold">[{{$a->ad_name}}]</span>{{$a->ad_desc}}
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{--生命线 话费等服务--}}
                <ul class="yui3-g Lifeservice">
                    <li class="yui3-u-1-4 life-item tab-item">
                        <i class="list-item list-item-1"></i>
                        <span class="service-intro">话费</span>
                    </li>
                    <li class="yui3-u-1-4 life-item tab-item">
                        <i class="list-item list-item-2"></i>
                        <span class="service-intro">机票</span>
                    </li>
                    <li class="yui3-u-1-4 life-item tab-item">
                        <i class="list-item list-item-3"></i>
                        <span class="service-intro">电影票</span>
                    </li>
                    <li class="yui3-u-1-4 life-item tab-item">
                        <i class="list-item list-item-4"></i>
                        <span class="service-intro">游戏</span>
                    </li>
                    <li class="yui3-u-1-4 life-item notab-item">
                        <i class="list-item list-item-5"></i>
                        <span class="service-intro">彩票</span>
                    </li>
                    <li class="yui3-u-1-4 life-item notab-item">
                        <i class="list-item list-item-6"></i>
                        <span class="service-intro">加油站</span>
                    </li>
                    <li class="yui3-u-1-4 life-item notab-item">
                        <i class="list-item list-item-7"></i>
                        <span class="service-intro">酒店</span>
                    </li>
                    <li class="yui3-u-1-4 life-item notab-item">
                        <i class="list-item list-item-8"></i>
                        <span class="service-intro">火车票</span>
                    </li>
                    <li class="yui3-u-1-4 life-item  notab-item">
                        <i class="list-item list-item-9"></i>
                        <span class="service-intro">众筹</span>
                    </li>
                    <li class="yui3-u-1-4 life-item notab-item">
                        <i class="list-item list-item-10"></i>
                        <span class="service-intro">理财</span>
                    </li>
                    <li class="yui3-u-1-4 life-item notab-item">
                        <i class="list-item list-item-11"></i>
                        <span class="service-intro">礼品卡</span>
                    </li>
                    <li class="yui3-u-1-4 life-item notab-item">
                        <i class="list-item list-item-12"></i>
                        <span class="service-intro">白条</span>
                    </li>
                </ul>
                <div class="life-item-content">
                    <div class="life-detail">
                        <i class="close">关闭</i>
                        <p>话费充值</p>
                        <form action="" class="sui-form form-horizontal">
                            号码：<input type="text" id="inputphoneNumber" placeholder="输入你的号码" />
                        </form>
                        <button class="sui-btn btn-danger">快速充值</button>
                    </div>
                    <div class="life-detail">
                        <i class="close">关闭</i> 机票
                    </div>
                    <div class="life-detail">
                        <i class="close">关闭</i> 电影票
                    </div>
                    <div class="life-detail">
                        <i class="close">关闭</i> 游戏
                    </div>
                </div>
                <div class="ads">
                    <img src="/asses/img/ad1.png" />
                </div>
            </div>
        </div>
    </div>
</div>
<!--推荐-->
<div class="show">
    <div class="py-container">
        <ul class="yui3-g Recommend">
            <li class="yui3-u-1-6  clock">
                <div class="time">
                    <img src="/asses/img/clock.png" />
                    <h3>今日推荐</h3>
                </div>
            </li>
            @foreach($today as $t)
            <li class="yui3-u-5-24">
                <a href="{{'/index/item/'.$t['goods_id']}}" target="_blank"><img src="{{env('UPLOAD_URL')}}{{$t['goods_img']}}" width="160" height="200"/></a>
            </li>
                @endforeach

        </ul>
    </div>
</div>
<!--猜你喜欢-->
<div class="like">
    <div class="py-container">
        <div class="title">
            <h3 class="fl">猜你喜欢</h3>
            <b class="border"></b>
            <a href="javascript:;" class="fr tip changeBnt" id="xxlChg"><i></i>换一换</a>
        </div>
        <div class="bd">
            <ul class="clearfix yui3-g Favourate picLB" id="picLBxxl">

                @foreach($guess as $g)
                <li class="yui3-u-1-6">
                    <dl class="picDl jilu">
                        @foreach($g as $k=>$g2)

                        <dd>
                            <a href="{{url('/index/item/'.$g2['goods_id'])}}" class="pic"><img src="{{env('UPLOAD_URL')}}{{$g2['goods_img']}}" alt="" /></a>
                            <div class="like-text">
                                <p>{{$g2['goods_name']}}</p>

                                <h3>¥{{$g2['goods_price']}}</h3>

                                <h3>¥{{$g2['goods_price']}}.00</h3>
                            </div>
                        </dd>
                        @endforeach
                    </dl>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!--有趣-->
<div class="fun">
    <div class="py-container">
        <div class="title">
            <h3 class="fl">传智播客.有趣区</h3>
        </div>
        <div class="clearfix yui3-g Interest">
            <span class="x-line"></span>
            <div class="yui3-u row-405 Interest-conver">
                <img src="/asses/img/interest01.png" />
            </div>
            <div class="yui3-u row-225 Interest-conver-split">
                <h5>好东西</h5>
                <img src="/asses/img/interest02.png" />
                <img src="/asses/img/interest03.png" />
            </div>
            <div class="yui3-u row-405 Interest-conver-split blockgary">
                <h5>品牌街</h5>
                <div class="split-bt">
                    <img src="/asses/img/interest04.png" />
                </div>
                <div class="x-img fl">
                    <img src="/asses/img/interest05.png" />
                </div>
                <div class="x-img fr">
                    <img src="/asses/img/interest06.png" />
                </div>
            </div>
            <div class="yui3-u row-165 brandArea">
                <span class="brand-yline"></span>
                <ul class="yui3-g brand-list">
                    @foreach($brand as $v)
                    <li class="yui3-u-1-2 brand-pit"><a  href=""><img src="{{env('UPLOAD_URL')}}{{$v->brand_logo}}" width="45" height="30"/></a></li>
                   @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<!--楼层-->

<div id="floor-1" class="floor">
    <div class="py-container">
        <div class="title floors">
            <h3 class="fl">家用电器</h3>
            <div class="fr">
                <ul class="sui-nav nav-tabs">

                    <li>
                        <a href="#tab2" data-toggle="tab"></a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="clearfix  tab-content floor-content">
            <div id="tab1" class="tab-pane active">
                <div class="yui3-g Floor-1">
                    <div class="yui3-u Left blockgary">
                        <ul class="jd-list">
                            <li>节能补贴</li>

                        </ul>
                        <img src="/asses/img/floor-1-1.png" />
                    </div>
                    <div class="yui3-u row-330 floorBanner">
                        <div id="floorCarousel" data-ride="carousel" data-interval="4000" class="sui-carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#floorCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#floorCarousel" data-slide-to="1"></li>
                                <li data-target="#floorCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="active item">
                                    <img src="/asses/img/floor-1-b01.png">
                                </div>
                                <div class="item">
                                    <img src="/asses/img/floor-1-b02.png">
                                </div>
                                <div class="item">
                                    <img src="/asses/img/floor-1-b03.png">
                                </div>
                            </div>
                            <a href="#floorCarousel" data-slide="prev" class="carousel-control left">‹</a>
                            <a href="#floorCarousel" data-slide="next" class="carousel-control right">›</a>
                        </div>
                    </div>

                    <div class="yui3-u row-220 split">
                        <span class="floor-x-line"></span>
                        <div class="floor-conver-pit">
                            <img src="/asses/img/floor-1-2.png" />
                        </div>
                        <div class="floor-conver-pit">
                            <img src="/asses/img/floor-1-3.png" />
                        </div>
                    </div>

                    <div class="yui3-u row-218 split">
                        <img src="/asses/img/floor-1-4.png" />
                    </div>

                    <div class="yui3-u row-220 split">
                        <span class="floor-x-line"></span>
                        <div class="floor-conver-pit">
                            <img src="/asses/img/floor-1-5.png" />
                        </div>
                        <div class="floor-conver-pit">

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


<!--商标-->
<div class="brand">
    <div class="py-container">
        <ul class="Brand-list blockgary">
            @foreach($brand as $v)
            <li class="Brand-item"><img src="{{env('UPLOAD_URL')}}{{$v->brand_logo}}" width="100" height="100"/></li>
            @endforeach
        </ul>
    </div>
</div>
<!-- 底部栏位 -->
<!--页面底部-->
@include('index.layouts.foot')
<!--页面底部END-->
<!-- 楼层位置 -->
<div id="floor-index" class="floor-index">
    <ul>
        <li>
            <a class="num" href="javascript:;" style="display: none;">1F</a>
            <a class="word" href="javascript;;" style="display: block;">家用电器</a>
        </li>
        <li>
            <a class="num" href="javascript:;" style="display: none;">2F</a>
            <a class="word" href="javascript;;" style="display: block;">手机通讯</a>
        </li>
        <li>
            <a class="num" href="javascript:;" style="display: none;">3F</a>
            <a class="word" href="javascript;;" style="display: block;">电脑办公</a>
        </li>
        <li>
            <a class="num" href="javascript:;" style="display: none;">4F</a>
            <a class="word" href="javascript;;" style="display: block;">家居家具</a>
        </li>
        <li>
            <a class="num" href="javascript:;" style="display: none;">5F</a>
            <a class="word" href="javascript;;" style="display: block;">运动户外</a>
        </li>
    </ul>
</div>
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
<script type="text/javascript" src="/asses/js/czFunction.js"></script>
<script type="text/javascript" src="/asses/js/plugins/jquery.easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="/asses/js/plugins/sui/sui.min.js"></script>
<script type="text/javascript" src="/asses/js/pages/index.js"></script>
<script type="text/javascript" src="/asses/js/widget/cartPanelView.js"></script>
<script type="text/javascript" src="/asses/js/widget/jquery.autocomplete.js"></script>
<script type="text/javascript" src="/asses/js/widget/nav.js"></script>
</body>


</html>
