<?php

namespace App\Http\Controllers\ourproducts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\regnumarchitecture;
use Image;
use File;

class AdminRegnumArchitectureController extends Controller
{
    

     public function manage_architecture()
    {
      
      $architectures = regnumarchitecture::orderBy('id','asc')->get();
      return view('backend.pages.ourproducts.regnumarchitecture.index')->with('architecture', $architectures); 
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        
        return view('backend.pages.ourproducts.regnumarchitecture.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function architecture_store(Request $request)
    {
        


     $request->validate(
     [
    'title' => 'nullable|max:150',
    'description' => 'nullable',
    'image' => 'nullable|image',
     ],
     [
      'title.required'=>'please provide a architecture Title',
      'image.image'=>'please provide a valid image .jpg,.png,.gift',
     ]

     );

    
    $architecture = new regnumarchitecture();

    $architecture->title=$request->title;
    $architecture->description=$request->description;
    
    //insert image
     if($request->hasfile('architectureimage')){
        //insert the image
         $image = $request->file('architectureimage');
         $img = time() . '.'. $image->getClientOriginalExtension();

         $location = public_path('images/ourproduct/regnum-architecture/' .$img);
         Image::make($image)->save($location);
         $architecture->image= $img;
    }


       $architecture->save();


    session()->flash('success','A New architecture Has Added Succesfully!!!');

    return redirect()->route('admin.architecture');


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function architecture_edit($id)
    {
        $architecture = regnumarchitecture::find($id);
        return view('backend.pages.ourproducts.regnumarchitecture.edit')->with('architecture',$architecture);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function architecture_update(Request $request, $id)
    {
        $request->validate(
     [
    'title' => 'nullable|max:150',
    'image' => 'nullable|image',
    'description' => 'nullable',
    
     ],
     [
       'title.required'=>'please provide a architecture title',
      'image.image'=>'please provide a valid image .jpg,.png,.gift',
      'description.required'=>'plaese provide a architecture description',
     ]
 );


    $architecture = regnumarchitecture::find($id);

   
    $architecture->title=$request->title;
    $architecture->description=$request->description;
   
       

    //insert image
     if($request->architectureimage){
        
        //delete the old image from the folder
        if(File::exists('images/ourproduct/regnum-architecture/'.$architecture->image)){
           File::delete('images/ourproduct/regnum-architecture/'.$architecture->image);
        }

         $image = $request->file('architectureimage');
         $img = time() . '.'. $image->getClientOriginalExtension();
         $location = public_path('images/ourproduct/regnum-architecture/' .$img);
         Image::make($image)->save($location);
         $architecture->image= $img;
    }
    
       $architecture->save();

      
       session()->flash('success','A New architecture Has Updated Succesfully!!!');

       return redirect()->route('admin.architecture');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function architecture_delete($id)
    {
      
      $architecture = regnumarchitecture::find($id);
      if(!is_null($architecture)){
      
        //delete the architecture image
         
         if(File::exists('images/ourproduct/regnum-architecture/'.$architecture->image)){
           File::delete('images/ourproduct/regnum-architecture/'.$architecture->image);
        }

        $architecture->delete();
        session()->flash('success','Architecture Has Deleted Succesfully!!!');

        return back();

      } 
    }
}
