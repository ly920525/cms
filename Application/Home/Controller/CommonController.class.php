<?php
namespace Home\Controller;

use Think\Controller;

class CommonController extends Controller
{
    //多级栏目递归查询
    public function _initialize(){
        //栏目
        $cat=$this->digui('Cate',0,'sort asc');

        $this->assign('cat',$cat);

        $contact = M('Contact');
        $finds = $contact->find();     //底部或头部  联系我们单条查询

        $web = M('Web');
        $fi = $web->find();        //查询单条-网站信息
        $f = $fi['web_banquan'];
        $findss = explode('@',$f);
        //var_dump($findss);die;

        $this->assign('finds',$finds);
        $this->assign('fi',$fi);
        $this->assign('findss',$findss);

        //访问记录判断
        $time=$_SESSION['time'];
        if(!isset($time)){
            fangwen();
        }else{
            if(time()-$time>5*60){
                fangwen();
            }else{
                $visit = M('visit_log');
                session('time',time());
                $map['id']=$_SESSION['id'];
                $visit->where($map)->setInc('shua');
            }
        }
    }

    public	function digui($dig,$ids,$order=''){
        $digui=M($dig);
        $data=$digui->where("pid=$ids")->order($order)->select();

        foreach($data as $key => $val){
            //$data[$key]['erji']=$digui->where("pid=".$val['id'])->select();
            $data[$key]['erji']= $this->digui($dig,$val['id'],$order);
        }
        return $data;
    }



}