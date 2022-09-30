<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function  home(Request $request)
    {
       return view('home');
    }
    public function  about(Request $request)
    {
        return view("about");
    }
    public function marketing(Request $request)
    {
        return view("marketing");
    }

    public function contact(Request $request)
    {
        return view("contact");
    }

    public function addcontact(Request $request)
    {
      if ($request->isMethod('get')) 
      {
        return view('contact');
       }
       else
       {
        $data = $request->all();
       
          if($data['name'] !='' && $data['email'] !='' && $data['message'] !='')
          {
            $ans=DB::table('contact')->insert(["name"=>$data['name'],"email"=>$data['email'],"subject"=>$data['subject'],"message"=>$data['message']]);
            return redirect()->back()->with('message',' Message Send Sucessfully!'); 
          }
          else
          {
           return redirect()->back()->with('error','Please Fill All Fields');
          }
      }
    }

    public function productpg(Request $request)
    {
        // $productQuery = Product::query();
        // if ($request->sub_cat) {
        //     $productQuery->where("scid", $request->sub_cat);
        // }
        // $productData = $productQuery->get();
        
        $productQuery =DB::table('product')
        ->join('subcategory','subcategory.id','=','product.scid')
        ->select('subcategory.subcname','product.*');
  
        if ($request->sub_cat) {
        $productQuery->where("scid", $request->sub_cat);
        }
        $productData = $productQuery->get();

        // echo "<pre>";
        // print_r($productData);
        // die();
        return view("productpg")->with(['data'=>$productData]);
    }

}
