<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OurProject;
use Image;
use File;


class AdminOurProjectController extends Controller
{
     public function manage_ourproject()
    {
      
      $ourprojects = OurProject::orderBy('id','asc')->get();
      return view('backend.pages.ourproject.index')->with('ourproject', $ourprojects); 
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        
        return view('backend.pages.ourproject.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ourproject_store(Request $request)
    {
        


     $request->validate(
     [
    'category' => 'nullable|max:150',
    'image' => 'nullable|image',
     ],
     [
      'category.required'=>'please provide a ourproject Category',
      'image.image'=>'please provide a valid image .jpg,.png,.gift',
     ]

     );

    
    $ourproject = new OurProject();

    $ourproject->category=$request->category;
    $ourproject->kf_title=$request->kf_title;
    $ourproject->kf_description=$request->kf_description;
    
    //insert image
     if($request->hasfile('image')){
        //insert the image
         $image = $request->file('image');
         $img = time() . '.'. $image->getClientOriginalExtension();

         $location = public_path('images/ourproject/' .$img);
         Image::make($image)->save($location);
         $ourproject->image= $img;
         
    }
    
     if($request->hasfile('sub_image')){
        //insert the image
         $image = $request->file('sub_image');
         $img = time() . '.'. $image->getClientOriginalExtension();

         $location = public_path('images/ourproject/subimage/' .$img);
         Image::make($image)->save($location);
         $ourproject->sub_image= $img;
         
    }

     if($request->hasfile('ssub_image')){
        //insert the image
         $image = $request->file('ssub_image');
         $img = time() . '.'. $image->getClientOriginalExtension();

         $location = public_path('images/ourproject/s_subimage/' .$img);
         Image::make($image)->save($location);
         $ourproject->ssub_image= $img;
    }

       if($request->hasfile('kf_image')){
        //insert the image
         $image = $request->file('kf_image');
         $img = time() . '.'. $image->getClientOriginalExtension();

         $location = public_path('images/ourproject/keyfetureimage/' .$img);
         Image::make($image)->save($location);
         $ourproject->kf_image= $img;
    }
       $ourproject->save();


    session()->flash('success','A New ourproject Has Added Succesfully!!!');

    return redirect()->route('admin.ourproject');


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ourproject_edit($id)
    {
        $ourproject = OurProject::find($id);
        return view('backend.pages.ourproject.edit')->with('ourproject',$ourproject);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ourproject_update(Request $request, $id)
    {
        $request->validate(
     [
    'category' => 'nullable|max:150',
    'image' => 'nullable|image',
     ],
     [
      'category.required'=>'please provide a ourproject Category',
      'image.image'=>'please provide a valid image .jpg,.png,.gift',
     ]
 );


    $ourproject = OurProject::find($id);

   
    $ourproject->category=$request->category;
    $ourproject->kf_title=$request->kf_title;
    $ourproject->kf_description=$request->kf_description;
   
       

    //insert image
     if($request->image){
        
        //delete the old image from the folder
        if(File::exists('images/ourproject/'.$ourproject->image)){
           File::delete('images/ourproject/'.$ourproject->image);
        }

         $image = $request->file('image');
         $img = time() . '.'. $image->getClientOriginalExtension();
         $location = public_path('images/ourproject/' .$img);
         Image::make($image)->save($location);
         $ourproject->image= $img;
    }

      if($request->sub_image){
        
        //delete the old image from the folder
        if(File::exists('images/ourproject/subimage/'.$ourproject->sub_image)){
           File::delete('images/ourproject/subimage/'.$ourproject->sub_image);
        }

         $image = $request->file('sub_image');
         $img = time() . '.'. $image->getClientOriginalExtension();
         $location = public_path('images/ourproject/subimage/' .$img);
         Image::make($image)->save($location);
         $ourproject->sub_image= $img;
    }
    
   if($request->kf_image){
        
        //delete the old image from the folder
        if(File::exists('images/ourproject/keyfetureimage/'.$ourproject->kf_image)){
           File::delete('images/ourproject/keyfetureimage/'.$ourproject->kf_image);
        }

         $image = $request->file('kf_image');
         $img = time() . '.'. $image->getClientOriginalExtension();
         $location = public_path('images/ourproject/keyfetureimage/' .$img);
         Image::make($image)->save($location);
         $ourproject->kf_image= $img;
    }
    
    if($request->ssub_image){
        
        //delete the old image from the folder
        if(File::exists('images/ourproject/s_subimage/'.$ourproject->ssub_image)){
           File::delete('images/ourproject/s_subimage/'.$ourproject->ssub_image);
        }

         $image = $request->file('ssub_image');
         $img = time() . '.'. $image->getClientOriginalExtension();
         $location = public_path('images/ourproject/s_subimage/' .$img);
         Image::make($image)->save($location);
         $ourproject->ssub_image= $img;
    }
    
    
       $ourproject->save();

      
       session()->flash('success','A New Ourproject Has Updated Succesfully!!!');

       return redirect()->route('admin.ourproject');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ourproject_delete($id)
    {
      
      $ourproject = OurProject::find($id);
      if(!is_null($ourproject)){
      
        //delete the ourproject image
         
         if(File::exists('images/ourproject/'.$ourproject->image)){
           File::delete('images/ourproject/'.$ourproject->image);
        }

         if(File::exists('images/ourproject/subimage/'.$ourproject->sub_image)){
           File::delete('images/ourproject/subimage/'.$ourproject->sub_image);
        }

         if(File::exists('images/ourproject/s_subimage/'.$ourproject->ssub_image)){
           File::delete('images/ourproject/s_subimage/'.$ourproject->ssub_image);
        }

         if(File::exists('images/ourproject/keyfetureimage/'.$ourproject->kf_image)){
           File::delete('images/ourproject/keyfetureimage/'.$ourproject->kf_image);
        }

        $ourproject->delete();
        session()->flash('success','Ourproject Has Deleted Succesfully!!!');

        return back();

      } 
    }
}
