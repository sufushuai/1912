<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>设置-个人信息</title>
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
<script type="text/javascript" src="pages/userInfo/distpicker.data.js"></script>
<script type="text/javascript" src="pages/userInfo/distpicker.js"></script>
<script type="text/javascript" src="pages/userInfo/main.js"></script>
</body>
<!--header-->
<div id="account">
    <div class="py-container">
        <div class="yui3-g home">
            <!--左侧列表-->
            @include("index.layouts.manleft")
            <!--右侧主内容-->
            <div class="yui3-u-5-6">
                <div class="body userAddress">
                    <div class="address-title">
                        <span class="title">地址管理</span>
                        <a data-toggle="modal" data-target=".edit" data-keyboard="false"   class="sui-btn  btn-info add-new">添加新地址</a>
                        <span class="clearfix"></span>
                    </div>
                    <div class="address-detail">
                       
                        <table class="sui-table table-bordered">
                            
                            <thead>

                            <tr>
                                <th>姓名</th>
                                <th>地址</th>
                                <th>联系电话</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            @foreach($addressInfo as $k=>$v)
                            <tbody>
                            <tr>
                                <td>{{$v['user_name']}}</td>
                                <td>{{$v['province']}}{{$v['city']}}{{$v['area']}}</td>
                                <td>{{$v['user_tel']}}</td>
                                <td>
                                    
                                        <a href="{{url('/man/update/'.$v['add_id'])}}" data-target=".update">编辑</a>&nbsp;&nbsp;
                                       <button type="button" class="del" add_id="{{$v['add_id']}}" >删除</button>
                                       <a href="{{url('/man/default/'.$v['add_id'])}}" style="color:#ff4e00;">设为默认</a>
                                    
                                </td>
                            </tr>
                           
                            
                            </tbody>
                            @endforeach
                        </table>

                    </div>
                    <!--新增地址弹出层-->
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 底部栏位 -->
@include("index.layouts.foot")

</html>
<script>
    
//三级联动
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
                    url:"/man/add",
                    data:{user_name:user_name,user_tel:user_tel,province:province,city:city,area:area},
                    type:"post",
                    dataType:"json",
                    success:function(res){
                        // alert(111);
                        if(res.code=='0'){
                            alert(res.mag)
                            location.href='/man/address'
                        }
                    }
                })
            })


            $(document).on('click','.del',function(){
            // alert(11);
            var add_id = $(this).attr('add_id');
            // console.log(add_id);
            $.ajax({
                url:'/man/del',
                data:{add_id:add_id},
                type:'post',
                dataType:'json',
                success:function(res){
                    // console.log(res)
                    if(res.code==0){
                        alert(res.mag)
                        location.href="/man/address"
                    }
                }

            })
        })


</script>