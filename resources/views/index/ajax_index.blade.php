<div id="floor-1" class="floor" >
    <div class="py-container">
        <div class="title floors">
            <h3 class="fl">{{$cateList1->cate_name}}</h3>
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
                    <div class="yui3-u-2-24  blockgary">
                        <ul class="jd-list">
                            @foreach($cateList2 as $v)
                                <li class="li" value="{{$v->cate_id}}"><a href="javascript:void(0)">{{$v->cate_name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    {{--<div class="yui3-u row-330 floorBanner">--}}
                    {{--<div id="floorCarousel" data-ride="carousel" data-interval="4000" class="sui-carousel slide">--}}
                    {{--<ol class="carousel-indicators">--}}
                    {{--<li data-target="#floorCarousel" data-slide-to="0" class="active"></li>--}}
                    {{--<li data-target="#floorCarousel" data-slide-to="1"></li>--}}
                    {{--<li data-target="#floorCarousel" data-slide-to="2"></li>--}}
                    {{--</ol>--}}
                    {{--<div class="carousel-inner">--}}
                    {{--<div class="active item">--}}
                    {{--<img src="/asses/img/floor-1-b01.png">--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                    {{--<img src="/asses/img/floor-1-b02.png">--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                    {{--<img src="/asses/img/floor-1-b03.png">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<a href="#floorCarousel" data-slide="prev" class="carousel-control left">‹</a>--}}
                    {{--<a href="#floorCarousel" data-slide="next" class="carousel-control right">›</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="yui3-u row-220 split">--}}
                    {{--<span class="floor-x-line"></span>--}}
                    {{--<div class="floor-conver-pit">--}}
                    {{--<img src="/asses/img/floor-1-2.png" />--}}
                    {{--</div>--}}
                    {{--<div class="floor-conver-pit">--}}
                    {{--<img src="/asses/img/floor-1-3.png" />--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    @foreach($goodsList as $v)
                        <div class="yui3-u row-218 split" id="goods_list">

                            <img src="{{env('UPLOAD_URL')}}{{$v->goods_img}}"/>

                        </div>
                    @endforeach
                    {{--<div class="yui3-u row-220 split">--}}
                    {{--<span class="floor-x-line"></span>--}}
                    {{--<div class="floor-conver-pit">--}}
                    {{--<img src="/asses/img/floor-1-5.png" />--}}
                    {{--</div>--}}
                    {{--<div class="floor-conver-pit">--}}

                    {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>


        </div>
    </div>
</div>

