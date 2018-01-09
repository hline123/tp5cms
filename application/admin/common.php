<?php
/**
 * $msg 待提示的消息
 * $url 待跳转的链接
 * $icon 这里主要有两个，5和6，代表两种表情（哭和笑）
 * $time 弹出维持时间（单位秒）
 */
function alert($msg = '', $url = '', $icon = '6', $time = 3)
{
    $str = '<script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script><script type="text/javascript" src="https://cdn.bootcss.com/layer/3.1.0/layer.js"></script>';
    $str .= '<script>$(function(){layer.msg("' . $msg . '",{icon:' . $icon . ',time:' . ($time * 1000) . '});setTimeout(function(){self.location.href="' . $url . '"},2000)});</script>';
    return $str;
}
// 获取百度编辑器
function get_ueditor ($name) {
    $str = <<<UEDITOR
    <textarea name="$name" id="$name" style="height:300px;width:100%;"></textarea>
    <script>
        UE.getEditor('$name', {
            toolbars: [[
            'fullscreen', 'source', '|', 'undo', 'redo', '|',
            'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
            'rowspacingtop', 'rowspacingbottom', 'lineheight'
            ]]
        });
    </script>
UEDITOR;
    return $str;
}