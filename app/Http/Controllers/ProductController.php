<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class ProductController extends Controller
{
    public function addproductindex()
    {
      $category=DB::table('category')->get();
      $subcategory=DB::table('subcategory')->get();
        // ->join('subcategory','subcategory.cid','=','category.id')
        // ->select('category.*','subcategory.*')
        // ->get();
    // echo "<pre>";
    // print_r($data);
    // die();
  
      return view('Admin.addproduct')->with(['category'=>$category,'subcategory'=>$subcategory]);
    }
  
    public function addproduct(Request $request)
    {
      if ($request->isMethod('get')) 
      {
        return view('Admin.addproduct');
       }
       else
       {
        $data = $request->all();
        $price=$request->input('price');
        // if($price!=0) 
        // {
          if(@$data['item_img'] !='')
          {
            $img=array();
            if($files=$request->file('item_img'))
            {
              foreach($files as $file)
              {
                
                $name=$file->getClientOriginalName();
                 $t=time().$name;
                // $t=time().".".$name;
                $img = explode(".",$t);
  
               $file->move(public_path('item_img'),$t ); 
                $image[]=$t;
              }
            }
          
            if($img [1] =='png' ||  $img [1] == "jpg" ||  $img [1] =="jpeg")
            {
              $ans=DB::table('product')->insertGetId(["c_id"=>$data['category_id'],"scid"=>$data['subcategory_id'],"item_img"=>implode(",",$image),"description"=>$data['description'],"price"=>$data['price']]);
        
                 return redirect()->back()->with('message',' Item Insert Sucessfully!');
             }
             else
             {
               return redirect()->back()->with('error','Invalid Image Type');
             }
          }
          else
          {
           return redirect()->back()->with('error','Please Enter Item Images');
          }
        // }
        // else
        // {
        //    return redirect()->back()->with('error','Enter Price must be Ggrater than 0');
        // }
      }
    }


    public function showproduct(Request $request)
    {
      $requestData = ['cname','subcname','price'];
      $search=$request->input('search');
    
        $data =DB::table('category')
        ->join('product','product.c_id','=','category.id')
        ->join('subcategory','subcategory.id','=','product.scid')
        ->where(function($q) use($requestData, $search) {
          foreach ($requestData as $field)
             $q->orWhere($field, 'like', "%{$search}%");
        })
        ->select('category.cname','subcategory.subcname','product.*')
        ->orderBy('created_at','DESC')
        ->Paginate(7);
      
        // echo "<pre>";
        // print_r($data);
        // die();
      
      return view('Admin.showproduct')->with(['data'=>$data,'search'=>$search]);
    }

public function showproductdetail($imageid)
  {
    $data=DB::table('product')
    ->join('category','category.id','=','product.c_id')
    ->join('subcategory','subcategory.id','=','product.scid')
    ->where("product.id",$imageid)
    ->select('product.*','category.cname','subcategory.subcname')
    ->get();

  // echo "<pre>";
  // print_r($data);
  // die();

    return view('Admin.showproductdetail')->with(["data"=>$data]);  
  }

  public function productdelete($id)
  { 
     $data=DB::table('product')->where('id',$id)->delete();   
     return redirect()->back();   
  }


  public function updatemyitem($id) 
  {
    $data = DB::table('product')->where('id',$id)->first();
    return view('Admin.editproduct')->with(['data'=>$data]);
  }

  public function editmyitem(Request $request) 
  {
    $time=date('Y-m-d H:i:s',time());
    $data= $request->all();
   
    $price=$request->input('price');
    $data = $request->all();
    // if($price!=0) 
    // {
      if(@$data['image']!='')
      {
        $img=array();
        if($files=$request->file('image'))
        {
          foreach($files as $file)
          {
            $name=$file->getClientOriginalName();
            $img = explode(".",$name);
            $t=time().".".$img[1] ;
            if($img [1] =='png' ||  $img [1] == "jpg" ||  $img [1] =="jpeg")
            {
              $file->move(base_path('public/item_img'),$t ); 
              DB::table('product')->where('id',$data['id'])->update(["item_img"=>$t,"price"=>$data['price'],"description"=>$data['description'],'updated_at'=>$time]);
              

              $photo = $request->input('oldimg');

              if($photo!='')
              {
                if(file_exists('public/item_img/'.$photo))
                {
                 unlink('public/item_img/'.$photo);
                }
                else
                {
                    echo "file not exist";
                } 
              }
            }
            else
            {
              return redirect()->back()->with('error','Invalid Image Type');
            }
          }
           return redirect()->back()->with('message','Update Product Sucessfully!');
        } 
      }
      else
      {
        DB::table('product')->where('id',$data['id'])->update(["price"=>$data['price'],"description"=>$data['description'],'updated_at'=>$time]);
         
        return redirect()->back()->with('message','Update Product Sucessfully!');
      }
    // }   
    // else
    // {
    //     return redirect()->back()->with('message','Price graterthan 0');
    // } 
  }



}
