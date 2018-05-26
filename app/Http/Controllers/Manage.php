<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Article;
use App\User;
use App\Commnet;

use App\http\Requests;

class Manage extends Controller
{
    public function AddArticle(Request $request){
    	if($request->isMethod('post')){
    		$adde=new Article;
    		$adde->title=$request->title;
    		$adde->body=$request->body;
    		$adde->user_id=Auth::user()->id;
    		$adde->save();
    		return redirect('view');
    	
    	}
    	return view('manage.addarticle');
    }
    public function viewarticle(){
    	$articl=Article::all();
    	$arra=Array('articl'=>$articl);
    	return view('manage.view',$arra);
    }


    public function read(Request $request,$id){
    	if($request->isMethod('post')){
    		$gg=new Commnet;
    		$gg->body=$request->body;
    		$gg->article_id=$id;
    		$gg->save();
    	}
    	$ww=Article::find($id);
    	$s=Array("ww"=>$ww);
    	return view("manage.read",$s);
    }
}
