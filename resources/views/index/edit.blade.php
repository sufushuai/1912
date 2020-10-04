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
            <h4 class="tit-txt"></h4>
        </div>
        <form action="" class="sui-form form-horizontal">
                                        <input type="hidden" name="add_id" value="{{$data->add_id}}">
                                        <div class="control-group">
                                            <label class="control-label">收货人：</label>
                                            <div class="controls">
                                                <input type="text" name="user_name" class="input-medium"  value="{{$data->user_name}}">
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
                                                <input type="text" name="user_tel" class="input-medium"  value="{{$data->user_tel}}">
                                            </div>
                                        </div>
            
                                     
        <a class="sui-btn btn-danger btn-xlarge btn" >确认修改</a>
  
                                       

                                    </form>

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
            var add_id=$("input[name='add_id']").val();
            var user_name=$("input[name='user_name']").val();
            var user_tel=$("input[name='user_tel']").val();
            var province=$("select[name='province']").val();
            var city=$("select[name='city']").val();
            var area=$("select[name='area']").val();
            // console.log(user_name);btn
            // console.log(user_tel);
            // console.log(province);
            // console.log(city);
            // console.log(area);
             $.ajax({
                url:"/index/updatedo",
                data:{user_name:user_name,user_tel:user_tel,province:province,city:city,area:area,add_id:add_id},
                type:"post",
                dataType:"json",
                success:function(res){
                    // alert(res);
                    if(res.code=='0'){
                        alert(res.mag)
                        location.href='/index/order'
                    }
                }
            })
        })


          

    </script>

 