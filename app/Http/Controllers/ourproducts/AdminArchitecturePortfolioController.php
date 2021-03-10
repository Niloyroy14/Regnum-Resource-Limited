<?php

namespace App\Http\Controllers\ourproducts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\portfolio;
use Image;
use File;

class AdminArchitecturePortfolioController extends Controller
{
     public function manage_architecturePortfolio()
    {
      
      $portfolios = portfolio::orderBy('id','asc')->get();
      return view('backend.pages.ourproducts.architectureportfolio.index')->with('portfolio', $portfolios); 
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        
        return view('backend.pages.ourproducts.architectureportfolio.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ArchitecturePortfolio_store(Request $request)
    {
        


     $request->validate(
     [
    'title' => 'nullable|max:150',
    'imagetext' => 'nullable|max:150',
    'image' => 'nullable|image',
     ],
     [
      'title.required'=>'please provide a portfolio Title',
      'image.image'=>'please provide a valid image .jpg,.png,.gift',
     ]

     );

    
    $portfolio = new portfolio();

    $portfolio->title=$request->title;
    $portfolio->imagetext=$request->imagetext;
    
    //insert image
     if($request->hasfile('portfolioimage')){
        //insert the image
         $image = $request->file('portfolioimage');
         $img = time() . '.'. $image->getClientOriginalExtension();

         $location = public_path('images/ourproduct/regnum-architecture/portfolio/' .$img);
         Image::make($image)->save($location);
         $portfolio->image= $img;
    }


       $portfolio->save();


    session()->flash('success','A New Portfolio Has Added Succesfully!!!');

    return redirect()->route('admin.architectureportfolio');


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ArchitecturePortfolio_edit($id)
    {
        $portfolio = portfolio::find($id);
        return view('backend.pages.ourproducts.architectureportfolio.edit')->with('portfolio',$portfolio);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ArchitecturePortfolio_update(Request $request, $id)
    {
        $request->validate(
    [
    'title' => 'nullable|max:150',
    'imagetext' => 'nullable|max:150',
    'image' => 'nullable|image',
     ],
     [
      'title.required'=>'please provide a portfolio Title',
      'image.image'=>'please provide a valid image .jpg,.png,.gift',
     ]
 );


    $portfolio = portfolio::find($id);

    $portfolio->title=$request->title;
    $portfolio->imagetext=$request->imagetext;
   
       

    //insert image
     if($request->portfolioimage){
        
        //delete the old image from the folder
        if(File::exists('images/ourproduct/regnum-architecture/portfolio/'.$portfolio->image)){
           File::delete('images/ourproduct/regnum-architecture/portfolio/'.$portfolio->image);
        }

         $image = $request->file('portfolioimage');
         $img = time() . '.'. $image->getClientOriginalExtension();
         $location = public_path('images/ourproduct/regnum-architecture/portfolio/' .$img);
         Image::make($image)->save($location);
         $portfolio->image= $img;
    }
    
       $portfolio->save();

      
       session()->flash('success','A New portfolio Has Updated Succesfully!!!');

       return redirect()->route('admin.architectureportfolio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function architecture_delete($id)
    {
      
      $portfolio = portfolio::find($id);
      if(!is_null($portfolio)){
      
        //delete the architecture image
         
         if(File::exists('images/ourproduct/regnum-architecture/portfolio/'.$portfolio->image)){
           File::delete('images/ourproduct/regnum-architecture/portfolio/'.$portfolio->image);
        }

        $portfolio->delete();
        session()->flash('success','Portfolio Has Deleted Succesfully!!!');

        return back();

      } 
    }
}
