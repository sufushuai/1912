<div class="yui3-u Left all-sort-list">
    <div class="all-sort-list2">
        @foreach($category as $c)
        <div class="item bo">
            <h3><a href="{{url('index/list')}}">{{$c['cate_name']}}</a></h3>
            <div class="item-list clearfix">
                <div class="subitem">
                    <dl class="fore1">
                        <dd>
                            @foreach($c['son'] as $p)
                                <em><a href="{{url('index/list')}}">{{$p['cate_name']}}</a></em>
                            @endforeach
                        </dd>

                    </dl>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
