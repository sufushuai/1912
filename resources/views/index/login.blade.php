<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>品优购，欢迎登录</title>

    <link rel="stylesheet" type="text/css" href="/asses/css/webbase.css" />
    <link rel="stylesheet" type="text/css" href="/asses/css/pages-login.css" />
</head>

<body>
<div class="login-box">
    <!--head-->
    <div class="py-container logoArea">
        <a href="" class="logo"></a>
    </div>
    <!--loginArea-->
    <div class="loginArea">
        <div class="py-container login">
            <div class="loginform">
                <ul class="sui-nav nav-tabs tab-wraped">
                    <li>
                        <a href="#index" data-toggle="tab">
                            <h3>扫描登录</h3>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#profile" data-toggle="tab">
                            <h3>账户登录</h3>
                        </a>
                    </li>
                </ul>
                <div class="tab-content tab-wraped">
                    <div id="index" class="tab-pane">
                        <p>二维码登录，暂为官网二维码</p>
                        <img src="/asses/img/wx_cz.jpg" />
                    </div>
                    <div id="profile" class="tab-pane  active">
                        <form class="sui-form">
                            <div class="input-prepend"><span class="add-on loginname"></span>
                                <input id="username prependedInput" type="text" name="username" placeholder="用户名/手机号" class="span2 input-xfat">
                            </div>
                            <div class="input-prepend"><span class="add-on loginpwd"></span>
                                <input id="password prependedInput" type="password"  name="password" placeholder="请输入密码" class="span2 input-xfat">
                            </div>
                            <div class="setting">
                                <label class="checkbox inline">
                                    <input name="m1" type="checkbox" value="2">
                                    自动登录
                                </label>
                                <span class="forget">忘记密码？</span>
                            </div>
                            <div >
                                <button class="sui-btn btn-block btn-xlarge btn-danger" type="button" id="add">登&nbsp;&nbsp;录</button>
                            </div>
                        </form>
                        <div class="otherlogin">
                            <div class="types">
                                <ul>
                                    <li><img src="/asses/img/qq.png" width="35px" height="35px" /></li>
                                    <li><img src="/asses/img/sina.png" /></li>
                                    <li><img src="/asses/img/ali.png" /></li>
                                    <li><img src="/asses/img/weixin.png" /></li>
                                </ul>
                            </div>
                            <span class="register"><a href="{{url('index/register')}}" target="_self">立即注册</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--foot-->
    <div class="py-container copyright">
        <ul>
            <li>关于我们</li>
            <li>联系我们</li>
            <li>联系客服</li>
            <li>商家入驻</li>
            <li>营销中心</li>
            <li>手机品优购</li>
            <li>销售联盟</li>
            <li>品优购社区</li>
        </ul>
        <div class="address">地址：北京市昌平区建材城西路金燕龙办公楼一层 邮编：100096 电话：400-618-4000 传真：010-82935100</div>
        <div class="beian">京ICP备08001421号京公网安备110108007702
        </div>
    </div>
</div>

<script type="text/javascript" src="/asses/js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/asses/js/plugins/jquery.easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="/asses/js/plugins/sui/sui.min.js"></script>
<script type="text/javascript" src="/asses/js/plugins/jquery-placeholder/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="/asses/js/pages/login.js"></script>
</body>

</html>
{{--<script src="/jquery.min.js"></script>--}}
<script>
    $(document).ready(function() {
        $('#add').click(function () {
            var username = $("input[name='username']").val();
            var password = $("input[name='password']").val();
            if(username==""){
                alert("名称不能为空");
                return false;
            }
            if(password==""){
                alert("密码不能为空");
                return false;
            }
//            if(tel==""){
//                alert("手机号不能为空");
//                return false;
//            }
//             alert(username);
//            alert(password) ;return false;
            $.ajax({
                type: "post",
                url: "/index/do_login",
                data: {username: username,password:password},
                dataType: "json",
                success: function (res) {
                    if (res.errno) {
                        alert(res.msg);
                        location.href = "/index";
                    }
                }
            })
//            return false;
        })
    })

</script>
