<?php
namespace Home\Controller;

use Think\Controller;

class ProductController extends CommonController{

    public function product(){
        $cata=$this->digui('Product',0,'sort asc');
        //var_dump();die;
        $this->assign('cata',$cata);

        $ke = $cata[0]['erji'][0]['id'];
        $issuer=I('get.issuer',$ke);//获取GEI issuer值 如果没有默认为0
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
            $lists = $pc->where('pid='.$issuer)->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
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
            $lists = $pc->where('pid='.$issuer)->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
            //var_dump($lists);die;
        }

        $this->assign('lists',$lists);

        $this->display();
    }

    public function product_details(){
        $product=M('Product');

        $cata=$this->digui('Product',0,'sort asc');
        $this->assign('cata',$cata);

        //排序
        if(IS_POST){
            foreach($_POST['ordid'] as $key => $val){
                $product->sort=$_POST['ord'][$key];
                $product->where("id=".$val)->save();
            }
            $this->redirect('Product/product');die;
        }

        $issuer=I('get.issuer');//获取GEI issuer值 如果没有默认为0
        $this->assign('issuer',$issuer);

        $id = I('get.id');
        //var_dump($id);
        $pc = M('Product_content');
        $list = $pc->where('id='.$id)->find();          //查询二级产品详情
        $this->assign('list',$list);

        $pis = M('Product_imgs');
        $lists = $pis->where('pid='.$id)->select();
        //var_dump($lists);die;
        $this->assign('lists',$lists);

        $this->display();
    }






}