<?php

namespace App\Http\Controllers\Man;

use App\Http\Controllers\Common;
use App\Model\PerinfoModel;
use Illuminate\Http\Request;
use App\Model\AreaModel;

class ManController extends Common
{
    /**
     * 个人中心
     */
    public function index(){
        return view("man/index");
    }
    /**
     *代付款
     */
    public function pay(){
        return view("man/pay");
    }
    /**
     * 代发货
     */
    public function send(){
        return view("man/send");
    }
    /**
     *  个人信息
     */
    public function perinfo(){
        $area=$this->getAreaInfo(0);
        return view("man/perinfo/perinfo",compact("area"));
    }

    //三级联动


    //三级联动
    public function getArea(Request $request){
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
    /**
    *个人信息-----添加
     */
    public function per_add(Request $request){
        $info_name=$request->post("info_name");
        $info_tel=$request->post("info_tel");
        $info_sex=$request->post("info_sex");
        $province=$request->post("province");
        $city=$request->post("city");
        $area=$request->post("area");
        $info_data=[
            "info_name"=>$info_name,
            "info_tel"=>$info_tel,
            "info_sex"=>$info_sex,
            "province"=>$province,
            "city"=>$city,
            "area"=>$area
        ];
        $info=PerinfoModel::insert($info_data);
        if($info){
            return $this->success();
        }else{
            return $this->error('添加失败');
        }
    }
    /**
     *个人信息-----展示
     */
    public function per_index(Request $request){

        $data_info = PerinfoModel::orderBy('info_id','desc')->get();

        foreach($data_info as $k=>$v){
            $data_info[$k]['province'] = AreaModel::where('area_id',$v['province'])->value("name");
            $data_info[$k]['city'] =AreaModel::where('area_id',$v['city'])->value("name");
            $data_info[$k]['area'] = AreaModel::where('area_id',$v['area'])->value("name");
        }
        return view("man/perinfo/index",compact("data_info"));
    }
    /**
     *个人信息----修改页面
    */
    public function per_edit(Request $request){
        $info_id=$request->post("info_id");
        $info_edit=PerinfoModel::find($info_id);
        $area=$this->getAreaInfo(0);
        return view("man/perinfo/edit",compact("info_edit","area"));
    }
    /**
     **个人信息 ---修改逻辑
    */
    public function per_update(Request $request){
        $info_id=$request->post("info_id");
        $info_name=$request->post("info_name");
        $info_tel=$request->post("info_tel");
        $info_sex=$request->post("info_sex");
        $province=$request->post("province");
        $city=$request->post("city");
        $area=$request->post("area");

        $info_data=[
            "info_name"=>$info_name,
            "info_tel"=>$info_tel,
            "info_sex"=>$info_sex,
            "province"=>$province,
            "city"=>$city,
            "area"=>$area
        ];
        $info_edit=PerinfoModel::where("info_id",$info_id)->update($info_data);
        if($info_edit){
            return $this->success();
        }else{
            return $this->error("修改失败");
        }
    }
    /**
     *  浏览历史
    */
    public function history(){
        return view("man/history");
    }
    /**
    * 优惠卷
     */
    public function coupon(){
        return view("man/coupon");
    }
    /**
     * 收藏
     */
    public function collect(){
        return view("man/collect");
    }
    /**
     * 地址管理
     */
    public function address(){
        return view("man/address");
    }
    /**
     *待评价
    */
    public function evaluate(){
        return view("man/evaluate");
    }
    /**
     *待收货
     */
    public function received(){
        return view("man/evaluate");
    }

}
