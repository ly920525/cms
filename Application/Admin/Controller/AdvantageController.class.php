<?php
namespace Admin\Controller;
use Think\Controller;
class AdvantageController extends CommonController {
/*
 * 首页优势-查询
 */
    public function advantage(){
        $advantage = M('Advantage'); // 实例化User对象
        //初始化数组
        $arr=array();
        $count      = $advantage->where($arr)->count();// 查询满足要求的总记录数
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
        $list = $advantage->where($arr)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $this->assign('list',$list);// 赋值数据集
        $this->assign('Page',$show);// 赋值分页输出
        $this->display(); // 输出模板
        /*
         * 全选删除
         */
        if(isset($_POST['id'])){
            $idd=implode(",",$_POST['id']);
            $advantage->delete($idd);
            $this->redirect('Advantage/advantage');die;
        }
    }

    /*
     * 首页优势-添加数据
     */
    public function advantage_add(){
        $advantage = M('Advantage'); // 实例化User对象
        if(IS_POST){
            $advantage->create();
            if($_FILES['file']['error']==0){
                $img=$this->uploadOne($_FILES['file']);
                $data['img']=$img;
            }else{
                $data['img']="";
            }
            $data['title']=$_POST['title'];
            $data['describe']=$_POST['describe'];
            $data['time']=date('Y/m/d H:i:s');
            $advantage->data($data)->add();
            $this->success('添加成功',U('Admin/Advantage/advantage'));die;
        }
        $this->display();
    }

/*
 * 首页优势-修改数据
 */
    public function advantage_save(){
        $id = I('get.id');          //获取GET id
        $advantage = M('Advantage'); // 实例化User对象
        $list=$advantage->where('id='.$id)->find();
        $this->assign('list',$list);
        if(IS_POST){
            $advantage->create();
            if($_FILES['file']['error']==0){
                $img=$this->uploadOne($_FILES['file']);
                $data['img']=$img;
            }else{
                $data['img']=$list['img'];
            }
            $data['title']=$_POST['title'];
            $data['describe']=$_POST['describe'];
            $data['time']=date('Y/m/d H:i:s');
            $advantage->where('id='.$id)->save($data);
            $this->success('修改成功',U('Admin/Advantage/advantage'));die;
        }
        $this->display();
    }

    public function del(){
        $advantage = M('Advantage'); // 实例化User对象
        $row=$advantage->where('id='.I('get.id'))->delete();
        if($row){
            $this->redirect('Advantage/advantage');die;
        }else{
            $this->error('删除失败');
        }

    }


/*
 * 首页优势图片-查询
 */
    public function advantage_imgs(){
        $ai = M('Advantage_imgs'); // 实例化User对象
        //初始化数组
        $arr=array();
        $count      = $ai->where($arr)->count();// 查询满足要求的总记录数
        import('ORG.Util.Page');
        $Page       = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(n)
        $Page->setConfig('header','<span class="row">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('first','首页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        $Page->lastSuffix = false;//最后一页不显示为总页数
        $show       = $Page->show();// 分页显示输出
        $list = $ai->where($arr)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $this->assign('list',$list);// 赋值数据集
        $this->assign('Page',$show);// 赋值分页输出
        $this->display(); // 输出模板
        /*
         * 全选删除
         */
        if(isset($_POST['id'])){
            $idd=implode(",",$_POST['id']);
            $ai->delete($idd);
            $this->redirect('Advantage/advantage_imgs');die;
        }
    }

    /*
     * 首页优势图片-添加数据
     */
    public function advantage_imgs_add(){
        $ai = M('Advantage_imgs'); // 实例化User对象
        if(IS_POST){
            $ai->create();
            if($_FILES['file']['error']==0){
                $img=$this->uploadOne($_FILES['file']);
                $data['img']=$img;
            }else{
                $data['img']="";
            }
            $data['time']=date('Y/m/d H:i:s');
            $ai->data($data)->add();
            $this->success('添加成功',U('Admin/Advantage/advantage_imgs'));die;
        }
        $this->display();
    }

    /*
 * 首页优势图片-修改数据
 */
    public function advantage_imgs_save(){
        $id = I('get.id');          //获取GET id
        $ai = M('Advantage_imgs'); // 实例化User对象
        $list=$ai->where('id='.$id)->find();
        $this->assign('list',$list);
        if(IS_POST){
            $ai->create();
            if($_FILES['file']['error']==0){
                $img=$this->uploadOne($_FILES['file']);
                $data['img']=$img;
            }else{
                $data['img']=$list['img'];
            }
            $data['time']=date('Y/m/d H:i:s');
            $ai->where('id='.$id)->save($data);
            $this->success('修改成功',U('Admin/Advantage/advantage_imgs'));die;
        }
        $this->display();
    }

    public function delete(){
        $ai = M('Advantage_imgs'); // 实例化User对象
        $row=$ai->where('id='.I('get.id'))->delete();
        if($row){
            $this->redirect('Advantage/advantage_imgs');die;
        }else{
            $this->error('删除失败');
        }

    }









}