<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Common extends Controller
{
    /**
     **@desc 无限极分类
     **@param $array 要做处理的处理
     **@param $pid 父类id 默认为0
     **@param $level 级别
     */
    function getCateInfo1($array, $pid = 0, $level= 1)
    {
        static $info = [];
        foreach ($array as $key => $value) {
            if ($value['pid'] == $pid) {
                $info[] = $value;
                $value['level'] = $level;
                getCateInfo1($array, $value['cate_id'], $value['level']+1);
            }
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
            if($v['pid']==$pid){
                $v['son']=getcateInfo2($array,$v['cate_id']);
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
    function getCateIds($array, $pid = 0)
    {
        // 定义一个数组，放所有的分类ID
        static $cateIds = [];
        $cateIds[$pid] = $pid;
        // 将当前的pid塞进数组中
        foreach ($array as $key => $value) {
            if ($value['pid'] == $pid) {
                $cateIds[$value['cate_id']] = $value['cate_id'];
                getCateIds($array, $value['cate_id']);
            }
        }
        return $cateIds;
    }


}
