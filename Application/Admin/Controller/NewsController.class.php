<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends CommonController {
                            //新闻中心-分类管理
    public function news(){
        //初始化数组
        $arr=array();
        $news = M('news'); // 实例化User对象
        $count      = $news->where($arr)->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(n)
        $show       = $Page->show();// 分页显示输出
        $list = $news->where($arr)->order('sort')->limit($Page->firstRow.','.$Page->listRows)->select();
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $this->assign('list',$list);// 赋值数据集
        $this->assign('Page',$show);// 赋值分页输出

        if(IS_POST){
            $news=M('news');
            $news->create();
            $data['type']=strip_tags($_POST['title']);
            $data['fang_fa']=strip_tags($_POST['fang_fa']);
            $data['sort']=strip_tags($_POST['sort']);
            $news->data($data)->add();
            $this->success('添加成功',U('/Admin/News/news'));die;
        }

        $this->display();
    }

    public function news_save(){             //修改数据
        $id = I('get.id');
        $news =M('news');
        $sort = $news->where('id='.$id)->find();
        $this->assign('sort',$sort);

        if(IS_POST){
            $news->create();
            $data['type']=strip_tags($_POST['title']);
            $data['fang_fa']=strip_tags($_POST['fang_fa']);
            $data['sort']=strip_tags($_POST['sort']);
            $news->where('id='.$id)->save($data);

            $issuer=$_POST['title'];        //修改二级的分类
            //var_dump($issuer);die;
            $news = M('news_content'); // 实例化User对象
            $news->create();
            $data['issuer']=$issuer;
            $news->where('pid='.$sort['sort'])->save($data);

            $this->success('修改成功',U('/Admin/News/news'));die;
        }
        $this->display();

    }

    //检测重复栏目
    public function jiances(){
        $news =M('news');
        if(IS_AJAX){
            $sort=$_POST['sort'];
            $data=$news->where("sort=".$sort)->find();
            //var_dump($data);die;
            if($data){
                echo 1;die;
            }
        }

    }

    public function catedel(){              //单条删除数据
        $id = I('get.id');
        $news=M('news');

        $find=$news->where('id='.$id)->find();
        //var_dump($find);die;
        $news->where('id='.$id)->delete();
        $nc = M('news_content'); // 实例化User对象
        $nc->where('pid='.$find['sort'])->delete();
        $this->redirect('News/news');die;
    }

    /*
     * 公司新闻查询
     */
    public function company(){
        $news = M('news_content'); // 实例化User对象
        //初始化数组
        $arr=array();
        $count      = $news->where($arr)->count();// 查询满足要求的总记录数
        import('ORG.Util.Page');
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(n)
        $Page->setConfig('header','<span class="row">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('first','首页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        $Page->lastSuffix = false;//最后一页不显示为总页数
        $show       = $Page->show();// 分页显示输出
        $list = $news->where($arr)->order('issuer ,id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $this->assign('list',$list);// 赋值数据集
        $this->assign('Page',$show);// 赋值分页输出
        $this->display(); // 输出模板
        /*
         * 全选删除
         */
        if(isset($_POST['id'])){
            $idd=implode(",",$_POST['id']);
            $news->delete($idd);
            $this->redirect('News/company');die;
        }
    }

    /*
     * 公司新闻-添加数据
     */
    public function company_add(){
        //初始化数组
        $arr=array();
        $type = M('news');
        $sort = $type->where($arr)->order('sort')->select();
        //var_dump($sort);die;
        $this->assign('sort',$sort);// 赋值数据集
        if(IS_POST){
            //var_dump($_POST['issuer']);die;
            $news=M('news_content');
            $news->create();
            $data['pid']=$_POST['issuer'];
            $data['title']=$_POST['title'];
            $find = $type->where('sort='.$_POST['issuer'])->find();
            if($find){
                $data['issuer']=$find['type'];
            }else{
                $data['issuer']='';
            }
            $data['fang_fa']=$_POST['fang_fa'];
            $data['describe']=$_POST['describe'];
            if($_POST['content']==""){
                $data['content']="";
            }else{
                $data['content']=$_POST['content'];
            }
            $data['time']=date('Y-m-d');
            $news->data($data)->add();
            $this->success('添加成功',U('/Admin/news/company'));die;
        }
        $this->display();
    }
    /*
     * 公司新闻-修改数据
     */
    public function company_save(){
        $id = I('get.id');          //获取GET id
        $news = M('news_content');
        $list=$news->where('id='.$id)->find();
        //初始化数组
        $arr=array();
        $type = M('news');
        $sort = $type->where($arr)->order('sort')->select();
        $this->assign('sort',$sort);// 赋值数据集
        $this->assign('list',$list);
        if(IS_POST){
            $news->create();
            $data['pid']=$_POST['issuer'];
            $data['title']=$_POST['title'];
            $find = $type->where('sort='.$_POST['issuer'])->find();
            if($find){
                $data['issuer']=$find['type'];
            }else{
                $data['issuer']='';
            }
            $data['fang_fa']=$_POST['fang_fa'];
            $data['describe']=$_POST['describe'];
            $data['content']=$_POST['content'];
            $data['time']=date('Y-m-d');
            $news->where('id='.$id)->save($data);
            $this->success('修改成功',U('/Admin/news/company'));die;
        }
        $this->display();
    }

    public function del(){
        $news=M('news_content');
        $row=$news->where('id='.I('get.id'))->delete();
        if($row){
//                $this->success('删除成功',U('/Admin/news/news'));die;
            $this->redirect('News/company');die;
        }else{
            $this->error('删除失败');
        }

    }



















}