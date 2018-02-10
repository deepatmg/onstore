<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pmodel;
use App\image;
use App\cmodel;
use DB;
use Validator;

use App\catlevel;
use App\size;
class productcontroller extends Controller
{
    //
     public function __construct(){
        $this->middleware('auth');
    }
    public function addproduct(){
        $obj= DB::table('catlevels')->join('cmodels','cmodels.id','=','catlevels.pid')->select('catlevels.catid','catlevels.pid','cmodels.title','catlevels.level')
            ->groupBy('catlevels.catid','catlevels.level','catlevels.pid','cmodels.title');
        $items=DB::table(DB::raw("({$obj->toSql()}) as sub"))
        ->select("catid",DB::raw("(GROUP_CONCAT(title order by pid ASC SEPARATOR ' > ')) as category"))
        ->groupBy('catid')
        ->get();
    	return view('admin/product/add_product',array('cat'=>$items));
    }
        public function saveproduct(Request $request){
        $validation = Validator::make($request->all(),[
            'pcode'=> 'required|min:3',
            'productname'=> 'required',
            'meta_title'=> 'required'
            ]);
        if($validation->fails()){
            return redirect('addproduct')->with('errors',$validation->errors());
        }

    	$obj=new pmodel();
        //dd($xyz['product_image'][2]['image']);

        $obj->productcode=$request->get('pcode');
    	$obj->productname=$request->get('productname');
    	$obj->description=$request->get('description');
    	$obj->meta_tag_title=$request->get('meta_title');
    	$obj->meta_tag_description=$request->get('meta_description');
    	$obj->meta_keyword=$request->get('meta_keyword');
    	$obj->product_tag=$request->get('product_tag');
        $obj->brand=$request->get('brand');
    	$obj->price=$request->get('price');
    	$obj->quantity=$request->get('quantity');
    	$obj->status=$request->get('status');
    	$obj->sortorder=$request->get('sort_order');
    	$obj->category=$request->get('category');
        $result=$obj->save();
            $img=new image();
            $img->product_id=$obj->id;
            $destination_path = "lib/image/";

       if(!is_null($request->file('image'))){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move($destination_path,$filename);
            $image = $destination_path.$filename;
        }else{
            $image=$destination_path.'demoUpload.jpg';
        }
            $img->image = $image;
            $img->save();
        $abc=$request->get('size');
        if(!empty($abc[1])){
            $sizekey=array_keys($abc[1]);

           foreach($sizekey as $key => $value) {
                $obj1=new size();
                $obj1->pid=$obj->id;
                $obj1->size=$abc[1][$value]["size"];
                $obj1->quantity=$abc[1][$value]["quantity"];
                $obj1->price=$abc[1][$value]["price"];
             //dd($obj1);
                $obj1->save();
            }
        }
        $xyz=$request->all();
        if(!empty($xyz['product_image'])){
            $imgkey=array_keys($xyz['product_image']);  
            
            foreach ($imgkey as $mkey => $val) {
                $imgs=new image();
                $imgs->product_id=$obj->id;
                $imgs->sortorder=$xyz["product_image"][$val]["sort_order"];
               
                $file = $xyz['product_image'][$val]['image'];

                $filename = $file->getClientOriginalName();
                $file->move($destination_path,$filename);
                $image = $destination_path.$filename;
                $imgs->image = $image;

                $imgs->save();
            }
        }
       
    		return redirect('showprod');
    	
    }
public function showproduct(){
        $obj=DB::table('pmodels')->join('images','images.product_id','=','pmodels.id')->select('pmodels.*','images.image')->where('images.sortorder','=',0)->get();

        
    	return view('admin/product/show_product',array('result'=>$obj));
    }
    public function gallery(){
        $obj=image::all();
        return view('admin/product/gallery',array('gallery'=>$obj));
    }
    public function editproduct($id){
        $obj= DB::table('catlevels')->join('cmodels','cmodels.id','=','catlevels.pid')->select('catlevels.catid','catlevels.pid','cmodels.title','catlevels.level')
            ->groupBy('catlevels.catid','catlevels.level','catlevels.pid','cmodels.title');
        $items=DB::table(DB::raw("({$obj->toSql()}) as sub"))
        ->select("catid",DB::raw("(GROUP_CONCAT(title order by pid ASC SEPARATOR ' > ')) as category"))
        ->groupBy('catid')
        ->get();
        $prod=DB::table('pmodels')->select('pmodels.*')->where('pmodels.id','=',$id)->first();
        $size=DB::table('sizes')->select('sizes.id','sizes.size','sizes.quantity as sqty','sizes.price as sprice')->where('sizes.pid','=',$id)->get();
        $img=DB::table('images')->select('images.image')->where('images.product_id','=',$id)->where('images.sortorder','=',0)->first();
        $img1=DB::table('images')->select('images.id','images.image','images.sortorder as imageorder')->where('images.product_id','=',$id)->where('images.sortorder','!=',0)->get();
        $val=$prod->category;
      $obj1= DB::table('catlevels')->join('cmodels','cmodels.id','=','catlevels.pid')->select('catlevels.catid','catlevels.pid','cmodels.title','catlevels.level')->whereRaw("catlevels.catid = $val")->groupBy('catlevels.catid','catlevels.level','catlevels.pid','cmodels.title');
      //dd($obj1->toSql());
        //dd($obj1);
        $items1=DB::table(DB::raw("({$obj1->toSql()}) as cat"))->select(DB::raw("(GROUP_CONCAT(title order by pid ASC SEPARATOR ' > ')) as category"))->first();
       //dd($items1);
         
        return view('admin/product/edit_product',array('cat'=>$items,'result'=>$prod,'size'=>$size,'img'=>$img,'img1'=>$img1,'items1'=>$items1));
        
       
    }
    
    public function resaveproduct($id,Request $request){
        $validation = Validator::make($request->all(),[
            'pcode'=> 'required|min:3',
            'productname'=> 'required',
            'meta_title'=> 'required'
            ]);
        if($validation->fails()){
            return redirect('editproduct/$id')->with('errors',$validation->errors());
        }
       $obj=pmodel::find($id);
        $obj->productcode=$request->get('pcode');
        $obj->productname=$request->get('productname');
        $obj->description=$request->get('description');
        $obj->meta_tag_title=$request->get('meta_title');
        $obj->meta_tag_description=$request->get('meta_description');
        $obj->meta_keyword=$request->get('meta_keyword');
        $obj->product_tag=$request->get('product_tag');
        $obj->brand=$request->get('brand');
        $obj->price=$request->get('price');
        $obj->quantity=$request->get('quantity');
        $obj->status=$request->get('status');
        $obj->sortorder=$request->get('sort_order');
        $obj->category=$request->get('category');
        $obj->save();

        $abc=$request->get('size');
        $size=size::where('pid','=',$id)->pluck('id')->toArray();
        $i=0;
        foreach($size as $size){
        	$obj2=size::find($size);
        	$a=$size;
        	if(!empty($abc[0][$i][$a])){
        		$obj2->pid=$obj->id;
        		$obj2->size=$abc[0][$i][$a]["size"];
		        $obj2->quantity=$abc[0][$i][$a]["quantity"];
		        $obj2->price=$abc[0][$i][$a]["price"];
		        $obj2->save();
		        //dd($obj2);
        	}else{
        		size::destroy($a);
        	}
        	$i++;
        }
     	if(!empty($abc[1])){
	       $sizekey=array_keys($abc[1]);
	       foreach($sizekey as $key => $value) {
	            $obj1=new size();
	            $obj1->pid=$obj->id;
	            $obj1->size=$abc[1][$value]["size"];
	            $obj1->quantity=$abc[1][$value]["quantity"];
	            $obj1->price=$abc[1][$value]["price"];
	            $obj1->save();
	        }
        }

        if(!is_null($request->file('image'))){
            $img= image::where('product_id','=',$id)->where('sortorder','=',0)->get();
            $name=$img[0]->image;
            $file = $request->file('image');
            $destination_path = "lib/image/";
            $filename = $file->getClientOriginalName();
            $file->move($destination_path,$filename);
            $image = $destination_path.$filename;
            $img[0]->image = $image;
            if($name!=="lib/image/demoUpload.jpg"){
             unlink($name);
            }
            $img[0]->save();
        }
        $image=image::where('product_id','=',$id)->where('sortorder','!=',0)->pluck('id')->toArray();
        $count=0;
       $xyz=$request->all();
        foreach ($image as $im) {
        	$imgs=image::find($im);
        	$name=$imgs->image;
        	//dd($name);
        	if(!empty($xyz['product_image'][$count][$im])){

        	   $imgs->sortorder=$xyz["product_image"][$count][$im]["sort_order"];
        	   if(!empty($xyz['product_image'][$count][$im]['image'])){
	        	   $file = $xyz['product_image'][$count][$im]['image'];
		            $destination_path = "lib/image/";
	    	        $filename = $file->getClientOriginalName();
	        	    $file->move($destination_path,$filename);
	            	$imagefile = $destination_path.$filename;
	            	$imgs->image = $imagefile;
	            	unlink($name);

            	}
            	$imgs->save();

        	}else{
        		image::destroy($im);
        		unlink($name);
        	}
        	$count++;
        	
        }
        if(!empty($xyz['product_images'])){
	        $imgkey=array_keys($xyz['product_images']);      

	        foreach ($imgkey as $mkey => $val) {
	            $imgs=new image();
	            $imgs->product_id=$obj->id;
	            $imgs->sortorder=$xyz["product_images"][$val]["sort_order"];
	            if(!empty($xyz["product_images"][$val]['image'])){

		            $file = $xyz['product_images'][$val]['image'];

		            $destination_path = "lib/image/";
		            $filename = $file->getClientOriginalName();
		            $file->move($destination_path,$filename);
		            $image = $destination_path.$filename;
		            $imgs->image = $image;
		        }
	            $imgs->save();
	        }
        }
        return redirect('showprod');

    }
    
    public function deleteprod(Request $request){
        if(!empty($request->get('selected'))){
        $prod=$request->get('selected');
       // dd($prod);
           foreach ($prod as $key => $value) {
              $obj=pmodel::find($value);
                            //  dd($obj);

              $obj->delete();

              $img=image::where('product_id','=',$value)->get();
             
               foreach($img as $val){
                    if($val->image!=="lib/image/demoUpload.jpg"){
                     unlink($val->image);
                    }
                    $val->delete();

                   
               }

              
                $size=size::where('pid','=',$value)->pluck('id')->toArray();
                foreach($size as $size){
                 size::destroy($size);
                }
            }
                            return redirect('showprod');

        }
    }
}






