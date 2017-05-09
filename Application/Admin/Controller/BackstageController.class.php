<?php
namespace Admin\Controller;
use Think\Controller;
class BackstageController extends CommonController {
            //后台栏目

    //栏目查询
    public function backstage(){
        $backstage = M('Backstage');

        $cate=$this->digui('Backstage',0,'sort asc');           //调用多级栏目递归查询
        //print_r($cate); die;
        $this->assign('cate',$cate);

        //排序
        if(IS_POST){
            foreach($_POST['ordid'] as $key => $val){
                $backstage->sort=$_POST['ord'][$key];
                $backstage->where("id=".$val)->save();
            }
            $this->redirect('Backstage/backstage');die;
        }

        //删除数据
        $id=I("get.id");
        if($id){
            $backstages=$backstage->find($id);
            if($backstages['pid']==0){
                $backstage->delete($id);
                $backstage->where("pid=".$id)->delete();
            }else{
                $backstage->delete($id);
            }

            $this->redirect('Backstage/backstage');
        }

        $this->display();
    }


//    栏目添加
    public function backstage_add(){
        $cate=$this->digui('Backstage',0,'sort asc');           //调用多级栏目递归查询
        //print_r($cate); die;
        $this->assign('cate',$cate);

        $icon = M('Backstage_icon');
        $datas = $icon->select();           //查询小图标数据

        $backstage=M('Backstage');
        $isshow = $_POST['isshow'];
        if(IS_POST){
            $backstage->create();
            $backstage->pid=$_POST['xiala'];
            //var_dump($b);die;
            $b = $icon->where('id='.$_POST['xialas'])->find();
            if($b){
                $backstage->icon=$b['icon'];
            }else{
                $backstage->icon='';
            }
            //var_dump($b);die;
            $backstage->fangfa=$_POST['fangfa'];
            if($isshow=='否'){
                $backstage->state='否';
            }else{
                $backstage->state='是';
            }
            $backstage->create_time=date('Y-m-d H:i:s');
            //var_dump($fa);die;
            $backstage->add();
            $this->success('添加成功',U('Admin/Backstage/backstage'));die;
        }

        $this->assign('datas',$datas);

        $this->display();
    }

    //栏目修改
    public function backstage_save(){
        $cate=$this->digui('Backstage',0,'sort asc');           //调用多级栏目递归查询
        //print_r($cate); die;
        $this->assign('cate',$cate);

        $backstage=M('Backstage');

        $icon = M('Backstage_icon');
        $datas = $icon->select();           //查询小图标数据

        $id=I('get.id');
        $dat=$backstage->find($id);         //查询修改前的单条ID
       // var_dump($dat);die;
        $this->assign('dat',$dat);

        $isshow = $_POST['isshow'];
        if(IS_POST){
            $backstage->create();
            $b = $icon->where('id='.$_POST['xialas'])->find();   //查询小图标单条数据
            if($b){
                $backstage->icon=$b['icon'];
            }else{
                $backstage->icon=$dat['icon'];
            }
            $backstage->pid=$_POST['xiala'];
            $backstage->fangfa=$_POST['fangfa'];
            if($isshow=='否'){
                $backstage->state='否';
            }elseif($isshow==''){
                $backstage->state=$dat['state'];
            }elseif($isshow=='是'){
                $backstage->state='是';
            }
            $backstage->create_time=date('Y-m-d H:i:s');
            $backstage->where('id='.$id)->save();
            $this->success('修改成功',U('Admin/Backstage/backstage'));die;

        }

        $this->assign('datas',$datas);

        $this->display();
    }

            //检测重复栏目
    public function jiance(){
        if(IS_AJAX){
            $title=$_POST['title'];
            $backstage=M('Backstage');
            $data=$backstage->where("title='$title'")->find();
            if($data){
                echo 1;die;
            }
        }

    }


}