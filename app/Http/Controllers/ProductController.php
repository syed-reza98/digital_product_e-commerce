<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\Product;

class ProductController extends Controller
{
    

    public function addProduct(Request $req)
    {
         
        $req->validate([
            'ProductName'=>'required',
            'Quantity'=>'required',
            'Price'=>'required',

        ]);

       $query = DB::table('Products')->insert([
         'name'=>$req->input('ProductName'),
         'description'=>$req->input('Description'),
         'quantity'=>$req->input('Quantity'),
         'price'=>$req->input('Price'),

       ]);



       if($query)
       {
           
           return redirect()->route('addProduct')->with('success','Data has been successfully Inserted');
       }
       
    }

    public function fetchProductfromdb()
    {
      
             $data=DB::table('Products')->where('status','Active')->get();
        
         return view('products', ['list'=> $data ]);  
    }

    public function editProduct($id)
    {
      
      $data=DB::table('Products')->where('id',$id)->get();

      return view('editProduct', ['list'=> $data ]);  


    }

    public function updateProduct(Request $req)
    {
      
        $req->validate([
            'ProductName'=>'required',
            'Quantity'=>'required',
            'Price'=>'required',

        ]);

        $query= DB::table('Products')
           ->where ('id',$req->input('id'))
           ->update([
            'name'=>$req->input('ProductName'),
            'description'=>$req->input('Description'),
            'quantity'=>$req->input('Quantity'),
            'price'=>$req->input('Price'),

           ]);
    

           if($query)
           {
            return redirect()->route('products')->with('success','Data has been successfully Updated');
           }
           else
           {
            return redirect()->route('products')->with('Fail','Something went wrong ');
           }


    }

    public function deleteProduct($id)
    {
      
   
        
        $query= DB::table('Products')
           ->where ('id',$id)
           ->update([
            'status'=>'inactive'

           ]);

          if($query)
           {
            return redirect()->route('products')->with('success','Data has been successfully Deleted');
           }
           else
           {
            return redirect()->route('products')->with('Fail','Something went wrong '); 
           }
        


    }




}
