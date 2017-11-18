<?php

namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
use app\index\model\User;
use think\Url;
use think\File;
class Upload extends Controller
{

	public function uploadFile() {
		return $this->fetch('index/table');
	}

	public function upload() {
		$file = request()->file();
		 // 移动到框架应用根目录/public/uploads/ 目录下
	    if($file){
	        $info = $file['file']->move(ROOT_PATH . 'public' . DS . 'uploads');
	        if($info){
            // 成功上传后 获取上传信息
            // 输出 jpg
	           /* echo $info->getExtension();
	            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
	            echo $info->getSaveName();
	            // 输出 42a79759f284b767dfcb2a0197904287.jpg
	            echo $info->getFilename(); */

	            return ['status'=>1, 'message' => '上传成功'];

	        }else{
	            // 上传失败获取错误信息
	            echo $file->getError();
	        }
	    }
	}
}