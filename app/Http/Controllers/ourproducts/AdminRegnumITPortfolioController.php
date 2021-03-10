<?php

namespace App\Http\Controllers\ourproducts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegnumITPortfolio;
use Image;
use File;

class AdminRegnumITPortfolioController extends Controller
{
     public function manage_portfolio()
    {
      
      $itportfolios = RegnumITPortfolio::orderBy('id','asc')->get();
      return view('backend.pages.ourproducts.regnumit.portfolio.index')->with('itportfolio', $itportfolios); 
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        
        return view('backend.pages.ourproducts.regnumit.portfolio.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function portfolio_store(Request $request)
    {
        


     $request->validate(
     [
    'title' => 'nullable|max:150',
    'image' => 'nullable|image',
     ],
     [
      'title.required'=>'please provide a itportfolio Title',
      'image.image'=>'please provide a valid image .jpg,.png,.gift',
     ]

     );

    
    $itportfolio = new RegnumITPortfolio();

    $itportfolio->button=$request->button;
    $itportfolio->category=$request->category;
    $itportfolio->class=$request->class;
    $itportfolio->butn_data_filter=$request->butn_data_filter;
    $itportfolio->data_filter=$request->data_filter;
    $itportfolio->imagetitle=$request->imagetitle;
    
    //insert image
     if($request->hasfile('image')){
        //insert the image
         $image = $request->file('image');
         $img = time() . '.'. $image->getClientOriginalExtension();

         $location = public_path('images/ourproduct/regnumit/portfolio/' .$img);
         Image::make($image)->save($location);
         $itportfolio->image= $img;
    }


       $itportfolio->save();


    session()->flash('success','A New IT Portfolio Has Added Succesfully!!!');

    return redirect()->route('admin.itportfolio');


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function portfolio_edit($id)
    {
        $itportfolio = RegnumITPortfolio::find($id);
        return view('backend.pages.ourproducts.regnumit.portfolio.edit')->with('itportfolio',$itportfolio);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function portfolio_update(Request $request, $id)
    {
        $request->validate(
     [
    'title' => 'nullable|max:150',
    'image' => 'nullable|image',
    
     ],
     [
       'title.required'=>'please provide a itportfolio title',
      'image.image'=>'please provide a valid image .jpg,.png,.gift',
     ]
 );


    $itportfolio = RegnumITPortfolio::find($id);

   
    $itportfolio->button=$request->button;
    $itportfolio->category=$request->category;
    $itportfolio->class=$request->class;
    $itportfolio->butn_data_filter=$request->butn_data_filter;
    $itportfolio->data_filter=$request->data_filter;
    $itportfolio->imagetitle=$request->imagetitle;
   
       

    //insert image
     if($request->image){
        
        //delete the old image from the folder
        if(File::exists('images/ourproduct/regnumit/portfolio/'.$itportfolio->image)){
           File::delete('images/ourproduct/regnumit/portfolio/'.$itportfolio->image);
        }

         $image = $request->file('image');
         $img = time() . '.'. $image->getClientOriginalExtension();
         $location = public_path('images/ourproduct/regnumit/portfolio/' .$img);
         Image::make($image)->save($location);
         $itportfolio->image= $img;
    }
    
       $itportfolio->save();

      
       session()->flash('success','A New IT Portfolio Has Updated Succesfully!!!');

       return redirect()->route('admin.itportfolio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function portfolio_delete($id)
    {
      
      $itportfolio = RegnumITPortfolio::find($id);
      if(!is_null($itportfolio)){
      
        //delete the itportfolio image
         
         if(File::exists('images/ourproduct/regnumit/portfolio/'.$itportfolio->image)){
           File::delete('images/ourproduct/regnumit/portfolio/'.$itportfolio->image);
        }

        $itportfolio->delete();
        session()->flash('success',' IT Portfolio Has Deleted Succesfully!!!');

        return back();

      } 
    }
}
