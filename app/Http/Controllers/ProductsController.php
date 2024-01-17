<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function GetProduct(){
        $getProducts=Products::select('*')->get();
        return response()->json(['code'=>200,"message"=>"Get Successfully",'data'=>$getProducts]);
    }
    public function PostProduct(Request $request){
        $new_product = Products::create([
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'pricing'=>$request->pricing
        ]);
        return "Created successfully";
    }
    public function GetProductById($id){
        $getProducts = Products::select('*')->where('id',$id)->first();

        return response()->json(['code'=>200,"message"=>"Get Successfully",'data'=>$getProducts]);
    }
    public function UpdateProduct(Request $request,$id){
        $updateProduct=Products::where('id',$id)->update([
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'pricing'=>$request->pricing
        ]);
    }
    public function DeleteProduct(Request $request,$id){
        $deleteProduct=Products::where('id',$id)->delete();
        return response()->json(['code'=>200,"message"=>"Deleted Successfully"]);
    }

}
