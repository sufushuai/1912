<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>我的购物车</title>

    <link rel="stylesheet" type="text/css" href="/asses/css/webbase.css" />
    <link rel="stylesheet" type="text/css" href="/asses/css/pages-cart.css" />
</head>

<body>
<!--head-->
@include('index.layouts.layout')
    <!--All goods-->
    <div class="allgoods">
        <h4>全部商品<span>11</span></h4>
        <div class="cart-main">
            <div class="yui3-g cart-th">
                <div class="yui3-u-1-4"><input id="allbox" type="checkbox" name="" id="" value="" /> 全部</div>
                <div class="yui3-u-1-4">商品</div>
                <div class="yui3-u-1-8">单价（元）</div>
                <div class="yui3-u-1-8">数量</div>
                <div class="yui3-u-1-8">小计（元）</div>
                <div class="yui3-u-1-8">操作</div>
            </div>
            @foreach($cart as $k=>$v)
                <div class="cart-item-list">
                    <div class="cart-shop">
                        <span class="shopname">神州数码专营店</span>
                    </div>
                    <div class="cart-body">
                        <div class="cart-list">
                            <ul class="goods-list yui3-g" cart_id="{{$v->cart_id}}">
                                <li class="yui3-u-1-24">
                                    <input type="checkbox" name="check" id="" value="{{$v->cart_id}}" />
                                </li>
                                <li class="yui3-u-11-24">
                                    <div class="good-item">
                                        <div class="item-img"><img src="/asses/img/goods.png" /></div>
                                        <div class="item-msg">Apple Macbook Air 13.3英寸笔记本电脑 银色（Corei5）处理器/8GB内存
                                            尺寸：13.3英寸</div>
                                    </div>
                                </li>

                                <li class="yui3-u-1-8"><span class="price">{{$v->goods_price}}</span></li>
                                <li class="yui3-u-1-8">
                                    <button id="num-jian" class="increment mins">－</button>
                                    <input  id="input-num"  type="text" value="1" class="itxt" />
                                    <button id="num-jia" class="increment plus">＋</button>
                                </li>
                                <li class="yui3-u-1-8"><span class="sum">{{$v->goods_price}}</span></li>
                                <li class="yui3-u-1-8">
                                    <button class="del">删除</button>
                                    <button >移到我的关注</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="cart-tool">
            <div class="option">
                <input type="button" class="btn bg-olive btn-xs" value="批量删除" id="dels">
                <a href="#none">移到我的关注</a>
                <a href="#none">清除下柜商品</a>
            </div>
            <div class="toolbar">
                <div class="chosed">已选择<span>0</span>件商品</div>
                <div class="sumprice">
                    <span><em>总价（不含运费） ：</em><i class="summoney">¥16283.00</i></span>
                    <span><em>已节省：</em><i>-¥20.00</i></span>
                </div>
                <div class="sumbtn">
                    <a class="sum-btn" href="{{url('index/order')}}" target="_blank">结算</a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="deled">
            <span>已删除商品，您可以重新购买或加关注：</span>
            <div class="cart-list del">
                <ul class="goods-list yui3-g">
                    <li class="yui3-u-1-2">
                        <div class="good-item">
                            <div class="item-msg">Apple Macbook Air 13.3英寸笔记本电脑 银色（Corei5）处理器/8GB内存</div>
                        </div>
                    </li>
                    <li class="yui3-u-1-6"><span class="price">8848.00</span></li>
                    <li class="yui3-u-1-6">
                        <span class="number">1</span>
                    </li>
                    <li class="yui3-u-1-8">
                        <a href="#none">重新购买</a>
                        <a href="#none">移到我的关注</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="liked">
            <ul class="sui-nav nav-tabs">
                <li class="active">
                    <a href="#index" data-toggle="tab">猜你喜欢</a>
                </li>
                <li>
                    <a href="#profile" data-toggle="tab">特惠换购</a>
                </li>
            </ul>
            <div class="clearfix"></div>
            <div class="tab-content">
                <div id="index" class="tab-pane active">
                    <div id="myCarousel" data-ride="carousel" data-interval="4000" class="sui-carousel slide">
                        <div class="carousel-inner">
                            <div class="active item">
                                <ul>
                                    <li>
                                        <img src="/asses/img/like1.png" />
                                        <div class="intro">
                                            <i>Apple苹果iPhone 6s (A1699)</i>
                                        </div>
                                        <div class="money">
                                            <span>$29.00</span>
                                        </div>
                                        <div class="incar">
                                            <a href="#" class="sui-btn btn-bordered btn-xlarge btn-default"><i class="car"></i><span class="cartxt">加入购物车</span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="/asses/img/like2.png" />
                                        <div class="intro">
                                            <i>Apple苹果iPhone 6s (A1699)</i>
                                        </div>
                                        <div class="money">
                                            <span>$29.00</span>
                                        </div>
                                        <div class="incar">
                                            <a href="#" class="sui-btn btn-bordered btn-xlarge btn-default"><i class="car"></i><span class="cartxt">加入购物车</span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="/asses/img/like3.png" />
                                        <div class="intro">
                                            <i>Apple苹果iPhone 6s (A1699)</i>
                                        </div>
                                        <div class="money">
                                            <span>$29.00</span>
                                        </div>
                                        <div class="incar">
                                            <a href="#" class="sui-btn btn-bordered btn-xlarge btn-default"><i class="car"></i><span class="cartxt">加入购物车</span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="/asses/img/like4.png" />
                                        <div class="intro">
                                            <i>Apple苹果iPhone 6s (A1699)</i>
                                        </div>
                                        <div class="money">
                                            <span>$29.00</span>
                                        </div>
                                        <div class="incar">
                                            <a href="#" class="sui-btn btn-bordered btn-xlarge btn-default"><i class="car"></i><span class="cartxt">加入购物车</span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul>
                                    <li>
                                        <img src="/asses/img/like1.png" />
                                        <div class="intro">
                                            <i>Apple苹果iPhone 6s (A1699)</i>
                                        </div>
                                        <div class="money">
                                            <span>$29.00</span>
                                        </div>
                                        <div class="incar">
                                            <a href="#" class="sui-btn btn-bordered btn-xlarge btn-default"><i class="car"></i><span class="cartxt">加入购物车</span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="/asses/img/like2.png" />
                                        <div class="intro">
                                            <i>Apple苹果iPhone 6s (A1699)</i>
                                        </div>
                                        <div class="money">
                                            <span>$29.00</span>
                                        </div>
                                        <div class="incar">
                                            <a href="#" class="sui-btn btn-bordered btn-xlarge btn-default"><i class="car"></i><span class="cartxt">加入购物车</span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="/asses/img/like3.png" />
                                        <div class="intro">
                                            <i>Apple苹果iPhone 6s (A1699)</i>
                                        </div>
                                        <div class="money">
                                            <span>$29.00</span>
                                        </div>
                                        <div class="incar">
                                            <a href="#" class="sui-btn btn-bordered btn-xlarge btn-default"><i class="car"></i><span class="cartxt">加入购物车</span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="/asses/img/like4.png" />
                                        <div class="intro">
                                            <i>Apple苹果iPhone 6s (A1699)</i>
                                        </div>
                                        <div class="money">
                                            <span>$29.00</span>
                                        </div>
                                        <div class="incar">
                                            <a href="#" class="sui-btn btn-bordered btn-xlarge btn-default"><i class="car"></i><span class="cartxt">加入购物车</span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="#myCarousel" data-slide="prev" class="carousel-control left">‹</a>
                        <a href="#myCarousel" data-slide="next" class="carousel-control right">›</a>
                    </div>
                </div>
                <div id="profile" class="tab-pane">
                    <p>特惠选购</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 底部栏位 -->
<!--页面底部-->
@include('index.layouts.foot')
<!--页面底部END-->
<script type="text/javascript" src="/asses/js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/asses/js/plugins/jquery.easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="/asses/js/plugins/sui/sui.min.js"></script>
<script type="text/javascript" src="/asses/js/widget/nav.js"></script>
<script>
    //购物车减
    $(document).on("click","#num-jian",function(){
        var minus = $(this).parent("li").find("#input-num");
        if(minus.val()<= 0){
            minus.val(0);
        }else{
            minus.val(parseInt(minus.val()) - 1);
        }
        minus.change();
    });
    //购物车加
    $(document).on("click","#num-jia",function(){
        var add = $(this).parent("li").find("#input-num");
        //alert(add);
        add.val(parseInt(add.val()) + 1);
        add.change();
    });
    //ajax删除
    $(document).on('click','.del',function(){
        var cart_id = $(this).parents('ul').attr('cart_id');
        $.ajax({
            type:"post",
            dataType:"json",
            url:"/index/cartdestroy",
            data:{cart_id:cart_id},
            success:function(res){
                if(confirm("确定是否删除？")){
                    if(res.code==200){
                        alert("删除成功")
                        location.href='/index/cart'
                    }
                }
                if(res.code==1){
                    alert(res.msg)
                }
            }
        })
    });
    // 全选
    $(function(){
        // 给老大得复选框一个点击事件
        $("#allbox").click(function () {
            var _this = $(this);
            // 循环下面所有得复选框
            $("input[name='check']").each(function () {
                // 判断老大是否时选中状态
                if (_this.prop("checked") == true) {
                    $(this).prop('checked', true);
                } else {
                    $(this).prop('checked', false);
                }
            });
        });

        // 批量删除
        $("#dels").click(function(){
            // 是否删除
            if (window.confirm('是否删除')) {
                // 获取所有被选中得值
                var str = ''; // 定义一个字符串用来装选中得id
                $("input[name='check']").each(function(){
                    // 判断是否被选中
                    if ($(this).prop('checked') == true) {
                        // 拼接字符串，用，作为分隔符
                        str = str + $(this).val() +',';
                        console.log(str);
                    }
                });
                var strIds = str.substr(0, str.length-1);
                 //alert(strIds);return;
                // 如果字符串中没有任何的ID就不走后台ajax
                if (strIds == '') return false;
                $.ajax({
                    url:'/index/cartdel',
                    data: {'strIds': strIds},
                    dataType: 'json',
                    type: "post",
                    success:function(res){
                            if(res.code==200){
                                alert("删除成功")
                                location.href='/index/cart'
                            }
                        if(res.code==1){
                            alert(res.msg)
                        }
                    }
                });
            }
        });
    })
</script>
</body>

</html>
