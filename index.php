	<?php
  //header('content-type:text/html; charset=ftf8');


   // include('./views/main/index.html');

     /*本质上是数组*/
     /*var_dump($_SERVER); */

     //默认目录名称
       $dir = 'main';
     //默认文件名称
       $filename = 'index';

       if(array_key_exists('PATH_INFO', $_SERVER)){
		//PATH_INFO属性的存在
		//获取请求路径
   		$path = $_SERVER['PATH_INFO'];
   		//去掉第一个斜杠
   		$str = substr($path, 1);
   		//字符串分割，和js中的split相似
   		$ret = explode('/', $str);
 		if(count($ret)==2){//路由有2层
		$dir = $ret[0]; //覆盖目录
		$filename = $ret[1]; //覆盖文件名
 		}else{
 			//其他情况都跳转到登录页面
 			$filename = 'login';
 		}
       }

    include('./views/'.$dir.'/'.$filename.'.html');

	?>
