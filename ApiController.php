<?php 
namespace App\Http\Controllers\api;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\api;
header('Content-type: application/json');
class ApiController extends Controller{
	// 投诉文章的接口
	// public function wenzhangapi(){
		
	//        $data = DB::table("sc_tszd")->get();
	//        if($data){
	//     	$array['list']=$data;
	//     	$array['status']=100;
	//     	$array['msg']="成功";
	//         }
	// 	    $info = print_r($array);
	// 	    return json_encode($array);
	// 	    }else{
	// 	      $result['status']=208;
	// 	      $result['msg']="秘钥不正确";
	// 	      return $result;
	// 	  }
	  	 
	// }
	// 新闻接口
	public function xinwenapi(){
		$data = DB::table('sc_news')->get();
		if($data){
			$array['list']=$data;
			$array['status']=100;
			$array['msg']="成功";
		}
		$info = print_r($array);
		return json_encode($array);
	}
	// 预留学生表
	public function studentapi(){
		$data = DB::table('sc_yxs')->get();
		if($data){
			$array['list']=$data;
			$array['status']=100;
			$array['msg']="成功";
		}
		$info = print_r($array);
		return json_encode($array);
	}
	// 政策制度
	public function zhengceapi(){
		$data = DB::table("sc_zczd")->get();
		if($data){
			$array['list']=$data;
			$array['status']=100;
			$array['msg']="成功";
		}
		$info = print_r($array);
		return json_encode($array);
	}
	//集团通知接口
	public function show(){
		//引入秘钥
	    $passwd=Api::passwd();
	    // print_r($passwd);die;
	    //空的数组，等待输入秘钥与存储在model层的秘钥对比
	    $date=request()->all();
	    // print_r($date);die;
	    // 对比秘钥是否一致
	  	if($date['key']==$passwd){
	  		//调取model层数据
	  	   $info=Api::shows();
	  	   	  if ($info){
	            $array['list']=$info;
	            $array['status']=201;
	            $array['msg']='接口请求成功';
	       	   }else{
	            $array['status']=401;
	            $array['msg']='接口请求失败';
	       	  }
		        $datas = json_encode($array);
		        return $datas;
	  	   }else{
		      $result['status']=208;
		      $result['msg']="秘钥不正确";
		      return $result;
	  	 }
		
	 }
	    //集团优惠接口
	   public function select(){
		//引入秘钥
	    $passwd=Api::passwd();
	    // print_r($passwd);die;
	    //空的数组，等待输入秘钥与存储在model层的秘钥对比
	    $date=request()->all();
	    // print_r($date);die;
	    // 对比秘钥是否一致
	  	if($date['key']==$passwd){
	  		//调取model层数据
	  	   $info=Api::selects();
	  	   	  if ($info){
	            $array['list']=$info;
	            $array['status']=201;
	            $array['msg']='接口请求成功';
	       	   }else{
	            $array['status']=401;
	            $array['msg']='接口请求失败';
	       	  }
		        $datas = json_encode($array);
		        return $datas;
	  	   }else{
		      $result['status']=208;
		      $result['msg']="秘钥不正确";
		      return $result;
	  	 }
		
	}
   //集团优惠详情接口
   public function msgs(){
   	  //引入秘钥
	    $passwd=Api::passwd();
	    // print_r($passwd);die;
	    //空的数组，等待输入秘钥与存储在model层的秘钥对比
	    $date=request()->all();
	   
	    // 对比秘钥是否一致
	  	if($date['key']==$passwd){
	  		//调取model层数据
	  	   $info=Api::selectds($date);
           print_r($info);die;
	  	   	  if ($info){
	            $array['list']=$info;
	            $array['status']=201;
	            $array['msg']='接口请求成功';
	       	   }else{
	            $array['status']=401;
	            $array['msg']='接口请求失败';
	       	  }
		        $datas = json_encode($array);
		        return $datas;
	  	   }else{
		      $result['status']=208;
		      $result['msg']="秘钥不正确";
		      return $result;
	  	 }
       
    }
    //集团通知详情接口
   public function msg(){
   	    //引入秘钥
	    $passwd=Api::passwd();
	    // print_r($passwd);die;
	    //空的数组，等待输入秘钥与存储在model层的秘钥对比
	    $date=request()->all();
	     // print_r($date);die;
	    // 对比秘钥是否一致
	  	if($date['key']==$passwd){
	  		//调取model层数据
	  	    $info=Api::showeds($date);
            // print_r($info);die;

	  	   	  if ($info){
	            $array['list']=$info;
	            $array['status']=201;
	            $array['msg']='接口请求成功';
	       	   }else{
	            $array['status']=401;
	            $array['msg']='接口请求失败';
	       	  }
		        $datas = json_encode($array);
		        return $datas;
	  	   }else{
		      $result['status']=208;
		      $result['msg']="秘钥不正确";
		      return $result;
	  	 }
       
    }
}


?>