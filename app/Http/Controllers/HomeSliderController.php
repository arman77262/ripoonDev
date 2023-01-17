<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SliderMultiImage;
use Image;
use Illuminate\Support\Carbon;
use File;

class HomeSliderController extends Controller
{
    public function SliderImage(){
        return view('admin.homeslider.slider_image');
    }

    public function StoreSliderImage(Request $request){
        $image = $request->file('slider_image');

        foreach ($image as $multi_image) {
            $name_gen = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();

            Image::make($multi_image)->resize(2048,1500)->save('upload/slider_image/'.$name_gen);
            $save_url = 'upload/slider_image/'.$name_gen;

                SliderMultiImage::insert([
                    'slider_image' => $save_url,
                ]);

            }

            $notification = array(
                'message' => 'Multi Image Inserted successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.slider.image')->with($notification);
    }//end method


    public function AllSliderImage(){
        $allImage = SliderMultiImage::all();
        return view('admin.homeslider.all_image', compact('allImage'));
    }//end method

    public function SliderImageEdit($id){
        $allSliderImage = SliderMultiImage::findOrFail($id);
        return view('admin.homeslider.slider_image_edit', compact('allSliderImage'));
    }

    public function SliderImageUpdate(Request $request){
        $image_id = $request->id;

        $old_image = $request->old_image;
        if ($request->file('slider_image')) {

            $image = $request->file('slider_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(2048,1500)->save('upload/slider_image/'.$name_gen);
            $save_url = 'upload/slider_image/'.$name_gen;

                SliderMultiImage::findOrFail($image_id)->update([
                    'slider_image' => $save_url,
                ]);
                unlink($old_image);
            }

            $notification = array(
                'message' => 'Image Updated successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.slider.image')->with($notification);

    }//end method


    public function SliderImageDelete($id){
        $slider_images = SliderMultiImage::findOrFail($id);
        $img = $slider_images->slider_image;
        unlink($img);

        SliderMultiImage::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Image Delete successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method

}
