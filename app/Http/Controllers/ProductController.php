<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{

   public function create(){


      return view('create');
   }
    public function store(Request $request){

       $this->validate($request,[

        'name'  =>  'required',
        'price'  =>  'required'
 

       ]);

       $product  = new Product();
       $product->name  = $request->name;
       $product->price  = $request->price;
       $product->date  = $request->date;
       $product->save();
       return redirect(route('product.show'))->with('msg','Product Successfully Added');
    }



   ///product search

   public function index(Request $request){
        //dd($request->all());
     // $query  = $request->input('query');
     $products = Product::query();
     if($request->from_date   !=  null)
     $products->where('date', '>=', $request->from_date);
      if($request->to_date   !=  null)
      $products->where('date','<=',$request->to_date);
                           if($request->price_from   !=  null)
                           $products ->where('price','>=',$request->price_from);
                           if($request->price_to   !=  null)
                           $products->where('price','<=',$request->price_to);
                           $products = $products->get();
                           //dd($products);
               return view('welcome',compact('products'));

      
   }

   public function edit($id){

      $product = Product::find($id);
      return view('edit',compact('product'));
   }

   public function update(Request $request, $id){

      $this->validate($request,[

         'name'  =>  'required',
         'price'  =>  'required'
  
 
        ]);
 
        $product  = Product::find($id);
        $product->name  = $request->name;
        $product->price  = $request->price;
        $product->date  = $request->date;
        $product->save();
        return redirect(route('product.show'))->with('msg','Product Successfully Update');


   }

   public function delete($id){

      Product::find($id)->delete();
         return redirect()->back()->with('msg','Product Successfully Delete');
   }
}
