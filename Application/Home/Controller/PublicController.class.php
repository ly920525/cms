<?php
namespace Home\Controller;

use Think\Controller;

class PublicController extends CommonController
{

    public function error()
    {
        $this->display();
    }

    public function foot()
    {
        $this->display();
    }

    public function header()
    {
        $this->display();
    }

}