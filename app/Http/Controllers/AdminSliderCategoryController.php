<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SliderCategory;

class AdminSliderCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function manage_slidercategory()
     {
        $slidercategories = SliderCategory::orderBy('id','asc')->get();
        return view('backend.pages.slidercategory.index')->with('categories',$slidercategories);
    
       
      }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function create_slidercategory()
    {
       
        return view('backend.pages.slidercategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     
    public function slidercategory_store(Request $request)
    {
        
    $request->validate(
     [
    'name' => 'required|max:150',
    'id' => 'required',
     ],
     [
      'name.required'=>'please provide a category name',
      'id.required'=>'please provide a category id',
      
     ]

     );


    $category = new SliderCategory();
       $category->id=$request->id;
       $category->name=$request->name;
       $category->save();




    session()->flash('success','A new Slider Category Has Added Succesfully!!!');

    return redirect()->route('admin.slidercategory');
   
    }


  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function slidercategory_edit($id)
    {

       
        $category = SliderCategory::find($id);
        return view('backend.pages.slidercategory.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function slidercategory_update(Request $request, $id)
    {
   
   $request->validate(
     [
    'category_name' => 'required|max:150',
    'category_id' => 'required',
     ],
     [
      'category_name.required'=>'please provide a category name',
      'category_id.required'=>'please provide a category id',
     ]

     );


    $category = SliderCategory::find($id);

    $category->name=$request->category_name;
    $category->id=$request->category_id;
    
       
    $category->save();

      
       session()->flash('success','A New Slider Category Has Updated Succesfully!!!');

       return redirect()->route('admin.slidercategory');

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function slidercategory_delete($id)
    {
         $category = SliderCategory::find($id);
          $category->delete();

        session()->flash('success',' Slider Category Has Deleted Succesfully!!!');

        return back();

     }
}
