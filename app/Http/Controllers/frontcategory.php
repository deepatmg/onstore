<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class frontcategory extends Controller
{
    //
    public function opencat($catid){
    	$parent=DB::table('cmodels')->select('title')->where('parent','=',0)->get();
    	$category=DB::table('cmodels')->select('cmodels.*')->where('id','=',$catid)->first();
    	
    	 $obj= DB::table('catlevels')->join('cmodels','cmodels.id','=','catlevels.pid')->select('catlevels.catid','catlevels.pid','cmodels.title','catlevels.level','cmodels.id')
            ->groupBy('catlevels.catid','catlevels.level','catlevels.pid','cmodels.title','cmodels.id');
        $items=DB::table(DB::raw("({$obj->toSql()}) as sub"))
        ->select("catid","level","title","id")->where('sub.catid','=',$catid)
        ->groupBy('catid','level','id','title')
        ->get();
        $catchild=DB::table('catlevels')->select('catid')->where('pid',$catid)->pluck('catid');
        //dd($catchild);
        $products=DB::table('pmodels')->join('images','images.product_id','=','pmodels.id')->select('pmodels.productname','pmodels.price','images.image','pmodels.id')->wherein('category',$catchild)->where('images.sortorder','=',0)->where('pmodels.status','=',1)->take(6)->get();
        $level1=DB::table('catlevels')->select('pid')->where('level',1)->where('catid',$catid)->first();

       // dd($level1);
        $catlist=DB::table('cmodels')->select('cmodels.*')->where('cmodels.parent','=',$level1->pid)->get();
        //($catlist);
    	return view('user/men',array('parent'=>$parent,'breadcrumb'=>$items,'product'=>$products));
    }

    
}
