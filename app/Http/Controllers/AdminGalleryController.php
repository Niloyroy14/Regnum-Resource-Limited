<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Image;
use File;

class AdminGalleryController extends Controller
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
    public function manage_gallery()
    {
      
      $gallerys = Gallery::orderBy('id','asc')->get();
      return view('backend.pages.gallery.index')->with('gallery', $gallerys); 
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        
        return view('backend.pages.gallery.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function gallery_store(Request $request)
    {
        


     $request->validate(
     [
    'title' => 'nullable|max:150',
    'image' => 'nullable|image'

     ],
     [
      
      'image.image'=>'please provide a valid image .jpg,.png,.gift',
     ]

     );

    
    $gallery = new Gallery();

    $gallery->title=$request->title;
    $gallery->date=$request->date;
    $gallery->button_link=$request->button_link;
   
   
    //insert image
     if($request->hasfile('galleryimage')){
        //insert the image
         $image = $request->file('galleryimage');
         $img = time() . '.'. $image->getClientOriginalExtension();

         $location = public_path('images/gallery/' .$img);
         Image::make($image)->save($location);
         $gallery->image= $img;
    }
       $gallery->save();


    session()->flash('success','A New Gallery Has Added Succesfully!!!');

    return redirect()->route('admin.gallery');


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
    public function gallery_edit($id)
    {
        $gallery = Gallery::find($id);
        return view('backend.pages.gallery.edit')->with('gallery',$gallery);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function gallery_update(Request $request, $id)
    {
        $request->validate(
     [
    'title' => 'nullable|max:150',
    'image' => 'nullable|image'
   
     ],
     [
    
      'image.image'=>'please provide a valid image .jpg,.png,.gift',
     
     ]
 );


    $gallery = Gallery::find($id);

   
    $gallery->title=$request->title;
    $gallery->date=$request->date;
    $gallery->button_link=$request->button_link;
       

    //insert image
     if($request->galleryimage){
        
        //delete the old image from the folder
        if(File::exists('images/gallery/'.$gallery->image)){
           File::delete('images/gallery/'.$gallery->image);
        }

         $image = $request->file('galleryimage');
         $img = time() . '.'. $image->getClientOriginalExtension();
         $location = public_path('images/gallery/' .$img);
         Image::make($image)->save($location);
         $gallery->image= $img;
    }
    
       $gallery->save();

      
       session()->flash('success','A New Gallery Has Updated Succesfully!!!');

       return redirect()->route('admin.gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function gallery_delete($id)
    {
      
      $gallery = Gallery::find($id);
      if(!is_null($gallery)){
      
        //delete the gallery image
         
         if(File::exists('images/gallery/'.$gallery->image)){
           File::delete('images/gallery/'.$gallery->image);
        }

        $gallery->delete();
        session()->flash('success','Gallery Has Deleted Succesfully!!!');

        return back();

      } 
    }
}