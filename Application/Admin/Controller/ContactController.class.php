<?php
namespace Admin\Controller;
use Think\Controller;
class ContactController extends CommonController {
                        //联系我们

    //信息编辑
    public function contact(){
        $contact = M('Contact');
        $lists = $contact->where('id=1')->find();       //查询单条id

        if(IS_POST){
            $contact->create();
            $contact->where('id=1')->save();             //修改数据
            $this->success('修改成功',U('Admin/Contact/contact'));die;
        }

        $this->assign('lists',$lists);
        $this->display();
    }

    //网站信息
    public function website(){
        $web = M('Web');
        $data = $web->find();
        if(IS_POST){
            $web->create();          // 创建service数据对象，默认通过表单提交的数据进行创建
            //var_dump($_FILES['file1']['name']);die;
            if($_FILES['file']['error']==0){
                //var_dump($_FILES['files']['name'][1]);die;
                $imgs=$this->uploads();	//多文件上传
                if($_FILES['files']['name'][0]!='' and $_FILES['files']['name'][1]!=''){
                    $web->web_logo_small = $imgs[1];
                    $web->web_logo = $imgs[0];
                }elseif($_FILES['files']['name'][0]=='' and $_FILES['files']['name'][1]!=''){
                    $web->web_logo_small = $imgs[0];
                }elseif($_FILES['files']['name'][0]!='' and $_FILES['files']['name'][1]==''){
                    $web->web_logo = $imgs[0];
                }else{
                    $web->web_logo_small = $data['web_logo_small'];
                    $web->web_logo = $data['web_logo'];
                }
            }
            //$web->add();            // 把数据对象添加到数据库
            $web->where('id=1')->save();            // 把数据对象更新到数据库
            $this->success('更新成功',U('Admin/Contact/website'));die;
        }

        $this->assign('data',$data);
        $this->display();
    }


}