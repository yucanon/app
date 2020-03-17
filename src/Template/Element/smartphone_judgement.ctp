<?php 
//スマホ判定関数
function issmartphone() {
    $sp = $_SERVER['HTTP_USER_AGENT'];
    $sp_list = array('iPhone','iPad','iPod','Android');
    foreach ($sp_list as $spl) {
        //ユーザーエージェントがスマホである場合trueを返す
        if (strpos($sp, $spl) !== false) {
            return true;
        }
    }
}
?>