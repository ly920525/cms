<?php
/**
 * 公共方法
 * User: liyong
 * Date: 2017/3/20
 * Time: 16:44
 */
function show($code, $message, $data = array())
{
    $result = array(
        'code' => $code,
        'message' => $message,
        'data' => $data,
    );
    exit(json_encode($result));
}

/**
 * 格式化字节大小
 * @param  number $size 字节数
 * @param  string $delimiter 数字和单位分隔符
 * @return string            格式化后的带单位的大小
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */
function format_bytes($size, $delimiter = '')
{
    $units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB');
    for ($i = 0; $size >= 1024 && $i < 5; $i++) $size /= 1024;
    return round($size, 2) . $delimiter . $units[$i];
}

//增加后台行为日志
function add_log($do = '', $state = 0, $type = 0)
{
    $username = $_SESSION['username'];
    if($username==null){
        //$username=$user;
        return false;
    }
    $log['user'] = $username;
    $log['do'] = $do;
    $log['time'] = date('Y-m-d H:i:s');
    $log['state'] = $state;
    $log['type'] = $type;
    M("log")->add($log);
    return true;
}

//返回客户端的ip信息
function get_ip($type = 0)
{
    $type = $type ? 1 : 0;
    static $ip = NULL;
    if ($ip !== NULL) return $ip[$type];
    if ($_SERVER['HTTP_X_REAL_IP']) {//nginx 代理模式下，获取客户端真实IP
        $ip = $_SERVER['HTTP_X_REAL_IP'];
    } elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {//客户端的ip
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {//浏览当前页面的用户计算机的网关
        $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $pos = array_search('unknown', $arr);
        if (false !== $pos) unset($arr[$pos]);
        $ip = trim($arr[0]);
    } elseif (isset($_SERVER['REMOTE_ADDR'])) {
        $ip = $_SERVER['REMOTE_ADDR'];//浏览当前页面的用户计算机的ip地址
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    // IP地址合法验证
    $long = sprintf("%u", ip2long($ip));
    $ip = $long ? array($ip, $long) : array('0.0.0.0', 0);
    return $ip[$type];
}

//记录前后台访问数据记录  type：0为前台访问类型 1为后台访问类型
function fangwen($type=0)
{
    $visit = M('visit_log');
    $data['ip'] = get_ip();
    $data['time'] = date('Y-m-d H:i:s');
    $data['state'] = 1;
    $data['type'] = $type;
    $id=$visit->add($data);
    if($type==0){
        session('time',time());
        session('id', $id);
    }
}
/**
 * 返回当前月30天的访问量  配合图表显示用
 */
function getday(){
    $visit=M('visit_log');
    $yue=date('Y-m');//获取本月
    $day=array();  //初始化数组
    $bigday=date('d', mktime(0, 0, 0,date('m')+1,1)-1);//获取当前月最大的天数

    for ($x=1; $x<=$bigday; $x++) {
        if($x<10){
            $date=$yue.'-0'.$x;
        }else{
            $date=$yue.'-'.$x;
        }
        $map['type']=0;
        $map['time']=array('like',$date.' %');
        $map1['type']=1;
        $map1['time']=array('like',$date.' %');
        $qian=$visit->where($map)->count();
        $hou=$visit->where($map1)->count();
        $day[$x]="{day: '".$date."', qian: ".$qian.", hou: ".$hou."},";
    }

    return $day;
}



