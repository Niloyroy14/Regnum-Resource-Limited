<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\SliderCategory;
use Image;
use File;

class AdminSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_slider()
    {
      
      $sliders = Slider::orderBy('priority','asc')->get();
      return view('backend.pages.slider.index')->with('slider', $sliders); 
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

      public function create()
    {
        $slider = SliderCategory::orderBy('name','asc')->get();
        return view('backend.pages.slider.create')->with('slidercategory',  $slider );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function slider_store(Request $request)
    {
        


     $request->validate(
     [
    'title' => 'nullable|max:150',
    'image' => 'nullable|image',
    'description' => 'nullable',
    'category'=> 'required',
    'priority' => 'required'
     ],
     [
      'category.required'=>'please provide a slider category',
      'image.image'=>'please provide a valid image .jpg,.png,.gift',
      'priority.required'=>'plaese provide a slider priority',
     ]

     );

    
    $slider = new Slider();

    $slider->title=$request->title;
    $slider->description=$request->description;
    $slider->category=$request->category;
    $slider->priority=$request->priority;
   
    //insert image
     if($request->hasfile('sliderimage')){
        //insert the image
         $image = $request->file('sliderimage');
         $img = time() . '.'. $image->getClientOriginalExtension();

         $location = public_path('images/slider/' .$img);
         Image::make($image)->save($location);
         $slider->image= $img;
    }
       $slider->save();


    session()->flash('success','A New Slider Has Added Succesfully!!!');

    return redirect()->route('admin.slider');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function slider_edit($id)
    {
        $slider = Slider::find($id);
        return view('backend.pages.slider.edit')->with('slider',$slider);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function slider_update(Request $request, $id)
    {
        $request->validate(
     [
    'title' => 'nullable|max:150',
    'image' => 'nullable|image',
    'description' => 'nullable',
    'category'=> 'required',
    'priority' => 'required'
     ],
     [
       'category.required'=>'please provide a slider category',
      'image.image'=>'please provide a valid image .jpg,.png,.gift',
      'priority.required'=>'plaese provide a slider priority',
     ]
 );


    $slider = Slider::find($id);

   
    $slider->title=$request->title;
    $slider->description=$request->description;
    $slider->category=$request->category;
    $slider->priority=$request->priority;
       

    //insert image
     if($request->sliderimage){
        
        //delete the old image from the folder
        if(File::exists('images/slider/'.$slider->image)){
           File::delete('images/slider/'.$slider->image);
        }

         $image = $request->file('sliderimage');
         $img = time() . '.'. $image->getClientOriginalExtension();
         $location = public_path('images/slider/' .$img);
         Image::make($image)->save($location);
         $slider->image= $img;
    }
    
       $slider->save();

      
       session()->flash('success','A New Slider Has Updated Succesfully!!!');

       return redirect()->route('admin.slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function slider_delete($id)
    {
      
      $slider = Slider::find($id);
      if(!is_null($slider)){
      
        //delete the slider image
         
         if(File::exists('images/slider/'.$slider->image)){
           File::delete('images/slider/'.$slider->image);
        }

        $slider->delete();
        session()->flash('success','Slider Has Deleted Succesfully!!!');

        return back();

      } 
    }
}
