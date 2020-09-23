<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>个人注册</title>


    <link rel="stylesheet" type="text/css" href="/asses/css/webbase.css" />
    <link rel="stylesheet" type="text/css" href="/asses/css/pages-register.css" />
</head>

<body>
<div class="register py-container ">
    <!--head-->
    <div class="logoArea">
        <a href="" class="logo"></a>
    </div>
    <!--register-->
    <div class="registerArea">
        <h3>注册新用户<span class="go">我有账号，去<a href="{{url('index/login')}}" target="_blank">登陆</a></span></h3>
        <div class="info">
            <form class="sui-form form-horizontal">
                <div class="control-group">
                    <label class="control-label">用户名：</label>
                    <div class="controls">
                        <input type="text" name="username" id="username" placeholder="请输入你的用户名" class="input-xfat input-xlarge">
                    </div>
                </div>
                <div class="control-group">
                    <label for="inputPassword" class="control-label">登录密码：</label>
                    <div class="controls">
                        <input type="password" name="password" id="password" placeholder="设置登录密码" class="input-xfat input-xlarge">
                    </div>
                </div>
                <div class="control-group">
                    <label for="inputPassword" class="control-label">确认密码：</label>
                    <div class="controls">
                        <input type="password" name="password1" id="password1" placeholder="再次确认密码" class="input-xfat input-xlarge">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">手机号：</label>
                    <div class="controls">
                        <input type="text" name="tel" id="tel" placeholder="请输入你的手机号" class="input-xfat input-xlarge">
                    </div>
                </div>
                <div class="control-group">
                    <label for="inputPassword" class="control-label">短信验证码：</label>
                    <div class="controls">
                        <input type="text" name="code" placeholder="短信验证码" class="input-xfat input-xlarge">
                        <button type="button" id="sendcode">获取短信验证码</button>
                        <span class="getcode" style="display: none"></span>
                    </div>
                </div>

                <div class="control-group">
                    <label for="inputPassword" class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <div class="controls">
                        <input name="m1" type="checkbox" value="2" checked=""><span>同意协议并注册《品优购用户协议》</span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"></label>
                    <div class="controls btn-reg">
                        <a class=" add sui-btn btn-block btn-xlarge btn-danger" target="_blank">完成注册</a>
                    </div>
                </div>
            </form>
            <div class="clearfix"></div>
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
<script type="text/javascript" src="/asses/js/pages/register.js"></script>
</body>

</html>
<script>

    $(document).on('click','#sendcode',function(){

        var username = $("#username").val();
        var password = $("#password").val();
        var password1 = $("#password1").val();
        var tel = $("#tel").val();
        if(username==""){
            alert("名称不能为空");
            return false;
        }
        if(password==""){
            alert("密码不能为空");
            return false;
        }
        if(password1==""){
            alert("确认密码不能为空");
            return false;
        } else if(password1!=password){
            alert("密码保持一致");
            return false;
        }
        if(tel==""){
            alert("手机号不能为空");
            return false;
        }
        var reg=/^1[0-9]{10}$/;
        if(!reg.test(tel)){
            alert('手机号格式不对');
            return false;
        }

        //短信验证码计时器
        $(".getcode").text("60s");//这个是吧span里面值改成5s
        _t=setInterval(vals,1000);//定时器
        $(".getcode").css("pointer-events", "none")//置灰
        function vals() {
            s=$(".getcode").text();
            s=parseInt(s);
            if(s<=0){
                $(".getcode").hide();
                $("#sendcode").show()
                s=$(".getcode").text("获取验证码");
                clearInterval(_t)
                $(".getcode").css("pointer-events", "auto")
            }else{
                $("#sendcode").hide();
                $(".getcode").show()
                s=s-1;
                s=$(".getcode").text(s+"s");
                $(".getcode").css("pointer-events", "none")
            }
        }


        $.ajax({
            type: "post",
            url: "/index/sendtel",
            data: {tel:tel},
            dataType: "json",
            success: function (res) {
               if(res.Code=='OK'){
                   alert("验证码发送成功")
               }else{
                   alert("验证码发送失败")
               }
            }
        })


    })


    $(document).ready(function() {
        $('.add').click(function () {
            var username = $("#username").val();
            var password = $("#password").val();
            var password1 = $("#password1").val();
            var tel = $("#tel").val();
            var code = $("input[name=code]").val();
            if(username==""){
                alert("名称不能为空");
                return false;
            }
            if(password==""){
                alert("密码不能为空");
                return false;
            }
            if(password1==""){
                alert("确认密码不能为空");
                return false;
            } else if(password1!=password){
                alert("密码保持一致");
                return false;
            }
            if(tel==""){
                alert("手机号不能为空");
                return false;
            }
            if(code==""){
                alert("验证码不能为空");
                return false;
            }
            $.ajax({
                type: "post",
                url: "/index/do_register",
                data: {username: username,password:password,password1:password1,tel:tel,code:code},
                dataType: "json",
                success: function (res) {
                    if (res.errno == 200) {
                        alert('注册成功');
                        location.href = "/index/login";
                    }
                    if(res.errno==1){
                        alert(res.msg)
                    }
                }
            })


        })
    })

</script>

