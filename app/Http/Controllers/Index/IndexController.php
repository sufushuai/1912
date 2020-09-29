<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Common;
use Illuminate\Http\Request;
use App\Model\BrandModel;
use App\Model\AdModel;
use App\Model\SlideModel;
use App\Model\CategoryModel;
use App\Model\GoodsModel;
use App\Model\AreaModel;

class IndexController extends Common
{
    //首页
    public function index(){

        $slide=SlideModel::where('is_del',1)->limit(5)->get();
        $ad=AdModel::where('is_del',1)->limit(5)->get();
        $brand=BrandModel::where('status',1)->limit(10)->get();
          $where=[
                    'is_hot'=>1,
                    'is_show'=>1,
                    'is_new'=>1
                ];
        $guess=GoodsModel::where($where)->limit(12)->get()->toArray();
        //$guess=collect($guess)->toArray();
        $guess=array_chunk($guess,2,true);
        //dump($guess);die;
        $obj = new CategoryModel;
        $where=[
            ['p_id','=',0],
        ];
        $category=$obj->where($where)->limit(6)->get();

        // dd($category);
        return view('index.index',['brand'=>$brand,'ad'=>$ad,'slide'=>$slide,'category'=>$category,'guess'=>$guess]);
    }
 
    //购物车
    public function cart(){
        return view('index.cart');
    }
    //详情
    public function item(Request $request,$goods_id){

        $role_Info=GoodsModel::where('goods_id',$goods_id)->first();

        return view('index.item',['role_Info'=>$role_Info]);

    }
    //订单
    public function order(){
        //查询所有收货地址  作为列表数据
        $addressInfo=$this->getAddressInfo();
        // dd($addressInfo);

        //查询所有省份  作为第一个下拉菜单的值  pid=0
        $res=$this->getAreaInfo(0);
        // $cityInfo=$this->getAreaInfo($addressInfo['province']);

        return view('index.order',['addressInfo'=>$addressInfo]);
        
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
        $info=$area_model->where($where)->select();
        // dump($info);
        return $info;
    }

     //获取地区
    public function getArea(){
        //接受传过来的id
        $area_id=request()->post("area_id");
        $info=$this->getAreaInfo($area_id);//获取市
        // dump($info);
        //并将结果处理成json
        echo json_encode($info);
    }


      //获取区域信息
    public function getAddressInfo(){
        $area_model = new AreaModel;
        $area = $area_model->where('pid',0)->get();
        //$city = $area_model->where('pid',$area['area_id'])->get();
      
        
        foreach($area as $k=>$v){
             $area[$k]['province']=$area_model->where("area_id",$v['province'])->value("name");//根据id查市
             $area[$k]['city']=$area_model->where("area_id",$v['city'])->value("name");//根据id查省
             $area[$k]['area']=$area_model->where("area_id",$v['area'])->value("name");//根据id查区
            // dd($area);
         }
        
       
        return $area;
    }

    // 用户收货地址
    public function create(){
        $provinceInfo=AreaModel::where(['pid'=>0])->get();
        print_r($provinceInfo);die;
        return view('index.order',['data'=>$provinceInfo]);
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
    public function cate(){}
}
