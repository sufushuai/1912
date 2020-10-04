<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

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
                    <h4 style="text-align:center">个人信息管理</h4>

                    <div class="table-box">
                        <!--工具栏-->

                        <!--数据列表-->
                        <table id="dataList" class="sui-table table-bordered">
                            <thead>
                            @foreach($data_info as $k=>$v)
                            <tr>
                                <th class="sorting_asc">昵称：</th>
                                <input type="hidden" value="{{$v->info_id}}" name="info_id">
                                <td class="sorting_asc" >{{$v->info_name}}</td>
                            </tr>
                            <tr>
                                <th class="sorting_asc">手机号：</th>
                                <td class="sorting_asc" >{{$v->info_tel}}</td>
                            </tr>
                            <tr>
                                <th class="sorting_asc">性别：</th>
                                <td class="sorting_asc" >
                                    @if($v->info_sex==1)
                                        男
                                        @else
                                    女
                                        @endif
                                </td>
                            </tr>
                            <tr>
                                <th class="sorting_asc">所在地：</th>
                                <td>{{$v->province}}&nbsp;{{$v->city}}&nbsp;{{$v->area}}</td>
                            </tr>
                            <tr>
                                <th class="sorting_asc">积分：</th>
                                <td>{{$v->info_score}}分</td>
                            </tr>
                                @endforeach
                            </thead>
                        </table>
                        <div class="control-group">
                            <label for="sanwei" class="control-label"></label>
                            <div class="controls">
                                <button class="edit" class="sui-btn btn-primary">修改个人信息</button>
                            </div>
                        </div>

                        <!--数据列表/-->
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
    $(document).on("click",".edit",function(){
        var info_id=$("input[name='info_id']").val();
        location.href="/man/per_edit?info_id="+info_id;
    })
</script>