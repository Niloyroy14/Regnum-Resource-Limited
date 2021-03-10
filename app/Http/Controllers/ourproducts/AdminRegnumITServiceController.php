<?php

namespace App\Http\Controllers\ourproducts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegnumITService;

class AdminRegnumITServiceController extends Controller
{
    public function manage_itservice()
    {
      
      $itservices = RegnumITService::orderBy('id','asc')->get();
      return view('backend.pages.ourproducts.regnumit.services.index')->with('itservice', $itservices); 
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
      
        return view('backend.pages.ourproducts.regnumit.services.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function itservice_store(Request $request)
    {
        


     $request->validate(
     [
    'title' => 'nullable|max:150',
    'description' => 'nullable',
     ],
     [
      'title.required'=>'please provide a itservice Title',
        'description.required'=>'please provide a itservice Description',
     
     ]

     );

    
    $itservice = new RegnumITService();

    $itservice->title=$request->title;
    $itservice->icon=$request->icon;
    $itservice->description=$request->description;
    
    $itservice->save();


    session()->flash('success','A New itservice Has Added Succesfully!!!');

    return redirect()->route('admin.itservice');


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function itservice_edit($id)
    {
        $itservice = RegnumITService::find($id);
        return view('backend.pages.ourproducts.regnumit.services.edit')->with('itservice',$itservice);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function itservice_update(Request $request, $id)
    {
        $request->validate(
      [
    'title' => 'nullable|max:150',
    'description' => 'nullable',
     ],
     [
      'title.required'=>'please provide a ITservice Title',
        'description.required'=>'please provide a ITservice Description',
     
     ]
 );


    $itservice = RegnumITService::find($id);

   
    $itservice->title=$request->title;
    $itservice->icon=$request->icon;
    $itservice->description=$request->description;
   
    $itservice->save();

      
       session()->flash('success','A New ITservice Has Updated Succesfully!!!');

       return redirect()->route('admin.itservice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function itservice_delete($id)
    {
      
      $itservice = RegnumITService::find($id);
      if(!is_null($itservice)){

        $itservice->delete();
        session()->flash('success','ITservice Has Deleted Succesfully!!!');

        return back();

      } 
    }
}
