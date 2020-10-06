<?php

namespace App\Http\Controllers\Man;

use App\Http\Controllers\Common;
use App\Model\PerinfoModel;
use Illuminate\Http\Request;
use App\Model\AreaModel;
use App\Model\CategoryModel;

class PersonalController extends Common
{
    /**
     *  个人信息
     */
    public function perinfo(){
        $area=$this->getAreaInfo(0);
        $floor1=CategoryModel::where('p_id',0)->get();
        return view("man/perinfo/perinfo",compact("area","floor1"));
    }

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
        $user_id=$this->user_id();
        $info_name=$request->post("info_name");
        $info_tel=$request->post("info_tel");
        $info_sex=$request->post("info_sex");
        $province=$request->post("province");
        $city=$request->post("city");
        $area=$request->post("area");
        $info_data=[
            "user_id"=>$user_id,
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
        $where=[
            "user_id"=>$this->user_id(),
        ];
        $data_info = PerinfoModel::where($where)->orderBy('info_id','desc')->get();

        foreach($data_info as $k=>$v){
            $data_info[$k]['province'] = AreaModel::where('area_id',$v['province'])->value("name");
            $data_info[$k]['city'] =AreaModel::where('area_id',$v['city'])->value("name");
            $data_info[$k]['area'] = AreaModel::where('area_id',$v['area'])->value("name");
        }
        $floor1=CategoryModel::where('p_id',0)->get();

        return view("man/perinfo/index",compact("data_info","floor1"));
    }
    /**
     *个人信息----修改页面
     */
    public function per_edit(Request $request){
        $info_id=$request->post("info_id");
        $info_edit=PerinfoModel::find($info_id);
        $area=$this->getAreaInfo(0);
        $floor1=CategoryModel::where('p_id',0)->get();
        return view("man/perinfo/edit",compact("info_edit","area","floor1"));
    }
    /**
     **个人信息 ---修改逻辑
     */
    public function per_update(Request $request){
        $user_id=$this->user_id();
        $info_id=$request->post("info_id");
        $info_name=$request->post("info_name");
        $info_tel=$request->post("info_tel");
        $info_sex=$request->post("info_sex");
        $province=$request->post("province");
        $city=$request->post("city");
        $area=$request->post("area");

        $info_data=[
            "user_id"=>$user_id,
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
}
