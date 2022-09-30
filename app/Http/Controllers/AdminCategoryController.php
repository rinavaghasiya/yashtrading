<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

use Illuminate\Pagination\Paginator;


class AdminCategoryController extends Controller
{
	public function categoryindex(Request $request)
  	{
   	 return view('Admin.category');
  	}

  	public function insertcategory(Request $request)
    {
	    if ($request->isMethod('get')) 
	     {
	        return view('Admin.category');
	     }
     else
     {
        $data = $request->all();
        $same=DB::table('category')->where('cname',$data['cname'])->count();
        if($same>0)
        { 
          return redirect()->back()->with('error','exist');
        }
         else
         {
            if($data['cname']!='')
          	{
              DB::table('category')->insert(["cname"=>$data['cname']]);

              return redirect()->back()->with('message','Insert Category Successfully');
            }
            else
          	{
            return redirect()->back()->with('error','Category Are Not Inserted');
         	  }
        }
     }
    }

     public function showcategory(Request $request)
    {
      $requestData = ['id','cname'];
      $search=$request->input('search');
    	$data = DB::table('category')
      // ->where('cname','LIKE','%'.$search.'%')
      ->where(function($q) use($requestData, $search) {
              foreach ($requestData as $field)
                 $q->orWhere($field, 'like', "%{$search}%");
      })
      ->Paginate(5);
    	
      return view('Admin.showcategory')->with(['data'=>$data,"search"=>$search]);
    }

    public function update($id) 
   {
   	  $data = DB::table('category')->where('id',$id)->first();
      return view('Admin.updatecategory')->with('data',$data);
   }

   public function adminedit(Request $request)
  {
  		$data = $request->all();
  		$time=date('Y-m-d H:i:s',time());
   
	     if($data['cname']!='' )
	     {

	  		  DB::table('category')->where('id',$data['id'])->update(["cname"=>$data['cname'],'updated_at'=>$time]);
	        return redirect()->back()->with('message','Update Category Successfully!');
	  	  }     
		else
		{
		 return redirect()->back()->with('error','Category Are Not Updated!');
		}
  }

   public function admindelete($id)
  { 
     $data=DB::table('category')->where('id',$id)->delete();   
     return redirect()->back();   
  }


  public function showaddress(Request $request)
  { 
    $data = DB::table('address')->get();
    return view('Admin.showaddress')->with(["data"=>$data]);
  }
  public function address($id)
  {
    $a = DB::table('address')->where('id',$id)->first();
    // echo "<pre>";
    // print_r($a);
    // die();
    return view('Admin.address')->with(["a"=>$a]);
  }

  public function editaddress(Request $request)
  {
    $data = $request->all();
    
     DB::table('address')->where('id',$data['id'])->update(["address"=>$data['address'],"phone"=>$data['phone'],"email"=>$data['email']]);
    return redirect()->back()->with('message','Update Address Successfully!');
	  	       
	
  }

  public function showcontact(Request $request)
  { 
    $data = DB::table('contact')->Paginate(8);
    return view('Admin.showcontact')->with(["data"=>$data]);
  }
 
 
  public function deletecontact($id)
  { 
     $data=DB::table('contact')->where('id',$id)->delete();   
     return redirect()->back();   
  }


  public function showsocial(Request $request)
  { 
    $data = DB::table('socialmedia')->get();
    return view('Admin.socialmedia')->with(["data"=>$data]);
  }

  public function editsocial($id)
  {
    $a = DB::table('socialmedia')->where('id',$id)->first();
    // echo "<pre>";
    // print_r($a);
    // die();
    return view('Admin.media')->with(["a"=>$a]);
  }

  public function editsocialmedia(Request $request)
  {
    $data = $request->all();
    
     DB::table('socialmedia')->where('id',$data['id'])->update(["twitter"=>$data['twitter'],"facebook"=>$data['facebook'],"instagram"=>$data['instagram'],"linkedin"=>$data['linkedin']]);
    return redirect()->back()->with('message','Update SocialMedia Link Successfully!');
	  	  
  }


}
