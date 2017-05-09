<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $this->display();
    }
    public function info(){
        //初始化数组
        $count=array();
        $admin = M('admin'); // 实例化message对象
        $message = M('message'); // 实例化message对象
        $log=M('log');
        $visit=M('visit_log');
        $count['admin']  = $admin->count();// 查询满足要求的总记录数
        $count['message']  = $message->count();// 查询满足要求的总记录数
        $map['type']=1;                     //type分2类 一种是记录数量1  一种不记录0
        $count['log']  = $log->where($map)->count();// 查询满足要求的总记录数
        $map1['type']=0;
        $map1['time']=array('like',date('Y-m-d').' %');
        $count['visit']=$visit->where($map1)->count();
        $this->assign('count',$count);// 赋值数据集

        //获取行为信息
        //0/蓝色 表示修改 更新操作
        // 1/绿色  表示新增 成功操作
        // 2/红色  表示失败 删除操作
        // 3/紫色  表示警告 提示操作
        // 4/灰色   表示不太重要的操作
        $day=getday();


        $data=$log->order('time DESC')->limit(5)->select();
        $data1=$message->order('time DESC')->limit(5)->select();
        $data2=$visit->where(array('type'=>0))->count();
        $this->assign('data',$data);
        $this->assign('data1',$data1);
        $this->assign('data2',$data2);
        $this->assign('day',$day);
        $this->display();
    }

}