<?php
namespace Home\Controller;

use Think\Controller;

class CasesController extends CommonController{

    public function cases(){
        $cases = M('cases');
        $data=$cases->order('sort')->select();
        $this->assign('data',$data);

        //var_dump($lists);die;

        $issuer=I('get.issuer','0');//获取GEI issuer值 如果没有默认为0
        $this->assign('issuer',$issuer);

        if($_GET['issuer']){
            $cc = M('cases_content');
            $count = $cc->where('pid='.$issuer)->count();//查询满足条件总记录数
            //var_dump($count);die;
            $Page  = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数()
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
            $lists = $cc->where('pid='.$issuer)->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        }else{
            $cc = M('cases_content');
            $count = $cc->where('pid='.$issuer)->count();//查询满足条件总记录数
            $Page  = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数()
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
            $lists = $cc->where('pid='.$issuer)->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
            //var_dump($lists);die;
        }

        $this->assign('lists',$lists);
        $this->display();

    }
}