<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
     public function create(Request $request){
        
       $category = Category::create([
            'name' => $request->name,
        ]);

        return $category;
    }

    public function update (Request $request){
        $data = Category::where('id', $request->id)->update([
            'name' => $request->name
        ]);

        return Category::find($request->id);
    }

    public function destroy(Request $request){
        Category::where('id', $request->id)->delete();
        
        return 'Category is deleted!';
        }

    public function all(){
        return Category::all();
    }
}
