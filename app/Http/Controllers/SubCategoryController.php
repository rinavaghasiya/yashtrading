<?php

namespace App\Http\Controllers;
use DB;
use Session;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function addsubcategoryindex()
    {
      $data = DB::table('category')->get();
      return view('Admin.subcategory')->with(['data'=>$data]);
    }
  
    public function subcategory(Request $request)
    {
      $uid= Session::get("admin_id");
  
      if ($request->isMethod('get')) 
      {
        return view('Admin.subcategory');
       }
       else
       {
        $data = $request->all();
           $ans=DB::table('subcategory')->insertGetId(["cid"=>$data['category'],"subcname"=>$data['subcname']]);
           return redirect()->back()->with('message',' Item Insert Sucessfully!');  
          }
    } 
  
    public function showsubcategory(Request $request)
    {
      $requestData = ['id','cid','subcname'];
      $search=$request->input('search');
      $data = DB::table('subcategory')
      // ->where('cname','LIKE','%'.$search.'%')
      ->where(function($q) use($requestData, $search) {
              foreach ($requestData as $field)
                 $q->orWhere($field, 'like', "%{$search}%");
      })
      ->Paginate(10);
      
      return view('Admin.showsubcategory')->with(['data'=>$data,"search"=>$search]);
    }


    public function subcategorydelete($id)
    { 
       $data=DB::table('subcategory')->where('id',$id)->delete();   
       return redirect()->back();   
    }
  
  
    public function updatesubcat($id) 
    {
        $data=DB::table('category')
        ->join('subcategory','subcategory.cid','=','category.id')
        ->where('subcategory.id',$id)->first();
       return view('Admin.updatesubcategory')->with('data',$data);
    }
  
    public function editsubcat(Request $request)
   {
       $data = $request->all();
      
       $time=date('Y-m-d H:i:s',time());
    
        if($data['subcname']!='' )
        {
  
           DB::table('subcategory')->where('id',$data['id'])->update(["subcname"=>$data['subcname'],'updated_at'=>$time]);
          
           return redirect()->back()->with('message','Update SubCategory Successfully!');
         }     
     else
     {
      return redirect()->back()->with('error','SubCategory Are Not Updated!');
     }
   }

   

}
