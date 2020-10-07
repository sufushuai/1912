<?php

namespace App\Http\Controllers\Man;

use App\Http\Controllers\Common;
use App\Model\PerinfoModel;
use Illuminate\Http\Request;
use App\Model\AreaModel;
use App\Model\CategoryModel;
use App\Model\AddressModel;

class ManController extends Common
{
    /**
     * 个人中心
     */
    public function index(){
        $floor1=CategoryModel::where('p_id',0)->get();
        return view("man/index",compact("floor1"));
    }
    /**
     *我的订单
     */
    public function pay(){
        $floor1=CategoryModel::where('p_id',0)->get();

        return view("man/pay",compact("floor1"));
    }

    /**
     *  浏览历史
    */
    public function history(){
        $floor1=CategoryModel::where('p_id',0)->get();
        
        return view("man/history",compact("floor1"));
    }
    /**
    * 优惠卷
     */
    public function coupon(){
        $floor1=CategoryModel::where('p_id',0)->get();

        return view("man/coupon",compact("floor1"));
    }
    /**
     * 地址管理
     */
    public function address(){
        $address = AddressModel::get();

        //查询所有收货地址  作为列表数据
        $addressInfo=$this->getAddressInfo();
        // dd($addressInfo);

        //查询所有省份  作为第一个下拉菜单的值  pid=0
        $res=$this->getAreaInfo(0);
        $floor1=CategoryModel::where('p_id',0)->get();

        return view("man/address",compact("floor1",'addressInfo','res'));
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
    public function add(){
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


    public function del(){
        $add_id=request()->post('add_id');
        // dd($add_id);
        $res = AddressModel::where(['add_id'=>$add_id])->update(['is_del'=>2]);
        // dd($res);
        if($res){
            return['code'=>'0','mag'=>"成功"];
        }else{
            return['code'=>'1','mag'=>"失败"];
        }
    }

    public function update($id){
        $data = AddressModel::where(['add_id'=>$id])->first();
        // echo $data;
        $address = AddressModel::get();

        //查询所有收货地址  作为列表数据
        $addressInfo=$this->getAddressInfo();
        // dd($addressInfo);

        //查询所有省份  作为第一个下拉菜单的值  pid=0
        $res=$this->getAreaInfo(0);
        // $cityInfo=$this->getAreaInfo($addressInfo['province']);
        $floor1=CategoryModel::where('p_id',0)->get();
        return view('man.update',['data'=>$data,'res'=>$res,'addressInfo'=>$addressInfo,'floor1'=>$floor1]);
    }

    public function updatedo(){
       $add_id=request()->post('add_id');
       $user_id=$this->user_id();
       $user_name = request()->post('user_name');
       $user_tel = request()->post('user_tel');
       $province = request()->post('province');
       $city = request()->post('city');
       $area = request()->post('area');
       // dump($add_id);
        // dump($user_name);
       // dump($user_tel);
       // dump($province);
       // dump($city);
       // dump($area);
       $data =[
            'add_id'=>$add_id,
            'user_id'=>$user_id,
            'user_name'=>$user_name,
            'user_tel'=>$user_tel,
            'province'=>$province,
            'city'=>$city,
            'area'=>$area
       ];

       $where=[
            ['add_id','=',$add_id]
       ];

       //$address = new AddressModel;
       $res = AddressModel::where($where)->update($data);
       // dd($res);s

       if($res){
            return['code'=>'0','mag'=>"成功"];
        }else{
            return['code'=>'1','mag'=>"失败"];
        }

    }

    //默认
    public function default($id){
        // echo 111;
         //接受收货地址
        $addid=request()->post('add_id');
        //实例化对象
        $address_model=new AddressModel();
        //获取用户id
        $user_id=$this->user_id();
        //写满足的where条件
        $where=[
            ['user_id','=',$user_id],//用户的id
            ['is_del','=',1]//没有被删除
        ];
        //根据收货id将把这个用户的默认改为1 其他的收货地址改为2
        $address_model->where($where)->update(['is_default'=>2]);//将其他地址改为2
        $res=$address_model->where('add_id',$id)->update(['is_default'=>1]);//将默认改为1
        // 判断
        if($res){
            // echo '成功';
            return redirect('/man/address');
        }else{
            echo '失败';
        }
    }


}
