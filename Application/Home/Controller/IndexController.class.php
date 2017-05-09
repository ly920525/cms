<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends CommonController{
    public function index(){
        $column = M('Column');
        $data = $column->select();              //查询首页轮播图片
        $this->assign('data',$data);

        $cata=$this->digui('Product',0,'sort asc');         //调用产品列表
        $this->assign('cata',$cata);

        $issuer=I('get.issuer',24);//获取GEI issuer值 如果没有默认为0
        $this->assign('issuer',$issuer);

        if($_GET['issuer']){
            $pc=M('Product_content');
            $count = $pc->where('pid='.$issuer)->count();//查询满足条件总记录数
            //var_dump($count);die;
            $Page  = new \Think\Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数()
            $Page->setConfig('header','<span>共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
            $Page->setConfig('prev','上一页');
            $Page->setConfig('next','下一页');
            $Page->setConfig('first','首页');
            $Page->setConfig('last','尾页');
            $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
            $Page->lastSuffix = false;//最后一页不显示为总页数
            $show       = $Page->show();// 分页显示输出
            //dump($Page);
            $this->assign('page',$show);// 赋值分页输出
            $listss = $pc->where('pid='.$issuer)->order('time desc, id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        }else{
            $pc=M('Product_content');
            $count = $pc->where('pid='.$issuer)->count();//查询满足条件总记录数
            $Page  = new \Think\Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数()
            $Page->setConfig('header','<span>共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
            $Page->setConfig('prev','上一页');
            $Page->setConfig('next','下一页');
            $Page->setConfig('first','首页');
            $Page->setConfig('last','尾页');
            $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
            $Page->lastSuffix = false;//最后一页不显示为总页数
            $show       = $Page->show();// 分页显示输出
            //dump($Page);
            $this->assign('page',$show);// 赋值分页输出
            $listss = $pc->where('pid='.$issuer)->order('time desc, id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
            //var_dump($lists);die;
        }
        $this->assign('listss',$listss);

        $advantage = M('Advantage');                    //查询优势
        $Page  = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数()
        $sele = $advantage->order('time desc, id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('sele',$sele);

        $ai = M('Advantage_imgs');                    //查询优势图片
        $Page  = new \Think\Page($count,7);// 实例化分页类 传入总记录数和每页显示的记录数()
        $selec = $ai->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('selec',$selec);

        $cc = M('cases_content');                   //查询客户案例
        $count = $cc->count();//查询满足条件总记录数
        //var_dump($count);die;
        $Page  = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数()
        $lists = $cc->order('time desc, id desc')->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('lists',$lists);


        $hc = M('honor_content');                   //查询资质荣誉
        $count = $hc->count();//查询满足条件总记录数
        //var_dump($count);die;
        $Page  = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数()
        $list = $hc->order('time desc, id desc')->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);


        $nc = M('news_content');                    //查询新闻
        $count = $nc->count();//查询满足条件总记录数
        //var_dump($count);die;
        $Page  = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数()
        $lis = $nc->order('time desc, id desc')->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('lis',$lis);

        $this->display();
    }




}