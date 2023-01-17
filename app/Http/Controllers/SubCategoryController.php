<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Categories;

class SubCategoryController extends Controller
{
    public function SubCategories(){
        $subcat = Subcategory::with('Categories')->get();
        return view('admin.subcat.all_sub_category', compact('subcat'));
    }

    public function AddSubCategories(){
        $categories = Categories::latest()->get();
        return view('admin.subcat.add_sub_category',compact('categories'));
    }//end method

    public function StoreSubCategories(Request $request){
         Subcategory::insert([
            'cat_id' => $request->cat_id,
            'subcat_name' => $request->subcat_name,
         ]);
        $notification = array(
            'message' => 'Sub Category Added successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.sub.category')->with($notification);
    }
}

