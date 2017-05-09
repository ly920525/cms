<?php
namespace Admin\Controller;
use Think\Controller;
class ColumnController extends CommonController {

                        //导航菜单

    //导航查询
    public function cate(){
        $cate=M('Cate');

        $cat=$this->digui('Cate',0,'sort asc');

        //排序
        if(IS_POST){
            foreach($_POST['ordid'] as $key => $val){
                $cate->sort=$_POST['ord'][$key];
                $cate->where("id=".$val)->save();
            }
            $this->redirect('Column/cate');die;
        }

        $id=I("get.id");
        if($id){
            $cates=$cate->find($id);
            if($cates['pid']==0){
                $cate->delete($id);
                $cate->where("pid=".$id)->delete();
            }else{
                $cate->delete($id);
            }

            $this->redirect('Column/cate');
        }

        //var_dump($arr);
        $this->assign('cat',$cat);
        $this->display();
    }

//    导航添加
    public function cate_add(){
        $cate=M('Cate');
        $data=$cate->select();          //查询全部数据


        //var_dump($dat);die;
        $isshow = $_POST['isshow'];
        if(IS_POST){
            $cate->create();
            $cate->pid=$_POST['xiala'];
            $cate->fangfa=$_POST['fangfa'];
            if($isshow=='否'){
                $cate->state='否';
            }else{
                $cate->state='是';
            }
            $cate->create_time=date('Y-m-d H:i:s');
            //var_dump($fa);die;
            $cate->add();
            $this->success('添加成功',U('Admin/Column/cate'));die;
        }

        $this->assign('data',$data);
        $this->display();
    }

    //修改导航
    public function cate_save(){
        $cate=M('Cate');
        $data=$cate->where('pid=0')->select();

        $id=I('get.id');
        $dat=$cate->find($id);         //查询修改前的单条ID

        $id=I('get.id');
        $dat=$cate->find($id);
        //var_dump($id);die;

        $isshow = $_POST['isshow'];
        if(IS_POST){
            $cate->create();
            $cate->pid=$_POST['xiala'];
            $cate->fangfa=$_POST['fangfa'];
            if($isshow=='否'){
                $cate->state='否';
            }elseif($isshow==''){
                $cate->state=$dat['state'];
            }elseif($isshow=='是'){
                $cate->state='是';
            }
            $cate->create_time=date('Y-m-d H:i:s');
            $cate->where('id='.$id)->save();
            $this->success('修改成功',U('Admin/Column/cate'));die;

        }

        $this->assign('data',$data);
        $this->assign('dat',$dat);
        $this->display();
    }

                        //首页轮播
    //查询数据
    public function column(){
        $column = M('Column');    // 实例化Service对象
        $lists = $column->select();        //查询列表

        $this->assign('lists',$lists);  // 赋值数据集

        $this->display();   // 输出模板
    }

    //添加数据
    public function column_add(){
        $isshow = $_POST['isshow'];
        $column = M('Column');
        if(IS_POST){
            $column->create();          // 创建service数据对象，默认通过表单提交的数据进行创建
            //var_dump($id_sort);die;
            if($_FILES['file']['error']==0){
                $img = $this->uploadOne($_FILES['file']);
                $column->img = $img;
            }else{
                $column->img = "";
            }
            $column->create_time = date('Y-m-d H:i:s');
            if($isshow=='否'){
                $column->state='否';
            }else{
                $column->state='是';
            }

            $column->add();            // 把数据对象添加到数据库
            $this->success('添加成功',U('Admin/Column/column'));die;
        }

        $this->display();
    }

    //修改数据
    public function column_save(){
        $isshow = $_POST['isshow'];
        $column = M('Column');
        $data = $column->where('id='.I('get.id'))->find();          //查询修改的单条ID

        if(IS_POST){
            $column->create();         // 创建service数据对象，默认通过表单提交的数据进行创建
            if($_FILES['file']['error']==0){
                $img=$this->uploadOne($_FILES['file']);
                $column->img=$img;
            }else{
                $column->img=$data['img'];
            }
            //var_dump($data['state']);die;
            if($isshow=='否'){
                $column->state='否';
            }elseif($isshow==''){
                $column->state=$data['state'];
            }elseif($isshow=='是'){
                $column->state='是';
            }
            $column->create_time = date('Y-m-d H:i:s');
            $column->where('id='.I('get.id'))->save();     // 把数据对象添加到数据库
            $this->success('修改成功',U('Admin/Column/column'));die;
        }

        $this->assign('data',$data);
        $this->display();
    }

   //删除数据
    public function delete(){
        $column = M('Column');
        $id=I('get.id');
        $column->where('id='.$id)->delete();       //删除单条id

        $this->redirect('Column/column');
    }


    //友情链接管理
    public function link(){
        $array=array();
        $link = M('link');
        $data =$link->where($array)->order('status')->select();//依表link|status字段排序
        $this->assign('data',$data);
        $this->display();
    }

    public function linkadd(){
        if(IS_POST){
            $images="";
            if($_FILES['file']['error']==0){
                $images=$this->uploadOne($_FILES['file']);
            }
            $link = M('link');
            $link->create();
            $data['title']=$_POST['title'];
            $data['link_img']=$images;
            $data['url']=$_POST['url'];
            $data['create_time']=time();
            $data['status']=$_POST['status'];
            $list=$link->data($data)->add();

            if($list){
                $this->redirect('Column/link');die;
            }else{
                $this->error();
            }
        }
        $this->display();
    }

    public function linkedit(){
        $id = I('get.id');
        $link = M('link');
        $data=$link->where('id='.$id)->find();
        $this->assign('data',$data);
        if(IS_POST){
            $images=$data['link_img'];
            if($_FILES['file']['error']==0){
                $images=$this->uploadOne($_FILES['file']);
            }
            $data['title']=$_POST['title'];
            $data['link_img']=$images;
            $data['url']=$_POST['url'];
            $data['status']=$_POST['status'];
            $list=$link->where('id='.$id)->save($data);
            if($list){
                $this->redirect('Column/link');die;
            }else{
                $this->error();die;
            }
        }
        $this->display();
    }

    public function del(){
        $link=M('link');
        $row=$link->where('id='.I('get.id'))->delete();
        if($row){
            $this->redirect('/Admin/Column/link');die;
        }else{
            $this->error('删除失败');
        }

    }
}