<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>结算页</title>

    <link rel="stylesheet" type="text/css" href="/asses/css/webbase.css" />
    <link rel="stylesheet" type="text/css" href="/asses/css/pages-getOrderInfo.css" />
</head>

<body>
<!--head-->
@include('index.layouts.head')
    <!--主内容-->
    <div class="checkout py-container">
        <div class="checkout-tit">
            <h4 class="tit-txt">填写并核对订单信息</h4>
        </div>
        <div class="checkout-steps">
            <!--收件人信息-->
            <div class="step-tit">
                <h5>收件人信息<span><a data-toggle="modal" data-target=".edit" data-keyboard="false" class="newadd">新增收货地址</a></span></h5>
            </div>
            <div class="step-cont">
                <div class="addressInfo">
                    <ul class="addr-detail">
                        <li class="addr-item">
                            <div>
                                @foreach($addressInfo as $k=>$v)
                                <div class="con name selected"><a href="javascript:;" >{{$v['user_name']}}<span title="点击取消选择">&nbsp;</a></div>
                                <div class="con address">{{$v['province']}}{{$v['city']}}{{$v['area']}}<span>{{$v['user_tel']}}</span>
                                    <span class="edittext"><a data-toggle="modal" data-target=".edit" data-keyboard="false" >编辑</a>&nbsp;&nbsp;<a href="javascript:;">删除</a></span>
                                </div>
                                <div class="clearfix"></div>
                                @endforeach
                            </div>
                           
                        </li>


                    </ul>
                    <!--添加地址-->
                    <div  tabindex="-1" role="dialog" data-hasfoot="false" class="sui-modal hide fade edit">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="sui-close">×</button>
                                    <h4 id="myModalLabel" class="modal-title">添加收货地址</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="" class="sui-form form-horizontal">
                                        
                                        <div class="control-group">
                                            <label class="control-label">收货人：</label>
                                            <div class="controls">
                                                <input type="text" name="user_name" class="input-medium">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">所在地区：</label>
                                            <div class="controls">
                                                <div data-toggle="distpicker">
                                                    <div class="form-group area">
                                                       
                                                        <select class="area" name="province">
                                                              <option value="0" selected="selected">请选择...</option>
                                                             @foreach($res as $k=>$v)
                                                              <option value="{{$v->area_id}}">{{$v->name}}</option>
                                                              @endforeach
                                                            </select>
                                                             <select class="area" name="city">
                                                              <option value="" selected="selected">请选择...</option>
            
                                                               
                                                              <option value=""></option>
                                                              
                                                            </select>
                                                            <select class="area" name="area">
                                                              <option value="" selected="selected">请选择...</option>
                                                          
                                                        </select>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="control-group">
                                            <label class="control-label">联系电话：</label>
                                            <div class="controls">
                                                <input type="text" name="user_tel" class="input-medium">
                                            </div>
                                        </div>

                                       

                                    </form>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-ok="modal" class="sui-btn btn-primary btn-large btn">确定</button>
                                    <button type="button" data-dismiss="modal" class="sui-btn btn-default btn-large">取消</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--确认地址-->
                </div>
                <div class="hr"></div>

            </div>
            <div class="hr"></div>
            <!--支付和送货-->
            <div class="payshipInfo">
                <div class="step-tit">
                    <h5>支付方式</h5>
                </div>
                <div class="step-cont">
                    <ul class="payType">
                        <li class="selected">微信付款<span title="点击取消选择"></span></li>
                        <li>货到付款<span title="点击取消选择"></span></li>
                    </ul>
                </div>
                <div class="hr"></div>
                <div class="step-tit">
                    <h5>送货清单</h5>
                </div>
                <div class="step-cont">
                    <ul class="send-detail">
                        <li>

                            <div class="sendGoods">

                                <ul class="yui3-g">
                                    <li class="yui3-u-1-6">
                                        <span><img src="/asses/img/goods.png"/></span>
                                    </li>
                                    <li class="yui3-u-7-12">
                                        <div class="desc">Apple iPhone 6s (A1700) 64G 玫瑰金色 移动联通电信4G手机硅胶透明防摔软壳 本色系列</div>
                                        <div class="seven">7天无理由退货</div>
                                    </li>
                                    <li class="yui3-u-1-12">
                                        <div class="price">￥5399.00</div>
                                    </li>
                                    <li class="yui3-u-1-12">
                                        <div class="num">X1</div>
                                    </li>
                                    <li class="yui3-u-1-12">
                                        <div class="exit">有货</div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="hr"></div>
            </div>
            <div class="linkInfo">
                <div class="step-tit">
                    <h5>发票信息</h5>
                </div>
                <div class="step-cont">
                    <span>普通发票（电子）</span>
                    <span>个人</span>
                    <span>明细</span>
                </div>
            </div>
            <div class="cardInfo">
                <div class="step-tit">
                    <h5>使用优惠/抵用</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="order-summary">
        <div class="static fr">
            <div class="list">
                <span><i class="number">1</i>件商品，总商品金额</span>
                <em class="allprice">¥5399.00</em>
            </div>
            <div class="list">
                <span>返现：</span>
                <em class="money">0.00</em>
            </div>
            <div class="list">
                <span>运费：</span>
                <em class="transport">0.00</em>
            </div>
        </div>
    </div>
    <div class="clearfix trade">
        <div class="fc-price">应付金额:　<span class="price">¥5399.00</span></div>
        <div class="fc-receiverInfo">寄送至:北京市海淀区三环内 中关村软件园9号楼 收货人：某某某 159****3201</div>
    </div>
    <div class="submit">
        <a class="sui-btn btn-danger btn-xlarge" href="{{url('order_info')}}">提交订单</a>
    </div>
</div>
<!-- 底部栏位 -->
<!--页面底部-->
@include('index.layouts.foot')
<!--页面底部END-->

<script type="text/javascript" src="/asses/js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/asses/js/plugins/jquery.easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="/asses/js/plugins/sui/sui.min.js"></script>
<script type="text/javascript" src="components/ui-modules/nav/nav-portal-top.js"></script>
<script type="text/javascript" src="/asses/js/pages/getOrderInfo.js"></script>
</body>

</html>
<script>




$(function(){
            $(document).on('change','.area',function(){
                // alert(123);
                var _this = $(this);

                _this.nextAll('select').html("<option value=''>请选择...</option>");
                var area_id = _this.val();
                // alert(id);
                $.ajax({
                    url : "/index/area",
                    type : "post",
                    data : {area_id : area_id},
                    dataType:'json',
                    success:function(res){

                        if(res.status=='200'){
                            _this.next().html(res.data)
                        }
                    }
                })
            });
        });

        $(document).on('click','.btn',function(){
            // alert(11);
            var user_name=$("input[name='user_name']").val();
            var user_tel=$("input[name='user_tel']").val();
            var province=$("select[name='province']").val();
            var city=$("select[name='city']").val();
            var area=$("select[name='area']").val();
            // console.log(user_name);
            // console.log(user_tel);
            // console.log(province);
            // console.log(city);
            // console.log(area);
             $.ajax({
                url:"/index/create",
                data:{user_name:user_name,user_tel:user_tel,province:province,city:city,area:area},
                type:"post",
                dataType:"json",
                success:function(res){
                    // alert(111);
                    if(res.code=='0'){
                        alert(res.mag)
                        location.href='/index/order'
                    }
                }
            })
        })

    </script>

 