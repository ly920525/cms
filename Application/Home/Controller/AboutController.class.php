<?php
namespace Home\Controller;

use Think\Controller;

class AboutController extends CommonController{


    public function about(){           //我们是谁
        $about = M('About');

        $data = $about->where('id=1')->find();       //查询单条id

        $this->assign('data',$data);

        $this->display();
    }







}