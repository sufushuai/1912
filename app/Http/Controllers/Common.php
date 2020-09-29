<?php

namespace App\Http\Controllers;

use App\Model\AreaModel;
use App\Model\PerinfoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Common extends Controller
{
    /**
     **@desc 无限极分类
     **@param $array 要做处理的处理
     **@param $pid 父类id 默认为0
     **@param $level 级别
     */
    function getCateInfo1($array, $pid = 0, $level= 1){
        static $info = [];
        foreach ($array as $key => &$value) {
            if ($value['p_id'] == $pid) {
                $value['level'] = $level;
                $info[] = $value;
                $this->getCateInfo1($array, $value['cate_id'], $value['level']+1);
            }
            //dump($value);
        }
        return $info;
    }

    /**
     **@desc 无限极分类(获取所有的IDs)
     **@param $array 要做处理的处理
     **@param $pid 父类id 默认为0
     */
    public function getcateInfo2($array,$pid=0){
        $info=[];

        foreach($array as $k=>$v){
            if($v['p_id']==$pid){
                //dump($v['p_id']);
                $v['son']=$this->getcateInfo2($array,$v['cate_id']);
                $info[]=$v;
            }

        }
        return $info;
    }

    /**
     **@desc 无限极分类(获取所有的IDs)
     **@param $array 要做处理的处理
     **@param $pid 父类id 默认为0
     */
    function getCateIds($array,$pid = 0)
    {
        // 定义一个数组，放所有的分类ID
        static $cateIds = [];
        $cateIds[$pid] = $pid;
        //dd($cateIds);
        // 将当前的pid塞进数组中
        foreach ($array as $key => $value) {
            if ($value['p_id'] == $pid) {
                $cateIds[$value['cate_id']] = $value['cate_id'];
                $this->getCateIds($array, $value['cate_id']);
            }
        }
        return $cateIds;
    }
    /**
     * 封装成功时的方法
     * @param $errno
     * @param $msg
     * @param array $data
     * @return array
     */
    protected function success($data=[],$code=200,$msg='success'){
        return [
            'code'=>$code,
            'msg'=>$msg,
            'data'=>$data,
        ];
    }
    /**
     * 封装失败时的方法
     */
    protected function error($msg='',$code=1,$data=[]){
        return [
            'code'=>$code,
            'msg'=>$msg,
            'data'=>$data,
        ];
    }
    /**
     *获取区域信息
    */
    function getAreaInfo($pid){
        $where=[
            ['pid','=',$pid]
        ];
        return Areamodel::where($where)->get();
    }
    /**
    *获取用户id
     */
    public function user_id(){
        return Session::get("id");
    }

}
