<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Common;
use App\Model\RbacUser;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use App\Model\BrandModel;
use App\Model\AdModel;
use App\Model\SlideModel;
use App\Model\CartModel;
use App\Model\CategoryModel;
use App\Model\GoodsModel;
use App\Model\AreaModel;
use App\Model\UserModel;
use Illuminate\Support\Facades\Session;
use App\Model\SkuAttrValModel;
use App\Model\SkuAttrModel;
use App\Model\SkuValModel;
use App\Model\AddressModel;
class IndexController extends Common
{
    //首页
    public function index(){
        //猜你喜欢
        //轮播图
        $slide=SlideModel::where('is_del',1)->limit(5)->get();
        //广告
        $ad=AdModel::where('is_del',1)->limit(5)->get();
        //品牌
        $brand=BrandModel::where('status',1)->limit(16)->get();

          $where=[
                    'is_hot'=>1,
                    'is_show'=>1,
                    'is_new'=>1
                ];
        //猜你喜欢
        $guess=GoodsModel::where($where)->limit(12)->get()->toArray();
        //$guess=collect($guess)->toArray();
        $guess=array_chunk($guess,2,true);
        //dump($guess);die;

        //获取分类数据
        $category=CategoryModel::get()->toArray();
        //获取所有父级ID p_id
        //执行无极限
        $cate=$this->getcateInfo2($category);

        //今日推荐
        $today=GoodsModel::where('is_del',1)->orderby('goods_clicknum','desc')->limit(4)->get();

        //楼层
        $floor=CategoryModel::where('p_id',0)->value('cate_id');
        //dd($floor);
        //最高分类
        $cateList1=CategoryModel::where('cate_id',$floor)->first();
        //dd($cateList1);
        $where=[
            'p_id'=>$floor,
        ];
        //子级分类
        $cateList2=CategoryModel::where($where)->get();
        //所有子孙级ID
        $cateAll=CategoryModel::get();
        $cateIds=$this->getCateIds($cateAll,$floor);
        //获取当前数组中所有的值
        $cateIds=array_values($cateIds);
        //dd($cateIds);
        //转换成字符串
        $str_cateIds=implode(',',$cateIds);
        //查询当前cate==这些ID的商品
        $where1=[
            ['cate_id','in',$str_cateIds]
        ];
        $goodsList=GoodsModel::where($where1)->limit(8)->get();


        //dump($floors);


        return view('index.index',['brand'=>$brand,'cateList1'=>$cateList1,'cateList2'=>$cateList2,'goodsList'=>$goodsList,'ad'=>$ad,'slide'=>$slide,'category'=>$cate,'guess'=>$guess,'today'=>$today]);
    }


    //购物车
    public function cart(){
        $cart = CartModel::where(['is_del'=>1])->get();
        return view('index.cart',['cart'=>$cart]);
    }
    //购物车删除
    public function cartdestroy(){
        $cart_id = request()->post('cart_id');
        $res = CartModel::where('cart_id',$cart_id)->update(["is_del"=>2]);
        if($res){
            return $this->success();
        }else{
            return $this->error("删除失败");
        }
    }
    public function cartdel(){
        $cart_id=request()->post('strIds');
        //把传来的所有id改为数组形式  explode  字符串转数组
        $str = explode(",",$cart_id);
        //dd($str);
        //利用循环将需要删除的id 一个一个进行执行sql；
        foreach($str as $k => $v){
            $res=CartModel::where('cart_id',$v)->update(["is_del"=>2]);
        }
        //dd($res);
        if($res){
            return $this->success();
        }else{
            return $this->error("删除失败");
        }
    }
    //成功加入购物车
    public function success_cart(){
        $goods_price = request()->post("goods_price");

        $where =[
            "goods_price"=>$goods_price
        ];
        $res=CartModel::insert($where);
        if($res){
            return $this->success(200,'ok');
        }else{
            return $this->error(1,'fail');
        }
    }
    //详情
    public function item(Request $request,$goods_id){

        //商品

        $key="num".$goods_id;
        if(Redis::get($key)){
            Redis::incr($key);
        }else{
            Redis::set($key,1);
        }
        $where=[
            'goods_clicknum'=>Redis::get($key)
        ];

        GoodsModel::where('goods_id',$goods_id)->update($where);

        $role_Info=GoodsModel::where('goods_id',$goods_id)->first();
        $role_Info->goods_images=trim( $role_Info->goods_images,',');
        $sku_id=SkuAttrValModel::where(['goods_id'=>$goods_id])->get('sku')->toArray();
        foreach ($sku_id as $k1=>&$v1) {
            $v1['sku']=explode(',',$v1['sku']);
            $attr_id = SkuValModel::select('attr_id')->whereIn('val_id', $v1['sku'])->get()->toArray();
            $att=SkuAttrModel::select('attr_id','attr_name')->whereIN('attr_id',$attr_id)->where('is_del',1)->get()->toArray();
        }
        foreach ($att as $k2=>&$v2) {
            $val=SkuValModel::where('attr_id',$v2['attr_id'])->get()->toarray();
            $v2['sku']=$val;
            foreach ($v2['sku'] as $k3=>&$v3) {
                foreach ($sku_id as $k4=>$v4) {
                    if(in_array($v3['val_id'],$v4['sku'])){
                        $v2['sku4'][$k3]=$v3;
                    }
               }
            }
        }
        $sav = SkuAttrValModel::where('goods_id',$goods_id)->first();

        return view('index.item',['role_Info'=>$role_Info,'sav'=>$att]);

    }
    //减购物车数量
    public function cartnumjian(Request $request){
        $buy_number = $request->post('buy_number');
        $cart_id = $request->post('cart_id');
        $numjian = CartModel::where('cart_id',$cart_id)->update(["buy_number"=>$buy_number]);
        if($numjian){
            return $this->success(200,'ok');
        }else{
            return $this->error(1,'fail');
        }
    }
    //加购物车数量
    public function cartnumjia(Request $request){
        $buy_number = $request->post('buy_number');
        $cart_id = $request->post('cart_id');
        $numjian = CartModel::where('cart_id',$cart_id)->update(["buy_number"=>$buy_number]);
        if($numjian){
            return $this->success(200,'ok');
        }else{
            return $this->error(1,'fail');
        }
    }
    //购物车总价
    public function money(Request $request){
        $goods_id = $request->post('goods_id');
        $goods_id = explode(',',$goods_id);
        $info = CartModel::whereIn('goods_id',$goods_id)->get(["goods_price","buy_number"]);
        $money=0;
        foreach($info as $k=>$v){
            $money += $v["goods_price"]*$v['buy_number'];
        }
        return $money;
    }
    //订单
    public function order(){
        $address = AddressModel::get();

        //查询所有收货地址  作为列表数据
        $addressInfo=$this->getAddressInfo();
        // dd($addressInfo);

        //查询所有省份  作为第一个下拉菜单的值  pid=0
        $res=$this->getAreaInfo(0);
        // $cityInfo=$this->getAreaInfo($addressInfo['province']);

        return view('index.order',['res'=>$res]);

        return view('index.order',['res'=>$res,'addressInfo'=>$addressInfo]);

       }

     //获取区域信息
    public function getAreaInfo($pid){
        // dd($pid);
        //实例化地区表
        $area_model=new AreaModel();
        //写满足的where条件
        $where=[
            ['pid','=',$pid]
        ];
        //查询地区表满足where的所有的数据，并将结果返回
        $info=$area_model->where($where)->get();
        // dump($info);
        return $info;
    }

     //获取地区
    public function getArea(request $request){
       $area_id=$request->post('area_id');
//        if($area_id == 0){
//            return view('Merchandise.Index.areaajax',['id'=>$area_id]);
//        }
        $info = $this->getAreaInfo($area_id);
        $option = "<option value='0'>--请选择--</option>";
        foreach($info as $k=>$v){
            $option.="<option value='".$v['area_id']."'>".$v['name']."</option>";
        }
        echo $option;

    }


      //获取区域信息
    public function getAddressInfo(){

        // $area_model = new AreaModel;
        // $area = $area_model->where('pid',0)->get();
        //$city = $area_model->where('pid',$area['area_id'])->get();


        $where=[
            ['user_id','=',$this->user_id()],
            ['is_del','=',1]
        ];
        $addressInfo=Addressmodel::where($where)->get();

        if(!empty($addressInfo)){
            $area=$addressInfo->toArray();
        }


        foreach($area as $k=>$v){
             $area[$k]['province']=AreaModel::where("area_id",$v['province'])->value("name");//根据id查市
             $area[$k]['city']=AreaModel::where("area_id",$v['city'])->value("name");//根据id查省
             $area[$k]['area']=AreaModel::where("area_id",$v['area'])->value("name");//根据id查区
            // dd($area);
         }



        return $area;
    }

    // 用户收货地址添加
    public function create(){
       $user_id=$this->user_id();
       $user_name = request()->post('user_name');
       $user_tel = request()->post('user_tel');
       $province = request()->post('province');
       $city = request()->post('city');
       $area = request()->post('area');
       // dump($user_name);
       // dump($user_tel);
       // dump($province);
       // dump($city);
       // dump($area);
       $data =[
            'user_id'=>$user_id,
            'user_name'=>$user_name,
            'user_tel'=>$user_tel,
            'province'=>$province,
            'city'=>$city,
            'area'=>$area
       ];
       // dd($data);
       $Address = new AddressModel;
       $Address->user_id=$data['user_id'];
       $Address->user_name=$data['user_name'];
       $Address->user_tel=$data['user_tel'];
       $Address->province=$data['province'];
       $Address->city=$data['city'];
       $Address->area=$data['area'];
       $res = $Address->save();
       // dd($res);
       if($res){
            return['code'=>'0','mag'=>"成功"];
        }else{
            return['code'=>'1','mag'=>"失败"];
        }
    }
    // 三级联动
    public function area(Request $request)
    {
        $data = $request->all();
        // print_r($data);die;
        $where = [
            ['pid' => $data]
        ];
        // print_r($where);die;
        $son = AreaModel::where(['pid' => $data])->get()->toArray();

        //空字符串
        $str='<option value="">请选择...</option>';
        //循环
        foreach ($son as $k => $v) {
            $str.='<option value="'.$v['area_id'].'">'.$v['name'].'</option>';
        }
        if($son !== false){
            return json_encode(['status'=>'200','msg'=>'ok','data'=>$str]);
        }else{
            return json_encode(['status'=>'100','msg'=>'no']);
        }
    }
    //无限极
    public function cate(){
    }
}
