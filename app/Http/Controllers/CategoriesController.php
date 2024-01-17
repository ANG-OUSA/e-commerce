<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function GetCategory(){
        $getCategories = Categories::select('*')->get();
        return response()->json(['code'=>200,"message"=>"Create Successfully",'data'=>$getCategories]);
    }
    public function PostCategory(Request $request){
        $new_category = Categories::create([
            'name'=>$request->name
        ]);
        return "success";
    }
    public function GetCategoryById($id){
        $getCategory = Categories::select('*')->where('id',$id)->first();

        return response()->json(['code'=>200,"message"=>"Create Successfully",'data'=>$getCategory]);
    }
    public function UpdateCategory(Request $request , $id){
        $updateCategory = Categories::where('id',$id)->update([
            'name'=>$request->name
        ]);

        return response()->json(['code'=>200,"message"=>"Update Successfully"]);
    }
    public function DeleteCategory(Request $request , $id){
        $deleteCategory = Categories::where('id',$id)->delete();

        return response()->json(['code'=>200,"message"=>"Delete Successfully"]);
    }

}
