<?php
namespace Admin\Controller;
use Think\Controller;
class MessageController extends CommonController {

    public function message(){
        //初始化数组
        $arr=array();
        $m = M('message'); // 实例化User对象
        $count      = $m->where($arr)->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(5)
        $show       = $Page->show();// 分页显示输出
        $list = $m->where($arr)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        if(isset($_POST['id'])){
            $id=$_POST['id'];
            foreach($id as $key=>$val){
                $dat=$m->where('id='.$val)->delete();     //全部删除或选择id删除
                //var_dump($dat);die;
            }
            $this->redirect('message/message');
        }
        $this->display();
    }
    public function delete(){
        $id=$_GET["id"];
        $m = M('message');
        $row=$m->where(array('id'=>$id))->find();

        $user=$_SESSION['username'];
        $log['user']=$user;
        $log['do']= '删掉了['.$row['name'].']的留言';
        $log['time']=date('Y-m-d H:i:s');
        $log['state']= 2;
        $log['type']= 1;
        M("log")->add($log);
        $m->where('id='.$id)->delete();
        $this->redirect('message/message');
    }
}