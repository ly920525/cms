<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends CommonController {
                    //产品中心列表

    //查询
    public function product(){
        $product=M('Product');

        $cat=$this->digui('Product',0,'sort asc');
        $this->assign('cat',$cat);

        //排序
        if(IS_POST){
            foreach($_POST['ordid'] as $key => $val){
                $product->sort=$_POST['ord'][$key];
                $product->where("id=".$val)->save();
            }
            $this->redirect('Product/product');die;
        }

        $id=I("get.id");
        if($id){
            $products=$product->find($id);
            if($products['pid']==0){
                $product->delete($id);
                $product->where("pid=".$id)->delete();

            }else{
                //$product->delete($id);
                $find=$product->where('id='.$id)->find();
                //var_dump($find);die;
                $product->where('id='.$id)->delete();
                $pc = M('product_content'); // 实例化User对象
                $pc->where('pid='.$find['id'])->delete();
            }

            $this->redirect('Product/product');
        }

        //var_dump($arr);
        $this->display();
    }


//    添加
    public function product_add(){
        $cate=$this->digui('Product',0,'sort asc');           //调用多级栏目递归查询
        //print_r($cate); die;
        $this->assign('cate',$cate);

        $product=M('Product');
        //var_dump($dat);die;
//        $isshow = $_POST['isshow'];
        if(IS_POST){
            $product->create();
            $product->pid=$_POST['xiala'];
            $product->fangfa=$_POST['fangfa'];
//            if($isshow=='否'){
//                $product->state='否';
//            }else{
//                $product->state='是';
//            }
            $product->create_time=date('Y-m-d H:i:s');
            //var_dump($fa);die;
            $product->add();
            $this->success('添加成功',U('Admin/Product/product'));die;
        }

        $this->display();
    }

    //修改
    public function product_save(){
        $cate=$this->digui('Product',0,'sort asc');           //调用多级栏目递归查询
        //print_r($cate); die;
        $this->assign('cate',$cate);
        //var_dump($cate);die;

        $product=M('Product');
        $id=I('get.id');
        $dat=$product->find($id);
        //var_dump($data);die;

//        $isshow = $_POST['isshow'];
        if(IS_POST){
            $product->create();
            $product->title=$_POST['title'];
            $product->pid=$_POST['xiala'];
            $product->fangfa=$_POST['fangfa'];
//            if($isshow=='否'){
//                $product->state='否';
//            }elseif($isshow==''){
//                $product->state=$dat['state'];
//            }elseif($isshow=='是'){
//                $product->state='是';
//            }
            $product->create_time=date('Y-m-d H:i:s');
            $product->where('id='.$id)->save();

            $issuer=$_POST['title'];        //修改二级的分类
            //var_dump($issuer);die;
            $pc = M('Product_content'); // 实例化User对象
            $pc->create();
            $data['issuer']=$issuer;
            $pc->where('pid='.$id)->save($data);

            $this->success('修改成功',U('Admin/Product/product'));die;

        }

        $this->assign('dat',$dat);
        $this->display();
    }

/*
 * 二级产品-查询
 */
    public function twoproduct(){
        $pc = M('Product_content'); // 实例化User对象
        //初始化数组
        $arr=array();
        $count      = $pc->where($arr)->count();// 查询满足要求的总记录数
        import('ORG.Util.Page');
        $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(n)
        $Page->setConfig('header','<span class="row">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</span>');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('first','首页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        $Page->lastSuffix = false;//最后一页不显示为总页数
        $show       = $Page->show();// 分页显示输出
        $list = $pc->where($arr)->order('issuer desc,time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $this->assign('list',$list);// 赋值数据集
        $this->assign('Page',$show);// 赋值分页输出
        $this->display(); // 输出模板
        /*
         * 全选删除
         */
        if(isset($_POST['id'])){
            $idd=implode(",",$_POST['id']);
            $pc->delete($idd);
            $this->redirect('Product/twoproduct');die;
        }
    }

    /*
     * 二级产品-添加数据
     */
    public function twoproduct_add(){
        $type = M('Product');
        $sort = $type->where('pid>0')->order('sort')->select();
        //var_dump($sort);die;
        $this->assign('sort',$sort);// 赋值数据集
        if(IS_POST){
            $pc=M('Product_content');
            $pc->create();
            $data['pid']=$_POST['issuer'];
            //var_dump($_POST['issuer']);die;
            $data['title']=$_POST['title'];
            $find = $type->where('id='.$_POST['issuer'])->find();
            //var_dump($find);die;
            if($find){
                $data['issuer']=$find['title'];
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
            $pc->data($data)->add();

            $this->success('添加成功',U('Admin/Product/twoproduct'));die;
        }
        $this->display();
    }

/*
 * 二级产品-修改数据
 */
    public function twoproduct_save(){
        $id = I('get.id');          //获取GET id
        $pc = M('Product_content');
        $list=$pc->where('id='.$id)->find();
        $this->assign('list',$list);

        $type = M('Product');
        $sort = $type->where('pid>0')->order('sort')->select();
        //var_dump($sort);die;
        $this->assign('sort',$sort);// 赋值数据集

        if(IS_POST){
            $pc->create();
            $data['pid']=$_POST['issuer'];
            //var_dump($_POST['issuer']);die;
            $data['title']=$_POST['title'];
            $find = $type->where('id='.$_POST['issuer'])->find();
            if($find){
                $data['issuer']=$find['title'];
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
            $row=$pc->where('id='.$id)->save($data);
            $this->success('修改成功',U('Admin/Product/twoproduct'));die;
        }
        $this->display();
    }

    public function del(){
        $pc=M('Product_content');
        $row=$pc->where('id='.I('get.id'))->delete();
        if($row){
            $this->redirect('Product/twoproduct');die;
        }else{
            $this->error('删除失败');
        }

    }

    /*
* 二级产品详情
*/
    public function product_details(){
        $id = I('get.id');          //获取GET id
        //var_dump($id);die;
        $pc = M('Product_content'); // 实例化User对象
        $list=$pc->where('id='.$id)->find();
        $this->assign('list',$list);// 赋值数据集

        $pis = M('Product_imgs'); // 实例化User对象
        $datath=$pis->where("pid=".$id)->select();
        $this->assign('datath',$datath);
        //var_dump($lists);die;

        if(IS_POST){
            $pc->create();
            $imgs=$this->uploads();	//多文件上传
            foreach($imgs as $key => $value){
                $pis->imgs=$value;
                $pis->pid=$id;
                $pis->add();
            }
            $data['name']=$_POST['name'];
            $data['content']=$_POST['content'];
            $data['introduction']=$_POST['introduction'];
            $pc->where('id='.$id)->save($data);
            $this->success('修改成功'/*,U('Admin/Product/twoproduct')*/);die;
        }

        $this->display();
    }


    public function product_details_delete(){
        $pc=M('Product_imgs');
        $row=$pc->where('id='.I('get.id'))->delete();
        if($row){
            $this->redirect('Product/product_details');die;
        }else{
            $this->error('删除失败');
        }
    }



}