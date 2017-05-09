<?php
namespace Admin\Controller;
use Think\Controller;
class HonorController extends CommonController {
    //资质荣誉-分类管理
    public function honor(){
        //初始化数组
        $arr=array();
        $honor = M('honor'); // 实例化User对象
        $count      = $honor->where($arr)->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(n)
        $show       = $Page->show();// 分页显示输出
        $list = $honor->where($arr)->order('sort')->limit($Page->firstRow.','.$Page->listRows)->select();
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $this->assign('list',$list);// 赋值数据集
        $this->assign('Page',$show);// 赋值分页输出
        //var_dump($list);die;

        if(IS_POST){
            $honor = M('honor');
            $honor->create();
            $data['type']=strip_tags($_POST['title']);
            $data['fang_fa']=strip_tags($_POST['fang_fa']);
            $data['sort']=strip_tags($_POST['sort']);
            $honor->data($data)->add();
            $this->success('添加成功',U('Admin/Honor/honor'));die;
        }

        $this->display();
    }


    public function honor_save(){             //修改数据
        $id = I('get.id');
        $honor =M('honor');
        $sort = $honor->where('id='.$id)->find();
        $this->assign('sort',$sort);


        if(IS_POST){
            $honor->create();                               //修改一级数据
            $data['type']=strip_tags($_POST['title']);
            $data['fang_fa']=strip_tags($_POST['fang_fa']);
            $data['sort']=strip_tags($_POST['sort']);
            $honor->where('id='.$id)->save($data);

            $issuer=$_POST['title'];        //修改二级的分类
            //var_dump($issuer);die;
            $hc =M('honor_content');
            $hc->create();
            $data['issuer']=$issuer;
            $hc->where('pid='.$sort['sort'])->save($data);

            $this->success('修改成功',U('Admin/Honor/honor'));die;
        }

        $this->display();

    }

    //检测重复栏目
    public function jiances(){
        $honor=M('Honor');
        if(IS_AJAX){
            $sort=$_POST['sort'];
            $data=$honor->where("sort=".$sort)->find();
            //var_dump($data);die;
            if($data){
                echo 1;die;
            }
        }

    }

    public function honorel(){              //单条删除数据
        $id = I('get.id');
        $honor=M('honor');
        $find=$honor->where('id='.$id)->find();
        //var_dump($find);die;

        $honor->where('id='.$id)->delete();
        $hc=M('honor_content');
        $hc->where('pid='.$find['sort'])->delete();
        $this->redirect('Honor/honor');die;
    }

    /*
 * 资质荣誉-查询
 */
    public function qualification(){
        $honor = M('honor_content'); // 实例化honor_content对象
        //初始化数组
        $arr=array();
        $count      = $honor->where($arr)->count();// 查询满足要求的总记录数
        import('ORG.Util.Page');
        $Page       = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数(n)
        $Page->setConfig('header','<span class="row">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('first','首页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        $Page->lastSuffix = false;//最后一页不显示为总页数
        $show       = $Page->show();// 分页显示输出
        $list = $honor->where($arr)->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $this->assign('list',$list);// 赋值数据集
        $this->assign('Page',$show);// 赋值分页输出
        $this->display(); // 输出模板
        /*
         * 全选删除
         */
        if(isset($_POST['id'])){
            $idd=implode(",",$_POST['id']);
            $honor->delete($idd);
            $this->redirect('Honor/qualification');die;
        }
    }

    /*
     * 资质荣誉-添加数据
     */
    public function qualification_add(){
        //初始化数组
        $arr=array();
        $type = M('Honor');
        $sort = $type->where($arr)->order('sort')->select();
        //var_dump($sort);die;
        $this->assign('sort',$sort);// 赋值数据集
        if(IS_POST){
            $honor=M('honor_content');
            $honor->create();
            $data['pid']=$_POST['issuer'];
            $data['title']=$_POST['title'];
            $find = $type->where('sort='.$_POST['issuer'])->find();
            if($find){
                $data['issuer']=$find['type'];
            }else{
                $data['issuer']='';
            }
            if($_FILES['file']['error']==0){
                $img=$this->uploadOne($_FILES['file']);
                $data['img']=$img;
            }else{
                $data['img']="";
            }
            $data['fang_fa']=$_POST['fang_fa'];
            $data['time']=date('Y-m-d H:i:s');
            $list=$honor->data($data)->add();
            $this->success('添加成功',U('Admin/Honor/qualification'));die;
        }
        $this->display();
    }

    /*
 * 资质荣誉-修改数据
 */
    public function qualification_save(){
        $id = I('get.id');          //获取GET id
        $cc = M('honor_content');
        $list=$cc->where('id='.$id)->find();
        $this->assign('list',$list);
        //初始化数组
        $arr=array();
        $type = M('Honor');
        $sort = $type->where($arr)->order('sort')->select();
        $this->assign('sort',$sort);// 赋值数据集
        if(IS_POST){
            $cc->create();
            $data['pid']=$_POST['issuer'];
            $data['title']=$_POST['title'];
            $find = $type->where('sort='.$_POST['issuer'])->find();
            if($find){
                $data['issuer']=$find['type'];
            }else{
                $data['issuer']='';
            }
            if($_FILES['file']['error']==0){
                $img=$this->uploadOne($_FILES['file']);
                $data['img']=$img;
            }else{
                $data['img']=$list['img'];
            }
            $data['fang_fa']=$_POST['fang_fa'];
            $data['time']=date('Y-m-d H:i:s');
            $row=$cc->where('id='.$id)->save($data);
            $this->success('修改成功',U('Admin/Honor/qualification'));die;
        }
        $this->display();
    }

    public function del(){
        $cc=M('honor_content');
        $row=$cc->where('id='.I('get.id'))->delete();
        if($row){
            $this->redirect('Honor/qualification');die;
        }else{
            $this->error('删除失败');
        }

    }









}