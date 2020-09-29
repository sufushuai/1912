<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>设置-个人信息</title>
    <link rel="icon" href="/assets//asses/img/favicon.ico">

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
<script type="text/javascript" src="/asses/js/plugins/birthday/birthday.js"></script>
<script type="text/javascript" src="/asses/js/plugins/citypicker/distpicker.data.js"></script>
<script type="text/javascript" src="/asses/js/plugins/citypicker/distpicker.js"></script>
<script type="text/javascript" src="/asses/js/plugins/upload/uploadPreview.js"></script>
<script type="text/javascript" src="/asses/js/pages/main.js"></script>
<script>
    $(function() {
        $.ms_DatePicker({
            YearSelector: "#select_year2",
            MonthSelector: "#select_month2",
            DaySelector: "#select_day2"
        });
    });
</script>
</body>
<!--header-->
<div id="account">
    <div class="py-container">
        <div class="yui3-g home">
            <!--左侧列表-->
            @include("index.layouts.manleft")
            <!--右侧主内容-->
            <div class="yui3-u-5-6">
                <div class="body userInfo">
                    <h4 style="text-align:center">个人信息</h4>

                    <div class="tab-content ">
                        <div id="one" class="tab-pane active">
                            <form id="form-msg" class="sui-form form-horizontal">
                                <div class="control-group">
                                    <label for="inputName" class="control-label">昵称：</label>
                                    <div class="controls">
                                        <input type="text" id="inputName" name="info_name" placeholder="昵称">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="inputName" class="control-label">手机号：</label>
                                    <div class="controls">
                                        <input type="text" id="inputName" name="info_tel" placeholder="手机号">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="inputGender" class="control-label">性别：</label>
                                    <div class="controls">
                                            <input type="radio" name="info_sex" value="1" checked>男
                                            <input type="radio" name="info_sex" value="2">女
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label for="inputPassword" class="control-label">所在地：</label>
                                    <div class="controls">
                                        {{--<div data-toggle="distpicker">--}}
                                            <div class="form-group area">
                                                <select class="form-control region"  name="province">
                                                    <option value="0" selected="selected">--请选择--</option>
                                                    @foreach($area as $k=>$v)
                                                    <option value="{{$v->area_id}}">{{$v->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group area">
                                                <select class="form-control region" name="city" >
                                                    <option value="0" selected="selected">--请选择--</option>
                                                </select>
                                            </div>
                                            <div class="form-group area">
                                                <select  name="area" class="form-control region" >
                                                    <option value="0" selected="selected">--请选择--</option>
                                                </select>
                                            </div>
                                        {{--</div>--}}
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label for="sanwei" class="control-label"></label>
                                    <div class="controls">
                                        <button type="button" class="sui-btn btn-primary" id="but">立即注册</button>
                                    </div>
                                </div>
                            </form>
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
    $(document).on("click","#but",function(){
        var info_name=$("input[name='info_name']").val();
        var info_tel=$("input[name='info_tel']").val();
        var info_sex=$(":checked").val();

        $.ajax({
            url:"/man/per_add",
            type:"post",
            data:{info_name:info_name,info_tel:info_tel,info_sex:info_sex},
            dataType:"json",
            success:function(res){
                if(res.code){
                    alert(res.msg)
                    location.href="/man/per_index";
                }
            }
        })
    });
    $(document).on("change",".region",function(){
        var _this=$(this);  //当前发生的内容的select
        _this.nextAll('select').html("<option value='0' selected>--请选择--</option>");
        var area_id=_this.val();

        if(area_id==0){
            _this.nextAll('select').html("<option value='0' selected>--请选择--</option>");
            return false;
        }
        //console.log(id);
        //通过ajax技术传到控制器
        $.post(
                "{{('/man/getArea')}}",
                {area_id:area_id},
                function(res){
                    //循环
                    var _option="<option value='0' selected>--请选择--</option>";
                    for(var i in res){
                        _option+="<option value='"+res[i]['area_id']+"'>"+res[i]['name']+"</option>";
                    }
                    _this.next('select').html(_option);
                },
                'json'
        );
    });
</script>