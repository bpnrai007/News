<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use View;
use Illuminate\Support\Facades\URL;

class HomeController extends Controller{
	public function __construct(){

		$cat 		= DB::table('category')->get();

		$final_cat_subcat_array = array();
		$i = 0;
		foreach($cat as $cat_detail){
			$sub_cat = DB::table('subcat')->where('category', $cat_detail->id)->get();
			$final_cat_subcat_array[$i]  = array('id'=>$cat_detail->id, 'name'=>$cat_detail->name, 'url'=>$cat_detail->url, 'meta_title'=>$cat_detail->meta_title, 'meta_keyword'=>$cat_detail->meta_keyword, 'meta_des'=>$cat_detail->meta_des, 'created_at'=>$cat_detail->created_at, 'updated_at'=>$cat_detail->updated_at, 'status'=>$cat_detail->status, 'sub_cat'=>$sub_cat);
			$i++;
		}
		// $home_lt=DB::table('post')->where('status','=','active')->orderBy('id','desc')->take(6)->get();
		
		View::share('master', $final_cat_subcat_array);
    }

    function index(){

    	// echo URL::current();
    	
		$post 		= DB::table('post')->where('post_type','=','News')->where('status','=','active')->orderBy('id','desc')->take(1)->get();
		$news 		= DB::table('post')->where('post_type','=','News')->where('status','=','active')->orderBy('id','desc')->take(4)->get();
		$sport 		= DB::table('post')->where('post_type','=','Sport')->where('status','=','active')->orderBy('id','desc')->take(1)->get();
		$vis 		= DB::table('post')->where('post_type','=','Opinion')->where('status','=','active')->orderBy('id','desc')->take(1)->get();
		$state 		= DB::table('post')->where('post_type','=','State')->where('status','=','active')->orderBy('id','desc')->take(1)->get();
		$pol 		= DB::table('post')->where('post_type','=','Politics')->where('status','=','active')->orderBy('id','desc')->take(1)->get();
		$politics 	= DB::table('post')->where('post_type','=','Politics')->where('status','=','active')->orderBy('id','desc')->take(4)->get();
		$video 		= DB::table('post')->where('post_type','=','Video')->where('status','=','active')->orderBy('id','desc')->take(4)->get();
		
		return view('index')->with('post',$post)->with('news',$news)->with('sport',$sport)->with('vis',$vis)->with('state',$state)->with('pol',$pol)->with('politics',$politics)->with('video',$video);
	}

	function getPost($slug=""){
		
		$post 		= DB::table('post')->where('post_type','=','News')->where('status','=','active')->orderBy('id','desc')->take(1)->get();
		$state 		= DB::table('post')->where('post_type','=','State')->where('status','=','active')->orderBy('id','desc')->take(1)->get();
		return view('news', $post);
	}


}
