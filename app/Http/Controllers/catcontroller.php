<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\cmodel;
use App\catlevel;
use DB;

class catcontroller extends Controller
{
    //
     public function __construct(){
        $this->middleware('auth');
    }
    public function addcategory(){
        $obj= DB::table('catlevels')->join('cmodels','cmodels.id','=','catlevels.pid')->select('catlevels.catid','catlevels.pid','cmodels.title','catlevels.level')
            ->groupBy('catlevels.catid','catlevels.level','catlevels.pid','cmodels.title');
        $items=DB::table(DB::raw("({$obj->toSql()}) as sub"))
        ->select("catid",DB::raw("(GROUP_CONCAT(title order by pid ASC SEPARATOR ' > ')) as category"))
        ->groupBy('catid')
        ->get();
        
    	return view('admin/category/add_category',array('cat'=>$items));
    }
    public function savecategory(Request $request){
    	$obj=new cmodel();
    	$obj->title=$request->get('title');
    	$obj->parent=$request->get('path');
    	$obj->sortorder=$request->get('sort_order');
    	$obj->status=$request->get('status');
    	$obj->save();
       $final=0;
       $lev=0;
        if($obj->parent>0){
            $lev=DB::table('catlevels')->where('catid',$obj->parent)->max('level');
            $res=$lev+1;
            
            $abc=DB::table('catlevels')->select('pid','level')->where('catid','=',$obj->parent)->get();
            
            $i=0;
            foreach($abc as $abc) { 
                $obj1=new catlevel();
                $obj1->pid=$abc->pid;
                $obj1->catid=$obj->id;
                $obj1->level=$abc->level;
                $final=$obj1->level;
                $obj1->save();
                $i++;
            }
        }
        
            $obj1=new catlevel();
            $obj1->catid=$obj->id;
            $obj1->pid=$obj->id;
            $obj1->level=$final+1;
            $obj1->save();
        
    	return redirect('showcat');
    }
    public function showcategory(){
        $obj= DB::table('catlevels')->join('cmodels','cmodels.id','=','catlevels.pid')->select('catlevels.catid','catlevels.pid','cmodels.title','catlevels.level','sortorder')
            ->groupBy('catlevels.catid','catlevels.level','catlevels.pid','cmodels.title','sortorder');
        $items=DB::table(DB::raw("({$obj->toSql()}) as sub"))
        ->select("catid","sortorder",DB::raw("(GROUP_CONCAT(title order by pid ASC SEPARATOR ' > ')) as category"))
        ->groupBy('catid','sortorder')
        ->get();

       	return view('admin/category/show_category',array('cat'=>$items));
    }
    public function editcategory($id){
    	$obj1=cmodel::find($id);
         $obj= DB::table('catlevels')->join('cmodels','cmodels.id','=','catlevels.pid')->select('catlevels.catid','catlevels.pid','cmodels.title','catlevels.level')
            ->groupBy('catlevels.catid','catlevels.level','catlevels.pid','cmodels.title');
        $item=DB::table(DB::raw("({$obj->toSql()}) as sub"))
        ->select("catid",DB::raw("(GROUP_CONCAT(title order by pid ASC SEPARATOR ' > ')) as category"))->where('catid','=',$obj1->parent)
        ->groupBy('catid')
        ->first();
        $items=DB::table(DB::raw("({$obj->toSql()}) as sub"))
        ->select("catid",DB::raw("(GROUP_CONCAT(title order by pid ASC SEPARATOR ' > ')) as category"))->where('catid','!=',$obj1->parent)
        ->groupBy('catid')
        ->get();
        //dd($items);
    	return view('admin/category/edit_category',array('res'=>$obj1,'cat'=>$item,'cats'=>$items));
    }
    public function resavecategory(Request $request, $id){
    	$obj=cmodel::find($id);
    	$obj->title=$request->get('title');
        $obj->parent=$request->get('path');
        $obj->sortorder=$request->get('sort_order');
        $obj->status=$request->get('status');
    	$result=$obj->save();
    	if($result){
    		return redirect('showcat');
    	}
    }
    public function destroy(Request $request){
        $selected=$request->get('selected');
        foreach($selected as $selec){
            //dd($selec);
            $obj=DB::table('catlevels')->join('cmodels','cmodels.id','=','catlevels.catid')->where('catlevels.catid','=',$selec)->orwhere('catlevels.pid','=',$selec)->pluck('cmodels.id');
            //dd($obj);
            foreach($obj as $item){
                //dd($item);
                //cmodel::destroy($item->id);
                DB::delete("delete from cmodels where id=$item");
                DB::delete("delete from catlevels where catlevels.catid=$item");
            }

           // catlevels::destroy($obj);
        }
        return redirect('showcat');
    }
}







