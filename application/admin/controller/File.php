<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Url;
use think\Image;

class File extends Controller
{
	public function upload()
    {
    	$request = Request::instance();
    	$params = $request->param();
    	$files = request()->file('image_data');
    	$img = array();
	    foreach($files as $file){
	        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
	        if($info){
	        	if (!isset($params['type']))
	        	{
		        	$pathname = $info->getpathName();
		        	$filename = $info->getFilename();	        	
		        	$pathnamethunb = str_replace($filename, '', $pathname).'thunb';
		        	//大图
		        	$image = Image::open($pathname);
		        	$image->thumb(config('limgthunbwidth'), config('limgthunbwidth'), Image::THUMB_FIXED)->save($pathname);
		        	//小图
		        	$simage = Image::open($pathname);
		        	$simage->thumb(config('simgthunbwidth'), config('simgthunbwidth'), Image::THUMB_FIXED)->save($pathnamethunb.$filename);
		        	if (isset($params['id']))
		        	{
		        		$model = model("Productimage");
		        		$model->adddata($params['id'],$info->getsavename());
		        	}
	        	}
	            $img[] = $info->getsavename();
	        }else{
	            // 上传失败获取错误信息
	            //echo $file->getError();
	            return 0; 
	        }    
	    }
	    return json_encode($img); 
    }
    
	public function uploadimg()
   {
   // 获取表单上传文件
	   $file = request()->file('file');
	   $size = $file->getSize();
	   if(($size/1024) > (2*1024))
	   {
	   		return $this->error('上传图片不得大于2M');
	   }
	   // 移动到框架应用根目录/public/uploads/ 目录下
	   $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
	   if($info){
	       $url = DS . 'uploads' . DS . date('Ymd') . DS . $info->getFilename(); 
	       $request = Request::instance();
		   $params = $request->param();
	       if (isset($params['type']) && $params['type']==1){
	       		//打开图片文件
	       		$image = Image::open($info->getpathName());
	       		// 返回图片的宽度
				$width = $image->width(); 
				// 返回图片的高度
				$height = $image->height();
				if ($width>=config('limgthunbwidth')||$height>=config('limgthunbhieght')){
		        	$image->thumb(config('limgthunbwidth'), config('limgthunbhieght'))->save($info->getpathName());
				}
	       }
	       if (isset($params['type']) && $params['type']==2){
	       		//打开图片文件
		       $image = Image::open($info->getpathName());
		       // 返回图片的宽度
			   $width = $image->width(); 
			   // 返回图片的高度
			   $height = $image->height();
		       $pathnamethunb = str_replace($info->getFilename(), '', $info->getpathName()).'thunb';
		       if ($width>=config('simgthunbwidth')||$height>=config('simgthunbwidth')){
		       		$image->thumb(config('simgthunbwidth'), config('simgthunbwidth'))->save($pathnamethunb.$info->getFilename());
		       }else{
		       		return $this->error('图片太小上传失败');
		       }
		       //重新打开图片文件
		       $image = Image::open($info->getpathName());
	       	   if ($width>=config('limgthunbwidth')||$height>=config('limgthunbhieght')){
		        	$image->thumb(config('limgthunbwidth'), config('limgthunbhieght'))->save($info->getpathName());
			   }
	       }
	       return $this->success("上传成功",'',$url);
	   }else{
	        return $this->error('上传失败');   
	   }
   }
}
