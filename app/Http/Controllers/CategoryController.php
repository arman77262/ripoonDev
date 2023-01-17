<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Image;

class CategoryController extends Controller
{
    public function Categories(){
        $categoires = Categories::latest()->get();
        return view('admin.category.category_all',compact('categoires'));
    }//end method

    public function AddCategories(){
        return view('admin.category.category_add');
    }//end method

    public function storeCategories(Request $request){

        if ($request->file('category_image')) {
            $image = $request->file('category_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(30,20)->save('upload/menu_image/'.$name_gen);
            $save_url = 'upload/menu_image/'.$name_gen;

                Categories::insert([
                    'category_name' => $request->category_name,
                    'category_image' => $save_url,
                ]);

            }

            $notification = array(
                'message' => 'Category Added successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.category')->with($notification);
    }//end method


    public function editCategories($id){
        $all_cat = Categories::findOrFail($id);
        return view('admin.category.category_edit', compact('all_cat'));
    }//end method


    public function UpdateCategories(Request $request){
        $id = $request->id;

        $old_image = $request->old_image;

        if ($request->file('category_image')) {
            $image = $request->file('category_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(30,20)->save('upload/menu_image/'.$name_gen);
            $save_url = 'upload/menu_image/'.$name_gen;

                Categories::findOrFail($id)->update([
                    'category_name' => $request->category_name,
                    'category_image' => $save_url,
                ]);
                unlink($old_image);

                $notification = array(
                'message' => 'Category Updated With Image successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.category')->with($notification);

        }else{
            Categories::findOrFail($id)->update([
                    'category_name' => $request->category_name,
                ]);

                $notification = array(
                'message' => 'Category Updated Without Image successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.category')->with($notification);
        }


    }//end method


    public function DeleteCategories($id){
        $data = Categories::findOrFail($id);
        $img = $data->category_image;
        unlink($img);

        Categories::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Category Delete successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

}
