<?php

namespace App\Http\Controllers\ourproducts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegnumITTestomonial;
use Image;
use File;

class AdminRegnumITTstomonialController extends Controller
{
    public function manage_testomonial()
    {
      
      $ittestomonials = RegnumITTestomonial::orderBy('id','asc')->get();
      return view('backend.pages.ourproducts.regnumit.testomonial.index')->with('ittestomonial', $ittestomonials); 
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('backend.pages.ourproducts.regnumit.testomonial.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function testomonial_store(Request $request)
    {
        


     $request->validate(
     [
    'title' => 'nullable|max:150',
    'image' => 'nullable|image',
     ],
     [
      'title.required'=>'please provide a ittestomonial Title',
      'image.image'=>'please provide a valid image .jpg,.png,.gift',
     ]

     );

    
    $ittestomonial = new RegnumITTestomonial();

    $ittestomonial->title=$request->title;
    $ittestomonial->subtitle=$request->subtitle;
    $ittestomonial->description=$request->description;
    
    //insert image
     if($request->hasfile('image')){
        //insert the image
         $image = $request->file('image');
         $img = time() . '.'. $image->getClientOriginalExtension();

         $location = public_path('images/ourproduct/regnumit/testomonial/' .$img);
         Image::make($image)->save($location);
         $ittestomonial->image= $img;
    }


       $ittestomonial->save();


    session()->flash('success','A New IT Testomonial Has Added Succesfully!!!');

    return redirect()->route('admin.testomonial');


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function testomonial_edit($id)
    {
        $ittestomonial = RegnumITTestomonial::find($id);
        return view('backend.pages.ourproducts.regnumit.testomonial.edit')->with('ittestomonial',$ittestomonial);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function testomonial_update(Request $request, $id)
    {
        $request->validate(
     [
    'title' => 'nullable|max:150',
    'image' => 'nullable|image',
    
     ],
     [
       'title.required'=>'please provide a ittestomonial title',
      'image.image'=>'please provide a valid image .jpg,.png,.gift',
     ]
 );


    $ittestomonial = RegnumITTestomonial::find($id);

   
    $ittestomonial->title=$request->title;
    $ittestomonial->subtitle=$request->subtitle;
    $ittestomonial->description=$request->description;
   
       

    //insert image
     if($request->image){
        
        //delete the old image from the folder
        if(File::exists('images/ourproduct/regnumit/testomonial/'.$ittestomonial->image)){
           File::delete('images/ourproduct/regnumit/testomonial/'.$ittestomonial->image);
        }

         $image = $request->file('image');
         $img = time() . '.'. $image->getClientOriginalExtension();
         $location = public_path('images/ourproduct/regnumit/testomonial/' .$img);
         Image::make($image)->save($location);
         $ittestomonial->image= $img;
    }
    
       $ittestomonial->save();

      
       session()->flash('success','A New IT Testomonial Has Updated Succesfully!!!');

       return redirect()->route('admin.testomonial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function testomonial_delete($id)
    {
      
      $ittestomonial = RegnumITTestomonial::find($id);
      if(!is_null($ittestomonial)){
      
        //delete the ittestomonial image
         
         if(File::exists('images/ourproduct/regnumit/testomonial/'.$ittestomonial->image)){
           File::delete('images/ourproduct/regnumit/testomonial/'.$ittestomonial->image);
        }

        $ittestomonial->delete();
        session()->flash('success',' IT Testomonial Has Deleted Succesfully!!!');

        return back();

      } 
    }
}
