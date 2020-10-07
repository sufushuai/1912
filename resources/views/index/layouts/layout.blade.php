<div class="top">
    <div class="py-container">
        <div class="shortcut">
            <ul class="fl">
                <li class="f-item">品优购欢迎您！</li>
                <li class="f-item">
                @if(Session::get('id'))
                    <li class="f-item">{{ Session::get('name') }}</li>
                    <li class="f-item"><a href="{{url('index/quit')}}">退出</a></li>
                @else
                    <li class="f-item">请<a href="{{url('index/login')}}" target="_self">登录</a>　<span><a href="{{url('index/register')}}" target="_self">免费注册</a></span></li>
                @endif　
                <span><a href="{{url('index/register')}}">免费注册</a></span></li>
            </ul>
            <ul class="fr">
                <li class="f-item">我的订单</li>
                <li class="f-item space"></li>
                <li class="f-item">我的品优购</li>
                <li class="f-item space"></li>
                <li class="f-item">品优购会员</li>
                <li class="f-item space"></li>
                <li class="f-item">企业采购</li>
                <li class="f-item space"></li>
                <li class="f-item">关注品优购</li>
                <li class="f-item space"></li>
                <li class="f-item">客户服务</li>
                <li class="f-item space"></li>
                <li class="f-item">网站导航</li>
            </ul>
        </div>
    </div>
</div>
<div class="cart py-container">
    <!--logoArea-->
    <div class="logoArea">
        <div class="fl logo"><span class="title"></span></div>
        <div class="fr search">
            <form class="sui-form form-inline">
                <div class="input-append">
                    <input type="text" type="text" class="input-error input-xxlarge" placeholder="品优购自营" />
                    <button class="sui-btn btn-xlarge btn-danger" type="button">搜索</button>
                </div>
            </form>
        </div>
    </div>
