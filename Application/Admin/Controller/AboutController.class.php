<?php
namespace Admin\Controller;
use Think\Controller;
class AboutController extends CommonController {

    //单页面
    public function about(){
        $about = M('About');

        $data = $about->where('id=1')->find();       //查询单条id

        if(IS_POST){
            $about->create();
            $about->where('id=1')->save();             //修改数据
            $this->success('修改成功',U('Admin/About/about'));die;
        }

        $this->assign('data',$data);
        $this->display();
    }










}