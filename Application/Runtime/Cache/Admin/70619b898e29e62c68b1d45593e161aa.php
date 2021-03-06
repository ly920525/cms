<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="/yvanfa/Public/admin/db/css/base.css" media="all">
<link rel="stylesheet" type="text/css" href="/yvanfa/Public/admin/db/css/common.css" media="all">
<link rel="stylesheet" type="text/css" href="/yvanfa/Public/admin/db/css/module.css">
<link rel="stylesheet" type="text/css" href="/yvanfa/Public/admin/db/css/style.css" media="all">
<script type="text/javascript" src="/yvanfa/Public/admin/db/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/yvanfa/Public/admin/db/js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="/yvanfa/Public/admin/db/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/yvanfa/Public/admin/db/js/think.js"></script>
<script type="text/javascript" src="/yvanfa/Public/admin/db/js/common.js"></script>
<head>
</head>
<body id="body-right">
    <!-- 标题栏 -->
    <div class="main-title">
        <h1>数据还原</h1>
        <hr>
    </div>
    <!-- /标题栏 -->

    <!-- 应用列表 -->
    <div class="data-table table-striped">
        <table class="table2">
            <thead>
                <tr>
                    <th width="200">备份名称</th>
                    <th width="80">卷数</th>
                    <th width="80">压缩</th>
                    <th width="80">数据大小</th>
                    <th width="200">备份时间</th>
                    <th>状态</th>
                    <th width="120">操作</th>
                </tr>
            </thead>
            <tbody>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo (date('Ymd-His',$data["time"])); ?></td>
                        <td><?php echo ($data["part"]); ?></td>
                        <td><?php echo ($data["compress"]); ?></td>
                        <td><?php echo (format_bytes($data["size"])); ?></td>
                        <td><?php echo ($key); ?></td>
                        <td>-</td>
                        <td class="action">
                            <a class="db-import" href="<?php echo U('import?time='.$data['time']);?>">还原</a>&nbsp;
                            <a class="ajax-get confirm" href="<?php echo U('del?time='.$data['time']);?>">删除</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
    <!-- /应用列表 -->

    <script type="text/javascript">
        $(".db-import").click(function(){
            var self = this, status = ".";
            $.get(self.href, success, "json");
            window.onbeforeunload = function(){ return "正在还原数据库，请不要关闭！" }
            return false;
        
            function success(data){
                if(data.status){
                    if(data.gz){
                        data.info += status;
                        if(status.length === 5){
                            status = ".";
                        } else {
                            status += ".";
                        }
                    }
                    $(self).parent().prev().text(data.info);
                    if(data.part){
                        $.get(self.href, 
                            {"part" : data.part, "start" : data.start}, 
                            success, 
                            "json"
                        );
                    }  else {
                        window.onbeforeunload = function(){ return null; }
                    }
                } else {
                    alert(data.info,'alert-error');
                }
            }
        });
    </script>
</body>
</html>