<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\pmodel;
use App\image;
use App\size;
use App\customer_shopping_bag;
use session;
class homecontroller extends Controller
{
    //
    
    public function index(){
        $firstpage=1;
    	$parent=DB::table('cmodels')->select('title','id')->where('parent','=',0)->get();
    	//dd($parent);
    	/*
    	$i=0;
    	foreach ($parent as $key) {
	       	$objs= DB::table('catlevels')->join('cmodels','cmodels.id','=','catlevels.pid')->select('cmodels.id','cmodels.parent','cmodels.title','catlevels.level')
	            ->groupBy('cmodels.parent','cmodels.id','catlevels.pid','catlevels.level','cmodels.title');
	        $items[$i]=DB::table(DB::raw("({$objs->toSql()}) as sub"))
	       ->select('sub.id',DB::raw('title'),'sub.parent')
	       ->where('sub.level','=',2)->where('sub.parent',$key->id)
	        ->get();
	        $j=0;
	        foreach($items[$i] as $head){
	        	$object[$j]= DB::table('catlevels')->join('cmodels','cmodels.id','=','catlevels.pid')->select('cmodels.id','cmodels.parent','cmodels.title','catlevels.level')
	            ->groupBy('cmodels.parent','cmodels.id','catlevels.pid','catlevels.level','cmodels.title');
	      	 	 $catitem[$i][$j]=DB::table(DB::raw("({$object[$j]->toSql()}) as subcat"))
	      	 	 					->select('subcat.id',DB::raw('title'))->where('subcat.level','=',3)->where('subcat.parent',$head->id)->get();
      	 	 	$j++;
  	 	 	}
       		$i++; 
   		 }
   
   		 dd($items,$catitem);*/
    	$obj=DB::table('pmodels')->join('images','images.product_id','=','pmodels.id')->select('pmodels.productname','pmodels.price','images.image','pmodels.id')->where('images.sortorder','=',0)->where('pmodels.status','=',1)->take(6)->get();
    	//dd($obj);
    	$bestseller=DB::table('pmodels')->join('images','images.product_id','=','pmodels.id')->select('pmodels.productname','pmodels.price','images.image','pmodels.id','pmodels.soldnum')->where('images.sortorder','=',0)->where('pmodels.status','=',1)->orderBy('pmodels.soldnum','DESC')->take(6)->get();
    	//dd($bestseller);
    	$popular=DB::table('pmodels')->join('images','images.product_id','=','pmodels.id')->select('pmodels.productname','pmodels.price','images.image','pmodels.id','pmodels.soldnum')->where('images.sortorder','=',0)->where('pmodels.status','=',1)->orderBy('pmodels.hitcount','DESC')->take(6)->get();   
    	 	return view('user/index',array('result'=>$obj,'parent'=>$parent,'bestsel'=>$bestseller,'popular'=>$popular))->with('firstpage',$firstpage);
    }
    public function singlepage($id){
    	$parent=DB::table('cmodels')->select('title')->where('parent','=',0)->get();
    	$obj=DB::table('pmodels')->where('pmodels.id','=',$id)->join('cmodels','cmodels.id','=','pmodels.category')->select('pmodels.id','pmodels.productname','pmodels.productcode','pmodels.price','pmodels.quantity','pmodels.description','pmodels.brand','cmodels.title')->first();
    	$image0=DB::table('images')->where('images.product_id','=',$id)->select('images.image')->where('images.status','=',1)->where('images.sortorder','=',0)->first();
    	$image=DB::table('images')->where('images.product_id','=',$id)->select('images.image')->where('images.status','=',1)->where('images.sortorder','!=',0)->get();
    	//dd($obj,$image);
    	return view('user/single',array('parent'=>$parent,'product'=>$obj,'images'=>$image,'image0'=>$image0));
    }
    public function cart(){
    	$parent=DB::table('cmodels')->select('title')->where('parent','=',0)->get();
    	//$list=DB::table('customer_shopping_bags')->where('customer_id',)->get();
    	//dd($list);
    	$pid=session()->get('ids');
    	//dd($pid);
    	
    	$product=DB::table('pmodels')->join('images','images.product_id','=','pmodels.id')->select('pmodels.*','images.image')->where('pmodels.id','=',$pid)->where('images.sortorder','=',0)->where('pmodels.status','=',1)->get();
    	//dd($pid);
    	return view('user/cart',array('parent'=>$parent,'product'=>$product));
    }
    public function addtocart(Request $request,$id){
    	// $obj=new customer_shopping_bag();
    	// $obj->product_id=$id;
    	// $obj->size=$request->get('size');
    	// $obj->qty=$request->get('quantity');
    	//dd($obj);
    	/*$request->session()->put('product_id', $id);
    	$request->session()->put('size', $request->get('size'));
    	$request->session()->put('qty', $request->get('quantity'));*/
		//$prod_id=array($id);
    	array_push($prods, $id);
		session()->put('ids',$prods);
		
    	return redirect('cart');
    }
    public function shop(){
    	return view('user/shop');
    }
    public function products(){
    	return view('user/products');
    }
   
    
}
