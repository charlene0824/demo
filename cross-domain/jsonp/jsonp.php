<?php 
$callback = $_GET['callback'];//得到回调函数的名称
$data = array('a','b');
echo $callback.'('.json_encode($data).')';
 ?>