<?php

namespace App\Http\Controllers\ourproducts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegnumITcontactus;

class AdminRegnumITContactusController extends Controller
{
      public function manage_itcontactus()
    {
      
      $itcontactus = RegnumITcontactus::orderBy('id','asc')->get();
      return view('backend.pages.ourproducts.regnumit.contactus.index')->with('itcontactus', $itcontactus); 
    }

    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function itcontactus_store(Request $request)
    {
        


     $request->validate(
      [
    'name' => 'required|max:150',
    'email'=>'required',
    'subject'=>'required',
    'message'=>'required',
     ],
     [
      'name.required'=>'please provide a Name',
      'email.required'=>'please provide a valid Email',
      'subject.required'=>'please provide a  subject',
      'message.required'=>'please provide a  message',
      
     ]

     );

    
    $itcontactus = new RegnumITcontactus();

    $itcontactus->name=$request->name;
    $itcontactus->email=$request->email;
    $itcontactus->subject=$request->subject;
    $itcontactus->message=$request->message;
   
    $itcontactus->save();


    session()->flash('success','A Message Has Send Succesfully!!!');

    return back();


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function itcontactus_edit($id)
    {
        $itcontactus = RegnumITcontactus::find($id);
        return view('backend.pages.ourproducts.regnumit.contactus.edit')->with('itcontactus',$itcontactus);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function itcontactus_update(Request $request, $id)
    {
        $request->validate(
      [
    'name' => 'required|max:150',
    'email'=>'required',
    'subject'=>'required',
    'message'=>'required',
     ],
     [
      'name.required'=>'please provide a Name',
      'email.required'=>'please provide a valid Email',
      'subject.required'=>'please provide a  subject',
      'message.required'=>'please provide a  message',
      
     ]
 );


    $itcontactus = RegnumITcontactus::find($id);

    $itcontactus->name=$request->name;
    $itcontactus->email=$request->email;
    $itcontactus->subject=$request->subject;
    $itcontactus->message=$request->message;
       
    $itcontactus->save();

      
       session()->flash('success','A New IT Contactus Has Updated Succesfully!!!');

       return redirect()->route('admin.itcontactus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function itcontactus_delete($id)
    {
      
      $itcontactus = RegnumITcontactus::find($id);
      if(!is_null($itcontactus)){

        $itcontactus->delete();
        session()->flash('success',' IT Contactus Has Deleted Succesfully!!!');

        return back();

      } 
    }
}
