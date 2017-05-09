<?php
namespace Admin\Controller;

use Think\Controller;

class CommonController extends Controller{
    public function _initialize(){                                      //主运行的方法
        if (!isset($_SESSION['username'])) {//检查一下session是$不是为空

            $this->redirect('Admin/Login/login');
        }
        //获取用户登陆ID
        $username = $_SESSION['username'];

        $map['username'] = $username;
        $row = M("admin")->where($map)->find();
        //var_dump($row);die;
        $this->assign('row', $row);

        //用户
        $admin = M('Admin');
        $select = $admin->select();
        $this->assign('select', $select);

        //栏目
        $cate = $this->digui('Backstage', 0, 'sort asc');

        $this->assign('cate', $cate);
    }

    /**单文件上传
     * @param $file
     * @return string
     */
    public function uploadOne($file){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './public/Uploads/'; // 设置附件上传根目录
        // 上传单个文件
        $info = $upload->uploadOne($file);
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功 获取上传文件信息
            return $info['savepath'] . $info['savename'];
        }
    }
    /**多文件上传
     * @param $files
     * @return string
     */
    public function uploads(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './public/Uploads/'; // 设置附件上传根目录
        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            //$this->error($upload->getError());
        }else{// 上传成功
            $imgs=array();
            foreach($info as $file){
                $imgs[]=$file['savepath'].$file['savename'];
            }
            return $imgs;
        }
    }
    /*
     * 清除缓存
     */
    private function _deleteDir($R){
        $handle = opendir($R);
        while (($item = readdir($handle)) !== false) {
            if ($item != '.' and $item != '..') {
                if (is_dir($R . '/' . $item)) {
                    $this->_deleteDir($R . '/' . $item);
                } else {
                    if (!unlink($R . '/' . $item))
                        die('error!');
                }
            }
        }
        closedir($handle);
        return rmdir($R);
    }

    public function clearRuntime(){
        $R = $_GET['path'] ? $_GET['path'] : RUNTIME_PATH;
        if ($this->_deleteDir($R)) {
            return true;
        } else {
            return false;
        }

    }

    //多级栏目递归查询
    public function digui($dig, $ids, $order = ''){
        $digui = M($dig);
        $data = $digui->where("pid=$ids")->order($order)->select();

        foreach ($data as $key => $val) {
            //$data[$key]['erji']=$digui->where("pid=".$val['id'])->select();
            $data[$key]['erji'] = $this->digui($dig, $val['id'], $order);
        }
        return $data;
    }






}